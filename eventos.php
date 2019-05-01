<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Eventos</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/arielle.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/event.js"></script>
  <script src="js/effects.js"></script>
</head>
<body>
  <header><?php require_once 'header.php'; ?></header>
    <div class="principal">
      <div class="titulo_pagina font-titulo">
          <h1>Eventos</h1>
      </div>

      <div class="caixa_filtro_eventos">
        <form class="filtos_evento" action="index.html" method="post">
          <select class="filtro_evento" name="slctMes">
            <option value="">Filtrar por ano</option>
          </select>

          <select class="filtro_evento" name="slctMes">
            <option value="">Filtrar por mês</option>
          </select>
        </form>
      </div>

      <div class="body-eventos-informacoes">
          <div class="area-div-data">
            <div class="box-data">
              <img src="img/data.png" alt="data" title="data" class="data">
            </div>
          </div>

          <div class="area-div-conteudo">
            <div class="box-nome-evento">
              POP'S na escola Romeu Mecca
            </div>

            <div class="box-descricao-evento">
              A POP'S irá fazer um evento na escola Romeu Mecca, com apresentação dos produtos, palestras e sorteios.
              Uma excelente oportunidade para todos os alunos conhecerem os nossos produtos.
              Se você é aluno ou funcionário da escola Romeu Mecca, não perca!
            </div>

            <div class="localidade-evento">
              <div class="linha"> </div>
              <h6> ONDE:
                <span>Rua dos Cariocas, 22 - Itapevi</span>
              </h6>

              <h6> QUANDO:
                <span> 25 de out de 2019 </span>
              </h6>
            </div>
          </div>
      </div>

      <div class="body-eventos-informacoes">
          <div class="area-div-data">
            <div class="box-data">
              <img src="img/data.png" alt="data" title="data" class="data">
            </div>
          </div>

          <div class="area-div-conteudo">
            <div class="box-nome-evento">
              Palestra Planeta Sustentável POP'Soda Drink
            </div>

            <div class="box-descricao-evento">
              A POP'S irá fazer um evento cheio de palestras sobre o nosso programa Planeta Sustentável.
              Uma excelente oportunidade para você conhecer esse nosso programa.
              Não perca!
            </div>

            <div class="localidade-evento">
              <div class="linha"> </div>
              <h6> ONDE:
                <span> Rio de Janeiro</span>
              </h6>

              <h6> QUANDO:
                <span> 25 de out de 2019 </span>
              </h6>
            </div>
          </div>
      </div>

      <div class="body-eventos-informacoes">
          <div class="area-div-data">
            <div class="box-data">
              <img src="img/data.png" alt="data" title="data" class="data">
            </div>
          </div>

          <div class="area-div-conteudo">
            <div class="box-nome-evento">
              POP'S na escola Objetivo Alphaville
            </div>

            <div class="box-descricao-evento">
              A POP'S irá fazer um evento no Colégio Objetivo, com apresentação dos produtos, palestras e sorteios.
              Uma excelente oportunidade para todos os alunos conhecerem os nossos produtos.
              Se você é aluno ou funcionário da escola Romeu Mecca, não perca!
            </div>

            <div class="localidade-evento">
              <div class="linha"> </div>
              <h6> 
                <span>ONDE: Alameda Araguaia, 221</span>
              </h6>

              <h6> QUANDO:
                <span> 25 de out de 2019 </span>
              </h6>
            </div>
          </div>
      </div>
    </div>
  <footer><?php require_once 'footer.html'; ?></footer>
</body>
</html>
