-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Sunucu: localhost
-- Çýktý Tarihi: Þubat 06, 2009 at 10:31 PM
-- Server sürümü: 5.0.18
-- PHP Sürümü: 5.1.2
-- 
-- Veritabaný: `aramok`
-- 

-- --------------------------------------------------------

-- 
-- Tablo yapýsý : `uyeler`
-- 

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL auto_increment,
  `uye_ad` text NOT NULL,
  `uye_sifre` varchar(48) NOT NULL,
  `uye_mail` varchar(50) NOT NULL,
  `uye_kayit` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`uye_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Tablo döküm verisi `uyeler`
-- 

INSERT INTO `uyeler` VALUES (1, 'aramok', '81ae726802b62bc6b01ac8807dc909004e33d844', 'mohorame@gmail.com', '0000-00-00 00:00:00');

