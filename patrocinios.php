<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Nossos Patrocínios</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/patrocinios.css">
        <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CHAMANDO O JQUERY -->
        <script src="js/jquery.js">
        </script>
        <!-- CHAMANDO O ARQUIVO DE EVENTOS EM JQUERY -->
        <script src="js/event.js">
        </script>
         <script src="js/effects.js"></script>
    </head>
    <body>
      <header>
        <?php require_once('header.php');?>
      </header>

        <!-- Título da página -->
        <div id="conteudo_chamativo">
            <h1 style="color:black;"><strong>NOSSOS PATROCÍNIOS</strong></h1>
        </div>

        <!-- caixa central que ocupa 100% de largura -->
        <div id="caixa_central_imagens">
            <!-- caixa da imagem -->
            <div class="caixa_imagem">
                <img src="img/voleiHinode.jpg" width="330" height="250" title="volei Hinode" alt="Imagem não encontrada" class="imgPatrocinio">
                <div class="descricaoPatrocinio">
                  Time de vôlei: Hinode Barueri no campeonato da Superliga
                </div>
            </div>

            <div class="caixa_imagem">
                <img src="img/basqueteRioJaneiro.jpg" width="330" height="250" title="basquete Rio de Janeiro" alt="Imagem não encontrada" class="imgPatrocinio">
                <div class="descricaoPatrocinio">
                  Time de vôlei: Hinode Barueri no campeonato da Superliga
                </div>
            </div>

            <div class="caixa_imagem">
                <img src="img/corrida.jpg" width="330" height="250" title="corrida São Silvestre" alt="Imagem não encontrada" class="imgPatrocinio">
                <div class="descricaoPatrocinio">
                  Time de vôlei: Hinode Barueri no campeonato da Superliga
                </div>
            </div>

            <div class="caixa_imagem">
                <img src="img/basqueteRioJaneiro.jpg" width="330" height="250" title="basquete Rio de Janeiro" alt="Imagem não encontrada" class="imgPatrocinio">
                <div class="descricaoPatrocinio">
                  Time de vôlei: Hinode Barueri no campeonato da Superliga
                </div>
            </div>
        </div>

        <!-- FOOTER -->
      <footer>  <?php require_once('footer.html')?> </footer>
    </body>
</html>
