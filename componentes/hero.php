<?php

$items = [

  ['href' => 'https://www.linkedin.com/in/lucas-oliveira-ladislau/', 'src' => './img/linkedin.png', 'alt' => 'linkedin logo'],
  ['href' => 'https://github.com/LucsRafa', 'src' => './img/git.png', 'alt' => 'GitHub logo'],

];

?>


<!--hero-->
<section class="flex gap-x-3">
  <!--descrição-->
  <div class="w-2/3">
    <h1 class="text-3xl font-bold">Olá me chamo Lucas Ladislau</h1>

    <p class="text-xl leading-6 mt-6">
      Falando um pouco sobre mim, sou desenvolvedor PHP, com conhecimentos
      em HTML e CSS e também com outras linguagens como Java e Python
    </p>

    <ul class="flex gap-x-3 mt-3">
    <?php foreach ($items as $item): ?>

<li>
  <a href="<?= $item['href'] ?>" target="_blank">

    <img class="h-8 hover:animate-bounce " src="<?=$item['src'] ?>" alt="<?= $item['alt'] ?>">

  </a>

</li>
<?php endforeach; ?>
    
    </ul>
  </div>

  <!--imagem-->
  <div class="w-1/3 flex items-center justify-center">
    <div>

      <img class="h-60  -mt-6 hover:animate-bounce" src="./img/eu.png" alt="Foto Lucas Ladislau">

    </div>
  </div>
</section>