-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Feb 27, 2013, 02:57 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `news_board`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `news`
-- 

CREATE TABLE `news` (
  `id` int(11) NOT NULL auto_increment,
  `title` text collate utf8_unicode_ci NOT NULL,
  `content` text collate utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `category` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- 列出以下資料庫的數據： `news`
-- 

INSERT INTO `news` VALUES (1, 'Thi s is L', 'MySQL å‚³å›žçš„æŸ¥è©¢çµæžœç‚ºç©º  MySQL å‚³å›žçš„æŸ¥è©¢çµæžœç‚ºç©º MySQL å‚³å›žçš„æŸ¥è©¢çµæžœç‚ºç©º ', '2013-02-27 21:46:37', 'Life');
INSERT INTO `news` VALUES (2, 'é€™æ˜¯é‹å', 'sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood sport is goood vv', '2013-02-27 21:47:09', 'Sport');
INSERT INTO `news` VALUES (3, 'é€™æ˜¯lifeçš„ç¬¬äºŒå€‹æ¨™é¡Œ', 'This is the second p, This is the second p, This is the second p, This is the second p, This is the second p, This is the second p, This is the second p, This is the second p, ', '2013-02-27 21:47:45', 'Life');
INSERT INTO `news` VALUES (4, 'test', 'testsetsetset', '2013-02-27 22:57:02', 'Fun');
