/*
Navicat MySQL Data Transfer

Source Server         : localhelmi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : spk

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-01-03 10:50:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for saw_aplikasi
-- ----------------------------
DROP TABLE IF EXISTS `saw_aplikasi`;
CREATE TABLE `saw_aplikasi` (
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `ram` varchar(100) NOT NULL,
  `rom` varchar(100) NOT NULL,
  `layar` varchar(100) NOT NULL,
  `kamerabl` varchar(100) NOT NULL,
  `kameradp` varchar(100) NOT NULL,
  `baterai` varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `koneksi` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_aplikasi
-- ----------------------------
INSERT INTO `saw_aplikasi` VALUES ('ASUS ZENFONE 8', '8', '128', 'Super AMOLED 120Hz', '64', '12', '4000', 'Snapdragon 888 5G (5 nm)', '5', '8088000');
INSERT INTO `saw_aplikasi` VALUES ('OPPO Reno7 5G', '8', '256', 'AMOLED 90Hz', '64', '32', '4500', 'MediaTek Dimensity 900 (6 nm)', '5', '6999000');
INSERT INTO `saw_aplikasi` VALUES ('POCO C40', '4', '64', 'IPS', '13', '5', '6000', 'MEDIATEK', '4', '1798000');
INSERT INTO `saw_aplikasi` VALUES ('POCO M5s', '4', '64', 'AMOLED', '64', '8', '5000', 'MediaTek Helio G95', '4', '2299000');
INSERT INTO `saw_aplikasi` VALUES ('Realme 9 4G', '8', '128', 'Super AMOLED 90Hz', '108', '16', '5000', 'Snapdragon 680 4G (6 nm)', '4', '3399000');
INSERT INTO `saw_aplikasi` VALUES ('realme GT Neo 3', '12', '256', 'AMOLED', '50', '16', '4500', 'MediaTek Dimensity 8100', '5', '7999000');
INSERT INTO `saw_aplikasi` VALUES ('Redmi 10 ', '4', '128', 'IPS', '50', '5', '5000', 'DIMENSITY 700 5G', '5', '2799000');
INSERT INTO `saw_aplikasi` VALUES ('REDMI NOTE 12 PRO', '6', '128', 'OLED', '108', '16', '5000', ' Snapdragon 778G 5G (6 nm)', '5', '3999000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy A04', '4', '64', 'PLS LCD, 60 Hz', '50', '50', '5000', 'MediaTek Helio P35', '4', '1699000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy A04e', '3', '32', 'HD+ PLS HD', '13', '50', '5000', 'MediaTek Helio P35', '4', '1299000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy A04s', '4', '64', 'PLS LCD, 90 Hz', '50', '50', '5000', 'Exynos 850', '4', '2099000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy A23 5G', '6', '128', ' PLS LCD, 120Hz', '50', '8', '5000', 'Snapdragon 695 5g', '5', '3999000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy A73 5G ', '8', '256', 'FHD+ Super AMOLED+ 120Hz', '108', '32', '5000', 'Snapdragon 778G 5G', '5', '7499000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy M32', '6', '128', 'Super AMOLED', '64', '20', '5000', 'MediaTek Helio G80', '4', '2699000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy S22 Ultra 5G', '12', '256', 'QHD+ Dynamic AMOLED 2X', '108', '40', '5000', 'Qualcomm Snapdragon 8 Gen 1', '5', '17499000');
INSERT INTO `saw_aplikasi` VALUES ('Samsung Galaxy Z Flip4 5G', '8', '256', 'FHD+ Dynamic AMOLED 2X Infinity Flex', '12', '10', '3700', 'Snapdragon 8+ Gen 1 (4nm)', '5', '14999000');
INSERT INTO `saw_aplikasi` VALUES ('vivo T1 5G', '4', '128', 'IPS LCD, 120Hz', '50', '16', '5000', 'Snapdragon 695 5G (6 nm)', '5', '2999000');
INSERT INTO `saw_aplikasi` VALUES ('vivo Y33T ', '8', '128', 'IPS LCD', '50', '16', '5000', 'Snapdragon 680 4G (6 nm)', '4', '3399000');
INSERT INTO `saw_aplikasi` VALUES ('XIAOMI OFFICIAL Xiaomi 12T', '8', '256', 'AMOLED', '108', '12', '5000', 'MediaTek Dimensity 8100-Ultra 5nm', '5', '6599000');

-- ----------------------------
-- Table structure for saw_kriteria
-- ----------------------------
DROP TABLE IF EXISTS `saw_kriteria`;
CREATE TABLE `saw_kriteria` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `ram` float NOT NULL,
  `rom` float NOT NULL,
  `layar` float NOT NULL,
  `kamerabl` float NOT NULL,
  `kameradp` float NOT NULL,
  `baterai` float NOT NULL,
  `processor` float NOT NULL,
  `koneksi` float NOT NULL,
  `harga` float NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_kriteria
-- ----------------------------
INSERT INTO `saw_kriteria` VALUES ('29', '0.11', '0.11', '0.11', '0.11', '0.11', '0.11', '0.11', '0.11', '0.11');

-- ----------------------------
-- Table structure for saw_penilaian
-- ----------------------------
DROP TABLE IF EXISTS `saw_penilaian`;
CREATE TABLE `saw_penilaian` (
  `nama` varchar(100) NOT NULL,
  `ram` float NOT NULL,
  `rom` float NOT NULL,
  `layar` float NOT NULL,
  `kamerabl` float NOT NULL,
  `kameradp` float NOT NULL,
  `baterai` float NOT NULL,
  `processor` float NOT NULL,
  `koneksi` float NOT NULL,
  `harga` float NOT NULL,
  PRIMARY KEY (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_penilaian
-- ----------------------------
INSERT INTO `saw_penilaian` VALUES ('ASUS ZENFONE 8', '5', '5', '5', '5', '5', '3', '5', '5', '5');
INSERT INTO `saw_penilaian` VALUES ('OPPO Reno7 5G', '4', '3', '4', '5', '3', '4', '4', '5', '4');
INSERT INTO `saw_penilaian` VALUES ('POCO C40', '3', '3', '3', '4', '3', '5', '4', '4', '2');
INSERT INTO `saw_penilaian` VALUES ('POCO M5s', '3', '3', '4', '4', '3', '3', '3', '3', '4');
INSERT INTO `saw_penilaian` VALUES ('Realme 9 4G', '4', '4', '5', '4', '4', '4', '3', '3', '4');
INSERT INTO `saw_penilaian` VALUES ('realme GT Neo 3', '5', '5', '4', '4', '4', '3', '4', '5', '4');
INSERT INTO `saw_penilaian` VALUES ('Redmi 10', '3', '4', '3', '3', '3', '3', '3', '4', '4');
INSERT INTO `saw_penilaian` VALUES ('REDMI NOTE 12 PRO', '3', '3', '3', '5', '4', '3', '3', '4', '4');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy A04', '3', '3', '3', '3', '3', '3', '2', '3', '3');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy A04e', '2', '3', '2', '2', '3', '3', '2', '3', '3');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy A04s', '3', '3', '2', '3', '3', '3', '2', '3', '5');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy A23 5G', '3', '3', '2', '3', '3', '3', '4', '4', '4');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy A73 5G', '4', '5', '5', '3', '4', '3', '5', '4', '5');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy M32', '3', '4', '3', '3', '3', '3', '2', '3', '4');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy S22 Ultra 5G', '4', '4', '5', '5', '5', '3', '5', '4', '5');
INSERT INTO `saw_penilaian` VALUES ('Samsung Galaxy Z Flip4 5G', '4', '5', '4', '4', '4', '1', '5', '4', '5');
INSERT INTO `saw_penilaian` VALUES ('vivo T1 5G', '3', '3', '3', '3', '3', '3', '3', '4', '4');
INSERT INTO `saw_penilaian` VALUES ('vivo Y33T', '4', '3', '3', '3', '3', '3', '4', '3', '4');
INSERT INTO `saw_penilaian` VALUES ('XIAOMI OFFICIAL Xiaomi 12T', '4', '4', '4', '3', '3', '3', '5', '4', '5');

-- ----------------------------
-- Table structure for saw_perankingan
-- ----------------------------
DROP TABLE IF EXISTS `saw_perankingan`;
CREATE TABLE `saw_perankingan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nilai_akhir` float NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saw_perankingan
-- ----------------------------
INSERT INTO `saw_perankingan` VALUES ('1', 'ASUS ZENFONE 8', '0.88');
INSERT INTO `saw_perankingan` VALUES ('2', 'OPPO Reno7 5G', '0.759');
INSERT INTO `saw_perankingan` VALUES ('3', 'POCO C40', '0.748');
INSERT INTO `saw_perankingan` VALUES ('4', 'POCO M5s', '0.627');
INSERT INTO `saw_perankingan` VALUES ('5', 'Realme 9 4G', '0.737');
INSERT INTO `saw_perankingan` VALUES ('6', 'realme GT Neo 3', '0.803');
INSERT INTO `saw_perankingan` VALUES ('7', 'Redmi 10', '0.627');
INSERT INTO `saw_perankingan` VALUES ('8', 'REDMI NOTE 12 PRO', '0.671');
INSERT INTO `saw_perankingan` VALUES ('9', 'Samsung Galaxy A04', '0.579');
INSERT INTO `saw_perankingan` VALUES ('10', 'Samsung Galaxy A04e', '0.513');
INSERT INTO `saw_perankingan` VALUES ('11', 'Samsung Galaxy A04s', '0.528');
INSERT INTO `saw_perankingan` VALUES ('12', 'Samsung Galaxy A23 5G', '0.605');
INSERT INTO `saw_perankingan` VALUES ('13', 'Samsung Galaxy A73 5G', '0.77');
INSERT INTO `saw_perankingan` VALUES ('14', 'Samsung Galaxy M32', '0.583');
INSERT INTO `saw_perankingan` VALUES ('15', 'Samsung Galaxy S22 Ultra 5G', '0.814');
INSERT INTO `saw_perankingan` VALUES ('16', 'Samsung Galaxy Z Flip4 5G', '0.726');
INSERT INTO `saw_perankingan` VALUES ('17', 'vivo T1 5G', '0.605');
INSERT INTO `saw_perankingan` VALUES ('18', 'vivo Y33T', '0.627');
INSERT INTO `saw_perankingan` VALUES ('19', 'XIAOMI OFFICIAL Xiaomi 12T', '0.704');
