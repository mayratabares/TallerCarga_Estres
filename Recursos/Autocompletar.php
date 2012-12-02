<?php
require_once '../AccesoDatos/Conexion.php';
$conexion = new Conexion();

$term = $_GET['term'];
        $conexion->Conectar();
        $sql = "SELECT nombre FROM Estacion WHERE nombre LIKE '%$term%'";
        $respuesta = mysql_query($sql);
        $filas = array();
        while ($row = mysql_fetch_array($respuesta)) {
            $filas [] = $row ["nombre"];
        }
        $conexion->cerrar();
        echo json_encode($filas);

?>
