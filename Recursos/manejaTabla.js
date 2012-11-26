function eliminar(codigoViaje){
    var url="Recursos/crudViajes.php?opcion=2&viaje="+codigoViaje;
    $.ajax({
        type: 'POST',
        url: url,
        cache: false,
        success: function(result) {
          alert("El viaje numero "+codigoViaje+" ha sido eliminado");
        }     
    }
    );
       
    
      
 
}

function modificar(codigoViaje){
    alert(codigoViaje);
}

function insertar(){
    var doc = $('#documento').val();
    var fecha = $('#datepicker').val();
    var hora = $('#hora').val();
    var min = $('#min').val();
    var estacionOrigen = $('#estO').val();
    var estacionDestino = $('#estD').val();
    var arregloFecha=fecha.split("/");
    var newFecha="";
    newFecha+=arregloFecha[2];
    newFecha+="-"+arregloFecha[0];
    newFecha+="-"+arregloFecha[1];
    
     
   var c= camposVacios(doc, fecha, hora, min, estacionOrigen, estacionDestino);
   
    if(c=="true"){  
        alert("Hay campos vacios")
    }
    else {
        var url="Recursos/crudViajes.php?opcion=1&doc="+doc+"&fecha="+newFecha+"&hora="+hora+"&min="+min+"&estacionOrigen="+estacionOrigen+"&estacionDestino="+estacionDestino;
 
        alert(url);
        $.ajax({
            type: "POST",
            url: url                              
        }).done(function( msg ) {
            alert(msg);
        });
   
    
        $('btnInsertar').unbind('click', insertar);
        $('btnInsertar').click(insertar);
}}

function camposVacios(doc,fecha,hora,min,estacionO, estacionD){
if(doc==""||fecha==""|| hora==""|| min==""||estacionD==""||estacionO==""){
    return "true";
}
return "false";
};

$(function(){
    
   llenarTabla();
});

function llenarTabla(){
     var urlPhp="Recursos/ObtenerViajes.php";
    
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
    
}