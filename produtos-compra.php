  <!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <title>Produtos</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/murilo.css">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/arielle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="js/jquery.js"></script>
      <script src="js/event.js"></script>
    </head>
    <body>
      <header><?php require_once 'header.php'; ?></header>

      <div class="principal">
        <div class="menu_filtos-produtos">
            <form action="index.html" method="post">
              <h3 class"title-menu-produtos">
                <img id="direita" src="img/triangulo.png" alt="">
                 Marca:
              </h3>
              <select class="input-select" name=""> </select>

              <h3 class"title-menu-produtos">
                <img id="direita" src="img/triangulo.png" alt="">
                 Preço:
              </h3>
              <select class="input-select" name=""> </select>
            </form>
        </div>
    <!--
        <div class="linha-divisa">

        </div> -->

        <div class="area-produtos">
          <a href="carrinho.php">
            <div class="carrinho-compras"></div>
          </a>

          <div class="section-six-products">
            <div class="section-six-image-products centralizar_elemento">
              <img src="img/crush.jpg" alt="Produto">
            </div>
            <div class="section-six-text-products">
              <h2>Fardo com 16 Crush - 350ml cada</h2>
              <p>R$30,40</p>
            </div>
            <div class="section-six-button">
              <input type="button" name="" value="Adicionar o fardo">
            </div>
        </div>

        <div class="section-six-products">
          <div class="section-six-image-products centralizar_elemento">
            <img src="img/gini.jpg" alt="Produto">
          </div>
          <div class="section-six-text-products">
            <h2>Fardo com 16 Gini - 350ml cada</h2>
            <p>R$30,40</p>
          </div>
          <div class="section-six-button">
            <input type="button" name="" value="Adicionar o fardo">
          </div>
      </div>

      <div class="section-six-products">
          <div class="section-six-image-products centralizar_elemento">
            <img src="img/7up1.jpg" alt="Produto">
          </div>
          <div class="section-six-text-products">
            <h2>Fardo com 16 7UP - 350ml cada</h2>
            <p>R$30,40</p>
          </div>
          <div class="section-six-button">
            <input type="button" name="" value="Adicionar o fardo">
          </div>
        </div>
      </div>
      </body>
  </html>
