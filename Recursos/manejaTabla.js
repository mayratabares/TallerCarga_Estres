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
    llenarTabla();
}

function modificar(codigoViaje){
    
    $("#btnInsertar").unbind('click', insertar);
    
    var url="Recursos/crudViajes.php?opcion=3&viaje="+codigoViaje;
    $.ajax({
        type: 'POST',
        url: url,
        dataType: 'json',
        cache: false,
        success: function(result) {
            $('#idViaje').val(result[0]);
            $('#documento').val(result[1]);            
            $('#hora').val(result[3]);
            var newFecha="";
            var fecha = result[2];
            var arregloFecha=fecha.split("-");
            newFecha+= arregloFecha[1];
            newFecha+= "/"+arregloFecha[2];
            newFecha+= "/"+arregloFecha[0];            
            $('#datepicker').val(newFecha);
            $('#min').val(result[4]);
            $('#estO').val(result[5]);
            $('#estD').val(result[6]);    
        }
    }     
    
    );
}
        
function editarCampos()
{  
    var doc = $('#documento').val();
    var fecha = $('#datepicker').val();
    var hora = $('#hora').val();
    var min = $('#min').val();
    var estacionOrigen = $('#estO').val();
    var estacionDestino = $('#estD').val();
    var arregloFecha=fecha.split("/");
    var newFecha="";
    var codigoViaje=$('#idViaje').val();
    newFecha+=arregloFecha[2];
    newFecha+="-"+arregloFecha[0];
    newFecha+="-"+arregloFecha[1];
        
    var c= camposVacios(doc, fecha, hora, min, estacionOrigen, estacionDestino);
   
    if(c=="true"){  
        alert("Hay campos vacios")
    }else{
        
        var url="Recursos/crudViajes.php?opcion=4&viaje="+codigoViaje+"&doc="+doc+"&fecha="+newFecha+"&hora="+hora+"&min="+min+"&estacionOrigen="+estacionOrigen+"&estacionDestino="+estacionDestino;
 
        //       alert(url);
        $.ajax({
            type: "POST",
            url: url                              
        }).done(function( msg ) {
            alert(msg);
        }); 
    }
    
    $('#btnModificar').unbind('click', editarCampos);
    $('#btnModificar').click(editarCampos);
    $("#btnInsertar").unbind('click', insertar);
    $("#btnInsertar").click(insertar);
    limpiarCampos();         
       
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
 
        //  alert(url);
        $.ajax({
            type: "POST",
            url: url                              
        }).done(function( msg ) {
            alert(msg);
        
        });
   
        limpiarCampos();
        $('#btnModificar').unbind('click', editarCampos);
        $('#btnModificar').click(editarCampos);
        $("#btnInsertar").unbind('click', insertar);
        $("#btnInsertar").click(insertar);  
        llenarTabla();
    }
    
}

function camposVacios(doc,fecha,hora,min,estacionO, estacionD){
    if(doc==""||fecha==""|| hora==""|| min==""||estacionD==""||estacionO==""){
        return "true";
    }
    return "false";
}

function limpiarCampos(){
    $('#idViaje').val("");
    $('#documento').val("");
    $('#datepicker').val("");
    $('#hora').val("");
    $('#min').val("");
    $('#estO').val("");
    $('#estD').val("");  
}

$(function(){
    $('#btnInsertarDatos').click(function(){
        var url="Recursos/insertar.php"
        $.ajax({
            type: 'POST',
            url: url,
            cache: false,
            success: function(result) {
                alert(result);
            }     
        }
        ); 
    

    });

    llenarTabla();
});

function llenarTabla(){
    var urlPhp="Recursos/ObtenerViajes.php";
    var titulosTabla = "<tr><th>Cod.Viaje</th> <th>Doc. Pasajero</th> <th>Fecha</th> <th>Hora</th> <th>Minutos Espera</th> <th>Estacion Origen</th> <th>estacion Destino</th> <th>Opciones</th> </tr>";
    $('#tabla').html("");
    $('#tabla').append(titulosTabla);
    
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
        
    $('#btnModificar').unbind('click', editarCampos);
    $('#btnModificar').click(editarCampos);
    $("#btnInsertar").unbind('click', insertar);
    $("#btnInsertar").click(insertar);
    
}
