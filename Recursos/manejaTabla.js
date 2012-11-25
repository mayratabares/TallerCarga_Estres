 /* <?php
                            include_once 'Recursos/Consultar.php';
                            $obtenerViajes = new ObtenerViajes();

                            $listasViajes = $obtenerViajes->obtenerListaViajes();

                            for ($index = 0; $index < count($listasViajes); $index++) {
                                echo "<tr><td>" . $listasViajes[$index][0] . "</td>
                                    <td>" . $listasViajes[$index][1] . "</td> <td>" . $listasViajes[$index][2] . "</td><td>" . $listasViajes[$index][3] . "</td><td>" . $listasViajes[$index][4] . "</td><td>" . $listasViajes[$index][5] . "</td><td>" . $listasViajes[$index][6] . "</td></tr>";
                            }
                            ?>*/
$(function(){
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
                contenidoHtml += "<tr><td>"+ unaFila[0]+"</td><td>"+unaFila[1]+"</td> <td>"+unaFila[2]+"</td><td>"+unaFila[3]+"</td><td>"+unaFila[4]+"</td><td>" +unaFila[5]+"</td><td>"+unaFila[6]+"</td></tr>";
                $('#tabla').append(contenidoHtml);                
            }
        }     
    }
    );
});