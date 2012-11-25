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
     
      $.ajax({
            type: 'POST',
            url: urlPhp,
            dataType: 'json',
            cache: false,
            success: function(result) {
                var contenidoHtml = "";
                for(var i=0 ; i < result.length ; i++){
                    var unaFila = result[i];
                    contenidoHtml += "<label style=\"border: 2px solid #000; margin: 2px 2px 2px 2px; padding: 2px 2px 2px 2px;\" ><input type='checkbox' name='";
                    contenidoHtml += unaFila[0];
                    contenidoHtml += "'/>";
                    contenidoHtml += unaFila[1];
                    contenidoHtml += "</label>";                    
                }
            }
     
     
 }

