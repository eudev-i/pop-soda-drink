<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Notícias</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/noticias.css">
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
        <header><?php require_once 'header.php';?></header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Notícias</h1>
        </div>

        <!-- caixa que guarda todo o conteudo da página -->
        <div id="caixa_geral_noticias">
            <!-- caixa que guarda todas as noticias -->
            <div class="caixa_principal_noticias">
                <!-- caixa que contém imagem, titulo, texto e data da notícia -->
                <div class="imagem_noticias">
                    <img src="img/premiacao1.jpg" width="200" height="200" title="ola" alt="Imagem não encontrada">
                </div>
                <div class="caixa_titulo_noticias">
                    <h1 class="titulo_noticias padding_noticias">POP'Soda Drink ganha o prêmio de melhor e-commerce de bebidas não alcoólicas</h1>
                    <p class="texto_noticias padding_noticias">
                        A POP'Soda Drink ganha a premiação de melhor e-commerce de bebidas não alcoólicas na conferência nacional 
                        de e-commerce de 2019.
                    </p>
                    <p class="data_noticias">
                        24/03/2019
                    </p>
                </div>
            </div>

            <div class="caixa_principal_noticias">
                <!-- caixa que contém imagem, titulo, texto e data da notícia -->
                <div class="imagem_noticias">
                    <img src="img/premiacao2.jpg" width="200" height="200" title="ola" alt="Imagem não encontrada">
                </div>
                <div class="caixa_titulo_noticias">
                    <h1 class="titulo_noticias padding_noticias">POP'Soda Drink participa da conferência internacional de bebidas</h1>
                    <p class="texto_noticias padding_noticias">
                    O quadro de funcionários da POP'Soda Drink participa da conferência internacional de bebidas em 2018
                    de e-commerce de 2019.
                    </p>
                    <p class="data_noticias">
                        24/03/2019
                    </p>
                </div>
            </div>

            <div class="caixa_principal_noticias">
                <!-- caixa que contém imagem, titulo, texto e data da notícia -->
                <div class="imagem_noticias">
                    <img src="img/premiacao4.jpg" width="200" height="200" title="ola" alt="Imagem não encontrada">
                </div>
                <div class="caixa_titulo_noticias">
                    <h1 class="titulo_noticias padding_noticias">POP'Soda Drink organiza evento com os diretores dos maiores estabelecimentos de bebidas</h1>
                    <p class="texto_noticias padding_noticias">
                    A POP'Soda Drink organiza eventos com os diretores das maiores empresas de supermercado. 
                    Trazendo coisas novas ao publica. Novidades estão por vir!
                    </p>
                    <p class="data_noticias">
                        <span>24/03/2019</span>
                    </p>
                </div>
            </div>
            <div class="caixa_principal_noticias">
                <!-- caixa que contém imagem, titulo, texto e data da notícia -->
                <div class="imagem_noticias">
                    <img src="img/premiacao1.jpg" width="200" height="200" title="ola" alt="Imagem não encontrada">
                </div>
                <div class="caixa_titulo_noticias">
                    <h1 class="titulo_noticias padding_noticias">POP'Soda Drink ganha o prêmio de melhor e-commerce de bebidas não alcoólicas</h1>
                    <p class="texto_noticias padding_noticias">
                        A POP'Soda Drink ganha a premiação de melhor e-commerce de bebidas não alcoólicas na conferência nacional 
                        de e-commerce de 2019.
                    </p>
                    <p class="data_noticias">
                        24/03/2019
                    </p>
                </div>
            </div>
        </div>

        <!-- footer -->
        <footer> <?php require_once('footer.html')?></footer>
    </body>
</html>
