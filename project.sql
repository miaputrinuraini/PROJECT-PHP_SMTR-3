/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.19-MariaDB : Database - project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `project`;

/*Table structure for table `daftar` */

DROP TABLE IF EXISTS `daftar`;

CREATE TABLE `daftar` (
  `id_daftar` varchar(50) DEFAULT NULL,
  `id_panitia` char(5) DEFAULT NULL,
  `NIS` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `daftar` */

/*Table structure for table `panitia` */

DROP TABLE IF EXISTS `panitia`;

CREATE TABLE `panitia` (
  `id_panitia` char(5) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `statuss` varchar(10) NOT NULL,
  `password_panitia` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_panitia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `panitia` */

insert  into `panitia`(`id_panitia`,`nama`,`statuss`,`password_panitia`) values ('12345','agus safrianto','Operator','23234'),('20192','mia putri ','Admin','09095'),('90001','budi lukmana','Admin','89890');

/*Table structure for table `siswa` */

DROP TABLE IF EXISTS `siswa`;

CREATE TABLE `siswa` (
  `NIS` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kelamin` varchar(20) DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nama_org_tua` varchar(50) DEFAULT NULL,
  `agama_org_tua` varchar(10) DEFAULT NULL,
  `alamat_org_tua` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `no_tlp` char(12) DEFAULT NULL,
  `umur` char(2) NOT NULL,
  `hasil_keterangan` varchar(50) DEFAULT NULL,
  `id_daftar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `siswa` */

insert  into `siswa`(`NIS`,`nama`,`tgl_lahir`,`j_kelamin`,`agama`,`alamat`,`nama_org_tua`,`agama_org_tua`,`alamat_org_tua`,`pekerjaan`,`no_tlp`,`umur`,`hasil_keterangan`,`id_daftar`) values ('200345','BULDOGO SIREGAR','2020-01-05','Laki-Laki','islam','DIMANA YA aku tu LO','BAPAK NYA BULDOGO','islam','DI DALAM RUMAH','DIREKTUR','03748290','32','TIDAK LULUS','2009'),('253677833','tika','2020-01-01','Perempuan','islam','mana ya','bimo','islam','disana lah','PETANI','0734567281','43',NULL,NULL),('43745','Pertiwi Harahap','2019-12-31','Perempuan','islam','jln. mekar sari no.3','udin','islam','merak permai','PNS','09898656','45','LULUS','2007'),('44532','cahyani putri','2020-01-02','Perempuan','islam','jln.dumai, pematang siantar','adi saputra','islam','jln.poros lubuk sakai KKT, kampar','guru','924467382542','34','LULUS','2002'),('45637','Hendrik aja','2020-01-02','Laki-Laki','islam','jln. kasah','tyo ajalah','islam','jln. tambusai','PNS','08928347854','34','LULUS','2003'),('568232356','tri rahayu','2019-11-07','Perempuan','islam','jln riau gang kepri no.09','agus tri hatmodjo','islam','jl. merak gang naga sakti no 89','PETANI','086427745437','43','TIDAK LULUS','2004'),('6783456437','atika hasiholan','2020-01-02','Perempuan','islam','disini','bapak ini','islam','disini ajalah ya','wiraswasta','8974532','34','LULUS','3001'),('76543223','ooiouy65','2020-01-03','Laki-Laki','islam','jln riau gang kepri no.09','bimo','islam','disana sini sono','DIREKTUR','0734567281','32','LULUS','2003'),('874854','yuliandri ','2020-01-01','Laki-Laki','islam','jl. air dingin marpoyan','aan','islam','kuansing','petani','93347625','45','LULUS','2007');

/*Table structure for table `coba` */

DROP TABLE IF EXISTS `coba`;

/*!50001 DROP VIEW IF EXISTS `coba` */;
/*!50001 DROP TABLE IF EXISTS `coba` */;

/*!50001 CREATE TABLE  `coba`(
 `id_panitia` char(5) ,
 `id_daftar` varchar(50) ,
 `NIS` char(10) ,
 `nama` varchar(50) ,
 `tgl_lahir` date ,
 `j_kelamin` varchar(20) ,
 `agama` varchar(10) ,
 `alamat` varchar(50) ,
 `nama_org_tua` varchar(50) ,
 `hasil_keterangan` varchar(50) 
)*/;

/*View structure for view coba */

/*!50001 DROP TABLE IF EXISTS `coba` */;
/*!50001 DROP VIEW IF EXISTS `coba` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `coba` AS (select `panitia`.`id_panitia` AS `id_panitia`,`siswa`.`id_daftar` AS `id_daftar`,`siswa`.`NIS` AS `NIS`,`siswa`.`nama` AS `nama`,`siswa`.`tgl_lahir` AS `tgl_lahir`,`siswa`.`j_kelamin` AS `j_kelamin`,`siswa`.`agama` AS `agama`,`siswa`.`alamat` AS `alamat`,`siswa`.`nama_org_tua` AS `nama_org_tua`,`siswa`.`hasil_keterangan` AS `hasil_keterangan` from (`panitia` join `siswa`) where ((`panitia`.`id_panitia` <> 0) and (`siswa`.`NIS` <> 0)) group by `siswa`.`NIS`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
