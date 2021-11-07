/*
Navicat MySQL Data Transfer

Source Server         : lukman
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dbperpus2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-10-24 07:31:46
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nm_admin` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin', 'admin');

-- ----------------------------
-- Table structure for `tbanggota`
-- ----------------------------
DROP TABLE IF EXISTS `tbanggota`;
CREATE TABLE `tbanggota` (
  `idanggota` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idanggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbanggota
-- ----------------------------
INSERT INTO `tbanggota` VALUES ('43243', 'Abdul', 'Pria', 'fredrere', 'Tidak Meminjam', '432432.jpg');
INSERT INTO `tbanggota` VALUES ('AG003', 'Rudi Hartono', 'Pria', 'Jl.Manggis 98', 'Sedang Meminjam', null);
INSERT INTO `tbanggota` VALUES ('AG004', 'Dino Riano', 'Pria', 'Jl.Melon No 33', 'Sedang Meminjam', null);
INSERT INTO `tbanggota` VALUES ('AG005', 'Agus Wardoyo', 'Pria', 'Jl.Cempedak No 88', 'Tidak Meminjam', null);
INSERT INTO `tbanggota` VALUES ('AG006', 'Shinta Riani', 'Wanita', 'JL.Jeruk No 1', 'Sedang Meminjam', null);
INSERT INTO `tbanggota` VALUES ('AG007', 'Irwan Hakim', 'Pria', 'Jl.Salak No 34', 'Tidak Meminjam', null);
INSERT INTO `tbanggota` VALUES ('AG008', 'Indah Dian', 'Wanita', 'Jl.Semangka No 23', 'Tidak Meminjam', null);
INSERT INTO `tbanggota` VALUES ('AG009', 'Rina Auliah', 'Wanita', 'Jl.Merpati No 44', 'Tidak Meminjam', null);
INSERT INTO `tbanggota` VALUES ('AG010', 'Septi Putri', 'Wanita', 'Jl.Beringin No 2', 'Tidak Meminjam', null);
INSERT INTO `tbanggota` VALUES ('ww', 'ww', 'Pria', 'www', 'Tidak Meminjam', 'ww.jpg');

-- ----------------------------
-- Table structure for `tbbuku`
-- ----------------------------
DROP TABLE IF EXISTS `tbbuku`;
CREATE TABLE `tbbuku` (
  `idbuku` varchar(5) NOT NULL,
  `judulbuku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pengarang` varchar(40) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`idbuku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbbuku
-- ----------------------------
INSERT INTO `tbbuku` VALUES ('BK001', 'Belajar PHP', 'Ilmu Komputer', 'Candra', 'Media Baca', 'Dipinjam');
INSERT INTO `tbbuku` VALUES ('BK002', 'Belajar HTML', 'Ilmu Komputer', 'Rahmat Hakim', 'Media Baca', 'Dipinjam');
INSERT INTO `tbbuku` VALUES ('BK003', 'Kumpulan Puisi', 'Karya Sastra', 'Bejo', 'Media Kita', 'Tersedia');
INSERT INTO `tbbuku` VALUES ('BK004', 'Sejarah Islam', 'Ilmu Agama', 'Sutejo', 'Media Kita', 'Dipinjam');
INSERT INTO `tbbuku` VALUES ('BK005', 'Pintar CSS', 'Ilmu Komputer', 'Anton', 'Graha Buku', 'Tersedia');
INSERT INTO `tbbuku` VALUES ('BK006', 'Kumpulan Cerpen', 'Karya Sastra', 'Rudi', 'Media Aksara', 'Dipinjam');
INSERT INTO `tbbuku` VALUES ('BK007', 'Keamanan Data', 'Ilmu Komputer', 'Nusron', 'Media Cipta', 'Dipinjam');
INSERT INTO `tbbuku` VALUES ('BK008', 'Dasar-Dasar Database', 'Ilmu Komputer', 'Andi', 'Graha Media', 'Tersedia');
INSERT INTO `tbbuku` VALUES ('BK009', 'Kumpulan Cerpen 2', 'Karya Sastra', 'Sutejo', 'Media Cipta', 'Tersedia');
INSERT INTO `tbbuku` VALUES ('BK010', 'Peradaban Islam', 'Ilmu Agama', 'Aminnudin', 'Media Baca', 'Tersedia');
INSERT INTO `tbbuku` VALUES ('BK011', 'Kumpulan Cerpen 3', 'Karya Sastra', 'Rudi', 'Media Baca', 'Tersedia');
INSERT INTO `tbbuku` VALUES ('BK012', 'Teknologi Informasi', 'Ilmu Komputer', 'Andi A', 'Media Baca', 'Tersedia');
INSERT INTO `tbbuku` VALUES ('BK013', 'Dermaga Biru', 'Karya Sastra', 'Sutejo', 'Media Cipta', 'Tersedia');

-- ----------------------------
-- Table structure for `tbtransaksi`
-- ----------------------------
DROP TABLE IF EXISTS `tbtransaksi`;
CREATE TABLE `tbtransaksi` (
  `idtransaksi` varchar(5) NOT NULL,
  `idanggota` varchar(5) NOT NULL,
  `idbuku` varchar(5) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL,
  PRIMARY KEY (`idtransaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbtransaksi
-- ----------------------------
INSERT INTO `tbtransaksi` VALUES ('TR001', 'AG002', 'BK002', '2016-11-03', '0000-00-00');
INSERT INTO `tbtransaksi` VALUES ('TR002', 'AG003', 'BK003', '2016-11-04', '2016-11-04');
INSERT INTO `tbtransaksi` VALUES ('TR003', 'AG001', 'BK001', '2016-11-04', '2021-02-23');
INSERT INTO `tbtransaksi` VALUES ('TR004', 'AG003', 'BK003', '2016-11-04', '2016-11-04');
INSERT INTO `tbtransaksi` VALUES ('TR005', 'AG006', 'BK004', '2016-11-04', '2021-02-23');
INSERT INTO `tbtransaksi` VALUES ('TR006', 'AG003', 'BK005', '2016-11-05', '2016-11-05');
INSERT INTO `tbtransaksi` VALUES ('TR007', 'AG008', 'BK013', '2016-11-05', '2021-02-23');
INSERT INTO `tbtransaksi` VALUES ('TR031', 'AG010', 'BK003', '2017-01-22', '2021-02-23');

-- ----------------------------
-- Table structure for `tbuser`
-- ----------------------------
DROP TABLE IF EXISTS `tbuser`;
CREATE TABLE `tbuser` (
  `iduser` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbuser
-- ----------------------------
INSERT INTO `tbuser` VALUES ('US001', 'Andi Rahman Hakim', 'Jl.Pramuka No 9', '1234');
