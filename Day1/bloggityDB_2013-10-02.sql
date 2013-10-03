# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.25)
# Database: bloggityDB
# Generation Time: 2013-10-02 18:46:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Email_tbl
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Email_tbl`;

CREATE TABLE `Email_tbl` (
  `Email_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `User_id` int(50) NOT NULL,
  `User_email` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`Email_id`),
  UNIQUE KEY `emailUnique` (`User_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Items_tbl
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Items_tbl`;

CREATE TABLE `Items_tbl` (
  `Item_name` varchar(50) NOT NULL DEFAULT '',
  `Item_detail` varchar(50) DEFAULT '',
  `Item_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Item_id`),
  UNIQUE KEY `itemNameUnique` (`Item_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table Users_tbl
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Users_tbl`;

CREATE TABLE `Users_tbl` (
  `User_id` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `User_name` varchar(50) NOT NULL DEFAULT '',
  `User_pass` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `usernameUnique` (`User_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
