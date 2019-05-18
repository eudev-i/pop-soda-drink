<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>POP'S - Painel Pessoa Jurídica</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <link rel="stylesheet" type="text/css" href="css/arielle.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/painel_pessoa_juridica.css">
        <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
      
        <!-- CHAMANDO O JQUERY -->
        <script src="js/jquery.js">
        </script>
        <!-- CHAMANDO O ARQUIVO DE EVENTOS EM JQUERY -->
        <script src="js/event.js">
        </script>
        <!-- CHAMANDO O ARQUIVO DE REQUESTS EM JQUERY -->
        <script src="js/ws_requests.js">
        </script>
        <script>
        $(document).ready(function(){
          //SELECIONAR DADOS VIA COOKIE
          getAllDataPJ();
          //SELECIONAR DADOS DA LISTA DE PERFIL
          getPerfilData();
          //CHAMAR MODAL
          $('#Anuncio').click(function(){
            callModal('modal-anuncio.php');
            $('#container').fadeIn(600);
          });
          //CHAMAR MODAL
        $('.edit').on("click", function(){
            callModal('modal-anuncio.php');
            $('#container').fadeIn(600);
        });
          
          //CHAMAR MODAL
          $('#btnNovoAcesso').click(function(){
            callModal('modal_perfil_secundario.php');
            $('#container').fadeIn(600);
          });
        });
        function callModal(_url){
            $.ajax({
              type: "GET",
              url: _url,
              success: function(dados){
                $("#modal").html(dados)
              }
            });
          }
        </script>
        
        
    </head>

    <body>

      <div id="container">
        <div id="modal">

        </div>
      </div>

      <header>
        
<div id="container">
  <div id="modal">

  </div>
</div>
<div class="login">

</div>
<div id="caixa_cabecalho" class="centralizarX">
  <img src="img/logo.png" alt="Logo">
</div>
<nav>
  <div class="navbar centralizarX centralizarY">
  <a href="index.php">Home</a>
  <a href="produtos-compra.php">Produtos</a>
  <a href="promocoes.php">Promoções</a>
  <a href="loja.php">Loja Pop'S</a>
  <div class="dropdown">
    <button class="dropbtn">Eventos e Anúncios
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="anuncios.php">Anúncios</a>
      <a href="eventos.php">Eventos</a>
      <a href="pops_escola.php">POP'S nas Escolas</a>
      <a href="patrocinios.php">Nossos Patrocínios</a>
      <a href="videos.php">Vídeos</a>
      <a href="noticias.php">Notícias</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Estabelecimentos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="estabelecimento_proximo.php">Estabelecimentos Próximos</a>
      <a href="cred_est_comerciais.php">Credenciamento de Estabelecimentos Comerciais</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">Pop'S
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="sobre.php">Sobre a Pop'S</a>
      <a href="historia_marca.php">História da Marca</a>
    </div>
  </div>
  <a href="fale_conosco.php">Entre em Contato</a>
</div>
</nav>

      </header>


        <!-- caixa central que ocupa 1200px de largura -->
        <div class="caixa_central_pj centralizar_caixa caixa_crescer">
            <div class="caixa_painel_pj centralizar_caixa">

                <!-- Caixa identidade -->
                <div class="caixa_identidade_pj centralizar_caixa">
                    <div class="caixa_imagem_pj centralizar_caixa">
                        <img id='foto' width="200" height="200" alt="ola" title="ola">
                    </div>
                    <!-- Razão Social -->
                    <p class="centralizar_texto font-titulo font-negrito identidade_pj_font" id='razao_social'></p>
                    <p class="centralizar_texto font-texto" id='responsavel'></p>
                    <p class="centralizar_texto font-texto" id='user'></p>
                </div>
                
                <!-- Caixa dos dados -->
                <div class="caixa_geral_dados caixa_crescer centralizar_caixa">
                    <div class="grupo_form caixa_crescer elemento_esquerda">
                        <!-- CNPJ -->
                        <div class="texto_dados">
                            <p class="font-negrito font-texto">CNPJ: </p><p class="font-texto" id='cnpj'></p>
                        </div>
                        <!-- Email -->
                        <div class="texto_dados caixa_crescer">
                            <p class="font-negrito font-texto">Email: </p><p class="font-texto"  id='email'></p>
                        </div>
                        <!-- Logradouro -->
                        <div class="texto_dados caixa_crescer">
                            <p class="font-negrito font-texto">Logradouro: </p><p class="font-texto"  id='logradouro'></p>
                        </div>
                        <!-- Bairro -->
                        <div class="texto_dados caixa_crescer">
                            <p class="font-negrito font-texto">Bairro: </p><p class="font-texto"  id='bairro'> </p>
                        </div>
                    </div>
                    <!-- grupo form 2 -->
                    <div class="grupo_form caixa_crescer elemento_direita">
                        <!-- Nome fantasia -->
                        <div class="texto_dados caixa_crescer">
                            <p class="font-negrito font-texto">Nome Fantasia: </p><p class="font-texto"  id='nom_fantasia'></p>
                        </div>
                        <!-- Telefone-->
                        <div class="texto_dados caixa_crescer">
                            <p class="font-negrito font-texto">Telefone: </p><p class="font-texto"  id='tel'></p>
                        </div>
                        <!-- Número e CEP-->
                        <div class="texto_dados caixa_crescer">
                            <!-- Número -->
                            <div class="caixa_num_cep elemento_esquerda caixa_crescer">
                                <p class="font-negrito font-texto">Nº: </p><p class="font-texto"  id='num'></p>
                            </div>
                            <!-- CEP -->
                            <div class="caixa_num_cep elemento_direita caixa_crescer">
                                <p class="font-negrito font-texto">CEP: </p><p class="font-texto"  id='cep'></p>
                            </div>
                        </div>
                        <!-- Estado-->
                        <div class="texto_dados caixa_crescer">
                            <p class="font-negrito font-texto">Estado: </p><p class="font-texto"  id='uf'></p>
                        </div>
                    </div>
                </div>

                <!-- Criar anúncios -->
                <div class="caixa_criar_anuncios centralizar_caixa">
                    <h1 class="font-titulo font-negrito identidade_pj_font"></h1>
                    <div class="font-texto botao_padrao_pj" id="Anuncio">
                      Criar anúncio
                    </div>
                    <div id="container_card_anuncio"></div>
                  
                </div>

                <!-- Acesso -->
                <div class="caixa_acesso centralizar_caixa">
                    
                        <!-- caixa que contem um h1 e o botao de add novo acesso -->
                        <div class="caixa_botao_acesso">
                            <h1 class="font-titulo font-negrito identidade_pj_font">Acesso</h1>
                            <input class="font-texto botao_padrao_pj" type="button" value="Adicionar novo acesso" name="btnNovoAcesso" id="btnNovoAcesso">
                        </div>
                        <!-- caixa dos acessos adicionados -->
                        
                            <h1 class="font-titulo font-negrito">Acessos adicionados:</h1>
                            <div id="container_perfil"></div>
                        
                    </div>

                <!-- Meus Pedidos -->
                <div class="caixa_meus_pedidos centralizar_caixa caixa_crescer">
                    <h1 class="font-titulo font-negrito identidade_pj_font">Meus Pedidos</h1>
                    <!-- caixa do título -->
                    <div class="caixa_titulo_mp">
                        <!-- Número do pedido -->
                        <div class="titulos_mp elemento_esquerda font-negrito font-titulo">
                            <p>Número do Pedido</p>
                        </div>
                        <!-- Número do pedido -->
                        <div class="titulos_mp elemento_esquerda font-negrito font-titulo">
                            <p>Total</p>
                        </div>
                        <!-- Número do pedido -->
                        <div class="titulos_mp elemento_esquerda font-negrito font-titulo">
                            <p>Status</p>
                        </div>
                    </div>

                    <!-- Caixa resultado -->
                    <div class="caixa_titulo_mp">
                        <!-- Número do pedido -->
                        <div class="titulos_mp elemento_esquerda ont-titulos_res">
                            <p class="">Número do Pedido</p>
                        </div>
                        <!-- Número do pedido -->
                        <div class="titulos_mp elemento_esquerda ont-titulos_res">
                            <p>Total</p>
                        </div>
                        <!-- Número do pedido -->
                        <div class="titulos_mp elemento_esquerda ont-titulos_res">
                            <p>Status</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <footer> <?php require_once('footer.html')?> </footer>
      
        <script>
                $(document).ready(function(){
                  //SELECIONAR DADOS VIA COOKIE
                  getAllData();
        
                  //SELECIONAR DADOS DA LISTA DE PERFIL
                  getPerfilData();
        
                  //SELECIONAR DADOS DE ANÚNCIOS
                  getAdData();
        
                  //CHAMAR MODAL
                  $('#Anuncio').click(function(){
                    callModal('modal-anuncio.php');
                    $('#container').fadeIn(600);
        
                  });
        
                  //CHAMAR MODAL
                 $('.edit').on("click", function(){
                    callModal('modal-anuncio.php');
                    $('#container').fadeIn(600);
        
                 });
        
               
                  
                  
                  //CHAMAR MODAL
                  $('#btnNovoAcesso').click(function(){
                    callModal('modal_perfil_secundario.php');
                    $('#container').fadeIn(600);
        
                  });
                });
                function callModal(_url){
                    $.ajax({
                      type: "GET",
                      url: _url,
                      success: function(dados){
                        $("#modal").html(dados)
                      }
                    });
                  }
                
                  
                </script>
    </body>
</html>