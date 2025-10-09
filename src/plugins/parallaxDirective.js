function clamp(n, min, max) {
  return Math.min(max, Math.max(min, n));
}

function getOptions(binding) {
  const v = binding?.value || {};
  return {
    speed: Number(v.speed ?? 30), // px at extremes
    axis: v.axis === 'x' ? 'x' : 'y',
    reverse: Boolean(v.reverse ?? false),
    rootMargin: v.rootMargin || '0px 0px',
  };
}

function applyTransform(el, offset, axis) {
  const t = axis === 'x' ? `translate3d(${offset}px, 0, 0)` : `translate3d(0, ${offset}px, 0)`;
  el.style.transform = t;
}

function createUpdater(el, state) {
  return function update() {
    const vh = window.innerHeight || 0;
    const rect = el.getBoundingClientRect();
    // progress based on element center within viewport [0..1]
    const center = rect.top + rect.height / 2;
    const progress = clamp(center / (vh || 1), 0, 1);
    // map progress to [-1..1]
    const span = (0.5 - progress) * 2; // -1 at bottom, +1 at top
    let offset = span * state.opts.speed;
    if (state.opts.reverse) offset = -offset;
    applyTransform(el, Math.round(offset), state.opts.axis);
  };
}

const ParallaxDirective = {
  mounted(el, binding) {
    const opts = getOptions(binding);
    el.__parallax__ = {
      opts,
      active: false,
      ticking: false,
      raf: 0,
      cleanup: null,
      update: null,
      io: null,
      onScroll: null,
      onResize: null,
    };

    // performance hint
    el.style.willChange = 'transform';

    // Respect reduced motion
    const prefersReduced = typeof window !== 'undefined' &&
      typeof window.matchMedia === 'function' &&
      window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) {
      el.style.transform = 'none';
      return; // skip observers/listeners
    }

    const state = el.__parallax__;
    state.update = createUpdater(el, state);

    const tick = () => {
      state.ticking = false;
      state.update();
    };

    state.onScroll = () => {
      if (!state.active) return;
      if (!state.ticking) {
        state.ticking = true;
        state.raf = requestAnimationFrame(tick);
      }
    };

    state.onResize = () => {
      state.update();
    };

    // IntersectionObserver to attach/detach listeners only when visible
    state.io = new IntersectionObserver(
      (entries) => {
        const entry = entries[0];
        if (entry && entry.isIntersecting) {
          state.active = true;
          window.addEventListener('scroll', state.onScroll, { passive: true });
          window.addEventListener('resize', state.onResize, { passive: true });
          state.update();
        } else {
          state.active = false;
          window.removeEventListener('scroll', state.onScroll);
          window.removeEventListener('resize', state.onResize);
        }
      },
      { root: null, rootMargin: opts.rootMargin, threshold: [0, 0.1, 0.5, 1] }
    );

    state.io.observe(el);
    // initial render
    state.update();
  },

  updated(el, binding) {
    const state = el.__parallax__;
    if (!state) return;
    state.opts = getOptions(binding);
    state.update && state.update();
  },

  unmounted(el) {
    const state = el.__parallax__;
    if (!state) return;
    window.removeEventListener('scroll', state.onScroll);
    window.removeEventListener('resize', state.onResize);
    if (state.io) state.io.disconnect();
    if (state.raf) cancelAnimationFrame(state.raf);
    delete el.__parallax__;
  },
};

export default ParallaxDirective;
