function eliminar(codigoViaje){
    alert(codigoViaje);
}

function modificar(codigoViaje){
    alert(codigoViaje);
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
   
    var listaViajes = $('tr');
    
    listaViajes.on('click',function(){
        
              alert("hola");
        var accion = 0;
        if($(this).text()=="Eliminar"){
            accion = 1;
        }else if($(this).text()=="Modificar"){
            accion=2;
        }
        var id=$(this).attr('id');
  
        
        if(accion==1){
          /*var urlEliminar="Recursos/ObtenerViajes.php?opcion=2&viaje=";    
            $.ajax({
                type: 'POST',
                url: urlEliminar,
                success: function(result) {
                }     
            }
            ); */
        }
        if(accion==2){
            
        }
        });
    
           
});