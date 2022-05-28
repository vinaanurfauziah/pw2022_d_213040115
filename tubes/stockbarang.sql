/*
SQLyog Trial v13.1.8 (64 bit)
MySQL - 10.4.24-MariaDB : Database - stockbarang
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`stockbarang` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `stockbarang`;

/*Table structure for table `keluar` */

DROP TABLE IF EXISTS `keluar`;

CREATE TABLE `keluar` (
  `idkeluar` int(11) NOT NULL AUTO_INCREMENT,
  `idbarang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `penerima` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`idkeluar`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `keluar` */

insert  into `keluar`(`idkeluar`,`idbarang`,`tanggal`,`penerima`,`qty`) values 
(1,1,'2022-05-10 15:51:26','pembeli',1),
(2,3,'2022-05-10 16:18:40','Hilang',3),
(4,2,'2022-05-13 22:29:53','Test 1',2),
(5,3,'2022-05-13 22:43:04','Test ',1),
(7,7,'2022-05-17 16:36:45','Vini',3),
(8,15,'2022-05-17 17:05:34','Rini',5),
(9,14,'2022-05-22 16:51:06','Rini',530),
(10,14,'2022-05-22 16:54:32','saya',170),
(11,14,'2022-05-22 16:54:44','saya',7),
(12,13,'2022-05-22 17:12:07','Test',10),
(13,24,'2022-05-24 14:06:49','saya',15),
(14,14,'2022-05-25 11:27:55','Vino',12);

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`iduser`,`email`,`password`) values 
(1,'vina@gmail.com','12345'),
(6,'vini@gmail.com','12345'),
(7,'vino@gmail.com','12345'),
(8,'vania@gmail.com','123');

/*Table structure for table `masuk` */

DROP TABLE IF EXISTS `masuk`;

CREATE TABLE `masuk` (
  `idmasuk` int(11) NOT NULL AUTO_INCREMENT,
  `idbarang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `keterangan` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `penerima` varchar(255) DEFAULT NULL,
  `iduser` int(11) NOT NULL,
  PRIMARY KEY (`idmasuk`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `masuk` */

insert  into `masuk`(`idmasuk`,`idbarang`,`tanggal`,`keterangan`,`qty`,`penerima`,`iduser`) values 
(2,1,'2022-05-10 15:39:11','Rini',1,NULL,0),
(5,2,'2022-05-14 09:14:21','Rini',4,NULL,0),
(6,10,'2022-05-17 14:33:31','saya',2,NULL,0),
(7,7,'2022-05-17 16:33:31','saya',17,NULL,0),
(8,14,'2022-05-17 17:05:08','Vini',5,NULL,0),
(9,13,'2022-05-17 17:22:16','Rina',10,NULL,0),
(10,13,'2022-05-17 20:10:45','Vini',10,NULL,0),
(11,13,'2022-05-17 20:12:35','Vini',10,NULL,0),
(12,16,'2022-05-17 22:46:22','saya',5,NULL,0),
(13,14,'2022-05-22 16:53:22','Vini',2,NULL,0),
(14,14,'2022-05-22 16:53:45','saya',200,NULL,0),
(15,14,'2022-05-22 16:54:12','saya',200,NULL,0),
(16,24,'2022-05-24 14:06:23','Rini',5,NULL,0),
(17,14,'2022-05-25 11:27:23','Vino',12,NULL,0);

/*Table structure for table `stock` */

DROP TABLE IF EXISTS `stock`;

CREATE TABLE `stock` (
  `idbarang` int(11) NOT NULL AUTO_INCREMENT,
  `namabarang` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`idbarang`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

/*Data for the table `stock` */

insert  into `stock`(`idbarang`,`namabarang`,`deskripsi`,`stock`,`image`) values 
(13,'ZenBook Pro Duo 15 OLED ','ZenBook Pro Duo 15 OLED memberikan Anda pengalaman menonton yang luar biasa imersif, dengan layar NanoEdge 4K OLED HDR 1 yang brilian, dimana menghadirkan warna ultra-vivid dan hitam pekat. Color gamut 100% DCI-P3 setingkat bioskop dan akurasi warna Delta-E <2 2, menjadikannya serba bisa untuk kreasi profesional, serta tervalidasi PANTONE® untuk akurasi warna tingkat profesional dan bersertifikat TÜV Rheinland untuk menjaga Kesehatan mata Anda.  ZenBook Pro Duo 15 OLED juga menyertakan ScreenPad Plus baru yang dapat dimiringkan, layar sentuh sekunder yang dapat dimiringkan secara otomatis sebesar 9,5°, menciptakan sudut 144,5° antara layar utama dan ScreenPad Plus untuk tampilan yang lebih nyaman. Anda dapat menikmati visual yang mulus di kedua layar, dengan multitasking yang mudah berkat aplikasi bawaan ScreenPad Plus yang dioptimalkan yang meningkatkan alur kerja Anda.',520,'ba9398e068f754e804952bda59ba3ec6.png'),
(14,'ASUS ZenBook 13 OLED','ZenBook 13 OLED yang sangat ringkas, tipis, dan ringan dilengkapi dengan Prosesor Mobile AMD Ryzen™ 5000 Series untuk kinerja serba kuat, dan layar NanoEdge FHD OLED HDR yang menakjubkan, dimana menghadirkan visual yang sangat jelas dan nyata. Keindahan ZenBook 13 OLED akan membuat gaya hidup Anda yang aktif bepergian menjadi lebih mudah dari sebelumnya.',0,'3feb846ecf345b2247e36f3548cefbda.png'),
(15,'ASUS ExpertBook B3','ASUS ExpertBook B3 Flip dibuat untuk menyambut normal baru — kerja dan pembelajaran hybrid. Ini adalah pendamping terbaik untuk guru dan siswa, dan rekan yang sempurna untuk pengguna bisnis dan profesional. Dengan desain yang serbaguna dan tangguh, belajar atau bekerja di mana saja bukan lagi impian. Dilengkapi dengan engsel 360° untuk fleksibilitas tampilan total, kamera1 menghadap dunia untuk perspektif baru, dan stylus2 garasi untuk input yang sederhana dan aman. B3 Flip direkayasa dengan banyak fitur perlindungan yang cerdik, termasuk ASUS Antibacterial Guard3,4 dan layar bersertifikasi TÜV Rheinland untuk perawatan mata sehari-hari. Ini juga mendukung hingga WiFi 6 dan 4G LTE5 untuk konektivitas cepat dan portabel, bersama dengan teknologi peredam bising bertenaga AI dua arah dan kamera pengurang kebisingan untuk pembelajaran jarak jauh dan konferensi yang sangat baik. Dengan ExpertBook B3 Flip di tas Anda, semua dunia Anda hanya berjarak satu putaran.',195,'bb0ee92645503bfe87434af536410fb5.png'),
(16,'ASUS ExpertBook B5','ASUS ExpertBook B5 dibuat untuk kesuksesan bisnis dalam gaya, dengan sasis yang dibuat dengan presisi dan minimalis yang mendorong batas ringan. Ini juga diatur untuk perjalanan serius dengan masa pakai baterai 14 jam yang luar biasa, dan direkayasa dengan banyak teknologi mutakhir untuk meningkatkan efisiensi kerja Anda saat bepergian. Ini termasuk prosesor Intel® Core™ Generasi ke-11, pembatalan kebisingan AI dan dukungan dual-SSD RAID, ASUS NumberPad 2.0. Itu juga dikemas dengan fitur untuk melindungi privasi dan data bisnis Anda, termasuk sensor sidik jari built-in dan chip TPM 2.0. Dengan sertifikasi Intel Evo, ExpertBook B5 adalah mitra portabel dan kuat yang sempurna untuk dunia korporat.',105,'cc42ece09627812c0a3cb56dc5f4f986.png');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`password`) values 
(1,'vinaaa@gmail.com','$2y$10$P.EjRcO78ZD4WylGvFquZeUYS549Qx9ILTqRIUnJtpI7Hp.ZmWZiS'),
(2,'vinae@gmail.com','$2y$10$fvdBSbuF9NjuwfoNGBTK/.cCAaddA7DsGYUSzYd0IxewZCjWMXqJK'),
(3,'vania@gmail.com','$2y$10$JSKQ9raxO97xaCBrztgCLOaIZGtl2GsDba3OcvknQoNiAH2DbTfJa'),
(4,'chaeunwoo@gmail.com','$2y$10$WbbrBCbn3qBW5YfMpWmxH.vHSBOTuRrr9Ry5I5sGZ4dQwEWU1W8zS');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
