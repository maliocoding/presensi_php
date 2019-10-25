/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : presensi_stmik

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 25/10/2019 13:12:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for absen
-- ----------------------------
DROP TABLE IF EXISTS `absen`;
CREATE TABLE `absen`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npm` int(255) DEFAULT NULL,
  `matkul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jam_masuk` time(0) DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jam_pulang` time(0) DEFAULT NULL,
  `tanggal` datetime(0) DEFAULT NULL,
  `dosen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `telat` int(11) DEFAULT NULL,
  `kelas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `ta` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of absen
-- ----------------------------
INSERT INTO `absen` VALUES (1, 1842901, 'IF303', '10:23:10', 'Julio', '10:23:25', '2019-10-18 00:00:00', 'Dr. Tedjo Darmanto', 0, 0, 'Karyawan', '2019/2020');
INSERT INTO `absen` VALUES (2, 1842901, 'IF303', NULL, '', NULL, '2019-10-18 00:00:00', 'Dr. Tedjo Darmanto', 3, NULL, 'Karyawan', '2019/2020');
INSERT INTO `absen` VALUES (3, 1842901, 'IF303', '10:38:54', 'Julio', NULL, '2019-10-19 00:00:00', 'Dr. Tedjo Darmanto', 0, 0, 'Karyawan', '2019/2020');
INSERT INTO `absen` VALUES (4, 1842901, 'IF-18205', '19:46:11', 'Julio', NULL, '2019-10-22 00:00:00', 'udin', 1, 436, 'Karyawan', '2019/2020');
INSERT INTO `absen` VALUES (5, 1842901, 'IF-18205', '00:02:05', 'Julio', '00:02:28', '2019-10-23 00:00:00', 'udin', 1, 748, 'Karyawan', '2019/2020');

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_dosen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `nama_dosen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `user` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `pass` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `tes` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jenis` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dosen
-- ----------------------------
INSERT INTO `dosen` VALUES (1, NULL, 'Prof Dr. Hj. Diah Kusumastuti, M.Si', 'diah', 'f499263a253447dd5cb68dafb9f13235', 'dosen1', 'dosen');
INSERT INTO `dosen` VALUES (2, NULL, 'Dr. Tedjo Darmanto', 'tedjo', 'ac41c4e0e6ef7ac51f0c8f3895f82ce5', 'dosen2', 'dosen');
INSERT INTO `dosen` VALUES (3, NULL, 'Dr. Dany Eka Saputra', 'dany', '1192feff42fadff1d7e0aa1210fed1e3', 'dosen3', 'dosen');
INSERT INTO `dosen` VALUES (4, NULL, 'Rudi Kurniawan, S.Kom, M.T', 'rudi', 'd3a0a76dd6fe8e4935d0f3bcc8b9ca63', 'dosen4', 'dosen');
INSERT INTO `dosen` VALUES (5, NULL, 'Christina Juliane, M.T ', 'ane', '9cc22c7f0fbb92caa139ded4f21ff8c8', 'dosen5', 'dosen');
INSERT INTO `dosen` VALUES (6, NULL, 'Khoirida Aelani, M.T', 'khoirida', 'f69a646c8a381ffaed5bebf07f54140f', 'dosen6', 'dosen');
INSERT INTO `dosen` VALUES (7, NULL, 'Yuyun Tresnawati, M.T', 'yuyun', '18c9e8bd420a5ef7ae7e1bcf1f99c821', 'dosen7', 'dosen');
INSERT INTO `dosen` VALUES (8, NULL, 'Rakhmayudhi,  M.Kom.', 'rakhmayudi', '60d798e2f838f76aff3d26f5bd3786c6', 'dosen8', 'dosen');
INSERT INTO `dosen` VALUES (9, NULL, 'Sulistyo Edi, Ir., M.T.', 'sulistyo', 'a213de416c8555d633fef4b216b7ede5', 'dosen9', 'dosen');
INSERT INTO `dosen` VALUES (10, NULL, 'Sapdo Utomo, S.S.T., M.T', 'sapdo', '1d4ffd7dfc3557693533b14d54327f46', 'dosen10', 'dosen');
INSERT INTO `dosen` VALUES (11, NULL, 'Tati Suprapti,  M.T.', 'tati', '2cf10dca06a03b19936c504fa9372e6b', 'dosen11', 'dosen');
INSERT INTO `dosen` VALUES (12, NULL, 'Okyza Maherdy Prabowo, M.T', 'okyza', 'e3c164233cc2d3813b8e109a83ada31c', 'dosen12', 'dosen');
INSERT INTO `dosen` VALUES (13, NULL, 'Fresa Dwi, MBA', 'fresa', 'b7f67720bb20c559c0b8e2322eae6b51', 'dosen13', 'dosen');
INSERT INTO `dosen` VALUES (14, NULL, 'Hermawaty, M.Kom', 'hermawaty', '45347f1d26e464620d21785b62236221', 'dosen14', 'dosen');
INSERT INTO `dosen` VALUES (15, NULL, 'Muhammad Abdul Mujib, M.T.', 'mujib', '622502d772dcd7dfa87682e1323e7c88', 'dosen15', 'dosen');
INSERT INTO `dosen` VALUES (16, NULL, 'Ridi Satrio Adi, M.Kom', 'ridi', '8e2da6434223c601392aa6eb09bc9991', 'dosen16', 'dosen');
INSERT INTO `dosen` VALUES (17, NULL, 'Suhendri, M.Kom', 'suhendri', 'e75bf4e015d73cbfd5bfcc9ab1196181', 'dosen17', 'dosen');
INSERT INTO `dosen` VALUES (18, NULL, 'Umi Haryati, M.T', 'umi', '5e26ab04587b5097e6e58a083b600ab2', 'dosen18', 'dosen');
INSERT INTO `dosen` VALUES (19, NULL, 'Tuti Hartati ,M.T', 'tuti', '8d59ce74225e5cebd9cfc3df6e3d0b7b', 'dosen19', 'dosen');
INSERT INTO `dosen` VALUES (20, NULL, 'Rizal Dzulkarnaen, M. Kom.', 'rizal', 'fff648a34ab5c5d18832e6e43ec7a167', 'dosen20', 'dosen');
INSERT INTO `dosen` VALUES (21, NULL, 'Alexandria C.H, S.I.Kom', 'alex', 'f5ae0e349f83ccc607c079c38a7d5861', 'dosen21', 'dosen');
INSERT INTO `dosen` VALUES (22, NULL, 'Dewi Pangestu, S.H', 'dewi', '551d11ca53defb42ebb508e11c600fe7', 'dosen22', 'dosen');
INSERT INTO `dosen` VALUES (23, NULL, 'Tendi Rustendi, S.Si, M.T.', 'tendi', '38407e26e5bd0b0d8fd8c9e899e1a6cb', 'dosen23', 'dosen');
INSERT INTO `dosen` VALUES (24, NULL, 'Hanhan Husna Firmansyah, M.T', 'hanhan', '8105fcf8408b53a7d1d23d2d711857a3', 'dosen24', 'dosen');
INSERT INTO `dosen` VALUES (25, NULL, 'Petugas Baak', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'BAAK');

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npm` int(255) NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `tipe` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `imei` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jurusan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`, `npm`) USING BTREE,
  UNIQUE INDEX `npm`(`npm`) USING BTREE,
  INDEX `index_user`(`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES (1, 1842901, 'Julio', '202cb962ac59075b964b07152d234b70', NULL, '863147041324042', 'Teknik Informatika S1');

-- ----------------------------
-- Table structure for matkul
-- ----------------------------
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `matkul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 125 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of matkul
-- ----------------------------
INSERT INTO `matkul` VALUES (1, 'IF-18104', 'Pengantar Teknologi Informasi');
INSERT INTO `matkul` VALUES (2, 'IF-18502', 'Statistik Komputasi');
INSERT INTO `matkul` VALUES (3, 'IF-18101', 'Bahasa Inggris I (Reading+Speaking)');
INSERT INTO `matkul` VALUES (4, 'IF-18102', 'Pancasila');
INSERT INTO `matkul` VALUES (5, 'IF-18103', 'Dasar Manajemen Umum');
INSERT INTO `matkul` VALUES (6, 'IF-18105', 'PPA I (Advanced Office)');
INSERT INTO `matkul` VALUES (7, 'IF-18106', 'Algoritma & Struktur Data I');
INSERT INTO `matkul` VALUES (8, 'IF-18107', 'Logika Informatika');
INSERT INTO `matkul` VALUES (9, 'IF-18108', 'Pemrograman I (Java)');
INSERT INTO `matkul` VALUES (10, 'IF-18201', 'Bahasa Inggris II  (Presentation)');
INSERT INTO `matkul` VALUES (11, 'IF-18202', 'Leadership & Communication Skill');
INSERT INTO `matkul` VALUES (12, 'IF-18203', 'Sistem Basis Data');
INSERT INTO `matkul` VALUES (13, 'IF-18204', 'PPA II (SQL)');
INSERT INTO `matkul` VALUES (14, 'IF-18205', 'Arsitektur Komputer');
INSERT INTO `matkul` VALUES (15, 'IF-18206', 'Sistem Operasi');
INSERT INTO `matkul` VALUES (16, 'IF-18207', 'Pemrograman Web I');
INSERT INTO `matkul` VALUES (17, 'IF-18301', 'Bahasa Inggris III (Academic Writing)');
INSERT INTO `matkul` VALUES (18, 'IF-18302', 'Perancangan Basis Data');
INSERT INTO `matkul` VALUES (19, 'IF-18303', 'Mobile Development');
INSERT INTO `matkul` VALUES (20, 'IF-18304', 'Pemrograman Web II');
INSERT INTO `matkul` VALUES (21, 'IF-18305', 'Rekayasa Perangkat Lunak');
INSERT INTO `matkul` VALUES (22, 'IF-18306', 'Komunikasi Data');
INSERT INTO `matkul` VALUES (23, 'IF-18307', 'Aplikasi Multimedia');
INSERT INTO `matkul` VALUES (24, 'IF-18401', 'Agama');
INSERT INTO `matkul` VALUES (25, 'IF-18402', 'Matematika Diskrit');
INSERT INTO `matkul` VALUES (26, 'IF-18403', 'Jaringan Komputer Lanjut');
INSERT INTO `matkul` VALUES (27, 'IF-18404', 'Analisis dan Perancangan B. Objek I');
INSERT INTO `matkul` VALUES (28, 'IF-18405', 'Distributed Computing');
INSERT INTO `matkul` VALUES (29, 'IF-18406', 'Uji Kualitas Perangkat Lunak');
INSERT INTO `matkul` VALUES (30, 'IF-18407', 'Design Pattern');
INSERT INTO `matkul` VALUES (31, 'IF-18408', 'Kerja Praktek');
INSERT INTO `matkul` VALUES (32, 'IF-18501', 'Etika Profesi');
INSERT INTO `matkul` VALUES (33, 'IF-18503', 'Metode Penelitian & Tata Tulis Ilmiah');
INSERT INTO `matkul` VALUES (34, 'IF-18504', 'Interaksi Manusia dan Komputer');
INSERT INTO `matkul` VALUES (35, 'IF-18505', 'Keamanan Jaringan');
INSERT INTO `matkul` VALUES (36, 'IF-18506', 'Cloud Computing');
INSERT INTO `matkul` VALUES (37, 'IF-18507', 'Analisis dan Perancangan B. Objek II');
INSERT INTO `matkul` VALUES (38, 'IF-18508', 'Knowledge Representation');
INSERT INTO `matkul` VALUES (39, 'IF-18509', 'Tugas Akhir I');
INSERT INTO `matkul` VALUES (40, 'IF-18121', 'Informatika Telekomunikasi');
INSERT INTO `matkul` VALUES (41, 'IF-18122', 'Algoritma & Struktur Data II');
INSERT INTO `matkul` VALUES (42, 'IF-18123', 'Pemrograman II (Java Object Oriented)');
INSERT INTO `matkul` VALUES (43, 'IF-18341', 'Aljabar Linier (Vektor & Matriks)');
INSERT INTO `matkul` VALUES (44, 'IF-18342', 'Teori Bahasa dan Otomata');
INSERT INTO `matkul` VALUES (45, 'IF-18343', 'Jaringan Komputer Dasar');
INSERT INTO `matkul` VALUES (46, 'IF-18344', 'Sistem Multimedia');
INSERT INTO `matkul` VALUES (47, 'IF-18561', 'Metode Numerik');
INSERT INTO `matkul` VALUES (48, 'IF-18562', 'Pemrograman Game');
INSERT INTO `matkul` VALUES (49, 'IF-18563', 'Kriptografi');
INSERT INTO `matkul` VALUES (50, 'IF-18564', 'Teknik Kompilasi');
INSERT INTO `matkul` VALUES (51, 'IF-18601', 'Entrepreneurship');
INSERT INTO `matkul` VALUES (52, 'IF-18602', 'Manajemen Proyek Perangkat Lunak');
INSERT INTO `matkul` VALUES (53, 'IF-18603', 'Pemrograman Game Lanjut');
INSERT INTO `matkul` VALUES (54, 'IF-18604', 'Data Warehouse & Data Mining');
INSERT INTO `matkul` VALUES (55, 'IF-18605', 'Sistem Cerdas (Intelligent System)');
INSERT INTO `matkul` VALUES (56, 'IF-18606', 'Geographic Information System (GIS)');
INSERT INTO `matkul` VALUES (57, 'IF-18607', 'Grafika Komputer *');
INSERT INTO `matkul` VALUES (58, 'IF-18608', 'Pengolahan Citra *');
INSERT INTO `matkul` VALUES (59, 'IF-18609', 'Jaringan Syaraf Tiruan *');
INSERT INTO `matkul` VALUES (60, 'IF-18610', 'Pemrograman Script (HTML5) *');
INSERT INTO `matkul` VALUES (61, 'IF-18611', 'Pemrograman Visual *');
INSERT INTO `matkul` VALUES (62, 'IF-18612', 'Tugas Akhir II');
INSERT INTO `matkul` VALUES (63, 'IF101', 'Logika Matematika *');
INSERT INTO `matkul` VALUES (64, 'IF102', 'Algoritma & Struktur Data 1 *');
INSERT INTO `matkul` VALUES (65, 'IF103', 'Dasar Pemrograman 1 *');
INSERT INTO `matkul` VALUES (66, 'IF104', 'Penyelesaian Masalah Algoritmik *');
INSERT INTO `matkul` VALUES (67, 'IF105', 'Pengantar Teknologi Informasi *');
INSERT INTO `matkul` VALUES (68, 'IF106', 'Teknologi Web *');
INSERT INTO `matkul` VALUES (69, 'KU101', 'Bahasa Inggris: Reading & Writing *');
INSERT INTO `matkul` VALUES (70, 'KU102', 'Pendidikan Kewarganegaraan *');
INSERT INTO `matkul` VALUES (71, 'IF201', 'Algoritma & Struktur Data 2 *');
INSERT INTO `matkul` VALUES (72, 'IF202', 'Dasar Pemrograman 2 *');
INSERT INTO `matkul` VALUES (73, 'IF203', 'Dasar Basis Data *');
INSERT INTO `matkul` VALUES (74, 'IF204', 'Matematika Diskrit *');
INSERT INTO `matkul` VALUES (75, 'IF205', 'Sistem Operasi *');
INSERT INTO `matkul` VALUES (76, 'KU201', 'Bahasa Inggris: Presentation *');
INSERT INTO `matkul` VALUES (77, 'KU202', 'Agama 1 *');
INSERT INTO `matkul` VALUES (78, 'IF301', 'Aljabar Linier *');
INSERT INTO `matkul` VALUES (79, 'IF302', 'Probabilitas & Statistika *');
INSERT INTO `matkul` VALUES (80, 'IF303', 'Paradigma Pemrograman (OO & Fungsional) *');
INSERT INTO `matkul` VALUES (81, 'IF304', 'Rekayasa Perangkat Lunak *');
INSERT INTO `matkul` VALUES (82, 'IF305', 'Jaringan Komputer Dasar *');
INSERT INTO `matkul` VALUES (83, 'IF306', 'Desain Web *');
INSERT INTO `matkul` VALUES (84, 'KU301', 'Bahasa Inggris: Conversation *');
INSERT INTO `matkul` VALUES (85, 'IF401', 'Rekayasa Protokol *');
INSERT INTO `matkul` VALUES (86, 'IF402', 'Pemrograman Basis Data *');
INSERT INTO `matkul` VALUES (87, 'IF403', 'Kriptografi *');
INSERT INTO `matkul` VALUES (88, 'IF404', 'Komputasi Terdistribusi *');
INSERT INTO `matkul` VALUES (89, 'IF405', 'Kecerdasan Buatan *');
INSERT INTO `matkul` VALUES (90, 'IF406', 'Pemrograman Mobile *');
INSERT INTO `matkul` VALUES (91, 'KU401', 'Agama 2 *');
INSERT INTO `matkul` VALUES (92, 'IF501', 'Dokumentasi Sistem *');
INSERT INTO `matkul` VALUES (93, 'IF502', 'Sistem Logging *');
INSERT INTO `matkul` VALUES (94, 'IF503', 'Pengujian Perangkat Lunak *');
INSERT INTO `matkul` VALUES (95, 'IF504', 'Antarmuka Pemrograman Aplikasi (API) *');
INSERT INTO `matkul` VALUES (96, 'KU501', 'Tata Tulis Karya Ilmiah *');
INSERT INTO `matkul` VALUES (97, 'IF511', 'Jaringan Komputer Lanjut *');
INSERT INTO `matkul` VALUES (98, 'IF512', 'Pemrograman Serial Bus *');
INSERT INTO `matkul` VALUES (99, 'IF513', 'Konsep IoT *');
INSERT INTO `matkul` VALUES (100, 'IF521', 'Kriptografi 2 *');
INSERT INTO `matkul` VALUES (101, 'IF522', 'Basis Data Lanjut *');
INSERT INTO `matkul` VALUES (102, 'IF523', 'Identitas Digital *');
INSERT INTO `matkul` VALUES (103, 'IF601', 'Kerja Praktek *');
INSERT INTO `matkul` VALUES (104, 'KU601', 'Kewirausahaan 1 *');
INSERT INTO `matkul` VALUES (105, 'IF611', 'Jaringan Ad hoc *');
INSERT INTO `matkul` VALUES (106, 'IF612', 'Sinyal Digital *');
INSERT INTO `matkul` VALUES (107, 'IF613', 'Dokumentasi API *');
INSERT INTO `matkul` VALUES (108, 'IF614', 'Pemrograman Mikrokontroler/Embedded *');
INSERT INTO `matkul` VALUES (109, 'IF615', 'Layanan Web *');
INSERT INTO `matkul` VALUES (110, 'IF621', 'Teknologi Kartu Elektronik *');
INSERT INTO `matkul` VALUES (111, 'IF622', 'Keamanan Data dan Informasi *');
INSERT INTO `matkul` VALUES (112, 'IF623', 'Aplikasi Teknologi Finansial *');
INSERT INTO `matkul` VALUES (113, 'IF624', 'Interaksi Manusia dan Komputer *');
INSERT INTO `matkul` VALUES (114, 'IF625', 'Analisis Data *');
INSERT INTO `matkul` VALUES (115, 'IF626', 'Rantai Blok Data *');
INSERT INTO `matkul` VALUES (116, 'IF701', 'Tugas Akhir 1 *');
INSERT INTO `matkul` VALUES (117, 'IF702', 'Pengujian dan Pemecahan Masalah (Troubleshooting) *');
INSERT INTO `matkul` VALUES (118, 'IF703', 'Riset Teknologi Informasi *');
INSERT INTO `matkul` VALUES (119, 'KU701', 'Kewirausahaan 2 *');
INSERT INTO `matkul` VALUES (120, 'KU702', 'Teknik Presentasi *');
INSERT INTO `matkul` VALUES (121, 'IF801', 'Tugas Akhir 2 *');
INSERT INTO `matkul` VALUES (122, 'IF802', 'Pengembangan Berkelanjutan *');
INSERT INTO `matkul` VALUES (123, 'IF803', 'Kontainer *');
INSERT INTO `matkul` VALUES (124, 'KU801', 'Etika Profesi *');

-- ----------------------------
-- Table structure for status_ruangan
-- ----------------------------
DROP TABLE IF EXISTS `status_ruangan`;
CREATE TABLE `status_ruangan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dosen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `ruangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `matkul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jam_masuk` time(0) DEFAULT NULL,
  `jam_pulang` time(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of status_ruangan
-- ----------------------------
INSERT INTO `status_ruangan` VALUES (1, NULL, 1, '1', 'APBO 1', NULL, NULL);
INSERT INTO `status_ruangan` VALUES (2, NULL, 0, '2', NULL, NULL, NULL);
INSERT INTO `status_ruangan` VALUES (3, NULL, 0, '3', NULL, NULL, NULL);
INSERT INTO `status_ruangan` VALUES (4, NULL, 0, 'lab1', NULL, NULL, NULL);
INSERT INTO `status_ruangan` VALUES (5, NULL, 0, 'lab2', NULL, NULL, NULL);
INSERT INTO `status_ruangan` VALUES (6, NULL, 0, 'lab3', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
