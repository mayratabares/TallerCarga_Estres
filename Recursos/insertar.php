<?php

date_default_timezone_set('GMT');

$estaciones = array();
$estaciones[] = "Chiminangos ";
$estaciones[] = "Flora Industrial";
$estaciones[] = "Salomia";
$estaciones[] = "Popular";
$estaciones[] = "Manzanares";
$estaciones[] = "Fátima";
$estaciones[] = "Piloto";
$estaciones[] = "San Nicolas";
$estaciones[] = "Río Cali";
$estaciones[] = "Terminal de Cabecera Andrés Sanín ";
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
$estaciones[] = "Meléndez";
$estaciones[] = "Buitrera";
$estaciones[] = "Univalle";
$estaciones[] = "Universidades";
$estaciones[] = "Terminal de Cabecera Menga";
$estaciones[] = "Álamos ";
$estaciones[] = "Vipasa";
$estaciones[] = "Prados del Norte";
$estaciones[] = "Avenida de Las Américas ";
$estaciones[] = "Versalles";
$estaciones[] = "Torre de Cali ";
$estaciones[] = "Nuevo Latir";
$estaciones[] = "Amanecer";
$estaciones[] = "Troncal Unida";
$estaciones[] = "Conquistadores";
$estaciones[] = "Villanueva";
$estaciones[] = "Santa Mónica";
$estaciones[] = "Primitivo";
$estaciones[] = "Cien Palos";

$documento = 0;
$dia = date("d");
$mes = date("m");
$ano = date("Y");

$fecha = $dia.".".$mes.".".$ano;
$hora = date("h:i:s");
$hora1 = date("h:i:s",  time()+3600);

echo $fecha."<br/>";
echo $hora."<br/>";
echo $hora1."<br/>";

function insertar($docUser,$f,$h,$minutos,$estacionOrigen,$estacionDestino){
    
}

?>
