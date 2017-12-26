-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 21 Ara 2017, 22:39:13
-- Sunucu sürümü: 5.6.38
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `coin`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `coin`
--

CREATE TABLE `coin` (
  `id` int(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `coin` varchar(255) NOT NULL,
  `ust` varchar(255) NOT NULL,
  `tur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `coin`
--

INSERT INTO `coin` (`id`, `alt`, `coin`, `ust`, `tur`) VALUES
(1, '0.00000123', '0.00023546', '55555', 'STEEM');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `coin`
--
ALTER TABLE `coin`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `coin`
--
ALTER TABLE `coin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
