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
    <script src="js/effects.js"></script>
  </head>
  <body>
    <header><?php require_once 'header.php'; ?></header>
    <div class="teste_produto">
      <div class="principal">
        <div class="menu_filtos-produtos">
            <form action="index.html" method="post">
              <h3 class="title-menu-produtos">
                 Marca:
              </h3>
              <select class="input-select" name="selectfiltro"> </select>

              <h3 class="title-menu-produtos">
                 Preço:
              </h3>
              <select class="input-select" name="selectfiltro"> </select>

              <h3 class="title-menu-produtos">
                 Quantidade:
              </h3>
              <select class="input-select" name="selectfiltro"> </select>
            </form>
        </div>

        <div class="area-produtos">
          <div class="section-six-products">
            <div class="section-six-image-products centralizar_elemento">
              <img src="img/gini.jpg" alt="Produto">
            </div>
            <div class="section-six-text-products">
              <h2>Fardo com 16 Gini - 350ml cada</h2>
            </div>

            <div class="section-six-button">
              <input type="button" name="btn_tabelanutricional" value="Tabela nutrional">
            </div>

          </div>

          <div class="section-six-products">
            <div class="section-six-image-products centralizar_elemento">
              <img src="img/7up1.jpg" alt="Produto">
            </div>
            <div class="section-six-text-products">
              <h2>Fardo com 16 7UP - 350ml cada</h2>
            </div>

            <div class="section-six-button">
              <input type="button" name="btn_tabelanutricional" value="Tabela nutrional">
            </div>

          </div>

          <div class="section-six-products">
            <div class="section-six-image-products centralizar_elemento">
              <img src="img/crush.jpg" alt="Produto">
            </div>
            <div class="section-six-text-products">
              <h2>Fardo com 16 Crush - 350ml cada</h2>
            </div>

            <div class="section-six-button">
              <input type="button" name="btn_tabelanutricional" value="Tabela nutrional">
            </div>

          </div>
        </div>
      </div>
    </div>
    <footer><?php require_once 'footer.html'; ?></footer>
  </body>
</html>
