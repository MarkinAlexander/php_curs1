$( window ).on( "load", function() {
    console.log( "window loaded" );

    $(".btn_del").on("click", function(){
      $.ajax({
        type: "POST",
        url: "cart.php",
        data: "action=del&id="+$(this).attr('id'),
        success: function(msg){
          console.log (msg);
          window.location.reload();
        }
      });
    });
    $(".btn_buy").on("click", function(){
        if($(this).hasClass("incart")){
            $.ajax({
                type: "POST",
                url: "ajax/delcart.php",
                data: "action=del&id="+$(this).attr('id'),
                success: function(msg){
                  $("#cartinfo").text(msg);
                  console.log (msg);
                }
              });
            $(this).text('В корзину');
            $(this).removeClass("incart");
            alert('Товар с id='+ $(this).attr('id') +' удален из корзины');
        } else {
            $.ajax({
                type: "POST",
                url: "ajax/addcart.php",
                data: "action=add&id="+$(this).attr('id'),
                success: function(msg){
                  $("#cartinfo").text(msg);
                  console.log (msg);
                }
              });
            $(this).text('В корзине');
            $(this).addClass("incart");
            alert('Товар с id='+ $(this).attr('id') +' добавлен в корзину');
        }
    })
});