-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Ara 2024, 11:44:21
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `helele`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_featured` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `icon`, `description`, `is_active`, `created_at`) VALUES
(1, 'Instagram', 'instagram', 'instagram', 'a', 1, '2024-12-11 08:48:27'),
(2, 'TikTok', 'tiktok', 'tiktok', 'TikTok takipçi ve beğeni hizmetleri', 1, '2024-12-11 08:48:27'),
(3, 'Twitter', 'twitter', 'twitter', 'Twitter takipçi hizmetleri', 1, '2024-12-11 08:48:27'),
(4, 'YouTube', 'youtube', 'youtube', 'YouTube abone ve izlenme hizmetleri', 1, '2024-12-11 08:48:27'),
(5, 'Facebook', 'facebook', 'facebook-icon', 'Facebook hizmetleri', 1, '2024-12-11 09:19:02'),
(6, 'Spotify', 'spotify', 'spotify-icon', 'Spotify hizmetleri', 1, '2024-12-11 09:19:02'),
(7, 'Telegram', 'telegram', 'telegram-icon', 'Telegram hizmetleri', 1, '2024-12-11 09:19:02'),
(8, 'LinkedIn', 'linkedin', 'linkedin-icon', 'LinkedIn hizmetleri', 1, '2024-12-11 09:19:02'),
(9, 'Kick', 'kick', 'kick-icon', 'Kick hizmetleri', 1, '2024-12-11 09:19:02'),
(10, 'Twitch', 'twitch', 'twitch-icon', 'Twitch hizmetleri', 1, '2024-12-11 09:19:02'),
(11, 'Trovo', 'trovo', 'trovo-icon', 'Trovo hizmetleri', 1, '2024-12-11 09:19:02'),
(12, 'Google', 'google', 'google-icon', 'Google hizmetleri', 1, '2024-12-11 09:19:02'),
(13, 'App Store', 'app-store', 'appstore-icon', 'App Store hizmetleri', 1, '2024-12-11 09:19:02'),
(14, 'SEO', 'seo', 'seo-icon', 'SEO hizmetleri', 1, '2024-12-11 09:19:02'),
(15, 'DLive', 'dlive', 'dlive-icon', 'DLive hizmetleri', 1, '2024-12-11 09:19:02'),
(16, 'Nonolive', 'nonolive', 'nonolive-icon', 'Nonolive hizmetleri', 1, '2024-12-11 09:19:02'),
(17, 'Tumblr', 'tumblr', 'tumblr-icon', 'Tumblr hizmetleri', 1, '2024-12-11 09:19:02'),
(18, 'SoundCloud', 'soundcloud', 'soundcloud-icon', 'SoundCloud hizmetleri', 1, '2024-12-11 09:19:02'),
(19, 'Reddit', 'reddit', 'reddit-icon', 'Reddit hizmetleri', 1, '2024-12-11 09:19:02'),
(20, 'Pinterest', 'pinterest', 'pinterest-icon', 'Pinterest hizmetleri', 1, '2024-12-11 09:19:02'),
(27, 'Discord', 'discord', 'discord-icon', 'Discord hizmetleri', 1, '2024-12-11 09:19:02'),
(28, 'Snapchat', 'snapchat', 'snapchat-icon', 'Snapchat hizmetleri', 1, '2024-12-11 09:19:02'),
(29, 'PUBG', 'pubg', 'pubg-icon', 'PUBG hizmetleri', 1, '2024-12-11 09:19:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `services2`
--

CREATE TABLE `services2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `services2`
--

INSERT INTO `services2` (`id`, `name`, `price`) VALUES
(2, 'Instagram 50 Takipçi Satin Al', 0.00),
(3, 'Instagram 100 Takipçi Satın Al', 0.00),
(4, 'Instagram 500 Takipçi Satin Al', 0.00),
(5, 'Instagram 1000 Takipçi Satın Al', 0.00);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Tablo için indeksler `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `services2`
--
ALTER TABLE `services2`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `services2`
--
ALTER TABLE `services2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
