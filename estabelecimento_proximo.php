<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>POP'S - Estabelecimento Próximo</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estabelecimento_proximo.css">
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
         <?php require_once('header.php')?>
       </header>
        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Encontre um estabelecimento próximo a você!</h1>
        </div>

        <div class="caixa_central_est_proximo">
            <form name="frmEstProximo" action="estabelecimento_php" method="POST">
            <!-- Caixa dos inputs -->
            <div class="caixa_input_est_proximo">
                <input class="font-titulo" type="text" name="txtEstProximo" id="txtEstProximo">
                <input class="font-titulo" type="button" value="Pesquisar">
            </div>

            <!-- caixa do mapa -->
            <div id="caixa_mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1030520848626!2d-46.90027078447631!3d-23.52879566627676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0154039cb55b%3A0xadf34a919f156950!2sSENAI+Jandira+-+Professor+Vicente+Amato!5e0!3m2!1spt-BR!2sbr!4v1553774027908" width="848" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </form>
        </div>

        <footer> <?php require_once('footer.html')?> </footer>

    </body>
</html>
