
function deletedSave(book){
  var book = book;
    $.ajax({
          url: "../../controller/deletedSave.php",
          type: "POST",
          data: "book="+book,
          dataType: "JSON",
       
          success: function () {
            $('#msg').html('<div class="alert alert-danger" role="alert"> <strong>Historico  foi Eliminado!</strong> </div>').show(300).delay(5000).hide(300);     
            location.href = "historyDownload.php";
          },

     
      });
}