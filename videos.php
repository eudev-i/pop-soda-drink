<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Vídeos</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/videos.css">
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
        <!-- header -->
        <header>
           <?php require_once('header.php') ?>
        </header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Vídeos</h1>
        </div>

        <!--- caixa video -->
        <div class="caixa_central_video caixa_aumentar">
            <!-- caixa que guarda os videos -->
            <div class="caixa_principal_video">
                <!-- caixa do video que contém titulo e o vídeo box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);-->
                <div class="caixa_video div_esquerda caixa_aumentar">
                    <div class="titulo_video caixa_aumentar">
                        <h1>Comercial da 7up</h1>
                    </div>
                    <video autoplay loop class="video">
                        <source src="videos/videoplayback.mp4" type="video/mp4">
                    </video>
                </div>
                

            </div>
        </div>
        <footer> <?php require_once('footer.html')?> </footer> 
    </body>

</html>
