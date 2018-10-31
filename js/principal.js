$('#frmv').submit(function(evt){
    evt.preventDefault();
    $.ajax({
        url: 'agregar2.php',
        type: 'GET',
        data: $('#frmv').serialize(),
        beforeSend: function(){
            $('#resp').html('<h6>Espere ...</h6>');
        },
        success: function(respuesta){
            $('#resp').html(respuesta);
        }  
    });
    
    
});