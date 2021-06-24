-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2020 at 10:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gispengaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `idk` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id_desa`, `idk`, `kecamatan`, `desa`, `longitude`, `latitude`) VALUES
(1, 1, 'KALIWUNGU', 'BAKALANKRAPYAK', '110.837545', '-6.794012'),
(2, 1, 'KALIWUNGU', 'BANGET', '110.776778', '-6.791361'),
(3, 1, 'KALIWUNGU', 'BLIMBING KIDUL', '110.765222', '-6.782722'),
(4, 1, 'KALIWUNGU', 'GAMONG', '110.776691', '-6.783796'),
(5, 1, 'KALIWUNGU', 'GARUNG KIDUL', '110.797361', '-6.806528'),
(6, 1, 'KALIWUNGU', 'GARUNG LOR', '110.814306', '-6.797528'),
(7, 1, 'KALIWUNGU', 'KALIWUNGU', '110.795639', '-6.772222'),
(8, 1, 'KALIWUNGU', 'SETROKALANGAN', '110.783889', '-6.807361'),
(9, 1, 'KALIWUNGU', 'KARANGAMPEL', '110.812028', '-6.789583'),
(10, 1, 'KALIWUNGU', 'SIDOREKSO', '110.770528', '-6.772639'),
(11, 1, 'KALIWUNGU', 'PAPRINGAN', '110.781667', '-6.763833'),
(12, 1, 'KALIWUNGU', 'KEDUNGDOWO', '110.792583', '-6.795028'),
(13, 1, 'KALIWUNGU', 'MIJEN', '110.797611', '-6.793806'),
(14, 1, 'KALIWUNGU', 'PRAMBATAN KIDUL', '110.824472', '-6.801167'),
(15, 1, 'KALIWUNGU', 'PRAMBATAN LOR', '110.81875', '-6.799306'),
(16, 2, 'KOTA KUDUS', 'PANJUNAN', '110.837833', '-6.811972'),
(17, 2, 'KOTA KUDUS', 'BARONGAN', '110.845611', '-6.802944'),
(18, 2, 'KOTA KUDUS', 'BURIKAN', '110.851139', '-6.799611'),
(19, 2, 'KOTA KUDUS', 'DAMARAN', '110.827889', '-6.801417'),
(20, 2, 'KOTA KUDUS', 'DEMAAN', '110.839806', '-6.805889'),
(21, 2, 'KOTA KUDUS', 'DEMANGAN', '110.834167', '-6.809889'),
(22, 2, 'KOTA KUDUS', 'GLANTENGAN', '110.843833', '-6.801528'),
(23, 2, 'KOTA KUDUS', 'JANGGALAN', '110.829667', '-6.806833'),
(24, 2, 'KOTA KUDUS', 'KAJEKSAN', '110.836583', '-6.801306'),
(25, 2, 'KOTA KUDUS', 'KALIPUTU', '110.850889', '-6.7955'),
(26, 2, 'KOTA KUDUS', 'KAUMAN', '110.832361', '-6.803472'),
(27, 2, 'KOTA KUDUS', 'KERJASAN', '110.831417', '-6.801306'),
(28, 2, 'KOTA KUDUS', 'KRAMAT', '110.847028', '-6.80825'),
(29, 2, 'KOTA KUDUS', 'KRANDON', '110.840333', '-6.793778'),
(30, 2, 'KOTA KUDUS', 'LANGGARDALEM', '110.8325', '-6.803889'),
(31, 2, 'KOTA KUDUS', 'MLATI KIDUL', '110.853083', '-6.814528'),
(32, 2, 'KOTA KUDUS', 'MLATI LOR', '110.853333', '-6.809361'),
(33, 2, 'KOTA KUDUS', 'MLATI NOROWITO', '110.859583', '-6.809472'),
(34, 2, 'KOTA KUDUS', 'NGANGUK', '110.85175', '-6.806639'),
(35, 2, 'KOTA KUDUS', 'WERGUKULON', '0.1', '0.1'),
(36, 2, 'KOTA KUDUS', 'WERGUWETAN', '110.848639', '-6.816278'),
(37, 2, 'KOTA KUDUS', 'SUNGGINGAN', '110.83175', '-6.813'),
(38, 2, 'KOTA KUDUS', 'SINGOCANDI', '110.840861', '-6.791083'),
(39, 2, 'KOTA KUDUS', 'RENDENG', '110.856889', '-6.799972'),
(40, 2, 'KOTA KUDUS', 'PURWOSARI', '110.826889', '-6.809056'),
(41, 3, 'JATI', 'GETASPEJATEN', '110.8395', '-6.824028'),
(42, 3, 'JATI', 'TANJUNGKARANG', '110.832889', '-6.838889'),
(43, 3, 'JATI', 'TUMPANGKRASAK', '110.863194', '-6.804806'),
(44, 3, 'JATI', 'PASURUHAN KIDUL', '110.816944', '-6.820444'),
(45, 3, 'JATI', 'JATI KULON', '110.831083', '-6.825028'),
(46, 3, 'JATI', 'JATI WETAN', '110.821838', '-6.83884'),
(47, 3, 'JATI', 'JEPANGPAKIS', '110.870528', '-6.826056'),
(48, 3, 'JATI', 'JETISKAPUAN', '110.835167', '-6.850583'),
(49, 3, 'JATI', 'LORAM KULON', '110.842417', '-6.833028'),
(50, 3, 'JATI', 'LORAM WETAN', '110.852194', '-6.830583'),
(51, 3, 'JATI', 'MEGAWON', '110.870361', '-6.817028'),
(52, 3, 'JATI', 'NGEMBAL KULON', '110.880833', '-6.806583'),
(53, 3, 'JATI', 'PASURUHAN LOR', '110.82375', '-6.818222'),
(54, 3, 'JATI', 'PLOSO', '110.833667', '-6.818722'),
(55, 4, 'UNDAAN', 'BERUGENJANG', '110.802361', '-6.941972'),
(56, 4, 'UNDAAN', 'GLAGAHWARU', '110.811722', '-6.927361'),
(57, 4, 'UNDAAN', 'KALIREJO', '110.790194', '-6.928278'),
(58, 4, 'UNDAAN', 'KARANGROWO', '110.872889', '-6.885'),
(59, 4, 'UNDAAN', 'LAMBANGAN', '110.787639', '-6.939278'),
(60, 4, 'UNDAAN', 'KUTUK', '110.805389', '-6.900389'),
(61, 4, 'UNDAAN', 'LARIKREJO', '110.856667', '-6.887389'),
(62, 4, 'UNDAAN', 'NGEMPLAK', '110.834278', '-6.857083'),
(63, 4, 'UNDAAN', 'MEDINI', '110.7965', '-6.915306'),
(64, 4, 'UNDAAN', 'UNDAAN KIDUL', '110.804861', '-6.899583'),
(65, 4, 'UNDAAN', 'UNDAAN LOR', '110.817944', '-6.874306'),
(66, 4, 'UNDAAN ', 'UNDAAN TENGAH', '110.811028', '-6.886667'),
(67, 4, 'UNDAAN', 'TERANGMAS', '110.815028', '-6.917333'),
(68, 4, 'UNDAAN', 'SAMBUNG', '110.800583', '-6.906556'),
(69, 4, 'UNDAAN', 'WATES', '110.829194', '-6.863472'),
(70, 4, 'UNDAAN', 'WONOSOCO', '110.808583', '-6.970444'),
(71, 5, 'MEJOBO', 'GOLANTEPUS', '110.892889', '-6.820778'),
(72, 5, 'MEJOBO', 'GULANG', '110.863806', '-6.834444'),
(73, 5, 'MEJOBO', 'HADIWARNO', '110.903583', '-6.821333'),
(74, 5, 'MEJOBO', 'JEPANG', '110.861278', '-6.825528'),
(75, 5, 'MEJOBO', 'JOJO', '110.91175', '-6.833278'),
(76, 5, 'MEJOBO', 'KESAMBI', '110.899444', '-6.832944'),
(77, 5, 'MEJOBO', 'KIRIG', '110.889333', '-6.835333'),
(78, 5, 'MEJOBO', 'MEJOBO', '110.872167', '-6.828917'),
(79, 5, 'MEJOBO', 'TEMULUS', '110.896472', '-6.842722'),
(80, 5, 'MEJOBO', 'TENGGELES', '0.1', '0.2'),
(81, 5, 'MEJOBO', 'PAYAMAN', '110.86825', '-6.836389'),
(82, 6, 'JEKULO', 'GONDOHARUM', '110.963', '-6.795444'),
(83, 6, 'JEKULO', 'BULUNGCANGKRING', '110.926278', '-6.824194'),
(84, 6, 'JEKULO', 'BULUNG KULON', '110.930639', '-6.822417'),
(85, 6, 'JEKULO', 'HADIPOLO', '110.903556', '-6.799972'),
(86, 6, 'JEKULO', 'PLADEN', '110.930806', '-6.810417'),
(87, 6, 'JEKULO', 'JEKULO', '110.918398', '-6.806637'),
(88, 6, 'JEKULO', 'KLALING', '110.923389', '-6.802278'),
(89, 6, 'JEKULO', 'TERBAN', '110.93925', '-6.79275'),
(90, 6, 'JEKULO', 'TANJUNG REJO', '110.911583', '-6.786861'),
(91, 6, 'JEKULO', 'SADANG', '110.912861', '-6.832583'),
(92, 6, 'JEKULO', 'HONGGOSOCO', '110.898694', '-6.772611'),
(93, 6, 'JEKULO', 'SIDOMULYO', '110.945667', '-6.81775'),
(94, 7, 'BAE', 'BACIN', '110.855167', '-6.793833'),
(95, 7, 'BAE', 'BAE', '110.854472', '-6.769333'),
(96, 7, 'BAE', 'DERSALAM', '110.868889', '-6.800972'),
(97, 7, 'BAE', 'GONDANGMANIS', '110.87175', '-6.772'),
(98, 7, 'BAE', 'KARANGBENER', '110.884111', '-6.781722'),
(99, 7, 'BAE', 'PANJANG', '110.849', '-6.783306'),
(100, 7, 'BAE', 'NGEMBALREJO', '110.878444', '-6.799194'),
(101, 7, 'BAE', 'PEDAWANG', '110.85925', '-6.796694'),
(102, 7, 'BAE', 'PEGANJARAN', '110.837611', '-6.78475'),
(103, 7, 'BAE', 'PURWOREJO', '110.853917', '-6.777917'),
(104, 8, 'GEBOG', 'PADURENAN', '110.821972', '-6.757722'),
(105, 8, 'GEBOG', 'GETASRABI', '110.812611', '-6.762444'),
(106, 8, 'GEBOG', 'BESITO', '110.843111', '-6.755167'),
(107, 8, 'GEBOG', 'GONDOSARI', '110.844083', '-6.732778'),
(108, 8, 'GEBOG', 'GRIBIG', '110.826889', '-6.786417'),
(109, 8, 'GEBOG', 'JURANG', '110.847222', '-6.740333'),
(110, 8, 'GEBOG', 'KARANGMALANG', '110.831056', '-6.781722'),
(111, 8, 'GEBOG', 'KEDUNGSARI', '110.836333', '-6.732861'),
(112, 8, 'GEBOG', 'KLUMPIT', '110.821639', '-6.773944'),
(113, 8, 'GEBOG', 'MENAWAN', '110.849389', '-6.710556'),
(114, 8, 'GEBOG', 'RAHTAWU', '110.863361', '-6.655361'),
(115, 9, 'DAWE', 'CENDONO', '110.865417', '-6.739306'),
(116, 9, 'DAWE', 'COLO', '110.904306', '-6.669556'),
(117, 9, 'DAWE', 'CRANGGANG', '110.90475', '-6.709528'),
(118, 9, 'DAWE', 'DUKUHWARINGIN', '0.1', '0.2'),
(119, 9, 'DAWE', 'GLAGAH KULON', '110.931028', '-6.709194'),
(120, 9, 'DAWE', 'JAPAN', '110.914806', '-6.674833'),
(121, 9, 'DAWE', 'KAJAR', '110.892222', '-6.688139'),
(122, 9, 'DAWE', 'KANDANGMAS', '110.907806', '-6.738472'),
(123, 9, 'DAWE', 'KUWUKAN', '110.899583', '-6.681139'),
(124, 9, 'DAWE', 'LAU', '110.878028', '-6.719694'),
(125, 9, 'DAWE', 'MARGOREJO', '110.880667', '-6.750056'),
(126, 9, 'DAWE', 'TERGO', '110.921972', '-6.698833'),
(127, 9, 'DAWE', 'TERNADI', '110.880222', '-6.678139'),
(128, 9, 'DAWE', 'SOCO', '110.865694', '-6.696639'),
(129, 9, 'DAWE', 'SAMIREJO', '110.855778', '-6.735306'),
(130, 9, 'DAWE', 'PIJI', '110.870944', '-6.731861'),
(131, 9, 'DAWE', 'PUYOH', '110.860083', '-6.714611'),
(132, 9, 'DAWE', 'REJOSARI', '110.898861', '-6.749861'),
(133, 1000, '?', '?', '110.916528', '-6.689944'),
(134, 100, '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengaduan`
--

CREATE TABLE `detail_pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_desa` varchar(11) NOT NULL,
  `id_upt` varchar(11) NOT NULL,
  `id_opd` varchar(11) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `tgl_aduan` date NOT NULL,
  `isi_aduan` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` enum('belum diatasi','selesai diatasi') NOT NULL DEFAULT 'belum diatasi',
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pengaduan`
--

INSERT INTO `detail_pengaduan` (`id_pengaduan`, `user_id`, `id_desa`, `id_upt`, `id_opd`, `nama_pelapor`, `tgl_aduan`, `isi_aduan`, `gambar`, `status`, `active`) VALUES
(71, 38, '34', '37', '19', 'catur ilham juniarto', '2020-09-22', 'jaringan lemot', 'pengaduan-200922-e069c01a84.jpg', 'selesai diatasi', 0),
(72, 39, '45', '37', '19', 'teguh budiman perkosoo', '2020-09-11', 'lemot banget og', 'pengaduan-200922-ac50c79feb.jpg', 'selesai diatasi', 0),
(73, 39, '45', '37', '19', 'teguhhhhhhhh', '2019-10-23', 'eifnkrnkjgkdfg', 'pengaduan-200922-4c4ab16963.jpg', 'selesai diatasi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'KALIWUNGU'),
(2, 'KOTA KUDUS'),
(3, 'JATI'),
(4, 'UNDAAN'),
(5, 'MEJOBO'),
(6, 'JEKULO'),
(7, 'BAE'),
(8, 'GEBOG'),
(9, 'DAWE'),
(34, 'jagaraya');

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id_opd` int(11) NOT NULL,
  `nama_opd` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id_opd`, `nama_opd`, `longitude`, `latitude`) VALUES
(1, 'Setda/Kominfo', '110.84291', '-6.806609'),
(2, 'Dinas Kesehatan', '110.849167', '-6.80418'),
(3, 'Dinas PUPR', '110.85918', '-6.804172'),
(4, 'Dinas Sosial Tenaga Kerja (BLK)', '110.878283', '-6.795648'),
(5, 'Komplek Kantor Mejobo', '110.85935', '-6.81523'),
(6, 'Dinas PKPLH', '110.824485', '-6.835119'),
(7, 'Sekretariat DPRD (SETWAN)', '110.836899', '-6.821198'),
(8, 'Dinas Perhubungan', '110.82565', '-6.81174'),
(9, 'Satuan Polisi Pamong Praja', '110.847111', '-6.798523'),
(10, 'Kecamatan Kota', '110.8222645', '-6.8054616'),
(11, 'Kecamatan Jati', '110.83202', '-6.83601'),
(12, 'Kecamatan Kaliwungu', '110.80312', '-6.79788'),
(13, 'Kecamatan Bae', '110.85447', '-6.76974'),
(14, 'Kecamatan Dawe', '110.869', '-6.73332'),
(15, 'Kecamatan Gebog', '110.84098', '-6.74162'),
(16, 'Kecamatan Jekulo', '110.92575', '-6.80594'),
(17, 'Kecamatan Mejobo', '110.88277', '-6.82702'),
(18, 'Kecamatan Undaan', '110.80486', '-6.89912'),
(19, '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `upt`
--

CREATE TABLE `upt` (
  `id_upt` int(11) NOT NULL,
  `nama_upt` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upt`
--

INSERT INTO `upt` (`id_upt`, `nama_upt`, `longitude`, `latitude`) VALUES
(1, 'UPT Laboratorium Kesehatan', '110.82439', '-6.80566'),
(2, 'UPT Puskesmas Wergu Wetan', '110.8491', '-6.81516'),
(3, 'UPT Puskesmas Purwosari', '110.82426', '-6.80628'),
(4, 'UPT Puskesmas Rendeng', '110.8555', '-6.79914'),
(5, 'UPT Puskesmas Jati', '110.83196', '-6.8369'),
(6, 'UPT Puskesmas Ngembal Kulon', '110.87959', '-6.81589'),
(7, 'UPT Puskesmas Undaan', '110.80445', '-6.89993'),
(8, 'UPT Puskesmas Ngemplak', '110.83519', '-6.8552'),
(9, 'UPT Puskesmas Kaliwungu', '110.79334', '-6.78894'),
(10, 'UPT Puskesmas Sidorekso', '110.76736', '-6.77364'),
(11, 'UPT Puskesmas Bae', '110.85454', '-6.77045'),
(12, 'UPT Puskesmas Mejobo', '110.89954', '-6.82968'),
(13, 'UPT Puskesmas Jepang', '110.86537', '-6.8334'),
(14, 'UPT Puskesmas Jekulo', '110.92536', '-6.80617'),
(15, 'UPT Puskesmas Tanjungrejo', '110.91129', '-6.78401'),
(16, 'UPT Puskesmas Dawe', '110.86389', '-6.73704'),
(17, 'UPT Puskesmas Rejosari', '110.90028', '-6.73963'),
(18, 'UPT Puskesmas Gribig', '110.83377', '-6.78654'),
(19, 'UPT Puskesmas Gondosari', '110.84128', '-6.74131'),
(20, 'UPT Puskesmas Dersalam', '110.86549', '-6.79254'),
(21, 'UPT Pendidikan Kec Kota', '110.82539', '-6.80669'),
(22, 'UPT Pendidikan Kec Kaliwungu', '110.81048', '-6.79812'),
(23, 'UPT Pendidikan Kec Mejobo', '110.8823', '-6.82717'),
(24, 'UPT Pendidikan Kec Jekulo', '1', '1'),
(25, 'UPT Pendidikan Kec Dawe', '110.86466', '-6.73715'),
(26, 'UPT Pendidikan Kec Bae', '110.85442', '-6.76977'),
(27, 'UPT Pendidikan Kec Gebog', '110.84187', '-6.76638'),
(28, 'UPT Pendidikan Kec Jati', '1', '1'),
(29, 'UPT Pendidikan Kec Undaan', '110.83533', '-6.85478'),
(30, 'UPT Terminal Bakalan Krapyak', '110.83182', '-6.79514'),
(31, 'UPT BLK', '110.87825', '-6.79585'),
(32, 'UPT Obyek Wisata Colo', '110.90453', '-6.66769'),
(33, 'UPT Museum Kretek', '110.83787', '-6.82613'),
(34, 'UPT Terminal Induk', '110.81965', '-6.84071'),
(35, 'UPT BPSDM wil I', '110.91061', '-6.80101'),
(36, 'UPT BPSDM wil II', '110.7939', '-6.92079'),
(37, '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `id_desa` varchar(11) NOT NULL DEFAULT 'kosong',
  `id_upt` varchar(11) NOT NULL DEFAULT 'kosong',
  `id_opd` varchar(11) NOT NULL DEFAULT 'kosong',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `level` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `id_desa`, `id_upt`, `id_opd`, `username`, `password`, `no_telp`, `level`) VALUES
(17, '134', '37', '19', 'admin', '255297dc48c4087a1fe0096c802c33336e01f268', '946467457648', '0'),
(38, '34', '37', '19', 'nganguk', 'c57eeae669e1ef6ecb4f84ca2f7be1d6b47c1492', '0899999999', '1'),
(39, '45', '37', '19', 'teguh', 'f4fe1d827308e4e52d4d49e62f33d7d08ffb4a75', '089787677654', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `detail_pengaduan`
--
ALTER TABLE `detail_pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `upt`
--
ALTER TABLE `upt`
  ADD PRIMARY KEY (`id_upt`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `detail_pengaduan`
--
ALTER TABLE `detail_pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id_opd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `upt`
--
ALTER TABLE `upt`
  MODIFY `id_upt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
