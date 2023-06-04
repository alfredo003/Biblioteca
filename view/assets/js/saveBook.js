
function saveDownload(user,book){
  var user = user;
  var book = book;
    $.ajax({
          url: "../../controller/saveDownload.php",
          type: "POST",
          data: "user="+user+"&book="+book,
          dataType: "JSON",
       
          success: function () {
          },

     
      });
}

function saveBook(user,book){
  var user = user;
  var book = book;
    $.ajax({
          url: "../../controller/saveBook.php",
          type: "POST",
          data: "user="+user+"&book="+book,
          dataType: "JSON",
       
          success: function () {
            $('#msg').html('<div class="alert alert-success" role="alert"> <strong>Livro !</strong> Salvo com sucesso</div>').show(300).delay(5000).hide(300);
          },

     
      });
}

