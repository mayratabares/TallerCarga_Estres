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
INSERT INTO registro_viajes VALUES('1','143952205','2012-11-23','12:30:23','5','Nuevo Latir','Santa Monica');


CREATE TABLE Estacion (nombre VARCHAR (50));
INSERT INTO Estacion VALUES('Chiminangos');
INSERT INTO Estacion VALUES('Flora Industrial');
INSERT INTO Estacion VALUES('Salomia');
INSERT INTO Estacion VALUES('Popular');
INSERT INTO Estacion VALUES('Manzanares');
INSERT INTO Estacion VALUES('Fatima');
INSERT INTO Estacion VALUES('Piloto');
INSERT INTO Estacion VALUES('San Nicolas');
INSERT INTO Estacion VALUES('Rio Cali');
INSERT INTO Estacion VALUES('Terminal de Cabecera Andres Sanin');
INSERT INTO Estacion VALUES('Siete de Agosto');
INSERT INTO Estacion VALUES('El Trebol');
INSERT INTO Estacion VALUES('Villacolombia');
INSERT INTO Estacion VALUES('Chapinero"');
INSERT INTO Estacion VALUES('Atanasio Girardot');
INSERT INTO Estacion VALUES('Floresta');
INSERT INTO Estacion VALUES('Belalcazar');
INSERT INTO Estacion VALUES('San Pascual');
INSERT INTO Estacion VALUES('San Bosco ');
INSERT INTO Estacion VALUES('Sucre');
INSERT INTO Estacion VALUES('Petecuy');
INSERT INTO Estacion VALUES('San Pedro');
INSERT INTO Estacion VALUES('La Ermita');
INSERT INTO Estacion VALUES('Plaza Caycedo');
INSERT INTO Estacion VALUES('Centro');
INSERT INTO Estacion VALUES('Santa Rosa');
INSERT INTO Estacion VALUES('Fray Damian');
INSERT INTO Estacion VALUES('Santa Librada');
INSERT INTO Estacion VALUES('Manzana del Saber');
INSERT INTO Estacion VALUES('Estadio');
INSERT INTO Estacion VALUES('Tequendama');
INSERT INTO Estacion VALUES('Lido');
INSERT INTO Estacion VALUES('Unidad Deportiva');
INSERT INTO Estacion VALUES('Plaza de Toros');
INSERT INTO Estacion VALUES('Pampalinda');
INSERT INTO Estacion VALUES('Caldas');
INSERT INTO Estacion VALUES('Melendez');
INSERT INTO Estacion VALUES('Buitrera');
INSERT INTO Estacion VALUES('Univalle');
INSERT INTO Estacion VALUES('Universidades');
INSERT INTO Estacion VALUES('Terminal de Cabecera Menga');
INSERT INTO Estacion VALUES('Alamos');
INSERT INTO Estacion VALUES('Vipasa');
INSERT INTO Estacion VALUES('Prados del Norte');
INSERT INTO Estacion VALUES('Avenida de Las Americas ');
INSERT INTO Estacion VALUES('Versalles');
INSERT INTO Estacion VALUES('Torre de Cali');
INSERT INTO Estacion VALUES('Nuevo Latir');
INSERT INTO Estacion VALUES('Amanecer');
INSERT INTO Estacion VALUES('Troncal Unida');
INSERT INTO Estacion VALUES('Conquistadores');
INSERT INTO Estacion VALUES('Villanueva');
INSERT INTO Estacion VALUES('Santa Monica');
INSERT INTO Estacion VALUES('Primitivo');
INSERT INTO Estacion VALUES('Cien Palos');

