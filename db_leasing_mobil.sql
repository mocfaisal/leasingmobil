/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100108
 Source Host           : localhost:3306
 Source Schema         : db_leasing_mobil

 Target Server Type    : MySQL
 Target Server Version : 100108
 File Encoding         : 65001

 Date: 22/12/2017 19:12:28
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bayar_cicilan
-- ----------------------------
DROP TABLE IF EXISTS `bayar_cicilan`;
CREATE TABLE `bayar_cicilan`  (
  `kode_cicilan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode_kredit` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_cicilan` date NULL DEFAULT NULL,
  `jml_cicilan` double NULL DEFAULT NULL,
  `cicilan_ke` int(11) NULL DEFAULT NULL,
  `cicilan_sisa_ke` int(11) NULL DEFAULT NULL,
  `cicilan_sisa_harga` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`kode_cicilan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bayar_cicilan
-- ----------------------------
INSERT INTO `bayar_cicilan` VALUES ('A201702001', 'K201702001', '2017-08-05', 12, 12, 0, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702002', 'K201702002', '2017-08-06', 24, 18, 6, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702003', 'K201702002', '2017-08-07', 24, 19, 5, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702004', 'K201502004', '2017-08-08', 12, 4, 8, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702005', 'K201502005', '2017-08-09', 24, 1, 23, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702006', 'K201502006', '2017-08-10', 36, 2, 34, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702007', 'K201502007', '2017-08-11', 12, 3, 9, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702008', 'K201502008', '2017-08-12', 24, 4, 20, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702009', 'K201502009', '2017-08-13', 36, 1, 35, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702010', 'K201502010', '2017-08-14', 12, 2, 10, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702011', 'K201502011', '2017-08-15', 24, 3, 21, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702012', 'K201502012', '2017-08-16', 36, 4, 32, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702013', 'K201502013', '2017-08-17', 12, 1, 11, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702014', 'K201502014', '2017-08-18', 24, 2, 22, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702015', 'K201502015', '2017-08-19', 36, 3, 33, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702016', 'K201502016', '2017-08-20', 12, 4, 8, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702017', 'K201502017', '2017-08-21', 12, 1, 11, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702018', 'K201502018', '2017-08-22', 24, 2, 22, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702019', 'K201502019', '2017-08-23', 36, 3, 33, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702020', 'K201502020', '2017-08-24', 12, 4, 8, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702021', 'K201502021', '2017-08-25', 24, 1, 23, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702022', 'K201502022', '2017-08-26', 36, 2, 34, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702023', 'K201502023', '2017-08-27', 12, 3, 9, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702024', 'K201502024', '2017-08-28', 24, 4, 20, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702025', 'K201502025', '2017-08-29', 36, 1, 35, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702026', 'K201502026', '2017-08-30', 12, 2, 10, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702027', 'K201502027', '2017-08-31', 24, 3, 21, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702028', 'K201502028', '2017-09-01', 36, 4, 32, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702029', 'K201502029', '2017-09-02', 12, 1, 11, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702030', 'K201502030', '2017-09-03', 24, 2, 22, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702031', 'K201502031', '2017-09-04', 36, 3, 33, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702032', 'K201502032', '2017-09-05', 12, 4, 8, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702033', 'K201502033', '2017-09-06', 12, 1, 11, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702034', 'K201502034', '2017-09-07', 24, 2, 22, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702035', 'K201502035', '2017-09-08', 36, 3, 33, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702036', 'K201502036', '2017-09-09', 12, 4, 8, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702037', 'K201502037', '2017-09-10', 24, 1, 23, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702038', 'K201502038', '2017-09-11', 36, 2, 34, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702039', 'K201502039', '2017-09-12', 12, 3, 9, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702040', 'K201502040', '2017-09-13', 24, 4, 20, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702041', 'K201502041', '2017-09-14', 36, 1, 35, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702042', 'K201502042', '2017-09-15', 12, 2, 10, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702043', 'K201502043', '2017-09-16', 24, 3, 21, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702044', 'K201502044', '2017-09-17', 36, 4, 32, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702045', 'K201502045', '2017-09-18', 12, 1, 11, 180000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702046', 'K201502046', '2017-09-19', 24, 2, 22, 200000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702047', 'K201502047', '2017-09-20', 36, 3, 33, 150000000);
INSERT INTO `bayar_cicilan` VALUES ('A201702048', 'K201502048', '2017-09-21', 12, 4, 8, 180000000);

-- ----------------------------
-- Table structure for beli_cash
-- ----------------------------
DROP TABLE IF EXISTS `beli_cash`;
CREATE TABLE `beli_cash`  (
  `kode_cash` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ktp_pembeli` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_mobil` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cash_tgl` date NULL DEFAULT NULL,
  `cash_bayar` double NULL DEFAULT NULL,
  PRIMARY KEY (`kode_cash`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of beli_cash
-- ----------------------------
INSERT INTO `beli_cash` VALUES (' C201602001', '32131000122', 'TOY2017002', '2016-02-03', 65000000);
INSERT INTO `beli_cash` VALUES ('C201602002', '32131000130', 'TOY2017010', '2016-02-03', 105000000);
INSERT INTO `beli_cash` VALUES ('C201602003\r\n', '32131000132', 'TOY2017012', '2016-02-03', 115000000);
INSERT INTO `beli_cash` VALUES ('C201602004', '32131000134', 'TOY2017014', '2016-02-03', 125000000);
INSERT INTO `beli_cash` VALUES ('C201602005', '32131000136', 'TOY2017016', '2016-02-03', 135000000);
INSERT INTO `beli_cash` VALUES ('C201602006', '32131000138', 'TOY2017018', '2016-02-03', 145000000);
INSERT INTO `beli_cash` VALUES ('C201602007', '32131000140', 'HOND2017001', '2016-02-03', 155000000);
INSERT INTO `beli_cash` VALUES ('C201602008', '32131000142', 'HOND2017003', '2016-02-03', 165000000);
INSERT INTO `beli_cash` VALUES ('C201602009', '32131000144', 'HOND2017005', '2016-02-03', 175000000);
INSERT INTO `beli_cash` VALUES ('C201602010', '32131000146', 'HOND2017007', '2016-02-03', 185000000);
INSERT INTO `beli_cash` VALUES ('C201602011', '32131000148', 'HOND2017009', '2016-02-03', 195000000);
INSERT INTO `beli_cash` VALUES ('C201602012', '32131000150', 'MITS2017001', '2016-02-03', 205000000);
INSERT INTO `beli_cash` VALUES ('C201602013', '32131000152', 'MITS2017003', '2016-02-03', 215000000);
INSERT INTO `beli_cash` VALUES ('C201602014', '32131000154', 'MITS2017005', '2016-02-03', 225000000);
INSERT INTO `beli_cash` VALUES ('C201602015', '32131000156', 'MITS2017007', '2016-02-03', 235000000);
INSERT INTO `beli_cash` VALUES ('C201602016', '32131000158', 'MITS2017009', '2016-02-03', 245000000);
INSERT INTO `beli_cash` VALUES ('C201602017', '32131000128', 'TOY2017008', '2016-02-03', 95000000);
INSERT INTO `beli_cash` VALUES ('C201602018', '32131000124', 'TOY2017004', '2016-02-03', 75000000);
INSERT INTO `beli_cash` VALUES ('C201602019', '32131000126', 'TOY2017006', '2016-02-03', 85000000);
INSERT INTO `beli_cash` VALUES ('C201702001', '32131000121', 'TOY2017001', '2017-02-03', 60000000);
INSERT INTO `beli_cash` VALUES ('C201702002', '32131000123', 'TOY2017003', '2017-02-03', 70000000);
INSERT INTO `beli_cash` VALUES ('C201702003', '32131000131', 'TOY2017011', '2017-02-03', 110000000);
INSERT INTO `beli_cash` VALUES ('C201702004', '32131000133', 'TOY2017013', '2017-02-03', 120000000);
INSERT INTO `beli_cash` VALUES ('C201702005', '32131000135', 'TOY2017015', '2017-02-03', 130000000);
INSERT INTO `beli_cash` VALUES ('C201702006', '32131000137', 'TOY2017017', '2017-02-03', 140000000);
INSERT INTO `beli_cash` VALUES ('C201702007', '32131000139', 'TOY2017019', '2017-02-03', 150000000);
INSERT INTO `beli_cash` VALUES ('C201702008', '32131000141', 'HOND2017002', '2017-02-03', 160000000);
INSERT INTO `beli_cash` VALUES ('C201702009', '32131000143', 'HOND2017004', '2017-02-03', 170000000);
INSERT INTO `beli_cash` VALUES ('C201702010', '32131000145', 'HOND2017006', '2017-02-03', 180000000);
INSERT INTO `beli_cash` VALUES ('C201702011', '32131000147', 'HOND2017008', '2017-02-03', 190000000);
INSERT INTO `beli_cash` VALUES ('C201702012', '32131000149', 'HOND2017010', '2017-02-03', 200000000);
INSERT INTO `beli_cash` VALUES ('C201702013', '32131000151', 'MITS2017002', '2017-02-03', 210000000);
INSERT INTO `beli_cash` VALUES ('C201702014', '32131000153', 'MITS2017004', '2017-02-03', 220000000);
INSERT INTO `beli_cash` VALUES ('C201702015', '32131000155', 'MITS2017006', '2017-02-03', 230000000);
INSERT INTO `beli_cash` VALUES ('C201702016', '32131000157', 'MITS2017008', '2017-02-03', 240000000);
INSERT INTO `beli_cash` VALUES ('C201702017', '32131000159', 'MITS2017010', '2017-02-03', 250000000);
INSERT INTO `beli_cash` VALUES ('C201702018', '32131000127', 'TOY2017007', '2017-02-03', 90000000);
INSERT INTO `beli_cash` VALUES ('C201702019', '32131000129', 'TOY2017009', '2017-02-03', 100000000);
INSERT INTO `beli_cash` VALUES ('C201709020', '3203072707990005', 'HOND2017001', '2017-09-24', 75);
INSERT INTO `beli_cash` VALUES ('C201710021', '3203072707990006', 'HOND2017001', '2017-10-01', 100000000);
INSERT INTO `beli_cash` VALUES ('C201710022', '3203072707990006', 'HOND2017001', '2017-10-01', 100000000);
INSERT INTO `beli_cash` VALUES ('C201710023', '3203072707990006', 'HOND2017001', '0000-00-00', 100000000);
INSERT INTO `beli_cash` VALUES ('C201710024', '3203072707990006', 'HOND2017001', '2017-10-01', 100000000);
INSERT INTO `beli_cash` VALUES ('C201711025', '3203072707990005', 'HOND2017001', '2017-11-01', 100000000);
INSERT INTO `beli_cash` VALUES ('C201711026', '3203072707990006', 'HOND2017003', '2017-11-01', 50000000);
INSERT INTO `beli_cash` VALUES ('C201711027', '3203072707990005', 'HOND2017003', '2017-11-01', 50000000);
INSERT INTO `beli_cash` VALUES ('C201711028', '3203072707990005', 'HOND2017002', '2017-11-01', 60000000);

-- ----------------------------
-- Table structure for kredit
-- ----------------------------
DROP TABLE IF EXISTS `kredit`;
CREATE TABLE `kredit`  (
  `kode_kredit` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ktp_pembeli` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_paket` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_mobil` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_kredit` date NULL DEFAULT NULL,
  `fotokopi_ktp` int(1) NULL DEFAULT NULL,
  `fotokopi_kk` int(1) NULL DEFAULT NULL,
  `fotokopi_slip_gaji` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`kode_kredit`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kredit
-- ----------------------------
INSERT INTO `kredit` VALUES ('K201502001', '5416541', 'PK2017001', 'HON2017001', '2017-01-01', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502002', '5416542', 'PK2017002', 'YAM2017001', '2017-02-02', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502003', '5416543', 'PK2017003', 'HON2017002', '2017-03-06', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502004', '5416544', 'PK2017004', 'YAM2017002', '2017-04-07', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502005', '5416545', 'PK2017005', 'HON2017003', '2017-05-09', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502006', '5416546', 'PK2017006', 'YAM2017003', '2017-06-10', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502007', '5416547', 'PK2017007', 'HON2017004', '2017-07-12', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502008', '5416548', 'PK2017008', 'YAM2017004', '2017-08-13', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502009', '5416549', 'PK2017009', 'HON2017005', '2017-09-14', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502010', '5416550', 'PK2017010', 'YAM2017005', '2017-10-16', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502011', '5416551', 'PK2017011', 'HON2017006', '2017-11-17', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502012', '5416552', 'PK2017012', 'YAM2017006', '2017-12-19', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502013', '5416553', 'PK2017013', 'HON2017007', '2017-01-20', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502014', '5416554', 'PK2017014', 'YAM2017007', '2017-02-21', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502015', '5416555', 'PK2017015', 'HON2017008', '2017-03-25', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502016', '5416556', 'PK2017016', 'YAM2017008', '2017-04-26', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502017', '5416557', 'PK2017017', 'HON2017009', '2017-05-28', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502018', '5416558', 'PK2017018', 'YAM2017009', '2017-06-29', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502019', '5416559', 'PK2017019', 'HON2017010', '2017-07-31', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502020', '5416560', 'PK2017020', 'YAM2017010', '2017-09-01', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502021', '5416561', 'PK2017021', 'HON2017011', '2017-10-03', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502022', '5416562', 'PK2017022', 'YAM2017011', '2017-11-04', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502023', '5416563', 'PK2017023', 'HON2017012', '2017-12-06', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502024', '5416564', 'PK2017024', 'YAM2017012', '2017-01-07', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502025', '5416565', 'PK2017025', 'HON2017013', '2017-02-08', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502026', '5416566', 'PK2017026', 'YAM2017013', '2017-03-12', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502027', '5416567', 'PK2017027', 'HON2017014', '2017-04-13', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502028', '5416568', 'PK2017028', 'YAM2017014', '2017-05-15', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502029', '5416569', 'PK2017029', 'HON2017015', '2017-06-16', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502030', '5416570', 'PK2017030', 'YAM2017015', '2017-07-18', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502031', '5416571', 'PK2017031', 'HON2017016', '2017-08-19', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502032', '5416572', 'PK2017032', 'YAM2017016', '2017-09-20', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502033', '5416573', 'PK2017033', 'HON2017017', '2017-10-22', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502034', '5416574', 'PK2017034', 'YAM2017017', '2017-11-23', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502035', '5416575', 'PK2017035', 'HON2017018', '2017-12-25', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502036', '5416576', 'PK2017036', 'YAM2017018', '2017-01-26', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502037', '5416577', 'PK2017037', 'HON2017019', '2017-02-27', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502038', '5416578', 'PK2017038', 'YAM2017019', '2017-03-31', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502039', '5416579', 'PK2017039', 'HON2017020', '2017-05-02', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502040', '5416580', 'PK2017040', 'YAM2017020', '2017-06-03', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502041', '5416581', 'PK2017041', 'HON2017021', '2017-07-05', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502042', '5416582', 'PK2017042', 'YAM2017021', '2017-08-06', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502043', '5416583', 'PK2017043', 'HON2017022', '2017-09-07', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502044', '5416584', 'PK2017044', 'YAM2017022', '2017-10-09', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502045', '5416585', 'PK2017045', 'HON2017023', '2017-11-10', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502046', '5416586', 'PK2017046', 'YAM2017023', '2017-12-12', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502047', '5416587', 'PK2017047', 'HON2017024', '2017-01-13', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201502048', '5416588', 'PK2017048', 'YAM2017024', '2017-02-14', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201702001', '30215', 'PK201710001', 'YAM2017024', '2017-09-24', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201702002', '3203072707990006', 'PK201710002', 'HOND2017001', '2017-10-01', NULL, NULL, NULL);
INSERT INTO `kredit` VALUES ('K201710002', '3203072707990006', 'PK201710041', 'HON2017001', '2017-10-01', 1, 1, 1);
INSERT INTO `kredit` VALUES ('K201710003', '3203072707990005', 'PK201710042', 'HON2017001', '2017-10-01', 1, 1, NULL);

-- ----------------------------
-- Table structure for mobil
-- ----------------------------
DROP TABLE IF EXISTS `mobil`;
CREATE TABLE `mobil`  (
  `kode_mobil` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `merk` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `warna` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `harga_mobil` double NULL DEFAULT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_mobil`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mobil
-- ----------------------------
INSERT INTO `mobil` VALUES ('HOND2017001', 'Honda', 'Automatic', 'Hitam', 100000000, '-');
INSERT INTO `mobil` VALUES ('HOND2017002', 'Honda', 'otomatis', 'hitam', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('HOND2017003', 'Honda', 'manual', 'merah', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('HOND2017004', 'Honda', 'otomatis', 'biru', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('HOND2017005', 'Honda', 'manual', 'kuning', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('HOND2017006', 'Honda', 'otomatis', 'hijau', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('HOND2017007', 'Honda', 'manual', 'hitam', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('HOND2017008', 'Honda', 'otomatis', 'merah', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('HOND2017009', 'Honda', 'manual', 'biru', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('HOND2017010', 'Honda', 'otomatis', 'kuning', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('MITS2017001', 'Mitsubishi', 'manual', 'hijau', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('MITS2017002', 'Mitsubishi', 'otomatis', 'hitam', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('MITS2017003', 'Mitsubishi', 'manual', 'merah', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('MITS2017004', 'Mitsubishi', 'otomatis', 'biru', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('MITS2017005', 'Mitsubishi', 'manual', 'kuning', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('MITS2017006', 'Mitsubishi', 'otomatis', 'hijau', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('MITS2017007', 'Mitsubishi', 'manual', 'hitam', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('MITS2017008', 'Mitsubishi', 'otomatis', 'merah', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('MITS2017009', 'Mitsubishi', 'manual', 'biru', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('MITS2017010', 'Mitsubishi', 'otomatis', 'kuning', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017001', 'Toyota', 'otomatis', 'hitam', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017002', 'Toyota', 'manual', 'merah', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017003', 'Toyota', 'otomatis', 'biru', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017004', 'Toyota', 'manual', 'kuning', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017005', 'Toyota', 'otomatis', 'hijau', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017006', 'Toyota', 'manual', 'hitam', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017007', 'Toyota', 'otomatis', 'merah', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017008', 'Toyota', 'manual', 'biru', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017009', 'Toyota', 'otomatis', 'kuning', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017010', 'Toyota', 'manual', 'hijau', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017011', 'Toyota', 'otomatis', 'hitam', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017012', 'Toyota', 'manual', 'merah', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017013', 'Toyota', 'otomatis', 'biru', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017014', 'Toyota', 'manual', 'kuning', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017015', 'Toyota', 'otomatis', 'hijau', 70000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017016', 'Toyota', 'manual', 'hitam', 75000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017017', 'Toyota', 'otomatis', 'merah', 60000000, 'ada');
INSERT INTO `mobil` VALUES ('TOY2017018', 'Toyota', 'manual', 'biru', 50000000, 'tidak ada');
INSERT INTO `mobil` VALUES ('TOY2017019', 'Toyota', 'otomatis', 'kuning', 70000000, 'ada');

-- ----------------------------
-- Table structure for paket_kredit
-- ----------------------------
DROP TABLE IF EXISTS `paket_kredit`;
CREATE TABLE `paket_kredit`  (
  `kode_paket` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `harga_paket` double NULL DEFAULT NULL,
  `uang_muka` double NULL DEFAULT NULL,
  `paket_jml_cicilan` int(11) NULL DEFAULT NULL,
  `bunga` double NULL DEFAULT NULL,
  `nilai_cicilan` double NULL DEFAULT NULL,
  PRIMARY KEY (`kode_paket`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of paket_kredit
-- ----------------------------
INSERT INTO `paket_kredit` VALUES ('PK201710001', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710002', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710003', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710004', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710005', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710006', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710007', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710008', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710009', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710010', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710011', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710012', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710013', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710014', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710015', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710016', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710017', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710018', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710019', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710020', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710021', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710022', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710023', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710024', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710025', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710026', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710027', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710028', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710029', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710030', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710031', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710032', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710033', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710034', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710035', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710036', 75000000, 35000000, 12, 1, 3366667);
INSERT INTO `paket_kredit` VALUES ('PK201710037', 60000000, 10000000, 12, 1, 4208333);
INSERT INTO `paket_kredit` VALUES ('PK201710038', 50000000, 20000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710039', 70000000, 30000000, 24, 1, 1683333);
INSERT INTO `paket_kredit` VALUES ('PK201710040', 75000000, 60000000, 24, 9, 2950000);
INSERT INTO `paket_kredit` VALUES ('PK201710041', 100000000, 80000000, 36, 10, 2888889);
INSERT INTO `paket_kredit` VALUES ('PK201710042', 100000000, 80000000, 12, 8, 7200000);

-- ----------------------------
-- Table structure for pembeli
-- ----------------------------
DROP TABLE IF EXISTS `pembeli`;
CREATE TABLE `pembeli`  (
  `ktp_pembeli` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_pembeli` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat_pembeli` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telpon_pembeli` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ktp_pembeli`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pembeli
-- ----------------------------
INSERT INTO `pembeli` VALUES ('3203072707990005', 'Nanda Rifaturohman', 'Sadewata', '087826512651');
INSERT INTO `pembeli` VALUES ('3203072707990006', 'Mochamad Faisal', 'Jln.Gunung Lanjung', '087720312902');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `level` int(1) NULL DEFAULT NULL,
  `last_access` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin', 2, NULL);
INSERT INTO `users` VALUES (21, 'faisal', 'faisal', 2, NULL);

-- ----------------------------
-- View structure for all_table
-- ----------------------------
DROP VIEW IF EXISTS `all_table`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `all_table` AS select `pm`.`nama_pembeli` AS `nama_pembeli`,`pm`.`alamat_pembeli` AS `alamat_pembeli`,`m`.`kode_mobil` AS `kode_mobil`,`m`.`merk` AS `merk`,`m`.`harga_mobil` AS `harga_mobil`,`pk`.`nilai_cicilan` AS `nilai_cicilan`,`bc`.`jml_cicilan` AS `jml_cicilan`,`bc`.`cicilan_sisa_ke` AS `cicilan_sisa_ke`,`bc`.`cicilan_sisa_harga` AS `cicilan_sisa_harga`,if((`bc`.`cicilan_sisa_ke` = 0),'Lunas','Tidak Lunas') AS `STATUS` from ((((`bayar_cicilan` `bc` join `kredit` `kr` on((`bc`.`kode_kredit` = `kr`.`kode_kredit`))) join `paket_kredit` `pk` on((`kr`.`kode_paket` = `pk`.`kode_paket`))) join `pembeli` `pm` on((`kr`.`ktp_pembeli` = `pm`.`ktp_pembeli`))) join `mobil` `m` on((`kr`.`kode_mobil` = `m`.`kode_mobil`))) where (`kr`.`kode_kredit` = NULL) ;

-- ----------------------------
-- View structure for bayar_lunas
-- ----------------------------
DROP VIEW IF EXISTS `bayar_lunas`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `bayar_lunas` AS select distinct `k`.`kode_kredit` AS `kode_kredit`,`pk`.`paket_jml_cicilan` AS `paket_jml_cicilan`,`pk`.`harga_paket` AS `harga_paket`,`pk`.`nilai_cicilan` AS `nilai_cicilan`,if((`bc`.`cicilan_sisa_ke` = 0),'Lunas','Tidak Lunas') AS `status_kredit` from ((`paket_kredit` `pk` join `kredit` `k` on((`pk`.`kode_paket` = `k`.`kode_paket`))) left join `bayar_cicilan` `bc` on((`k`.`kode_kredit` = `bc`.`kode_kredit`))) group by `k`.`kode_kredit` desc order by `bc`.`cicilan_sisa_ke` desc ;

-- ----------------------------
-- View structure for harga_mobil
-- ----------------------------
DROP VIEW IF EXISTS `harga_mobil`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `harga_mobil` AS select `m`.`harga_mobil` AS `harga_mobil` from ((`bayar_cicilan` `bc` join `kredit` `kr` on((`bc`.`kode_kredit` = `kr`.`kode_kredit`))) join `mobil` `m` on((`kr`.`kode_mobil` = `m`.`kode_mobil`))) ;

-- ----------------------------
-- View structure for jml_cicilan
-- ----------------------------
DROP VIEW IF EXISTS `jml_cicilan`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `jml_cicilan` AS select `bc`.`jml_cicilan` AS `jml_cicilan` from (((`bayar_cicilan` `bc` join `kredit` `kr` on((`bc`.`kode_kredit` = `kr`.`kode_kredit`))) join `paket_kredit` `pk` on((`kr`.`kode_paket` = `pk`.`kode_paket`))) join `mobil` `m` on((`kr`.`kode_mobil` = `m`.`kode_mobil`))) ;

-- ----------------------------
-- View structure for nilai_cicilan
-- ----------------------------
DROP VIEW IF EXISTS `nilai_cicilan`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `nilai_cicilan` AS select `pk`.`nilai_cicilan` AS `nilai_cicilan` from ((`bayar_cicilan` `bc` join `kredit` `kr` on((`bc`.`kode_kredit` = `kr`.`kode_kredit`))) join `paket_kredit` `pk` on((`kr`.`kode_paket` = `pk`.`kode_paket`))) ;

-- ----------------------------
-- View structure for v_tgltransaksi
-- ----------------------------
DROP VIEW IF EXISTS `v_tgltransaksi`;
CREATE ALGORITHM = UNDEFINED DEFINER = `root`@`localhost` SQL SECURITY DEFINER VIEW `v_tgltransaksi` AS select `bc`.`cash_tgl` AS `cash_tgl`,`kr`.`tgl_kredit` AS `tgl_kredit`,`bc`.`kode_cash` AS `kode_cash`,`kr`.`kode_kredit` AS `kode_kredit` from (`beli_cash` `bc` join `kredit` `kr`) ;

SET FOREIGN_KEY_CHECKS = 1;
