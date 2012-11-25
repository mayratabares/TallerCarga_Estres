<?php

include_once '../AccesoDatos/conexion.php';
$opcion = $_GET['opcion'];

$conexion = new Conexion();


if ($opcion == 1) {
    $conexion->Conectar();
    $sql = "SELECT * FROM registro_viajes";
    $respuesta = mysql_query($sql);
    $filas = array();
    while ($row = mysql_fetch_array($respuesta)) {
        $filas [] = $row;
    }
    $conexion->Cerrar();
    echo json_encode($filas);
}

if ($opcion == 2) {
    $viaje = $_GET['viaje'];
    $conexion->Conectar();
    $sql = "DELETE FROM registro_viajes WHERE codigoViaje=" . $viaje;
    $respuesta = mysql_query($sql);
    $conexion->Cerrar();
}
?>
