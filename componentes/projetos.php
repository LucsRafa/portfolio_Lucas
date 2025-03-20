<?php

    $nome = "Lucas Ladislau";
    $saudacao = "Oi";
    $titulo = $saudacao . " Portfólio do " . $nome;
    $subtitulo = "Seja bem-vindo ao meu portfólio!";
    $ano = 2025;

    $projetos = [
        [
            "titulo" => "Meu portfólio",
            "finalizado" => true,
            "ano" => 2025,
            "descricao" => "Meu primeiro portfólio",
            "staff" => ["PHP", "HTML", "CSS", "JS"],
            "img" => "./img/port.png",
        ],
        [
            "titulo" => "SpeakerConverter",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Site desenvolvido no meu TCC, pra converter texto e imagens em audio",
            "staff" => ["Python", "HTML", "CSS", "JS", "django"],
            "img" => "./img/Speaker.png",
        ],
        [
            "titulo" => "Libreasy",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Sistema de gerenciamneto de bliblioteca",
            "staff" => ["Python", "HTML", "CSS", "JS", "django"],
            "img" => "./img/Libreasy_logo.jpg",
        ],
     
    ];
?>  

<?php foreach ($projetos as $projeto): ?>
<div class="flex items-center bg-slate-800 rounded-lg p-3">
          <div class="w-1/5 flex items-center justify-middle p-2 space-x-3">
            
        <img src="<?=$projeto['img']?>" class="h-42 rounded-md" />
        
        </div>
          <div class="w-4/5 space-y-3 ">
            <div class="flex gap-x-3 justify-between">
              <h3 class="font-semibold text-xl"> 
               
              <?php if($projeto['finalizado']):?>✅<?php endif;?>

                <?=$projeto['titulo']?> 

                <?php if($projeto['finalizado']):?>
                  
                  <span class="text-xs text-gray-400 opacity-50 italic">(Projeto finalizado em <?=$projeto["ano"]?>)</span>

                  <?php else: ?>

                    <span class="text-xs text-gray-400 opacity-50 italic">(em progresso)</span>

                  <?php endif;?>
              </h3>

              <div class="space-x-1"> 
<?php

             $colors=['fuchsia', 'lime', 'sky', 'rose', 'purple','amber','teal'];

               foreach ($projeto['staff'] as $posicao => $lenguage): 
               
?>
                <span class="bg-<?=$colors[$posicao]?>-400  text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-p1 font-semibold text-xs ">
                  
                <?=$lenguage?>
              
              
              
              </span>

                <?php endforeach; ?>
              </div>
            </div>
            <p class="leading-6">

                <?=$projeto['descricao']?>

            </p>
          </div>
        </div>
        <?php endforeach?>