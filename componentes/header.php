<?php

$items = [

  ['href' => "#Projetos", "texto" => "Projetos"],
  ['href' => "", "texto" => "Github"],
  ['href' => "", "texto" => "Email"],
  ['href' => "", "texto" => "linkedin"],

];

?>
<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <!--logo-->
  <div class="font-bold text-xl text-cyan-600">👨🏾‍💻Meu portifolio...</div>

  <!--links-->
  <div class="">
    <ul class="flex gap-x-8 font-medium">

      <?php foreach ($items as $item): ?>
        <li><a href="<?= $item['href'] ?>" class="hover:underline">
            <?= $item['texto'] ?>
          </a></li>
      <?php endforeach; ?>


    </ul>
  </div>
</header>