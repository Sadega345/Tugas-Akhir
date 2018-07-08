/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.6.16 : Database - db_dosen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_dosen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_dosen`;

/*Table structure for table `pustaka` */

DROP TABLE IF EXISTS `pustaka`;

CREATE TABLE `pustaka` (
  `id` int(3) NOT NULL,
  `jml_judul` varchar(100) DEFAULT NULL,
  `jml_copy` varchar(100) DEFAULT NULL,
  `kd_prodi` varchar(100) DEFAULT NULL,
  `jenis_pustaka` varchar(100) DEFAULT NULL,
  `kd_jns` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pustaka` */

LOCK TABLES `pustaka` WRITE;

insert  into `pustaka`(`id`,`jml_judul`,`jml_copy`,`kd_prodi`,`jenis_pustaka`,`kd_jns`) values (1,'3','2','P001','Karya Ilmiah',1);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
