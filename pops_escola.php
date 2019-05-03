<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Pop's nas escolas</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/arielle.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" type="text/css" href="css/pops_escola.css">
  <link rel="stylesheet" type="text/css" href="css/titulo_pagina.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/event.js"></script>
</head>
<body>
    <?php 
        session_start();
        require_once('../cms/model/DAO/Conexao.php');   
        $conex = new Conexao();
        $con = $conex->connectDatabase();

    ?>
  <header><?php require_once 'header.php';?></header>

    <!-- Título da página -->
    <div class="titulo_pagina font-titulo">
        <h1>POP'S nas Escolas</h1>
    </div>

    <!-- CONTEÚDO CHAMATIVO -->
    <div class="caixa_pops_escola div_centro">
        <div class="caixa_texto_imagem div_centro">
        <?php		
            $sql = "SELECT * FROM tbl_pops_nas_escolas";
            $stm = $con->prepare($sql);
            $success = $stm->execute();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){	
        ?>
            <p id="texto_formatacao">
                <?php echo (utf8_decode($result['descricao'])) ?>
            </p>
            <img class="sombra_imagens img_chamativa" src="..cms/view/img/temp/<?php echo($result['img_1']) ?>" width="310" height="310" alt="Imagem não encontrada" title="ola">
        <?php } ?>
        </div>
    </div>

    <!-- CAIXA DO CADASTRO DA ESCOLA -->
    <div id="caixa_geral_cadastro">
        <section class="caixa_central_cadastro div_centro">
            <h1 class="titulo_pops" >Cadastro da escola</h1>

            <!-- FORM DIREITO -->
            <div class="caixa_principal_formulario">
                <!-- Nome da escola -->
                <div class="caixa_formulario">
                    <input class="formatacao_inputs borda_inputs largura_fixa_inputs_1" type="text" placeholder="Nome da escola" id="txtNomeEscola" name="txtNomeEscola" value="">
                </div>
                <!-- Nome do diretor -->
                <div class="caixa_formulario">
                    <input class="formatacao_inputs borda_inputs largura_fixa_inputs_1" type="text" placeholder="Nome do diretor" id="txtNomeDiretor" name="txtNomeDiretor" value="">
                </div>
                <!-- Telefone -->
                <div class="caixa_formulario">
                    <input class="formatacao_inputs borda_inputs largura_fixa_inputs_2" type="text" placeholder="Telefone" id="txtTelefone" name="txtTelefone" value="">
                </div>
                <!-- Email -->
                <div class="caixa_formulario">
                    <input class="formatacao_inputs borda_inputs largura_fixa_inputs_1" type="text" placeholder="Email" id="txtEmail" name="txtEmail" value="">
                </div>
            </div>

            <!-- FORM ESQUERDO -->
            <div class="caixa_principal_formulario">
                <div class="caixa_formulario">
                    <!-- Logradouro -->
                    <div class="caixa_input largura_fixa_div">
                        <input class="formatacao_inputs borda_inputs largura_fixa_inputs_1" type="text" placeholder="Logradouro" id="txtLogradouro" name="txtLogradouro" value="">
                    </div>
                    <!-- Número -->
                    <div class="caixa_input largura_fixa_div_2">
                        <input class="formatacao_inputs borda_inputs largura_fixa_inputs_3" type="text" placeholder="Nº" id="txtNumero" name="txtNumero" value="">
                    </div>
                    <!-- Bairro -->
                    <div class="caixa_input largura_fixa_div_3">
                        <input class="formatacao_inputs borda_inputs largura_fixa_inputs_2" type="text" placeholder="Bairro" id="txtBairro" name="txtBairro" value="">
                    </div>
                    <!-- CEP -->
                    <div class="caixa_input largura_fixa_div_3">
                        <input class="formatacao_inputs borda_inputs largura_fixa_inputs_2" type="text" placeholder="CEP" id="txtCep" name="txtCep" value="">
                    </div>
                    <!-- Cidade -->
                    <div class="caixa_input largura_fixa_div_3">
                        <input class="formatacao_inputs borda_inputs largura_fixa_inputs_2" type="text" placeholder="Cidade" id="txtCidade" name="txtCidade" value="">
                    </div>
                    <div class="caixa_input largura_fixa_div_3">

                        <select class="slt_estado formatacao_inputs borda_inputs largura_fixa_inputs_3 slt_estado" id="sltEstado" name="sltEstado">
                            <option disabled selected>Estado:</option>
                            <option>SP</option>
                            <option>RJ</option>
                            <option>MG</option>
                        </select>
                    </div>
                    <div class="botao">
                        <input class="botao" type="button" value="Enviar" name="btnEnviar" id="btnEnviar">
                    </div>
                </div>
            </div>

            <!-- AVISO -->
            <div class="aviso aviso_form div_centro">
                <h2 ><strong>Aviso</strong></h2>
                <p>A POP'S entrará em contato nos próximos 7 dias uteis para prestar maiores informações e marcar data para o evento na instituição.
                </p>
            </div>
        </section>
    </div>

    <!-- IMAGENS -->
    <div id="caixa_imagens_pops">
        <div class="caixa_central_imagens_pops div_centro">
        <?php		
            $sql = "SELECT * FROM tbl_pops_nas_escolas LIMIT 3";
            $stm = $con->prepare($sql);
            $success = $stm->execute();
            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $result){	
        ?>
            <div class="imagens sombra_imagens">
                <img src="cms/view/img/temp/<?php utf8_decode($result['img_2'])  ?>" width="300" height="300" title="ola" alt="Imagem não encontrada">
            </div>

            <div class="imagens sombra_imagens">
                <img src="cms/<?php utf8_decode($result['img_3'])  ?>" width="300" height="300" title="ola" alt="Imagem não encontrada">
            </div>

            <div class="imagens sombra_imagens">
                <img src="cms/<?php utf8_decode($result['img_4'])  ?>" width="300" height="300" title="ola" alt="Imagem não encontrada">
            </div>
        <?php } ?>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>  <?php require_once('footer.html')?> </footer>
</body>
</html>