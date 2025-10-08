export function showBackendErrors(errors, toast) {
  if (!errors) return;

  const messages = Array.isArray(errors)
    ? errors.map((e) => `→ ${e.message ?? e}`).join('\n')
    : errors;

  toast.add({
    severity: 'error',
    summary: 'Erros encontrados',
    detail: messages,
    life: 600000,
  });
}
