$(document).ready(function(){
    $(".itemBtn").click(function(){
        $(this).next().css('display','block');
        $('body').css('background-color','rgba(0, 0, 0, 0.1)');
    });
    $(".close").click(function(){
        $(".modal").css('display','none');
        $('body').css('background-color','rgba(255, 255, 255, 1)');
    });
});