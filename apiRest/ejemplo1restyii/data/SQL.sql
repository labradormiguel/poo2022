--DROP DATABASE IF EXISTS servidorRest;
CREATE DATABASE servidorRest;
USE servidorRest;
CREATE TABLE peliculas(
  id int AUTO_INCREMENT,
  nombre varchar(200),
  anno int,
  duracion int,
  clasificacion enum('Apta para todos los públicos','No recomendada para menores de 7 años','No recomendada para menores de 12 años','No recomendada para menores de 18 años'),
  PRIMARY KEY(id)
);


INSERT INTO peliculas (nombre, anno, duracion, clasificacion)
  VALUES ('Sin tiempo para morir', 2021, 150, 'Apta para todos los públicos'),
  ('Nadie',2022,120,'No recomendada para menores de 12 años'),
  ('Contacto sangriento',1988,150,'No recomendada para menores de 18 años'),
  ('Robocop',1987,102,'No recomendada para menores de 12 años'),
  ('Robocop 2',1990,112,'No recomendada para menores de 12 años'),
  ('Fast & Furious 7',2015,138,'No recomendada para menores de 18 años'),
  ('Fast & Furious 6',2013,125,'No recomendada para menores de 18 años'),
  ('Fast & Furious 5',2011,120,'No recomendada para menores de 18 años'),
  ('Fast & Furious 4',2009,120,'No recomendada para menores de 18 años'),
  ('Fast & Furious 3',2006,117,'No recomendada para menores de 18 años'),
  ('Fast & Furious 2',2003,115,'No recomendada para menores de 18 años'),
  ('Fast & Furious',2001,107,'No recomendada para menores de 18 años'),
  ('Matrix',1999,136,'No recomendada para menores de 12 años'),
  ('Matrix Reloaded',2003,140,'No recomendada para menores de 12 años'),
  ('Matrix Revolutions',2003,129,'No recomendada para menores de 12 años'),
  ('Depredador',1987,102,'No recomendada para menores de 18 años'),
  ('Aliens: El regreso',1986,150,'No recomendada para menores de 12 años'),
  ('Alien: el octavo pasajero',1979,116,'No recomendada para menores de 12 años'),
  ('Alien 3',1992,140,'No recomendada para menores de 18 años'),
  ('El caso Bourne',2002,125,'Apta para todos los públicos'),
  ('Venganza',2008,115,'Apta para todos los públicos'),
  ('Venganza Conexión Estambul',2012,102,'Apta para todos los públicos'),
  ('Venganza 3',2015,112,'Apta para todos los públicos'),
  ('Acorralado',1982,95,'No recomendada para menores de 12 años'),
  ('Rambo 2',1985,96,'No recomendada para menores de 18 años'),
  ('Rambo 3',1988,101,'No recomendada para menores de 18 años'),
  ('John Rambo: vuelta al infierno',2008,100,'No recomendada para menores de 18 años'),
  ('Rambo V: Last Blood',2019,89,'No recomendada para menores de 18 años'),
  ('Commando',1985,95,'No recomendada para menores de 12 años'),
  ('Superdetective en Hollywood',1984,100,'Apta para todos los públicos'),
  ('Superdetective en Hollywood 2',1987,102,'Apta para todos los públicos'),
  ('Superdetective en Hollywood 3',1994,103,'Apta para todos los públicos'),
  ('Casino Royale',2006,144,'Apta para todos los públicos'),
  ('La jungla de cristal',1988,131,'Apta para todos los públicos'),
  ('La jungla de cristal 2',1990,124,'Apta para todos los públicos'),
  ('La jungla de cristal 3',1995,131,'Apta para todos los públicos'),
  ('La jungla de cristal 4',2007,128,'Apta para todos los públicos'),
  ('La jungla: un buen día para morir',2013,106,'Apta para todos los públicos'),
  ('Dos policías rebeldes',1995,120,'No recomendada para menores de 18 años'),
  ('Dos policías rebeldes 2',2003,150,'No recomendada para menores de 18 años'),
  ('Dos policías rebeldes 3',2020,125,'No recomendada para menores de 18 años'),
  ('Terminator',1988,108,'No recomendada para menores de 18 años'),
  ('Terminator 2: el juicio final',1991,137,'No recomendada para menores de 12 años'),
  ('Terminator 3: La rebelión de las máquinas',2003,107,'No recomendada para menores de 12 años'),
  ('Terminator 4: Salvation',2009,118,'No recomendada para menores de 12 años'),
  ('Terminator 5: Génesis',2015,128,'No recomendada para menores de 12 años'),
  ('Terminator 6: Destino oscuro',2019,128,'No recomendada para menores de 12 años'),
  ('Operación dragón',1973,100,'Apta para todos los públicos'),
  ('Arma letal',1987,118,'Apta para todos los públicos'),
  ('Arma letal 2',1989,118,'Apta para todos los públicos'),
  ('Arma letal 3',1992,119,'Apta para todos los públicos'),
  ('Arma letal 4',1998,127,'No recomendada para menores de 12 años'),
  ('El ultimo gran heroe',1993,130,'Apta para todos los públicos'),
  ('El quinto elemento',1997,127,'Apta para todos los públicos'),
  ('Mentiras arriesgadas',1994,118,'Apta para todos los públicos'),
  ('Crank: Veneno en la sangre',2006,110,'No recomendada para menores de 18 años');

CREATE TABLE IF NOT EXISTS ciclista (
  -- CREAMOS LOS CAMPOS
  dorsal smallint(5) NOT NULL,
  nombre varchar(30) NOT NULL,
  edad smallint(5) DEFAULT NULL,
  nomequipo varchar(25) NOT NULL,
  -- RESTRICCIONES
  PRIMARY KEY (dorsal)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_spanish_ci; 

INSERT INTO `ciclista`(`dorsal`, `nombre`, `edad`, `nomequipo`)
VALUES (1, 'Miguel Induráin', 32, 'Banesto'),
  (2, 'Pedro Delgado', 35, 'Banesto'),
  (3, 'Alex Zulle', 27, 'ONCE'),
  (4, 'Tony Rominger', 30, 'Mapei-Clas'),
  (5, 'Gert-Jan Theunisse', 32, 'TVM'),
  (6, 'Adriano Baffi', 33, 'Mercatone Uno'),
  (7, 'Massimiliano Lelli', 30, 'Mercatone Uno'),
  (8, 'Jean Van Poppel', 33, 'Lotus Festina'),
  (9, 'Massimo Podenzana', 34, 'Navigare'),
  (10, 'Mario Cipollini', 28, 'Mercatone Uno'),
  (11, 'Flavio Giupponi', 31, 'Bresciali-Refin'),
  (12, 'Alessio Di Basco', 31, 'Amore Vita'),
  (13, 'Lale Cubino', 28, 'Seguros Amaya'),
  (14, 'Roberto Pagnin', 33, 'Navigare'),
  (15, 'Jesper Skibby', 31, 'TVM'),
  (16, 'Dimitri Konishev', 29, 'Jolly Club'),
  (17, 'Bruno Leali', 37, 'Bresciali-Refin'),
  (18, 'Robert Millar', 37, 'TVM'),
  (19, 'Julian Gorospe', 34, 'Banesto'),
  (20, 'Alfonso Gutiérrez', 29, 'Artiach'),
  (21, 'Erwin Nijboer', 31, 'Artiach'),
  (22, 'Giorgio Furlan', 32, 'Gewiss'),
  (23, 'Lance Armstrong', 27, 'Motorola'),
  (24, 'Claudio Chiappucci', 29, 'Carrera'),
  (25, 'Gianni Bugno', 32, 'Gatorade'),
  (26, 'Mikel Zarrabeitia', 27, 'Banesto'),
  (27, 'Laurent Jalabert', 28, 'ONCE'),
  (28, 'Jesus Montoya', 33, 'Banesto'),
  (29, 'Angel Edo', 28, 'Kelme'),
  (30, 'Melchor Mauri', 28, 'Banesto'),
  (31, 'Vicente Aparicio', 30, 'Banesto'),
  (32, 'Laurent Dufaux', 28, 'ONCE'),
  (33, 'Stefano della Santa', 29, 'Mapei-Clas'),
  (34, 'Angel Yesid Camargo', 30, 'Kelme'),
  (35, 'Erik Dekker', 28, 'Wordperfect'),
  (36, 'Gian Matteo Fagnini', 32, 'Mercatone Uno'),
  (37, 'Scott Sunderland', 29, 'TVM'),
  (38, 'Javier Palacin', 25, 'Euskadi'),
  (39, 'Rudy Verdonck', 30, 'Lotus Festina'),
  (40, 'Viatceslav Ekimov', 32, 'Wordperfect'),
  (41, 'Rolf Aldag', 25, 'Telecom'),
  (42, 'Davide Cassani', 29, 'TVM'),
  (43, 'Francesco Casagrande', 28, 'Mercatone Uno'),
  (44, 'Luca Gelfi', 27, 'Gatorade'),
  (45, 'Alberto Elli', 26, 'Artiach'),
  (46, 'Agustin Sagasti', 24, 'Euskadi'),
  (47, 'Laurent Pillon', 32, 'Gewiss'),
  (48, 'Marco Saligari', 29, 'Gewiss'),
  (49, 'Eugeni Berzin', 23, 'Gewiss'),
  (50, 'Fernando Escartin', 27, 'Mapei-Clas'),
  (51, 'Udo Bolts', 30, 'Telecom'),
  (52, 'Vladislav Bobrik', 26, 'Gewiss'),
  (53, 'Michele Bartoli', 28, 'Mercatone Uno'),
  (54, 'Steffen Wesemann', 30, 'Telecom'),
  (55, 'Nicola Minali', 28, 'Gewiss'),
  (56, 'Andrew Hampsten', 29, 'Banesto'),
  (57, 'Stefano Zanini', 28, 'Navigare'),
  (58, 'Gerd Audehm', 34, 'Telecom'),
  (59, 'Mariano Picolli', 28, 'Mercatone Uno'),
  (60, 'Giovanni Lombardi', 28, 'Bresciali-Refin'),
  (61, 'Walte Castignola', 26, 'Navigare'),
  (62, 'Raul Alcala', 30, 'Motorola'),
  (63, 'Alvaro Mejia', 32, 'Motorola'),
  (64, 'Giuseppe Petito', 28, 'Mercatone Uno'),
  (65, 'Pascal Lino', 29, 'Amore Vita'),
  (66, 'Enrico Zaina', 24, 'Gewiss'),
  (67, 'Armand de las Cuevas', 28, 'Castorama'),
  (68, 'Angel Citracca', 28, 'Navigare'),
  (69, 'Eddy Seigneur', 27, 'Castorama'),
  (70, 'Sandro Heulot', 29, 'Banesto'),
  (71, 'Prudencio Induráin', 27, 'Banesto'),
  (72, 'Stefano Colage', 28, 'Bresciali-Refin'),
  (73, 'Laurent Fignon', 35, 'Gatorade'),
  (74, 'Claudio Chioccioli', 36, 'Amore Vita'),
  (75, 'Juan Romero', 32, 'Seguros Amaya'),
  (76, 'Marco Giovannetti', 34, 'Gatorade'),
  (77, 'Javier Mauleon', 33, 'Mapei-Clas'),
  (78, 'Antonio Esparza', 35, 'Kelme'),
  (79, 'Johan Bruyneel', 33, 'ONCE'),
  (80, 'Federico Echave', 37, 'Mapei-Clas'),
  (81, 'Piotr Ugrumov', 33, 'Gewiss'),
  (82, 'Edgar Corredor', 30, 'Kelme'),
  (83, 'Hernan Buenahora', 32, 'Kelme'),
  (84, 'Jon Unzaga', 31, 'Mapei-Clas'),
  (85, 'Dimitri Abdoujaparov', 30, 'Carrera'),
  (86, 'Juan Martinez Oliver', 32, 'Kelme'),
  (87, 'Fernando Mota', 32, 'Artiach'),
  (88, 'Angel Camarillo', 28, 'Mapei-Clas'),
  (89, 'Stefan Roche', 36, 'Carrera'),
  (90, 'Ivan Ivanov', 27, 'Artiach'),
  (91, 'Nestor Mora', 28, 'Kelme'),
  (92, 'Federico Garcia', 27, 'Artiach'),
  (93, 'Bo Hamburger', 29, 'TVM'),
  (94, 'Marino Alonso', 30, 'Banesto'),
  (95, 'Manuel Guijarro', 31, 'Lotus Festina'),
  (96, 'Tom Cordes', 29, 'Wordperfect'),
  (97, 'Casimiro Moreda', 28, 'ONCE'),
  (98, 'Eleuterio Anguita', 25, 'Artiach'),
  (99, 'Per Pedersen', 29, 'Seguros Amaya'),
  (100, 'William Palacios', 30, 'Jolly Club');


