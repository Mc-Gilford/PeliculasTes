CREATE DATABASE film;
USE film;


CREATE TABLE actors(
    actorId int NOT NULL PRIMARY KEY,
    name varchar(60), 
    genre varchar(100),
    date date
);

CREATE TABLE directors(
    directorId int NOT NULL PRIMARY KEY,
    name varchar(60), 
    genre varchar(100),
    date date
);

CREATE TABLE films(
    filmId int NOT NULL ,
    name varchar(50), 
    description varchar(255),
    genre varchar(100),
    date date,
    poster varchar(50),
    PRIMARY KEY (filmId)
);

CREATE TABLE register_films(
    registerFilmsId int NOT NULL AUTO_INCREMENT,
    filmId int NOT NULL ,
    directorId int NOT NULL,
    actorId int NOT NULL,
    PRIMARY KEY (registerFilmsId),
    FOREIGN KEY (filmId) REFERENCES films(filmId),
    FOREIGN KEY (directorId) REFERENCES directors(directorId),
    FOREIGN KEY (actorId) REFERENCES actors(actorId)
);

INSERT INTO `actors` (`actorId`, `name`, `genre`, `date`) VALUES
(1, 'Will Smith', 'M', '1980-12-01'),
(2, 'Robie Willians', 'M', '1970-08-13'),
(3, 'Rob Scheneider', 'M', '1985-07-03'),
(4, 'Nicholas Cage', 'M', '1970-12-15');

INSERT INTO `directors` (`directorId`, `name`, `genre`, `date`) VALUES
(1, 'Alfonso Quaron', 'M', '1980-12-01'),
(2, 'Michael Mann', 'M', '1970-08-13'),
(3, 'Mel Gibson', 'M', '1985-07-03'),
(4, 'Steven Spilberg', 'M', '1970-12-15');

INSERT INTO `films` (`filmId`, `name`, `description`, `genre`, `date`, `poster`) VALUES
(1, 'Gravedad', 'Ryan Stone (Sandra Bullock) es una especialista\r\n en su primera misión a bordo del transbordador espacial Explorer. ... Kowalski rápidamente recupera a Stone y \r\n emprenden el regreso al transbordador espacial. Descubren que el transbordador ha quedado da', 'Science-Fiction', '1980-12-01', 'views/src/img/gravity.jpg'),
(2, 'El ultimo de los mohicanos', 'Ambientada en el año 1757, \r\ndurante el transcurso de la guerra entre los ejércitos de Francia e Inglaterra en tierras norteamericanas por \r\nel control de las colonias. Ojo de Halcón, un hombre blanco adoptado por los indios mohicanos,\r\n rescata de una em', 'Historical', '1970-08-13', 'views/src/img/mohicano.jpg'),
(3, 'Hancock', 'La historia gira alrededor de John Hancock, un superhéroe odiado por la gente,\r\n con problemas de alcoholismo y que se encuentra con el experto en relaciones públicas Ray Embrey (Jason Bateman), \r\nque le ayudará a intentar reconciliarse con la sociedad y ', 'Heroes', '1985-07-03', 'views/src/img/hancock.jpg'),
(4, 'Wrong turn', 'Sendero al infierno narra la historia de un grupo de amigos que, haciendo senderismo \r\nmientras recorren el camino los Apalaches en Estados Unidos, caen en una trampa.', 'Terror', '1970-12-15', 'views/src/img/wrong-turn-3.jpg');

INSERT INTO `register_films` (`registerFilmsId`, `filmId`, `directorId`, `actorId`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3),
(4, 4, 4, 4),
(5, 1, 2, 1),
(6, 1, 2, 3),
(7, 4, 2, 3);


SELECT F.name, F.description, F.poster, D.name, A.name FROM films F, directors D, actors A, register_films R
WHERE R.filmId=F.filmId AND R.actorId=A.actorId AND R.directorId=D.directorId;