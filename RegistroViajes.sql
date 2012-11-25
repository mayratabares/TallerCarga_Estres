CREATE TABLE registro_viajes (
codigoViaje INTEGER PRIMARY KEY AUTO_INCREMENT,
documentoPasajero INTEGER,
fechaEntrada DATE,
horaEntrada TIME,
minutosEntrada INTEGER ,
nombreEstacionOrigen VARCHAR(50),
nombreEstacionDestino VARCHAR(50)
);
