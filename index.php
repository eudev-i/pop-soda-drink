<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>Index</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/murilo.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/arielle.css">
  <link rel="stylesheet" href="css/loading.css">
  <link rel="stylesheet" href="css/effects.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
   <script src="js/effects.js"></script>
</head>
<body>

      <header>
        <?php require_once 'header.php'; ?>
      </header>
    <div id="loading">
     <div id="loader"></div>
    </div>
      <div id="index_principal" style="display:none;">
      <div id="inicio" class="centralizarY">
        <div id="conteudo_inicio" class="centralizarX">
          <div id="titulo_inicio" class="fadeInLeft"  style="font-family:Helvetica;">
            Já conhece os produtos da POP'S?
          </div>
          <div id="texto_inicio" class="fadeInRight">
             A POP'Soda Drink é uma fornecedora de bebidas não alcoólicas, como: refrigerantes, sucos naturais, polpas e água tônica. Confira todos os benefícios que você terá ao navegar o nosso site!
          </div>
        </div>
      </div>
      <!-- SECTION 6 -->
      <section class="section-six">
        <h1 class="titulo_sections">Produtos em destaque</h1>
        <div class="section-six-conteudo centralizar_elemento">

          <div id="box_products" class="section-six-div-products fadeInTop">
            <div class="section-six-products">
              <div class="section-six-image-products centralizar_elemento">
                <img src="img/7up1.jpg" alt="Produto">
              </div>
              <div class="section-six-text-products">
                <h2>Fardo com 16 7UP - 350ml cada</h2>
                <p>R$30,40</p>
              </div>

              <div class="section-six-button">
                <input type="button" value="Adicionar o fardo">
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
                <input type="button" value="Adicionar o fardo">
              </div>

            </div>
            <div class="section-six-products">
              <div class="section-six-image-products centralizar_elemento">
                <img src="img/crush.jpg" alt="Produto">
              </div>
              <div class="section-six-text-products">
                <h2>Fardo com 16 Crush - 350ml cada</h2>
                <p>R$30,40</p>
              </div>

              <div class="section-six-button">
                <input type="button" value="Adicionar o fardo">
              </div>

            </div>
            <div class="section-six-products">
              <div class="section-six-image-products centralizar_elemento">
                <img src="img/mirinda.jpg" alt="Produto">
              </div>
              <div class="section-six-text-products">
                <h2>Fardo com 16 Crush - 350ml cada</h2>
                <p>R$30,40</p>
              </div>

              <div class="section-six-button">
                <input type="button" value="Adicionar o fardo">
              </div>

            </div>
          </div>
        </div>

      </section>
      <!-- SECTION 2 -->
      <section class="section-two">
        <h1 class="titulo_sections">Participe das enquetes da POP'S</h1>
        <div id="enquetes" class="div-geral-section-imagens centralizar_elemento fadeInTop">
          <div class="imagens-section-two centralizarY">
            <div  class="caixa_enquete centralizar_elemento">
              <div class="titulo_enquete">Qual é o seu refrigerante favorito?</div>
              <div class="itens_enquete centralizar_elemento">
                <input type="checkbox" id="1">
                <label for="1">7up</label>
                <br><br>
                <input type="checkbox" id="2">
                <label for="2">Gini</label>
                <br><br>
                <input type="checkbox" id="3">
                <label for="3">Crush</label>
                <br><br>
                <input type="checkbox" id="4">
                <label for="4">Grapette</label>
              </div>
              <input type="submit" class="btn_votar" value="Votar">
            </div>
          </div>
          <div class="imagens-section-two centralizarY">
            <div  class="caixa_enquete centralizar_elemento">
              <div class="titulo_enquete">Qual é o seu sabor de suco favorito?</div>
              <div class="itens_enquete centralizar_elemento">
                <input type="checkbox" id="5">
                <label for="1">Laranja</label>
                <br><br>
                <input type="checkbox" id="6">
                <label for="2">Uva</label>
                <br><br>
                <input type="checkbox" id="7">
                <label for="3">Morango</label>
                <br><br>
                <input type="checkbox" id="8">
                <label for="4">Maracujá</label>
              </div>
              <input type="submit" class="btn_votar" value="Votar">
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION 3 -->
      <section class="section-three">
        <h1 class="titulo_sections">Promoção do mês</h1>
        <div id="promo" class="section-three-conteudo centralizar_elemento fadeInTop">
          <div class="section-three-conteudo-infomarcao">
            <div class="section-three-conteudo-titulo">Ganhe 1 viagem para a Jamaica</div>
            <div class="section-three-conteudo-texto">
              Quer viajar para a terra do reggae e conhecer seus rios, montanhas, 
              cascatas e praias paradisíacas de areia branca com mais 3 amigos?
            </div>
            <button type="button">
              Regulamento
            </button>


          </div>
          <div class="section-three-conteudo-imagem centralizarY">
            <img class="centralizar_elemento" src="img/7upPromocao.jpg" alt="Promoção">
          </div>
        </div>
      </section>

      <!-- SECTION 4 -->
      <section class="section-four">
        <h1 class="titulo_sections">Fique de olho na POP'S</h1>
        <div  id="news" class="section-four-conteudo centralizar_elemento fadeInLeft">
          <div class="caixa_noticia ">
            <div class="caixa_noticia-imagem centralizarY">
              <img class="centralizar_elemento" src="img/noticias.png" alt="Notícia">
            </div>
            <div class="caixa_noticia-infomarcao">
              <div class="informacoes">
                <div class="caixa_noticia-titulo">
                  O refrigerante Grapette chega ao Brasil
                </div>
                <div class="caixa_noticia-texto">
                O refrigerante Grapette chegou ao Brasil, em 1948, através da Companhia de 
                Refrigerantes Guanabara, sediada no Estado do Rio de Janeiro.
                <br>Lembrado pelos consumidores até os dias de hoje, o slogan 
                “Quem bebe Grapette repete” confirmou a identidade do produto como 
                delicioso e inesquecível, sendo considerado um dos marcos de comunicação.
                </div>
                <div class="caixa_noticia-data">
                  30/03/2019
                </div>
              </div>
            </div>
          </div>
          <div class="caixa_noticia-botao">
            <button type="button" name="button">
              Mais notícias
            </button>
          </div>
          <div class="caixa_email centralizar_elemento">
            <div class="caixa_input">
              <label for="txt_email" style="font-family:Helvetica;">Deseja receber emails da POP'S?</label>
              <input type="text" id="txt_email" name="txt_email">
            </div>
            <div class="caixa_botao_email">
              <button type="button" name="button">Enviar</button>
            </div>
          </div>
        </div>
      </section>

      <!-- SECTION 5 -->
      <section class="section-five">
        <h1 class="titulo_sections">POP'S Ecológico</h1>
        <div id="sustentavel" class="section-five-conteudo centralizar_elemento fadeInTop">
          <div class="caixa_sustentavel-imagem centralizarY">
            <img class="centralizar_elemento" src="img/ecologia.jpg" alt="Ecológico">
          </div>
          <div class="caixa_sustentavel-infomarcao">

            <div class="caixa_sustentavel-titulo">
              Planeta Sustentável
            </div>
            <div class="caixa_sustentavel-texto">
            Com o consumo excessivo e a expansão industrial, o planeta começou a ficar “doente”. 
            A degradação dos recursos naturais finitos pode trazer um futuro desastroso para a 
            humanidade, por isso a necessidade de um planeta sustentável, que garanta vida digna 
            às próximas gerações.
            <br>Ter um planeta sustentável exige o uso racional dos recursos naturais e a preservação
             das florestas, rios e ecossistemas. Garantir um planeta mais sustentável é obrigação de toda a sociedade e dos governos.
             <br>Para isso, precisamos usar as fontes de energia mais econômicas e menos poluentes, preservar as fontes de água e reutilizar 
             a água da chuva, tratar os resíduos e esgotos, reciclar e buscar uma economia verde.
            </div>
          </div>
        </div>
      </section>
      <section class="section-eight">
        <h1 class="titulo_sections">Comentários POP'S</h1>
        <div id="comments" class="section-eight-conteudo centralizar_elemento">
          <div class="caixa_comentario centralizar_elemento">
            <div class="section-eight-usuario">
              <div class="section-eight-usuario-imagem centralizarY">
                <img class="centralizar_elemento" src="img/icon_user.png" alt="Usuário">
              </div>
              <div class="section-eight-usuario-nome">
                Vitoria Gonçalves
              </div>
              <div class="section-eight-usuario-comentario">
                Fui no evento da POP'S no Colégio Morumbi e foi incrivel. A palestra de planeta sustentável e 
                a divulgação dos produtos! Agora só tomo produtos fornecidos pela POP'S haha.
              </div>
            </div>
            <div class="section-eight-resposta">
              <div class="caixa_input">
                <label for="txt_resposta">Resposta</label>
                <input type="text" id="txt_resposta" name="txt_resposta">
              </div>
              <div class="caixa_botao_email">
                <button type="button" name="button">Enviar</button>
              </div>
            </div>
          </div>
          <div class="caixa_comentario centralizar_elemento">
            <div class="section-eight-usuario">
              <div class="section-eight-usuario-imagem centralizarY">
                <img class="centralizar_elemento" src="img/icon_user.png" alt="Usuário">
              </div>
              <div class="section-eight-usuario-nome">
                Arielle Mattos
              </div>
              <div class="section-eight-usuario-comentario">
                Fui ganhadora da última promoção da POP'S e ganhei R$ 500,00 em produtos!!
              </div>
            </div>
            <div class="section-eight-resposta">
              <div class="caixa_input">
                <label for="txt_resposta1">Resposta</label>
                <input type="text" id="txt_resposta1" name="txt_resposta1">
              </div>
              <div class="caixa_botao_email">
                <button type="button" name="button">Enviar</button>
              </div>
            </div>
          </div>
        </div>

    </section>
    <footer>
      <?php require_once 'footer.html'; ?>
    </footer>
      </div>
</body>
</html>
