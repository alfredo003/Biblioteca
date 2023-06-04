$(function () {
  $("#save_book").submit(function (e) {
      e.preventDefault();
      var form = $(this);
      //var form_data = form.serialize();
     // $.post("upload.php", form_data, function (response) {
     //    console.log(response);
     // });
      
      

      form.ajaxSubmit({
          url: "./../../controller/book.php",
          beforeSubmit: function () {
              $(".success, .load").fadeOut(function () {
                  $(this).remove();
              });
          },
          uploadProgress: function (event, position, total, percent) {
              if (form.find(".load").length) {
                  form.find(".load b").text(percent + "%");
              } else {
                  form.find("#load").after("<span class='load'><b>" + percent + "%</b> - Aguarde Enviando Arquivo!</span>");
              }
          },
          success: function (response) {
            var result = JSON.parse(response)
            if(result.message == "empty"){
                $('#msg').html('<div class="alert alert-danger" role="alert"> <strong>Problema!</strong> Preencha os campos obrigarios</div>').show(300).delay(5000).hide(300);
            }else if(result.message == "success"){
                $('#msg').html('<div class="alert alert-success" role="alert"> <strong>Sucesso!</strong> Cadastrado com sucesso</div>').show(300).delay(5000).hide(300);
               form.trigger("reset");
            }else{
                $('#msg').html('<div class="alert alert-danger" role="alert"> <strong>Problema!</strong> Erro no servidor</div>').show(300).delay(5000).hide(300);
            }
            form.find(".load").fadeOut(function () {
                $(this).remove();
            });
          }
      });
      
  });
});


function deleteBook(book){
    var book = book;
      $.ajax({
            url: "../../controller/deleteBook.php",
            type: "POST",
            data: "book="+book,
            dataType: "JSON",
         
            success: function () {
              $('#msg').html('<div class="alert alert-danger" role="alert"> <strong>Livro  foi Eliminado!</strong> </div>').show(300).delay(5000).hide(300);     
              location.href = "listBook.php";
            },
  
       
        });
  }