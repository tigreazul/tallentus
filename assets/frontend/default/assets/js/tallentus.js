$(function() {

    var $formLogin = $('#login-form');
    var $formLost = $('#lost-form');
    var $formRegister = $('#register-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    $('#login_register_btn').click( function () { modalAnimate($formLogin, $formRegister) });
    $('#register_login_btn').click( function () { modalAnimate($formRegister, $formLogin); });
    $('#login_lost_btn').click( function () { modalAnimate($formLogin, $formLost); });
    $('#lost_login_btn').click( function () { modalAnimate($formLost, $formLogin); });
    $('#lost_register_btn').click( function () { modalAnimate($formLost, $formRegister); });
    $('#register_lost_btn').click( function () { modalAnimate($formRegister, $formLost); });

    function modalAnimate ($oldForm, $newForm) {
        var $oldH = $oldForm.height();
        var $newH = $newForm.height();
        $divForms.css("height",$oldH);
        $oldForm.fadeToggle($modalAnimateTime, function(){
            $divForms.animate({height: $newH}, $modalAnimateTime, function(){
                $newForm.fadeToggle($modalAnimateTime);
            });
        });
    }

    $('#modalLogin').on('hidden.bs.modal', function () {
        $('#div-forms #login-form').css('display', 'inherit');
        $('#div-forms #lost-form').css('display', 'none');
        $('#div-forms #register-form').css('display', 'none');
    });


    $('.forms').submit(function(){
        var action = $(this).attr('action');
        var datos = $(this).serialize();
        $.ajax({
            url : action,
            data: datos,
            type: 'POST',
            success : function(data) {
                if(data.resultado === 0){
                    alert(data.mensaje);
                    $('.forms')[0].reset();
                }
                if(data.resultado === 1){
                    alert(data.mensaje);
                    location.href = data.envio;
                }
            }
        });
        return false;
    });

    $('.searchs').submit(function(){
        var action = $(this).attr('action');
        var datos = $(this).serialize();
        
        // $.get(action, function(data, status){
        //     alert("Data: " + data + "\nStatus: " + status);
        // });
        
        $.ajax({
            url : action,
            data: datos,
            type: 'POST',
            success : function(data) {
                
            }
        });
        return false;
    });


    $("#discapacidad").click(function(){  
        if($(this).is(':checked')){  
            $('#texotdiscapacidad').removeClass('none');
            $('#texotdiscapacidad').addClass('block');
        }else{  
            $('#texotdiscapacidad').removeClass('block');
            $('#texotdiscapacidad').addClass('none');
            $('#texotdiscapacidad').val('');
        }  
    });  


    if($('#discapacidad').is(':checked')){  
        $('#texotdiscapacidad').removeClass('none');
        $('#texotdiscapacidad').addClass('block');
    }else{  
        $('#texotdiscapacidad').removeClass('block');
        $('#texotdiscapacidad').addClass('none');
        $('#texotdiscapacidad').val('');
    }  

    $('#checkedado').click(function(){
        if($('.area_check').is(':checked')){
            // alert('si');
        } else{
            alert('Debe de seleccionar minimo una area');
        }
    });

});


    


$(document).on('keypress','.texto',function(tecla) {
    var reg = /^[a-zA-ZáéíóúàèìòùÀÈÌÒÙÁÉÍÓÚñÑüÜ'_\s]+$/;
    if(!reg.test(String.fromCharCode(tecla.which))){
        return false;
    }      
});


$(document).on('keypress','.numero',function(tecla) {
    var reg = /^[0-9-\s]+$/;
    if(!reg.test(String.fromCharCode(tecla.which))){
        return false;
    }
});