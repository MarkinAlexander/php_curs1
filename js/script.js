$( document ).ready(function() {
    $('.basket').on("click", ".btn_order", function(){
        $.ajax({
            type: "POST",
            url: "/ajax/closecart",
            data: "cart_id="+$(this).data('cart_id'),
            success: function(msg){
                $('.basket').html(msg);
            }
        });
        alert("Заказ отправлен!");
    });
    
    $('.basket').on("click", ".btn_del", function(){
        $.ajax({
            type: "POST",
            url: "/ajax/delitem",
            data: "action=del&id="+$(this).data('id'),
            success: function(msg){
                //$("#cartinfo").text(msg);
                console.log (msg);
            }
        });
        $.ajax({
            type: "POST",
            url: "/ajax/drawcart",
            success: function(msg){
                $('.basket').html(msg);
            }
        });
    });
    $('.btn_buy').click( function() {
        if(!$(this).hasClass("incart")){
            $(this).html("В корзине").addClass('incart');
            $.ajax({
                type: "POST",
                url: "/ajax/additem",
                data: "action=add&id="+$(this).data('idgoods'),
                success: function(msg){
                    //$("#cartinfo").text(msg);
                    console.log (msg);
                }
            });
        }
        else{
            $(this).html("Купить").removeClass("incart");
            $.ajax({
                type: "POST",
                url: "/ajax/delitem",
                data: "action=del&id="+$(this).data('idgoods'),
                success: function(msg){
                    //$("#cartinfo").text(msg);
                    console.log (msg);
                }
            });
        }
    });
});