<?php
include_once '../AccesoDatos/conexion.php';
//Definimos la zona horaria para obtener la fecha y hora correctas.
date_default_timezone_set('America/Bogota');
set_time_limit(0);

//Retorna un Array con las estaciones del MIO(Masivo Integrado de Occidente)
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

//Retorna un Array con los documentos de los Pasajeros (documentos entre 1 y 15000)
function crearDocUsuarios() {
    $docs = array();
    for ($d = 0; $d < 15000; $d++) {
        $docs[$d] = $d + 1;
    }
    return $docs;
}

//Variables globales obtener los registros
$estaciones = crearEstaciones();
$pasajeros = crearDocUsuarios();

//Retorna un documento de Pasajero elegido aleatoriamente
//y elimina el elemento retornado del Array global "$pasajeros"
function getDocUsuario() {
    $nroPasajeros = count($GLOBALS['pasajeros']) - 1;
    $nroAleatorio = rand(0, $nroPasajeros);
    $salida = $GLOBALS['pasajeros'][$nroAleatorio];
    unset($GLOBALS['pasajeros'][$nroAleatorio]);
    $GLOBALS['pasajeros'] = array_values($GLOBALS['pasajeros']);
    return $salida;
}

//Retorna una estacion del MIO(Masivo Integrado de Occidente)
//elegida aleatoriamente del Array global "$estaciones"
function getEstacionOrigen() {
    $nroEstaciones = count($GLOBALS['estaciones']) - 1;
    $nroAleatorio = rand(0, $nroEstaciones);
    $estacion = $GLOBALS['estaciones'][$nroAleatorio];
    return $estacion;
}

//Retorna una estacion del MIO(Masivo Integrado de Occidente) elegida
//aleatoriamente del Array global "$estaciones" diferente de "$estacionSource"
function getEstacionDestino($estacionSource) {
    $estacion = $estacionSource;
    while ($estacion == $estacionSource) {
        $nroEstaciones = count($GLOBALS['estaciones']) - 1;
        $nroAleatorio = rand(0, $nroEstaciones);
        $estacion = $GLOBALS['estaciones'][$nroAleatorio];
    }
    return $estacion;
}

//Retorna una fecha aleatoriamente entre un año antes o despues a la fecha actual
function getFecha() {
    $diaEnSegundos = 86400;
    $nroAleatorio = $diaEnSegundos * rand(-365, 365);
    return date("Y-m-d", time() + $nroAleatorio);
}

;

//Retorna una hora aleatoriamente entre un 24 horas antes o despues a la hora actual
function getHora() {
    $horaAleatorio = 0;
    $seg = rand(0, 60);
    $horaAleatorio += $seg;
    $min = 60 * rand(0, 60);
    $horaAleatorio += $min;
    $hora = 3600 * rand(0, 24);
    $horaAleatorio += $hora;
    return date("h:i:s", time() + $horaAleatorio);
}

//Retorna un numero aleatorio entre 10 y 120
function getMinutos() {
    return rand(10, 120);
}


function insertarRegistrosAleatorios($nroRegistros) {
    printf("<br/>Inicio insertar: " . date("h:i:s"));
    $conexion = new Conexion();
    $conexion->Conectar();
    for ($r = 0; $r < $nroRegistros; $r++) {
        $docPasajero = getDocUsuario();
        $fecha = getFecha();
        $hora = getHora();
        $minutos = getMinutos();
        $estacionOrigen = getEstacionOrigen();
        $estacionDestino = getEstacionDestino($estacionOrigen);
        insertar($conexion,$docPasajero, $fecha, $hora, $minutos, $estacionOrigen, $estacionDestino);
    }
    $conexion->Cerrar();
    printf("<br/>Fin inserta: " . date("h:i:s"));
}

function insertar($conexion,$docUser, $f, $h, $minutos, $estacionOrigen, $estacionDestino) {
    $consulta = "";
    $consulta = "INSERT INTO registro_viajes(documentoPasajero,fechaEntrada,";
    $consulta .= "horaEntrada,minutosEntrada,nombreEstacionOrigen,";
    $consulta .= "nombreEstacionDestino) VALUES ('";
    $consulta .= $docUser . "','";
    $consulta .= $f . "','";
    $consulta .= $h . "','";
    $consulta .= $minutos . "','";
    $consulta .= $estacionOrigen . "','";
    $consulta .= $estacionDestino . "')";    
    mysql_query($consulta);    
}

insertarRegistrosAleatorios(100);
?>
