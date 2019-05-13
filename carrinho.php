<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/murilo.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/arielle.css">
    <link rel="stylesheet" type="text/css" href="css/carrinho.css">
    <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/effects.js"></script>
    <script src="js/event.js"></script>
  </head>
  <body>
    <header><?php require_once 'header.php'; ?></header>

        <!-- Título da página -->
        <div class="titulo_pagina font-titulo">
            <h1>Meu carrinho</h1>
        </div>

        <!-- caixa geral do conteúdo -->
        <div class="caixa_central_carrinho centralizar_caixa">

            <!-- caixa título das informações do produto -->
            <div class="caixa_inf_produto centralizar_caixa">
                <div class="inf_produto inf_nome_produto font-titulo inf_produto_texto">Produto</div>
                <div class="inf_produto inf_qtd_produto font-titulo inf_produto_texto centralizar_texto">Quantidade</div>
                <div class="inf_produto inf_valor_produto font-titulo inf_produto_texto centralizar_texto">Valor<br>Unitário</div>
                <div class="inf_produto inf_valor_produto font-titulo inf_produto_texto centralizar_texto">Valor<br>Total</div>
            </div>

            <!-- Div do carrinho / fazer while aqui -->
            <div class="caixa_carrinho centralizar_caixa">
                <!-- caixa da imagem do produto -->
                <div class="caixa_imagem_carrinho">
                    <img src="img/crush.jpg" width="150" height="150" title="Nome do Produto" alt="Imagem não encontrada">
                </div>
                <!-- Caixa nome e preço do produto -->
                <div class="caixa_nome_preco">
                        <p class="font-texto nome_produto">Fardo com 16 Crush - 350ml cada<p>
                        <p class="font-texto font-negrito">R$ 30,40</p>
                </div>
                <!-- Caixa da quantidade do produto -->
                <div class="caixa_qtd">
                    <div class="caixa_botao_qtd">
                        <input class="botao_qtd" type="button" name="btnMenos" id="btnMenos" value="-">
                    </div>
                    <div class="caixa_quantidade">
                        <input class="quantidade" type="text" name="txtQuantidade" id="txtQuantidade">
                    </div>
                    <div class="caixa_botao_qtd">
                        <input class="botao_qtd" type="button" name="btnMais" id="btnMais" value="+">
                    </div>
                </div>

                <div class="caixa_valor borda_caixa_valor">
                    <p>R$ 30,40</p>
                </div>
                <div class="caixa_valor ">
                    <p>R$ 30,40</p>
                </div>

            </div>

            <!-- DIV SUB TOTAL -->
              <div class="div_subtotal">
                    <p>Total: <span class="font-negrito">R$ 30,40</span> </p>
                    <input type="button" value="Continuar" id="btnContinuar" name="btnContinuar">
                </div>
        </div>
        <footer><?php require_once 'footer.html'; ?></footer>
    </body>
</html>
