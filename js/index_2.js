
$(document).ready(function () {
        
        $('#send').click(function () {
        if ($('#ItemName').is(':empty')){
            $('.ItemName').addClass('has-error');
            $('.ItemName:first-child').append('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
        }
        else {
            $('.ItemName').removeClass('has-error');
        }
        if ($('#ImgUrl').is(':empty')){
                $('.ImgUrl').addClass('has-error');
                $('.ImgUrl:first-child').append('<span class="glyphicon glyphicon-remove form-control-feedback"></span>');
            }
         else {
            $('.ImgUrl').removeClass('has-error');
        }


        });
    });
