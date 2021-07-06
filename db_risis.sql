-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 07:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_risis`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absen`
--

CREATE TABLE `data_absen` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `kelamin` varchar(123) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `minggu_ke` int(11) NOT NULL,
  `senin` int(11) NOT NULL,
  `selasa` int(11) NOT NULL,
  `rabu` int(11) NOT NULL,
  `kamis` int(11) NOT NULL,
  `jumat` int(11) NOT NULL,
  `saptu` int(11) NOT NULL,
  `total` varchar(11) NOT NULL,
  `alfa` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `izin` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_absen`
--

INSERT INTO `data_absen` (`id`, `nis`, `nama`, `kelamin`, `kelas_id`, `minggu_ke`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `saptu`, `total`, `alfa`, `sakit`, `izin`, `keterangan`) VALUES
(1, 0, 'ABED NEGO', 'Laki-laki', 1, 1, 1, 1, 1, 1, 0, 1, '5', '', '', '', ''),
(2, 0, 'ALON.R', 'Laki-laki', 1, 1, 1, 0, 1, 1, 1, 0, '4', '', '', '', ''),
(3, 0, 'APRIL ANDIKA', 'Laki-laki', 1, 1, 1, 1, 0, 1, 1, 1, '5', '', '', '', ''),
(4, 0, 'CAHAYA RAHMA DASENG', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(5, 0, 'DIKSON F.KABNANI', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(6, 0, 'ERFAN', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(7, 0, 'JEFRI TADUN', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(8, 0, 'M.HAIKAL SAPUTRA', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(9, 0, 'MUH.IKBAL YUSRAN', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(10, 0, 'RIFKY RIANSYAH', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(11, 0, 'MUH.IKBAL YUSRAN', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(12, 0, 'M.HAIKAL SAPUTRA', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(13, 0, 'NAILA AFRILIA', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(14, 0, 'NAIKA AFRILIA', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(15, 0, 'RIFKY RIANSYAH', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(16, 0, 'RISMA R', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(17, 0, 'SAHRUL', 'Laki-laki', 1, 1, 1, 1, 0, 1, 1, 1, '5', '', '', '', ''),
(18, 0, 'SARHA TISYA', 'Perempuan', 1, 1, 1, 1, 0, 1, 1, 1, '5', '', '', '', ''),
(19, 0, 'SYARIF HIDAYAT', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(20, 0, 'TIARA', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(21, 0, 'WHIKA SAKIR', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(22, 0, 'WILDA PARENARI', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(23, 0, 'WISTI MANGIRI', 'Perempuan', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(24, 0, 'YANSEP', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(25, 0, 'YOGI', 'Laki-laki', 1, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(26, 0, 'ABD.KHALIK', 'Laki-laki', 2, 1, 1, 1, 1, 0, 1, 1, '5', '', '', '', ''),
(27, 0, 'DIKA RAMADAN', 'Laki-laki', 2, 1, 1, 1, 1, 1, 0, 1, '5', '', '', '', ''),
(28, 0, 'JURANAH HERNIAH PUTRI', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(29, 0, 'M.REHAN', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(30, 0, 'MUHAMMAD AL BANI MALIK', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(31, 0, 'MUH.SALEH FIRDIANSYAH', 'Laki-laki', 2, 1, 1, 1, 1, 0, 0, 1, '4', '', '', '', ''),
(32, 0, 'MUTMAINNA', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(33, 0, 'NADIA SAFWA M', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(34, 0, 'SITTI NUR ASISA', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(35, 0, 'SUCI ANUGRAH SARI B.', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(36, 0, 'SUYATNO', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(37, 0, 'ZASKIA', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(38, 0, 'ZULKARNAIN', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(39, 0, 'AGUS SAPUTRA', 'Laki-laki', 2, 1, 1, 1, 0, 1, 1, 1, '5', '', '', '1', 'Acara keluarga'),
(40, 0, 'ANAS TASYA', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(41, 0, 'ARDI', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(42, 0, 'APRILIA ANDINI', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(43, 0, 'FACHRI MUIS', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(44, 0, 'FERDI', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(45, 0, 'HASBIH RAHMAN', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(46, 0, 'ISRA', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(47, 0, 'IZHAM', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(48, 0, 'JUNARTI', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(49, 0, 'KHAERIL IKRAM', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(50, 0, 'LEFI', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(51, 0, 'MARSYANDA ARMAN', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 0, '5', '', '1', '', 'SAKIT DEMAM'),
(52, 0, 'MUH.ADIT SETIADI', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(53, 0, 'RANDY RIZKY WAHYUDI', 'Laki-laki', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(54, 0, 'RISNA HANDAYANI', 'Perempuan', 2, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', ''),
(55, 190369, 'A.PARENRENGI', 'Perempuan', 3, 1, 1, 1, 1, 1, 1, 1, '6', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `njp` varchar(30) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `pend_terakhir` varchar(123) NOT NULL,
  `jenis_kelamin` varchar(123) NOT NULL,
  `nuptk` varchar(30) NOT NULL,
  `nrg` varchar(30) NOT NULL,
  `status_sertifikasi` int(11) NOT NULL,
  `no_sertifikasi` varchar(100) NOT NULL,
  `mapel` varchar(123) NOT NULL,
  `kelas_vii` int(11) NOT NULL,
  `kelas_viii` int(11) NOT NULL,
  `kelas_ix` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` varchar(123) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `njp`, `nama`, `pend_terakhir`, `jenis_kelamin`, `nuptk`, `nrg`, `status_sertifikasi`, `no_sertifikasi`, `mapel`, `kelas_vii`, `kelas_viii`, `kelas_ix`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '197305042007012028', 'Hj. Rabaiyah, S.Ag', 'S1/ PAI', 'P', '\'4836751652300000', '0', 1, '0', 'Kepala Sekolah', 0, 0, 0, '', 'Selasa, 04 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(2, '196808261998022006', 'Hiderana, S.Pd.', 'S1/Pendidikan Bahasa Indonesia', 'P', '\'2158746650300003', '\'076335051144', 1, '\'240808703042', 'Bahasa Indonesia/wali kelas IX A/Pembina Bidang Kepribadian dan Budi Pekerti Luhur/Bengkel Sastra', 12, 0, 12, '', 'Selasa, 04 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(3, '196607171998021000', 'Drs. Indar', 'S1/ PMP/KN (PKn)', 'L', '\'3049746647200003', '\'082088397004', 1, '\'240808407345', 'P Kn/Urusan Humas/Pembina Bidang Kehidupan Berbangsa  dan Bernegara/Pelatih PMR/Catur', 0, 0, 6, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(4, '196308251987031010', 'Masrial.S.Pd', 'S1/PJOK', 'L', '\'657741642200043', '\'075731055027', 1, '\'240710708821', 'PJOK/Kep.Perpustakaan/Pembina Bidang Kesegaran Jasmani dan Daya Kreasi/Sepak Bola, Putsal, Bola Basket/Sepak Bola, Putsal', 6, 6, 6, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(5, '197202091998021001', 'Asir, S.Pd., M.M.', 'S2/Magister Manajemen', 'L', '\'2541750652120002', '\'151001153237', 1, '\'1241510000948', 'IPS./Wakasek/Pembina Harian/Pembina Pramuka Putra/IPS', 0, 4, 8, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(6, '197212042014062004', 'Elisabet B. Ruppa, S.pd', 'S1/Ilmu Pendidikan Sosial', 'P', '\'1733750652300002', '\'101336927002', 1, '\'461010000579', 'IPS/Pembina Bidang Keterampilan dan Kewirausahaan/Seni Musik', 4, 0, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(7, '197212042014122001', 'Arifah Ibrahim, S.T', 'S1/Teknik Manajemen Industri', 'P', '\'5536750651300010', '\'110972153016', 1, '\'1461109702272', 'IPA/Pembina Bidang Kepribadian dan Budi Pekerti Luhur/Catur/Bulu Tangkis', 0, 0, 10, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(8, '196703202007011019', 'Matius Kambatu, S.Pd.', 'S1/Pendidikan Bahasa dan Sastra Indonesia', 'L', '\'6652745647200032', '\'152171114794', 1, '\'1241521700382', 'Seni Budaya/Urusan Kesiswaan/Ketua/Seni Musik/Vokal Grup', 6, 6, 6, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(9, '199212272020121000', 'Ihsan Kamil, S.Pd.', 'S1/Pendidikan Bahasa Inggris', 'L', '', '', 0, '0', 'Bhs. Inggris/Operator PMP/Wali Kelas VIIIA/Pembina Bidang Keterampilan dan Kewirausahaan/English Meeting Club/Bola Volly  ', 0, 4, 8, '', 'Minggu, 09 Mei 2021 ', ''),
(10, '199205142020122002', 'Ervina Sari A., S.Pd.', 'S1/Pendidikan Kimia', 'P', '', '', 0, '0', 'IPA/Pembina Bidang Apresiasi dan Kreasi Seni/Nyanyi Solo/IPA', 10, 0, 0, '', 'Minggu, 09 Mei 2021 ', ''),
(11, '197705142021211005', 'Yusuf,S.S.', 'S1/Bahasa dan Sastra Inggris', 'L', '\'8846755658200002', '', 0, '0', 'Bhs. Inggris/Pembina Bidang Ketaqwaan Terhadap Tuhan yang Maha Esa (agama Kristen)/Seni Musik/Tennis meja', 8, 0, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(12, '0', 'Silvana, S.H.', 'S1/Hukum', 'P', '\'3253761662300053', '', 0, '0', 'PKn/Pembina Bidang Pendidikan Pendahuluan Bela Negara /Bulu Tangkis', 0, 6, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(13, '0', 'Hidayati, S.Pd.', 'S1/Pendidikan Bahasa Inggris', 'P', '\'0440757658130102', '', 0, '0', 'Bahasa Inggris, PKn, Prakarya, dan Wali Kelas VIIA/Pembina Bidang Keidupan Berbangsa dan Bernegara/Bengkel Sastra Ingris/Ny', 10, 4, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(14, '0', 'Sri Astuti,S.Pd', 'S1/ Pendidikan Matematika', 'P', '\'9957770670130062', '\'191801124430', 0, '\'2147483647', 'Matematika/Pembina Bidang Organisasi, Pendidikan Politik dan Kepemimpinan/Karya Ilmiah Remaja/Matematika', 5, 10, 10, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(15, '0', 'Misna, S. Pd.', 'S1/ Pendidikan Bahasa dan Sastra Indonesia', 'P', '\'3944767670130152', '', 0, '0', 'Pendidikan Agama Islam, Bahasa Indonesia,  Wali kelas VIIB/Pembina Bidang Ketaqwaan Terhadap Tuhan Yang Maha Esa (Agama Isl', 6, 6, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(16, '0', 'Rasna, S.Pd.', 'S1/Pendidikan Bahasa Indonesia', 'P', '\'747766668130162', '', 0, '0', 'Prakarya/Pembina Bidang Apresiasi dan Kreasi Seni/Bengkel Sastra /Nyanyi Solo', 0, 4, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(17, '0', 'Jumarli, S.Pd', 'S1/Pendidikan Bahasa dan  Sastra Indonesia', 'P', '\'0163762663130123', '', 0, '0', 'Bahasa Indonesia, Prakarya, Wali Kelas VIIIB/Pembina Bidang Pendidikan Pendahuluan Bela Negara /Puisi/Puisi', 0, 6, 4, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(18, '0', 'Yuris Luden, S.E', 'S1/ Ekonomi Manajemen', 'P', '\'0560757658300092', '', 0, '0', 'IPS, Agama Kristen, Pembina Bidang Ketaqwaan Terhadap Tuhan Yang Maha Esa (Agama Kristen)/Seni Musik/IPS', 3, 7, 3, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(19, '0', 'Erma Rusma yanti, S.Pd.', 'S1/ Pendidikan Bahsa Inggris', 'P', '\'26617636665130172', '', 0, '0', 'Pendidikan Agama Islam/Pembina Bidang Kesegaran Jasmani dan Daya Kreasi/Senam/Tennis Meja', 0, 6, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(20, '0', 'Ari Anggraini,S.Pd.', 'S1 /  PAI', 'P', '\'7257772673130033', '', 0, '0', ' PAI, IPA, Matematika, Kepala Lab IPA/Wali Kelas IXB/Sekertaris/Pembina Pramuka Putri/IPA', 5, 10, 6, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 '),
(21, '0', 'Sanjaya.As, S.Pd', 'S1/ Bimbingan Konseling', 'L', '\'5142774675130013', '', 0, '0', 'Bimbingan dan Konseling', 0, 0, 0, '', 'Minggu, 09 Mei 2021 ', 'Jumat, 04 Juni 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(123) NOT NULL,
  `created_at` varchar(123) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kelas`
--

INSERT INTO `data_kelas` (`id_kelas`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(1, 'VII A 1', 'Sabtu, 08 Mei 2021 ', 'Sabtu, 08 Mei 2021 '),
(2, 'VII B 1', 'Sabtu, 08 Mei 2021 ', 'Sabtu, 08 Mei 2021 '),
(3, 'VII A 2', 'Sabtu, 08 Mei 2021 ', 'Sabtu, 08 Mei 2021 '),
(4, 'VII B 2', 'Sabtu, 08 Mei 2021 ', 'Minggu, 09 Mei 2021 '),
(5, 'VIII A 1', 'Sabtu, 08 Mei 2021 ', 'Sabtu, 08 Mei 2021 '),
(6, 'VIII B 1', 'Sabtu, 08 Mei 2021 ', 'Sabtu, 08 Mei 2021 '),
(7, 'VIII A 2', 'Sabtu, 08 Mei 2021 ', ''),
(8, 'VIII B 2', 'Sabtu, 08 Mei 2021 ', ''),
(9, 'IX A 1', 'Sabtu, 08 Mei 2021 ', ''),
(10, 'IX B 1', 'Sabtu, 08 Mei 2021 ', ''),
(11, 'IX A 2', 'Sabtu, 08 Mei 2021 ', 'Sabtu, 08 Mei 2021 '),
(12, 'IX B 2', 'Sabtu, 08 Mei 2021 ', 'Sabtu, 08 Mei 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `data_mapel`
--

CREATE TABLE `data_mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(200) NOT NULL,
  `created_at` varchar(123) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mapel`
--

INSERT INTO `data_mapel` (`id`, `nama_mapel`, `created_at`, `updated_at`) VALUES
(1, 'Bahasa Indonesia', 'Rabu, 05 Mei 2021 ', ''),
(2, 'Matematika', 'Rabu, 05 Mei 2021 ', 'Rabu, 05 Mei 2021 '),
(3, 'Bahasa Inggris', 'Rabu, 05 Mei 2021 ', ''),
(4, 'IPA', 'Rabu, 05 Mei 2021 ', ''),
(5, 'IPS', 'Rabu, 05 Mei 2021 ', ''),
(6, 'Agama Islam', 'Rabu, 05 Mei 2021 ', ''),
(7, 'Agama Kristen', 'Rabu, 05 Mei 2021 ', ''),
(8, 'PKN', 'Rabu, 05 Mei 2021 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_mingguan`
--

CREATE TABLE `data_mingguan` (
  `id` int(11) NOT NULL,
  `minggu` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mingguan`
--

INSERT INTO `data_mingguan` (`id`, `minggu`) VALUES
(1, 'M. I'),
(2, 'M. II'),
(3, 'M. III'),
(4, 'M. IV');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `jenis_kelamin` varchar(123) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `nilai_mtk` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` varchar(123) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`id`, `nis`, `nama`, `jenis_kelamin`, `kelas_id`, `semester_id`, `tahun`, `nilai_mtk`, `total`, `created_at`, `updated_at`) VALUES
(1, 0, 'Abed Nego', 'L', 1, 1, '2020/2021', 67, 0, 'Sabtu, 05 Juni 2021 ', ''),
(2, 0, 'Afrika Senita', 'P', 1, 1, '2020/2021', 74, 0, 'Sabtu, 05 Juni 2021 ', ''),
(3, 0, 'Alfianto', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(4, 0, 'Alon. R', 'L', 1, 1, '2020/2021', 67, 0, 'Sabtu, 05 Juni 2021 ', ''),
(5, 0, 'Andi Muh. Fadil', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(6, 0, 'Andika Saputra', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(7, 0, 'April Andika', 'L', 1, 1, '2020/2021', 67, 0, 'Sabtu, 05 Juni 2021 ', ''),
(8, 0, 'Cahaya Rahma Daseng', 'P', 8, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', 'Sabtu, 05 Juni 2021 '),
(9, 0, 'Cinta Lestari', 'P', 1, 1, '2020/2021', 69, 0, 'Sabtu, 05 Juni 2021 ', ''),
(10, 0, 'Dikson F. Kabnani', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(11, 0, 'Dini Asmiyanti', 'P', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(12, 0, 'Erfan', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(13, 0, 'Hamarsyad', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(14, 0, 'Irmawati', 'P', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(15, 0, 'Jefri Tadun', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(16, 0, 'Leni Asita', 'P', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(17, 0, 'Marsel', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(18, 0, 'Muh. Haikal Saputra', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(19, 0, 'Muh. Ikbal Yusran', 'L', 1, 1, '2020/2021', 68, 0, 'Sabtu, 05 Juni 2021 ', ''),
(20, 0, 'Naika Afrilia', 'P', 1, 1, '2020/2021', 69, 0, 'Sabtu, 05 Juni 2021 ', ''),
(21, 0, 'Naila Afrilia', 'P', 1, 1, '2020/2021', 69, 0, 'Sabtu, 05 Juni 2021 ', ''),
(22, 0, 'Rifky Riansyah', 'L', 1, 1, '2020/2021', 67, 0, 'Sabtu, 05 Juni 2021 ', ''),
(25, 0, 'Sarha Tisya', 'P', 1, 1, '2020/2021', 69, 0, 'Sabtu, 05 Juni 2021 ', ''),
(28, 0, 'Whika Sakir', 'P', 1, 1, '2020/2021', 70, 0, 'Sabtu, 05 Juni 2021 ', ''),
(29, 0, 'Wilda Pare Nari', 'P', 1, 1, '2020/2021', 67, 0, 'Sabtu, 05 Juni 2021 ', ''),
(30, 0, 'Wisti', 'P', 1, 1, '2020/2021', 69, 0, 'Sabtu, 05 Juni 2021 ', ''),
(31, 0, 'Yansep Tona Banne', 'L', 1, 1, '2020/2021', 70, 0, 'Sabtu, 05 Juni 2021 ', ''),
(32, 0, 'Yogi', 'L', 1, 1, '2020/2021', 70, 0, 'Sabtu, 05 Juni 2021 ', ''),
(33, 1504411060, 'Adi Murdayani', 'L', 2, 1, '2020/2021', 80, 0, 'Selasa, 15 Juni 2021 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_semester`
--

CREATE TABLE `data_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_semester`
--

INSERT INTO `data_semester` (`id_semester`, `semester`) VALUES
(1, 'SEM I'),
(2, 'SEM II');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, 'VII A'),
(2, 'VII B'),
(3, 'VIII A'),
(4, 'VIII B'),
(5, 'IX A');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `actived_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `nis` int(11) NOT NULL,
  `password` varchar(123) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `actived_id`, `user_id`, `nama`, `nis`, `password`, `kelas_id`) VALUES
(13, 1, 2, 'A.PARENRENGI', 190369, '$2y$10$pF/EM8mXegYS6.wVF.VlhuBMTyfN.28lZ95g3WnMnMnZD75m3eIaG', 5);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Hadir'),
(2, 'Alfa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_active` int(1) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `username` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(123) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_active`, `nama`, `username`, `email`, `password`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Administrator', 'Administrator', 'admin@gmail.com', '$2y$10$iE.Dx.wpV.ze69Wl7dOHaOAOFu5NVYy5sccgllbnLxUr6HK.ULy62', 'Laki-laki', 'Selasa, 04 Mei 2021 ', 'Jumat, 07 Mei 2021 ');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `tipe_user` varchar(123) NOT NULL,
  `created_at` varchar(123) NOT NULL,
  `updated_at` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `tipe_user`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-05-04', '2021-05-04'),
(2, 'User', '2021-05-04', '2021-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id` int(11) NOT NULL,
  `nama_status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id`, `nama_status`) VALUES
(1, 'Sudah'),
(2, 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `data_mapel`
--
ALTER TABLE `data_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_mingguan`
--
ALTER TABLE `data_mingguan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_semester`
--
ALTER TABLE `data_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_mapel`
--
ALTER TABLE `data_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_mingguan`
--
ALTER TABLE `data_mingguan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `data_semester`
--
ALTER TABLE `data_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
