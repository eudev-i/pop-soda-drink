
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
                if(!loginPJ()){
                    html = "<div class='msg_error'>"+data.message+"</div>";
                    $("#msg_login").html(html);
                }
            }
           
        }
    });
});

//function que faz o login p/ Pessoa Juridica
function loginPJ(){
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
                return false;
            }
            
        }
    });
}
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

function getAllDataPJ(){
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
            var html = '<div class="container_card_anuncio">';
            //looping em todos os dados retorados via JSON
            for(var i = 0; i < data.length; i++){
                html+= `<a class="click_me" href="#" data-id="${data[i].id_perfil_juridico}" onclick="callModalPerfilWithData(this);$('#container').fadeIn(600);"><div class="card_anuncio">`;
                html+= `<div class="card_img_anuncio"><img class="img_anuncio" src='http://${host}/cms/view/img/temp/${data[i].foto}'  alt="ads" title="ads"></img></div>`;
                html+= `<div class="options">Responsável</div>`;
                html+= `<div class="desc_anuncio">${data[i].responsavel}</div>`;
                html+= `</div></a>`;
            }
        
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
    
    var id = $(obj).data("id");
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

  function callModalPerfilWithData(obj){
    
    var id = $(obj).data("id");
    document.cookie = "idPerfil="+id; 

    $.ajax({
      type: "GET",
      url: 'modal_perfil_secundario.php',
      success: function(dados){
        $("#modal").html(dados);
        selectPerfilById(id);
       

        $("#form-perfil").submit(function(){
            var btnValue = $("#btn_add").val();
            if(btnValue=="Editar"){
               
                $.ajax({
                    type: "POST",
                    url: `http://${host}/pops/backend/services/PJService.php/?op=updatePerfil`,
                    data: new FormData($("#form-perfil")[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    async: true,
                    dataType:"json",
                    success: function(data){
                        var html = "<div>"+data.message+"</div>";
                        $("#msg_add").html(html);
                        $("#form-perfil")[0].reset();
                        getPerfilData();
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

  
  function selectPerfilById(id){
    $.ajax({
        type: "POST",
        url: `http://${host}/pops/backend/services/PJService.php/?op=perfil_by_id`,
        dataType: 'json',
        data: {"idPerfil":id},
        success: function(data){
          console.log(data);
          $("#txt_responsavel").val(data.responsavel);
          $("#txt_email").val(data.email);
          $("#txt_tel").val(data.telefone);
          $("#txt_user").val(data.usuario);
          $("#txt_cel").val(data.celular);
          $("#txt_password").val(data.senha);
          $("#btn_add").val("Editar");
        },
        error: function(xhr){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
           
        }
    });
  }

