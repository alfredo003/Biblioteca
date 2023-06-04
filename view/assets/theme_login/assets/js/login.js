
$('#loginBtn').on('click',function(e){
        e.preventDefault();
        var codAccess   = $('#cod_access').val();
        var password = $('#password').val();

    $.ajax({
        type: "POST",
        url: "./../controller/login.php",
        data: "codAccess="+codAccess+"&password="+password,
        success:function(result){
            if(result == 1){
            $('#msg').html('<div class="alert-success"> <strong>Sucesso!</strong>Login Efectuado</div>').show(300).delay(3000).hide(300);
            window.setTimeout("location.href='./defin.php'",3000);
            }else{
             $('#msg').html('<div class="alert-error"> <strong>Problema!</strong>'+result+'</div>').show(300).delay(3000).hide(300);
            }
        }
    });
});
