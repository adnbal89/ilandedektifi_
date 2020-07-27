-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 25 Tem 2020, 15:25:50
-- Sunucu sürümü: 10.3.16-MariaDB
-- PHP Sürümü: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ifsa`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ilan_ekle`
--

CREATE TABLE `ilan_ekle` (
  `id` int(11) NOT NULL,
  `sistem_tarih` int(11) NOT NULL,
  `fav_tarih` int(11) NOT NULL,
  `resim_id` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilan_no` int(11) NOT NULL,
  `ekleyen` int(11) NOT NULL,
  `goruntulenme` int(11) NOT NULL,
  `il` int(11) NOT NULL,
  `sitesi` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `goster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ilan_ekle`
--

INSERT INTO `ilan_ekle` (`id`, `sistem_tarih`, `fav_tarih`, `resim_id`, `ilan_no`, `ekleyen`, `goruntulenme`, `il`, `sitesi`, `link`, `goster`) VALUES
(1, 1591135068, 1591830000, '111.png', 123123, 3, 52, 34, 1, '', 0),
(2, 1591135259, 1591225200, '111.png', 12312312, 3, 11, 34, 1, '', 1),
(3, 1591135292, 1599225200, '111.png', 123123, 0, 16, 34, 0, '', 1),
(4, 1591135068, 1591830000, '111.png', 123123, 0, 4, 16, 0, '', 1),
(5, 1591135259, 1591225200, '111.png', 123123, 0, 6, 16, 0, '', 1),
(6, 1591135292, 1599225200, '111.png', 123123, 0, 6, 34, 0, '', 1),
(7, 1591135068, 1591830000, '111.png', 123123, 0, 7, 16, 0, '', 1),
(8, 1591135259, 1591225200, '111.png', 123123, 0, 8, 34, 0, '', 1),
(9, 1591135292, 1599225200, '111.png', 123123, 0, 9, 16, 0, '', 1),
(10, 1591135068, 1591830000, '111.png', 123123, 0, 10, 34, 0, '', 1),
(11, 1591135259, 1591225200, '111.png', 123123, 0, 11, 34, 0, '', 1),
(12, 1591135292, 1599225200, '111.png', 123123, 0, 12, 34, 0, '', 1),
(13, 1591436382, 1593039600, '111.png', 123, 0, 0, 34, 0, '', 1),
(14, 1591436410, 1593903600, '111.png', 123, 0, 0, 34, 0, '', 1),
(15, 1591437238, 1591830000, '111.png', 825614311, 0, 1002, 34, 1, 'https://www.sahibinden.com/ilan/emlak-konut-satilik-sahibinden-dilek-caddesi-uzeri-iskanli-sifir-daire-825614311/detay', 1),
(16, 1591446877, 1592434800, '111.png', 123, 0, 0, 34, 1, '', 1),
(17, 1591446899, 1592953200, '111.png', 828138160, 0, 0, 34, 1, '', 1),
(18, 1591135068, 1591830000, '111.png', 123123, 3, 17, 34, 1, '', 1),
(19, 1592221907, 1591743600, '111.png', 828138160, 0, 0, 1, 1, '', 1),
(20, 1592222001, 1592434800, '111.png', 3123, 0, 0, 35, 1, '', 1),
(21, 1592341517, 1592348400, '5ee925fd568c4.jpeg', 343434, 0, 0, 9, 1, '', 1),
(22, 1593431921, 1592434800, '5ef9c96151b16.jpeg', 828138160, 0, 0, 5, 1, '', 1),
(23, 1593432028, 1591225200, '5ef9c9cc749dd.jpeg', 123123123, 0, 0, 75, 1, '', 1),
(24, 1593432226, 1592607600, '5ef9ca92994cb.jpeg', 123123123, 0, 0, 16, 1, '', 1),
(25, 1593433233, 1591830000, '5ef9ce81aaeb0.jpeg', 123123, 0, 0, 34, 1, '', 1),
(26, 1593764754, 1594335600, '5efedd824fcdb.jpeg', 825614311, 0, 0, 34, 1, 'https://www.sahibinden.com/ilan/emlak-konut-satilik-sahibinden-dilek-caddesi-uzeri-iskanli-sifir-daire-825614311/detay', 0),
(27, 1593764828, 1593730800, '5efeddcca1731.jpeg', 828138160, 0, 0, 34, 1, 'asd', 0),
(28, 1594468134, 1594335600, '5f099916aa502.jpeg', 123123, 0, 0, 34, 1, '', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `id` int(11) NOT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sadi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `il` int(11) NOT NULL,
  `kayit_tarih` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`id`, `adi`, `sadi`, `il`, `kayit_tarih`, `mail`, `sifre`, `yetki`) VALUES
(0, 'Konuk', 'Hesap', 16, 1, '', '', 3),
(1, 'admin', 'admin', 16, 1591441855, 'admin', 'admin', 1),
(3, '2', '2', 34, 1591442044, '2', '2', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehir`
--

CREATE TABLE `sehir` (
  `sehir_id` int(2) NOT NULL,
  `sehir_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sehir_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sehir`
--

INSERT INTO `sehir` (`sehir_id`, `sehir_title`, `sehir_key`) VALUES
(1, 'İSTANBUL', 34),
(2, 'ANKARA', 6),
(3, 'İZMİR', 35),
(4, 'BURSA', 16),
(5, 'ADANA', 1),
(6, 'ADIYAMAN', 2),
(7, 'AFYONKARAHİSAR', 3),
(8, 'AĞRI', 4),
(9, 'AKSARAY', 68),
(10, 'AMASYA', 5),
(11, 'ANTALYA', 7),
(12, 'ARDAHAN', 75),
(13, 'ARTVİN', 8),
(14, 'AYDIN', 9),
(15, 'BALIKESİR', 10),
(16, 'BARTIN', 74),
(17, 'BATMAN', 72),
(18, 'BAYBURT', 69),
(19, 'BİLECİK', 11),
(20, 'BİNGÖL', 12),
(21, 'BİTLİS', 13),
(22, 'BOLU', 14),
(23, 'BURDUR', 15),
(24, 'ÇANAKKALE', 17),
(25, 'ÇANKIRI', 18),
(26, 'ÇORUM', 19),
(27, 'DENİZLİ', 20),
(28, 'DİYARBAKIR', 21),
(29, 'KOCAELİ', 41),
(30, 'KONYA', 42),
(31, 'KÜTAHYA', 43),
(32, 'MALATYA', 44),
(33, 'MANİSA', 45),
(34, 'MARDİN', 47),
(35, 'MERSİN', 33),
(36, 'MUĞLA', 48),
(37, 'MUŞ', 49),
(38, 'NEVŞEHİR', 50),
(39, 'NİĞDE', 51),
(40, 'ORDU', 52),
(41, 'OSMANİYE', 80),
(42, 'RİZE', 53),
(43, 'SAKARYA', 54),
(44, 'SAMSUN', 55),
(45, 'SİİRT', 56),
(46, 'SİNOP', 57),
(47, 'ŞIRNAK', 73),
(48, 'SİVAS', 58),
(49, 'TEKİRDAĞ', 59),
(50, 'TOKAT', 60),
(51, 'TRABZON', 61),
(52, 'TUNCELİ', 62),
(53, 'ŞANLIURFA', 63),
(54, 'UŞAK', 64),
(55, 'VAN', 65),
(56, 'YALOVA', 77),
(57, 'YOZGAT', 66),
(58, 'ZONGULDAK', 67),
(59, 'DÜZCE', 81),
(60, 'EDİRNE', 22),
(61, 'ELAZIĞ', 23),
(62, 'ERZİNCAN', 24),
(63, 'ERZURUM', 25),
(64, 'ESKİŞEHİR', 26),
(65, 'GAZİANTEP', 27),
(66, 'GİRESUN', 28),
(67, 'GÜMÜŞHANE', 29),
(68, 'HAKKARİ', 30),
(69, 'HATAY', 31),
(70, 'IĞDIR', 76),
(71, 'ISPARTA', 32),
(72, 'KAHRAMANMARAŞ', 46),
(73, 'KARABÜK', 78),
(74, 'KARAMAN', 70),
(75, 'KARS', 36),
(76, 'KASTAMONU', 37),
(77, 'KAYSERİ', 38),
(78, 'KİLİS', 79),
(79, 'KIRIKKALE', 71),
(80, 'KIRKLARELİ', 39),
(81, 'KIRŞEHİR', 40);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ilan_ekle`
--
ALTER TABLE `ilan_ekle`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sehir`
--
ALTER TABLE `sehir`
  ADD PRIMARY KEY (`sehir_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ilan_ekle`
--
ALTER TABLE `ilan_ekle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Tablo için AUTO_INCREMENT değeri `kisiler`
--
ALTER TABLE `kisiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sehir`
--
ALTER TABLE `sehir`
  MODIFY `sehir_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
