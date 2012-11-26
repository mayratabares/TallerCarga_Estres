<?php

include_once '../AccesoDatos/conexion.php';
$opcion = $_GET['opcion'];

switch ($opcion) {
    case 1:
        break;
    //Eliminar viajes
    case 2:
        $conexion = new Conexion();
        $viaje = $_GET['viaje'];
        $conexion->Conectar();
        $sql = "DELETE FROM registro_viajes WHERE codigoViaje=" . $viaje;
        $respuesta = mysql_query($sql);
        $conexion->Cerrar();
        break;
}

?>
