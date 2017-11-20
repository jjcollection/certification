/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.25-MariaDB-1~xenial : Database - sertifikasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sertifikasi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sertifikasi`;

/*Table structure for table `tbl_absensi` */

DROP TABLE IF EXISTS `tbl_absensi`;

CREATE TABLE `tbl_absensi` (
  `idAbsensi` int(11) NOT NULL AUTO_INCREMENT,
  `idPertemuan` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `statusKehadiran` int(11) DEFAULT NULL,
  `tglAbsen` datetime DEFAULT NULL,
  `idPendaftaran` int(11) DEFAULT NULL,
  PRIMARY KEY (`idAbsensi`),
  KEY `idAbsensi` (`idAbsensi`),
  KEY `idPertemuan` (`idPertemuan`),
  KEY `idUser` (`idUser`),
  KEY `idPendaftaran` (`idPendaftaran`),
  CONSTRAINT `tbl_absensi_ibfk_3` FOREIGN KEY (`idPertemuan`) REFERENCES `tbl_pertemuan` (`idPertemuan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_absensi_ibfk_4` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_absensi_ibfk_5` FOREIGN KEY (`idPendaftaran`) REFERENCES `tbl_pendaftaran` (`idPendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_absensi` */

insert  into `tbl_absensi`(`idAbsensi`,`idPertemuan`,`idUser`,`statusKehadiran`,`tglAbsen`,`idPendaftaran`) values 
(61,13,14,1,'2017-11-16 00:11:28',24),
(62,14,14,1,'2017-11-16 00:11:30',24);

/*Table structure for table `tbl_keahlian` */

DROP TABLE IF EXISTS `tbl_keahlian`;

CREATE TABLE `tbl_keahlian` (
  `idKeahlian` int(11) NOT NULL AUTO_INCREMENT,
  `namaKeahlian` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idKeahlian`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_keahlian` */

insert  into `tbl_keahlian`(`idKeahlian`,`namaKeahlian`) values 
(1,'VB.Net '),
(3,'Gimp '),
(5,'Autocad '),
(7,'Web Design');

/*Table structure for table `tbl_level` */

DROP TABLE IF EXISTS `tbl_level`;

CREATE TABLE `tbl_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_level` */

insert  into `tbl_level`(`id`,`level`) values 
(1,'Admin'),
(2,'Dosen'),
(3,'Mahasiswa');

/*Table structure for table `tbl_nilai_master` */

DROP TABLE IF EXISTS `tbl_nilai_master`;

CREATE TABLE `tbl_nilai_master` (
  `idNilaiMaster` int(11) NOT NULL AUTO_INCREMENT,
  `idPendaftaran` int(11) DEFAULT NULL,
  `tglPenilaian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `absensi` double DEFAULT '0',
  `tugas` double DEFAULT '0',
  `ujian` double DEFAULT '0',
  `na` double DEFAULT '0',
  `jml` int(11) DEFAULT '0',
  `nhuruf` char(1) DEFAULT '-',
  PRIMARY KEY (`idNilaiMaster`),
  KEY `idPendaftaran` (`idPendaftaran`),
  CONSTRAINT `tbl_nilai_master_ibfk_1` FOREIGN KEY (`idPendaftaran`) REFERENCES `tbl_pendaftaran` (`idPendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_nilai_master` */

insert  into `tbl_nilai_master`(`idNilaiMaster`,`idPendaftaran`,`tglPenilaian`,`absensi`,`tugas`,`ujian`,`na`,`jml`,`nhuruf`) values 
(5,24,'2017-11-17 01:25:09',30,21.6,36.8,88.4,0,'A'),
(6,25,'2017-11-17 01:30:01',0,0,0,0,0,'E'),
(7,26,'2017-11-17 01:34:11',0,0,0,0,0,'E'),
(8,27,'2017-11-15 22:47:57',0,0,0,0,0,'-'),
(9,28,'2017-11-15 22:48:53',0,0,0,0,0,'-'),
(10,29,'2017-11-16 19:16:54',0,0,0,0,0,'-');

/*Table structure for table `tbl_pelaksanaan` */

DROP TABLE IF EXISTS `tbl_pelaksanaan`;

CREATE TABLE `tbl_pelaksanaan` (
  `idPelaksanaan` int(11) NOT NULL AUTO_INCREMENT,
  `idKeahlian` int(11) DEFAULT NULL,
  `idPengajar` varchar(11) DEFAULT NULL,
  `tglBuka` date DEFAULT NULL,
  `tglTutup` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `idPeriode` int(11) DEFAULT NULL,
  `jmlPertemuan` int(11) DEFAULT NULL,
  `tglPelaksanaan` date DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idPelaksanaan`),
  KEY `idKeahlian` (`idKeahlian`),
  KEY `idPeriode` (`idPeriode`),
  KEY `idPengajar` (`idPengajar`),
  CONSTRAINT `tbl_pelaksanaan_ibfk_1` FOREIGN KEY (`idKeahlian`) REFERENCES `tbl_keahlian` (`idKeahlian`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_pelaksanaan_ibfk_3` FOREIGN KEY (`idPeriode`) REFERENCES `tbl_periodePelaksanaan` (`idPeriodePelaksanaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_pelaksanaan_ibfk_4` FOREIGN KEY (`idPengajar`) REFERENCES `tbl_profil_dosen` (`kodeDosen`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pelaksanaan` */

insert  into `tbl_pelaksanaan`(`idPelaksanaan`,`idKeahlian`,`idPengajar`,`tglBuka`,`tglTutup`,`status`,`idPeriode`,`jmlPertemuan`,`tglPelaksanaan`,`waktu`) values 
(19,1,'JJ','2017-11-15','2017-11-22','1',8,4,'2017-11-29','08:00-12:00'),
(20,1,'JJ','2017-11-15','2017-11-22','1',8,4,'2017-11-29','13:00-17:00'),
(21,3,'LS','2017-11-15','2017-11-22','1',8,4,'2017-11-29','08:00-12:00'),
(22,3,'AW','2017-11-15','2017-11-22','1',8,4,'2017-11-29','13:00-17:00'),
(23,5,'WH','2017-11-15','2017-11-22','1',8,4,'2017-11-29','08:00-12:00'),
(24,5,'WH','2017-11-15','2017-11-22','1',8,4,'2017-11-29','13:00-17:00'),
(25,7,'RR','2017-11-15','2017-11-22','1',8,4,'2017-11-29','08:00-12:00');

/*Table structure for table `tbl_pendaftaran` */

DROP TABLE IF EXISTS `tbl_pendaftaran`;

CREATE TABLE `tbl_pendaftaran` (
  `idPendaftaran` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) DEFAULT NULL,
  `idPelaksanaan` int(11) DEFAULT NULL,
  `tanggalDaftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idPendaftaran`),
  KEY `idUser` (`idUser`),
  KEY `idPelaksanaan` (`idPelaksanaan`),
  CONSTRAINT `tbl_pendaftaran_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_pendaftaran_ibfk_2` FOREIGN KEY (`idPelaksanaan`) REFERENCES `tbl_pelaksanaan` (`idPelaksanaan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pendaftaran` */

insert  into `tbl_pendaftaran`(`idPendaftaran`,`idUser`,`idPelaksanaan`,`tanggalDaftar`) values 
(24,14,19,'2017-11-15 22:45:08'),
(25,13,19,'2017-11-15 22:45:53'),
(26,17,20,'2017-11-15 22:47:12'),
(27,15,23,'2017-11-15 22:47:57'),
(28,8,23,'2017-11-15 22:48:53'),
(29,14,23,'2017-11-16 19:16:53');

/*Table structure for table `tbl_periodePelaksanaan` */

DROP TABLE IF EXISTS `tbl_periodePelaksanaan`;

CREATE TABLE `tbl_periodePelaksanaan` (
  `idPeriodePelaksanaan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` varchar(4) DEFAULT NULL,
  `bulan` varchar(4) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `tglPeriode` date DEFAULT NULL,
  PRIMARY KEY (`idPeriodePelaksanaan`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_periodePelaksanaan` */

insert  into `tbl_periodePelaksanaan`(`idPeriodePelaksanaan`,`tgl`,`bulan`,`tahun`,`tglPeriode`) values 
(8,'15','10','2017','2017-11-29');

/*Table structure for table `tbl_pertemuan` */

DROP TABLE IF EXISTS `tbl_pertemuan`;

CREATE TABLE `tbl_pertemuan` (
  `idPertemuan` int(11) NOT NULL AUTO_INCREMENT,
  `idPelaksanaan` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `materi` longtext,
  PRIMARY KEY (`idPertemuan`),
  KEY `idPelaksanaan` (`idPelaksanaan`),
  CONSTRAINT `tbl_pertemuan_ibfk_1` FOREIGN KEY (`idPelaksanaan`) REFERENCES `tbl_pelaksanaan` (`idPelaksanaan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pertemuan` */

insert  into `tbl_pertemuan`(`idPertemuan`,`idPelaksanaan`,`tanggal`,`materi`) values 
(13,19,'2017-11-29','Materi VB1'),
(14,19,'2017-11-30','Materi VB2'),
(15,20,'2017-11-29','Materi VB2'),
(16,20,'2017-11-30','Materi VB2\r\n'),
(17,21,'2017-11-29','Materi GIMP1'),
(18,21,'2017-11-30','Materi GIMP1\r\n'),
(19,NULL,'0000-00-00','jkk'),
(20,NULL,'2017-11-28','hjgj'),
(21,25,'2017-11-23','jkjkkh');

/*Table structure for table `tbl_prodi` */

DROP TABLE IF EXISTS `tbl_prodi`;

CREATE TABLE `tbl_prodi` (
  `kodeProdi` varchar(50) NOT NULL,
  `namaProdi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kodeProdi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_prodi` */

insert  into `tbl_prodi`(`kodeProdi`,`namaProdi`) values 
('IF','Teknik Informatika'),
('KA','Komputer Akuntansi'),
('SI','Sistem Informasi');

/*Table structure for table `tbl_profil_admin` */

DROP TABLE IF EXISTS `tbl_profil_admin`;

CREATE TABLE `tbl_profil_admin` (
  `noPegawai` int(11) NOT NULL,
  `namaLengkap` varchar(200) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `alamat` longtext,
  `idUser` int(10) DEFAULT NULL,
  PRIMARY KEY (`noPegawai`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `tbl_profil_admin_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_profil_admin` */

/*Table structure for table `tbl_profil_dosen` */

DROP TABLE IF EXISTS `tbl_profil_dosen`;

CREATE TABLE `tbl_profil_dosen` (
  `kodeDosen` varchar(11) NOT NULL,
  `namaDosen` varchar(200) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `alamat` longtext,
  `idUser` int(10) DEFAULT NULL,
  PRIMARY KEY (`kodeDosen`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `tbl_profil_dosen_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_profil_dosen` */

insert  into `tbl_profil_dosen`(`kodeDosen`,`namaDosen`,`telp`,`email`,`alamat`,`idUser`) values 
('AW','Ade Winarni,MT','08293433','btm@gmail.cm','btm',4),
('JJ','Jajang Nurjaman,ST','081991364199','za2ng2509@mail.com','Tanjungpinang',3),
('LS','Liza Safitri.,ST.,M.Kom',NULL,NULL,NULL,7),
('RR','Moch Rizki Romdoni.S.Kom.,MT',NULL,NULL,NULL,6),
('WH','Wan Hendra,M.SI','423432424','agus@mail.com','Uban',5);

/*Table structure for table `tbl_profil_mahasiswa` */

DROP TABLE IF EXISTS `tbl_profil_mahasiswa`;

CREATE TABLE `tbl_profil_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tlp` varchar(20) DEFAULT NULL,
  `kodeProdi` varchar(50) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`nim`),
  KEY `KodeJurusan` (`kodeProdi`),
  KEY `IdUser` (`idUser`),
  CONSTRAINT `tbl_profil_mahasiswa_ibfk_1` FOREIGN KEY (`kodeProdi`) REFERENCES `tbl_prodi` (`kodeProdi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tbl_profil_mahasiswa_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_profil_mahasiswa` */

insert  into `tbl_profil_mahasiswa`(`nim`,`nama`,`tlp`,`kodeProdi`,`idUser`) values 
(1209411,'Jeri Chou','08313222233','IF',8),
(1209412,'mhs','123','IF',9),
(1213004,'Ade Rainalwi','0934 2321 6342','IF',15),
(1216011,'Muhammad Fachrizan','4234 3212 4343 2122','IF',17),
(3213002,'Erik P.L.Gaol','5345 5243 3432 2422','SI',16),
(3214430,'Rupin Novanto','0819 1234 5678','SI',13),
(3215417,'Sandra','0812 1234 4321','SI',14);

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `saltPassword` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `level_id` (`level_id`),
  CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `tbl_level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`username`,`password`,`saltPassword`,`email`,`joinDate`,`level_id`) values 
(1,'admin','66d28118c1a03c39dac2214dd6618d92','595d88a15a4986.75965274','admin@mail.com','2017-11-08 19:25:35',1),
(3,'JJ','c4990109a317280e754506b73a2d1679','5a0cf5b11b04d8.73931344','za2ng2509@mail.com','2017-11-11 09:38:26',2),
(4,'AW','66d28118c1a03c39dac2214dd6618d92','595d88a15a4986.75965274','hjk@mail.com','2017-11-11 09:38:27',2),
(5,'WH','66d28118c1a03c39dac2214dd6618d92','595d88a15a4986.75965274','jjj@mail.com','2017-11-11 09:38:28',2),
(6,'RR','66d28118c1a03c39dac2214dd6618d92','595d88a15a4986.75965274','mhs@mail.com','2017-11-11 09:38:29',2),
(7,'LS','66d28118c1a03c39dac2214dd6618d92','','','2017-11-11 09:41:34',2),
(8,'1209411','193ba00fb1797033fbeae7ffc913d5b9','5a073503a4c454.08032294','jery@mail.com','2017-11-12 00:36:03',3),
(9,'1209412','193ba00fb1797033fbeae7ffc913d5b9','5a073503a4c454.08032294','','0000-00-00 00:00:00',3),
(10,'kl','ab464de1278c0542bd98812e7d113900','5a0aea3d218269.86937574','jlkjkl@mail.com','2017-11-14 20:06:05',1),
(11,'oke','c1f3c26ba8a1f9f091b5deba279ece71','5a0aefa58d6502.32434957','jhj@mail.com','2017-11-14 20:07:28',2),
(12,'AU','fea5d86e99763523693fb76d232c6bea','5a0aec00717816.70934205','agus@mail.com','2017-11-14 20:13:36',2),
(13,'3214430','3e058579e43d962b5653e26adf6b1a17','5a0c3dca746f48.92270323','rupin@mail.com','2017-11-15 20:14:50',3),
(14,'3215417','2c56e25c68213d67b753f9cce9eb2d82','5a0c3e0f4e9db5.42963707','sandra@mail.com','2017-11-15 20:15:59',3),
(15,'1213004','776d964f0c3e5d5ae5952dfe19475017','5a0c3e427652e8.14989504','ade@mail.com','2017-11-15 20:16:50',3),
(16,'3213002','0b9e1b3ea8af6a83f9583a951887ae0a','5a0c3e83251942.27068612','erik@mail.com','2017-11-15 20:17:55',3),
(17,'1216011','1757befd11f788534a2047b49ead9fdd','5a0c3ec46d0315.44023565','m@mail.com','2017-11-15 20:19:00',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
