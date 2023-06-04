$(function () {
    $("form").submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var action = form.attr("action");
        var form_data = form.serialize() + "&action=" + action;
    
        $.ajax({
            url: "../../controller/user.php",
            type: "POST",
            data: form_data,
            dataType: "JSON",
            beforeSend: function (xhr) {
                form.find("#msg").after("<span class='load'>Aguarde, carregando...</span>");
                $(".error, .success").fadeOut(400, function () {
                    $(this).remove();
                });
            },
            success: function (response, textStatus, jqXHR) {
                if (response.error) {
                    $('#msg').html('<div class="alert alert-danger" role="alert"> <strong>Problema!</strong>'+ response.error + '</div>').show(300).delay(5000).hide(300);
                } else {
                    $('#msg').html('<div class="alert alert-success" role="alert"> <strong>Sucesso!</strong> Cadastrado com sucesso</div>').show(300).delay(5000).hide(300);
                    form.trigger("reset");
                    location.href = "userGest.php";
  
                }
            },
            error: function (jqXHR, textStatus, errorThrow) {
                $('#msg').html('<div class="alert alert-danger" role="alert"> <strong>Problema!</strong>Desculpe, erro ao processar: ' + errorThrow + '</div>').show(300).delay(5000).hide(300);
            },
            complete: function (jqXHR, textStatus) {
                form.find(".load").fadeOut(function () {
                    $(this).remove();
                });
            }
        });
    });
});

function deleteUser(user){
    var user = user;
      $.ajax({
            url: "../../controller/deleteUser.php",
            type: "POST",
            data: "user="+user,
            dataType: "JSON",
         
            success: function () {
              $('#msg').html('<div class="alert alert-danger" role="alert"> <strong>Utilizador  foi Eliminado!</strong> </div>').show(300).delay(5000).hide(300);     
              location.href = "userGest.php";
            },
  
       
        });
  }