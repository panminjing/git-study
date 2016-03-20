-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 11 日 08:22
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `php_11`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL COMMENT '标题',
  `author` varchar(64) NOT NULL COMMENT '作者',
  `date` datetime NOT NULL COMMENT '发布时间',
  `description` varchar(1024) NOT NULL COMMENT '描述',
  `content` text NOT NULL COMMENT '正文内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `date`, `description`, `content`) VALUES
(1, 'one', 'shafee', '2016-03-11 16:02:28', 'ssssss', '<h1>\r\n	<br />\r\n</h1>'),
(2, '今天', 'shafee', '2016-03-11 16:20:07', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(3, '今天', 'shafee', '0000-00-00 00:00:00', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(4, '今天', 'shafee', '0000-00-00 00:00:00', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(5, '今天', 'shafee', '0000-00-00 00:00:00', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(6, '今天', 'shafee', '0000-00-00 00:00:00', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(7, '今天', 'shafee', '0000-00-00 00:00:00', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(8, '今天', 'shafee', '0000-00-00 00:00:00', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(9, '今天tianqi buhao', 'shafee', '2016-03-11 12:34:00', 'aaaaaa', '今天今天今天今天今天今天今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(10, '今天tianqi buhaosdf ', 'shafee', '2016-03-11 12:35:37', 'aaaaaasdf ', '今天今天今天今天今天今天sdf sdf 今天今天今天今天今天今天今天今天&nbsp;今天今天今天'),
(14, 'one', 'sdfsdf', '2016-03-11 15:52:47', '', '<h1>\r\n	测试测试<span style="line-height:14.3999996185303px;">测试测试</span><span style="line-height:14.3999996185303px;">测试测试</span><span style="line-height:14.3999996185303px;">测试测试</span> \r\n</h1>'),
(15, '今天tianqi', '罗雪飞', '2016-03-11 15:59:25', 'aaaaaasdf', '今天今天今天今天今天今天sdf sdf 今天今天今天今天今天今天今天今天&nbsp;今天今天今天');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
