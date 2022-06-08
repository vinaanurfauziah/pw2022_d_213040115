/*
SQLyog Trial v13.1.8 (64 bit)
MySQL - 10.4.24-MariaDB : Database - stokbarang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`stokbarang` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `stokbarang`;

/*Table structure for table `stok` */

DROP TABLE IF EXISTS `stok`;

CREATE TABLE `stok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(250) NOT NULL,
  `sistemoperasi` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

/*Data for the table `stok` */

insert  into `stok`(`id`,`nama`,`sistemoperasi`,`processor`,`warna`,`harga`,`stok`,`gambar`) values 
(49,'Zenbook 14X OLED (UX5401, 11th Gen Intel)','Windows 11 Home','Intel® Core™ i7-1165G7 ','Pine Grey',' Rp20.999.000','10','629d8e544655f.png'),
(50,'Vivobook Pro 16X OLED (M7600, AMD Ryzen 5000 Series)','Windows 11 Home','AMD Ryzen™ 7 5800H','0°Black','Rp 20,299,000','20','629d9a439dc12.png'),
(51,'ASUS A416 (11th Gen Intel)','Windows 10 Home','Intel® Core™ i3-1115G4 ','Slate Grey',' Rp7.299.000','15','629d9b76b57b0.png'),
(52,'Zenbook Pro Duo 15 OLED (UX582)','Windows 10 Home','Intel® Core™ i7-10870H','Celestial Blue','Rp 41,363,000','5','629dadd03ebd4.png'),
(53,'Vivobook Pro 14X OLED (N7400, 11th Gen Intel)','Windows 11 Home','Intel® Core™ i7-11370H','Comet Grey','Rp 19,299,000','12','629db241905d8.png'),
(55,'ExpertBook B1 B1400','Windows 10 Pro','Intel® Core™ i5-1135G7 ',' Black','Rp12.002.000','3','62a0176a09d93.png');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`role`) values 
(24,'admin','admin','admin'),
(25,'user','user','user'),
(28,'sandhika','$2y$10$CdNpxeR.q7TOm4RyBCmhTega0p2tVPoRp55pQomPL7tNY97vZl63G','user'),
(31,'vina','$2y$10$83Ay6hF3l/OUqH8cLY1LuuAD6i6vgu/z3LrjbkSE73jI8prTJ/YwK','user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
