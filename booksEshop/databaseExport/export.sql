-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2021 at 06:22 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `knihy`
--

CREATE TABLE `knihy` (
  `ID` int(11) NOT NULL,
  `Nazov` varchar(64) NOT NULL,
  `Text` text NOT NULL,
  `Obrazok` char(128) NOT NULL,
  `Cena` decimal(5,2) NOT NULL,
  `Datum` date NOT NULL,
  `Cas` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knihy`
--

INSERT INTO `knihy` (`ID`, `Nazov`, `Text`, `Obrazok`, `Cena`, `Datum`, `Cas`) VALUES
(1, 'Stratený svet', 'Profesor Challenger je kapacita. Vyniká v štúdiu prírodných vied, inteligenciou ďaleko prevyšuje bežných ľudí a so solídnou dávkou bohorovnosti si to aj uvedomuje. Okrem toho je mocný ako býk, rovnako nebezpečne energický, impulzívny, a keď už sme pri tom, aj zdvorilý. Prosto, je to ten najbystrejší chrapúň pod slnkom.rnrnKeď sa kvôli jednej výprave spred dvoch rokov stane terčom výsmechu akademikov i verejnosti, znáša to veľmi zle. Iba mladému novinárovi Malonemu sa podarí prekonať jeho výbuchy, a tak sa stane členom expedície, ktorá má Challengerovu reputáciu buď vzkriesiť, alebo navždy pochovať. Veď kto so zdravým rozumom by uveril báchorkám o dinosauroch žijúcich v amazonskom pralese?rnrnExcelentné rozprávačstvo A. C. Doylea ani po rokoch nestráca podmanivé čaro a Stratený svet je to pravé miesto pre tých, ktorí sa chcú stratiť vo svete dinosaurov, dobrodružstva a pôvabov minulosti. V edícii ACD prinesieme tri knihy zo série o profesorovi Challengerovi, Stratený svet je prvá z nich.', 'strateny-svet.jpg', '13.86', '2017-05-18', '2017-05-22 12:22:01'),
(2, 'Pes rodu Baskervillovcov', 'Legenda o pekelnom psovi, ktorý z pomsty prenasleduje potomkov rodiny Baskervillovcov, sa v Londýne zdá Watsonovi strašidelná a Holmesovi veľmi zaujímavá, najmä v súvislosti s osudom nebohého sira Charlesa Baskervilla. Na zámku Baskerville, v pochmúrnom kraji plnom zradných slatín a močiarov, sa prípad nezdá o nič jasnejší. Skôr naopak. Hmla akoby rozpíjala hranice medzi poverami a skutočnosťou, nad kopcami sa rozlieha príšerné vytie, z ktorého tuhne krv v žilách. Prízrak, zhmotnená legenda, nadobúda hrozivo reálne kontúry a nový dedič rodinného titulu a majetku sa ocitá v ohrození života. A nielen on, v slatinách číha nebezpečenstvo na každého...', 'h3-pes-baskervil.jpg', '13.86', '2017-04-01', '2017-04-02 14:15:00'),
(3, 'Dobrodružstvá Sherlocka Holmesa', 'Zápisník doktora Watsona je plný prípadov, ktoré vzbudili väčší či menší záujem verejnosti. Časť z nich zverejnila londýnska tlač, niektoré sa ukázali priveľmi zamotané aj pre Sherlockove analytické schopnosti, iné dokončil len spolovice a ich riešenie sa zakladá skôr na dohadoch a domnienkach. Sú medzi nimi i také, ktoré sa vyznačujú zaujímavými črtami a mimoriadne pozoruhodnými detailmi a ktorých vyústenie je také šokujúce, že si doktor nemôže pomôcť a musí nám ich vyrozprávať. Dobrodružstvá Sherlocka Holmesa, to je dvanásť vybraných prípadov, ktoré Watson s Holmesom riešili v rozpätí rokov 1882 – 1890. Prostredníctvom nich nám Watson predstavuje svojho priateľa, jeho výnimočné metódy a počiny na poli boja so zločinom viktoriánskeho Anglicka. V druhom zväzku edície Sherlock Holmes prinášame detektívne poviedky v novom preklade Jána Kamenistého a ilustráciami Jula Nagya. ', 'sh2-dobrodruzstva.jpg', '15.72', '2017-03-05', '2017-03-06 09:27:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knihy`
--
ALTER TABLE `knihy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knihy`
--
ALTER TABLE `knihy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
