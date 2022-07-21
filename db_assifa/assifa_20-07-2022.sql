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

/*Table structure for table `detail_mapel` */

DROP TABLE IF EXISTS `detail_mapel`;

CREATE TABLE `detail_mapel` (
  `kd_detail_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `detail_mapel` varchar(30) DEFAULT NULL,
  `aspek_penilaian` varchar(30) DEFAULT NULL,
  `tingkatan` varchar(30) DEFAULT NULL,
  `hafalan` varchar(30) DEFAULT NULL,
  `kelas` varbinary(30) DEFAULT NULL,
  `kd_kelas` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_detail_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

/*Data for the table `detail_mapel` */

insert  into `detail_mapel`(`kd_detail_mapel`,`detail_mapel`,`aspek_penilaian`,`tingkatan`,`hafalan`,`kelas`,`kd_kelas`,`id_mapel`) values (1,'Aqidah Akhlaq','Pemahaman Teory','Shugro',NULL,'diniah',1,1),(2,'Fiqih','Pemahaman Teory','Shugro',NULL,'diniah',1,2),(3,'Shiroh','Pemahaman Teory','Shugro',NULL,'diniah',1,3),(4,'imla\'','Praktik','Shugro',NULL,'diniah',1,4),(5,'Aqidah Akhlak','Pemahaman Teory','Wustho A',NULL,'diniah',2,1),(6,'Fiqih','Pemahaman Teory','Wustho A',NULL,'diniah',2,2),(7,'Shiroh','Pemahaman Teory','Wustho A',NULL,'diniah',2,3),(8,'imla\'','Praktik','Wustho A',NULL,'diniah',2,4),(9,'Aqidah Akhlak','Pemahaman Teory','Wustho B',NULL,'diniah',3,1),(10,'Fiqih','Pemahaman Teory','Wustho B',NULL,'diniah',3,2),(11,'imla\'','Praktik','Wustho B',NULL,'diniah',3,3),(12,'Shiroh','Pemahaman Teory','Wustho B',NULL,'diniah',3,4),(13,'Aqidah Akhlak','Pemahaman Teory','Kubro',NULL,'diniah',4,1),(14,'Fiqih','Pemahaman Teory','Kubro',NULL,'diniah',4,2),(15,'imla\'','Praktik','Kubro',NULL,'diniah',4,3),(16,'Shiroh','Pemahaman Teory','Kubro',NULL,'diniah',4,4),(17,'Ummi 1','','Ummi 1','Bacaan','ummi',7,6),(18,'Doa sebelum makan & minum',NULL,'Ummi 1','Doa','ummi',7,6),(19,'Doa sesudah makan & minum',NULL,'Ummi 1','Doa','ummi',7,6),(20,'Doa sebelum tidur',NULL,'Ummi 1','Doa','ummi',7,6),(21,'Doa bangun tidur',NULL,'Ummi 1','Doa','ummi',7,6),(22,'Doa masuk masjid',NULL,'Ummi 1','Doa','ummi',7,6),(23,'Doa keluar masjid',NULL,'Ummi 1','Doa','ummi',7,6),(24,'Surah An-Naas',NULL,'Ummi 1','Surah Pendek','ummi',7,6),(25,'Surah Al-Falaq',NULL,'Ummi 1','Surah Pendek','ummi',7,6),(26,'Surah Al-Ikhlas',NULL,'Ummi 1','Surah Pendek','ummi',7,6),(27,'Surah Al-Lahab',NULL,'Ummi 1','Sueah Pendek','ummi',7,6),(28,'Ummi 2',NULL,'Ummi 2','Bacaan','ummi',8,7),(29,'Doa sebelum tidur',NULL,'Ummi 2','Doa','ummi',8,7),(30,'Doa bangun tidur',NULL,'Ummi 2','Doa','ummi',8,7),(31,'Doa sebelum makan',NULL,'Ummi 2','Doa','ummi',8,7),(32,'Doa setelah makan',NULL,'Ummi 2','Doa','ummi',8,7),(33,'Doa masuk kamar mandi',NULL,'Ummi 2','Doa','ummi',8,7),(34,'Doa keluar kamar mandi',NULL,'Ummi 2','Doa','ummi',8,7),(35,'Doa keluar rumah',NULL,'Ummi 2','Doa','ummi',8,7),(36,'Doa sebelum belajar',NULL,'Ummi 2','Doa','ummi',8,7),(37,'Doa naik kendaraan',NULL,'Ummi 2','Doa','ummi',8,7),(38,'Doa ketika turun hujAn',NULL,'Ummi 2','Doa','ummi',8,7),(39,'Surah Al-Nasr',NULL,'Ummi 2','Surah Pendek','ummi',8,7),(40,'Surah Al-Kafirun',NULL,'Ummi 2','Surah Pendek','ummi',8,7),(41,'Surah Al-Kautsar',NULL,'Ummi 2','Surah Pendek','ummi',8,7),(42,'Ummi 3',NULL,'Ummi 3','Bacaan','ummi',9,8),(43,'Doa masuk rumah',NULL,'Ummi 3','Doa','ummi',9,8),(44,'Doa keluar rumah',NULL,'Ummi 3','Doa','ummi',9,8),(45,'Doa sebelum belajar',NULL,'Ummi 3','Doa','ummi',9,8),(46,'Doa sesudah belajar',NULL,'Ummi 3','Doa','ummi',9,8),(47,'Doa naik kendaraan',NULL,'Ummi 3','Doa','ummi',9,8),(48,'Surah Al-Ma\'un',NULL,'Ummi 3','Surah Pendek','ummi',9,8),(49,'Surah Al-Quraiys',NULL,'Ummi 3','Surah Pendek','ummi',9,8),(50,'Surah Al-Fiil',NULL,'Ummi 3','Surah Pendek','ummi',9,8),(51,'Ummi 4',NULL,'Ummi 4','Bacaan','ummi',10,9),(52,'Doa bercermin',NULL,'Ummi 4','Doa','ummi',10,9),(53,'Doa memakai pakaian',NULL,'Ummi 4','Doa','ummi',10,9),(54,'Doa melepas pakaian',NULL,'Ummi 4','Doa','ummi',10,9),(55,'Doa setelah wudhu',NULL,'Ummi 4','Doa','ummi',10,9),(56,'Surah al-Humazah',NULL,'Ummi 4','Surah Pendek','ummi',10,9),(57,'Surah Al-Ashr',NULL,'Ummi 4','Surah Pendek','ummi',10,9),(58,'Surah At-Takatsur',NULL,'Ummi 4','Surah Pendek','ummi',10,9),(59,'Ummi 5',NULL,'Ummi 5','Bacaan','ummi',11,10),(60,'Doa setelah adzan',NULL,'Ummi 5','Doa','ummi',11,10),(61,'Doa ketika cuci tangan',NULL,'Ummi 5','Doa','ummi',11,10),(62,'Doa berkumur',NULL,'Ummi 5','Doa','ummi',11,10),(63,'Surah Al-Qori\'ah',NULL,'Ummi 5','Surah Pendek','ummi',11,10),(64,'Surah Al-Adiyat',NULL,'Ummi 5','Surah Pendek','ummi',11,10),(65,'Surah Zalzalah',NULL,'Ummi 5','Surah Pendek','ummi',11,10),(66,'Pra Ummi',NULL,'Pra Ummi','Bacaan','ummi',12,11),(67,'Doa sebelum makan & minum',NULL,'Pra Ummi','Doa','ummi',12,11),(68,'Doa sesudah makan & minum',NULL,'Pra Ummi','Doa','ummi',12,11),(69,'Doa sebelum tidur',NULL,'Pra Ummi','Doa','ummi',12,11),(70,'Doa bangun tidur',NULL,'Pra Ummi','Doa','ummi',12,11),(71,'Doa masuk masjid',NULL,'Pra Ummi','Doa','ummi',12,11),(72,'Doa keluar masjid',NULL,'Pra Ummi','Doa','ummi',12,11),(73,'Surah An-Naas',NULL,'Pra Ummi','Surah Pendek','ummi',12,11),(74,'Surah Al-Falaq',NULL,'Pra Ummi','Surah Pendek','ummi',12,11),(75,'Surah Al-Ikhlas',NULL,'Pra Ummi','Surah Pendek','ummi',12,11),(76,'Surah Al-Lahab',NULL,'Pra Ummi','Surah Pendek','ummi',12,11),(77,'Ummi 6',NULL,'Ummi 6','Bacaan','ummi',13,11),(78,'Doa iftitah',NULL,'Ummi 6','Doa','ummi',14,12),(79,'Doa ruku',NULL,'Ummi 6','Doa','ummi',14,12),(80,'Doa sujud',NULL,'Ummi 6','Doa','ummi',14,12),(81,'Surah Al-Bayyinah',NULL,'Ummi 6','Surah Pendek','ummi',14,12),(82,'Surah Al-Qodr',NULL,'Ummi 6','Surah Pendek','ummi',14,12),(83,'Surah Al-Alaq',NULL,'Ummi 6','Surah Pendek','ummi',14,12),(84,'Al-Quran',NULL,'Al-Quran','Bacaan','ummi',15,13),(85,'Doa I\'tidal',NULL,'Al-Quran','Doa','ummi',15,13),(86,'Doa Tasyahud',NULL,'Al-Quran','Doa','ummi',15,13),(87,'Doa Qunut',NULL,'Al-Quran','Doa','ummi',15,13),(88,'Surah At-Tin',NULL,'Al-Quran','Surah Pendek','ummi',15,13),(89,'Surah Al-Insyiroh',NULL,'Al-Quran','Surah Pendek','ummi',15,13),(90,'Surah Al-Dhuha',NULL,'Al-Quran','Surah Pendek','ummi',15,13);

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
  `Status_guru` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `guru` */

insert  into `guru`(`id_guru`,`user_id`,`Nama`,`Jenis_kelamin`,`no_hp`,`tanggal_lahir`,`Verification`,`Status_guru`) values (1,29,'amir khan','L','085757575','1995-06-08','Y','aktif'),(2,34,'choirul huda','L','08890966','1997-09-12','Y','aktif'),(3,39,'maman nurohman','L','0894422911','1997-07-15','Y','aktif'),(4,40,'faziah putri','P','0827719928','1998-06-07','Y','aktif'),(5,41,'nur cahya','L','08144228992','1997-11-06','Y','aktif'),(6,45,'harianto ','L','0827831009','1997-08-23','Y','aktif'),(7,47,'bayu aji nugroho','L','0815627992','1998-01-12','Y','aktif'),(8,46,'eko agus setiawan','L','082889110','1997-05-05','Y','aktif');

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id_kelas` int(20) NOT NULL AUTO_INCREMENT,
  `Kelas` varchar(10) NOT NULL,
  `kd_kelas` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `kelas` */

insert  into `kelas`(`id_kelas`,`Kelas`,`kd_kelas`) values (1,'Sughro','diniah'),(2,'Wustho A','diniah'),(3,'Wustho B','diniah'),(4,'Kubro','diniah'),(5,'Lulus','diniah'),(6,'Pra Ummi','ummi'),(7,'Ummi 1','ummi'),(8,'Ummi 2','ummi'),(9,'Ummi 3','ummi'),(10,'Ummi 4','ummi'),(11,'Ummi 5','ummi'),(12,'Ummi 6','ummi'),(13,'Qur\'an','ummi'),(14,'Lulus','ummi');

/*Table structure for table `kelas_guru` */

DROP TABLE IF EXISTS `kelas_guru`;

CREATE TABLE `kelas_guru` (
  `id_kelas_guru` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `kls_guru_status` varchar(20) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `walikelas` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_guru`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `kelas_guru` */

insert  into `kelas_guru`(`id_kelas_guru`,`id_kelas`,`id_guru`,`kls_guru_status`,`id_mapel`,`walikelas`) values (2,1,2,NULL,1,'-'),(3,4,2,NULL,1,NULL),(4,6,1,NULL,5,NULL),(5,1,3,NULL,2,NULL),(6,2,1,NULL,1,NULL),(8,2,3,NULL,2,NULL),(9,1,1,NULL,1,'-'),(10,4,4,NULL,2,NULL),(11,3,4,NULL,2,NULL),(12,2,5,NULL,3,NULL),(13,1,5,NULL,3,NULL),(14,1,7,NULL,4,NULL),(15,3,8,NULL,4,NULL),(16,7,2,NULL,6,NULL),(17,8,3,NULL,7,NULL),(18,9,4,NULL,8,NULL),(19,10,5,NULL,9,NULL),(20,11,6,NULL,10,NULL),(21,12,7,NULL,11,NULL),(22,13,8,NULL,12,NULL),(24,2,7,NULL,NULL,NULL),(25,2,7,NULL,4,NULL),(26,3,6,NULL,3,NULL),(27,4,6,NULL,3,NULL),(28,4,8,NULL,4,NULL);

/*Table structure for table `kelas_santri_diniah` */

DROP TABLE IF EXISTS `kelas_santri_diniah`;

CREATE TABLE `kelas_santri_diniah` (
  `id_kelas_diniah` int(11) NOT NULL AUTO_INCREMENT,
  `id_santri` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_diniah`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `kelas_santri_diniah` */

insert  into `kelas_santri_diniah`(`id_kelas_diniah`,`id_santri`,`id_kelas`) values (1,27,2),(2,28,1),(3,31,1);

/*Table structure for table `kelas_santri_ummi` */

DROP TABLE IF EXISTS `kelas_santri_ummi`;

CREATE TABLE `kelas_santri_ummi` (
  `id_kelas_ummi` int(11) NOT NULL AUTO_INCREMENT,
  `id_santri` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_ummi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kelas_santri_ummi` */

insert  into `kelas_santri_ummi`(`id_kelas_ummi`,`id_santri`,`id_kelas`) values (1,27,7),(2,37,6),(3,28,6),(4,36,6),(5,31,8),(6,32,6);

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `login_attempts` */

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(50) DEFAULT NULL,
  `mapel_kelas` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `mapel` */

insert  into `mapel`(`id_mapel`,`nama_mapel`,`mapel_kelas`) values (1,'Aqidah Aklhaq','diniah'),(2,'Fiqih','diniah'),(3,'Shiroh','diniah'),(4,'Imla\'','diniah'),(5,'Pra Ummi','ummi'),(6,'Ummi 1','ummi'),(7,'Ummi 2','ummi'),(8,'Ummi 3','ummi'),(9,'Ummi 4','ummi'),(10,'Ummi 5','ummi'),(11,'Ummi 6','ummi'),(12,'Alqur\'an','ummi');

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

/*Table structure for table `nilai_diniah` */

DROP TABLE IF EXISTS `nilai_diniah`;

CREATE TABLE `nilai_diniah` (
  `id_nilai_diniah` int(11) NOT NULL AUTO_INCREMENT,
  `id_santri` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_detail_mapel` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `tgl_inp_nilai` varchar(10) DEFAULT NULL,
  `semester` varchar(10) DEFAULT NULL,
  `id_kelas_diniah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_diniah`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `nilai_diniah` */

insert  into `nilai_diniah`(`id_nilai_diniah`,`id_santri`,`id_kelas`,`id_guru`,`id_detail_mapel`,`nilai`,`tgl_inp_nilai`,`semester`,`id_kelas_diniah`) values (1,31,4,1,1,70,'2022','Genab',4),(2,27,4,1,1,80,'2022','Genab',4),(3,28,1,1,1,75,'2022','Genab',1);

/*Table structure for table `nilai_ummi` */

DROP TABLE IF EXISTS `nilai_ummi`;

CREATE TABLE `nilai_ummi` (
  `id_nilai_ummi` int(11) NOT NULL AUTO_INCREMENT,
  `id_santri` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_detail_mapel` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `tgl_inp_nilai` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_ummi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `nilai_ummi` */

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

insert  into `santri`(`id_santri`,`id`,`Nama`,`Kelas_ummi`,`Kelas_diniah`,`Umur`,`Jenis_kelamin`,`Nama_ayah`,`Nama_ibu`,`Tahun_pendaftaran`,`Sekolah_formal`,`No_HP_ortu`,`Alamat`,`Verification`) values (27,1,'hadi','6','2','2022','L','suteno','karmiem',NULL,NULL,NULL,NULL,'Y'),(28,3,'rico','6','1','1998','L','goku','noni',NULL,NULL,NULL,NULL,'Y'),(31,4,'teguh saipul','6','1','1999','L','asep','megan susanti',NULL,NULL,NULL,NULL,'Y'),(32,5,'susi jaenab','6','2','2007','P','john mclaner','aisyah',NULL,NULL,NULL,NULL,'Y'),(35,6,'nopal aryanto','6','2','2009-05-21','L','burhan atmaja','rina maria',NULL,'6 SD','085371899','jl.sigura-gura no.10 kota malang','Y'),(36,7,'sinta kusumawati','7','2','2012-12-12','P','beni nurcahyo','mayang cantika','2022','4 SD','081887791','jl. jatisari kel. ngaglik kota batu','Y'),(37,8,'farhan abas',NULL,NULL,'2011-03-19','L','ari akbar','maulina wijaya','2022','5 SD','0814582200','jl. sigura-gura no.55, malang','Y');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`ip_address`,`username`,`password`,`email`,`activation_selector`,`activation_code`,`forgotten_password_selector`,`forgotten_password_code`,`forgotten_password_time`,`remember_selector`,`remember_code`,`created_on`,`last_login`,`active`,`first_name`,`last_name`,`company`,`phone`) values (1,'127.0.0.1','administrator','$2y$10$Xg.bANJs4CWKdqlNIwHAZOFhOeN5aHPiO1fbq5crLZscBgIdrcv4O','admin@admin.com',NULL,'',NULL,NULL,NULL,NULL,NULL,1268889823,1653539376,1,'Admin','istrator','ADMIN','0'),(2,'::1',NULL,'$2y$10$oRjw4F7psO9ExOcKa3glo.TwIXn2w2WkowE5fHNajiFV.ZFRm3mM.','pmb@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632751918,1653366040,1,'andi','tj','',''),(3,'::1',NULL,'$2y$10$McF.XgS3MM2izjueNUxVcuvUz.Vb4xEdPHys7CYdZEl5L3OlptbVC','bak@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632752325,1653368870,1,'joni','d','',''),(4,'::1',NULL,'$2y$10$tJeCsWuD2H2RCv7b5iY9jOi5T41O1ThV/6gwaKkseRyMMNG0jcE7u','tane@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632752568,1636516016,1,'tane','e','',''),(5,'::1',NULL,'$2y$10$FSo/IZX/zFEQLu4qnPXvdOjNwsXFA3I9VzIRdf/DgH0H3yyaiBGqW','hamida@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632946348,1632946377,1,NULL,NULL,NULL,NULL),(6,'::1',NULL,'$2y$10$YxPJWpodPiiTq5u4jn/qI.NMt1vvs2Vf0OJtC3N7swPlgZyVOAfjO','nella@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1632946721,1632946748,1,NULL,NULL,NULL,NULL),(7,'::1',NULL,'$2y$10$.5gEo6FFjoLTm8vg5TTdY.1hojizS3yLg0XvHT6ByfN9I0NsUaR0a','rian@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1633469955,1636380620,1,NULL,NULL,NULL,NULL),(8,'::1',NULL,'$2y$10$dVTELY0ovuo2GhQI.21O4OwCdXlGsRSXhn9NarFrdpzh/0pAW5/Ie','ernes@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1633898251,1635471683,1,NULL,NULL,NULL,NULL),(9,'::1',NULL,'$2y$10$KWZk6wG2n/k6SCOqdWp2hOdmDFXPtXXj2zUbn1zwAWlITqfHN/rKa','yayan@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634154403,NULL,1,'yayan','ruhiyan','','08534634'),(10,'::1',NULL,'$2y$10$AN2wajj6fKjTqODbapWgge/GqU2r9rBLiAIh1niQe4/gJjT9KAwim','lala@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156079,NULL,1,'dsfsdf','sdfsd','asda','084848'),(11,'::1',NULL,'$2y$10$JuiikaH5uce3ixjtpIGUaeHw/FwyTs2.kLEjws1x6rWdhz/n.ee9i','yani1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156439,NULL,1,'yani1','asa','','08523662558'),(12,'::1',NULL,'$2y$10$eWqbzb5Qv8egf3mfck2wzepoWYz3ywZm9TIpihwwiixnviWT/udAG','danu@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156498,NULL,1,'danu','pratama',NULL,'12345678'),(13,'::1',NULL,'$2y$10$PmUAG/7CSK6rXpwf1EGpTeJy.WKBIHF3U3rNzzEELrcd7tDG5Q7wC','gaga@ymail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156599,NULL,1,'gaga','gaga',NULL,'0849494'),(14,'::1',NULL,'$2y$10$Zbdt26V0opBI.2gVLg2lSeOSPnEjM8ibrR6kNMPe19wFbfjtxkTwK','menik@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1634156728,1634156859,1,'menik','menik','','00000000'),(15,'::1',NULL,'$2y$10$h7uX8rrVGGDbhDqwXdPS6.KwNwB24yOo.rgtkaZgtAdRfOWRpi.km','guru@gmai.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1635649968,1636026669,1,NULL,NULL,NULL,NULL),(16,'192.168.1.13',NULL,'$2y$10$kbiIO/ZBdOZooqckerblrOFdSqlpM6cBa/qP3yx1I5Za2CtJqCMAW','rizal@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1635912521,1636867615,1,NULL,NULL,NULL,NULL),(17,'192.168.1.13',NULL,'$2y$10$02PVfxtEU5BfIqWy4ZWcvesto8NcOmqnZ3GxmhAbAb7BbauBnwVEK','roiyan@stiki.ac.id',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1635932096,1635932115,1,NULL,NULL,NULL,NULL),(18,'::1',NULL,'$2y$10$eNIxdfcOYE7b/9tLuDP7j.EFxWuEdX7kroX6FF0WniDwrmkF.HuWO','rifki@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636003052,1636392901,1,NULL,NULL,NULL,NULL),(20,'::1',NULL,'$2y$10$kqNeOVXimYI7r5LuxQgsL.xYQ1EAIpCnvdiYzOKikQ4WvWlUkLTpq','skdfjs@sdkfjsldk',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636279645,NULL,1,NULL,NULL,NULL,NULL),(21,'::1',NULL,'$2y$10$p9IOQiceOQCVNuiH4BmbU.hTPvCupzGZjuGc.wclcFEW0ZKAIrmTW','rozak@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636280288,1636387470,1,NULL,NULL,NULL,NULL),(22,'::1',NULL,'$2y$10$ZHSc0Q4UszGy6AyukWMljej08B7iUjjgWcWDYjYV99ygi89DNTINu','danu@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636393023,1636393031,1,NULL,NULL,NULL,NULL),(23,'::1',NULL,'$2y$10$QX.aL74V/LxabvWhsBCt8unL8rLZP/s4B1EpEbS6.PplzY0MdycP.','veve@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636501336,1636503512,1,NULL,NULL,NULL,NULL),(24,'::1',NULL,'$2y$10$t6YKGMso3lFHDBVlo22QyOHL4uta7YWBAjb9GNE2cdqA5X17bRaei','fahrizal@mail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1636513978,1636867771,1,NULL,NULL,NULL,NULL),(25,'::1',NULL,'$2y$10$myhJNHEJQKQEfYtClzo8hu65lnc6SFAzMDfwXZmXBzp29trmj81Yu','naiman@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653372037,1653372229,1,NULL,NULL,NULL,NULL),(26,'::1',NULL,'$2y$10$UW0j1Qu5Tu6.OB6QLauda.sgtVjbVyF9.yXkpaIsXaqnTKXyLXevy','tomi@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653372544,1653537001,1,'tomi','tomi','assifa','admin'),(27,'::1',NULL,'$2y$10$W0ihwchqgDefkfDhBVovd.2OtADHzHeOfsWTsn7OOFgao41u97OgO','sukiran@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653387643,1654669940,1,NULL,NULL,NULL,NULL),(28,'::1',NULL,'$2y$10$vruaMeL.sJkuvfodZnj84ewXthL6seVXtnCekfPy/rsllEs2mLq4e','doni_s@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653399394,1653532951,1,NULL,NULL,NULL,NULL),(29,'::1',NULL,'$2y$10$iJRwJCsgjiFfkew2aFdORe1gIAuHgLJktiqhzbZvbj/Rfp9qgXLvO','guru1@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653539120,1658387057,1,'guru1','guru','guru','admin'),(30,'::1',NULL,'$2y$10$3R3qkRb0Z6UdcHD0dd25S.2V76s6Y7NlhdMNUuRxfZXwplyYS8I72','admin_assifa@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1653539353,1658388098,1,'fabi','al katiri','assifa','08999'),(31,'192.168.1.13',NULL,'$2y$10$xUDSUuMogpmqpwd/9w6Q1umsR86/8dbcnyb3iNDLYijR6dbv8wkMi','saipul69@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654671771,1658388317,1,NULL,NULL,NULL,NULL),(32,'192.168.1.13',NULL,'$2y$10$wBj5YavfZ9IOu.FM82u7tOB3XczOckjtFg6Et1bLEZfxYWnIBIGMK','sussus2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654672253,1656668745,1,NULL,NULL,NULL,NULL),(33,'192.168.1.13',NULL,'$2y$10$eXscVYVK/YLA6X0tx4mWeeTNqdOnPTV5VcSdYtJnxZjEKBvdoZbIe','moni22@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654672949,1654678265,1,NULL,NULL,NULL,NULL),(34,'192.168.1.13',NULL,'$2y$10$qVosjIx7C3wFWJF7rQ8zoeKZ8gduhViFCWHVSZV2z/Xk9qBH6tD2y','guru2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1654673242,1658388452,1,NULL,NULL,NULL,NULL),(35,'192.168.1.13',NULL,'$2y$10$33nzY6dcAFUPE/.anRc/uOlHHpdU83txA9KXk5ej1WzMkxmgo6cPy','nopalyanto@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655388107,1655388512,1,NULL,NULL,NULL,NULL),(36,'192.168.1.13',NULL,'$2y$10$tym7bhtuYVUxPB4V1er7nu5oyn8Eyza3WtPSicesXbcw7dP/gyGqG','sinta12@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655389389,1655820385,1,NULL,NULL,NULL,NULL),(37,'192.168.1.13',NULL,'$2y$10$rzRYz/M26ENQj8LBMe7aruInjfm97YbOl7IzLzYzSS4VMao3HF6Oe','farhanabs@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655614435,1655820032,1,NULL,NULL,NULL,NULL),(38,'192.168.1.13',NULL,'$2y$10$cMCknHyvdkX/KPelrhnV8uW3eF.I2fg64JNwyWjGMhOklAGPDmROy','rafafitri@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1655908974,1656337367,1,NULL,NULL,NULL,NULL),(39,'192.168.1.17',NULL,'$2y$10$0jj7ebyE0/JHXPvf3BEibO7a6kPURYufHk4ffxkLlBDyQ167wTlOi','guru3@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656523526,1656523535,1,NULL,NULL,NULL,NULL),(40,'192.168.1.17',NULL,'$2y$10$pPYOeRMndaKvJ2MkeeM7X.XHhOOxy2evkKaOB7r6d2DREyU21LbUK','faziah55@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656597233,1656597244,1,NULL,NULL,NULL,NULL),(41,'192.168.1.17',NULL,'$2y$10$17gZWLpDY60Sz2P/TSbfnOv4H7VBmFn6qA6ySTngsQ2CaBlnO9Q4q','nurcahya@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656666707,1656666715,1,NULL,NULL,NULL,NULL),(42,'192.168.1.17',NULL,'$2y$10$62b./SSGB.2wfSNdlN2pJeqMOPdwqXLDq68D9ooJoVuNdHfAWjFUC','bagusharianto@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656666827,NULL,1,NULL,NULL,NULL,NULL),(43,'192.168.1.17',NULL,'$2y$10$xouiZpbz7XszaYcJu/nKuuCR4l9ENNMsXz1xqioNk8wAvKE8qvGnm','agushermawan@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656666860,NULL,1,NULL,NULL,NULL,NULL),(44,'192.168.1.17',NULL,'$2y$10$LY85nli.r70jc1KrWMLWo.m83dMCFGk1rCOcNXg5kZQBtVneT7vNC','catursetiawan@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656666899,1656666908,1,NULL,NULL,NULL,NULL),(45,'192.168.1.17',NULL,'$2y$10$1D3R1HaN4oVdez2Irp4Xju6gn3p5WCK6/EKdiyhuUBCUYqY3QWRO2','harianto@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656667030,1657120412,1,NULL,NULL,NULL,NULL),(46,'192.168.1.17',NULL,'$2y$10$MQR.BBv4lbp4rga9xJpu2e8RAd3I5THCyEAM9plhjOXLRr2Md/BMu','ekoagus@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656667086,1657723234,1,NULL,NULL,NULL,NULL),(47,'192.168.1.17',NULL,'$2y$10$MIE1UrrrKyDty3YCAToCku7YBIvnTTracdWMrutUYs7xXTWWnRIJS','bayuaji@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1656667142,1656667229,1,NULL,NULL,NULL,NULL),(48,'192.168.1.12',NULL,'$2y$10$3uXUwyW47gzxeGN.MsN54O3VzKQ6r/QCPvsQ7etiGT2D4i96tmFeO','febri2@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1657624467,1657723186,1,NULL,NULL,NULL,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

/*Data for the table `users_groups` */

insert  into `users_groups`(`id`,`user_id`,`group_id`) values (1,1,1),(2,1,2),(3,2,3),(4,3,4),(16,14,3),(30,26,4),(28,27,3),(29,28,6),(32,29,6),(34,30,4),(35,31,3),(36,32,3),(37,33,3),(38,34,6),(39,35,3),(40,36,3),(41,37,3),(42,38,3),(43,39,6),(44,40,6),(45,41,6),(46,42,3),(47,43,3),(48,44,3),(49,45,6),(50,46,6),(51,47,6),(52,48,3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
