<?php

include_once '../AccesoDatos/conexion.php';
$opcion = $_GET['opcion'];

switch ($opcion) {
    //insertar
    case 1:
        $doc = $_GET['doc'];
        $fecha = $_GET['fecha'];
        $hora = $_GET['hora'];
        $min = $_GET['min'];
        $estacionOrigen = $_GET['estacionOrigen'];
        $estacionDestino = $_GET['estacionDestino'];
        $conexion = new Conexion();
        $conexion->Conectar();
        $sql = "INSERT INTO registro_viajes (documentoPasajero,fechaEntrada,horaEntrada,minutosEntrada,nombreEstacionOrigen,nombreEstacionDestino) VALUES ('".$doc."','".$fecha."','".$hora."','".$min."','".$estacionOrigen."','".$estacionDestino."')";
        $respuesta = mysql_query($sql);
        $conexion->Cerrar();
        echo ("El viaje ser registro con exito!");
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
    
    case 3:
        $conexion = new Conexion();
        $viaje = $_GET['viaje'];
        $conexion->Conectar();
        $sql = "SELECT * FROM registro_viajes WHERE codigoViaje=" . $viaje;
        $respuesta = mysql_query($sql);
        $row = mysql_fetch_array($respuesta);
        $conexion->Cerrar();
        echo json_encode($row);
        break;
        
}
?>
