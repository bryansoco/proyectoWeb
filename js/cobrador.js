$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Nombre ==============================
        if( $('#nombre').val() == '' ){
            errores += '<p>Escriba un nombre</p>';
            $('#nombre').css("border-bottom-color", "#F14B4B")
        } else{
            $('#nombre').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Apellido Paterno ==============================
        if( $('#apellidoPaterno').val() == '' ){
            errores += '<p>Escriba su apellido paterno</p>';
            $('#apellidoPaterno').css("border-bottom-color", "#F14B4B")
        } else{
            $('#apellidoPaterno').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Apellido Materno ==============================
        if( $('#apellidoMaterno').val() == '' ){
            errores += '<p>Escriba su apellido materno</p>';
            $('#apellidoMaterno').css("border-bottom-color", "#F14B4B")
        } else{
            $('#apellidoMaterno').css("border-bottom-color", "#d1d1d1")
        }

        // Validado DNI  ==============================
        if( $('#dni').val() == '' ){
            errores += '<p>Escriba su dni</p>';
            $('#dni').css("border-bottom-color", "#F14B4B")
        } else{
            $('#dni').css("border-bottom-color", "#d1d1d1")
        }

        // Validado Correo ==============================
        if( $('#email').val() == '' ){
            errores += '<p>Ingrese un correo</p>';
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }

        // Validado fecha de nacimiento ==============================
        if( $('#fechaNac').val() == '' ){
            errores += '<p>Escriba su fecha de nacimiento</p>';
            $('#fechaNac').css("border-bottom-color", "#F14B4B")
        } else{
            $('#fechaNac').css("border-bottom-color", "#d1d1d1")
        }

        // ENVIANDO MENSAJE ============================
        if( errores == '' == false){
            var mensajeModal = '<div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        '<h3>Errores encontrados</h3>'+
                                        errores+
                                        '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'

            $('body').append(mensajeModal);
        }

        // CERRANDO MODAL ==============================
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        });
    });

});