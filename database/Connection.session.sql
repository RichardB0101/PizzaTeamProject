--@block
CREATE DATABASE IF NOT EXISTS projektdb;


--@block
--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY(`user_id`)
);
--@block
--
-- Table structure for table `pizzas`
--
CREATE TABLE IF NOT EXISTS `pizzas` (
  `pizza_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`pizza_id`)
);

--@block
--
-- Dumping data for table `pizzas`
-- Note dla Pana, to trzeba wstawic recznie, aby skrypt nie uruchomil sie jeszcze raz

INSERT INTO `pizzas` (`pizza_id`, `name`, `price`, `description`, `img`) VALUES
(1, 'Pepperoni', '9', 'Peperoni dešra, mocarela, rūkytas lydytas sūris, saulėje džiovintų pomidorų padažas, svogūnū traškučiai, gražgarstės, aliejaus ir česnakų padažas, raudonėliai. \r\n', 'img/pepperoni NEW.png'),
(2, 'Meksikietiška', '9', 'Malta mėsa, mocarela, svogūnai, juodosios alyvuogės, konservuotos paprikos, konservuoti jalapeno pipirai, saldžiaaštris padažas', 'img/meksikietiska NEW.png'),
(3, 'Kaimiška', '9', 'Šoninė, mocarela, svogūnai, konservuoti agurkai, krapai, kepta vištiena, mocarela, vyšniniai pomidorai, agurkai, paprikai, pievagrybiai', 'img/kaimiška NEW.png'),
(4, 'Grybų', '9', 'Kepta vištiena, kumpis, mocarela, konservuoti agurkai, konservuotos paprikos, česnakinis padažas, pievagrybiai, kelmučiai', 'img/grybu NEW.png'),
(5, 'Aštrioji', '9', 'Malta mėsa, plėšyta kiauliena, mocarela, pievagrybiai, konservuoti jalapeno pipirai, svogūnai, aštrūs raudonieji pipirai, chipotle padažas', 'img/astrioji NEW.png'),
(6, '4 Sezonų', '9', 'Pepperoni, kepta vištiena, mocarela, konservuoti ananasai, pievagrybiai, vyšniniai pomidorai, špinatai, juodosios alyvuogės', 'img/4 sezonu NEW.png');
