-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2014 at 05:00 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.4-14+deb7u8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seminar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idkorisnik` int(10) unsigned NOT NULL,
  `naslov` varchar(32) NOT NULL,
  `tekst` text NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `idkorisnik`, `naslov`, `tekst`, `datum`) VALUES
(1, 1, 'test', 'testte tetsts', '2014-06-02'),
(2, 1, 'Nema naslova', 'Ja bih htio biti admin jer sam jako pametan. lol', '2014-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `adresa` varchar(64) NOT NULL,
  `mjesto` varchar(32) NOT NULL,
  `zupanija` varchar(64) NOT NULL,
  `oib` char(11) NOT NULL,
  `telefon` varchar(10) NOT NULL,
  `datumrodenja` date NOT NULL,
  `registracija` date NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `bonus` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `username`, `password`, `email`, `ime`, `prezime`, `adresa`, `mjesto`, `zupanija`, `oib`, `telefon`, `datumrodenja`, `registracija`, `admin`, `bonus`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'karlo.petravic@hotmail.com', 'karlo', 'petravic', 'V. Nazora 9', 'Strmec Samoborski', 'Zagrebačka županija', '14144444444', '0955641555', '1992-08-20', '2014-06-02', 1, 600),
(3, 'test1', '5f4dcc3b5aa765d61d8327deb882cf99', 'test2@test.com', 'test1', 'test1', 'test 1233', 'test1', 'Požeško-slavonska županija', '11111111111', '013385400', '2015-12-20', '2014-06-02', 0, 0),
(4, 'test2', '5f4dcc3b5aa765d61d8327deb882cf99', 'test2@test2.com', 'test2', 'test2', 'test 12333', 'test2', 'Osječko-baranjska županija', '11111111111', '013385474', '1995-07-05', '2014-06-02', 0, 0),
(5, 'mujo', '5f4dcc3b5aa765d61d8327deb882cf99', 'mujo@google.com', 'mujo', 'hasić', 'Trg bana Jelačiča 2', 'Zagreb', 'Grad Zagreb', '14545289564', '013385123', '1972-03-15', '2014-06-04', 1, 0),
(6, 'haso', '5f4dcc3b5aa765d61d8327deb882cf99', 'haso@google.com', 'haso', 'mujić', 'Glavni trg 2', 'Zagreb', 'Grad Zagreb', '45896524512', '091345962', '1962-09-25', '2014-06-04', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `popusti`
--

CREATE TABLE IF NOT EXISTS `popusti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idsmjestaj` int(10) unsigned NOT NULL,
  `popust` int(11) NOT NULL,
  `minbonus` int(11) NOT NULL,
  `datum` date NOT NULL,
  `dana` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `popusti`
--

INSERT INTO `popusti` (`id`, `idsmjestaj`, `popust`, `minbonus`, `datum`, `dana`) VALUES
(2, 3, 15, 200, '2014-06-05', 20),
(3, 6, 20, 500, '2014-06-13', 5),
(4, 5, 40, 100, '2014-06-18', 15);

-- --------------------------------------------------------

--
-- Table structure for table `recenzije`
--

CREATE TABLE IF NOT EXISTS `recenzije` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idkorisnik` int(10) unsigned NOT NULL,
  `idsmjestaj` int(10) unsigned NOT NULL,
  `tekst` varchar(128) NOT NULL,
  `ocjena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `recenzije`
--

INSERT INTO `recenzije` (`id`, `idkorisnik`, `idsmjestaj`, `tekst`, `ocjena`) VALUES
(1, 1, 1, 'Najbolji smiještaj u mom životu!', 5),
(2, 3, 4, 'Njlošiji smještaj u mom životu sve puno žohara!', 2),
(3, 1, 2, 'Najbolji smijestaj do sada.', 5),
(4, 1, 5, 'Vračamo se i sljedeće godine.', 5),
(5, 1, 1, 'Bilo je ludo i nezaboravno.', 5),
(6, 1, 3, 'Smještaj je bilo solidan, kreveti su malo labavi. LOL', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE IF NOT EXISTS `rezervacije` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idsmjestaj` int(10) unsigned NOT NULL,
  `idkorisnik` int(10) unsigned NOT NULL,
  `datum` date NOT NULL,
  `dana` int(11) NOT NULL,
  `cijena` int(11) NOT NULL,
  `osoba` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rezervacije`
--

INSERT INTO `rezervacije` (`id`, `idsmjestaj`, `idkorisnik`, `datum`, `dana`, `cijena`, `osoba`) VALUES
(1, 1, 1, '2014-06-16', 5, 300, 3),
(2, 1, 1, '2014-06-22', 7, 420, 6),
(3, 1, 1, '2014-06-01', 2, 200, 1),
(4, 2, 1, '2014-06-02', 3, 200, 1),
(5, 3, 1, '2014-06-02', 3, 500, 1),
(6, 6, 1, '2014-06-13', 5, 600, 5);

-- --------------------------------------------------------

--
-- Table structure for table `smjestaj`
--

CREATE TABLE IF NOT EXISTS `smjestaj` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tip` varchar(12) NOT NULL,
  `naziv` varchar(32) NOT NULL,
  `mjesto` varchar(32) NOT NULL,
  `adresa` varchar(32) NOT NULL,
  `zupanija` varchar(64) NOT NULL,
  `plaza` int(11) NOT NULL,
  `centar` int(11) NOT NULL,
  `kategorija` int(11) NOT NULL,
  `lezaja` int(11) NOT NULL,
  `pomlezaja` int(11) NOT NULL,
  `kontakt` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `opis` text NOT NULL,
  `nocenje` int(11) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `ljubimci` tinyint(1) NOT NULL,
  `rostilj` tinyint(1) NOT NULL,
  `klima` tinyint(1) NOT NULL,
  `tv` tinyint(1) NOT NULL,
  `tel` tinyint(1) NOT NULL,
  `terasa` tinyint(1) NOT NULL,
  `internet` tinyint(1) NOT NULL,
  `popularnost` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `smjestaj`
--

INSERT INTO `smjestaj` (`id`, `tip`, `naziv`, `mjesto`, `adresa`, `zupanija`, `plaza`, `centar`, `kategorija`, `lezaja`, `pomlezaja`, `kontakt`, `email`, `telefon`, `opis`, `nocenje`, `parking`, `ljubimci`, `rostilj`, `klima`, `tv`, `tel`, `terasa`, `internet`, `popularnost`) VALUES
(1, 'apartman', 'Apartmani Iris', 'Srima (Vodice)', 'Srima III 37/D', 'Šibensko-kninska županija', 100, 1200, 3, 4, 2, 'Lidija Maksić', 'lidija9@net.hr', '+385 (0)98/803-118', 'Moderni, novouređeni apartmani na idealnoj poziciji za sve željne odmora sa raznovrsnim sadržajima na dohvat ruke. ', 60, 1, 0, 1, 1, 1, 0, 1, 0, 18),
(2, 'apartman', 'Kuća Petrčane', 'Petrčane', '23231 Petrčane (Zadar)', 'Zadarska županija', 30, 100, 3, 6, 1, 'Danijela', 'danijela.pet@gmail.com', '+385 (0)95/104-429', 'Predivan odmor u miru i zelenilu. Idealna kuća za obitelj. Plaža ispod kuće a pješčana uvala na 5 min hoda. Turistički sadržaji (tenis, fitnes u moru, mini golf i sl.) u obližnjem hotelskom kompleksu.', 50, 1, 0, 0, 1, 1, 1, 1, 0, 4),
(3, 'apartman', 'Apartmani Palada', 'Čiovo  Mastrinka', 'K. Jelene 9', 'Splitsko-dalmatinska ', 150, 2500, 4, 4, 1, 'Mirjana Palada', 'mpalada@net.hr', '+385 (0)21/888-064', 'Nalazimo se na blagoj uzvisini otoka Čiova, udaljenoj svega 2,5 km od Trogira i 6 km od aerodroma Split.\r\nSvi apartmani imaju balkone sa kojih se pruža prekrasan pogled na more.\r\nNa slobodno korištenje imamo veliku terasu.', 100, 1, 1, 0, 1, 1, 0, 1, 1, 4),
(4, 'apartman', 'Apartman Carera', 'Rovinj', 'Pekarska 8', 'Istarska županija', 200, 0, 3, 2, 1, 'Mirjana Milijašević', 'm.apartmani@net.hr', '+385 (0)52/812-843', 'Ovdje možete dobiti REKONEKTIVNO ISCJELJENJE. Ovo iscjeljenje je pomoću svemirske energije, koja dovodi organizam u cjelovito stanje, tako sve bolesti nestaju zauvijek. ', 50, 1, 0, 0, 1, 1, 0, 0, 1, 4),
(5, 'apartman', ' Villa Olka', 'Grabovac (Makarska)', 'Goričaj 53', 'Splitsko-dalmatinska županija', 12000, 6000, 5, 12, 3, 'Želimir Dundić', 'zelimir.dundic@ht.com', '+385 (0)21/358-300', 'Locirana u nevjerojatnom selu u zaleđu Makarske i Splita, 18 km od nekih od najboljih plaža dalmacije. ', 500, 1, 1, 1, 1, 1, 1, 1, 1, 15),
(6, 'apartman', 'Zorica i David Apartmani', 'Sukošan (Zadar)', 'Put Vodotica 35', 'Zadarska županija', 50, 900, 5, 4, 2, 'Zorica', 'info@zad-app.com', '+385 (0)91/5192-328', 'Nudimo dva apartmana iznimke kvalitete za odmor. Sve što je potrebno za savršen obiteljski odmor na moru. ', 150, 1, 1, 1, 1, 1, 0, 1, 1, 19),
(7, 'apartman', 'Apartmani Aeternum', 'Vrbnik (Krk)', 'Braće Trinajstić 47', 'Primorsko-goranska županija', 50, 200, 4, 4, 0, 'Majda Vukanović', 'kontakt@Aeternum.com', '+385 (0)51/857-350', 'Gosti Ville mogu svakodnevno uživati u moru i suncu, bilo u hidromasažnom bazenu na terasi ili na obližnjoj plaži. ', 100, 1, 0, 1, 1, 1, 1, 0, 1, 11),
(8, 'soba', ' Kuća za odmor Svjetionik', 'Sućuraj (Hvar)', 'Put Lučice 2', 'Splitsko-dalmatinska županija', 5, 600, 4, 2, 0, 'Mladina d.o.o. ', 'mladina@mladina.com', '+385 (0)21/396-138', 'Svjetionik Sućuraj je sa tri strane okružen morem i razvedenom, niskom, stjenovitom obalom, a udaljen je nekoliko metara od morske obale. ', 290, 1, 1, 1, 1, 1, 1, 1, 1, 11),
(9, 'soba', 'Pansion Gea', 'Pag', 'Ante Starčevića 56/A', 'Zadarska županija', 10, 700, 3, 2, 2, 'Maja Fabijanić-Pičuljan', 'majap@net.hr', '+385 (0)23/600-272', 'Pansion Gea smjestio su se u mirnim dijelovima grada Paga, kategorizirani sa tri zvjezdice u samoj blizini plaža. Savršeno mjesto za opuštanje.', 90, 1, 1, 0, 1, 0, 0, 1, 1, 4),
(10, 'soba', 'Pansion Roli', 'Starigrad Paklenica', 'Stipe Bušljete 1', 'Zadarska županija', 10, 10, 2, 3, 0, 'Jerolim Katić', 'roli@yaho.com', '+385 (0)23/369-018', 'B & B i restoran u vlasništvu obitelji Katić, kruna 150 godina tradicije u ugostiteljstvu s korijene vuče još iz 19. stoljeća.', 25, 1, 1, 0, 1, 0, 0, 1, 0, 4),
(11, 'soba', 'Accommodation Mirjana', 'Poreč', 'Anke Buturac 36', 'Istarska županija', 80, 1000, 3, 2, 1, 'Mladen Praskalo', 'brico@inet.hr', '+385 (0)52/453-005', 'Sobe se nalaze u prekrasnom Poreču koji nudi vrhunski sadrzaj i nezaboravan provod.', 30, 1, 0, 0, 1, 1, 0, 1, 0, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
