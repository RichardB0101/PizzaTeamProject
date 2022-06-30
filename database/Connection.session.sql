--@block
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT NOT NULL,
    name varchar(255) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    primary key (user_id)

);


--@block
SHOW DATABASES;

--@block
--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`pizza_id`, `name`, `price`, `description`, `img`) VALUES
(1, 'Pepperoni', '9', 'Peperoni dešra, mocarela, rūkytas lydytas sūris, saulėje džiovintų pomidorų padažas, svogūnū traškučiai, gražgarstės, aliejaus ir česnakų padažas, raudonėliai. \r\n', 'pepperoni NEW'),
(2, 'Meksikietiška', '9', 'Malta mėsa, mocarela, svogūnai, juodosios alyvuogės, konservuotos paprikos, konservuoti jalapeno pipirai, saldžiaaštris padažas', 'meksikietiska NEW'),
(3, 'Kaimiška', '9', 'Šoninė, mocarela, svogūnai, konservuoti agurkai, krapai, kepta vištiena, mocarela, vyšniniai pomidorai, agurkai, paprikai, pievagrybiai', 'kaimiška NEW'),
(4, 'Grybų', '9', 'Kepta vištiena, kumpis, mocarela, konservuoti agurkai, konservuotos paprikos, česnakinis padažas, pievagrybiai, kelmučiai', 'grybu NEW'),
(5, 'Aštrioji', '9', 'Malta mėsa, plėšyta kiauliena, mocarela, pievagrybiai, konservuoti jalapeno pipirai, svogūnai, aštrūs raudonieji pipirai, chipotle padažas', 'astrioji NEW'),
(6, '4 Sezonų', '9', 'Pepperoni, kepta vištiena, mocarela, konservuoti ananasai, pievagrybiai, vyšniniai pomidorai, špinatai, juodosios alyvuogės', '4 sezonu NEW');


--@block
SHOW COLUMNS FROM users;

--@block
DROP TABLE users;

--@block

INSERT INTO users(name, password)
VALUES
('Garry', 'larom14'),
('Grami', '5421'),
('Guru', '5432'),
('Alfred', 'rrar');



--@block
TRUNCATE TABLE users;

--@block
SELECT * FROM users;


--@block
INSERT INTO users(name, password)
VALUES
('Murka', 'Parapetas');


--@block
IF EXISTS (SELECT * FROM users WHERE name = 'Murka')
BEGIN

INSERT INTO users(name, password)
VALUES
('Murka', 'Parapetas')
END
;


--@block
SELECT name
FROM users
WHERE EXISTS (SELECT * FROM users WHERE name = 'Murka');