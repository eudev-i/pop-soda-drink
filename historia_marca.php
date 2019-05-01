<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>História da marca</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/arielle.css">
        <link rel="stylesheet" type="text/css" href="css/historia_marca.css">
        <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/anuncios.css">
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

        <!-- Conteúdo chamativo e Título da página -->
        <div id="caixa_conteudo_chamativo" style="background-image: url(img/sobre.jpg);">
            <div id="conteudo_chamativo">
                <h1 style="color:white;"><strong>HISTÓRIA DA MARCA</strong></h1>
            </div>
        </div>

        <!-- Conteudo da pagina -->
        <div class="caixa_historia_marca centralizar_caixa">
            <div class="texto centralizar_caixa">
                <p>
                    Em 2018 Laura Krus fundou, juntamente com suas duas filhas,
                    a POP'Soda Drink, a qual é uma fornecedora em atacado de bebidas não alcoólicas.
                    <br>A POP’Soda Drink comprou, recentemente, algumas marcas antigas
                    de bebidas que saíram do mercado no século passado, com o objetivo de
                    restabelecer essas marcas no Brasil.
                    <br>Com isso se desenvolveu a ideia de estabelecer nessa marca o e-commerce
                    de bebidas não alcoólicas.
                    <br>A empresa POP’Soda Drink, trabalha no ramo do comércio de bebidas não alcoólicas,
                    está localizada na Av. Luiz Carlos Berrini, onde é destinado a toda a parte administrativa,
                    e há um galpão de armazenamento e logística em Tatuapé.
                </p>
            </div>
        </div>

        <footer>
            <?php require_once('footer.html') ?>
        </footer>
    </body>
</html>
