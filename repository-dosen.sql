/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.16 : Database - repository-dosen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`repository-dosen` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `repository-dosen`;

/*Table structure for table `detailfile` */

DROP TABLE IF EXISTS `detailfile`;

CREATE TABLE `detailfile` (
  `idDetail` int(11) NOT NULL AUTO_INCREMENT,
  `nameDokumen` varchar(255) DEFAULT NULL,
  `idEvent` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDetail`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `detailfile` */

LOCK TABLES `detailfile` WRITE;

insert  into `detailfile`(`idDetail`,`nameDokumen`,`idEvent`) values (1,'Fotocopy KTP',1),(2,'Pas Photo 2x3',1),(3,'Pas Photo 3x4',1),(4,'SK Riwayat Mengajar',2),(5,'Ijazah S1',3),(6,'Ijazah S2',3),(7,'Ijazah S3',3),(8,'SK Jabatan Fungsional Asisten Ahli',4),(9,'SK Jabatan Fungsional Lektor',4),(10,'SK Jabatan Fungsional Lektor Kepala',4),(11,'SK Jabatan Fungsional Guru Besar',4),(12,'SK Riwayat Sertifikasi Dosen',5),(13,'SK Sehat Jasmani dan Rohani',6),(14,'SK Bebas Narkotika',6),(15,'Data Pendukung Asisten Ahli',7),(17,'Data Pendukung Lektor Kepala',9),(18,'Data Pendukung Guru Besar',10),(20,'Persyaratan Baru',1),(22,'Data Pendukung Lektor',8);

UNLOCK TABLES;

/*Table structure for table `detailprogress` */

DROP TABLE IF EXISTS `detailprogress`;

CREATE TABLE `detailprogress` (
  `idDetail` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `numberRequirement` int(11) DEFAULT NULL,
  `idEvent` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDetail`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `detailprogress` */

LOCK TABLES `detailprogress` WRITE;

insert  into `detailprogress`(`idDetail`,`description`,`numberRequirement`,`idEvent`) values (1,'Validasi Data',1,1),(2,'Penilaian Data',2,1),(5,'Validasi Data',1,2),(6,'Penilaian',2,2),(7,'Pengumuman Hasil',3,2),(8,'Validasi Data',1,3),(9,'Penilaian',2,3),(10,'Pengumuman Hasil',3,3),(11,'Validasi Data',1,4),(12,'Penilaian',2,4),(13,'Pengumuman Hasil',3,4),(14,'Validasi Data',1,5),(15,'Penilaian',2,5),(16,'Pengumuman Hasil',3,5),(17,'Validasi Data',1,6),(18,'Penilaian',2,6),(24,'Pengumuman Hasil',3,1),(25,'Pengumuman Hasil',3,6),(26,'Validasi Persyaratan Administrasi',4,2),(27,'Validasi Data',5,2),(28,'Test aja',4,1),(29,'test lagi',5,1),(30,'coba lagi',6,1),(31,'coba coba',7,1),(32,'coba aja',8,1);

UNLOCK TABLES;

/*Table structure for table `functionalprogresshistory` */

DROP TABLE IF EXISTS `functionalprogresshistory`;

CREATE TABLE `functionalprogresshistory` (
  `idProgressHistory` int(11) NOT NULL AUTO_INCREMENT,
  `idLecturer` int(11) NOT NULL,
  `idFunctional` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProgressHistory`),
  KEY `FK_av76av3ded924txinf2wlmiw0` (`idLecturer`),
  KEY `FK_phh4ija9m8l0xv2p9b0eabp5t` (`idFunctional`),
  CONSTRAINT `FK_lecturer` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`),
  CONSTRAINT `FK_phh4ija9m8l0xv2p9b0eabp5t` FOREIGN KEY (`idFunctional`) REFERENCES `masterfunctional` (`idFunctional`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `functionalprogresshistory` */

LOCK TABLES `functionalprogresshistory` WRITE;

insert  into `functionalprogresshistory`(`idProgressHistory`,`idLecturer`,`idFunctional`,`state`) values (1,15,1,1),(2,15,2,1),(3,15,3,1),(14,16,1,1),(15,15,4,1);

UNLOCK TABLES;

/*Table structure for table `lecturerprogresshistory` */

DROP TABLE IF EXISTS `lecturerprogresshistory`;

CREATE TABLE `lecturerprogresshistory` (
  `idProgressHistory` int(11) NOT NULL AUTO_INCREMENT,
  `idLecturer` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProgressHistory`),
  KEY `FK_25eh79i084cu1v871nspp2jwp` (`idLecturer`),
  CONSTRAINT `FK_lecturerprogresshistory` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `lecturerprogresshistory` */

LOCK TABLES `lecturerprogresshistory` WRITE;

insert  into `lecturerprogresshistory`(`idProgressHistory`,`idLecturer`,`state`) values (2,16,1),(10,1,0);

UNLOCK TABLES;

/*Table structure for table `masterfaculty` */

DROP TABLE IF EXISTS `masterfaculty`;

CREATE TABLE `masterfaculty` (
  `idFaculty` varchar(255) NOT NULL,
  `nameFaculty` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idFaculty`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `masterfaculty` */

LOCK TABLES `masterfaculty` WRITE;

insert  into `masterfaculty`(`idFaculty`,`nameFaculty`) values ('F001','Ilmu Komputer'),('F002','Ekonomi'),('F003','Psikologi'),('F004','Sastra');

UNLOCK TABLES;

/*Table structure for table `masterfunctional` */

DROP TABLE IF EXISTS `masterfunctional`;

CREATE TABLE `masterfunctional` (
  `idFunctional` int(11) NOT NULL AUTO_INCREMENT,
  `nameFunctional` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idFunctional`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `masterfunctional` */

LOCK TABLES `masterfunctional` WRITE;

insert  into `masterfunctional`(`idFunctional`,`nameFunctional`) values (1,'Asisten Ahli'),(2,'Lektor'),(3,'Lektor Kepala'),(4,'Guru Besar');

UNLOCK TABLES;

/*Table structure for table `mastergender` */

DROP TABLE IF EXISTS `mastergender`;

CREATE TABLE `mastergender` (
  `idGender` int(11) NOT NULL AUTO_INCREMENT,
  `nameGender` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idGender`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `mastergender` */

LOCK TABLES `mastergender` WRITE;

insert  into `mastergender`(`idGender`,`nameGender`) values (1,'Laki - Laki'),(2,'Perempuan');

UNLOCK TABLES;

/*Table structure for table `masterlecture` */

DROP TABLE IF EXISTS `masterlecture`;

CREATE TABLE `masterlecture` (
  `idLecture` varchar(255) NOT NULL,
  `nameLecture` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idLecture`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `masterlecture` */

LOCK TABLES `masterlecture` WRITE;

insert  into `masterlecture`(`idLecture`,`nameLecture`) values ('MK001','Manajemen Keuangan'),('MK002','Dasar Akutansi'),('MK003','Basis Data'),('MK004','Struktur Data'),('MK005','Bahasa Inggris I');

UNLOCK TABLES;

/*Table structure for table `masterlecturer` */

DROP TABLE IF EXISTS `masterlecturer`;

CREATE TABLE `masterlecturer` (
  `idLecturer` int(11) NOT NULL AUTO_INCREMENT,
  `nameLecturer` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nidn` varchar(255) DEFAULT NULL,
  `numberPhone` varchar(255) DEFAULT NULL,
  `idGender` int(11) DEFAULT NULL,
  `idMajor` varchar(255) DEFAULT NULL,
  `idReligion` int(11) DEFAULT NULL,
  `state` varchar(11) DEFAULT NULL,
  `nameUniversity1` varchar(500) DEFAULT NULL,
  `degree1` varchar(10) DEFAULT NULL,
  `studyProgram1` varchar(500) DEFAULT NULL,
  `nameUniversity2` varchar(500) DEFAULT NULL,
  `degree2` varchar(10) DEFAULT NULL,
  `studyProgram2` varchar(500) DEFAULT NULL,
  `nameUniversity3` varchar(500) DEFAULT NULL,
  `degree3` varchar(10) DEFAULT NULL,
  `studyProgram3` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idLecturer`),
  KEY `FK_o49jo2fr3bmyp4y0ynmnbb4c8` (`idGender`),
  KEY `FK_kcq0gcmv0e678kh6k3l510gki` (`idMajor`),
  KEY `FK_klne04dnkk7alvuh9liowdhfn` (`idReligion`),
  CONSTRAINT `FK_gender` FOREIGN KEY (`idGender`) REFERENCES `mastergender` (`idGender`),
  CONSTRAINT `FK_major` FOREIGN KEY (`idMajor`) REFERENCES `mastermajor` (`idMajor`),
  CONSTRAINT `FK_religion` FOREIGN KEY (`idReligion`) REFERENCES `masterreligion` (`idReligion`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `masterlecturer` */

LOCK TABLES `masterlecturer` WRITE;

insert  into `masterlecturer`(`idLecturer`,`nameLecturer`,`address`,`birthdate`,`birthplace`,`email`,`username`,`password`,`nidn`,`numberPhone`,`idGender`,`idMajor`,`idReligion`,`state`,`nameUniversity1`,`degree1`,`studyProgram1`,`nameUniversity2`,`degree2`,`studyProgram2`,`nameUniversity3`,`degree3`,`studyProgram3`) values (1,'Erna Hikmawati','bandung','1992-08-21','bandung','erna@gmail.com','erna','erna','0421089201','0847465578',2,'P001',1,'Tidak','Universitas Nasional Pasim','S. Kom','Teknik Informatika','STMIK Likmi','M. Kom','Sistem Informasi',NULL,NULL,NULL),(2,'Soleh Sabarudin','cimahi','1972-09-08','cimahi','soleh@gmail.com','soleh','soleh','0408097207','028878787',1,'P001',1,'Tidak','Universitas Nasional Pasim','S. Kom','Teknik Informatika','STMIK Likmi','M. Kom','Sistem Informasi',NULL,NULL,NULL),(3,'Eni Triningsih','bandung','1989-09-24','bandung','eni@gmail.com','eni','eni','8863350017','0825625626',2,'P001',1,'Tidak','Universitas Nasional Pasim','S. Kom','Teknik Informatika','Institut Teknologi Bandung','M.T','Sistem Informasi',NULL,NULL,NULL),(4,'Eko Travada SP','bandung','1973-01-23','bandung','eko@gmail.com','eko','eko','0408047305','081524124154',1,'P001',1,'Ya','Universitas Kristen Maranatha','S.T','Teknik Elektro','Institut Teknologi Bandung','M.T','Teknik Elektro','Sedang Studi Lanjut (S3 STEI ITB)',NULL,'Elektro dan Informatika'),(5,'Yudhistira Sulaeman','cimahi','1973-07-03','cimahi','yudhis@gmail.com','yudhis','yudhis','8891700016','0825663164',1,'P001',1,'Tidak','Institut Teknologi Bandung','S.Si','Matematika','STMIK Likmi','M.Kom','Sistem Informasi',NULL,NULL,NULL),(6,'Lucky Handayani','bandung','1974-09-28','bandung','lucky@gmail.com','lucky','lucky','0428097402','087676647',2,'P001',1,'Tidak','Universitas Jenderal Ahmad Yani','S.T','Teknik Mesin','Institut Teknologi Bandung ','M.T','Teknik Mesin',NULL,NULL,NULL),(7,'Tjandra Tjahyarini','bandung','1966-10-18','bandung','tjandra@gmail.com','tjandra','tjandra','0418106603','0887467246',2,'P001',1,'Tidak','Institut Teknologi Bandung','Ir','Geofisika','(Sedang Studi Lanjut) STMIK LIKMI',NULL,'Sistem Informasi',NULL,NULL,NULL),(8,'Juhridin','bandung','1962-10-14\r\n','bandung','juhridin@gmail.com','juhridin','juhridin','8836400016\r\n','089676878',1,'P001',1,'Tidak','STAI Siliwangi Bandung','S.Pd','Bahasa Inggris','Pasca Sarjana UIN SGD Bandng','M.Ag','PAI',NULL,NULL,NULL),(9,'Sri Wisnu Noloadi\r\n','padalarang','1969\r\n-03-23','padalarang','sri@gmail.com','sri','sri','0423036904\r\n','087767868765',1,'P002',1,'Tidak','Politeknik Bandung','S.T','Teknik Informatika','Institut Teknologi Bandung','M.T','Teknik Informatika',NULL,NULL,NULL),(10,'Selly Meliana\r\n','padalarang','1978-10-04\r\n','padalarang','selly@gmail.com','selly','selly','0404107803\r\n','08977611461',2,'P002',1,'Tidak','Universitas Indonesia','S.Kom','Teknik Informatika','STIMIK LIKMI','M. Kom','Sistem Informasi',NULL,NULL,NULL),(11,'Lismah Azriani\r\n','bandung','1976-05-02','bandung','lizmah@gmail.com','lizmah','lizmah','0402057602\r\n','08257265656',2,'P002',1,'Tidak','Universitas Komputer','S.T','Teknik Informatika','(Sedang Studi Lanjut) ITB',NULL,'Teknik Elektro',NULL,NULL,NULL),(12,'Abdul Hafiz Tanjung\r\n','pawenang','1970-06-02\r\n','bandung','abdul@gmail.com','abdul','abdul','0402067001\r\n','08676451666',1,'P002',1,'Tidak','Universitas padjajaran','S.E','Akuntansi','Universitas Padjajaran','M.Si','Akuntansi',NULL,NULL,NULL),(13,'Dewi Saparina\r\n','bandung','1955-05-27\r\n','bandung','dewi@gmail.com','dewi','dewi','0427056601\r\n','086746724565',2,'P002',1,'Tidak','Universitas Padjajaran','S.Pd','Bahasa Indonesia','(Sedang Studi Lanjut) Universitas Padjajaran','M.hum','Sastra Indonesia',NULL,NULL,NULL),(14,'Fristi Arfiawati\r\n','bandung','1976-02-20\r\n','bandung','fristi@gmail.com','fristi','fristi','0428106907\r\n','08978614998',2,'P002',1,'Tidak','Universitas Padjajaran','S.Pd','Bahasa Inggris','Universitas Padjajaran','M.hum','Sastra Inggris',NULL,NULL,NULL),(15,'Sarip Topik Hidayat\r\n','bandung','1976-02-20\r\n','bandung','sarip@gmail.com','sarip','sarip','8829740017\r\n','08677461469',1,'P002',1,'Tidak','Politeknik Bandung','S.T','Teknik Informatika','Institut Teknologi Bandung','M.T','Teknik Informatika',NULL,NULL,NULL),(16,'Nurachadi','bandung','1971-12-17\r\n','bandung','nurachadi@gmail.com','nurachadi','nurachadi','0417127101\r\n','08798717394',1,'P002',1,'Tidak','Universitas Widiyatama','S.Kom','Teknik Informatika','STMIK Likmi','M.Kom','Sistem Informasi',NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `mastermajor` */

DROP TABLE IF EXISTS `mastermajor`;

CREATE TABLE `mastermajor` (
  `idMajor` varchar(255) NOT NULL,
  `nameMajor` varchar(255) DEFAULT NULL,
  `idFaculty` varchar(255) NOT NULL,
  PRIMARY KEY (`idMajor`),
  KEY `FK_r8tf9visnthhbnpad0a0v13tw` (`idFaculty`),
  CONSTRAINT `FK_mastermajor` FOREIGN KEY (`idFaculty`) REFERENCES `masterfaculty` (`idFaculty`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mastermajor` */

LOCK TABLES `mastermajor` WRITE;

insert  into `mastermajor`(`idMajor`,`nameMajor`,`idFaculty`) values ('P001','D3 Manajemen Informatika','F001'),('P002','S1 Teknik Informatika','F002');

UNLOCK TABLES;

/*Table structure for table `masternews` */

DROP TABLE IF EXISTS `masternews`;

CREATE TABLE `masternews` (
  `idNews` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `updateDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idNews`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `masternews` */

LOCK TABLES `masternews` WRITE;

insert  into `masternews`(`idNews`,`title`,`description`,`updateDate`) values (1,'Kemenristek Dikti Umumkan Sertifikasi Dosen Tahun 2018','...','2018-06-30'),(2,'Universitas Nasional Pasim Selenggarakan Kejuaraan Mobile Legends','...','2018-06-30');

UNLOCK TABLES;

/*Table structure for table `masterreligion` */

DROP TABLE IF EXISTS `masterreligion`;

CREATE TABLE `masterreligion` (
  `idReligion` int(11) NOT NULL AUTO_INCREMENT,
  `nameReligion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idReligion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `masterreligion` */

LOCK TABLES `masterreligion` WRITE;

insert  into `masterreligion`(`idReligion`,`nameReligion`) values (1,'Islam'),(2,'Kristen'),(3,'Khatolik'),(4,'Hindu'),(5,'Buddha'),(6,'Khonghucu');

UNLOCK TABLES;

/*Table structure for table `masterstudy` */

DROP TABLE IF EXISTS `masterstudy`;

CREATE TABLE `masterstudy` (
  `idStudy` int(11) NOT NULL AUTO_INCREMENT,
  `studyDescription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idStudy`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `masterstudy` */

LOCK TABLES `masterstudy` WRITE;

insert  into `masterstudy`(`idStudy`,`studyDescription`) values (1,'S1'),(2,'S2'),(3,'S3');

UNLOCK TABLES;

/*Table structure for table `sertificationprogresshistory` */

DROP TABLE IF EXISTS `sertificationprogresshistory`;

CREATE TABLE `sertificationprogresshistory` (
  `idProgressHistory` int(11) NOT NULL AUTO_INCREMENT,
  `idLecturer` int(11) NOT NULL,
  `state` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`idProgressHistory`),
  KEY `FK_dxnuucvoowctkbgh9fyp1fr4r` (`idLecturer`),
  CONSTRAINT `FK_mstlecturer` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `sertificationprogresshistory` */

LOCK TABLES `sertificationprogresshistory` WRITE;

insert  into `sertificationprogresshistory`(`idProgressHistory`,`idLecturer`,`state`) values (5,4,'Ya');

UNLOCK TABLES;

/*Table structure for table `tranfile` */

DROP TABLE IF EXISTS `tranfile`;

CREATE TABLE `tranfile` (
  `idTranFile` int(11) NOT NULL AUTO_INCREMENT,
  `state` int(11) DEFAULT NULL,
  `nameFile` varchar(255) DEFAULT NULL,
  `information` varchar(255) DEFAULT NULL,
  `idFunctional` int(11) DEFAULT NULL,
  `idLecturer` int(11) NOT NULL,
  `idDetail` int(11) NOT NULL,
  PRIMARY KEY (`idTranFile`),
  KEY `FK_r2fsuu8wccwbn8dj6g0t99iur` (`idLecturer`),
  KEY `FK_af2thys60lf1itg1d2w8wkwyh` (`idDetail`),
  CONSTRAINT `FK_af2thys60lf1itg1d2w8wkwyh` FOREIGN KEY (`idDetail`) REFERENCES `detailfile` (`idDetail`),
  CONSTRAINT `FK_tranfilelecturer` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `tranfile` */

LOCK TABLES `tranfile` WRITE;

insert  into `tranfile`(`idTranFile`,`state`,`nameFile`,`information`,`idFunctional`,`idLecturer`,`idDetail`) values (1,1,NULL,NULL,0,15,1),(2,1,NULL,NULL,0,15,2),(3,1,'assets/RiwayatMengajar/GajiKulit.PDF',NULL,0,16,4),(5,1,'assets/RiwayatPendidikan/Gaji (1).pdf',NULL,0,16,5),(9,1,'assets/RiwayatFungsional/Gaji (4).pdf',NULL,0,16,8),(10,1,'assets/RiwayatSertifikasi/Gaji (2).pdf',NULL,0,16,12),(11,1,'assets/RiwayatSertifikasi/Gaji (1).pdf',NULL,0,16,12),(12,1,'assets/RiwayatMengajar/Gaji.pdf',NULL,0,1,4),(13,1,'assets/RiwayatMengajar/Gaji.pdf',NULL,0,1,4),(14,1,'assets/PengajuanNidn/Gaji (1).pdf',NULL,0,1,13),(15,1,'assets/PengajuanNidn/Gaji.pdf',NULL,0,1,14),(16,1,'assets/PengajuanAsistenAhli/Gaji (1).pdf',NULL,0,16,15),(17,1,'assets/PengajuanLektor/Gaji (1).pdf',NULL,0,16,22),(18,1,'assets/PengajuanLektorKepala/Gaji (1).pdf',NULL,0,15,17),(19,1,'assets/PengajuanGuruBesar/Gaji (3).pdf',NULL,0,15,18);

UNLOCK TABLES;

/*Table structure for table `tranfunctionalhistory` */

DROP TABLE IF EXISTS `tranfunctionalhistory`;

CREATE TABLE `tranfunctionalhistory` (
  `idFunctionalHistory` int(11) NOT NULL AUTO_INCREMENT,
  `SkDate` varchar(255) DEFAULT NULL,
  `SkNumber` varchar(255) DEFAULT NULL,
  `idLecturer` int(11) NOT NULL,
  `idFunctional` int(11) NOT NULL,
  `idTranFile` int(11) NOT NULL,
  PRIMARY KEY (`idFunctionalHistory`),
  KEY `FK_in58atr4xoae51rt2gp5f611u` (`idLecturer`),
  KEY `FK_dsvth32hi53bgxcxfjqqtv99s` (`idFunctional`),
  KEY `FK_j3husff9aqr40gi3455h27ha8` (`idTranFile`),
  CONSTRAINT `FK_dsvth32hi53bgxcxfjqqtv99s` FOREIGN KEY (`idFunctional`) REFERENCES `masterfunctional` (`idFunctional`),
  CONSTRAINT `FK_j3husff9aqr40gi3455h27ha8` FOREIGN KEY (`idTranFile`) REFERENCES `tranfile` (`idTranFile`),
  CONSTRAINT `FK_tranfunctionalhistorylecturer` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tranfunctionalhistory` */

LOCK TABLES `tranfunctionalhistory` WRITE;

insert  into `tranfunctionalhistory`(`idFunctionalHistory`,`SkDate`,`SkNumber`,`idLecturer`,`idFunctional`,`idTranFile`) values (3,'2018-06-01','21920192',16,1,9);

UNLOCK TABLES;

/*Table structure for table `tranlecturehistory` */

DROP TABLE IF EXISTS `tranlecturehistory`;

CREATE TABLE `tranlecturehistory` (
  `idLectureHistory` int(11) NOT NULL AUTO_INCREMENT,
  `semester` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `idLecturer` int(11) NOT NULL,
  `idTranFile` int(11) NOT NULL,
  `idLecture` varchar(255) NOT NULL,
  PRIMARY KEY (`idLectureHistory`),
  KEY `FK_riwdlhs5vvs9l5eqi7808u9lm` (`idLecturer`),
  KEY `FK_ame3lowc7kjqfndevd99bvxl0` (`idTranFile`),
  KEY `FK_6o86dv85bxl827rdmb1qwif24` (`idLecture`),
  CONSTRAINT `FK_6o86dv85bxl827rdmb1qwif24` FOREIGN KEY (`idLecture`) REFERENCES `masterlecture` (`idLecture`),
  CONSTRAINT `FK_ame3lowc7kjqfndevd99bvxl0` FOREIGN KEY (`idTranFile`) REFERENCES `tranfile` (`idTranFile`),
  CONSTRAINT `FK_tranlecturehistorylecturer` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tranlecturehistory` */

LOCK TABLES `tranlecturehistory` WRITE;

insert  into `tranlecturehistory`(`idLectureHistory`,`semester`,`year`,`idLecturer`,`idTranFile`,`idLecture`) values (1,'Genap',2017,16,3,'MK003'),(2,'Genap',2017,1,12,'MK001'),(3,'Ganjil',2019,1,13,'MK001');

UNLOCK TABLES;

/*Table structure for table `tranprogressfunctional` */

DROP TABLE IF EXISTS `tranprogressfunctional`;

CREATE TABLE `tranprogressfunctional` (
  `idTranProgress` int(11) NOT NULL AUTO_INCREMENT,
  `state` int(11) DEFAULT NULL,
  `idDetail` int(11) NOT NULL,
  `idProgressHistory` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTranProgress`),
  KEY `FK_cq8w1yd9ve3ehaomqfrstheew` (`idDetail`),
  KEY `FK_7nkyaqwce5wpfmk759u001opy` (`idProgressHistory`),
  CONSTRAINT `FK_7nkyaqwce5wpfmk759u001opy` FOREIGN KEY (`idProgressHistory`) REFERENCES `functionalprogresshistory` (`idProgressHistory`),
  CONSTRAINT `FK_cq8w1yd9ve3ehaomqfrstheew` FOREIGN KEY (`idDetail`) REFERENCES `detailprogress` (`idDetail`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `tranprogressfunctional` */

LOCK TABLES `tranprogressfunctional` WRITE;

insert  into `tranprogressfunctional`(`idTranProgress`,`state`,`idDetail`,`idProgressHistory`) values (24,1,8,2),(25,1,9,2),(26,1,10,2),(27,1,10,2),(28,1,10,2),(29,1,10,2);

UNLOCK TABLES;

/*Table structure for table `tranprogresslecturer` */

DROP TABLE IF EXISTS `tranprogresslecturer`;

CREATE TABLE `tranprogresslecturer` (
  `idTranProgress` int(11) NOT NULL AUTO_INCREMENT,
  `state` int(11) DEFAULT NULL,
  `idDetail` int(11) NOT NULL,
  `idProgressHistory` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTranProgress`),
  KEY `FK_60ygpabhfha1hmja1hexcc9c6` (`idDetail`),
  KEY `FK_r6xti7gedb5n6alv8oqtyatv9` (`idProgressHistory`),
  CONSTRAINT `FK_60ygpabhfha1hmja1hexcc9c6` FOREIGN KEY (`idDetail`) REFERENCES `detailprogress` (`idDetail`),
  CONSTRAINT `FK_r6xti7gedb5n6alv8oqtyatv9` FOREIGN KEY (`idProgressHistory`) REFERENCES `lecturerprogresshistory` (`idProgressHistory`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `tranprogresslecturer` */

LOCK TABLES `tranprogresslecturer` WRITE;

insert  into `tranprogresslecturer`(`idTranProgress`,`state`,`idDetail`,`idProgressHistory`) values (2,1,1,10),(3,1,2,10),(4,1,24,10),(8,1,1,2),(9,1,2,2),(10,1,24,2),(11,1,28,2),(12,1,29,2),(13,1,30,2),(14,1,31,2),(15,1,32,2);

UNLOCK TABLES;

/*Table structure for table `tranprogresssertification` */

DROP TABLE IF EXISTS `tranprogresssertification`;

CREATE TABLE `tranprogresssertification` (
  `idTranProgress` int(11) NOT NULL AUTO_INCREMENT,
  `state` int(11) DEFAULT NULL,
  `idDetail` int(11) NOT NULL,
  `idProgressHistory` int(11) DEFAULT NULL,
  PRIMARY KEY (`idTranProgress`),
  KEY `FK_qkq80a3lswwp6ss1s1geiq3vt` (`idDetail`),
  KEY `FK_aswfawsemcpexvroo5i1flk3v` (`idProgressHistory`),
  CONSTRAINT `FK_aswfawsemcpexvroo5i1flk3v` FOREIGN KEY (`idProgressHistory`) REFERENCES `sertificationprogresshistory` (`idProgressHistory`),
  CONSTRAINT `FK_qkq80a3lswwp6ss1s1geiq3vt` FOREIGN KEY (`idDetail`) REFERENCES `detailprogress` (`idDetail`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tranprogresssertification` */

LOCK TABLES `tranprogresssertification` WRITE;

insert  into `tranprogresssertification`(`idTranProgress`,`state`,`idDetail`,`idProgressHistory`) values (1,1,1,5),(2,1,2,5),(3,1,24,5),(4,1,28,5),(5,1,29,5),(6,1,30,5),(7,1,31,5),(8,1,32,5);

UNLOCK TABLES;

/*Table structure for table `transertificationhistory` */

DROP TABLE IF EXISTS `transertificationhistory`;

CREATE TABLE `transertificationhistory` (
  `idSertificationHistory` int(11) NOT NULL AUTO_INCREMENT,
  `SertificationPart` varchar(255) DEFAULT NULL,
  `studyPart` varchar(255) DEFAULT NULL,
  `RegistrationNumber` varchar(255) DEFAULT NULL,
  `PtpsNumber` varchar(255) DEFAULT NULL,
  `idLecturer` int(11) NOT NULL,
  `idTranFile` int(11) NOT NULL,
  PRIMARY KEY (`idSertificationHistory`),
  KEY `FK_46lpu8wx3gw2sj3j39c41gpb6` (`idLecturer`),
  KEY `FK_adaxnusjx9qhfjcixp2jmnkad` (`idTranFile`),
  CONSTRAINT `FK_adaxnusjx9qhfjcixp2jmnkad` FOREIGN KEY (`idTranFile`) REFERENCES `tranfile` (`idTranFile`),
  CONSTRAINT `FK_transertificationhistorylecturer` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `transertificationhistory` */

LOCK TABLES `transertificationhistory` WRITE;

insert  into `transertificationhistory`(`idSertificationHistory`,`SertificationPart`,`studyPart`,`RegistrationNumber`,`PtpsNumber`,`idLecturer`,`idTranFile`) values (1,'Sertifikasi Dosen','Manajemen','28198291','74373493849',16,10),(2,'Sertifikasi Dosen','Informatika','28198291','7437349',16,11);

UNLOCK TABLES;

/*Table structure for table `transtudyhistory` */

DROP TABLE IF EXISTS `transtudyhistory`;

CREATE TABLE `transtudyhistory` (
  `idStudyHistory` int(11) NOT NULL AUTO_INCREMENT,
  `nameUniversity` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `joinYear` int(11) DEFAULT NULL,
  `studyProgram` varchar(255) DEFAULT NULL,
  `graduateYear` int(11) DEFAULT NULL,
  `idLecturer` int(11) NOT NULL,
  `idStudy` int(11) NOT NULL,
  `idTranFile` int(11) NOT NULL,
  PRIMARY KEY (`idStudyHistory`),
  KEY `FK_itbjic19amu9ayiyygr8nwbma` (`idLecturer`),
  KEY `FK_1hk1bj0rrcr23fl0a39x274x2` (`idStudy`),
  KEY `FK_t39f3bcbpmo7m0qemfx0rqy8v` (`idTranFile`),
  CONSTRAINT `FK_1hk1bj0rrcr23fl0a39x274x2` FOREIGN KEY (`idStudy`) REFERENCES `masterstudy` (`idStudy`),
  CONSTRAINT `FK_t39f3bcbpmo7m0qemfx0rqy8v` FOREIGN KEY (`idTranFile`) REFERENCES `tranfile` (`idTranFile`),
  CONSTRAINT `FK_transtudyhistorylecturer` FOREIGN KEY (`idLecturer`) REFERENCES `masterlecturer` (`idLecturer`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `transtudyhistory` */

LOCK TABLES `transtudyhistory` WRITE;

insert  into `transtudyhistory`(`idStudyHistory`,`nameUniversity`,`degree`,`joinYear`,`studyProgram`,`graduateYear`,`idLecturer`,`idStudy`,`idTranFile`) values (1,'Universitas Nasional Pasim','S. Kom',2010,'Teknik Informatika',2013,1,1,5),(2,'STMIK Likmi','M. Kom',2013,'Sistem Informasi',2015,1,2,5),(3,'Universitas Nasional Pasim','S. Kom',2005,'Teknik Informatika',2008,2,1,5),(4,'STMIK Likmi','M. Kom',2013,'Sistem Informasi',2016,2,2,5),(5,'Universitas Nasional Pasim','S. Kom',2002,'Teknik Informatika',2005,3,1,5),(6,'Institut Teknologi Bandung','M.T',2014,'Sistem Informasi',2017,3,2,5),(7,'Universitas Kristen Maranatha','S.T',1998,'Teknik Elektro',2002,4,1,5),(8,'Institut Teknologi Bandung','M.T',2002,'Teknik Elektro',2004,4,2,5),(9,'Sedang Studi Lanjut (S3 STEI ITB)',NULL,2017,'Elektro dan Informatika',NULL,4,3,5),(10,'Institut Teknologi Bandung','S.Si',2000,'Matematika',2004,5,1,5),(11,'STMIK Likmi','M.Kom',2004,'Sistem Informasi',2006,5,2,5),(12,'Universitas Jenderal Ahmad Yani','S.T',2006,'Teknik Mesin',2010,6,1,5),(13,'Institut Teknologi Bandung ','M.T',2010,'Teknik Mesin',2013,6,2,5),(14,'Institut Teknologi Bandung','Ir',1990,'Geofisika',1994,7,1,5),(15,'(Sedang Studi Lanjut) STMIK LIKMI',NULL,2016,'Sistem Informasi',NULL,7,2,5),(16,'STAI Siliwangi Bandung','S.Pd',2005,'Bahasa Inggris',2008,8,1,5),(17,'Pasca Sarjana UIN SGD Bandng','M.Ag',2008,'PAI',2011,8,2,5),(18,'Politeknik Bandung','S.T',2001,'Teknik Informatika',2004,9,1,5),(19,'Institut Teknologi Bandung','M.T',2005,'Teknik Informatika',2008,9,2,5),(20,'Universitas Indonesia','S.Kom',2007,'Teknik Informatika',2011,10,1,5),(21,'STIMIK LIKMI','M. Kom',2012,'Sistem Informasi',2015,10,2,5),(22,'Universitas Komputer','S.T',2010,'Teknik Informatika',2014,11,1,5),(23,'(Sedang Studi Lanjut) ITB',NULL,2017,'Teknik Elektro',NULL,11,2,5),(24,'Universitas Padjajaran','S.E',1998,'Akuntansi',2001,12,1,5),(25,'Universitas Padjajaran','M.Si',2003,'Akuntansi',2006,12,2,5),(26,'Universitas Padjajaran','S.Pd',1996,'Bahasa Indonesia',2000,13,1,5),(27,'(Sedang Studi Lanjut) Universitas Padjajaran',NULL,2017,'Sastra Indonesia',NULL,13,2,5),(28,'Universitas Padjajaran','S.Pd',2004,'Bahasa Inggris',2008,14,1,5),(29,'Universitas Padjajaran','M.hum',2009,'Sastra Inggris',2012,14,2,5),(30,'Politeknik Bandung','S.T',2005,'Teknik Informatika',2009,15,1,5),(31,'Institut Teknologi Bandung','M.T',2010,'Teknik Informatika',2014,15,2,5),(32,'Universitas Widiyatama','S.Kom',2009,'Teknik Informatika',2013,16,1,5),(34,'Universitas Padjajaran','M.Kom',2013,'Teknik Komputer',2016,16,2,5);

UNLOCK TABLES;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

LOCK TABLES `user` WRITE;

insert  into `user`(`idUser`,`username`,`password`) values (1,'admin','admin'),(2,'admin1','satu'),(3,'admin2','dua');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
