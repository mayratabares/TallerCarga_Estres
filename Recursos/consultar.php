<?php

include_once '../AccesoDatos/conexion.php';

$conexion = new Conexion();
$conexion->Conectar();

$sql = "SELECT * FROM registro_viajes";
$respuesta = mysql_query($sql);
$conexion->Cerrar();
printf('<table border="1"  bordercolor="red">
    <tr>
                                <th>Cod.Viaje</th>
                                <th>Doc. Pasajero</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Minutos Espera</th>
                                <th>Estacion Origen</th>
                                <th>Estacion Destino</th>                                
                            </tr>');
while ($row = mysql_fetch_array($respuesta)) {
    printf("<tr><td>" . $row[0] . "</td>
                                    <td>" . $row[1] . "</td> <td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td></tr>");
}
echo '</table>';
?>