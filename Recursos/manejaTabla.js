function eliminar(codigoViaje){
    alert(codigoViaje);
}

function modificar(codigoViaje){
    alert(codigoViaje);
}

function insertar(){
    var doc = $('#documento').val();
    var fecha = $('datepicker').val();
    var hora = $('hora').val();
    var min = $('min').val();
    var estacionOrigen = $('estO').val();
    var estacionDestino = $('estD').val();    
    
    var urlPhp="Recursos/ObtenerViajes.php?opcion=1";
    $.ajax({
        type: 'POST',
        url: urlPhp,
        dataType: 'json',
        cache: false,
        success: function(result) {
            for(var i=0 ; i < result.length ; i++){
                var contenidoHtml = "";
                var unaFila = result[i];
                contenidoHtml += "<tr><td>"+ unaFila[0]+"</td><td>"+unaFila[1]+"</td> <td>"+unaFila[2]+"</td><td>"+unaFila[3]+"</td><td>"+unaFila[4]+"</td><td>" +unaFila[5]+"</td><td>"+unaFila[6]+"</td><td><a href='' onclick='eliminar("+unaFila[0]+")'>Eliminar</a></br><a href='' onclick='modificar("+unaFila[0]+")'>Modificar</a></td></tr>";
                $('#tabla').append(contenidoHtml);                
            }
        }     
    }
    );
    
    $('btnInsertar').unbind('click', insertar);
    $('btnInsertar').click(insertar);
}

$(function(){
    
    var urlPhp="Recursos/ObtenerViajes.php?opcion=1";
    
    $.ajax({
        type: 'POST',
        url: urlPhp,
        dataType: 'json',
        cache: false,
        success: function(result) {
            for(var i=0 ; i < result.length ; i++){
                var contenidoHtml = "";
                var unaFila = result[i];
                contenidoHtml += "<tr><td>"+ unaFila[0]+"</td><td>"+unaFila[1]+"</td> <td>"+unaFila[2]+"</td><td>"+unaFila[3]+"</td><td>"+unaFila[4]+"</td><td>" +unaFila[5]+"</td><td>"+unaFila[6]+"</td><td><a href='' onclick='eliminar("+unaFila[0]+")'>Eliminar</a></br><a href='' onclick='modificar("+unaFila[0]+")'>Modificar</a></td></tr>";
                $('#tabla').append(contenidoHtml);                
            }
        }     
    }
    );
        
    var btnInsertar = $("#btnInsertar");
    btnInsertar.click(insertar);
    
});