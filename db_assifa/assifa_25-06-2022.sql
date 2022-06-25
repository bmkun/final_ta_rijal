/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.24 : Database - assifa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`assifa` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `assifa`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Ktp` int(30) NOT NULL,
  `No_hp` int(15) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `dinniyah` */

DROP TABLE IF EXISTS `dinniyah`;

CREATE TABLE `dinniyah` (
  `id_dinniyah` int(20) NOT NULL,
  `aqidah_akhlak` int(11) NOT NULL,
  `fiqih` int(11) NOT NULL,
  `imla'` int(11) NOT NULL,
  `shiroh` int(11) NOT NULL,
  PRIMARY KEY (`id_dinniyah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dinniyah` */

/*Table structure for table `groups` */

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `groups` */

insert  into `groups`(`id`,`name`,`description`) values (1,'admin','Administrator'),(2,'members','General User'),(3,'walimurid','walimurid'),(4,'admin_assifa','administrator assifa'),(6,'guru','guru assifa');

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `id_guru` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `Verification` varchar(10) DEFAULT NULL,
  `Kelas_ummi` varchar(30) DEFAULT NULL,
  `Kelas_diniah` varchar(30) DEFAULT NULL,
  `Status_guru` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

insert  into `guru`(`id_guru`,`user_id`,`Nama`,`Jenis_kelamin`,`no_hp`,`tanggal_lahir`,`Verification`,`Kelas_ummi`,`Kelas_diniah`,`Status_guru`) values (1,29,'amir khan','L','085757575','1995-06-08','Y','2','1','aktiv'),(2,34,'guru2','L','08890966','1997-09-12','Y','1','2',NULL);

/*Table structure for table `kelas_dinniyah` */

DROP TABLE IF EXISTS `kelas_dinniyah`;

CREATE TABLE `kelas_dinniyah` (
  `id_kelas_dinniyah` varchar(20) NOT NULL,
  `Kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`id_kelas_dinniyah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas_dinniyah` */

insert  into `kelas_dinniyah`(`id_kelas_dinniyah`,`Kelas`) values ('diniah_1','Sughro'),('diniah_2','Wustho A'),('diniah_3','Wustho B'),('diniah_4','Kubro'),('diniah_5','Lulus');

/*Table structure for table `kelas_ummi` */

DROP TABLE IF EXISTS `kelas_ummi`;

CREATE TABLE `kelas_ummi` (
  `id_kelas_ummi` varchar(20) NOT NULL,
  `Kelas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_ummi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas_ummi` */

insert  into `kelas_ummi`(`id_kelas_ummi`,`Kelas`) values ('ummi_1','Pra Ummi'),('ummi_2','Ummi1'),('ummi_3','Ummi2'),('ummi_4','Ummi3'),('ummi_5','Ummi4'),('ummi_6','Ummi5'),('ummi_7','Ummi6'),('ummi_8','Qur\'an'),('ummi_9','Lulus');

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `login_attempts` */

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_dinniyah` int(11) NOT NULL,
  `id_ummi` int(11) NOT NULL,
  `id_kelas_ummi` int(11) NOT NULL,
  `id_kelas_dinniyah` int(11) NOT NULL,
  `id_santri` int(20) DEFAULT NULL,
  `id_guru` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

/*Table structure for table `raport` */

DROP TABLE IF EXISTS `raport`;

CREATE TABLE `raport` (
  `id_raport` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas_santri` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_raport`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `raport` */

/*Table structure for table `santri` */

DROP TABLE IF EXISTS `santri`;

CREATE TABLE `santri` (
  `id_santri` int(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(30) NOT NULL,
  `Kelas_ummi` varchar(10) DEFAULT NULL,
  `Kelas_diniah` varchar(10) DEFAULT NULL,
  `Umur` varchar(30) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Nama_ayah` varchar(30) NOT NULL,
  `Nama_ibu` varchar(30) DEFAULT NULL,
  `Tahun_pendaftaran` varchar(10) DEFAULT NULL,
  `Sekolah_formal` varchar(30) DEFAULT NULL,
  `No_HP_ortu` varchar(15) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Verification` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_santri`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `santri` */

insert  into `santri`(`id_santri`,`id`,`Nama`,`Kelas_ummi`,`Kelas_diniah`,`Umur`,`Jenis_kelamin`,`Nama_ayah`,`Nama_ibu`,`Tahun_pendaftaran`,`Sekolah_formal`,`No_HP_ortu`,`Alamat`,`Verification`) values (27,1,'hadi','ummi_1','diniah_1','2022','L','suteno','karmiem',NULL,NULL,NULL,NULL,'Y'),(28,3,'rico','ummi_1','diniah_1','1998','L','goku','noni',NULL,NULL,NULL,NULL,'Y'),(31,4,'teguh saipul',NULL,NULL,'1999','L','asep','megan susanti',NULL,NULL,NULL,NULL,'Y'),(32,5,'susi jaenab',NULL,NULL,'2007','P','john mclaner','aisyah',NULL,NULL,NULL,NULL,'Y'),(35,6,'nopal aryanto',NULL,NULL,'2009-05-21','L','burhan atmaja','rina maria',NULL,'6 SD','085371899','jl.sigura-gura no.10 kota malang','Y'),(36,7,'sinta kusumawati',NULL,NULL,'2012-12-12','P','beni nurcahyo','mayang cantika','2022','4 SD','081887791','jl. jatisari kel. ngaglik kota batu',NULL),(37,8,'farhan abas',NULL,NULL,'2011-03-19','L','ari akbar','maulina wijaya','2022','5 SD','0814582200','jl. sigura-gura no.55, malang',NULL);

/*Table structure for table `ummi` */

DROP TABLE IF EXISTS `ummi`;

CREATE TABLE `ummi` (
  `id_ummi` int(20) NOT NULL,
  `hafalan_surat` int(10) NOT NULL,
  `hafalan_doa` int(10) NOT NULL,
  PRIMARY KEY (`id_ummi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ummi` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_email` (`email`),
  UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  UNIQUE KEY `uc_remember_selector` (`remember_selector`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`email`,`activation_selector`,`activation_code`,`forgotten_password_selector`,`forgotten_password_code`,`forgotten_password_time`,`remember_selector`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`) values (1,'127.0.0.1','administrator','$2y$10$Xg.bANJs4CWKdqlNIwHAZOFhOeN5aHPiO1fbq5crLZscBgIdrcv4O','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1653539376,1,'Admin','istrator','ADMIN','0'),(2,'::1',NULL,'$2y$10$oRjw4F7psO9ExOcKa3glo.TwIXn2w2WkowE5fHNajiFV.ZFRm3mM.','pmb@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632751918,1653366040,1,'andi','tj','',''),(3,'::1',NULL,'$2y$10$McF.XgS3MM2izjueNUxVcuvUz.Vb4xEdPHys7CYdZEl5L3OlptbVC','bak@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632752325,1653368870,1,'joni','d','',''),(4,'::1',NULL,'$2y$10$tJeCsWuD2H2RCv7b5iY9jOi5T41O1ThV/6gwaKkseRyMMNG0jcE7u','tane@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632752568,1636516016,1,'tane','e','',''),(5,'::1',NULL,'$2y$10$FSo/IZX/zFEQLu4qnPXvdOjNwsXFA3I9VzIRdf/DgH0H3yyaiBGqW','hamida@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632946348,1632946377,1,NULL,NULL,NULL,NULL),(6,'::1',NULL,'$2y$10$YxPJWpodPiiTq5u4jn/qI.NMt1vvs2Vf0OJtC3N7swPlgZyVOAfjO','nella@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632946721,1632946748,1,NULL,NULL,NULL,NULL),(7,'::1',NULL,'$2y$10$.5gEo6FFjoLTm8vg5TTdY.1hojizS3yLg0XvHT6ByfN9I0NsUaR0a','rian@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1633469955,1636380620,1,NULL,NULL,NULL,NULL),(8,'::1',NULL,'$2y$10$dVTELY0ovuo2GhQI.21O4OwCdXlGsRSXhn9NarFrdpzh/0pAW5/Ie','ernes@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1633898251,1635471683,1,NULL,NULL,NULL,NULL),(9,'::1',NULL,'$2y$10$KWZk6wG2n/k6SCOqdWp2hOdmDFXPtXXj2zUbn1zwAWlITqfHN/rKa','yayan@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634154403,NULL,1,'yayan','ruhiyan','','08534634'),(10,'::1',NULL,'$2y$10$AN2wajj6fKjTqODbapWgge/GqU2r9rBLiAIh1niQe4/gJjT9KAwim','lala@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156079,NULL,1,'dsfsdf','sdfsd','asda','084848'),(11,'::1',NULL,'$2y$10$JuiikaH5uce3ixjtpIGUaeHw/FwyTs2.kLEjws1x6rWdhz/n.ee9i','yani1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156439,NULL,1,'yani1','asa','','08523662558'),(12,'::1',NULL,'$2y$10$eWqbzb5Qv8egf3mfck2wzepoWYz3ywZm9TIpihwwiixnviWT/udAG','danu@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156498,NULL,1,'danu','pratama',NULL,'12345678'),(13,'::1',NULL,'$2y$10$PmUAG/7CSK6rXpwf1EGpTeJy.WKBIHF3U3rNzzEELrcd7tDG5Q7wC','gaga@ymail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156599,NULL,1,'gaga','gaga',NULL,'0849494'),(14,'::1',NULL,'$2y$10$Zbdt26V0opBI.2gVLg2lSeOSPnEjM8ibrR6kNMPe19wFbfjtxkTwK','menik@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156728,1634156859,1,'menik','menik','','00000000'),(15,'::1',NULL,'$2y$10$h7uX8rrVGGDbhDqwXdPS6.KwNwB24yOo.rgtkaZgtAdRfOWRpi.km','guru@gmai.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1635649968,1636026669,1,NULL,NULL,NULL,NULL),(16,'192.168.1.13',NULL,'$2y$10$kbiIO/ZBdOZooqckerblrOFdSqlpM6cBa/qP3yx1I5Za2CtJqCMAW','rizal@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1635912521,1636867615,1,NULL,NULL,NULL,NULL),(17,'192.168.1.13',NULL,'$2y$10$02PVfxtEU5BfIqWy4ZWcvesto8NcOmqnZ3GxmhAbAb7BbauBnwVEK','roiyan@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1635932096,1635932115,1,NULL,NULL,NULL,NULL),(18,'::1',NULL,'$2y$10$eNIxdfcOYE7b/9tLuDP7j.EFxWuEdX7kroX6FF0WniDwrmkF.HuWO','rifki@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636003052,1636392901,1,NULL,NULL,NULL,NULL),(20,'::1',NULL,'$2y$10$kqNeOVXimYI7r5LuxQgsL.xYQ1EAIpCnvdiYzOKikQ4WvWlUkLTpq','skdfjs@sdkfjsldk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636279645,NULL,1,NULL,NULL,NULL,NULL),(21,'::1',NULL,'$2y$10$p9IOQiceOQCVNuiH4BmbU.hTPvCupzGZjuGc.wclcFEW0ZKAIrmTW','rozak@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636280288,1636387470,1,NULL,NULL,NULL,NULL),(22,'::1',NULL,'$2y$10$ZHSc0Q4UszGy6AyukWMljej08B7iUjjgWcWDYjYV99ygi89DNTINu','danu@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636393023,1636393031,1,NULL,NULL,NULL,NULL),(23,'::1',NULL,'$2y$10$QX.aL74V/LxabvWhsBCt8unL8rLZP/s4B1EpEbS6.PplzY0MdycP.','veve@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636501336,1636503512,1,NULL,NULL,NULL,NULL),(24,'::1',NULL,'$2y$10$t6YKGMso3lFHDBVlo22QyOHL4uta7YWBAjb9GNE2cdqA5X17bRaei','fahrizal@mail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636513978,1636867771,1,NULL,NULL,NULL,NULL),(25,'::1',NULL,'$2y$10$myhJNHEJQKQEfYtClzo8hu65lnc6SFAzMDfwXZmXBzp29trmj81Yu','naiman@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653372037,1653372229,1,NULL,NULL,NULL,NULL),(26,'::1',NULL,'$2y$10$UW0j1Qu5Tu6.OB6QLauda.sgtVjbVyF9.yXkpaIsXaqnTKXyLXevy','tomi@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653372544,1653537001,1,'tomi','tomi','assifa','admin'),(27,'::1',NULL,'$2y$10$W0ihwchqgDefkfDhBVovd.2OtADHzHeOfsWTsn7OOFgao41u97OgO','sukiran@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653387643,1654669940,1,NULL,NULL,NULL,NULL),(28,'::1',NULL,'$2y$10$vruaMeL.sJkuvfodZnj84ewXthL6seVXtnCekfPy/rsllEs2mLq4e','doni_s@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653399394,1653532951,1,NULL,NULL,NULL,NULL),(29,'::1',NULL,'$2y$10$iJRwJCsgjiFfkew2aFdORe1gIAuHgLJktiqhzbZvbj/Rfp9qgXLvO','guru1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653539120,1654670948,1,'guru1','guru','guru','admin'),(30,'::1',NULL,'$2y$10$3R3qkRb0Z6UdcHD0dd25S.2V76s6Y7NlhdMNUuRxfZXwplyYS8I72','admin_assifa@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653539353,1656156332,1,'fabi','al katiri','assifa','08999'),(31,'192.168.1.13',NULL,'$2y$10$xUDSUuMogpmqpwd/9w6Q1umsR86/8dbcnyb3iNDLYijR6dbv8wkMi','saipul69@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654671771,1655385598,1,NULL,NULL,NULL,NULL),(32,'192.168.1.13',NULL,'$2y$10$wBj5YavfZ9IOu.FM82u7tOB3XczOckjtFg6Et1bLEZfxYWnIBIGMK','sussus2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654672253,1654677760,1,NULL,NULL,NULL,NULL),(33,'192.168.1.13',NULL,'$2y$10$eXscVYVK/YLA6X0tx4mWeeTNqdOnPTV5VcSdYtJnxZjEKBvdoZbIe','moni22@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654672949,1654678265,1,NULL,NULL,NULL,NULL),(34,'192.168.1.13',NULL,'$2y$10$qVosjIx7C3wFWJF7rQ8zoeKZ8gduhViFCWHVSZV2z/Xk9qBH6tD2y','guru2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654673242,1656161883,1,NULL,NULL,NULL,NULL),(35,'192.168.1.13',NULL,'$2y$10$33nzY6dcAFUPE/.anRc/uOlHHpdU83txA9KXk5ej1WzMkxmgo6cPy','nopalyanto@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655388107,1655388512,1,NULL,NULL,NULL,NULL),(36,'192.168.1.13',NULL,'$2y$10$tym7bhtuYVUxPB4V1er7nu5oyn8Eyza3WtPSicesXbcw7dP/gyGqG','sinta12@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655389389,1655820385,1,NULL,NULL,NULL,NULL),(37,'192.168.1.13',NULL,'$2y$10$rzRYz/M26ENQj8LBMe7aruInjfm97YbOl7IzLzYzSS4VMao3HF6Oe','farhanabs@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655614435,1655820032,1,NULL,NULL,NULL,NULL),(38,'192.168.1.13',NULL,'$2y$10$cMCknHyvdkX/KPelrhnV8uW3eF.I2fg64JNwyWjGMhOklAGPDmROy','rafafitri@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655908974,1655909095,1,NULL,NULL,NULL,NULL);

/*Table structure for table `users_groups` */

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values (1,1,1),(2,1,2),(3,2,3),(4,3,4),(16,14,3),(30,26,4),(28,27,3),(29,28,6),(32,29,6),(34,30,4),(35,31,3),(36,32,3),(37,33,3),(38,34,6),(39,35,3),(40,36,3),(41,37,3),(42,38,3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
