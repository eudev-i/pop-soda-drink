
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
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=addProfile`,
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

//-------ADICIONAR ANUNCIO------------
$("#form-anuncio").submit(function(evt){
    evt.preventDefault();
    var btnValue = $("#btnok").val();

    console.log(btnValue);

    if(btnValue!="Editar"){
    $.ajax({
            type: "POST",
            url: `http://${host}/pops/backend/services/PJService.php/?op=addAnuncio`,
            data: new FormData($("#form-anuncio")[0]),
            cache: false,
            contentType: false,
            processData: false,
            async: true,
            dataType:"json",
            success: function(data){
                //alert(perfilJuridico.foto);
                var html = "<div>"+data.message+"</div>";
                $("#msg_add").html(html);
                $("#form-anuncio")[0].reset();
                getAdData();
            },
            error: function(){
                alert('deu erro');
            }
        });

    }
    
});

function getAllData(){
    var cnpjCookie = document.cookie;
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=dashboard`,
        dataType: "json",
        data: {"cnpj":cnpjCookie},
        success: function(data){
         
           
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

            //preenchendo campos da modal
            $('#txt_nome').val(data.razao_social);
            $('#txt_logradouro').val(data.logradouro);
            $('#txt_num').val(data.numero);
            $('#txt_cidade').val(data.cidade);
            $('#txt_uf').val(data.uf);
           
        }
    });
}

function getPerfilData(){
    var cnpjCookie = document.cookie;
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=perfis`,
        dataType: "json",
        data: {"cnpj":cnpjCookie},
        success: function(data){
            
            var html = '<div class="caixa_users_add">';
            
            
            for(var i = 0; i < data.length; i++){
               console.log('entrou no for');
               html+= '<p class="font-negrito font-texto">Users: </p><p class="font-texto nome_perfil" >'+data[i].usuario+'</p>';
               html+= `<img class="elemento_direita img_perfil" src='http://${host}/pops/img/temp/${data[i].foto}' width="30" height="30" alt="ola" title="ola"></img>`;
               html+= `<div class="edit">
                            <img class="elemento_direita img_perfil edit"  src='http://${host}/cms/view/img/editar.png' width="30" height="30" alt="ola" title="ola">
                        </img></div><br>`;
           }
           html+='</div>';
           $("#container_perfil").html(html);
           //alert(html);
           
        }
    });
}

function getAdData(){
   
    var cnpjCookie = document.cookie;
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=ads`,
        dataType: 'json',
        data: {"cnpj":cnpjCookie},
        success: function(data){
          var html = '<div class="container_card_anuncio">';
          for(var i = 0; i < data.length; i++){
            
               html+= `<a class="click_me" href="#" data-id="${data[i].id_anuncio}" onclick="callModalWithData(this);$('#container').fadeIn(600);"><div class="card_anuncio">`;
               html+= `<div class="card_img_anuncio"><img class="img_anuncio" src='http://${host}/cms/view/img/temp/${data[i].foto}'  alt="ads" title="ads"></img></div>`;
               html+= `<div class="options">Descrição</div>`;
               html+= `<div class="desc_anuncio">${data[i].descricao}</div>`;
            
               html+= `</div></a>`;

            
           }
          $("#container_card_anuncio").html(html);
        },
        error: function(xhr){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
           
        }
    });
}

function callModalWithData(obj){
    //console.log($(obj).data("id"));
    var id = $(obj).data("id");

    // sessionStorage.setItem("id_anuncio", id);

    // console.log(sessionStorage.getItem("id_anuncio"));

     //criando um cookie no js
     document.cookie = "idAnuncio="+id; 

    $.ajax({
      type: "GET",
      url: 'modal-anuncio.php',
      success: function(dados){
        $("#modal").html(dados);
        selectById(id);
       

        $("#form-anuncio").submit(function(){
            var btnValue = $("#btnok").val();
            if(btnValue=="Editar"){
                console.log("teste");
                $.ajax({
                    type: "POST",
                    url: `http://${host}/pops/backend/services/PJService.php/?op=updateAnuncio`,
                    data: new FormData($("#form-anuncio")[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    dataType:"json",
                    success: function(data){
                        //alert(perfilJuridico.foto);
                        var html = "<div>"+data.message+"</div>";
                        $("#msg_add").html(html);
                        $("#form-anuncio")[0].reset();
                        getAdData();
                    },
                    error: function(){
                        alert('deu erro');
                    }
                });
            }
        });

      }
    });
  }

  function selectById(id){
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=ad_by_id`,
        dataType: 'json',
        data: {"idAd":id},
        success: function(data){
          console.log(data);
          $("#txtadescricao").val(data.descricao);
          $("#slt_status").val(data.status);
          $("#btnok").val("Editar");
        },
        error: function(xhr){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
           
        }
    });
  }



