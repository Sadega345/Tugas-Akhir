/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.16 : Database - db_borangakreditasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_borangakreditasi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_borangakreditasi`;

/*Table structure for table `aksesbilitas_data` */

DROP TABLE IF EXISTS `aksesbilitas_data`;

CREATE TABLE `aksesbilitas_data` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `kd_jns` int(2) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `manual` varchar(1) DEFAULT NULL,
  `komp_tnp_jar` varchar(1) DEFAULT NULL,
  `lan` varchar(1) DEFAULT NULL,
  `wan` varchar(1) DEFAULT NULL,
  `jenis_data` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_aksesbilitas_data` (`kd_jns`),
  KEY `FK_aksesbilitas_prodi` (`kd_prodi`),
  CONSTRAINT `FK_aksesbilitas_data` FOREIGN KEY (`kd_jns`) REFERENCES `jns_data` (`kd_jns`),
  CONSTRAINT `FK_aksesbilitas_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `aksesbilitas_data` */

LOCK TABLES `aksesbilitas_data` WRITE;

insert  into `aksesbilitas_data`(`id`,`kd_jns`,`kd_prodi`,`manual`,`komp_tnp_jar`,`lan`,`wan`,`jenis_data`) values (1,1,'P001',NULL,NULL,'v','v','Mahasiswa'),(2,2,'P001',NULL,'v',NULL,'v','Kartu Rencana Studi (KRS)'),(3,3,'P001','v',NULL,NULL,NULL,'Jadwal Mata Kuliah'),(4,4,'P001',NULL,'v',NULL,NULL,'Nilai Mata Kuliah'),(5,5,'P001','v','v','v','v','Transkrip Akademik'),(6,6,'P001',NULL,NULL,NULL,'v','Lulusan'),(7,7,'P001',NULL,NULL,NULL,'v','Dosen'),(8,8,'P001',NULL,NULL,NULL,'v','Pegawai'),(9,9,'P001',NULL,NULL,NULL,'v','Keuangan'),(10,10,'P001',NULL,NULL,NULL,'v','Inventaris'),(11,11,'P001',NULL,NULL,NULL,'v','Perpustakaan'),(12,1,'P002','v','v','v','v','Mahasiswa'),(13,2,'P002','v',NULL,NULL,'v','Kartu Rencana Studi (KRS)'),(14,3,'P002','v',NULL,NULL,NULL,'Jadwal Mata Kuliah'),(15,4,'P002',NULL,'v',NULL,NULL,'Nilai Mata Kuliah'),(16,5,'P002','v','v','v','v','Transkip Akademik'),(17,6,'P002',NULL,NULL,NULL,'v','Lulusan'),(18,7,'P002','v','v',NULL,'v','Dosen'),(19,8,'P002',NULL,NULL,NULL,'v','Pegawai'),(20,9,'P002',NULL,NULL,NULL,'v','Keuangan'),(21,10,'P002',NULL,NULL,NULL,'v','Inventaris'),(22,11,'P002',NULL,NULL,NULL,'v','Perpustakaan'),(24,12,'P001','v','v','v','v','Pembayaran SPP'),(25,12,'P002','v','v','v','v','Pembayaran SPP');

UNLOCK TABLES;

/*Table structure for table `aktivitas_dosen` */

DROP TABLE IF EXISTS `aktivitas_dosen`;

CREATE TABLE `aktivitas_dosen` (
  `id_dosen` int(6) DEFAULT NULL,
  `sks_pss` int(3) DEFAULT NULL,
  `sks_psl_pts` int(3) DEFAULT NULL,
  `sks_ptl` int(3) DEFAULT NULL,
  `sks_penelitian` int(3) DEFAULT NULL,
  `sks_pp_mas` int(3) DEFAULT NULL,
  `sks_man_pts` int(3) DEFAULT NULL,
  `sks_man_ptl` int(3) DEFAULT NULL,
  `id` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `FK_aktivitas_dosen` (`id_dosen`),
  CONSTRAINT `FK_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen_tbl` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `aktivitas_dosen` */

LOCK TABLES `aktivitas_dosen` WRITE;

insert  into `aktivitas_dosen`(`id_dosen`,`sks_pss`,`sks_psl_pts`,`sks_ptl`,`sks_penelitian`,`sks_pp_mas`,`sks_man_pts`,`sks_man_ptl`,`id`) values (1,3,0,0,1,1,6,0,1),(2,9,1,4,1,1,4,0,2),(9,6,2,0,1,1,4,0,3),(10,8,1,4,1,1,6,0,4),(11,1,4,0,0,0,0,0,5);

UNLOCK TABLES;

/*Table structure for table `aktivitas_mengajar` */

DROP TABLE IF EXISTS `aktivitas_mengajar`;

CREATE TABLE `aktivitas_mengajar` (
  `id_dosen` int(6) DEFAULT NULL,
  `bid_keahlian` varchar(50) DEFAULT NULL,
  `kode_mk` varchar(8) DEFAULT NULL,
  `nama_mk` varchar(100) DEFAULT NULL,
  `jum_kls` int(3) NOT NULL,
  `jml_sks` int(4) DEFAULT NULL,
  `jp_rencana` int(3) DEFAULT NULL,
  `jp_dilaksanakan` int(3) DEFAULT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `FK_aktivitas_mengajar` (`id_dosen`),
  CONSTRAINT `FK_dosen_mengajar` FOREIGN KEY (`id_dosen`) REFERENCES `dosen_tbl` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `aktivitas_mengajar` */

LOCK TABLES `aktivitas_mengajar` WRITE;

insert  into `aktivitas_mengajar`(`id_dosen`,`bid_keahlian`,`kode_mk`,`nama_mk`,`jum_kls`,`jml_sks`,`jp_rencana`,`jp_dilaksanakan`,`id`) values (1,'Analisis dan Perancangan','MIMKL24','Rekayasa Perangkat Lunak',0,16,18,1,7),(2,'Pemrograman Web dan Networking','MIMKL14','Pemrograman Internet I (WEB)',0,16,16,2,8),(6,'Analisis dan Design','MIMKB01','APSI',1,16,10,14,10),(8,'PAI','MIMKD02','Pendidikan Agama',1,1,16,16,12),(16,'Matematika','MIMKD04','Statistika II',1,16,16,10,14),(10,'Pemrograman Java dan Mobile','MIMKL31','Etika Profesi',1,16,16,14,15),(11,'Komputer Grafis dan Sistem Operasi','MIMKL01','Aplikasi Pemrograman (Komputer Grafis)',1,16,16,14,16),(14,'Bidang Keahlian A','MIMK001','Mata Kuliah A',1,16,16,16,17),(15,'Bidang Keahlian B','MIMK003','Mata Kuliah B',1,16,16,12,18),(9,'AA','MKPL','ASD',3,NULL,1,1,21),(16,NULL,'MKPL','ASD',0,18,17,17,27),(7,'Analisis Sistem','MKPPL','APSIT',0,3,16,15,29),(5,'Animasi','MKP012','Animasi',0,3,16,16,35),(7,'Sistem','MKKS09','SIM',0,3,16,15,36),(13,'Bahasa Indonesia','MKB02','Sastra',0,3,16,16,37);

UNLOCK TABLES;

/*Table structure for table `artikel_ilmiah` */

DROP TABLE IF EXISTS `artikel_ilmiah`;

CREATE TABLE `artikel_ilmiah` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) DEFAULT NULL,
  `judul` text,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `publikasi` varchar(1000) DEFAULT NULL,
  `thn_publikasi` int(4) DEFAULT NULL,
  `lokal` char(1) DEFAULT NULL,
  `nasional` char(1) DEFAULT NULL,
  `internasional` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_artikel_prodi` (`kd_prodi`),
  CONSTRAINT `FK_artikel_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `artikel_ilmiah` */

LOCK TABLES `artikel_ilmiah` WRITE;

insert  into `artikel_ilmiah`(`id`,`kd_prodi`,`judul`,`nama_dosen`,`publikasi`,`thn_publikasi`,`lokal`,`nasional`,`internasional`) values (1,'P001','Pembangunan Sistem Informasi Konsumsi Tunas Raharja di MAN 1 Cirebon','Nur Achadi, Selly Meliana','Jurnal Ilmu Komputer Vol. 6 No. 1',2015,'v',NULL,NULL),(2,'P001','Pembangunan Aplikasi Bursa Kerja Khusus di SMK Negeri 1 Kota Sukabumi berbasis Web','Sriwisnu','Jurnal Ilmu Komputer Vol. 6 No. 1',2015,NULL,'v',NULL),(3,'P001','Pembangunan Aplikasi Informasi Pajak Bumi dan Bangunan Berbasis Android dan Google Cloud Messanginges di Desa','Yudhistira','Jurnal Ilmu Komputer Vol. 6 No. 1',2015,'','v',''),(4,'P001','Pembangunan Aplikasi E-Learning SMA Negeri 1 Ciranjang','Eko Travada, Erna Hikmawati','Jurnal Ilmu Komputer Vol. 6 No. 1',2015,'v',NULL,NULL),(5,'P001','Pembangunan Aplikasi Profil Pahlawan Nasional Indonesia Berbasis Android dan Google Map','Soleh Sabarudin, Eni Triningsih','Jurnal Ilmu Komputer Vol. 6 No. 1',2015,'v',NULL,NULL),(6,'P002','Implementasi Algoritma Minimum Edit Distance dalam Pembangunan Aplikasi Pendeteksi Plagiarisme Dokumen Bahasa Indonesia ','Nur Achadi','Jurnal Ilmu Komputer\r\nVol. 7 No. 1',2016,'v',NULL,NULL),(7,'P002','Pembangunan Aplikasi Simulasi Antrian ATM dengan Menggunakan Metode Monte Carlo pada PT. Hitachi-Omron Terminal Solutions ','Eko Travada, Selly Meliana','Jurnal Ilmu Komputer\r\nVol. 8 No. 1',2017,'v',NULL,NULL),(9,'P002','Karya Tulis Ilmiah','Prabowo','Jurnal Ilmu Komputer Vol. 8 No. 1',2011,'v',NULL,NULL),(10,'P002','Karya Tulis Ilmiah 2','Lutfi Amalia','Jurnal Ilmu Komputer Vol. 8 No. 1',2018,NULL,'v',NULL);

UNLOCK TABLES;

/*Table structure for table `dana_penelitian` */

DROP TABLE IF EXISTS `dana_penelitian`;

CREATE TABLE `dana_penelitian` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) NOT NULL,
  `jns_dana` int(2) DEFAULT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `judul_penelitian` varchar(1000) DEFAULT NULL,
  `jml_dana` double(2,1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_prodi_dana` (`kd_prodi`),
  KEY `FK_dana_sumber` (`jns_dana`),
  CONSTRAINT `FK_dana_sumber` FOREIGN KEY (`jns_dana`) REFERENCES `sumber_dana` (`id_dana`),
  CONSTRAINT `FK_prodi_dana` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `dana_penelitian` */

LOCK TABLES `dana_penelitian` WRITE;

insert  into `dana_penelitian`(`id`,`kd_prodi`,`jns_dana`,`sumber_dana`,`tahun`,`judul_penelitian`,`jml_dana`) values (1,'P001',1,'Pemeritah',2014,'Pembangunan Aplikasi Bursa Kerja Khusus di SMK Negeri 1 Kota Sukabumi berbasis Web',9.5),(2,'P001',4,'PT. Pasim Sentra Utama',2014,'Pembangunan Aplikasi Informasi Pajak Bumi dan Bangunan Berbasis Android dan Google Cloud Messanginges di Desa',4.5),(3,'P001',1,'PS Sendiri',2014,'Pembangunan Aplikasi E-Learning SMA Negeri 1 Ciranjang',6.0),(4,'P001',4,'PT. Pasim Sentra Utama',2015,'Pembangunan Aplikasi Profil Pahlawan Nasional Indonesia Berbasis Android dan Google Map',6.5),(5,'P001',4,'PT. Stafalindo',2015,'Sistem Informasi Wisata Berbasis Android dan GIS Studi Kasus Pulau Biawak Indramayu',7.3),(6,'P002',4,'PT Pasim Sentra Utama',2013,'Implementasi Algoritma Minimum Edit Distance dalam Pembangunan Aplikasi Pendeteksi Plagiarisme Dokumen Bahasa Indonesia ',5.3),(7,'P002',4,'PT Rajawali',2014,'Sistem Pendukung Keputusan Penerimaan Mahasiswa Beasiswa dengan Metode AHP dan TOPSIS',8.0),(8,'P002',1,'PS Sendiri',2015,'Sistem Pendukung Keputusan Seleksi Beasiswa dengan Metode SAW (Simple Additive Weighting) Berbasis Web (Studi Kasus di SMA Negeri 1 Ciranjang)',4.2),(9,'P002',2,'PT Pasim Utama',2014,'Pembangunan Aplikasi Bursa Kerja Khusus di SMK Negeri 1 Kota Sukabumi berbasis Web',3.0),(10,'P002',1,'PT Sendiri',2018,'Pembangunan Aplikasi Pengolahan Format Data Borang Akreditasi A',9.0),(11,'P002',1,'PT Sendiri',2016,'Pembangunan Aplikasi Repository Dosen',0.0);

UNLOCK TABLES;

/*Table structure for table `dana_pengmas` */

DROP TABLE IF EXISTS `dana_pengmas`;

CREATE TABLE `dana_pengmas` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) NOT NULL,
  `jns_dana` int(2) DEFAULT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `judul_kegiatan` varchar(1000) DEFAULT NULL,
  `jumlah_dana` double(10,1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dana_pengmas` (`jns_dana`),
  KEY `FK_prodi_pengmas` (`kd_prodi`),
  CONSTRAINT `FK_dana` FOREIGN KEY (`jns_dana`) REFERENCES `sumber_dana` (`id_dana`),
  CONSTRAINT `FK_prodi_pengmas` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `dana_pengmas` */

LOCK TABLES `dana_pengmas` WRITE;

insert  into `dana_pengmas`(`id`,`kd_prodi`,`jns_dana`,`sumber_dana`,`tahun`,`judul_kegiatan`,`jumlah_dana`) values (1,'P001',4,'PT. Pasim Sentra Utama',2014,'Pelatihan Penggunaan Microsoft Word pada Ibu-Ibu PKK Desa Cileunyi Wetan',10.0),(2,'P001',4,'PT. Pasim Sentra Utama',2014,'Pelatihan Penggunaan Microsoft Word pada Ibu-Ibu PKK Desa Cileunyi Wetan',6.0),(3,'P001',3,'Dinas Koprasi dan UKM Kab. Bandung Barat',2014,'Peningkatan Efektivitas Pembuatan Surat dengan Menggunakan Microsoft Word Pada Ibu-Ibu PKK Desa Cileunyi Kulon',8.0),(4,'P001',4,'PT. Valanino',2015,'Peningkatan Efektivitas Pembuatan Surat dengan Menggunakan Microsoft Word Pada Ibu-Ibu PKK Desa Cileunyi Kulon ',6.1),(5,'P001',4,'PT. Valanino',2015,'Peningkatan Efektivitas Pembuatan Surat dengan Menggunakan Microsoft Word Pada Ibu-Ibu PKK Desa Cileunyi Kulon',6.2),(6,'P002',4,'Ares Co.Ltd',2015,'Implementasi Sistem Informasi Pencatatan Data Keuangan Untuk Pengembangan Koperasi Giri Waluya',6.3),(7,'P002',3,'PT. Pasim Sentra Utama',2016,'Penerapan Sistem Informasi Akuntansi dalam Kegiatan Operasional pada \r\nKoperasi Pilar Jaya',8.4),(8,'P001',3,'PT Pasim Utama',2017,'Workshop Mahasiswa',5.6),(9,'P002',3,'PT Pasim Utama',2014,'Seminar Tugas Akhir',0.0);

UNLOCK TABLES;

/*Table structure for table `dana_tridarma` */

DROP TABLE IF EXISTS `dana_tridarma`;

CREATE TABLE `dana_tridarma` (
  `kd_prodi` varchar(6) DEFAULT NULL,
  `ts_2` decimal(11,2) DEFAULT NULL,
  `ts_1` decimal(11,2) DEFAULT NULL,
  `ts` decimal(11,2) DEFAULT NULL,
  `nm_program_std` varchar(100) DEFAULT NULL,
  `id` varchar(1) DEFAULT NULL,
  KEY `FK_dana_tridarma` (`kd_prodi`),
  CONSTRAINT `FK_dana_tridarma` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dana_tridarma` */

LOCK TABLES `dana_tridarma` WRITE;

insert  into `dana_tridarma`(`kd_prodi`,`ts_2`,`ts_1`,`ts`,`nm_program_std`,`id`) values ('P001','3398266.00','4567329.00','3036371.00','Manajemen Informartika','1'),('P002','12900000.00','2399000.00','12400000.00','Teknik Informatika','2');

UNLOCK TABLES;

/*Table structure for table `data_mhs` */

DROP TABLE IF EXISTS `data_mhs`;

CREATE TABLE `data_mhs` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(6) NOT NULL,
  `id_ts` int(4) DEFAULT NULL,
  `kd_prog` int(2) DEFAULT NULL,
  `dy_tampung` int(5) DEFAULT NULL,
  `jc_mhs_ikt_seleksi` int(5) DEFAULT NULL,
  `jc_mhs_lls_seleksi` int(5) DEFAULT NULL,
  `j_maba_reg_bkn_trf` int(5) DEFAULT NULL,
  `j_maba_nonreg` int(6) NOT NULL,
  `j_maba_trf` int(5) DEFAULT NULL,
  `j_tot_reg_bkn_trf` int(5) DEFAULT NULL,
  `j_tot_nonreg` int(6) NOT NULL,
  `j_tot_trf` int(5) DEFAULT NULL,
  `j_llsn_reg_bkn_trf` int(5) DEFAULT NULL,
  `j_llsn_trf` int(5) DEFAULT NULL,
  `ipk_min` double(10,2) DEFAULT NULL,
  `ipk_rat` double(10,2) DEFAULT NULL,
  `ipk_mak` double(10,2) DEFAULT NULL,
  `prsn_ipk1` double(10,2) DEFAULT NULL,
  `prsn_ipk2` double(10,2) DEFAULT NULL,
  `prsn_ipk3` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_dt_mhs_reg` (`id_ts`),
  KEY `FK_data_mhs` (`kd_prog`),
  KEY `FK_prd` (`id_prodi`),
  CONSTRAINT `FK_data_mhs` FOREIGN KEY (`kd_prog`) REFERENCES `jns_program` (`kd_prog`),
  CONSTRAINT `FK_prd` FOREIGN KEY (`id_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`),
  CONSTRAINT `FK_ts` FOREIGN KEY (`id_ts`) REFERENCES `tahun_akd` (`id_ts`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `data_mhs` */

LOCK TABLES `data_mhs` WRITE;

insert  into `data_mhs`(`id`,`id_prodi`,`id_ts`,`kd_prog`,`dy_tampung`,`jc_mhs_ikt_seleksi`,`jc_mhs_lls_seleksi`,`j_maba_reg_bkn_trf`,`j_maba_nonreg`,`j_maba_trf`,`j_tot_reg_bkn_trf`,`j_tot_nonreg`,`j_tot_trf`,`j_llsn_reg_bkn_trf`,`j_llsn_trf`,`ipk_min`,`ipk_rat`,`ipk_mak`,`prsn_ipk1`,`prsn_ipk2`,`prsn_ipk3`) values (1,'P001',1,1,58,1159,46,45,0,0,192,0,0,33,0,2.81,3.44,3.78,0.00,39.00,61.00),(2,'P001',2,1,65,2800,65,62,0,0,221,0,0,25,0,3.11,3.54,3.95,0.00,32.00,68.00),(3,'P001',3,1,65,992,45,43,0,0,201,0,0,37,0,3.13,3.71,3.91,0.00,6.00,94.00),(4,'P001',4,1,65,1014,40,39,0,0,139,0,0,41,0,3.46,3.64,3.87,0.00,5.00,95.00),(5,'P001',5,1,65,1016,60,NULL,0,0,65,0,0,41,0,2.96,3.57,3.85,0.00,24.00,76.00),(6,'P002',1,1,60,204,50,45,0,0,88,0,0,40,0,3.00,3.45,3.78,0.00,35.00,60.00),(7,'P002',2,1,65,120,60,56,0,0,85,0,0,34,0,2.78,3.20,3.88,0.00,20.00,64.00),(8,'P002',3,1,65,132,58,54,0,0,78,0,0,40,0,3.01,3.40,3.80,0.00,23.00,56.00),(9,'P002',4,1,65,111,45,43,0,0,72,0,0,45,0,2.78,3.32,3.76,0.00,18.00,48.00),(10,'P002',5,1,65,134,60,54,0,NULL,NULL,0,0,50,0,2.86,3.34,3.87,0.00,30.00,78.00),(11,'P002',1,2,55,NULL,43,0,40,0,0,40,0,0,0,0.00,0.00,0.00,0.00,0.00,0.00),(12,'P002',2,2,55,105,51,0,48,0,0,48,0,0,0,0.00,0.00,0.00,0.00,0.00,0.00),(13,'P002',3,2,55,98,50,0,50,0,0,50,0,0,0,0.00,0.00,0.00,0.00,0.00,0.00),(14,'P002',4,2,55,102,57,0,48,0,0,48,0,0,0,0.00,0.00,0.00,0.00,0.00,0.00),(15,'P002',5,2,55,105,46,0,46,0,0,45,0,0,0,0.00,0.00,0.00,0.00,0.00,0.00);

UNLOCK TABLES;

/*Table structure for table `data_mhs_angkatan` */

DROP TABLE IF EXISTS `data_mhs_angkatan`;

CREATE TABLE `data_mhs_angkatan` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(6) DEFAULT NULL,
  `id_ts` int(4) DEFAULT NULL,
  `ts_6` int(6) DEFAULT NULL,
  `ts_5` int(6) DEFAULT NULL,
  `ts_4` int(6) DEFAULT NULL,
  `ts_3` int(6) DEFAULT NULL,
  `ts_2` int(6) DEFAULT NULL,
  `ts_1` int(6) DEFAULT NULL,
  `ts` int(6) DEFAULT NULL,
  `jml_ts_llsan` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_data_mhs_angkatan` (`id_prodi`),
  KEY `FK_tahun` (`id_ts`),
  CONSTRAINT `FK_data_mhs_angkatan` FOREIGN KEY (`id_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`),
  CONSTRAINT `FK_tahun` FOREIGN KEY (`id_ts`) REFERENCES `tahun_akd` (`id_ts`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `data_mhs_angkatan` */

LOCK TABLES `data_mhs_angkatan` WRITE;

insert  into `data_mhs_angkatan`(`id`,`id_prodi`,`id_ts`,`ts_6`,`ts_5`,`ts_4`,`ts_3`,`ts_2`,`ts_1`,`ts`,`jml_ts_llsan`) values (1,'P001',1,NULL,NULL,45,42,42,4,4,38),(2,'P001',2,NULL,NULL,NULL,62,61,61,0,41),(3,'P001',3,NULL,NULL,NULL,NULL,43,41,37,37),(4,'P001',4,NULL,NULL,0,0,0,39,38,0),(5,'P001',5,NULL,NULL,0,0,0,0,51,0),(6,'P002',1,45,40,40,38,38,7,7,34),(7,'P002',2,NULL,52,52,51,48,43,43,43),(8,'P002',3,NULL,NULL,38,37,37,37,37,37),(9,'P002',4,NULL,NULL,NULL,35,35,35,35,35),(10,'P002',5,NULL,NULL,NULL,NULL,32,32,32,32),(11,'P002',6,NULL,NULL,NULL,NULL,NULL,32,32,0),(12,'P002',7,NULL,NULL,NULL,NULL,NULL,NULL,32,0);

UNLOCK TABLES;

/*Table structure for table `dosen_tbl` */

DROP TABLE IF EXISTS `dosen_tbl`;

CREATE TABLE `dosen_tbl` (
  `id_dosen` int(6) NOT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `nidn` varchar(10) DEFAULT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `kd_jab` varchar(4) DEFAULT NULL,
  `kd_jns_dosen` int(1) DEFAULT NULL,
  `sertifikasi` varchar(10) NOT NULL,
  `gelar_s1` varchar(20) DEFAULT NULL,
  `asal_pt_s1` varchar(50) DEFAULT NULL,
  `bid_keahlian_s1` varchar(30) DEFAULT NULL,
  `gelar_s2` varchar(20) DEFAULT NULL,
  `asal_pt_s2` varchar(50) DEFAULT NULL,
  `bid_keahlian_s2` varchar(30) DEFAULT NULL,
  `gelar_s3` varchar(20) DEFAULT NULL,
  `asal_pt_s3` varchar(50) DEFAULT NULL,
  `bid_keahlian_s3` varchar(30) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `pengakuan` varchar(100) DEFAULT NULL,
  `bid_keahlian` varchar(100) DEFAULT NULL,
  `sts_ahli` enum('YA','TIDAK','','') NOT NULL,
  PRIMARY KEY (`id_dosen`),
  KEY `FK_jns` (`kd_jns_dosen`),
  KEY `FK_jab` (`kd_jab`),
  KEY `FK_prodi_dosen` (`kd_prodi`),
  CONSTRAINT `FK_dosen_jab` FOREIGN KEY (`kd_jab`) REFERENCES `jab_akademik` (`kd_jab`),
  CONSTRAINT `FK_dosen_jns` FOREIGN KEY (`kd_jns_dosen`) REFERENCES `jns_dosen` (`kd_jns`),
  CONSTRAINT `FK_dosen_tbl` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `dosen_tbl` */

LOCK TABLES `dosen_tbl` WRITE;

insert  into `dosen_tbl`(`id_dosen`,`kd_prodi`,`nidn`,`nama_dosen`,`tgl_lhr`,`kd_jab`,`kd_jns_dosen`,`sertifikasi`,`gelar_s1`,`asal_pt_s1`,`bid_keahlian_s1`,`gelar_s2`,`asal_pt_s2`,`bid_keahlian_s2`,`gelar_s3`,`asal_pt_s3`,`bid_keahlian_s3`,`gelar`,`pengakuan`,`bid_keahlian`,`sts_ahli`) values (1,'P001','0421089201','Erna Hikmawati','1992-08-21','3',1,'Tidak','S. Kom','Universitas Nasional Pasim','Teknik Informatika','M. Kom','STMIK Likmi','Sistem Informasi','','','','','','','YA'),(2,'P001','0408097207','Soleh Sabarudin','1972-09-08',NULL,1,'Tidak','S. Kom','Universitas Nasional Pasim','Teknik Informatika','M. Kom','STMIK Likmi','Sistem Informasi',NULL,NULL,NULL,' ','Sololearn\r\n','HTML, PHP\r\n','YA'),(3,'P001','8863350017','Eni Triningsih','1989-09-24',NULL,1,'Tidak','S. Kom','Universitas Nasional Pasim','Teknik Informatika','Institut Teknologi B','Institut Teknologi Bandung','Sistem Informasi',NULL,NULL,NULL,' ','Sololearn\r\n','SQL','YA'),(4,'P001','0408047305','Eko Travada SP','1973-01-23','1',1,'Ya','S.T','Universitas Kristen Maranatha','Teknik Elektro','M.T','Institut Teknologi Bandung','Teknik Elektro','','Sedang Studi Lanjut (S3 STEI ITB)','Elektro dan Informatika',' ',' ',' ','YA'),(5,'P001','8891700016','Yudhistira Sulaeman','1973-07-03',NULL,1,'Tidak','S.Si','Institut Teknologi Bandung','Matematika','M. Kom','STMIK Likmi','Sistem Informasi',NULL,NULL,NULL,' ',' ',' ','YA'),(6,'P001','0428097402','Lucky Handayani','1974-09-28',NULL,1,'Tidak','S.T','Universitas Jenderal Ahmad Yani','Teknik Mesin','M.T','Institut Teknologi Bandung ','Teknik Mesin',NULL,NULL,NULL,' ',' ',' ','TIDAK'),(7,'P001','0418106603','Tjandra Tjahyarini','1966-10-18','2',1,'Tidak','Ir','Institut Teknologi Bandung','Geofisika','','(Sedang Studi Lanjut) STMIK LIKMI','Sistem Informasi',NULL,NULL,NULL,' ',' ',' ','TIDAK'),(8,'P001','8836400016','Juhridin','1962-10-14',NULL,2,'Tidak','S.Pd','STAI Siliwangi Bandung','Bahasa Inggris','M.Ag','Pasca Sarjana UIN SGD Bandng','PAI',NULL,NULL,NULL,' ',' ',' ','TIDAK'),(9,'P002','0423036904','Sri Wisnu Noloadi\r\n','0000-00-00',NULL,1,'Tidak','S.T','Politeknik Bandung','Teknik Informatika','M.T','Institut Teknologi Bandung','Teknik Informatika',NULL,NULL,NULL,' ',' ',' ','YA'),(10,'P002','0404107803','Selly Meliana\r\n','1978-10-04',NULL,1,'Tidak','S. Kom','Universitas Indonesia','Teknik Informatika','M. Kom','STMIK Likmi','Sistem Informasi',NULL,NULL,NULL,' ',' ',' ','YA'),(11,'P002','0402057602','Lismah Azriani\r\n','1976-05-02',NULL,1,'Tidak','S.T','Universitas Komputer','Teknik Informatika','','(Sedang Studi Lanjut) ITB','Teknik Elektro',NULL,NULL,NULL,' ',' ',' ','YA'),(12,'P002','0402067001','Abdul Hafiz Tanjung\r\n','1970-06-02',NULL,1,'Tidak','S.E','Universitas padjajaran','Akuntansi','M.Si','Universitas Padjajaran','Akuntansi',NULL,NULL,NULL,' ',' ',' ','TIDAK'),(13,'P002','0427056601','Dewi Saparina\r\n','1955-05-27',NULL,1,'Tidak','S.Pd','Universitas Padjajaran','Bahasa Indonesia','','(Sedang Studi Lanjut) Universitas Padjajaran','Sastra Indonesia',NULL,NULL,NULL,' ',' ',' ','TIDAK'),(14,'P002','0428106907','Fristi Arfiawati\r\n','1976-02-20',NULL,2,'Tidak','S.Pd','Universitas Padjajaran','Bahasa Inggris','M.hum','Universitas Padjajaran','Sastra Inggris',NULL,NULL,NULL,' ',' ',' ','TIDAK'),(15,'P002','8829740017','Sarip Topik Hidayat\r\n','1976-02-20',NULL,2,'Tidak','S.T','Politeknik Bandung','Teknik Informatika','M.T','Institut Teknologi Bandung','Teknik Informatika',NULL,NULL,NULL,' ','','','YA'),(16,'P002','0417127101','Nurachadi','1992-08-21','3',1,'Tidak','S. Kom','Universitas Nasional Pasim','Teknik Informatika','M. Kom','STMIK Likmi','Sistem Informasi','','','','','','','YA'),(17,'P001','121323','Frida Nurhidayati','2018-07-13',NULL,2,'TIDAK','S.kom','Unas Pasim','','','','','','','','','','','YA');

UNLOCK TABLES;

/*Table structure for table `dt_ruang_dosen` */

DROP TABLE IF EXISTS `dt_ruang_dosen`;

CREATE TABLE `dt_ruang_dosen` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_jns` int(2) DEFAULT NULL,
  `kd_prodi` varchar(6) DEFAULT NULL,
  `jml_ruang` int(3) DEFAULT NULL,
  `jml_luas` int(3) DEFAULT NULL,
  `r_kerja_dosen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_jns_ruang` (`id_jns`),
  CONSTRAINT `FK_jns_ruang` FOREIGN KEY (`id_jns`) REFERENCES `jns_ruang` (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `dt_ruang_dosen` */

LOCK TABLES `dt_ruang_dosen` WRITE;

insert  into `dt_ruang_dosen`(`id`,`id_jns`,`kd_prodi`,`jml_ruang`,`jml_luas`,`r_kerja_dosen`) values (1,1,'P001',4,600,'Satu ruang untuk lebih dari 4 dosen'),(2,2,'P001',0,0,'Satu ruang untuk 3-4 dosen'),(3,3,'P001',0,0,'Satu ruang untuk 2 dosen'),(4,4,'P001',16,64,'Satu ruang untuk 1 dosen (bukan pejabat struktural)'),(5,1,'P002',3,500,'Satu ruang untuk lebih dari 4 dosen'),(6,2,'P002',0,0,'Satu ruang untuk 3-4 dosen'),(7,3,'P002',0,0,'Satu ruang untuk 2 dosen'),(8,4,'P002',16,54,'Satu ruang untuk 1 dosen (bukan pejabat struktural)');

UNLOCK TABLES;

/*Table structure for table `evaluasi_lulusan` */

DROP TABLE IF EXISTS `evaluasi_lulusan`;

CREATE TABLE `evaluasi_lulusan` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_prodi` varchar(6) NOT NULL,
  `id_kemampuan` int(4) DEFAULT NULL,
  `sangat_baik` double(10,2) DEFAULT NULL,
  `baik` double(10,2) DEFAULT NULL,
  `cukup` double(10,2) DEFAULT NULL,
  `kurang` double(10,2) DEFAULT NULL,
  `rencana` tinytext,
  `jenis_kemampuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_evaluasi_lulusan` (`id_kemampuan`),
  KEY `FK_prodi_lulusan` (`id_prodi`),
  CONSTRAINT `FK_evaluasi_lulusan` FOREIGN KEY (`id_kemampuan`) REFERENCES `jns_kemampuan` (`id`),
  CONSTRAINT `FK_prodi_lulusan` FOREIGN KEY (`id_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `evaluasi_lulusan` */

LOCK TABLES `evaluasi_lulusan` WRITE;

insert  into `evaluasi_lulusan`(`id`,`id_prodi`,`id_kemampuan`,`sangat_baik`,`baik`,`cukup`,`kurang`,`rencana`,`jenis_kemampuan`) values (1,'P001',1,84.77,15.24,1.00,1.00,'Memberikan muatan etika dan moral pada materi kurikulum program studi (mata kuliah etika profesi),\r\nmenyelenggarakan kegiatan pembinaan oleh koordinator beasiswa PUB,\r\nmenyelenggaraakan mentoring setiap minggunya','Integritas (etika dan moral)'),(2,'P001',2,91.43,8.57,8.00,8.00,'Mengadakan bootcamp (pelatihan) untuk persiapan dunia kerja ','Keahlian berdasarkan bidang ilmu (profesionalisme)'),(3,'P001',3,66.67,17.14,16.19,0.00,'Mnyelenggarakan mata kuliah TOEFL, Mengadakan kegiatan English club, Mengadakan pelatihan public speaking, Mengadakan kegiatan pelatihan bahasa inggris yang bekerja sama dengan program studi D3 Bahasa Inggris','Bahasa Inggris'),(4,'P001',4,85.71,14.29,0.00,0.00,'Penyediaan sarana laboratorium komputer yang memadai, Mendorong dosen untuk memanfaatkan teknologi informasi dalam proses pembelajaran, Penggunaan aplikasi IT untuk layanan mahasiswa (digital campus)','Penggunaan Teknologi Informasi'),(5,'P001',5,80.95,12.38,6.67,0.00,'Mengadakan pelatihan public speaking, Memperbanyak tugas pembuatan laporan ilmiah (untuk meningkatkan kemampuan komunikasi tertulis), Memperbanyak presentasi/diskusi dalam kelas (untuk meningkatkan kemampuan komunikasi secara lisan)','Komunikasi'),(6,'P001',6,79.05,11.43,9.52,0.00,'Memperbanyak pemberian tugas yang harus dikerjakan dan dipresentasikan secara kelompok, Mengadakan kegiatan Latihan Dasar Kepemimpinan Mahasiswa (LDKM)','Kerjasama Tim'),(7,'P001',7,91.43,8.57,0.00,0.00,'Mengikutsertakan mahasiswa dalam berbagai kegiatan UKM dan kepengurusan PUB sehingga dapat mengembangkan potensi yang dimiliki oleh mahasiswa tersebut','Pengembangan Diri'),(8,'P002',1,85.00,15.00,0.00,0.00,'Menyelenggaraakan mentoring setiap minggu','Integritas (etika dan moral)'),(9,'P002',2,72.00,26.00,12.00,0.00,'Mengadakan pelatihan yang berkaitan dengan pemrograman','Keahlian berdasarkan bidang ilmu (profesionalisme)'),(10,'P002',3,88.00,12.00,0.00,0.00,'Mengadakan kegiatan pelatihan bahasa inggris yang bekerja sama dengan program studi D3 Bahasa Inggris','Bahasa Inggris'),(11,'P002',4,90.00,10.00,0.00,0.00,'penggunaan aplikasi IT untuk layanan mahasiswa (digital campus)','Penggunaan Teknologi Informasi'),(12,'P002',5,83.50,16.50,0.00,0.00,'Memperbanyak presentasi/diskusi dalam kelas (untuk meningkatkan kemampuan komunikasi secara lisan)','Komunikasi'),(13,'P002',6,60.00,20.00,20.00,0.00,'Mengadakan kegiatan Latihan Dasar Kepemimpinan Mahasiswa (LDKM)','Kerjasama Tim'),(14,'P002',7,72.15,20.85,0.00,0.00,'Mengikutsertakan mahasiswa dalam berbagai kegiatan UKM dan kepengurusan PUB sehingga dapat mengembangkan potensi yang dimiliki oleh mahasiswa tersebut.','Pengembangan Diri');

UNLOCK TABLES;

/*Table structure for table `fakultas_tbl` */

DROP TABLE IF EXISTS `fakultas_tbl`;

CREATE TABLE `fakultas_tbl` (
  `kode_fakultas` varchar(6) NOT NULL,
  `nama_fakultas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fakultas_tbl` */

LOCK TABLES `fakultas_tbl` WRITE;

insert  into `fakultas_tbl`(`kode_fakultas`,`nama_fakultas`) values ('F001','Ilmu Komputer'),('F002','Ekonomi'),('F003','Psikologi'),('F004','Pendidikan');

UNLOCK TABLES;

/*Table structure for table `hak_intelektual` */

DROP TABLE IF EXISTS `hak_intelektual`;

CREATE TABLE `hak_intelektual` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) NOT NULL,
  `karya` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `hak_intelektual` */

LOCK TABLES `hak_intelektual` WRITE;

insert  into `hak_intelektual`(`id`,`kd_prodi`,`karya`) values (1,'P002','Karya Hak Kekayaan Intelektual A'),(2,'P002','Karya Hak Imtelektual 2'),(3,'P002','Karya Hak Intelektual'),(4,'P002','Hak Atas Dasar Kekayaan Intelektual');

UNLOCK TABLES;

/*Table structure for table `instansi_lulusan` */

DROP TABLE IF EXISTS `instansi_lulusan`;

CREATE TABLE `instansi_lulusan` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_ts` int(4) DEFAULT NULL,
  `instansi` varchar(50) DEFAULT NULL,
  `j_lulusan_psn` int(3) DEFAULT NULL,
  `j_lulusan_terima` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_instansi_lulusan` (`id_ts`),
  CONSTRAINT `FK_instansi_lulusan` FOREIGN KEY (`id_ts`) REFERENCES `data_mhs` (`id`),
  CONSTRAINT `FK_instansi_lulusan_ts` FOREIGN KEY (`id_ts`) REFERENCES `tahun_akd` (`id_ts`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `instansi_lulusan` */

LOCK TABLES `instansi_lulusan` WRITE;

insert  into `instansi_lulusan`(`id`,`id_ts`,`instansi`,`j_lulusan_psn`,`j_lulusan_terima`) values (1,1,'PT. Pasim Sentra Utama',10,10),(2,1,'CV. Zharfan Dwi Putra Utama',3,2),(3,2,'PT. Pasim Sentra Utama',5,4),(4,2,'CV. Zharfan Dwi Putra',2,1),(5,2,'PT. Sonitacitra Buanamandiri',3,3),(6,3,'PT. Pasim Sentra Utama',5,3),(7,3,'PT. Duta Berlian Nusantara',2,2),(8,3,'PT. Kalysa Intijaya Sakti',3,2),(9,3,'PT. Sonitacitra Buanamandiri',3,3),(10,4,'PT. Pasim Sentra Utama',8,8),(11,4,'PT. PUB Pasim Putra',3,3),(12,4,'PT. Kalysa Intijaya Sakti',3,3),(13,4,'PT. Stafalindo Menara Nusantara',2,2),(14,4,'PT. Virginindo Utama Karya',2,1),(15,5,'PT. Pasim Sentra Utama',5,4),(16,5,'PT. Valanino Rajawali Perkasa',5,4),(17,5,'PT. Duta Berlian Nusantara',4,4),(18,5,'PT. Kalysa Intijaya Sakti',2,2),(19,5,'PT. Sonitacitra Buanamandiri',4,3),(20,5,'Yayasan Robo Pasim Global Internusa',3,3),(21,3,'PT. Pasim Sentra Utama',2,1);

UNLOCK TABLES;

/*Table structure for table `instrumen` */

DROP TABLE IF EXISTS `instrumen`;

CREATE TABLE `instrumen` (
  `id` varchar(4) NOT NULL,
  `instrumen` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `instrumen` */

LOCK TABLES `instrumen` WRITE;

insert  into `instrumen`(`id`,`instrumen`,`file`) values ('I001','Excel 2','evaluasi_lulusan.xlsx'),('I002','APD','apd.xlsx'),('I003','APS','aps1.xlsx');

UNLOCK TABLES;

/*Table structure for table `jab_akademik` */

DROP TABLE IF EXISTS `jab_akademik`;

CREATE TABLE `jab_akademik` (
  `kd_jab` varchar(4) NOT NULL,
  `nm_jab_akd` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jab`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jab_akademik` */

LOCK TABLES `jab_akademik` WRITE;

insert  into `jab_akademik`(`kd_jab`,`nm_jab_akd`) values ('1','Lektor'),('2','Asisten Ahli'),('3','Tidak Ada');

UNLOCK TABLES;

/*Table structure for table `jenis_prodi` */

DROP TABLE IF EXISTS `jenis_prodi`;

CREATE TABLE `jenis_prodi` (
  `id_jns` int(3) NOT NULL,
  `jenis_prodi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jns`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenis_prodi` */

LOCK TABLES `jenis_prodi` WRITE;

insert  into `jenis_prodi`(`id_jns`,`jenis_prodi`) values (1,'Sosial'),(2,'Eksakta');

UNLOCK TABLES;

/*Table structure for table `jns_dana` */

DROP TABLE IF EXISTS `jns_dana`;

CREATE TABLE `jns_dana` (
  `kd_jns` int(3) NOT NULL AUTO_INCREMENT,
  `sumber_dana` int(2) DEFAULT NULL,
  `jns_dana` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`),
  KEY `FK_jns_dana` (`sumber_dana`),
  CONSTRAINT `FK_jns_dana` FOREIGN KEY (`sumber_dana`) REFERENCES `sumber_dana` (`id_dana`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `jns_dana` */

LOCK TABLES `jns_dana` WRITE;

insert  into `jns_dana`(`kd_jns`,`sumber_dana`,`jns_dana`) values (1,1,'Beasiswa Yayasan'),(2,1,'Hibah Yayasan'),(3,1,'Hibah Unit Usaha '),(4,2,'Pendaftaran'),(5,2,'Biaya Registrasi'),(6,2,'Biaya Kuliah'),(7,4,'Biaya Kuliah'),(8,4,'Hibah Penelitian'),(9,4,'Hibah Pengabdian');

UNLOCK TABLES;

/*Table structure for table `jns_data` */

DROP TABLE IF EXISTS `jns_data`;

CREATE TABLE `jns_data` (
  `kd_jns` int(2) NOT NULL AUTO_INCREMENT,
  `jns_data` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `jns_data` */

LOCK TABLES `jns_data` WRITE;

insert  into `jns_data`(`kd_jns`,`jns_data`) values (1,'Mahasiswa'),(2,'Kartu Rencana Studi (KRS)'),(3,'Jadwal Mata Kuliah'),(4,'Nilai Mata Kuliah'),(5,'Transkrip Akademik'),(6,'Lulusan'),(7,'Dosen'),(8,'Pegawai'),(9,'Keuangan'),(10,'Inventaris'),(11,'Perpustakaan'),(12,'Pembayaran SPP');

UNLOCK TABLES;

/*Table structure for table `jns_dosen` */

DROP TABLE IF EXISTS `jns_dosen`;

CREATE TABLE `jns_dosen` (
  `kd_jns` int(1) NOT NULL DEFAULT '0',
  `jns_dosen` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jns_dosen` */

LOCK TABLES `jns_dosen` WRITE;

insert  into `jns_dosen`(`kd_jns`,`jns_dosen`) values (1,'TETAP'),(2,'TIDAK TETAP'),(3,'PENSIUN/BERHENTI');

UNLOCK TABLES;

/*Table structure for table `jns_hal` */

DROP TABLE IF EXISTS `jns_hal`;

CREATE TABLE `jns_hal` (
  `kd_hal` int(3) NOT NULL AUTO_INCREMENT,
  `jenis` enum('JABFUNG','DIKTI','','') NOT NULL,
  `hal` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`kd_hal`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `jns_hal` */

LOCK TABLES `jns_hal` WRITE;

insert  into `jns_hal`(`kd_hal`,`jenis`,`hal`) values (1,'JABFUNG','Asisten Ahli'),(2,'JABFUNG','Lektor'),(3,'JABFUNG','Lektor Kepala'),(4,'JABFUNG','Guru Besar/Profesor'),(5,'DIKTI','S1'),(6,'DIKTI','S2/Profesi/Sp-1'),(7,'DIKTI','S3/Sp-2'),(8,'','Pensiun');

UNLOCK TABLES;

/*Table structure for table `jns_jurnal` */

DROP TABLE IF EXISTS `jns_jurnal`;

CREATE TABLE `jns_jurnal` (
  `kd_jns` int(2) NOT NULL AUTO_INCREMENT,
  `jns_jurnal` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jns_jurnal` */

LOCK TABLES `jns_jurnal` WRITE;

insert  into `jns_jurnal`(`kd_jns`,`jns_jurnal`) values (1,'Jurnal Terakreditasi DIKTI '),(2,'Jurnal Internasional');

UNLOCK TABLES;

/*Table structure for table `jns_kemampuan` */

DROP TABLE IF EXISTS `jns_kemampuan`;

CREATE TABLE `jns_kemampuan` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `jns_kemampuan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `jns_kemampuan` */

LOCK TABLES `jns_kemampuan` WRITE;

insert  into `jns_kemampuan`(`id`,`jns_kemampuan`) values (1,'Integritas (etika dan moral)'),(2,'Keahlian berdasarkan bidang il'),(3,'Bahasa Inggris'),(4,'Penggunaan Teknologi Informasi'),(5,'Komunikasi'),(6,'Kerjasama Tim'),(7,'Pengembangan Diri');

UNLOCK TABLES;

/*Table structure for table `jns_matkul` */

DROP TABLE IF EXISTS `jns_matkul`;

CREATE TABLE `jns_matkul` (
  `kd_jns` int(1) NOT NULL AUTO_INCREMENT,
  `jns_matkul` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jns_matkul` */

LOCK TABLES `jns_matkul` WRITE;

insert  into `jns_matkul`(`kd_jns`,`jns_matkul`) values (1,'WAJIB'),(2,'PILIHAN');

UNLOCK TABLES;

/*Table structure for table `jns_mhs` */

DROP TABLE IF EXISTS `jns_mhs`;

CREATE TABLE `jns_mhs` (
  `kd_jns` int(2) NOT NULL AUTO_INCREMENT,
  `jns_mhs` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jns_mhs` */

LOCK TABLES `jns_mhs` WRITE;

UNLOCK TABLES;

/*Table structure for table `jns_penggunaan` */

DROP TABLE IF EXISTS `jns_penggunaan`;

CREATE TABLE `jns_penggunaan` (
  `kd_jns` int(2) NOT NULL AUTO_INCREMENT,
  `status_dana` enum('OPR','INV','','') NOT NULL,
  `jns_penggunaan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `jns_penggunaan` */

LOCK TABLES `jns_penggunaan` WRITE;

insert  into `jns_penggunaan`(`kd_jns`,`status_dana`,`jns_penggunaan`) values (1,'OPR','Pendidikan'),(2,'OPR','Penelitian'),(3,'OPR','Pengabdian kepada Masyarakat'),(4,'INV','Investasi Prasarana'),(5,'INV','Investasi Sarana'),(6,'INV','Investasi SDM'),(7,'INV','Lain-Lain');

UNLOCK TABLES;

/*Table structure for table `jns_program` */

DROP TABLE IF EXISTS `jns_program`;

CREATE TABLE `jns_program` (
  `kd_prog` int(2) NOT NULL AUTO_INCREMENT,
  `jns_program` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_prog`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jns_program` */

LOCK TABLES `jns_program` WRITE;

insert  into `jns_program`(`kd_prog`,`jns_program`) values (1,'REGULER'),(2,'NON REGULER');

UNLOCK TABLES;

/*Table structure for table `jns_pustaka` */

DROP TABLE IF EXISTS `jns_pustaka`;

CREATE TABLE `jns_pustaka` (
  `kd_jns` int(3) NOT NULL AUTO_INCREMENT,
  `jns_pustaka` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `jns_pustaka` */

LOCK TABLES `jns_pustaka` WRITE;

insert  into `jns_pustaka`(`kd_jns`,`jns_pustaka`) values (1,'Buku Teks dan handbook'),(2,'Modul Praktikum / Praktek'),(3,'Jurnal yang terakreditasi oleh lembaga resmi (Dikt'),(4,'Jurnal Internasional (termasuk e-journal)'),(5,'Majalah Ilmiah'),(6,'Prosiding'),(7,'Skripsi'),(8,'Tesis'),(9,'Disertasi');

UNLOCK TABLES;

/*Table structure for table `jns_ruang` */

DROP TABLE IF EXISTS `jns_ruang`;

CREATE TABLE `jns_ruang` (
  `kd_jns` int(2) NOT NULL AUTO_INCREMENT,
  `ruang_dosen` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `jns_ruang` */

LOCK TABLES `jns_ruang` WRITE;

insert  into `jns_ruang`(`kd_jns`,`ruang_dosen`) values (1,'Satu ruang untuk leb'),(2,'Satu ruang untuk 3-4'),(3,'Satu ruang untuk 2 d'),(4,'Satu ruang untuk 1 d');

UNLOCK TABLES;

/*Table structure for table `jns_tng_kepend` */

DROP TABLE IF EXISTS `jns_tng_kepend`;

CREATE TABLE `jns_tng_kepend` (
  `kd_jns` int(3) NOT NULL AUTO_INCREMENT,
  `jns_tng_kepend` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `jns_tng_kepend` */

LOCK TABLES `jns_tng_kepend` WRITE;

insert  into `jns_tng_kepend`(`kd_jns`,`jns_tng_kepend`) values (1,'Pustakawan'),(2,'Laboran/ Teknisi/ Analis/ Operator/ Programer'),(3,'Administrasi'),(4,'Lainnya');

UNLOCK TABLES;

/*Table structure for table `jumlah_sks_ps` */

DROP TABLE IF EXISTS `jumlah_sks_ps`;

CREATE TABLE `jumlah_sks_ps` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_ps` varchar(6) DEFAULT NULL,
  `jns_matkul` int(1) DEFAULT NULL,
  `sks` int(3) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_jumlah_sks_ps` (`id_ps`),
  KEY `FK_jumlah` (`jns_matkul`),
  CONSTRAINT `FK_jumlah` FOREIGN KEY (`jns_matkul`) REFERENCES `jns_matkul` (`kd_jns`),
  CONSTRAINT `FK_jumlah_sks_ps` FOREIGN KEY (`id_ps`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jumlah_sks_ps` */

LOCK TABLES `jumlah_sks_ps` WRITE;

insert  into `jumlah_sks_ps`(`id`,`id_ps`,`jns_matkul`,`sks`,`keterangan`) values (1,'P002',1,16,''),(2,'P002',2,16,NULL);

UNLOCK TABLES;

/*Table structure for table `jurnal` */

DROP TABLE IF EXISTS `jurnal`;

CREATE TABLE `jurnal` (
  `Id` int(6) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) NOT NULL,
  `kd_jns` int(2) DEFAULT NULL,
  `nm_jurnal` varchar(50) DEFAULT NULL,
  `rincian` varchar(50) DEFAULT NULL,
  `jml` int(4) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_jurnal` (`kd_jns`),
  CONSTRAINT `FK_jurnal` FOREIGN KEY (`kd_jns`) REFERENCES `jns_jurnal` (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `jurnal` */

LOCK TABLES `jurnal` WRITE;

insert  into `jurnal`(`Id`,`kd_prodi`,`kd_jns`,`nm_jurnal`,`rincian`,`jml`) values (1,'P002',1,'Jurnal A','2006/IV/12',1),(2,'P002',1,'Jurnal B','2014/IX/123',4),(3,'P002',2,'Jurnal C','2009/8A/00121',1);

UNLOCK TABLES;

/*Table structure for table `kegiatan_ahli` */

DROP TABLE IF EXISTS `kegiatan_ahli`;

CREATE TABLE `kegiatan_ahli` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) NOT NULL,
  `nama_pakar` varchar(50) DEFAULT NULL,
  `instansi` varchar(50) DEFAULT NULL,
  `judul_keg` varchar(100) DEFAULT NULL,
  `pelaksanaan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan_ahli` */

LOCK TABLES `kegiatan_ahli` WRITE;

insert  into `kegiatan_ahli`(`id`,`kd_prodi`,`nama_pakar`,`instansi`,`judul_keg`,`pelaksanaan`) values (1,'P001','Teguh Prabowo','ARES, Co.Ltd','Workshop Visual Basic .Net','18 Desember 2014'),(2,'P001','Park Young Sun','DUDU IT','Seminar Simulation Logic for Electronic Warfare','14 Januari 2015'),(3,'P001','Park Young Sun','DUDU IT','Wargame Trainning Concept','21 April 2015'),(4,'P001','Park Young Sun','DUDU IT','Seminar DEVS-based Modelling and Simulation','11 Mei 2015'),(5,'P001','Kwon Young Choi','ARES, Co.Ltd','Workshop How to Make 3D Object Models','28 Oktober 2015'),(6,'P001','Kwon Young Choi','ARES, Co.Ltd','Workshop Computer Graphics','3 Oktober 2015'),(7,'P001','Ismail Syah',NULL,'Menyongsong Kurikulum Berbasis KKNI','Mei 2016'),(8,'P001','Nurul Hiron','Universitas Siliwangi','Penyusunan Proposal Penelitian','Februari 2016'),(9,'P001','Kwon Young Choi','ARES, Co.Ltd','Seminar 3D Visualization with VR-Vantage','5 Oktober 2016'),(10,'P001','Park Young Sun','DUDU IT','Seminar Management Information System','2 November 2016'),(11,'P001','Joe Lian Min','Politeknik Negeri Bandung','Workshop Angular JS','7 Desember 2016'),(12,'P001','Park Young Sun','DUDU IT','Seminar Cyber Security','17 Januari 2017'),(13,'P001','Rida Hudaya','Workshop Robotic','Workshop Robotic','9 Februari 2017'),(14,'P002','Pakar A','Instansi AS','Seminar perkembangan Teknologi','12 januari 2014'),(15,'P002','Pakar B','Instansi B','Workshop B','4 Maret 2015'),(16,'P002','Pakar C','Instansi C','Seminar C','9 Juli 2015'),(17,'P002','Pakar D','Instansi D','Seminar D','10 April 2016'),(18,'P002','Pakar E ','Instansi E','Workshop E','13 Desember 2016'),(19,'P002','Ahli F','Instansi F','Seminar F','15 Oktober 2016');

UNLOCK TABLES;

/*Table structure for table `kegiatan_dsn_ttp` */

DROP TABLE IF EXISTS `kegiatan_dsn_ttp`;

CREATE TABLE `kegiatan_dsn_ttp` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_dosen` varchar(6) DEFAULT NULL,
  `jenis_kegiatan` varchar(1000) DEFAULT NULL,
  `tempat` varchar(500) DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `sbg_penyaji` varchar(1) DEFAULT NULL,
  `sbg_peserta` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_kegiatan_dsn_ttp` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan_dsn_ttp` */

LOCK TABLES `kegiatan_dsn_ttp` WRITE;

insert  into `kegiatan_dsn_ttp`(`id`,`id_dosen`,`jenis_kegiatan`,`tempat`,`tahun`,`sbg_penyaji`,`sbg_peserta`) values (1,'1','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kab. Bandung Barat','2015','v',NULL),(6,'1','Implementasi Sistem Informasi Pencatatan Data Keuanga Untuk Pengembang Koperasi Giri Waluya','Kec. Sindang Kerta Kab. Bandung Barat','2015','v',NULL),(7,'1','Seminar Simulation Logic for Electronic ','Universitas Nasional Pasim','2015',NULL,'v'),(8,'1','Wargame Trainning Concept','Universitas Nasional Pasim','2015',NULL,'v'),(10,'1','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(11,'1','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(14,'1','Pelatihan Pembuatan Surat dengan Mnggunakan Microsoft Word Pada Ibu-Ibu PKK Desa Cimekar','Kec. Cileunyi, Kab.Bandung','2015','v',NULL),(16,'1','Pelatihan Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(17,'1','Workshop Wargame Knowledge and Animation','Universitas Nasional Pasim','2016',NULL,'v'),(18,'1','Penerapan Sistem Informasi Akuntansi Dalam Kegiatan Operasional Pada Koperasi Pilar Jaya','Kec. Sindang Kerta Kab. Bandung Barat','2016','v',NULL),(20,'1','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(21,'1','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(22,'1','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(23,'1','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(24,'1','Pelatihan Pengolahan Data dengan Menggunakan Microsoft Excel Pada Ibu-Ibu PKK Desa Cimekar','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(25,'1','Peningkatan Kemampuan Pembuatan Surat  Ibu-Ibu PKK Desa Cinunuk','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(27,'1','Penerapan Microsoft Excel dalam Kegiatan Pengolahan Data pada ','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(28,'1','Peningkatan Kemampuan Akuntansi Koperasi Wening Rahayu Berbasis Sistem Informasi','Kec. Sindang Kerta Kab. Bandung Barat','2017','v',NULL),(29,'1','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(30,'1','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(31,'1',' Pelatihan Penggunaan Microsoft Word Untuk Peningkatan Efektivitas Pembuatan Surat Pada Ibu-Ibu PKK ','Kec. Cileunyi, Kab.Bandung','2017','v',NULL),(32,'1','Pelatihan Penggunaan Microsoft Excel Untuk Peningkatan Evektifitas Pengolahan Data pada Ibu-Ibu PKK ','Kec. Cileunyi, Kab.Bandung','2017','v',NULL),(33,'2','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(34,'2','Seminar Simulation Logic for Electronic ','Universitas Nasional Pasim','2015',NULL,'v'),(35,'2','Wargame Trainning Concept','Universitas Nasional Pasim','2015',NULL,'v'),(36,'2','Seminar DEVS-based Modelling and Simulation','Universitas Nasional Pasim','2015',NULL,'v'),(37,'2','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(38,'2','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(40,'2','Kegiatan Peningkatan Kemampuan Pengolahan Data Ibu-Ibu PKK Desa Cinunuk dengan Menggunakan Microsoft','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(41,'2','Menyongsong Kurikulum Berbasis KKNI','Universitas Nasional Pasim','2016',NULL,'v'),(42,'2','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(43,'2','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(44,'2','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(45,'2','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(46,'2',' Pelatihan Penggunaan Microsoft Word Untuk Peningkatan Efektivitas Pembuatan Surat Pada Ibu-Ibu PKK ','Kec. Cileunyi, Kab.Bandung','2017','v',NULL),(47,'2','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(48,'2','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(50,'4','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(51,'4','Pelatihan Pembuatan Surat dengan Mnggunakan Microsoft Word Pada Ibu-Ibu PKK Desa Cimekar','Kec. Cileunyi, Kab.Bandung','2015','v',NULL),(52,'4','Seminar Simulation Logic for Electronic Warfare','Universitas Nasional Pasim','2015',NULL,'v'),(53,'4','Wargame Trainning Concept','Universitas Nasional Pasim','2015',NULL,'v'),(54,'4','Seminar DEVS-based Modelling and Simulation','Universitas Nasional Pasim','2015',NULL,'v'),(55,'4','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(56,'4','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(57,'4','Menyongsong Kurikulum Berbasis KKNI','Universitas Nasional Pasim','2016',NULL,'v'),(58,'4','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(59,'4','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(60,'4','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(61,'4','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(62,'4','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(63,'4','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(64,'3','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(65,'3','Peningkatan Efektivitas Pengolahan Data dengan Menggunakan Microsoft Excel Pada Ibu-Ibu PKK Desa Cil',NULL,NULL,NULL,NULL),(66,'3','Seminar Simulation Logic for Electronic Warfare','Universitas Nasional Pasim','2015',NULL,'v'),(68,'3','Seminar DEVS-based Modelling and Simulation','Universitas Nasional Pasim','2015',NULL,'v'),(69,'3','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(70,'3','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(71,'3','Peningkatan Kemampuan Pengolahan Data Ibu-Ibu PKK Desa Cinunuk dengan Menggunakan Microsoft Excel','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(72,'3','Penerapan Microsoft Word dalam Kegiatan Pembuatan Surat pada Ibu-Ibu PKK Desa Cibiru Wetan','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(73,'3','Pelatihan Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(74,'3','Workshop Wargame Knowledge and Animation','Universitas Nasional Pasim','2016',NULL,'v'),(75,'3','Smart City For Advancing Society','Surabaya','2016',NULL,'v'),(76,'3','International Conference On Ict For Smart Society','Surabaya','2016',NULL,'v'),(77,'3','Menyongsong Kurikulum Berbasis KKNI','Universitas Nasional Pasim','2016',NULL,'v'),(78,'3','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(79,'3','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(80,'3','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(81,'3','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(82,'3','Certified Information Systems Security Professional (CISSP)','Jakarta','2017',NULL,'v'),(83,'3','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(84,'3','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(85,'5','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(87,'5','Radar Fundamentals','Bandung','2015',NULL,'v'),(89,'5','Seminar Simulation Logic for Electronic Warfare','Universitas Nasional Pasim','2015',NULL,'v'),(90,'5','Wargame Trainning Concept','Universitas Nasional Pasim','2015',NULL,'v'),(91,'5','Seminar DEVS-based Modelling and Simulation','Universitas Nasional Pasim','2015',NULL,'v'),(92,'5','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(93,'5','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(94,'5','Peningkatan Kemampuan Pengolahan Data Ibu-Ibu PKK Desa Cinunuk dengan Menggunakan Microsoft Excel','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(95,'5','Workshop Wargame Knowledge and Animation','Universitas Nasional Pasim','2016',NULL,'v'),(96,'5','Workshop Sosialisasi Pengembangan Software','PT. Pasim Sentra Utama','2016','v',NULL),(97,'5','Pelatihan Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(98,'5','Having Duly Satisfied the C705 Missile Pratical Training and Having Fulfilled All Other Requirements','China','2016',NULL,'v'),(99,'5','Military Avionics and Main Data Bus Interface Training','Boulogne-Billancourt','2016',NULL,'v'),(100,'5','Menyongsong Kurikulum Berbasis KKNI','Universitas Nasional Pasim','2016',NULL,'v'),(101,'5','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(102,'5','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(103,'5','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(104,'5','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(105,'5','Peningkatan Kemampuan Akuntansi Koperasi Wening Rahayu Berbasis Sistem Informasi ','Kec. Sindang Kerta Kab. Bandung Barat','2017','v',NULL),(106,'5','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(107,'5','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(108,'6','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(110,'6','Seminar Simulation Logic for Electronic Warfare','Universitas Nasional Pasim','2015',NULL,'v'),(111,'6','Wargame Trainning Concept','Universitas Nasional Pasim','2015',NULL,'v'),(112,'6','Seminar DEVS-based Modelling and Simulation','Universitas Nasional Pasim','2015',NULL,'v'),(113,'6','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(114,'6','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(115,'6','Penerapan Microsoft Excel dalam Kegiatan Pengolahan Data pada ','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(116,'6','Pelatihan Pengolahan Data dengan Menggunakan Microsoft Excel Pada Ibu-Ibu PKK Desa Cimekar','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(117,'6','Pelatihan Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(118,'6','Workshop Wargame Knowledge and Animation','Universitas Nasional Pasim','2016',NULL,'v'),(119,'6','Menyongsong Kurikulum Berbasis KKNI','Universitas Nasional Pasim','2016',NULL,'v'),(120,'6','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(121,'6','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(122,'6','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(123,'6','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(124,'6','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(125,'6','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(126,'7','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(127,'7','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(128,'7','Seminar Simulation Logic for Electronic Warfare','Universitas Nasional Pasim','2015',NULL,'v'),(129,'7','Wargame Trainning Concept','Universitas Nasional Pasim','2015',NULL,'v'),(130,'7','Seminar DEVS-based Modelling and Simulation','Universitas Nasional Pasim','2015',NULL,'v'),(131,'7','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(132,'7','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(133,'7','Workshop Wargame Knowledge and Animation','Universitas Nasional Pasim','2016',NULL,'v'),(134,'7','Pelatihan Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(135,'7','Menyongsong Kurikulum Berbasis KKNI','Universitas Nasional Pasim','2016',NULL,'v'),(136,'7','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(137,'7','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(138,'7','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(139,'7','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(140,'7','Peningkatan Kemampuan Pembuatan Surat  Ibu-Ibu PKK Desa Cinunuk','Kec. Cileunyi, Kab.Bandung','2016','v',''),(141,'7','Pelatihan Penggunaan Microsoft Excel Untuk Peningkatan Evektifitas Pengolahan Data pada Ibu-Ibu PKK ',NULL,NULL,NULL,NULL),(142,'7','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(143,'7','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(144,'8','Peningkatan Kemampuan Kapasitas Manajemen Keuangan Koperasi Tunas Harapan Berbasis Aplikasi Komputer','Kec. Sindang Kerta Kab. Bandung Barat','2014','v','v'),(145,'8','Penggunaan Sistem Informasi Akuntansi Pada Koperasi Bako Wangun','Kec. Sindang Kerta Kab. Bandung Barat','2015','v',NULL),(146,'8','Seminar Simulation Logic for Electronic Warfare','Universitas Nasional Pasim','2015',NULL,'v'),(147,'8','Wargame Trainning Concept','Universitas Nasional Pasim','2015',NULL,'v'),(148,'8','Seminar DEVS-based Modelling and Simulation','Universitas Nasional Pasim','2015',NULL,'v'),(149,'8','Workshop How to Make 3D Object Models','Universitas Nasional Pasim','2015',NULL,'v'),(150,'8','Workshop Computer Graphics','Universitas Nasional Pasim','2015',NULL,'v'),(151,'8','Peningkatan Kemampuan Pembuatan Surat Ibu-Ibu PKK Desa Cinunuk dengan Menggunakan Microsoft Word','Kec. Cileunyi, Kab.Bandung','2016','v',NULL),(152,'8','Menyongsong Kurikulum Berbasis KKNI','Universitas Nasional Pasim','2016',NULL,'v'),(153,'8','Penyusunan Proposal Penelitian','Universitas Nasional Pasim','2016',NULL,'v'),(154,'8','Seminar 3D Visualization with VR-Vantage','Universitas Nasional Pasim','2016',NULL,'v'),(155,'8','Seminar Management Information System','Universitas Nasional Pasim','2016',NULL,'v'),(156,'8','Workshop Angular JS','Universitas Nasional Pasim','2016',NULL,'v'),(157,'8','Pelatihan Penggunaan Microsoft Excel Untuk Peningkatan Evektifitas Pengolahan Data pada Ibu-Ibu PKK ','Kec. Cileunyi, Kab.Bandung','2017','v',NULL),(158,'8','Seminar Cyber Security','Universitas Nasional Pasim','2017',NULL,'v'),(159,'8','Workshop Robotic','Universitas Nasional Pasim','2017',NULL,'v'),(164,'13','Kegiatan A','Tempat A','2015','v',NULL),(165,'13','Kegiatan B','Tempat B','2015',NULL,'v'),(166,'14','Workshop C','Tempat c','2014',NULL,'v'),(167,'14','Pelatihan D','Tempat D','2014',NULL,'v'),(168,'15','Kegiatan E','Tempat E','2016','v',NULL),(169,'15','Workshop F','Tempat F','2016','v',NULL),(170,'15','Kegiatan G','Tempat G','2016',NULL,'v'),(171,'16','Seminar H','Tempat h','2017',NULL,'v'),(172,'16','Kegiatan I','Tempat I','2017','v',NULL),(173,'15','/834','universitas Nasional Pasim','2006',NULL,NULL),(175,'7','Mengajar','universitas Nasional Pasim','2015',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `kegiatan_pkm` */

DROP TABLE IF EXISTS `kegiatan_pkm`;

CREATE TABLE `kegiatan_pkm` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_jns` int(2) NOT NULL,
  `kd_prodi` varchar(6) DEFAULT NULL,
  `ts_2` int(3) DEFAULT NULL,
  `ts_1` int(3) DEFAULT NULL,
  `ts` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pkm_prodi` (`kd_prodi`),
  KEY `FK_kegiatan_pkm` (`kd_jns`),
  CONSTRAINT `FK_kegiatan_pkm` FOREIGN KEY (`kd_jns`) REFERENCES `sumber_biaya` (`kd_jns`),
  CONSTRAINT `FK_pkm_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan_pkm` */

LOCK TABLES `kegiatan_pkm` WRITE;

insert  into `kegiatan_pkm`(`id`,`kd_jns`,`kd_prodi`,`ts_2`,`ts_1`,`ts`) values (1,1,'P001',4,10,5),(2,2,'P001',0,0,0),(3,3,'P001',0,0,0),(4,4,'P001',6,6,6),(5,5,'P001',0,0,1),(6,1,'P002',4,10,5),(7,2,'P002',0,0,0),(8,3,'P002',0,0,0),(9,4,'P002',4,2,5),(10,5,'P002',0,0,1),(11,6,'P002',1,0,1),(12,7,'P002',0,0,0);

UNLOCK TABLES;

/*Table structure for table `keikutsertaan_org` */

DROP TABLE IF EXISTS `keikutsertaan_org`;

CREATE TABLE `keikutsertaan_org` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_dosen` int(6) DEFAULT NULL,
  `nm_organisasi` varchar(100) DEFAULT NULL,
  `thn_awal` int(4) DEFAULT NULL,
  `thn_akhir` int(4) DEFAULT NULL,
  `internasional` char(1) DEFAULT NULL,
  `nasional` char(1) DEFAULT NULL,
  `lokal` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_keikutsertaan_org` (`id_dosen`),
  CONSTRAINT `FK_keikutsertaan_org` FOREIGN KEY (`id_dosen`) REFERENCES `dosen_tbl` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `keikutsertaan_org` */

LOCK TABLES `keikutsertaan_org` WRITE;

insert  into `keikutsertaan_org`(`id`,`id_dosen`,`nm_organisasi`,`thn_awal`,`thn_akhir`,`internasional`,`nasional`,`lokal`) values (1,1,'APTIKOM',2017,2018,NULL,NULL,'v'),(2,2,'APTIKOM',2018,2019,NULL,NULL,'v'),(3,3,'APTIKOM',2018,2019,NULL,NULL,'v'),(4,4,'APTIKOM',2018,2019,NULL,NULL,'v'),(5,4,'Ikatan Ahli Informatika Indonesia (IAII)',2016,2018,NULL,'v',NULL),(6,5,'APTIKOM',2018,2019,NULL,NULL,'v'),(7,1,'APTIKOM',2017,2018,NULL,NULL,'v'),(8,9,'APTIKOM',2017,2018,'','v',NULL),(9,10,'APTIKOM',2017,2018,'','',NULL),(10,14,'Ikatan Ahli Informatika Indonesia (IAII)',2018,2019,NULL,NULL,'v'),(11,16,'APTIKOM',2017,2018,'','',NULL);

UNLOCK TABLES;

/*Table structure for table `masastudi_ipk` */

DROP TABLE IF EXISTS `masastudi_ipk`;

CREATE TABLE `masastudi_ipk` (
  `kd_prodi` varchar(6) DEFAULT NULL,
  `rata_masa_std` double(3,1) DEFAULT NULL,
  `rata_ipk` double(3,2) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `id` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_masastudi_ipk` (`kd_prodi`),
  CONSTRAINT `FK_masastudi_ipk` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `masastudi_ipk` */

LOCK TABLES `masastudi_ipk` WRITE;

insert  into `masastudi_ipk`(`kd_prodi`,`rata_masa_std`,`rata_ipk`,`keterangan`,`id`) values ('P001',3.2,3.59,'Sangat Bagus','1'),('P002',4.0,3.45,NULL,'2');

UNLOCK TABLES;

/*Table structure for table `mhs_reg_nonreg` */

DROP TABLE IF EXISTS `mhs_reg_nonreg`;

CREATE TABLE `mhs_reg_nonreg` (
  `kd_prog` int(2) DEFAULT NULL,
  `kd_mhs` int(2) DEFAULT NULL,
  `total_mhs` int(4) DEFAULT NULL,
  `kd_prodi` varchar(6) DEFAULT NULL,
  KEY `FK_prog` (`kd_prog`),
  KEY `FK_mhs` (`kd_mhs`),
  KEY `FK_prodi` (`kd_prodi`),
  CONSTRAINT `FK_mhs` FOREIGN KEY (`kd_mhs`) REFERENCES `jns_mhs` (`kd_jns`),
  CONSTRAINT `FK_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`),
  CONSTRAINT `FK_prog` FOREIGN KEY (`kd_prog`) REFERENCES `jns_program` (`kd_prog`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `mhs_reg_nonreg` */

LOCK TABLES `mhs_reg_nonreg` WRITE;

UNLOCK TABLES;

/*Table structure for table `pembimbing_akd` */

DROP TABLE IF EXISTS `pembimbing_akd`;

CREATE TABLE `pembimbing_akd` (
  `Id` int(200) NOT NULL,
  `id_dosen` varchar(6) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `j_mhs_bimbingan` int(3) DEFAULT NULL,
  `rata2_pertemuan` decimal(2,1) DEFAULT NULL,
  KEY `FK_dsn_pembimbing_akd` (`id_dosen`),
  KEY `FK_pembimbing_akd` (`kd_prodi`),
  CONSTRAINT `FK_pembimbing_akd` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pembimbing_akd` */

LOCK TABLES `pembimbing_akd` WRITE;

insert  into `pembimbing_akd`(`Id`,`id_dosen`,`kd_prodi`,`j_mhs_bimbingan`,`rata2_pertemuan`) values (1,'1','P001',51,'4.0'),(2,'2','P001',20,'3.0'),(4,'5','P001',17,'3.0'),(5,'3','P001',17,'3.0'),(1,'9','P002',51,'4.0'),(2,'14','P002',20,'3.0'),(6,'6','P001',19,'3.0'),(7,'5','P001',19,'3.0'),(0,NULL,'P001',0,'0.0'),(0,NULL,'P001',0,'0.0'),(4,NULL,'P002',0,'0.0'),(4,NULL,'P002',0,'0.0'),(0,NULL,'P001',0,'0.0');

UNLOCK TABLES;

/*Table structure for table `pembimbing_skripsi` */

DROP TABLE IF EXISTS `pembimbing_skripsi`;

CREATE TABLE `pembimbing_skripsi` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_dosen` varchar(6) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `jml_mhs` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pembimbing_skripsi` (`id_dosen`),
  KEY `FK_pembimbing_prodi` (`kd_prodi`),
  CONSTRAINT `FK_pembimbing_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `pembimbing_skripsi` */

LOCK TABLES `pembimbing_skripsi` WRITE;

insert  into `pembimbing_skripsi`(`id`,`id_dosen`,`kd_prodi`,`jml_mhs`) values (1,'1','P001',70),(2,'2','P001',5),(3,'4','P001',4),(4,'5','P001',6),(5,'3','P001',6),(6,'9','P002',7),(7,'13','P002',5),(8,'14','P002',8),(10,'1','P001',8),(11,'7','P001',2);

UNLOCK TABLES;

/*Table structure for table `penelitian_dosen` */

DROP TABLE IF EXISTS `penelitian_dosen`;

CREATE TABLE `penelitian_dosen` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `kd_jns` int(2) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `ts_2` int(3) DEFAULT NULL,
  `ts_1` int(3) DEFAULT NULL,
  `ts` int(3) DEFAULT NULL,
  `sumber_pembiayaan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_penelitian_prodi` (`kd_prodi`),
  KEY `FK_penelitian_jns` (`kd_jns`),
  CONSTRAINT `FK_penelitian_jns` FOREIGN KEY (`kd_jns`) REFERENCES `sumber_biaya` (`kd_jns`),
  CONSTRAINT `FK_penelitian_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `penelitian_dosen` */

LOCK TABLES `penelitian_dosen` WRITE;

insert  into `penelitian_dosen`(`id`,`kd_jns`,`kd_prodi`,`ts_2`,`ts_1`,`ts`,`sumber_pembiayaan`) values (1,1,'P001',5,7,5,'Pembiayaan sendiri oleh peneliti		'),(2,2,'P001',4,4,5,'PT yang bersangkutan		\r\n'),(3,3,'P001',0,0,0,'Kemristekdikti		\r\n'),(4,4,'P001',6,5,4,'Institusi dalam negeri di luar Kemristekdikti		\r\n'),(5,5,'P001',0,1,2,'Institusi luar negeri		\r\n'),(6,1,'P002',1,0,0,'Pembiayaan sendiri oleh peneliti'),(7,2,'P002',4,4,5,'PT yang bersangkutan'),(8,3,'P002',0,0,0,'Kemristekdikti'),(9,4,'P002',6,5,4,'Institusi dalam negeri di luar kemristekdikti'),(10,5,'P002',0,2,2,'Institusi luar negeriq');

UNLOCK TABLES;

/*Table structure for table `penggunaan_dana` */

DROP TABLE IF EXISTS `penggunaan_dana`;

CREATE TABLE `penggunaan_dana` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `kd_jns` int(2) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `ts_2` double(10,2) DEFAULT NULL,
  `ts_1` double(10,2) DEFAULT NULL,
  `ts` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_penggunaan_dana` (`kd_jns`),
  KEY `FK_penggunaan_prodi` (`kd_prodi`),
  CONSTRAINT `FK_penggunaan_dana` FOREIGN KEY (`kd_jns`) REFERENCES `jns_penggunaan` (`kd_jns`),
  CONSTRAINT `FK_penggunaan_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `penggunaan_dana` */

LOCK TABLES `penggunaan_dana` WRITE;

insert  into `penggunaan_dana`(`id`,`kd_jns`,`kd_prodi`,`ts_2`,`ts_1`,`ts`) values (1,1,'P001',2398266.46,2466829.16,2920170.73),(2,2,'P001',59800.00,59200.00,65600.00),(3,3,'P001',40200.00,41300.00,50600.00),(4,4,'P001',1969942.68,2114424.99,2503003.49),(5,5,'P001',1313295.12,1409616.66,1668668.99),(6,6,'P001',656647.56,704808.33,834334.49),(7,7,'P001',NULL,NULL,NULL),(8,1,'P002',3000000.00,2300000.00,1500000.00),(9,2,'P002',2500000.00,1240000.00,200000.00),(10,3,'P002',1450000.00,100000.00,234000.00),(11,4,'P002',234000.00,123000.00,500000.00),(12,5,'P002',450000.00,300000.00,231000.00),(13,6,'P002',125000.00,452000.00,1220000.00),(14,7,'P002',452000.00,76000.00,456000.00);

UNLOCK TABLES;

/*Table structure for table `pengisi_borang` */

DROP TABLE IF EXISTS `pengisi_borang`;

CREATE TABLE `pengisi_borang` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(6) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nidn` varchar(10) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `tgl_pengisian` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_prodi` (`kode_prodi`),
  CONSTRAINT `pengisi_borang_ibfk_1` FOREIGN KEY (`kode_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `pengisi_borang` */

LOCK TABLES `pengisi_borang` WRITE;

insert  into `pengisi_borang`(`id`,`kode_prodi`,`nama`,`nidn`,`jabatan`,`tgl_pengisian`) values (1,'P001','Erna Hikmawati, S. Kom., M. Kom','421089201','Ketua Program Studi D3 Manajemen Informatika','2017-09-08'),(2,'P001','Soleh Sabarudin, S. Kom., M. Kom','408097207','Sekretaris Program Studi D3 Manajemen Informatika','2017-09-08'),(3,'P001','Endang Mulyani, SE','122002078','Bagian HRD','2017-09-08'),(4,'P001','Sri Lestari, SPd','122006105','Sekretaris Rektorat','2017-09-08'),(5,'P001','Usman Rachman, Drs., MH','122017210','Ketua LPPM','2017-09-08'),(6,'P001','Abdul Holik. S.Fil.l., M.Si','422108502','Ketua Bidang Riset','2017-09-08'),(7,'P001','Sjamsuridjal, Ir., MM','403015301','Ketua Bidang Pengembangan','2017-09-08'),(8,'P001','H.Iwan Ernawan Astamoen,S.E.,MM','122000026','Ketua SPMI','2017-09-08'),(9,'P001','Lia Susana','122009137','Kepala Bagian Akademik','2017-09-08'),(10,'P001','Nina Rustiana','112003015','Kepala Bagian Keuangan','2017-09-08'),(11,'P001','Endri Hendrayana, SE','122013174','Kepala Bagian CRM dan Kemahasiswaan','2017-09-08'),(12,'P001','Rd. Norman Rizkianto','122010149','Bagian GA dan umum','2017-09-08'),(13,'P001','Ridwan Taufik, A.Ma. Pust, SE','122015203','Pustakawan ','2017-09-08'),(14,'P002','Nurachadi','123033432','Ketua Prodi','2017-03-10'),(15,'P002','Sri Wisnu Noloadi\r\n','120323123','Sekretaris Program Studi S1 Teknik Informatika','2017-03-10'),(16,'P002','Endang Mulyani, SE','122002078','Bagian HRD','2017-03-10'),(17,'P002','Sri Lestari, SPd','122006105','Sekretaris Rektorat','2017-03-10'),(18,'P002','Usman Rachman, Drs., MH','122017210','Ketua LPPM','2017-03-10'),(19,'P002','Abdul Holik. S.Fil.l., M.Si','422108502','Ketua Bidang Riset','2017-03-10'),(20,'P002','Sjamsuridjal, Ir., MM','403015301','Ketua Bidang Pengembangan','2017-03-10'),(21,'P001','Teguh Prabowo L','121323','Ketua A','2018-07-10');

UNLOCK TABLES;

/*Table structure for table `perguruan_tinggi` */

DROP TABLE IF EXISTS `perguruan_tinggi`;

CREATE TABLE `perguruan_tinggi` (
  `kode_pt` varchar(6) NOT NULL DEFAULT '',
  `nama_pt` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_pt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `perguruan_tinggi` */

LOCK TABLES `perguruan_tinggi` WRITE;

insert  into `perguruan_tinggi`(`kode_pt`,`nama_pt`) values ('PT001','Universitas Nasional PASIM');

UNLOCK TABLES;

/*Table structure for table `permission` */

DROP TABLE IF EXISTS `permission`;

CREATE TABLE `permission` (
  `role_id` int(3) NOT NULL,
  `permission` text NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `permission` */

LOCK TABLES `permission` WRITE;

UNLOCK TABLES;

/*Table structure for table `perolehan_dana` */

DROP TABLE IF EXISTS `perolehan_dana`;

CREATE TABLE `perolehan_dana` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `id_dana` int(4) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `jenis_dana` varchar(50) DEFAULT NULL,
  `ts_2` double(10,2) DEFAULT NULL,
  `ts_1` double(10,2) DEFAULT NULL,
  `ts` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_perolehan_prodi` (`kd_prodi`),
  KEY `FK_perolehan_dana` (`id_dana`),
  CONSTRAINT `FK_perolehan_dana` FOREIGN KEY (`id_dana`) REFERENCES `sumber_dana` (`id_dana`),
  CONSTRAINT `FK_perolehan_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `perolehan_dana` */

LOCK TABLES `perolehan_dana` WRITE;

insert  into `perolehan_dana`(`id`,`id_dana`,`kd_prodi`,`jenis_dana`,`ts_2`,`ts_1`,`ts`) values (1,1,'P001','Beasiswa Yayasan ',853200.00,537600.00,529200.00),(2,1,'P001','Hibah Yayasan',5000000.00,5000000.00,5235.00),(3,1,'P001','Hibah Unit Usaha ',75000.00,973050.00,7497529.50),(4,2,'P001','Pendaftaran',2250.00,2750.00,3250.00),(5,2,'P001','Biaya Registrasi',10750.00,23650.00,27950.00),(6,2,'P001','Biaya Kuliah',21000.00,46200.00,54600.00),(7,4,'P001','Alumni',1288884.00,1166953.00,1062653.00),(8,4,'P001','Hibah Penelitian',35800.00,39700.00,44600.00),(9,4,'P001','Hibah Pengabdian',40200.00,41300.00,50600.00),(10,1,'P002','Beasiswa Yayasan',830000.00,670000.00,580000.00),(11,1,'P002','Hibah yayasan',430000.00,410000.00,354000.00),(12,2,'P002','Biaya Registrasi',340000.00,234000.00,124300.00),(13,4,'P002','Hibah Penelitian',560000.00,529000.00,423000.00),(14,4,'P002','Alumni',340000.00,123000.00,342200.00),(15,5,'P002','Yayasan A',4500000.00,132400.00,232000.00),(16,6,'P002','Dinas A',242480.00,120000.00,123200.00),(17,1,'P002','Hibah Unit Usaha ',70000.00,800000.00,112000.00),(18,2,'P002','Pendaftaran',21000.00,1450000.00,100000.00),(19,2,'P002','Biaya Kuliah',21000.00,46200.00,54600.00),(20,4,'P002','Hibah Pengabdian',40200.00,41300.00,50600.00);

UNLOCK TABLES;

/*Table structure for table `persentase_llsn` */

DROP TABLE IF EXISTS `persentase_llsn`;

CREATE TABLE `persentase_llsn` (
  `id_prodi` varchar(6) DEFAULT NULL,
  `persen` double(10,2) DEFAULT NULL,
  KEY `FK_persentase_llsn` (`id_prodi`),
  CONSTRAINT `FK_persentase_llsn` FOREIGN KEY (`id_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `persentase_llsn` */

LOCK TABLES `persentase_llsn` WRITE;

insert  into `persentase_llsn`(`id_prodi`,`persen`) values ('P001',93.28),('P002',88.00);

UNLOCK TABLES;

/*Table structure for table `pkdt_tgs_belajar` */

DROP TABLE IF EXISTS `pkdt_tgs_belajar`;

CREATE TABLE `pkdt_tgs_belajar` (
  `id_dosen` int(6) DEFAULT NULL,
  `jenjang_pend` varchar(10) DEFAULT NULL,
  `bid_studi` varchar(50) DEFAULT NULL,
  `perguruan_tinggi` varchar(50) DEFAULT NULL,
  `negara` varchar(50) DEFAULT NULL,
  `thn_mulai_std` varchar(4) DEFAULT NULL,
  `id` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `FK_pkdt_tgs_belajar` (`id_dosen`),
  CONSTRAINT `FK_pkdt_tgs_belajar` FOREIGN KEY (`id_dosen`) REFERENCES `dosen_tbl` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pkdt_tgs_belajar` */

LOCK TABLES `pkdt_tgs_belajar` WRITE;

insert  into `pkdt_tgs_belajar`(`id_dosen`,`jenjang_pend`,`bid_studi`,`perguruan_tinggi`,`negara`,`thn_mulai_std`,`id`) values (4,'S1','Elektro dan Informatika','Institut Teknologi Bandung','Indonesia','2017',1),(2,'S3','Teknik Informatika','Institut Teknologi Bandung','Indonesia','2018',2),(11,'S2','Teknik Informatika','Institut Teknologi Bandung','Indonesia','2016',3),(14,'S2','Bahasa Indonesia','Universitas Padjajaran','Indonesia','2016',4);

UNLOCK TABLES;

/*Table structure for table `prestasi_dosen` */

DROP TABLE IF EXISTS `prestasi_dosen`;

CREATE TABLE `prestasi_dosen` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_dosen` int(4) DEFAULT NULL,
  `prestasi` text,
  `tahun` varchar(4) DEFAULT NULL,
  `internasional` char(1) DEFAULT NULL,
  `nasional` char(1) DEFAULT NULL,
  `lokal` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_prestasi_dosen` (`id_dosen`),
  CONSTRAINT `FK_prestasi_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen_tbl` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `prestasi_dosen` */

LOCK TABLES `prestasi_dosen` WRITE;

insert  into `prestasi_dosen`(`id`,`id_dosen`,`prestasi`,`tahun`,`internasional`,`nasional`,`lokal`) values (1,9,'Prestasi A','2015',NULL,NULL,'v'),(2,10,'Prestasi B','2016',NULL,NULL,'v'),(3,11,'Prestasi C	','2016',NULL,NULL,'v');

UNLOCK TABLES;

/*Table structure for table `prodi_tbl` */

DROP TABLE IF EXISTS `prodi_tbl`;

CREATE TABLE `prodi_tbl` (
  `kode_prodi` varchar(6) NOT NULL,
  `kode_fakultas` varchar(6) DEFAULT NULL,
  `kode_pt` varchar(6) DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `no_sk_ps` varchar(15) DEFAULT NULL,
  `tgl_sk_ps` date DEFAULT NULL,
  `pjbt_ttd` varchar(30) DEFAULT NULL,
  `foto_sk_ps` varchar(30) DEFAULT NULL,
  `bln_mulai_ps` varchar(10) DEFAULT NULL,
  `thn_mulai_ps` int(4) DEFAULT NULL,
  `no_sk_opr` varchar(20) DEFAULT NULL,
  `tgl_sk_opr` date DEFAULT NULL,
  `foto_sk_opr` varchar(30) NOT NULL,
  `peringkat` varchar(1) DEFAULT NULL,
  `nilai` int(4) DEFAULT NULL,
  `no_sk_ban_pt` varchar(35) DEFAULT NULL,
  `alamat_ps` tinytext,
  `no_telp_ps` varchar(16) DEFAULT NULL,
  `no_fax_ps` varchar(16) DEFAULT NULL,
  `homepage_ps` varchar(20) DEFAULT NULL,
  `email_ps` varchar(20) DEFAULT NULL,
  `id` int(3) DEFAULT NULL,
  `jenis_prodi` int(4) DEFAULT NULL,
  PRIMARY KEY (`kode_prodi`),
  KEY `FK_fakultas` (`kode_fakultas`),
  KEY `FK_pt` (`kode_pt`),
  KEY `FK_prodi_tbl` (`jenis_prodi`),
  CONSTRAINT `FK_prodi_tbl` FOREIGN KEY (`jenis_prodi`) REFERENCES `jenis_prodi` (`id_jns`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prodi_tbl` */

LOCK TABLES `prodi_tbl` WRITE;

insert  into `prodi_tbl`(`kode_prodi`,`kode_fakultas`,`kode_pt`,`prodi`,`jurusan`,`no_sk_ps`,`tgl_sk_ps`,`pjbt_ttd`,`foto_sk_ps`,`bln_mulai_ps`,`thn_mulai_ps`,`no_sk_opr`,`tgl_sk_opr`,`foto_sk_opr`,`peringkat`,`nilai`,`no_sk_ban_pt`,`alamat_ps`,`no_telp_ps`,`no_fax_ps`,`homepage_ps`,`email_ps`,`id`,`jenis_prodi`) values ('P001','F001','PT001','D3','Manajemen Informatika','114/D/O/2001','2001-10-02','A.n. Menteri Pendidikan Nasion',NULL,' Agustus',2008,'2248/D/T/K-IV/2009','2009-05-20','','C',265,'047/SK/BAN-PT/Ak-XII/Dpl-III/II/201','Jalan Dakota No. 8A Sukaraja-Bandung','022 - 6072803','022-20565099','www.pasim.ac.id ','mi@pasim.ac.id',1,2),('P002','F001','PT001','S1','Teknik Informatika','115/D/O/2002','2002-11-01','A.n. Menteri Pendidikan Nasion',NULL,'Mei',2009,'2234/D/T/K-V/2010','2010-10-02','','B',320,'054/SK/BAN-PT/Ak-X/S1/III/230','Jalan Dakota No. 8A Sukaraja, Bandung',NULL,'021-21343421','www.pasim.ac.id','ti@pasim.ac.id',2,2),('P003','F003','P001','S1','Psikologi','1233','2018-07-20','Teguh Prabowo ','433.PNG','Mei',1998,'0912/PU','2018-07-27','data dosen.PNG','1',0,'1213/OI','Jl. Sukaresmi','0981','0981','www.Youtube.com','katateguh@gmail.com',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `pustaka` */

DROP TABLE IF EXISTS `pustaka`;

CREATE TABLE `pustaka` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `kd_jns` int(2) DEFAULT NULL,
  `jml_judul` int(4) DEFAULT NULL,
  `jml_copy` int(4) DEFAULT NULL,
  `kd_prodi` varchar(6) NOT NULL,
  `jenis_pustaka` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pustaka` (`kd_jns`),
  KEY `FK_pustaka_prodi` (`kd_prodi`),
  CONSTRAINT `FK_pustaka` FOREIGN KEY (`kd_jns`) REFERENCES `jns_pustaka` (`kd_jns`),
  CONSTRAINT `FK_pustaka_prodi` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `pustaka` */

LOCK TABLES `pustaka` WRITE;

insert  into `pustaka`(`id`,`kd_jns`,`jml_judul`,`jml_copy`,`kd_prodi`,`jenis_pustaka`) values (1,1,625,671,'P001','Buku Teks dan handbook'),(2,2,20,60,'P001','Modul Praktikum / Praktek'),(3,3,4,4,'P001','Jurnal yang terakreditasi oleh lembaga resmi (Dikti. LIPI, dll)'),(4,4,2,0,'P001','Jurnal Internasional (termasuk e-journal)'),(5,5,12,0,'P001','Majalah Ilmiah'),(6,6,15,0,'P001','Prosiding'),(7,1,451,465,'P002','Buku Teks'),(8,2,23,45,'P002','Jurnal Nasional yang terakreditasi'),(9,3,5,5,'P002','Jurnal Internasional'),(10,4,1,0,'P002','Prosiding'),(11,5,10,3,'P002','Skripsi'),(12,6,5,2,'P002','Tesis'),(13,7,630,653,'P002','Disertasi');

UNLOCK TABLES;

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `r_id` varchar(3) NOT NULL,
  `nama_role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `role` */

LOCK TABLES `role` WRITE;

insert  into `role`(`r_id`,`nama_role`) values ('1','admin');

UNLOCK TABLES;

/*Table structure for table `sdm` */

DROP TABLE IF EXISTS `sdm`;

CREATE TABLE `sdm` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_hal` int(3) DEFAULT NULL,
  `total` int(5) DEFAULT NULL,
  `kd_prodi` varchar(6) DEFAULT NULL,
  `jml` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_hal` (`kd_hal`),
  KEY `FK_sdm` (`kd_prodi`),
  CONSTRAINT `FK_hal` FOREIGN KEY (`kd_hal`) REFERENCES `jns_hal` (`kd_hal`),
  CONSTRAINT `FK_sdm` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `sdm` */

LOCK TABLES `sdm` WRITE;

insert  into `sdm`(`id`,`kd_hal`,`total`,`kd_prodi`,`jml`) values (1,1,5,'P001',5),(2,2,1,'P001',1),(3,3,0,'P001',0),(4,4,0,'P001',0),(5,5,1,'P001',1),(6,6,7,'P001',7),(7,7,0,'P001',0),(8,1,5,'P002',5),(9,2,1,'P002',1),(10,3,0,'P002',0),(11,4,0,'P002',0),(12,5,1,'P002',1),(13,6,6,'P002',6),(14,7,0,'P002',0),(15,8,2,'P002',2);

UNLOCK TABLES;

/*Table structure for table `struktur_kurikulum` */

DROP TABLE IF EXISTS `struktur_kurikulum`;

CREATE TABLE `struktur_kurikulum` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) NOT NULL,
  `kode_mk` varchar(8) NOT NULL,
  `jns_mk` int(1) NOT NULL,
  `smt` int(3) DEFAULT NULL,
  `nama_mk` varchar(50) DEFAULT NULL,
  `bobot_sks` int(4) NOT NULL,
  `sks_kuliah` int(3) DEFAULT NULL,
  `sks_praktek` int(3) DEFAULT NULL,
  `sks_inti` varchar(1) DEFAULT NULL,
  `sks_institusi` varchar(1) DEFAULT NULL,
  `bobot_tgs` varchar(1) DEFAULT NULL,
  `deskripsi` varchar(1) DEFAULT NULL,
  `silabus` varchar(1) DEFAULT NULL,
  `sap` varchar(1) DEFAULT NULL,
  `penyelenggara` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_struktur_kurikulum` (`jns_mk`),
  KEY `FK_prodi_struktur` (`kd_prodi`),
  CONSTRAINT `FK_jns_mk` FOREIGN KEY (`jns_mk`) REFERENCES `jns_matkul` (`kd_jns`),
  CONSTRAINT `FK_prodi_struktur` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `struktur_kurikulum` */

LOCK TABLES `struktur_kurikulum` WRITE;

insert  into `struktur_kurikulum`(`id`,`kd_prodi`,`kode_mk`,`jns_mk`,`smt`,`nama_mk`,`bobot_sks`,`sks_kuliah`,`sks_praktek`,`sks_inti`,`sks_institusi`,`bobot_tgs`,`deskripsi`,`silabus`,`sap`,`penyelenggara`) values (1,'P001','MKB1002',1,1,'Logika dan Algoritma',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(2,'P001','MKB1003',1,1,'Pengelolaan Instalasi Komputer',0,1,1,'v',NULL,'v','v','v','v','Jurusan'),(3,'P001','MKB1004',1,1,'Pengenalan Pengolahan Data Elektronik',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(4,'P001','MKB2005',1,2,'Basis Data',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(5,'P001','MKB2006',1,2,'Pemrograman C',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(6,'P001','MKB2007',1,2,'Pemrograman VB.Net',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(7,'P001','MKB2008',1,2,'Struktur Data',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(8,'P001','MKB2009',1,3,'Animasi',0,NULL,2,'v',NULL,'v','v','v','v','Jurusan'),(9,'P001','MKB3010',1,3,'Pemrograman C++',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(10,'P001','MKB3011',1,3,'Pemrograman .Net Lanjutan',0,NULL,3,'v','','v','v','v','v','Jurusan'),(11,'P001','MKB4012',1,4,'Web Interface Design',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(12,'P001','MKB4013',1,4,'Sistem Operasi',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(13,'P001','MKB4014',1,5,'Web Database Development',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(14,'P001','MKB5015',1,5,'Pemrograman Java',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(15,'P001','MKB5016',1,5,'Kerja Praktek',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(16,'P001','MKB6017',1,6,'Kewirausahaan',0,NULL,1,'v',NULL,'v','v','v','v','Jurusan'),(17,'P001','MKB6018',1,6,'Mobile Programming',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(18,'P001','MKB6019',1,6,'Tugas Akhir',0,NULL,4,'v',NULL,'v','v','v','v','Jurusan'),(19,'P001','MKB6020',1,6,'Networking',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(20,'P001','MKK1001',1,1,'Dasar Akuntansi I',0,3,NULL,'v',NULL,'v','v','v','v','Jurusan'),(21,'P001','MKK0121',1,1,'Kalkulus',0,2,NULL,'v',NULL,'v','v','v','v','Jurusan'),(22,'P001','MKk1003',1,1,'Pengantar Bisnis',0,2,NULL,'v','','v','v','v','v','Jurusan'),(23,'P001','MKK2004',1,2,'Aljabar Linier',0,3,NULL,'v',NULL,'v','v','v','v','Jurusan'),(24,'P001','MKK2005',1,2,'Dasar Akuntansi II',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(25,'P001','MKK3006',1,3,'Manajemen Umum',0,1,NULL,'v',NULL,'v','v','v','v','Jurusan'),(26,'P001','MKK3007',1,3,'Rekayasa Perangkat Lunak',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(27,'P001','MKK3008',1,3,'Manajemen Keuangan',0,3,NULL,'v',NULL,'v','v','v','v','Jurusan'),(28,'P001','MKK4009',1,4,'Matematika Diskrit',0,3,NULL,'v',NULL,'v','v','v','v','Jurusan'),(29,'P001','MKK4010',1,4,'Sistem Informasi Manajemen',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(30,'P001','MKK4011',1,4,'Interaksi Manusia dan Komputer',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(31,'P001','MKK5012',1,5,'Analisis dan Perancangan Sistem',0,1,2,'v',NULL,'v','v','v','v','Jurusan'),(32,'P001','MKK5013',1,5,'Statistika Deskriptif',0,3,NULL,'v',NULL,'v','v','v','v','Jurusan'),(34,'P001','MKK6015',1,6,'Topik Khusus SIM',0,3,0,'v',NULL,'v','v','v','v','Jurusan'),(36,'P002','MKB1002',1,1,'Logika dan Algoritma',0,0,3,'v',NULL,'v','v','v','v','Jurusan'),(37,'P002','MKB2005',1,2,'Basis Data',0,0,3,'v',NULL,'v','v','v','v','Jurusan'),(38,'P002','MKB3010',1,3,'Pemrograman C++',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(39,'P002','MKB4012',1,4,'Web Interface Design ',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(40,'P002','MKB5015',1,5,'Pemrograman Java',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(41,'P002','MKB1004',2,1,'Pengenalan Pengolahan Data Elektronik',0,2,NULL,'v',NULL,'v','v','v','v','Jurusan'),(42,'P002','MKB2007',2,2,'Pemrograman VB.Net',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(43,'P002','MKB3011',2,3,'Pemrograman .Net lanjutan',0,NULL,3,'v',NULL,'v','v','v','v','Jurusan'),(44,'P002','MKL0012',2,4,'Aljabar Linier',0,3,NULL,'v',NULL,'v','v','v','v','Jurusan');

UNLOCK TABLES;

/*Table structure for table `sumber_biaya` */

DROP TABLE IF EXISTS `sumber_biaya`;

CREATE TABLE `sumber_biaya` (
  `kd_jns` int(2) NOT NULL AUTO_INCREMENT,
  `jns_sumber` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_jns`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `sumber_biaya` */

LOCK TABLES `sumber_biaya` WRITE;

insert  into `sumber_biaya`(`kd_jns`,`jns_sumber`) values (1,'Pembiayaan sendiri'),(2,'PT yang bersangkutan'),(3,'Kemristekdikti'),(4,'Institusi dalam negeri di luar'),(5,'Institusi luar negeri'),(6,'Depdiknas'),(7,'Institusi dalam negeri di luar Depdiknas');

UNLOCK TABLES;

/*Table structure for table `sumber_dana` */

DROP TABLE IF EXISTS `sumber_dana`;

CREATE TABLE `sumber_dana` (
  `id_dana` int(2) NOT NULL AUTO_INCREMENT,
  `sumber_dana` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dana`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `sumber_dana` */

LOCK TABLES `sumber_dana` WRITE;

insert  into `sumber_dana`(`id_dana`,`sumber_dana`) values (1,'Usaha Sendiri'),(2,'Mahasiswa'),(3,'Pemerintah'),(4,'Sumber Lain'),(5,'Yayasan'),(6,'Diknas');

UNLOCK TABLES;

/*Table structure for table `tahun_akd` */

DROP TABLE IF EXISTS `tahun_akd`;

CREATE TABLE `tahun_akd` (
  `id_ts` int(4) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) DEFAULT NULL,
  PRIMARY KEY (`id_ts`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tahun_akd` */

LOCK TABLES `tahun_akd` WRITE;

insert  into `tahun_akd`(`id_ts`,`tahun`) values (1,2012),(2,2013),(3,2014),(4,2015),(5,2016),(6,2017),(7,2018),(8,2019),(15,2016),(16,2018);

UNLOCK TABLES;

/*Table structure for table `tenaga_kepend` */

DROP TABLE IF EXISTS `tenaga_kepend`;

CREATE TABLE `tenaga_kepend` (
  `kode_prodi` varchar(6) DEFAULT NULL,
  `kd_jns` int(3) DEFAULT NULL,
  `s3` int(3) DEFAULT NULL,
  `s2` int(3) DEFAULT NULL,
  `s1` int(3) DEFAULT NULL,
  `d4` int(3) DEFAULT NULL,
  `d3` int(3) DEFAULT NULL,
  `d2` int(3) DEFAULT NULL,
  `d1` int(3) DEFAULT NULL,
  `sma` int(3) DEFAULT NULL,
  `unit_kerja` varchar(30) DEFAULT NULL,
  `jns_tng_kepend` varchar(100) DEFAULT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `FK_tenaga_kepend` (`kode_prodi`),
  KEY `FK_jenis` (`kd_jns`),
  CONSTRAINT `FK_jenis` FOREIGN KEY (`kd_jns`) REFERENCES `jns_tng_kepend` (`kd_jns`),
  CONSTRAINT `FK_tenaga_kepend` FOREIGN KEY (`kode_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tenaga_kepend` */

LOCK TABLES `tenaga_kepend` WRITE;

insert  into `tenaga_kepend`(`kode_prodi`,`kd_jns`,`s3`,`s2`,`s1`,`d4`,`d3`,`d2`,`d1`,`sma`,`unit_kerja`,`jns_tng_kepend`,`id`) values ('P001',1,0,0,2,0,1,0,0,0,'Universitas','Pustakawan',1),('P001',2,0,0,3,0,2,0,0,0,'Program Studi','Laboran/Teknisi/Analisis/Operator/Programer',2),('P001',3,0,0,2,0,3,0,0,0,'Program Studi','Administrasi',3),('P001',4,0,0,1,0,0,0,0,7,'Universitas','Lainnya',4),('P002',1,0,0,2,0,1,1,0,0,'Universitas','Pustakawan',5),('P002',2,0,0,2,1,1,1,0,0,'Program Studi','Laboran/Teknisi/Analisis/Operator/Programer',6),('P002',3,1,2,0,1,0,0,0,0,'Program Studi','Administrasi',7),('P002',4,2,1,0,1,0,0,0,0,'Universitas','Lainnya',8);

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `kd_prodi` varchar(6) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`username`,`password`,`kd_prodi`,`prodi`) values (1,'admin','admin',NULL,NULL),(2,'D3 Manajemen Informatika','d3mi','P001','D3'),(3,'S1 Teknik Informatika','s1ti','P002','S1'),(4,'S1 Psikologi','s1psikologi','P003','S1');

UNLOCK TABLES;

/*Table structure for table `waktu_prpbm` */

DROP TABLE IF EXISTS `waktu_prpbm`;

CREATE TABLE `waktu_prpbm` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kd_prodi` varchar(6) DEFAULT NULL,
  `teori` int(6) DEFAULT NULL,
  `praktek` int(6) DEFAULT NULL,
  `praktikum` int(6) DEFAULT NULL,
  `pkl` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_waktu_prpbm` (`kd_prodi`),
  CONSTRAINT `FK_waktu_prpbm` FOREIGN KEY (`kd_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `waktu_prpbm` */

LOCK TABLES `waktu_prpbm` WRITE;

insert  into `waktu_prpbm`(`id`,`kd_prodi`,`teori`,`praktek`,`praktikum`,`pkl`) values (1,'P001',615,1655,298,185);

UNLOCK TABLES;

/*Table structure for table `wkt_tunggu_llsn` */

DROP TABLE IF EXISTS `wkt_tunggu_llsn`;

CREATE TABLE `wkt_tunggu_llsn` (
  `id_prodi` varchar(6) DEFAULT NULL,
  `waktu` double(10,2) DEFAULT NULL,
  KEY `FK_wkt_tunggu_llsn` (`id_prodi`),
  CONSTRAINT `FK_wkt_tunggu_llsn` FOREIGN KEY (`id_prodi`) REFERENCES `prodi_tbl` (`kode_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wkt_tunggu_llsn` */

LOCK TABLES `wkt_tunggu_llsn` WRITE;

insert  into `wkt_tunggu_llsn`(`id_prodi`,`waktu`) values ('P001',0.11),('P002',0.12);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
