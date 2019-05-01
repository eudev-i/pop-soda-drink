<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <title>Anuncio</title>
    <link rel="stylesheet" href="css/arielle.css">
  </head>
  <body>
    <script>
    $(document).ready(function(){
      //function para fechar a modal

      $('#fechar').click(function(){
        $('#container').fadeOut(400);
      });
    });
    </script>

    <div class="modal_anuncio">
      <div class="modal-header-login">
        <h4 class="modal-title-login">
          Anuncio
          <a href="#" id="fechar" class="modal-fechar"> </a>
        </h4>

      </div>

      <div class="modal-body-anuncio">
        <div class="modal-content-login">
          <div class="modal-form-anuncio">
            <form class="form-anuncio"  action="index.html" method="post">
              <p class="modal-title-campos-anuncio"> Nome do estabelecimento:
                <input type="text" name="txtendereco">
              </p>

              <p class="modal-title-campos-anuncio"> Descrição:
                <textarea name="txtadescricao" rows="5" cols="38"></textarea>
              </p>

              <p class="modal-title-campos-anuncio"> Logradouro: <br>
                <input type="text" name="txtendereco">
              </p>

              <p class="modal-title-campos-anuncio"> N: <br>
                <input type="text" name="txtendereco" style="width:50px;">
              </p>

              <p class="modal-title-campos-anuncio">
                Cidade: <br>
                <input type="text" name="txtendereco">
              </p>

              <p class="modal-title-campos-anuncio">
                Estado: <br>
                <select class="select-anuncio" name="select_estado">

                </select>
              </p>

              <input type="button" name="btnok" value="Criar anuncio">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
