
//-------FAZ O LOGIN NO DASHBOARD DA PESSOA JURIDICA ------------
var host = window.location.host + "/Tcc";
$("#btnlogar").click(function(){
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PFService.php/?op=login`,
        dataType: "json",
        data: {"user": $("#txtuser").val(), "senha": $("#txtpassword").val()},
        success: function(data){
           
            //console.log(data);
            var html = '';
            if(data.success == true){
                //redireciona a url p/ dashboard da pj
                var url = `http://${host}/pops/painel_pessoa_fisica.php`;  

                //criando um cookie no js
                document.cookie = "id_p_fisica="+data.id_p_fisica;  
                $(location).attr('href',url);
            
            } else {
                html = "<div class='msg_error'>"+data.message+"</div>";
            }
            $("#msg_login").html(html);
        }
    });
});

//Comentário inserido com sucesso!
$("#form-comentario").submit(function(evt){
    alert('certo')
    evt.preventDefault();
    var idPessoaFisicaCookie = document.cookie;
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PFService.php/?op=addComentario`,
        data: new FormData($("#form-comentario")[0]),
        cache: false,
        contentType: false,
        processData: false,
        async: true,
        dataType:"json",
        success: function(data){
             var html = "<div>"+data.message+"</div>";
             $("#msg_add").html(html);
             $("#form-comentario")[0].reset();
        },
        error: function(){
            alert('deu erro');
        }
    });
});


function getAllData(){
    var idPessoaFisicaCookie = document.cookie;
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PFService.php/?op=dashboard`,
        dataType: "json",
        data: {"id_p_fisica":idPessoaFisicaCookie},
        success: function(data){
              
            $('#foto').attr('src', data.foto);
            $('#nome').html(data.nome);
            $('#cpf').html(data.cpf);
            $('#celular').html(data.celular);
            $('#logradouro').html(data.logradouro);
            $('#num').html(data.num);
            $('#bairro').html(data.bairro);
            $('#cidade').html(data.cidade);
            $('#uf').html(data.uf);
           
        }
    });
}

