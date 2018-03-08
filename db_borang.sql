/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.21 : Database - db_borangakreditasi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_borangakreditasi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_borangakreditasi`;

/*Table structure for table `apd_a311` */

DROP TABLE IF EXISTS `apd_a311`;

CREATE TABLE `apd_a311` (
  `ThnAkd` int(11) DEFAULT NULL,
  `dayaTampung` int(11) DEFAULT NULL,
  `jcalonMhsIkutSeleksi` int(11) DEFAULT NULL,
  `jcalonMhsLulusSeleksi` int(11) DEFAULT NULL,
  `jMhsBaruRegBukanTransfer` int(11) DEFAULT NULL,
  `jMhsBaruTransfer` int(11) DEFAULT NULL,
  `jtotalMhsRegBukanTransfer` int(11) DEFAULT NULL,
  `jtotalMhsTransfer` int(11) DEFAULT NULL,
  `jLulusRegBukantransfer` int(11) DEFAULT NULL,
  `jLulusTransfer` int(11) DEFAULT NULL,
  `IPKLulusRegMin` double DEFAULT NULL,
  `IPKLulusRegRat` double DEFAULT NULL,
  `IPKLulusRegMax` double DEFAULT NULL,
  `persenIPKKurang275` double DEFAULT NULL,
  `persenIPK275350` double DEFAULT NULL,
  `persenIPKLebih350` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a311` */

/*Table structure for table `apd_a313` */

DROP TABLE IF EXISTS `apd_a313`;

CREATE TABLE `apd_a313` (
  `tahunMasuk` int(4) DEFAULT NULL,
  `TS6` smallint(6) DEFAULT NULL,
  `TS5` smallint(6) DEFAULT NULL,
  `TS4` smallint(6) DEFAULT NULL,
  `TS3` smallint(6) DEFAULT NULL,
  `TS2` smallint(6) DEFAULT NULL,
  `TS1` smallint(6) DEFAULT NULL,
  `TS` smallint(6) DEFAULT NULL,
  `jumlahLulusam` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a313` */

/*Table structure for table `apd_a341` */

DROP TABLE IF EXISTS `apd_a341`;

CREATE TABLE `apd_a341` (
  `jenisKemampuan` varchar(50) DEFAULT NULL,
  `sangatBaik` double DEFAULT NULL,
  `baik` double DEFAULT NULL,
  `cukup` double DEFAULT NULL,
  `kurang` double DEFAULT NULL,
  `rencanaTindakLanjut` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a341` */

/*Table structure for table `apd_a345` */

DROP TABLE IF EXISTS `apd_a345`;

CREATE TABLE `apd_a345` (
  `tahun` int(11) DEFAULT NULL,
  `jLulusWisuda` int(11) DEFAULT NULL,
  `Lembaga/Instansi` varchar(50) DEFAULT NULL,
  `jLulusDipesan` int(11) DEFAULT NULL,
  `jLulusDiterima` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a345` */

/*Table structure for table `apd_a431` */

DROP TABLE IF EXISTS `apd_a431`;

CREATE TABLE `apd_a431` (
  `namaDosentetap` varchar(50) DEFAULT NULL,
  `NIDN` char(18) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `jabatanAkd` varchar(50) DEFAULT NULL,
  `sertifikasi` char(5) DEFAULT NULL,
  `s1gelar` varchar(30) DEFAULT NULL,
  `s1PTAsal` varchar(30) DEFAULT NULL,
  `s1bidangKeahlian` varchar(30) DEFAULT NULL,
  `s2gelar` varchar(30) DEFAULT NULL,
  `s2PTAsal` varchar(30) DEFAULT NULL,
  `s2bidangKeahlian` varchar(30) DEFAULT NULL,
  `s3gelar` varchar(30) DEFAULT NULL,
  `s3PTAsal` varchar(30) DEFAULT NULL,
  `s3bidangKeahlian` varchar(30) DEFAULT NULL,
  `kpGelar` varchar(30) DEFAULT NULL,
  `kpPengakuan` varchar(30) DEFAULT NULL,
  `kpBidangKeahlian` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a431` */

/*Table structure for table `apd_a432` */

DROP TABLE IF EXISTS `apd_a432`;

CREATE TABLE `apd_a432` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `NIDN` varchar(18) DEFAULT NULL,
  `tgLahir` date DEFAULT NULL,
  `jabatanAkd` varchar(30) DEFAULT NULL,
  `sertifikasi` char(5) DEFAULT NULL,
  `s1bidangKeahlian` varchar(30) DEFAULT NULL,
  `s1PTAsal` varchar(30) DEFAULT NULL,
  `s1gelar` varchar(30) DEFAULT NULL,
  `s2bidangKeahlian` varchar(30) DEFAULT NULL,
  `s2PTAsal` varchar(30) DEFAULT NULL,
  `s2gelar` varchar(30) DEFAULT NULL,
  `s3bidangKeahlian` varchar(30) DEFAULT NULL,
  `s3PTAsal` varchar(30) DEFAULT NULL,
  `s3gelar` varchar(30) DEFAULT NULL,
  `kpgelar` varchar(30) DEFAULT NULL,
  `kpKeahlian` varchar(30) DEFAULT NULL,
  `kpBidangKeahlian` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a432` */

/*Table structure for table `apd_a433` */

DROP TABLE IF EXISTS `apd_a433`;

CREATE TABLE `apd_a433` (
  `namaDosnTetap` varchar(50) DEFAULT NULL,
  `sksPengajaranPTsendiri` int(11) DEFAULT NULL,
  `sksPengajaranLS` int(11) DEFAULT NULL,
  `sksPengajaranPTLain` int(11) DEFAULT NULL,
  `sksPenelitian` int(11) DEFAULT NULL,
  `sksAbdiMas` int(11) DEFAULT NULL,
  `sksManajemenPTsendiri` int(11) DEFAULT NULL,
  `sksManajemenPTLain` int(11) DEFAULT NULL,
  `jumlahSKS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a433` */

/*Table structure for table `apd_a434` */

DROP TABLE IF EXISTS `apd_a434`;

CREATE TABLE `apd_a434` (
  `namaDosentetap` varchar(50) DEFAULT NULL,
  `bidangKeahlian` varchar(30) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `jumlahKelas` int(11) DEFAULT NULL,
  `jDirencanakan` int(11) DEFAULT NULL,
  `jDilaksanakan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a434` */

/*Table structure for table `apd_a435` */

DROP TABLE IF EXISTS `apd_a435`;

CREATE TABLE `apd_a435` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `jumlahSKS` int(11) DEFAULT NULL,
  `jDirencanakan` int(11) DEFAULT NULL,
  `jDilaksanakan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a435` */

/*Table structure for table `apd_a441` */

DROP TABLE IF EXISTS `apd_a441`;

CREATE TABLE `apd_a441` (
  `namaDosenTidakTetap` varchar(50) DEFAULT NULL,
  `NIDN` varchar(18) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `jabatanAkd` varchar(30) DEFAULT NULL,
  `sertifikasi` char(5) DEFAULT NULL,
  `s1PTAsal` varchar(30) DEFAULT NULL,
  `s1BidangKeahlian` varchar(30) DEFAULT NULL,
  `s1gelar` varchar(30) DEFAULT NULL,
  `s2PTAsal` varchar(30) DEFAULT NULL,
  `s2BidangKeahlian` varchar(30) DEFAULT NULL,
  `s2gelar` varchar(30) DEFAULT NULL,
  `s3PTAsal` varchar(30) DEFAULT NULL,
  `s3BidangKeahlian` varchar(30) DEFAULT NULL,
  `s3gelar` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a441` */

/*Table structure for table `apd_a442` */

DROP TABLE IF EXISTS `apd_a442`;

CREATE TABLE `apd_a442` (
  `namaDosenTidakTetap` varchar(50) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `jumlahSKS` int(11) DEFAULT NULL,
  `jDirencanakan` int(11) DEFAULT NULL,
  `jDilaksanakan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a442` */

/*Table structure for table `apd_a451` */

DROP TABLE IF EXISTS `apd_a451`;

CREATE TABLE `apd_a451` (
  `namaTenagaAhli/Pakar` varchar(50) DEFAULT NULL,
  `instansi/jabatan` varchar(30) DEFAULT NULL,
  `namaJudulKegiatan` varchar(50) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a451` */

/*Table structure for table `apd_a452` */

DROP TABLE IF EXISTS `apd_a452`;

CREATE TABLE `apd_a452` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `jenjangPendidikan` varchar(30) DEFAULT NULL,
  `bidangStudi` varchar(15) DEFAULT NULL,
  `perguruanTinggi` varchar(30) DEFAULT NULL,
  `negara` varchar(15) DEFAULT NULL,
  `tahunMulaiStudi` char(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a452` */

/*Table structure for table `apd_a453` */

DROP TABLE IF EXISTS `apd_a453`;

CREATE TABLE `apd_a453` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `jenisKegiatan` varchar(30) DEFAULT NULL,
  `tempat` varchar(30) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `penyaji` char(1) DEFAULT NULL,
  `peserta` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a453` */

/*Table structure for table `apd_a455` */

DROP TABLE IF EXISTS `apd_a455`;

CREATE TABLE `apd_a455` (
  `namaDosen` varchar(50) DEFAULT NULL,
  `namaOrganisasi` varchar(50) DEFAULT NULL,
  `tahunAwal` int(4) DEFAULT NULL,
  `tahunAkhir` int(4) DEFAULT NULL,
  `tingkatInternasional` varchar(30) DEFAULT NULL,
  `tingkatNasional` varchar(30) DEFAULT NULL,
  `tingkatLokal` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a455` */

/*Table structure for table `apd_a461` */

DROP TABLE IF EXISTS `apd_a461`;

CREATE TABLE `apd_a461` (
  `jenisTenagaKependidikan` varchar(30) DEFAULT NULL,
  `jumlahS3` int(11) DEFAULT NULL,
  `jumlahS2` int(11) DEFAULT NULL,
  `jumlahS1` int(11) DEFAULT NULL,
  `jumlahD4` int(11) DEFAULT NULL,
  `jumlahD3` int(11) DEFAULT NULL,
  `jumlahD2` int(11) DEFAULT NULL,
  `jumlahD1` int(11) DEFAULT NULL,
  `jumlahSMA/SMK` int(11) DEFAULT NULL,
  `unitKerja` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a461` */

/*Table structure for table `apd_a5121` */

DROP TABLE IF EXISTS `apd_a5121`;

CREATE TABLE `apd_a5121` (
  `smt` smallint(6) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `bobotSKSKuliah` smallint(6) DEFAULT NULL,
  `bobotSKSPraktek` smallint(6) DEFAULT NULL,
  `sksMKkurikulumInti` smallint(6) DEFAULT NULL,
  `sksMKkurikulumInstitusional` smallint(6) DEFAULT NULL,
  `bobotTugas` int(11) DEFAULT NULL,
  `deskripsi` varchar(30) DEFAULT NULL,
  `silabus` varchar(30) DEFAULT NULL,
  `SAP` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a5121` */

/*Table structure for table `apd_a522` */

DROP TABLE IF EXISTS `apd_a522`;

CREATE TABLE `apd_a522` (
  `jam_teori` int(2) NOT NULL,
  `jam_praktek` int(2) NOT NULL,
  `jam_praktikum` int(2) NOT NULL,
  `jam_pkl` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `apd_a522` */

/*Table structure for table `apd_a541` */

DROP TABLE IF EXISTS `apd_a541`;

CREATE TABLE `apd_a541` (
  `namaDosen` varchar(50) DEFAULT NULL,
  `jumlahMHS` smallint(6) DEFAULT NULL,
  `rataPertemuan` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a541` */

/*Table structure for table `apd_a552` */

DROP TABLE IF EXISTS `apd_a552`;

CREATE TABLE `apd_a552` (
  `namaDosen` varchar(50) DEFAULT NULL,
  `jumlahMHS` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a552` */

/*Table structure for table `apd_a6211` */

DROP TABLE IF EXISTS `apd_a6211`;

CREATE TABLE `apd_a6211` (
  `sumberDana` varchar(30) DEFAULT NULL,
  `jenisDana` varchar(50) DEFAULT NULL,
  `TS2` double DEFAULT NULL,
  `TS1` double DEFAULT NULL,
  `TS` double DEFAULT NULL,
  `total` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a6211` */

/*Table structure for table `apd_a6212` */

DROP TABLE IF EXISTS `apd_a6212`;

CREATE TABLE `apd_a6212` (
  `jenisPenggunaan` varchar(30) DEFAULT NULL,
  `TS2` double DEFAULT NULL,
  `TS1` double DEFAULT NULL,
  `TS` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a6212` */

/*Table structure for table `apd_a622` */

DROP TABLE IF EXISTS `apd_a622`;

CREATE TABLE `apd_a622` (
  `tahun` smallint(4) DEFAULT NULL,
  `judulPenelitian` varchar(50) DEFAULT NULL,
  `sumberJenisData` varchar(50) DEFAULT NULL,
  `jumlahDana` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a622` */

/*Table structure for table `apd_a623` */

DROP TABLE IF EXISTS `apd_a623`;

CREATE TABLE `apd_a623` (
  `tahun` smallint(4) DEFAULT NULL,
  `judulKegiatan` varchar(50) DEFAULT NULL,
  `sumberJenisDana` varchar(30) DEFAULT NULL,
  `jumlahDana` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a623` */

/*Table structure for table `apd_a631` */

DROP TABLE IF EXISTS `apd_a631`;

CREATE TABLE `apd_a631` (
  `ruangKerjaDosen` varchar(30) DEFAULT NULL,
  `jumlahRuang` smallint(6) DEFAULT NULL,
  `jumlahLuas` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a631` */

/*Table structure for table `apd_a641` */

DROP TABLE IF EXISTS `apd_a641`;

CREATE TABLE `apd_a641` (
  `jenisPustaka` varchar(30) DEFAULT NULL,
  `jumlahJudul` smallint(6) DEFAULT NULL,
  `jumlahCopy` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a641` */

/*Table structure for table `apd_a652` */

DROP TABLE IF EXISTS `apd_a652`;

CREATE TABLE `apd_a652` (
  `jenisData` varchar(30) DEFAULT NULL,
  `secaraManual` varchar(30) DEFAULT NULL,
  `PCtanpaJaringan` varchar(30) DEFAULT NULL,
  `PCLAN` varchar(30) DEFAULT NULL,
  `PCWAN` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a652` */

/*Table structure for table `apd_a711` */

DROP TABLE IF EXISTS `apd_a711`;

CREATE TABLE `apd_a711` (
  `sumberPembiayaan` varchar(30) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a711` */

/*Table structure for table `apd_a712` */

DROP TABLE IF EXISTS `apd_a712`;

CREATE TABLE `apd_a712` (
  `judul` varchar(50) DEFAULT NULL,
  `namaDosen` varchar(50) DEFAULT NULL,
  `Dipublikasikan` varchar(30) DEFAULT NULL,
  `tahunPublikasi` smallint(4) DEFAULT NULL,
  `jDosenLokal` smallint(6) DEFAULT NULL,
  `jDosenNasional` smallint(6) DEFAULT NULL,
  `jDosenInternasional` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a712` */

/*Table structure for table `apd_a721` */

DROP TABLE IF EXISTS `apd_a721`;

CREATE TABLE `apd_a721` (
  `sumberDana` varchar(30) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_a721` */

/*Table structure for table `apd_b312` */

DROP TABLE IF EXISTS `apd_b312`;

CREATE TABLE `apd_b312` (
  `jenisMHS` varchar(30) DEFAULT NULL,
  `totalMHSfakultas` smallint(6) DEFAULT NULL,
  `PS1` smallint(6) DEFAULT NULL,
  `PS2` smallint(6) DEFAULT NULL,
  `PS3` smallint(6) DEFAULT NULL,
  `PS4` smallint(6) DEFAULT NULL,
  `PS5` smallint(6) DEFAULT NULL,
  `PS6` smallint(6) DEFAULT NULL,
  `PS7` smallint(6) DEFAULT NULL,
  `PS8` smallint(6) DEFAULT NULL,
  `PS9` smallint(6) DEFAULT NULL,
  `PS10` smallint(6) DEFAULT NULL,
  `totalMHS` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b312` */

/*Table structure for table `apd_b321` */

DROP TABLE IF EXISTS `apd_b321`;

CREATE TABLE `apd_b321` (
  `programStudi` varchar(30) DEFAULT NULL,
  `rataMasaStudi` smallint(6) DEFAULT NULL,
  `rataIPKLulusan` double DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b321` */

/*Table structure for table `apd_b411` */

DROP TABLE IF EXISTS `apd_b411`;

CREATE TABLE `apd_b411` (
  `jabatanPendidikan` varchar(25) DEFAULT NULL,
  `namaJabatanPendidikan` varchar(25) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `namaPS1` varchar(50) DEFAULT NULL,
  `namaPS2` varchar(50) DEFAULT NULL,
  `namaPS3` varchar(50) DEFAULT NULL,
  `namaPS4` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b411` */

/*Table structure for table `apd_b412` */

DROP TABLE IF EXISTS `apd_b412`;

CREATE TABLE `apd_b412` (
  `hal` varchar(25) DEFAULT NULL,
  `totalUnitPengelola` int(11) DEFAULT NULL,
  `namPS1` varchar(50) DEFAULT NULL,
  `namPS2` varchar(50) DEFAULT NULL,
  `namPS3` varchar(50) DEFAULT NULL,
  `namPS4` varchar(50) DEFAULT NULL,
  `namPS5` varchar(50) DEFAULT NULL,
  `namPS6` varchar(50) DEFAULT NULL,
  `namPS7` varchar(50) DEFAULT NULL,
  `namPS8` varchar(50) DEFAULT NULL,
  `namPS9` varchar(50) DEFAULT NULL,
  `namPS10` varchar(50) DEFAULT NULL,
  `totalDiInstitusi` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b412` */

/*Table structure for table `apd_b42` */

DROP TABLE IF EXISTS `apd_b42`;

CREATE TABLE `apd_b42` (
  `jenisTenagaKependidikan` varchar(25) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s1` int(11) DEFAULT NULL,
  `d4` int(11) DEFAULT NULL,
  `d3` int(11) DEFAULT NULL,
  `d2` int(11) DEFAULT NULL,
  `d1` int(11) DEFAULT NULL,
  `SMASMK` int(11) DEFAULT NULL,
  `unitKerja` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b42` */

/*Table structure for table `apd_b6111` */

DROP TABLE IF EXISTS `apd_b6111`;

CREATE TABLE `apd_b6111` (
  `sumberDana` varchar(25) DEFAULT NULL,
  `jenisDana` varchar(25) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b6111` */

/*Table structure for table `apd_b6112` */

DROP TABLE IF EXISTS `apd_b6112`;

CREATE TABLE `apd_b6112` (
  `jenisPenggunaan` varchar(25) DEFAULT NULL,
  `namaPenggunaan` varchar(25) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b6112` */

/*Table structure for table `apd_b6113` */

DROP TABLE IF EXISTS `apd_b6113`;

CREATE TABLE `apd_b6113` (
  `namaProdi` varchar(25) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b6113` */

/*Table structure for table `apd_b642` */

DROP TABLE IF EXISTS `apd_b642`;

CREATE TABLE `apd_b642` (
  `jenisData` varchar(25) DEFAULT NULL,
  `manual` char(1) DEFAULT NULL,
  `tanpaJaringan` char(1) DEFAULT NULL,
  `LAN` char(1) DEFAULT NULL,
  `WAN` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b642` */

/*Table structure for table `apd_b711` */

DROP TABLE IF EXISTS `apd_b711`;

CREATE TABLE `apd_b711` (
  `namaProdi` varchar(25) DEFAULT NULL,
  `jumlahJudulTS2` smallint(6) DEFAULT NULL,
  `jumlahJudulTS1` smallint(6) DEFAULT NULL,
  `jumlahJudulTS` smallint(6) DEFAULT NULL,
  `totalDanaTS2` int(11) DEFAULT NULL,
  `totalDanaTS1` int(11) DEFAULT NULL,
  `totalDanaTS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b711` */

/*Table structure for table `apd_b721` */

DROP TABLE IF EXISTS `apd_b721`;

CREATE TABLE `apd_b721` (
  `namaProdi` varchar(25) DEFAULT NULL,
  `jumlahJudulTS2` smallint(6) DEFAULT NULL,
  `jumlahJudulTS1` smallint(6) DEFAULT NULL,
  `jumlahJudulTS` smallint(6) DEFAULT NULL,
  `totalDanaTS2` int(11) DEFAULT NULL,
  `totalDanaTS1` int(11) DEFAULT NULL,
  `totalDanaTS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `apd_b721` */

/*Table structure for table `aps_a311` */

DROP TABLE IF EXISTS `aps_a311`;

CREATE TABLE `aps_a311` (
  `ThnAkd` int(11) DEFAULT NULL,
  `dayaTampung` int(11) DEFAULT NULL,
  `jcalonMhsIkutSeleksi` int(11) DEFAULT NULL,
  `jcalonMhsLulusSeleksi` int(11) DEFAULT NULL,
  `jMhsBaruRegBukanTransfer` int(11) DEFAULT NULL,
  `jMhsBaruTransfer` int(11) DEFAULT NULL,
  `jtotalMhsRegBukanTransfer` int(11) DEFAULT NULL,
  `jtotalMhsTransfer` int(11) DEFAULT NULL,
  `jLulusRegBukantransfer` int(11) DEFAULT NULL,
  `jLulusTransfer` int(11) DEFAULT NULL,
  `IPKLulusRegMin` double DEFAULT NULL,
  `IPKLulusRegRat` double DEFAULT NULL,
  `IPKLulusRegMax` double DEFAULT NULL,
  `persenIPKKurang275` double DEFAULT NULL,
  `persenIPK275350` double DEFAULT NULL,
  `persenIPKLebih350` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a311` */

/*Table structure for table `aps_a312` */

DROP TABLE IF EXISTS `aps_a312`;

CREATE TABLE `aps_a312` (
  `tahunAKD` varchar(3) DEFAULT NULL,
  `dayaTampung` smallint(6) DEFAULT NULL,
  `calonMHSikutSeleksi` smallint(6) DEFAULT NULL,
  `calonMHSlulusSeleksi` smallint(6) DEFAULT NULL,
  `mhsBaruNonReguler` smallint(6) DEFAULT NULL,
  `mhsBaruReguler` smallint(6) DEFAULT NULL,
  `totalMHSNonReguler` smallint(6) DEFAULT NULL,
  `totalMHSTransfer` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a312` */

/*Table structure for table `aps_a314` */

DROP TABLE IF EXISTS `aps_a314`;

CREATE TABLE `aps_a314` (
  `tahunMasuk` varchar(3) DEFAULT NULL,
  `TS6` smallint(6) DEFAULT NULL,
  `TS5` smallint(6) DEFAULT NULL,
  `TS4` smallint(6) DEFAULT NULL,
  `TS3` smallint(6) DEFAULT NULL,
  `TS2` smallint(6) DEFAULT NULL,
  `TS1` smallint(6) DEFAULT NULL,
  `TS` smallint(6) DEFAULT NULL,
  `jumlahLulusan` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a314` */

/*Table structure for table `aps_a331` */

DROP TABLE IF EXISTS `aps_a331`;

CREATE TABLE `aps_a331` (
  `jenisKemampuan` varchar(50) DEFAULT NULL,
  `sangatBaik` double DEFAULT NULL,
  `baik` double DEFAULT NULL,
  `cukup` double DEFAULT NULL,
  `kurang` double DEFAULT NULL,
  `rencanaTindakLanjut` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a331` */

/*Table structure for table `aps_a431` */

DROP TABLE IF EXISTS `aps_a431`;

CREATE TABLE `aps_a431` (
  `namaDosentetap` varchar(50) DEFAULT NULL,
  `NIDN` char(18) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `jabatanAkd` varchar(50) DEFAULT NULL,
  `sertifikasi` char(5) DEFAULT NULL,
  `s1gelar` varchar(30) DEFAULT NULL,
  `s1PTAsal` varchar(30) DEFAULT NULL,
  `s1bidangKeahlian` varchar(30) DEFAULT NULL,
  `s2gelar` varchar(30) DEFAULT NULL,
  `s2PTAsal` varchar(30) DEFAULT NULL,
  `s2bidangKeahlian` varchar(30) DEFAULT NULL,
  `s3gelar` varchar(30) DEFAULT NULL,
  `s3PTAsal` varchar(30) DEFAULT NULL,
  `s3bidangKeahlian` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a431` */

/*Table structure for table `aps_a432` */

DROP TABLE IF EXISTS `aps_a432`;

CREATE TABLE `aps_a432` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `NIDN` varchar(18) DEFAULT NULL,
  `tgLahir` date DEFAULT NULL,
  `jabatanAkd` varchar(30) DEFAULT NULL,
  `sertifikasi` char(5) DEFAULT NULL,
  `s1bidangKeahlian` varchar(30) DEFAULT NULL,
  `s1PTAsal` varchar(30) DEFAULT NULL,
  `s1gelar` varchar(30) DEFAULT NULL,
  `s2bidangKeahlian` varchar(30) DEFAULT NULL,
  `s2PTAsal` varchar(30) DEFAULT NULL,
  `s2gelar` varchar(30) DEFAULT NULL,
  `s3bidangKeahlian` varchar(30) DEFAULT NULL,
  `s3PTAsal` varchar(30) DEFAULT NULL,
  `s3gelar` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a432` */

/*Table structure for table `aps_a433` */

DROP TABLE IF EXISTS `aps_a433`;

CREATE TABLE `aps_a433` (
  `namaDosnTetap` varchar(50) DEFAULT NULL,
  `sksPengajaranPTsendiri` int(11) DEFAULT NULL,
  `sksPengajaranLS` int(11) DEFAULT NULL,
  `sksPengajaranPTLain` int(11) DEFAULT NULL,
  `sksPenelitian` int(11) DEFAULT NULL,
  `sksAbdiMas` int(11) DEFAULT NULL,
  `sksManajemenPTsendiri` int(11) DEFAULT NULL,
  `sksManajemenPTLain` int(11) DEFAULT NULL,
  `jumlahSKS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a433` */

/*Table structure for table `aps_a434` */

DROP TABLE IF EXISTS `aps_a434`;

CREATE TABLE `aps_a434` (
  `namaDosentetap` varchar(50) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `jumlahKelas` int(11) DEFAULT NULL,
  `jDirencanakan` int(11) DEFAULT NULL,
  `jDilaksanakan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a434` */

/*Table structure for table `aps_a435` */

DROP TABLE IF EXISTS `aps_a435`;

CREATE TABLE `aps_a435` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `jumlahSKS` int(11) DEFAULT NULL,
  `jDirencanakan` int(11) DEFAULT NULL,
  `jDilaksanakan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a435` */

/*Table structure for table `aps_a441` */

DROP TABLE IF EXISTS `aps_a441`;

CREATE TABLE `aps_a441` (
  `namaDosenTidakTetap` varchar(50) DEFAULT NULL,
  `NIDN` varchar(18) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `jabatanAkd` varchar(30) DEFAULT NULL,
  `sertifikasi` char(5) DEFAULT NULL,
  `s1PTAsal` varchar(30) DEFAULT NULL,
  `s1BidangKeahlian` varchar(30) DEFAULT NULL,
  `s1gelar` varchar(30) DEFAULT NULL,
  `s2PTAsal` varchar(30) DEFAULT NULL,
  `s2BidangKeahlian` varchar(30) DEFAULT NULL,
  `s2gelar` varchar(30) DEFAULT NULL,
  `s3PTAsal` varchar(30) DEFAULT NULL,
  `s3BidangKeahlian` varchar(30) DEFAULT NULL,
  `s3gelar` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a441` */

/*Table structure for table `aps_a442` */

DROP TABLE IF EXISTS `aps_a442`;

CREATE TABLE `aps_a442` (
  `namaDosenTidakTetap` varchar(50) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `jumlahSKS` int(11) DEFAULT NULL,
  `jDirencanakan` int(11) DEFAULT NULL,
  `jDilaksanakan` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a442` */

/*Table structure for table `aps_a451` */

DROP TABLE IF EXISTS `aps_a451`;

CREATE TABLE `aps_a451` (
  `namaTenagaAhli/Pakar` varchar(50) DEFAULT NULL,
  `instansi/jabatan` varchar(30) DEFAULT NULL,
  `namaJudulKegiatan` varchar(50) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a451` */

/*Table structure for table `aps_a452` */

DROP TABLE IF EXISTS `aps_a452`;

CREATE TABLE `aps_a452` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `jenjangPendidikan` varchar(30) DEFAULT NULL,
  `bidangStudi` varchar(15) DEFAULT NULL,
  `perguruanTinggi` varchar(30) DEFAULT NULL,
  `negara` varchar(15) DEFAULT NULL,
  `tahunMulaiStudi` char(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a452` */

/*Table structure for table `aps_a453` */

DROP TABLE IF EXISTS `aps_a453`;

CREATE TABLE `aps_a453` (
  `namaDosenTetap` varchar(50) DEFAULT NULL,
  `jenisKegiatan` varchar(30) DEFAULT NULL,
  `tempat` varchar(30) DEFAULT NULL,
  `tahun` int(4) DEFAULT NULL,
  `penyaji` char(1) DEFAULT NULL,
  `peserta` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a453` */

/*Table structure for table `aps_a454` */

DROP TABLE IF EXISTS `aps_a454`;

CREATE TABLE `aps_a454` (
  `namaDosen` varchar(50) DEFAULT NULL,
  `prestasi` varchar(50) DEFAULT NULL,
  `tahun` char(4) DEFAULT NULL,
  `internasional` char(1) DEFAULT NULL,
  `nasional` char(1) DEFAULT NULL,
  `lokal` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a454` */

/*Table structure for table `aps_a455` */

DROP TABLE IF EXISTS `aps_a455`;

CREATE TABLE `aps_a455` (
  `namaDosen` varchar(50) DEFAULT NULL,
  `namaOrganisasi` varchar(50) DEFAULT NULL,
  `tahunAwal` int(4) DEFAULT NULL,
  `tahunAkhir` int(4) DEFAULT NULL,
  `tingkatInternasional` varchar(30) DEFAULT NULL,
  `tingkatNasional` varchar(30) DEFAULT NULL,
  `tingkatLokal` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a455` */

/*Table structure for table `aps_a461` */

DROP TABLE IF EXISTS `aps_a461`;

CREATE TABLE `aps_a461` (
  `jenisTenagaKependidikan` varchar(30) DEFAULT NULL,
  `jumlahS3` int(11) DEFAULT NULL,
  `jumlahS2` int(11) DEFAULT NULL,
  `jumlahS1` int(11) DEFAULT NULL,
  `jumlahD4` int(11) DEFAULT NULL,
  `jumlahD3` int(11) DEFAULT NULL,
  `jumlahD2` int(11) DEFAULT NULL,
  `jumlahD1` int(11) DEFAULT NULL,
  `jumlahSMA/SMK` int(11) DEFAULT NULL,
  `unitKerja` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a461` */

/*Table structure for table `aps_a5121` */

DROP TABLE IF EXISTS `aps_a5121`;

CREATE TABLE `aps_a5121` (
  `jenisMK` varchar(25) DEFAULT NULL,
  `sks` smallint(6) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a5121` */

/*Table structure for table `aps_a5122` */

DROP TABLE IF EXISTS `aps_a5122`;

CREATE TABLE `aps_a5122` (
  `smt` smallint(6) DEFAULT NULL,
  `kodeMK` char(6) DEFAULT NULL,
  `namaMK` varchar(30) DEFAULT NULL,
  `bobotSKS` smallint(6) DEFAULT NULL,
  `sksMKkurikulumInti` smallint(6) DEFAULT NULL,
  `sksMKkurikulumInstitusional` smallint(6) DEFAULT NULL,
  `bobotTugas` int(11) DEFAULT NULL,
  `deskripsi` varchar(30) DEFAULT NULL,
  `silabus` varchar(30) DEFAULT NULL,
  `SAP` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a5122` */

/*Table structure for table `aps_a513` */

DROP TABLE IF EXISTS `aps_a513`;

CREATE TABLE `aps_a513` (
  `semester` smallint(6) DEFAULT NULL,
  `kodeMK` varchar(10) DEFAULT NULL,
  `namaMK` varchar(50) DEFAULT NULL,
  `bobotSKS` smallint(6) DEFAULT NULL,
  `bobotTugas` smallint(6) DEFAULT NULL,
  `penyelenggara` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a513` */

/*Table structure for table `aps_a541` */

DROP TABLE IF EXISTS `aps_a541`;

CREATE TABLE `aps_a541` (
  `namaDosen` varchar(50) DEFAULT NULL,
  `jumlahMHS` smallint(6) DEFAULT NULL,
  `rataPertemuan` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a541` */

/*Table structure for table `aps_a551` */

DROP TABLE IF EXISTS `aps_a551`;

CREATE TABLE `aps_a551` (
  `namaDosen` varchar(50) DEFAULT NULL,
  `jumlahMHS` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a551` */

/*Table structure for table `aps_a6211` */

DROP TABLE IF EXISTS `aps_a6211`;

CREATE TABLE `aps_a6211` (
  `sumberDana` varchar(30) DEFAULT NULL,
  `jenisDana` varchar(50) DEFAULT NULL,
  `TS2` double DEFAULT NULL,
  `TS1` double DEFAULT NULL,
  `TS` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a6211` */

/*Table structure for table `aps_a6212` */

DROP TABLE IF EXISTS `aps_a6212`;

CREATE TABLE `aps_a6212` (
  `jenisPenggunaan` varchar(30) DEFAULT NULL,
  `TS2` double DEFAULT NULL,
  `TS1` double DEFAULT NULL,
  `TS` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a6212` */

/*Table structure for table `aps_a622` */

DROP TABLE IF EXISTS `aps_a622`;

CREATE TABLE `aps_a622` (
  `tahun` smallint(4) DEFAULT NULL,
  `judulPenelitian` varchar(50) DEFAULT NULL,
  `sumberJenisData` varchar(50) DEFAULT NULL,
  `jumlahDana` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a622` */

/*Table structure for table `aps_a623` */

DROP TABLE IF EXISTS `aps_a623`;

CREATE TABLE `aps_a623` (
  `tahun` smallint(4) DEFAULT NULL,
  `judulKegiatan` varchar(50) DEFAULT NULL,
  `sumberJenisDana` varchar(30) DEFAULT NULL,
  `jumlahDana` double DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a623` */

/*Table structure for table `aps_a631` */

DROP TABLE IF EXISTS `aps_a631`;

CREATE TABLE `aps_a631` (
  `ruangKerjaDosen` varchar(30) DEFAULT NULL,
  `jumlahRuang` smallint(6) DEFAULT NULL,
  `jumlahLuas` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a631` */

/*Table structure for table `aps_a6411` */

DROP TABLE IF EXISTS `aps_a6411`;

CREATE TABLE `aps_a6411` (
  `jenisPustaka` varchar(30) DEFAULT NULL,
  `jumlahJudul` smallint(6) DEFAULT NULL,
  `jumlahCopy` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a6411` */

/*Table structure for table `aps_a6412` */

DROP TABLE IF EXISTS `aps_a6412`;

CREATE TABLE `aps_a6412` (
  `jenis` varchar(25) DEFAULT NULL,
  `namaJurnal` varchar(50) DEFAULT NULL,
  `rincianNomorTahun` varchar(25) DEFAULT NULL,
  `jumlah` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a6412` */

/*Table structure for table `aps_a652` */

DROP TABLE IF EXISTS `aps_a652`;

CREATE TABLE `aps_a652` (
  `jenisData` varchar(30) DEFAULT NULL,
  `secaraManual` varchar(30) DEFAULT NULL,
  `PCtanpaJaringan` varchar(30) DEFAULT NULL,
  `PCLAN` varchar(30) DEFAULT NULL,
  `PCWAN` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a652` */

/*Table structure for table `aps_a711` */

DROP TABLE IF EXISTS `aps_a711`;

CREATE TABLE `aps_a711` (
  `sumberPembiayaan` varchar(30) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a711` */

/*Table structure for table `aps_a713` */

DROP TABLE IF EXISTS `aps_a713`;

CREATE TABLE `aps_a713` (
  `judul` varchar(50) DEFAULT NULL,
  `namaDosen` varchar(50) DEFAULT NULL,
  `Dipublikasikan` varchar(30) DEFAULT NULL,
  `tahunPublikasi` smallint(4) DEFAULT NULL,
  `jDosenLokal` smallint(6) DEFAULT NULL,
  `jDosenNasional` smallint(6) DEFAULT NULL,
  `jDosenInternasional` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a713` */

/*Table structure for table `aps_a714` */

DROP TABLE IF EXISTS `aps_a714`;

CREATE TABLE `aps_a714` (
  `karya` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a714` */

/*Table structure for table `aps_a721` */

DROP TABLE IF EXISTS `aps_a721`;

CREATE TABLE `aps_a721` (
  `sumberDana` varchar(30) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_a721` */

/*Table structure for table `aps_b312` */

DROP TABLE IF EXISTS `aps_b312`;

CREATE TABLE `aps_b312` (
  `jenisMHS` varchar(30) DEFAULT NULL,
  `namaHal` varchar(30) DEFAULT NULL,
  `totalMHSfakultas` smallint(6) DEFAULT NULL,
  `PS1` smallint(6) DEFAULT NULL,
  `PS2` smallint(6) DEFAULT NULL,
  `PS3` smallint(6) DEFAULT NULL,
  `PS4` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b312` */

/*Table structure for table `aps_b321` */

DROP TABLE IF EXISTS `aps_b321`;

CREATE TABLE `aps_b321` (
  `programStudi` varchar(30) DEFAULT NULL,
  `rataMasaStudi` smallint(6) DEFAULT NULL,
  `rataIPKLulusan` double DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b321` */

/*Table structure for table `aps_b411` */

DROP TABLE IF EXISTS `aps_b411`;

CREATE TABLE `aps_b411` (
  `jabatanPendidikan` varchar(25) DEFAULT NULL,
  `namaJabatanPendidikan` varchar(25) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `namaPS1` varchar(50) DEFAULT NULL,
  `namaPS2` varchar(50) DEFAULT NULL,
  `namaPS3` varchar(50) DEFAULT NULL,
  `namaPS4` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b411` */

/*Table structure for table `aps_b412` */

DROP TABLE IF EXISTS `aps_b412`;

CREATE TABLE `aps_b412` (
  `hal` varchar(25) DEFAULT NULL,
  `totalDiFakultas` int(11) DEFAULT NULL,
  `namPS1` varchar(50) DEFAULT NULL,
  `namPS2` varchar(50) DEFAULT NULL,
  `namPS3` varchar(50) DEFAULT NULL,
  `namPS4` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b412` */

/*Table structure for table `aps_b42` */

DROP TABLE IF EXISTS `aps_b42`;

CREATE TABLE `aps_b42` (
  `jenisTenagaKependidikan` varchar(25) DEFAULT NULL,
  `s3` int(11) DEFAULT NULL,
  `s2` int(11) DEFAULT NULL,
  `s1` int(11) DEFAULT NULL,
  `d4` int(11) DEFAULT NULL,
  `d3` int(11) DEFAULT NULL,
  `d2` int(11) DEFAULT NULL,
  `d1` int(11) DEFAULT NULL,
  `SMASMK` int(11) DEFAULT NULL,
  `unitKerja` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b42` */

/*Table structure for table `aps_b6111` */

DROP TABLE IF EXISTS `aps_b6111`;

CREATE TABLE `aps_b6111` (
  `sumberDana` varchar(25) DEFAULT NULL,
  `jenisDana` varchar(25) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b6111` */

/*Table structure for table `aps_b6112` */

DROP TABLE IF EXISTS `aps_b6112`;

CREATE TABLE `aps_b6112` (
  `jenisPenggunaan` varchar(25) DEFAULT NULL,
  `namaPenggunaan` varchar(25) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b6112` */

/*Table structure for table `aps_b6113` */

DROP TABLE IF EXISTS `aps_b6113`;

CREATE TABLE `aps_b6113` (
  `namaProdi` varchar(25) DEFAULT NULL,
  `TS2` int(11) DEFAULT NULL,
  `TS1` int(11) DEFAULT NULL,
  `TS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b6113` */

/*Table structure for table `aps_b642` */

DROP TABLE IF EXISTS `aps_b642`;

CREATE TABLE `aps_b642` (
  `jenisData` varchar(25) DEFAULT NULL,
  `manual` char(1) DEFAULT NULL,
  `tanpaJaringan` char(1) DEFAULT NULL,
  `LAN` char(1) DEFAULT NULL,
  `WAN` char(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b642` */

/*Table structure for table `aps_b711` */

DROP TABLE IF EXISTS `aps_b711`;

CREATE TABLE `aps_b711` (
  `namaProdi` varchar(25) DEFAULT NULL,
  `jumlahJudulTS2` smallint(6) DEFAULT NULL,
  `jumlahJudulTS1` smallint(6) DEFAULT NULL,
  `jumlahJudulTS` smallint(6) DEFAULT NULL,
  `totalDanaTS2` int(11) DEFAULT NULL,
  `totalDanaTS1` int(11) DEFAULT NULL,
  `totalDanaTS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b711` */

/*Table structure for table `aps_b721` */

DROP TABLE IF EXISTS `aps_b721`;

CREATE TABLE `aps_b721` (
  `namaProdi` varchar(25) DEFAULT NULL,
  `jumlahJudulTS2` smallint(6) DEFAULT NULL,
  `jumlahJudulTS1` smallint(6) DEFAULT NULL,
  `jumlahJudulTS` smallint(6) DEFAULT NULL,
  `totalDanaTS2` int(11) DEFAULT NULL,
  `totalDanaTS1` int(11) DEFAULT NULL,
  `totalDanaTS` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `aps_b721` */

/*Table structure for table `data_dosen` */

DROP TABLE IF EXISTS `data_dosen`;

CREATE TABLE `data_dosen` (
  `Id_prodi` varchar(10) NOT NULL,
  `Nama_dosen_tetap` varchar(50) NOT NULL,
  `NIDN` varchar(10) NOT NULL,
  `Tgl_lhr` date NOT NULL,
  `Jab_akademik` varchar(30) NOT NULL,
  `S1_gelar_akademik` int(5) NOT NULL,
  `S1_asal_PT` int(50) NOT NULL,
  `S1_bid_keahlian` int(50) NOT NULL,
  `S2_gelar_akademik` int(5) NOT NULL,
  `S2_asal_PT` int(50) NOT NULL,
  `S2_bid_keahlian` int(50) NOT NULL,
  `S3_gelar_akademik` int(5) NOT NULL,
  `S3_asal_PT` int(50) NOT NULL,
  `S3_bid_keahlian` int(50) NOT NULL,
  PRIMARY KEY (`Id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `data_dosen` */

/*Table structure for table `fakultas_tbl` */

DROP TABLE IF EXISTS `fakultas_tbl`;

CREATE TABLE `fakultas_tbl` (
  `kode_fakultas` varchar(4) NOT NULL,
  `nama_fakultas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `fakultas_tbl` */

insert  into `fakultas_tbl`(`kode_fakultas`,`nama_fakultas`) values ('F002','Ekonomi');

/*Table structure for table `identitas_prodi` */

DROP TABLE IF EXISTS `identitas_prodi`;

CREATE TABLE `identitas_prodi` (
  `Id_prodi` varchar(10) NOT NULL,
  `kode_prodi_pdpt` varchar(10) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `kode_pt_pdpt` varchar(10) NOT NULL,
  `nomor_sk` varchar(10) NOT NULL,
  `tgl_sk` date NOT NULL,
  `pejabat_ttd` varchar(50) NOT NULL,
  `fotokopi_sk` varchar(20) NOT NULL,
  `bln_mulai_ps` varchar(15) NOT NULL,
  `tahun_mulai_ps` int(4) NOT NULL,
  `nomor_sk_opr` varchar(10) NOT NULL,
  `tgl_sk_opr` date NOT NULL,
  `fotokopi_sk_ijin` varchar(20) NOT NULL,
  `peringkat_akreditasi` varchar(2) NOT NULL,
  `nilai_akreditasi` varchar(1) NOT NULL,
  `nomor_sk_ban_pt` varchar(10) NOT NULL,
  `alamat_ps` text NOT NULL,
  PRIMARY KEY (`Id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `identitas_prodi` */

/*Table structure for table `pengisi_tbl` */

DROP TABLE IF EXISTS `pengisi_tbl`;

CREATE TABLE `pengisi_tbl` (
  `Id_prodi` varchar(10) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NIDN` varchar(10) NOT NULL,
  `Jabatan` varchar(30) NOT NULL,
  `Tgl_pengisian` date NOT NULL,
  PRIMARY KEY (`Id_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengisi_tbl` */

/*Table structure for table `prodi_tbl` */

DROP TABLE IF EXISTS `prodi_tbl`;

CREATE TABLE `prodi_tbl` (
  `kode_prodi` varchar(4) NOT NULL,
  `nama_prodi` varchar(50) DEFAULT NULL,
  `kode_fakultas` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`kode_prodi`),
  KEY `kode_fakultas` (`kode_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `prodi_tbl` */

insert  into `prodi_tbl`(`kode_prodi`,`nama_prodi`,`kode_fakultas`) values ('P001','D3 Manajemen Informatika','F001'),('P002','S1 Teknik Informatika','F001'),('P003','Ekonomi','F001');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` varchar(4) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values ('1','admin','21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
