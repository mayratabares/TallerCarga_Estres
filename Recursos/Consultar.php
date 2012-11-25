<?php

include_once './AccesoDatos/conexion.php';

$conexion = new Conexion();
$conexion->Conectar();

$sql = "SELECT * FROM registro_viajes";
$respuesta = mysql_query($sql);
$filas = array();
while ($row = mysql_fetch_array($respuesta)) {
    $filas [] = $row;
}
$conexion->Cerrar();
return json_encode($filas);
?>
