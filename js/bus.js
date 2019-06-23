$(document).ready(function(){

    $('#btnSend').click(function(){

        var errores = '';

        // Validado Numero del bus==============================
        if( $('#numBus').val() == '' ){
            errores += '<p>Escriba número del bus</p>';
            $('#numBus').css("border-bottom-color", "#F14B4B")
        } else{
            $('#numBus').css("border-bottom-color", "#d1d1d1")
        }

        // Validado ruta de bus ==============================
        if( $('#ruta').val() == '' ){
            errores += '<p>Escriba una ruta</p>';
            $('#ruta').css("border-bottom-color", "#F14B4B")
        } else{
            $('#ruta').css("border-bottom-color", "#d1d1d1")
        }

        // Validado placa de bus ==============================
        if( $('#numPlaca').val() == '' ){
            errores += '<p>Escriba su número de placa</p>';
            $('#numPlaca').css("border-bottom-color", "#F14B4B")
        } else{
            $('#numPlaca').css("border-bottom-color", "#d1d1d1")
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