<?php

session_start();

$path_local = $_SERVER['DOCUMENT_ROOT']."/Tcc";

$_SESSION['path_local'] = $path_local;

require_once "$path_local/cms/controller/controllerPessoaJuridica.php";

$controllerPessoaJuridica = new ControllerPessoaJurica();

$rsPessoaJuridica = $controllerPessoaJuridica->listarRegistros();

?>

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

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLyCfZiJMTKw8SdqUKqCgYay1rTwnUtF8"></script>

  <script type="text/javascript">

  function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(-23.5417691, -46.9098085),
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("caixa_mapa"),
    mapOptions);

    //nova posição
    var ponto = new google.maps.LatLng(-23.5417691, -46.9098085);
    var marker = new google.maps.Marker({
      position: ponto,//seta posição
      map: map,//Objeto mapa
      title:"Hello World!",//string que será exibida quando passar o mouse no marker
      icon: "img/marcador.png"
    });
  }

  </script>

</head>

<body onload="initialize()">

  <header>
    <?php require_once('header.php')?>
  </header>
  <!-- Título da página -->
  <div class="titulo_pagina font-titulo">
    <h1>Encontre um estabelecimento próximo a você!</h1>
  </div>

  <div class="caixa_central_est_proximo">

    <div id="caixa_enderecos">

      <?php foreach ($rsPessoaJuridica as $pessoaJuridica) { ?>

      <div class="caixa_estabelecimentos">
        <div class="estabelecimento"><?= $pessoaJuridica->getNomeFantasia() ?></div>
        <div class="endereco"><?= $pessoaJuridica->getNomeFantasia() ?></div>
        <div class="telefone"><?= $pessoaJuridica->getNomeFantasia() ?></div>
      </div>

    <?php } ?>

    </div>

    <!-- caixa do mapa -->
    <div id="caixa_mapa">

    </div>
  </form>
</div>

<footer> <?php require_once('footer.html')?> </footer>

</body>
</html>
