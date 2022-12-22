/*
Navicat MySQL Data Transfer

Source Server         : localhelmi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : spk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-12-22 15:58:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for saw_aplikasi
-- ----------------------------
DROP TABLE IF EXISTS `saw_aplikasi`;
CREATE TABLE `saw_aplikasi` (
  `nama` varchar(100) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `kamera` varchar(10) NOT NULL,
  `baterai` varchar(10) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_aplikasi
-- ----------------------------
INSERT INTO `saw_aplikasi` VALUES ('Infinix Zero Ultra', '8', '32', '4500', 'Mediatek Dimensity 900', '6299000');
INSERT INTO `saw_aplikasi` VALUES ('IPhone 13 Pro ', '6', '12', '4444', 'A15 Bionic', '19499000');
INSERT INTO `saw_aplikasi` VALUES ('OPPO A76 4G', '6', '13', '5000', 'Qualcomm Snapdragon 680', '2809000');
INSERT INTO `saw_aplikasi` VALUES ('OPPO A77s', '8', '50', '5000', 'Snapdragon 680', '3499000');
INSERT INTO `saw_aplikasi` VALUES ('OPPO Reno7 4G', '8', '64', '4500', 'Qualcomm Snapdragon 680', '4439000');
INSERT INTO `saw_aplikasi` VALUES ('PEMKAB JOMBANG', '0.20', '0.20', '9', '0.20', '909');
INSERT INTO `saw_aplikasi` VALUES ('PEMKAB PURBALINGGA', '0.3', '0.3', '9', '0.3', '666');
INSERT INTO `saw_aplikasi` VALUES ('POCO M5 ', '4', '50', '5000', 'MediaTek Helio G99', '2099000');
INSERT INTO `saw_aplikasi` VALUES ('SAMSUNG GALAXY A04', '3', '50', '5000', 'MEDIATEK HELIO P35', '1369000');
INSERT INTO `saw_aplikasi` VALUES ('SAMSUNG GALAXY A04S', '4', '50', '5000', 'EXYNOS 850', '2099000');
INSERT INTO `saw_aplikasi` VALUES ('SAMSUNG GALAXY A23 5G', '6', '50', '5000', 'SNAPDRAGON 695 5G', '3999000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy S21 FE 5G ', '8', '12', '4500', 'Exynos 2100', '8249000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy S22 Ultra 5G', '12', '108', '5000', 'Snapdragon 8 gen 1', '17499000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy Z Flip4 5G', '8', '12', '3700', 'Snapdragon 8+ Gen 1', '16999000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy Z Fold4 5G', '12', '12', '4400', 'Snapdragon 8+ Gen 1', '26999000');
INSERT INTO `saw_aplikasi` VALUES ('Xiaomi 12T 5G', '8', '108', '5000', 'MediaTek Dimensity 8100-Ultra', '6599000');

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
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_kriteria
-- ----------------------------
INSERT INTO `saw_kriteria` VALUES ('19', '0.19', '0.25', '0.06', '0.31', '0.19');

-- ----------------------------
-- Table structure for saw_penilaian
-- ----------------------------
DROP TABLE IF EXISTS `saw_penilaian`;
CREATE TABLE `saw_penilaian` (
  `nama` varchar(100) NOT NULL,
  `ram` float NOT NULL,
  `kamera` float NOT NULL,
  `baterai` float NOT NULL,
  `processor` float NOT NULL,
  `harga` float NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_penilaian
-- ----------------------------
INSERT INTO `saw_penilaian` VALUES ('Infinix Zero Ultra', '3', '4', '3', '4', '5');
INSERT INTO `saw_penilaian` VALUES ('PEMKAB JOMBANG', '0', '5', '5', '5', '5');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy S22 Ultra 5G', '5', '4', '4', '4', '4');

-- ----------------------------
-- Table structure for saw_perankingan
-- ----------------------------
DROP TABLE IF EXISTS `saw_perankingan`;
CREATE TABLE `saw_perankingan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nilai_akhir` float NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_perankingan
-- ----------------------------
INSERT INTO `saw_perankingan` VALUES ('1', 'Infinix Zero Ultra', '0.838');
INSERT INTO `saw_perankingan` VALUES ('2', 'PEMKAB JOMBANG', '0.76');
INSERT INTO `saw_perankingan` VALUES ('3', 'Samsung Galaxy S22 Ultra 5G', '0.888');
