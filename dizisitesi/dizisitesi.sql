-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Haz 2021, 05:27:20
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `dizisitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `diziler`
--

CREATE TABLE `diziler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `kapak_fotografi` text NOT NULL,
  `konu` text NOT NULL,
  `yıl` int(11) NOT NULL,
  `imdb` varchar(10) NOT NULL,
  `yonetmen` varchar(100) NOT NULL,
  `tur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `diziler`
--

INSERT INTO `diziler` (`id`, `ad`, `kapak_fotografi`, `konu`, `yıl`, `imdb`, `yonetmen`, `tur`) VALUES
(1, 'arka sokaklar', 'https://img.wattpad.com/cover/226374076-352-k215448.jpg', 'araka sokaklar konu', 2010, '5.8', 'ali', 3),
(2, 'recep ivedik', 'https://tr.web.img2.acsta.net/pictures/19/03/21/08/26/4285272.jpg', 'recep ivedik konu', 2005, '1.1', 'recep', 4),
(3, 'Doctor Who', 'https://i.pinimg.com/736x/13/91/50/139150aba1517049567765b9af35f7b8.jpg', 'Doctor Who uzayda ve zamanda yolculuk yaparak tüm canlılara yardım götüren bi baş kahramandır. TARDIS adı verilen polis kulübesi ile yolculuk yapar. TARDIS İngilizler tarafından kurulan 1929 yılında tasarlanmış acil durumlarda kullanılabilecek police box olarak da bilinen bir polis kulübesidir', 1900, '9', 'Christopher Barry ', 5),
(9, 'Dark', 'https://wallpapercave.com/wp/wp4056407.jpg', 'Kurgusal Alman kasabası Winden\'de geçen Dark, bir çocuğun kayboluşunun ardından endişeli bir zaman yolculuğunu yavaşça çözdüğü için gizlenen dört ailenin sırlarını ve gizli bağlantılarını açıklamaktadır', 2017, '8.8', 'Nikolaus Summerer', 5),
(10, 'Friends', 'https://www.mobygames.com/images/covers/l/358976-friends-the-one-with-all-the-trivia-windows-front-cover.jpg', 'Rachel Green düğününden kaçıp New York\'ta bir restoranda aşçı olduğunu bildiği çocukluk arkadaşı Monica Geller\'ı bulmaya gider. Rachel, Monica\'nın evine yerleşir ve onun arkadaş grubuna katılır.', 1994, '8.9', 'David Crane', 4),
(11, 'Sherlock', 'https://images-eu.ssl-images-amazon.com/images/I/71CNkzUP-eL._AC_UL600_SR600,600_.jpg', 'Sherlock Holmes adında bir dedektif ve onun tamamen tesadüf eseri tanıştığı destekçisi Dr. John Watson birlikte iş yapmaya başlarlar. Ev arkadaşı olan bu ikili, yeni taşındıkları mahallede geçen cinayet olaylarında polise yardım etmekle başlarlar işe.', 2010, '9.1', 'Michael Hurst', 6),
(12, 'Brooklyn Nine-Nine', 'https://mediacms01.digiturkplay.com/dzdy_web/PS0000003349/brooklyn-nine-nine-season7-bantli_220x286_raw.jpg', 'Brooklyn Nine-Nine, polisiye komedi tarzında Amerikan yapımı bir televizyon dizisidir. ABD\'de Fox tarafından yayınlanmaktadır. Dizi New York Polisi\'nin Brooklyn\'deki kurgusal 99. Bölge Karakolu\'ndaki dedektiflerinin ve yeni atanan polis şefinin başından geçen olayları konu alır.', 2013, '8.4', 'Michael Schur', 2),
(13, 'Aşk-ı Memnu', 'https://www.ayyapim.com/media/images/posterler/ask-i-memnu-47304f71d24403dae069a2e390e26646.jpg', 'İstanbul\'da aynı evde yaşayan iki insanın yasak aşkını ve etraflarındaki hayatı konu alır. Dizi, Halid Ziya Uşaklıgil\'in aynı adlı romanından uyarlanmıştır. Dizi, babasının ölümünden sonra Adnan Bey ile evlenen Bihter Yöreoğlu\'nu ve eşinin manevi yeğeni Behlül ile yaşadığı yasak aşk üzerinde yoğunlaşır.', 2008, '7.4', 'Hilal Saral', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dizioyunculari`
--

CREATE TABLE `dizioyunculari` (
  `id` int(11) NOT NULL,
  `diziID` int(11) NOT NULL,
  `oyuncular` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `dizioyunculari`
--

INSERT INTO `dizioyunculari` (`id`, `diziID`, `oyuncular`) VALUES
(1, 1, 'Özgür Ozan'),
(2, 1, 'Zafer Ergin'),
(3, 2, 'Şahan Gökbakar'),
(4, 3, 'Matt Smith'),
(5, 10, 'Jennifer Aniston'),
(6, 11, 'Benedict Cumberbatch'),
(7, 9, 'Louis Hofmann'),
(8, 12, 'Andy Samberg'),
(9, 13, 'Beren Saat');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sikayet`
--

CREATE TABLE `sikayet` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sikayet`
--

INSERT INTO `sikayet` (`id`, `ad`, `email`, `konu`, `mesaj`) VALUES
(2, 'ayşe', 'ayse@ayse.com', 'telif', 'Recep İvedik adlı içeriğin kaldırılması gerekmektedir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turler`
--

CREATE TABLE `turler` (
  `id` int(11) NOT NULL,
  `tur` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `turler`
--

INSERT INTO `turler` (`id`, `tur`) VALUES
(3, 'aksiyon'),
(4, 'komedi'),
(5, 'gerilim'),
(6, 'Drama');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `kullaniciAdi` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `sifre` varchar(100) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `kullaniciAdi`, `mail`, `sifre`, `tarih`) VALUES
(1, 'ayşe', 'asd@gmail.com', '123', '2021-04-02 16:07:57'),
(5, 'Binnur', 'bin@nur.com', '123', '2021-05-29 21:01:22'),
(9, 'Gökçe', 'gokce@gmail.com', '456', '2021-05-29 22:54:08'),
(13, 'Betül', 'betul@gmail.com', '6789', '2021-06-04 02:31:17'),
(14, 'Mehmet', 'mehmet@gmail.com', '8910', '2021-06-04 03:24:15'),
(15, 'Emre', 'emre@gmail.com', '1234', '2021-06-04 03:25:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `id` int(11) NOT NULL,
  `uyeID` int(11) NOT NULL,
  `diziID` int(11) NOT NULL,
  `yorum` text DEFAULT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `uyeID`, `diziID`, `yorum`, `tarih`) VALUES
(1, 1, 1, 'asdsa', '2021-04-02 16:08:31'),
(2, 1, 3, 'Bence çok güzel bir dizi', '2021-04-02 16:08:31'),
(4, 5, 1, 'Test', '2021-06-03 18:50:00'),
(6, 9, 2, 'Test', '2021-06-03 18:51:51'),
(7, 5, 3, 'Ben pek beğenmedim', '2021-06-04 01:10:39'),
(8, 13, 9, 'Sürükleyici bir dizi. Bayıldım', '2021-06-04 02:23:15'),
(9, 13, 13, 'Çok saçma bir konusu var', '2021-06-04 02:23:37'),
(10, 14, 9, 'Harika', '2021-06-04 02:24:38'),
(11, 14, 13, 'Hiç beğenmedim', '2021-06-04 02:24:59'),
(12, 15, 11, 'İki günde bitirdim öneririm', '2021-06-04 02:26:08'),
(13, 15, 12, 'Çok komik bir dizi ', '2021-06-04 02:26:25'),
(14, 9, 12, 'Fena değil', '2021-06-04 02:26:51'),
(15, 9, 10, 'Efsane bir dizi', '2021-06-04 02:27:02');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `diziler`
--
ALTER TABLE `diziler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dizioyunculari`
--
ALTER TABLE `dizioyunculari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_diziID_oyuncular` (`diziID`);

--
-- Tablo için indeksler `sikayet`
--
ALTER TABLE `sikayet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `turler`
--
ALTER TABLE `turler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullaniciAdi` (`kullaniciAdi`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_uyeID_yorumlar` (`uyeID`),
  ADD KEY `FK_diziID_yorumlar` (`diziID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `diziler`
--
ALTER TABLE `diziler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `dizioyunculari`
--
ALTER TABLE `dizioyunculari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `sikayet`
--
ALTER TABLE `sikayet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `turler`
--
ALTER TABLE `turler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `dizioyunculari`
--
ALTER TABLE `dizioyunculari`
  ADD CONSTRAINT `FK_diziID_oyuncular` FOREIGN KEY (`diziID`) REFERENCES `diziler` (`id`) ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD CONSTRAINT `FK_diziID_yorumlar` FOREIGN KEY (`diziID`) REFERENCES `diziler` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_uyeID_yorumlar` FOREIGN KEY (`uyeID`) REFERENCES `uyeler` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
