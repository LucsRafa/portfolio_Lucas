<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meu portfolio</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-slate-950 text-gray-200">

  <?php include('./componentes/header.php') ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">

   <?php include('./componentes/hero.php')?>
      
      <!--Projetos-->
      <section class="space-y-3 py-6" id="Projetos">
        <h2 class="text-2xl font-bold">Projetos Recentes</h2>

        <!--Projeto-->

        <?php include('./componentes/projetos.php')?>

      </section>

      
    </main>

    <footer class=" mx-auto max-w-screen-lg min-h-20 ">
      
      <div class="border-t  border-gray-400 pt-6 px-3 text-gray-400 text-sm">

        ©Copyright <?=date('Y')?>, desenvolvido por mim 👨🏾‍💻

      </div>

    
     
    </footer>
  </body>
</html>
