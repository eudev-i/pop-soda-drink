//-------FAZ O LOGIN NO DASHBOARD DA PESSOA JURIDICA ------------
var host = window.location.host + "/Tcc";
$("#btnlogar").click(function(){
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=login`,
        dataType: "json",
        data: {"user": $("#txtuser").val(), "senha": $("#txtpassword").val()},
        success: function(data){
           
            //console.log(data);
            var html = '';
            if(data.success == true){
                //redireciona a url p/ dashboard da pj
                var url = `http://${host}/pops/painel_pessoa_juridica.php`;  

                //criando um cookie no js
                document.cookie = "cnpj="+data.cnpj;  
                $(location).attr('href',url);
            
            } else {
                html = "<div class='msg_error'>"+data.message+"</div>";
            }
            $("#msg_login").html(html);
        }
    });
});

//-------ADICIONAR PERFIL------------
$("#form-perfil").submit(function(evt){
    evt.preventDefault();
    var cnpjCookie = document.cookie;
    
    // var perfilJuridico = {
    //     responsavel: $('#txt_responsavel').val(),
    //     email: $('#txt_email').val(),
    //     cel: $('#txt_cel').val(),
    //     tel: $('#txt_tel').val(),
    //     user: $('#txt_user').val(),
    //     senha: $('#txt_password').val(),
    //     status: 0,
    //     foto: 'n_possui'
    //  };
     //console.log(perfilJuridico.foto);
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=addProfile`,
        //url: '#',
        // data: {"responsavel":perfilJuridico.responsavel, "email":perfilJuridico.email, 
        // "cel":perfilJuridico.cel, "tel":perfilJuridico.tel, "user":perfilJuridico.user,
        // "senha":perfilJuridico.senha, "status":perfilJuridico.status,
        // "cnpj":cnpjCookie, "foto":perfilJuridico.foto},
        data: new FormData($("#form-perfil")[0]),
        cache: false,
        contentType: false,
        processData: false,
        async: true,
        dataType:"json",
        success: function(data){
            //alert(perfilJuridico.foto);
             var html = "<div>"+data.message+"</div>";
             $("#msg_add").html(html);
             $("#form-perfil")[0].reset();
        },
        error: function(){
            alert('deu erro');
        }
    });
});

function getAllData(){
    var cnpjCookie = document.cookie;
    $.ajax({
        type: "POST",
        url: `http://${host}/pops-site/backend/services/PJService.php/?op=dashboard`,
        dataType: "json",
        data: {"cnpj":cnpjCookie},
        success: function(data){
           console.log(data);
           
            $('#foto').attr('src', data.foto);
            $('#nom_fantasia').html(data.nome_fantasia);
            $('#razao_social').html(data.razao_social);
            $('#responsavel').html(data.responsavel);
            $('#user').html(data.usuario);
            $('#cnpj').html(data.cnpj);
            $('#email').html(data.email);
            $('#logradouro').html(data.logradouro);
            $('#bairro').html(data.bairro);
            $('#tel').html(data.telefone);
            $('#num').html(data.numero);
            $('#cep').html(data.cep);
            $('#uf').html(data.uf);
        }
    });
}

function getPerfilData(){
    var cnpjCookie = document.cookie;
    $.ajax({
        type: "POST",
        url: `http://${host}/pops-site/backend/services/PJService.php/?op=perfis`,
        dataType: "json",
        data: {"cnpj":cnpjCookie},
        success: function(data){
            
            var html = '<div class="caixa_users_add">';
            
            
            for(var i = 0; i < data.length; i++){
               console.log('entrou no for');
               html+= '<p class="font-negrito font-texto">Users: </p><p class="font-texto nome_perfil" >'+data[i].usuario+'</p>';
               html+= `<img class="elemento_direita img_perfil" src='http://${host}/pops-site/img/temp/${data[i].foto}' width="38" height="38" alt="ola" title="ola"></img><br>`;
           }
           html+='</div>';
           $("#container_perfil").html(html);
           //alert(html);
           
        }
    });
}