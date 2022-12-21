/*
Navicat MySQL Data Transfer

Source Server         : localhelmi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : spk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-12-21 17:56:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for saw_aplikasi
-- ----------------------------
DROP TABLE IF EXISTS `saw_aplikasi`;
CREATE TABLE `saw_aplikasi` (
  `nama` varchar(100) NOT NULL,
  `ram` varchar(5) NOT NULL,
  `kamera` varchar(8) NOT NULL,
  `baterai` varchar(10) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_aplikasi
-- ----------------------------
INSERT INTO `saw_aplikasi` VALUES ('Jancok', '8GB', '100MP', '5000mAh', 'Snapdragon 8 gen 2', '8080808');
INSERT INTO `saw_aplikasi` VALUES ('samsung', '8GB', '100MP', '5000mAh', 'Snapdragon 8 gen 2', '12000000');

-- ----------------------------
-- Table structure for saw_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `saw_kriteria`;
CREATE TABLE `saw_kriteria` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `ram` float NOT NULL,
  `kamera` float NOT NULL,
  `baterai` float NOT NULL,
  `processor` float NOT NULL,
  `harga` float NOT NULL,
  `kelebihan` float NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_kriteria
-- ----------------------------
INSERT INTO `saw_kriteria` VALUES ('12', '0.08', '0.38', '0.08', '0.15', '0.08', '0.23');

-- ----------------------------
-- Table structure for saw_penilaian
-- ----------------------------
DROP TABLE IF EXISTS `saw_penilaian`;
CREATE TABLE `saw_penilaian` (
  `nama` varchar(100) NOT NULL,
  `peringkat` float NOT NULL,
  `ukuran` float NOT NULL,
  `unduhan` float NOT NULL,
  `aktif` float NOT NULL,
  `manfaat` float NOT NULL,
  `kelebihan` float NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_penilaian
-- ----------------------------
INSERT INTO `saw_penilaian` VALUES ('Jancok', '0', '3', '1', '1', '1', '0');
INSERT INTO `saw_penilaian` VALUES ('samsung', '0', '3', '3', '5', '2', '0');

-- ----------------------------
-- Table structure for saw_perankingan
-- ----------------------------
DROP TABLE IF EXISTS `saw_perankingan`;
CREATE TABLE `saw_perankingan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nilai_akhir` float NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_perankingan
-- ----------------------------
INSERT INTO `saw_perankingan` VALUES ('1', 'samsung', '0');
