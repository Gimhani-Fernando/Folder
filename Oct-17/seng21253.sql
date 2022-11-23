-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2022 at 02:37 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seng21253`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `DistrictCode` varchar(3) NOT NULL,
  `District` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistrictCode`, `District`) VALUES
('1-1', 'Colombo'),
('1-2', 'Gampaha'),
('1-3', 'Kalutara'),
('2-1', 'Kandy'),
('2-2', 'Matale'),
('2-3', 'Nuwara Eliya'),
('3-1', 'Galle'),
('3-2', 'Matara'),
('3-3', 'Hambantota'),
('4-1', 'Jaffna'),
('4-2', 'Mannar'),
('4-3', 'Vavuniya'),
('4-4', 'Mullaitivu'),
('4-5', 'Kilinochchi'),
('5-1', 'Batticaloa'),
('5-2', 'Ampara'),
('5-3', 'Trincomalee'),
('6-1', 'Kurunegala'),
('6-2', 'Puttalam'),
('7-1', 'Anuradhapura'),
('7-2', 'Polonnaruwa'),
('8-1', 'Badulla'),
('8-2', 'Moneragala'),
('9-1', 'Ratnapura'),
('9-2', 'Kegalle');

-- --------------------------------------------------------

--
-- Table structure for table `divsec`
--

DROP TABLE IF EXISTS `divsec`;
CREATE TABLE IF NOT EXISTS `divsec` (
  `DivSecCode` varchar(6) NOT NULL,
  `DivSec` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divsec`
--

INSERT INTO `divsec` (`DivSecCode`, `DivSec`) VALUES
('1-1-03', 'Colombo'),
('1-1-06', 'Kolonnawa'),
('1-1-09', 'Kaduwela'),
('1-1-12', 'Homagama'),
('1-1-15', 'Hanwella'),
('1-1-18', 'Padukka'),
('1-1-21', 'Maharagama'),
('1-1-24', 'Sri Jayawardanapura Kotte'),
('1-1-27', 'Thimbirigasyaya'),
('1-1-30', 'Dehiwala-Mount Lavinia'),
('1-1-39', 'Ratmalana'),
('1-1-33', 'Moratuwa'),
('1-1-36', 'Kesbewa'),
('1-2-03', 'Negombo'),
('1-2-06', 'Katana'),
('1-2-09', 'Divulapitiya'),
('1-2-12', 'Mirigama'),
('1-2-15', 'Minuwangoda'),
('1-2-18', 'Wattala'),
('1-2-21', 'Ja-Ela'),
('1-2-24', 'Gampaha'),
('1-2-27', 'Attanagalla'),
('1-2-30', 'Dompe'),
('1-2-33', 'Mahara'),
('1-2-36', 'Kelaniya'),
('1-2-39', 'Biyagama'),
('1-3-03', 'Panadura'),
('1-3-06', 'Bandaragama'),
('1-3-09', 'Horana'),
('1-3-10', 'Ingiriya'),
('1-3-12', 'Bulathsinhala'),
('1-3-15', ' Madurawela'),
('1-3-18', 'Millaniya'),
('1-3-21', 'Kalutara'),
('1-3-24', 'Beruwala'),
('1-3-27', 'Dodangoda'),
('1-3-30', 'Mathugama'),
('1-3-33', 'Agalawatta'),
('1-3-36', 'Palindanuwara'),
('1-3-39', 'Walallavita'),
('2-1-03', 'Thumpane'),
('2-1-06', 'Poojapitiya'),
('2-1-09', 'Akurana'),
('2-1-12', 'Pathdumbara'),
('2-1-15', 'Panvila'),
('2-1-18', 'Udadumbara'),
('2-1-21', 'Minipe'),
('2-1-24', 'Medadumbara'),
('2-1-27', 'Kundasale'),
('2-1-30', 'Kandy Four Gravets & Gangawata Korale'),
('2-1-33', 'Harispattuwa'),
('2-1-34', 'Hatharaliyadda'),
('2-1-36', 'Yatinuwara'),
('2-1-39', 'Udunuwara'),
('2-1-42', 'Doluwa'),
('2-1-45', 'Pathahewaheta'),
('2-1-48', 'Delthota'),
('2-1-51', 'Udapalatha'),
('2-1-54', 'Ganga Ihala Korale'),
('2-1-57', 'Pasbage Korale'),
('2-2-03', 'Galewela'),
('2-2-06', 'Dambulla'),
('2-2-09', 'Naula'),
('2-2-12', 'Pallepola'),
('2-2-15', 'Yatawatta'),
('2-2-18', 'Matale'),
('2-2-21', 'Ambanganga Korale'),
('2-2-24', 'Laggala-Pallegama'),
('2-2-27', 'Wilgamuwa'),
('2-2-30', 'Rattota'),
('2-2-33', 'Ukuwela'),
('2-3-03', 'Kothmale'),
('2-3-06', 'Hanguranketha'),
('2-3-09', 'Walpane'),
('2-3-12', 'Nuwara Eliya'),
('2-3-15', 'Ambagamuwa'),
('3-1-03', 'Benthota'),
('3-1-06', 'Balapitiya'),
('3-1-09', 'Karandeniya'),
('3-1-12', 'Elpitiya'),
('3-1-15', 'Niyagama'),
('3-1-18', 'Thawalama'),
('3-1-21', 'Neluwa'),
('3-1-24', 'Nagoda'),
('3-1-27', 'Baddegama'),
('3-1-30', 'Welivitiya-Divithura'),
('3-1-33', 'Ambalangoda'),
('3-1-36', 'Hikkaduwa'),
('3-1-39', 'Galle Four Gravets'),
('3-1-42', 'Bope-Poddala'),
('3-1-45', 'Akmeemana'),
('3-1-48', 'Yakkalamulla'),
('3-1-51', 'Imaduwa'),
('3-1-54', 'Habaraduwa'),
('3-1-57', 'Gonapinuwala'),
('3-2-03', 'Pitabeddara'),
('3-2-06', 'Kotapola'),
('3-2-09', 'Pasgoda'),
('3-2-12', 'Mulatiyana'),
('3-2-15', 'Athuraliya'),
('3-2-18', 'Akuressa'),
('3-2-21', 'Welipitiya'),
('3-2-24', 'Malimbada'),
('3-2-27', 'Kamburupitiya'),
('3-2-30', 'Hakmana'),
('3-2-33', 'Kirinda Puhulwella'),
('3-2-36', 'Thihagoda'),
('3-2-39', 'Weligama'),
('3-2-42', 'Four Gravets'),
('3-2-45', 'Devinuwara'),
('3-2-48', 'Dickwella'),
('3-3-03', 'Sooriyawewa'),
('3-3-06', 'Lunugamvehera'),
('3-3-09', 'Tissamaharama'),
('3-3-12', 'Hambantota'),
('3-3-15', 'Ambalantota'),
('3-3-18', 'Angunakolapelessa'),
('3-3-21', 'Weeraketiya'),
('3-3-24', 'Katuwana'),
('3-3-27', 'Okewela'),
('3-3-30', 'Beliatta'),
('3-3-33', 'Tangalle'),
('3-3-36', 'Walasmulla'),
('4-1-03', 'Kayts'),
('4-1-06', 'Valikamam West (Chankanai)'),
('4-1-09', 'Valikamam South-West (Sandilipay)'),
('4-1-12', 'Valikamam North (Tellipallai)'),
('4-1-15', 'Valikamam South (Uduvil)'),
('4-1-18', 'Valikamam South (Uduvil)'),
('4-1-21', '\"Vadamaradchy South-West, Karaveddy\"'),
('4-1-24', 'Vadamaradchi East (Maruthnkerny)'),
('4-1-27', 'Vadamaradchi North (Point Pedro)'),
('4-1-30', 'Thenmaradchi (Chavakachcheri)'),
('4-1-33', 'Nallur'),
('4-1-36', 'Jaffna'),
('4-1-39', '\"Island South ,Velanai\"'),
('4-1-42', 'Delft'),
('4-1-45', 'Karainagar'),
('4-2-03', 'Mannar Town'),
('4-2-06', 'Manthai West'),
('4-2-09', 'Madhu'),
('4-2-12', 'Nanaddan'),
('4-2-15', 'Musalai'),
('4-3-03', 'Vavuniya North'),
('4-3-06', 'Vavuniya South'),
('4-3-09', 'Vavuniya'),
('4-3-12', 'Vengalacheddikulam'),
('4-4-03', 'Thunukkai'),
('4-4-06', 'Manthai East'),
('4-4-09', 'Puthukudiyiruppu'),
('4-4-12', 'Oddusuddan'),
('4-4-15', 'Maritimepattu'),
('4-4-18', 'Welioya'),
('4-5-03', 'Pachchilaipalli'),
('4-5-06', 'Kandavalai'),
('4-5-09', 'Karachchi'),
('4-5-12', 'Poonakary'),
('5-1-03', 'Koralai Pattu North'),
('5-1-06', 'Koralai Pattu West (Oddamavadi)'),
('5-1-09', 'Koralai Pattu (Valachchenai)'),
('5-1-12', 'Eravur Pattu'),
('5-1-15', 'Eravur Town'),
('5-1-18', 'Manmunai North'),
('5-1-21', 'Manmunai West'),
('5-1-24', 'Kattankudy'),
('5-1-27', 'Manmunai Pattu (Arayampathy)'),
('5-1-30', 'Manmunai South-West'),
('5-1-33', 'Porativu Pattu'),
('5-1-36', 'Manmunai South & Eruvil Pattu'),
('5-1-39', 'Koralai Pattu South (Kiran)'),
('5-1-42', 'Koralai Pattu Central'),
('5-2-03', 'Dehiattakandiya'),
('5-2-06', 'Padiyathalawa'),
('5-2-09', 'Mahaoya'),
('5-2-12', 'Uhana'),
('5-2-15', 'Ampara'),
('5-2-16', 'Navithanvelly'),
('5-2-18', 'Samanthurai'),
('5-2-21', 'Kalmunai North'),
('5-2-24', 'Kalmunai'),
('5-2-25', 'Sainthamarathu'),
('5-2-27', 'Karaitivu'),
('5-2-30', 'Ninthavur'),
('5-2-33', 'Addalaichenai'),
('5-2-34', 'Irakkamam'),
('5-2-36', 'Akkaraipattu'),
('5-2-39', 'Alayadiwembu'),
('5-2-42', 'Damana'),
('5-2-45', 'Thirukkovil'),
('5-2-48', 'Pothuvil'),
('5-2-51', 'Lahugala'),
('5-3-03', 'Padavi Sri Pura'),
('5-3-06', 'Kuchchaveli'),
('5-3-09', 'Gomarankadawala'),
('5-3-12', 'Morawewa'),
('5-3-15', 'Trincomalee Town and Gravets'),
('5-3-18', 'Thambalagamuwa'),
('5-3-21', 'Kantalai'),
('5-3-24', 'Kinniya'),
('5-3-27', 'Muthur'),
('5-3-30', 'Seruwila'),
('5-3-33', 'Verugal'),
('6-1-03', 'Giribawa'),
('6-1-06', 'Galmaguwa'),
('6-1-09', 'Ehetuwewa'),
('6-1-12', 'Ambanpola'),
('6-1-15', 'Kotavehera'),
('6-1-18', 'Rasnayakapura'),
('6-1-21', 'Nikaweratiya'),
('6-1-24', 'Mahawa'),
('6-1-27', 'Polpithigama'),
('6-1-30', ' Ibbagamuwa'),
('6-1-33', 'Ganewatta'),
('6-1-36', 'Wariyapola'),
('6-1-39', 'Kobeigane'),
('6-1-42', 'Bingiriya'),
('6-1-45', 'Panduwasnuwara'),
('6-1-48', 'Paduwasnuwara East'),
('6-1-49', 'Bamunakotuwa'),
('6-1-51', 'Maspotha'),
('6-1-54', 'Kurunegala'),
('6-1-57', 'Mallawapitiya'),
('6-1-60', 'Mawathagama'),
('6-1-63', 'Rideegama'),
('6-1-66', 'Weerambugedara'),
('6-1-69', 'Kuliyapitiya East'),
('6-1-72', 'Kuliyapitiya West'),
('6-1-75', 'Udubaddawa'),
('6-1-78', 'Pannala'),
('6-1-81', 'Narammala'),
('6-1-84', 'Alawwa'),
('6-1-87', 'Polgahawela'),
('6-2-03', 'Kalpitiya'),
('6-2-06', 'Vanathavilluwa'),
('6-2-09', 'Karuwalagaswewa'),
('6-2-12', 'Nawagattegama'),
('6-2-15', 'Puttalam'),
('6-2-18', 'Mundalama'),
('6-2-21', 'Mahakumbukkadawala'),
('6-2-24', 'Anamaduwa'),
('6-2-27', 'Pallama'),
('6-2-30', 'Arachchikattuwa'),
('6-2-33', 'Chilaw'),
('6-2-36', 'Madampe'),
('6-2-39', 'Mahawewa'),
('6-2-42', 'Nattandiya'),
('6-2-45', 'Wennappuwa'),
('6-2-48', 'Dankotuwa'),
('7-1-03', 'Padaviya'),
('7-1-06', 'Kebithigollewa'),
('7-1-09', 'Medawachchiya'),
('7-1-12', 'Mahavilachchiya'),
('7-1-15', 'Nuwaragam Palatha Central'),
('7-1-18', 'Rambewa'),
('7-1-21', 'Kahatagasdigiliya'),
('7-1-24', 'Horowpothana'),
('7-1-27', 'Galenbindunuwewa'),
('7-1-30', 'Mihinthale'),
('7-1-33', 'Nuwaragam Palatha East'),
('7-1-36', 'Nachchadoowa'),
('7-1-39', 'Nochchiyagama'),
('7-1-42', 'Rajanganaya'),
('7-1-45', 'Thambuttegama'),
('7-1-48', 'Thalawa'),
('7-1-51', 'Thirappane'),
('7-1-54', 'Kekirawa'),
('7-1-57', 'Palugaswewa'),
('7-1-60', 'Ipalogama'),
('7-1-63', 'Galnewa'),
('7-1-66', 'Palagala'),
('7-2-03', 'Hingurakgoda'),
('7-2-06', 'Medirigiriya'),
('7-2-09', 'Lankapura'),
('7-2-10', 'Welikanda'),
('7-2-12', 'Dimbulagala'),
('7-2-15', 'Thamankaduwa'),
('7-2-18', 'Elahera'),
('8-1-03', 'Mahiyanganaya'),
('8-1-06', 'Rideemaliyadda'),
('8-1-09', 'Meegahakivula'),
('8-1-12', 'Kandaketiya'),
('8-1-15', 'Soranathota'),
('8-1-18', 'Passara'),
('8-1-19', 'Lunugala'),
('8-1-21', 'Badulla'),
('8-1-24', 'Hali-Ela'),
('8-1-27', 'Uva-Paranagama'),
('8-1-30', 'Welimada'),
('8-1-33', 'Bandarawela'),
('8-1-36', 'Ella'),
('8-1-39', 'Haputale'),
('8-1-42', 'Haldummulla'),
('8-2-03', 'Bibile'),
('8-2-06', 'Madulla'),
('8-2-09', 'Medagama'),
('8-2-12', 'Siyambalanduwa'),
('8-2-15', 'Moneragala'),
('8-2-18', 'Badalkumbura'),
('8-2-21', 'Wellawaya'),
('8-2-24', 'Buttala'),
('8-2-27', 'Katharagama'),
('8-2-30', 'Thanamalvila'),
('8-2-33', 'Sevanagala'),
('9-1-03', 'Eheliyagoda'),
('9-1-06', 'Kuruvita'),
('9-1-09', 'Kiriella'),
('9-1-12', 'Ratnapura'),
('9-1-15', ' Imbulpe'),
('9-1-18', 'Balangoda'),
('9-1-21', 'Opanayaka'),
('9-1-24', 'Pelmadulla'),
('9-1-27', 'Elapatha'),
('9-1-30', 'Ayagama'),
('9-1-33', 'Kalawana'),
('9-1-36', 'Nivithigala'),
('9-1-39', 'Kahawatta'),
('9-1-42', 'Godakawela'),
('9-1-45', 'Weligepola'),
('9-1-48', 'Embilipitiya'),
('9-1-51', 'Kolonna'),
('9-2-03', 'Rambukkana'),
('9-2-06', 'Mawanella'),
('9-2-09', 'Aranayaka'),
('9-2-12', 'Kegalle'),
('9-2-15', 'Galigamuwa'),
('9-2-18', 'Warakapola'),
('9-2-21', 'Ruwanwella'),
('9-2-24', 'Bulathkohupitiya'),
('9-2-27', 'Yatiyanthota'),
('9-2-30', 'Dehiovita'),
('9-2-33', 'Deraniyagala');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `olympic`
--

DROP TABLE IF EXISTS `olympic`;
CREATE TABLE IF NOT EXISTS `olympic` (
  `name` varchar(32) DEFAULT NULL,
  `age` varchar(14) DEFAULT NULL,
  `country` varchar(21) DEFAULT NULL,
  `COL 4` varchar(20) DEFAULT NULL,
  `COL 5` varchar(25) DEFAULT NULL,
  `COL 6` varchar(4) DEFAULT NULL,
  `COL 7` varchar(6) DEFAULT NULL,
  `COL 8` varchar(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `olympic`
--

INSERT INTO `olympic` (`name`, `age`, `country`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`) VALUES
('Athlete', 'Age', 'Country', 'Year', 'Sport', 'Gold', 'Silver', 'Bronze'),
('Michael Phelps', '23', 'United States', '2008', 'Swimming', '8', '0', '0'),
('Michael Phelps', '19', 'United States', '2004', 'Swimming', '6', '0', '2'),
('Michael Phelps', '27', 'United States', '2012', 'Swimming', '4', '2', '0'),
('Natalie Coughlin', '25', 'United States', '2008', 'Swimming', '1', '2', '3'),
('Aleksey Nemov', '24', 'Russia', '2000', 'Gymnastics', '2', '1', '3'),
('Alicia Coutts', '24', 'Australia', '2012', 'Swimming', '1', '3', '1'),
('Missy Franklin', '17', 'United States', '2012', 'Swimming', '4', '0', '1'),
('Ryan Lochte', '27', 'United States', '2012', 'Swimming', '2', '2', '1'),
('Allison Schmitt', '22', 'United States', '2012', 'Swimming', '3', '1', '1'),
('Natalie Coughlin', '21', 'United States', '2004', 'Swimming', '2', '2', '1'),
('Ian Thorpe', '17', 'Australia', '2000', 'Swimming', '3', '2', '0'),
('Dara Torres', '33', 'United States', '2000', 'Swimming', '2', '0', '3'),
('Cindy Klassen', '26', 'Canada', '2006', 'Speed Skating', '1', '2', '2'),
('Nastia Liukin', '18', 'United States', '2008', 'Gymnastics', '1', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

DROP TABLE IF EXISTS `province`;
CREATE TABLE IF NOT EXISTS `province` (
  `ProvinceCode` varchar(2) NOT NULL,
  `Province` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`ProvinceCode`, `Province`) VALUES
('1', 'Western'),
('2', 'Central'),
('3', 'Southern'),
('4', 'Northern'),
('5', 'Eastern'),
('6', 'North-Western'),
('7', 'North-Central'),
('8', 'Uva'),
('9', 'Sabaragamuwa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(10) COLLATE utf8_bin NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `city`) VALUES
('S001', 'NImal Kumara', 22, 'Matara'),
('S002', 'Kamal Palitha', 23, 'Kelaniya');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
