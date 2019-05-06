<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>POP'S - Perfil Pessoa Física</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/painel_pessoa_fisica.css">
    <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CHAMANDO O JQUERY -->
    <script src="js/jquery.js">
    </script>
    <!-- CHAMANDO O ARQUIVO DE EVENTOS EM JQUERY -->
    <script src="js/event.js">
    </script>
</head>
    <body>
        <?php 
            session_start();
            require_once('../cms/model/DAO/Conexao.php');   
            $conex = new Conexao();
            $con = $conex->connectDatabase();
        ?>
      <header>
        <?php require_once 'header.php' ?>
      </header>
        <!-- caixa que ocupa 100% de altura e largura -->
        <div class="caixa_geral_pessoa_fisica centralizar_caixa">

            <?php		
                $sql = "SELECT pf.*, e.*
                FROM tbl_pessoa_fisica AS pf
                INNER JOIN tbl_p_fisica_endereco AS pfe ON pfe.id_p_fisica = pfe.id_p_fisica
                INNER JOIN tbl_endereco AS e ON pfe.id_endereco = e.id_endereco WHERE status = 1 LIMIT 1";
                $stm = $con->prepare($sql);
                $success = $stm->execute();
                foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){	
        	?>

            <div class="caixa_central_pessoa_fisica centralizar_caixa">

                <!-- FOTO E NOME-->
                <div class="caixa_identidade">
                    <img src="img/a.jpg" alt="" width="245" height="250" title="">
                    <!--<img src="cms/view/img/temp/<?php utf8_decode($result['foto'])  ?>" alt="" width="245" height="250" title="">-->
                </div>

                <!-- INFORMAÇÕES USER -->
                <div class="informacoes_pessoa_fisica">
                    <div class="caixa_titulo_inf tamanho_caixa_nome">
                        <p>
                            <span class="font-titulo font-negrito">Nome:</span>
                            <span class="font-texto"><?php echo (utf8_decode($result['nome'])) ?></span>
                        </p>
                    </div>
                    <div class="caixa_titulo_inf tamanho_caixa_celular_cpf_estado">
                        <span class="font-titulo font-negrito">CPF:</span>
                        <span class="font-texto color-blue"><?php echo (utf8_decode($result['cpf'])) ?></span>
                    </div>
                    <div class="caixa_titulo_inf tamanho_caixa_celular_cpf_estado">
                        <span class="font-titulo font-negrito">Celular:</span>
                        <span class="font-texto color-blue"><?php echo (utf8_decode($result['celular'])) ?></span>
                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_logradouro_bairro">
                        <span class="font-titulo font-negrito">Logradouro:</span>
                        <span class="font-texto color-blue"><?php echo (utf8_decode($result['logradouro'])) ?></span>
                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_numero">
                        <span class="font-titulo font-negrito">Nº:</span>
                        <span class="font-texto color-blue"><?php echo (utf8_decode($result['numero'])) ?></span>
                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_logradouro_bairro">
                        <span class="font-titulo font-negrito">Bairro:</span>
                        <span class="font-texto color-blue"><?php echo (utf8_decode($result['bairro'])) ?></span>
                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_cidade">
                        <span class="font-titulo font-negrito">Cidade:</span>
                        <span class="font-texto color-blue"><?php echo (utf8_decode($result['cidade'])) ?></span>
                    </div>

                    <div class="caixa_titulo_inf tamanho_caixa_celular_cpf_estado">
                        <span class="font-titulo font-negrito">Estado:</span>
                        <span class="font-texto color-blue"><?php echo (utf8_decode($result['uf'])) ?></span>
                    </div>

                </div>

                <!-- COMENTÁRIO -->
                <section id="comentario">
                    <h1 class="font-titulo font-negrito color-blue">Comentário</h1>
                    <textarea class="font-texto" type="text" name="txtComentario" id="txtComentario"></textarea><br>
                    <input class="botao_comentario" type="button" value="Enviar">
                </section>
            </div>
            <?php } ?>
        </div>
        <footer>  <?php require_once('footer.html')?> </footer>
    </body>
</html>