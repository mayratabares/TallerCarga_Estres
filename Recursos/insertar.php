<?php

date_default_timezone_set('GMT');

function crearEstaciones() {
    $estaciones = array();
    $estaciones[] = "Chiminangos ";
    $estaciones[] = "Flora Industrial";
    $estaciones[] = "Salomia";
    $estaciones[] = "Popular";
    $estaciones[] = "Manzanares";
    $estaciones[] = "Fatima";
    $estaciones[] = "Piloto";
    $estaciones[] = "San Nicolas";
    $estaciones[] = "Rio Cali";
    $estaciones[] = "Terminal de Cabecera Andres Sanin ";
    $estaciones[] = "Siete de Agosto";
    $estaciones[] = "El Trebol";
    $estaciones[] = "Villacolombia";
    $estaciones[] = "Chapinero";
    $estaciones[] = "Atanasio Girardot";
    $estaciones[] = "Floresta";
    $estaciones[] = "Belalcazar";
    $estaciones[] = "San Pascual";
    $estaciones[] = "San Bosco ";
    $estaciones[] = "Sucre ";
    $estaciones[] = "Petecuy";
    $estaciones[] = "San Pedro";
    $estaciones[] = "La Ermita";
    $estaciones[] = "Plaza Caycedo";
    $estaciones[] = "Centro";
    $estaciones[] = "Santa Rosa";
    $estaciones[] = "Fray Damian";
    $estaciones[] = "Santa Librada";
    $estaciones[] = "Manzana del Saber";
    $estaciones[] = "Estadio";
    $estaciones[] = "Tequendama";
    $estaciones[] = "Lido";
    $estaciones[] = "Unidad Deportiva";
    $estaciones[] = "Plaza de Toros";
    $estaciones[] = "Pampalinda";
    $estaciones[] = "Refugio";
    $estaciones[] = "Caldas";
    $estaciones[] = "Capri";
    $estaciones[] = "Melendez";
    $estaciones[] = "Buitrera";
    $estaciones[] = "Univalle";
    $estaciones[] = "Universidades";
    $estaciones[] = "Terminal de Cabecera Menga";
    $estaciones[] = "Alamos ";
    $estaciones[] = "Vipasa";
    $estaciones[] = "Prados del Norte";
    $estaciones[] = "Avenida de Las Americas ";
    $estaciones[] = "Versalles";
    $estaciones[] = "Torre de Cali ";
    $estaciones[] = "Nuevo Latir";
    $estaciones[] = "Amanecer";
    $estaciones[] = "Troncal Unida";
    $estaciones[] = "Conquistadores";
    $estaciones[] = "Villanueva";
    $estaciones[] = "Santa Monica";
    $estaciones[] = "Primitivo";
    $estaciones[] = "Cien Palos";
    return $estaciones;
}

function creardocUsuarios(){
    $docs = array();
    for ($d = 0; $d < 15000; $d++) {
        $docs[] = $d+1;
    }
    return $docs;
}

//Variables para registros
$estaciones = crearEstaciones();
$pasajeros = creardocUsuarios();
$fecha = date("d/m/Y");

function getDocUsuario() {
    $nroPasajeros = count($GLOBALS['pasajeros'])-1;
    $nroAleatorio = rand(0, $nroPasajeros);
    $salida = $GLOBALS['pasajeros'][$nroAleatorio];
    unset($GLOBALS['pasajeros'][$nroAleatorio]);
    $GLOBALS['pasajeros'] = array_values($GLOBALS['pasajeros']);
    return $salida;
}

function getEstacionOrigen(){
    $nroEstaciones = count($GLOBALS['estaciones'])-1;
    $nroAleatorio = rand(0, $nroEstaciones);
    $estacion = $GLOBALS['estaciones'][$nroAleatorio];
    return $estacion;
}

function getEstacionDestino($estacionSource) {
    $estacion = $estacionSource;
    while ($estacion == $estacionSource) {
        $nroEstaciones = count($GLOBALS['estaciones'])-1;
        $nroAleatorio = rand(0, $nroEstaciones);
        $estacion = $GLOBALS['estaciones'][$nroAleatorio];        
    }
    return $estacion;
}

function getFecha(){
    $diaEnSegundos = 86400;
    $nroAleatorio = $diaEnSegundos * rand(-365, 365);
    return date("Y-m-d",  time() + $nroAleatorio);
};

function getHora(){
    $horaEnSegundos = (rand(0, 60)/60) * 3600;
    $nroAleatorio = $horaEnSegundos * rand(-24, 24);
    return date("h:m:s",  time() + $nroAleatorio);
}

function getRegistroAleatorio() {
    
}

function insertar($docUser, $f, $h, $minutos, $estacionOrigen, $estacionDestino) {
    $consulta = "INSERT INTO registro_viajes VALUES ";
}



$dia = date("d");
$mes = date("m");
$ano = date("Y");


$hora = date("h:i:s");
$hora1 = date("h:i:s", time() - 3600);

echo $fecha . "<br/>";
echo $hora . "<br/>";
echo $hora1 . "<br/>";

$a = getEstacionOrigen();
echo "<br/>EO:". $a;
echo "<br/>ED:". getEstacionDestino($a);
echo "<br/>FA:". getFecha();
echo "<br/>HA:". getHora();

?>
