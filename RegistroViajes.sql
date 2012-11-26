CREATE DATABASE taller_carga;
USE taller_carga;
CREATE TABLE registro_viajes (
codigoViaje INTEGER PRIMARY KEY AUTO_INCREMENT,
documentoPasajero INTEGER,
fechaEntrada DATE,
horaEntrada TIME,
minutosEntrada INTEGER ,
nombreEstacionOrigen VARCHAR(50),
nombreEstacionDestino VARCHAR(50)
);

SELECT * FROM registro_viajes;
INSERT INTO registro_viajes VALUES(1,143952205,'2012-11-23','12:30:23',5,'Nuevo Latir','Santa Monica');
DELETE FROM registro_viajes;
DROP TABLE registro_viajes;