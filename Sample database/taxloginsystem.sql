-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2018 at 08:20 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxloginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_tinid` int(11) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_username` varchar(256) NOT NULL,
  `user_psw` varchar(256) NOT NULL,
  PRIMARY KEY (`user_tinid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_tinid`, `user_email`, `user_username`, `user_psw`) VALUES
(123456789, 'dulithcsenanayake@gmail.com', 'dulith', '$2y$10$NHa6EA4qBualL71Kc5RWO.T.3jLA5V5FJyssLpMhciFSrwA2rcpX2'),
(12345678, 'dulithcsenanayake@gmail.com', 'dulith1', '$2y$10$0OmZjGWVlYv0FY9QvnS41uEp0PkVpFBrBLiZgo9a4kYdtqUHm50Dy'),
(456, 'dulithcsenanayake@gmail.com', 'chamod1', '$2y$10$la7ai2sq0Yd0qAE96DM6xe990huByOjXO33ZUc6IGK2vf7l.eMLF2'),
(555555, 'chamod34@gmail.com', 'chamodM', '$2y$10$vwSqhddP2ZCc3Eh0LebI8euip/uHdkF4YFthSXu6GM/RyMnNmv57y'),
(12345, 'dulithcsenanayake@gmail.com', 'dulith2', '$2y$10$0bhg5BlcddYjsAOSlobiQei76TCKOLILEngBEtuDIgw5dA0XYkljS'),
(1234, 'dulithcsenanayake@gmail.com', 'dulith3', '$2y$10$p9nmCa/zBHeWy0yZXh2RxuuVb8tTouX2lhE7.6LFfRl2JFKJiAUxm'),
(66666, 'yashoda.92h@gmail.com', 'dulith4', '$2y$10$voG5Vsj7vo6oNXqyWROtmuennOD3jXBvAQ3VAv7VcP.p2AoPr8Z4K');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
