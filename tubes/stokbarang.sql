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
  `deskripsi` varchar(1000) NOT NULL,
  `stok` varchar(250) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `stok` */

insert  into `stok`(`id`,`nama`,`deskripsi`,`stok`,`gambar`) values 
(1,'ZenBook Pro Duo 15 OLED ','ZenBook Pro Duo 15 OLED memberikan Anda pengalaman menonton yang luar biasa imersif, dengan layar NanoEdge 4K OLED HDR 1 yang brilian, dimana menghadirkan warna ultra-vivid dan hitam pekat. Color gamut 100% DCI-P3 setingkat bioskop dan akurasi warna Delta-E &lt;2 2, menjadikannya serba bisa untuk kreasi profesional, serta tervalidasi PANTONE® untuk akurasi warna tingkat profesional dan bersertifikat TÜV Rheinland untuk menjaga Kesehatan mata Anda.  ZenBook Pro Duo 15 OLED juga menyertakan ScreenPad Plus baru yang dapat dimiringkan, layar sentuh sekunder yang dapat dimiringkan secara otomatis sebesar 9,5°, menciptakan sudut 144,5° antara layar utama dan ScreenPad Plus untuk tampilan yang lebih nyaman. Anda dapat menikmati visual yang mulus di kedua layar, dengan multitasking yang mudah berkat aplikasi bawaan ScreenPad Plus yang dioptimalkan yang meningkatkan alur kerja Anda.','10','62971fa4b6594.png'),
(2,'ASUS ZenBook 13 OLED','ZenBook 13 OLED yang sangat ringkas, tipis, dan ringan dilengkapi dengan Prosesor Mobile AMD Ryzen™ 5000 Series untuk kinerja serba kuat, dan layar NanoEdge FHD OLED HDR yang menakjubkan, dimana menghadirkan visual yang sangat jelas dan nyata. Keindahan ZenBook 13 OLED akan membuat gaya hidup Anda yang aktif bepergian menjadi lebih mudah dari sebelumnya.','20','asuszenbook13oled.png'),
(10,'ASUS ExpertBook B3','ASUS ExpertBook B3 Flip dibuat untuk menyambut normal baru — kerja dan pembelajaran hybrid. Ini adalah pendamping terbaik untuk guru dan siswa, dan rekan yang sempurna untuk pengguna bisnis dan profesional. Dengan desain yang serbaguna dan tangguh, belajar atau bekerja di mana saja bukan lagi impian. Dilengkapi dengan engsel 360° untuk fleksibilitas tampilan total, kamera1 menghadap dunia untuk perspektif baru, dan stylus2 garasi untuk input yang sederhana dan aman. B3 Flip direkayasa dengan banyak fitur perlindungan yang cerdik, termasuk ASUS Antibacterial Guard3,4 dan layar bersertifikasi TÜV Rheinland untuk perawatan mata sehari-hari. Ini juga mendukung hingga WiFi 6 dan 4G LTE5 untuk konektivitas cepat dan portabel, bersama dengan teknologi peredam bising bertenaga AI dua arah dan kamera pengurang kebisingan untuk pembelajaran jarak jauh dan konferensi yang sangat baik. Dengan ExpertBook B3 Flip di tas Anda, semua dunia Anda hanya berjarak satu putaran.','12','6295890d955b6.png'),
(11,'ASUS ExpertBook B5','ASUS ExpertBook B5 dibuat untuk kesuksesan bisnis dalam gaya, dengan sasis yang dibuat dengan presisi dan minimalis yang mendorong batas ringan. Ini juga diatur untuk perjalanan serius dengan masa pakai baterai 14 jam yang luar biasa, dan direkayasa dengan banyak teknologi mutakhir untuk meningkatkan efisiensi kerja Anda saat bepergian. Ini termasuk prosesor Intel® Core™ Generasi ke-11, pembatalan kebisingan AI dan dukungan dual-SSD RAID, ASUS NumberPad 2.0. Itu juga dikemas dengan fitur untuk melindungi privasi dan data bisnis Anda, termasuk sensor sidik jari built-in dan chip TPM 2.0. Dengan sertifikasi Intel Evo, ExpertBook B5 adalah mitra portabel dan kuat yang sempurna untuk dunia korporat.','13','6295892ce01ea.png');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`role`) values 
(1,'vina','$2y$10$YwPPRxRgaVpFLJzRCNxSIeQWRDFyQvuSSyobcUjHIYZnsU75240KS',''),
(5,'admin','admin','admin'),
(6,'user','user','user');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
