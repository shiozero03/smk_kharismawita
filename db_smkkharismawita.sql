-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 02:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smkkharismawita`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kalimat` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `gambar`, `kalimat`, `created_at`, `updated_at`) VALUES
(1, 'banner-1.jpg', 'Selamat Datang di Website SMKS Kharismawita 3 Depok', NULL, NULL),
(2, 'banner1.png', 'Selamat Datang di Website SMKS Kharismawita 3 Depok', NULL, NULL),
(3, 'accounting.jpg', 'Selamat Datang di Website SMKS Kharismawita 3 Depok', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurilulers`
--

CREATE TABLE `ekstrakurilulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `gambar`, `judul`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1673251830_zero.jpeg', 'Zero', '2021-03-03', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<h2>Why do we use it?</h2>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2023-01-09 01:10:30', '2023-01-09 01:10:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formkontaks`
--

CREATE TABLE `formkontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formkontaks`
--

INSERT INTO `formkontaks` (`id`, `nama`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Rafli', 'mhdrafli.mr@gmail.com', 'Hello World', '082275713049', 'Oke', '2023-01-07 18:43:33', '2023-01-07 18:43:33'),
(2, 'Muhammad Rafli', 'mhdrafli.mr@gmail.com', 'OKe', '082275713049', 'Hallo Guys', '2023-01-07 19:04:02', '2023-01-07 19:04:02'),
(3, 'Muhammad Rafli', 'mhdrafli.mr@gmail.com', 'Oke', '082275713049', 'mama', '2023-01-07 19:05:27', '2023-01-07 19:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `galerifotos`
--

CREATE TABLE `galerifotos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galerivideos`
--

CREATE TABLE `galerivideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_07_234510_create_profils_table', 1),
(6, '2023_01_08_001201_create_banners_table', 2),
(7, '2023_01_08_001311_create_programkeahlians_table', 2),
(8, '2023_01_08_013211_create_formkontaks_table', 3),
(9, '2023_01_08_022926_create_userlogins_table', 4),
(10, '2023_01_08_145001_create_ekstrakurilulers_table', 5),
(11, '2023_01_08_150915_create_galerifotos_table', 6),
(12, '2023_01_08_151014_create_galerivideos_table', 6),
(13, '2023_01_08_172825_create_unduhandokumens_table', 7),
(14, '2023_01_08_175123_create_s_k_l_s_table', 8),
(15, '2023_01_09_041119_create_events_table', 9),
(16, '2023_01_09_073427_create_subscribes_table', 10),
(17, '2023_01_23_062629_create_unduhan_siswas_table', 11),
(18, '2023_01_23_062655_create_unduhan_pembayarans_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npsn` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang_pendidikan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_sekolah` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekolah` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt_rw` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten_kota` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `negara` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lintang` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bujur` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_penyelenggara` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bos` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sertifikat_iso` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_listrik` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daya_listrik` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses_internet` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses_internet_alternatif` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `nama_sekolah`, `npsn`, `jenjang_pendidikan`, `status_sekolah`, `alamat_sekolah`, `rt_rw`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten_kota`, `provinsi`, `negara`, `lintang`, `bujur`, `telepon`, `fax`, `email`, `website`, `waktu_penyelenggara`, `bos`, `sertifikat_iso`, `sumber_listrik`, `daya_listrik`, `akses_internet`, `akses_internet_alternatif`, `facebook`, `youtube`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'SMKS Kharismawita 3 Depok Manajemen', '20229214', 'SMK', 'Swasta', 'JL. Raya Parung Ciputat No. 462, kel. Serua, kec. Bojongsari, kota Depok', '3 / 4', '16517', 'Serua', 'Bojongsari', 'Depok', 'Jawa Barat', 'Indonesia', '-6.3649517', '106.7451067', '7499158', '7499158', 'smkkharismawita3depok@yahoo.com', 'http://www.smeakharismawita.com', 'Sehari Penuh / 5 hari', 'Ya', 'Belum Bersertifikat', 'PLN', '41000', 'Telkom Astinet', 'Telkom Astinet', NULL, NULL, NULL, '0000-00-00 00:00:00', '2023-01-08 06:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `programkeahlians`
--

CREATE TABLE `programkeahlians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programkeahlians`
--

INSERT INTO `programkeahlians` (`id`, `gambar`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'akutansi.png', 'Akuntansi dan Keuangan Lembaga', 'Program Keahlian Akuntansi dan Keuangan Lembaga Akuntansi dan Keuangan Lembaga merupakan salah satu program keahlian yang dimiliki SMKS Kharismawita 3 Depok. Program Keahlian ini termasuk dalam bidang Bisnis dan Manajemen yang telah ada sejak berdirinya SMKS Kharismawita 3 Depok. Akuntansi dan Keuangan Lembaga merupakan program keahlian yang memberikan bekal pengetahuan, ketrampilan, dan sikap. Sikap yang dimaksud adalah jujur, rapi, dan kerjasama dalam menyelesaikan setiap siklus akuntansi sehingga bekerja sesuai dengan prosedur dan mandiri. Kurikulum Program Keahlian Akuntansi dan Keuangan Lembaga (AKL) mengadopsi unit-unit kompetensi yang tercantum dalam Skema Sertifikasi KKNI Level II Kompetensi Keahlian', NULL, NULL),
(2, 'pemasaran.png', 'Pemasaran', 'Program keahlian pemasaran merupakan salah satu program keahlian yang sudah ada sejak SMKS Kharismawita 3 Depok berdiri. Pemasaran adalah sebuah program keahlian yang mempelajari dasar - dasar kemampuan dan keilmuan menjadi seorang marketing baik marketing secara konvensional maupun melalui media daring (online/internet). Di Program Keahlian Pemasaran siswa akan mempelajari strategi pasar, kewirausahaan dan membaca peluang di dunia bisnis.', NULL, NULL),
(3, 'komputer.png', 'Manajemen Perkantoran Dan Layanan Bisnis', 'Program keahlian Manajemen Perkantoran dan Layanan Bisnis merupakan program keahlian baru hasil konversi sebagaimana diatur oleh Keputusan Menteri Pendidikan Kebudayaaan, Riset dan Teknologi Nomor 165/M/2021 tentang Program SMK Pusat Keunggulan. Dalam program keahlian ini terdapat dua konsentrasi keahlian yaitu Otomatisasi Tata Kelola Perkantoran dan Manajemen Logistik. Dua konsentrasi ini sangat selaras dengan kebutuhan industri serta sejalan dengan perkembangan kebijakan pemerintah.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `s_k_l_s`
--

CREATE TABLE `s_k_l_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_skl` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pai` int(11) NOT NULL,
  `pkn` int(11) NOT NULL,
  `indo` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `sejarah` int(11) NOT NULL,
  `inggris` int(11) NOT NULL,
  `sbk` int(11) NOT NULL,
  `penjas` int(11) DEFAULT NULL,
  `sunda` int(11) NOT NULL,
  `skd` int(11) DEFAULT NULL,
  `ekobisnis` int(11) DEFAULT NULL,
  `adm` int(11) DEFAULT NULL,
  `ipa` int(11) DEFAULT NULL,
  `dasarprogram` int(11) DEFAULT NULL,
  `kompetensikeahlian` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `s_k_l_s`
--

INSERT INTO `s_k_l_s` (`id`, `id_siswa`, `nomor_surat`, `tanggal_skl`, `pai`, `pkn`, `indo`, `mtk`, `sejarah`, `inggris`, `sbk`, `penjas`, `sunda`, `skd`, `ekobisnis`, `adm`, `ipa`, `dasarprogram`, `kompetensikeahlian`, `created_at`, `updated_at`) VALUES
(1, '9', '3124/cc/1290/2023', '3 Juni 2022', 87, 94, 90, 88, 83, 86, 81, 84, 85, 84, 78, 83, 85, 88, 94, '2023-01-08 18:47:08', '2023-01-08 20:18:02'),
(2, '11', '66182/32311/ffa8/2023', NULL, 100, 98, 97, 96, 67, 98, 94, 46, 90, 78, 67, 89, 100, 70, 82, '2023-01-08 20:40:50', '2023-01-08 20:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `unduhandokumens`
--

CREATE TABLE `unduhandokumens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dokumen` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unduhandokumens`
--

INSERT INTO `unduhandokumens` (`id`, `dokumen`, `judul`, `created_at`, `updated_at`) VALUES
(5, '1673318758_66.pdf', '88', '2023-01-09 19:45:58', '2023-01-09 19:45:58'),
(6, '1673318768_mtcna sertifikat.pdf', 'mtcna', '2023-01-09 19:46:08', '2023-01-09 19:46:08'),
(7, '1673318863_MSIB - UI-UX Research Design - Nida Nur Affisah - 1901966.pdf', 'uiux', '2023-01-09 19:47:43', '2023-01-09 19:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `unduhan_pembayarans`
--

CREATE TABLE `unduhan_pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `dokumen` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unduhan_pembayarans`
--

INSERT INTO `unduhan_pembayarans` (`id`, `id_siswa`, `dokumen`, `judul`, `created_at`, `updated_at`) VALUES
(1, 13, '1674464173_37-80-3-PB.pdf', 'Lunas', '2023-01-23 01:56:13', '2023-01-23 01:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `unduhan_siswas`
--

CREATE TABLE `unduhan_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `type_dokumen` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumen` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unduhan_siswas`
--

INSERT INTO `unduhan_siswas` (`id`, `id_siswa`, `type_dokumen`, `dokumen`, `judul`, `created_at`, `updated_at`) VALUES
(6, 13, 'SKL', '1674468817_editor_dppm,+Aminudin+109-115.pdf', 'TIDAK LULUS', '2023-01-23 03:13:11', '2023-01-23 03:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `userlogins`
--

CREATE TABLE `userlogins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `jabatan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nisn` bigint(20) DEFAULT NULL,
  `nis` bigint(20) DEFAULT NULL,
  `ttl` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kompetensi_keahlian` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `alamat` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_orangtua` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon_orangtua` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `kelas_sekarang` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masuk_tahun` int(11) DEFAULT NULL,
  `status_kelulusan` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userlogins`
--

INSERT INTO `userlogins` (`id`, `email`, `password`, `nama`, `type`, `nip`, `jabatan`, `nisn`, `nis`, `ttl`, `kompetensi_keahlian`, `agama`, `anak_ke`, `alamat`, `telepon`, `nama_ayah`, `nama_ibu`, `alamat_orangtua`, `telepon_orangtua`, `pekerjaan_ayah`, `pekerjaan_ibu`, `tingkat`, `kelas_sekarang`, `masuk_tahun`, `status_kelulusan`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'smkkharismawita3depok@yahoo.com', '$2y$10$Nuroo2SLsQDKCZLo3.62Y.MFyhdD1Fleh6p4SWMyH1dV0rjvtPESm', 'SMKS Kharismawita 3 Depok', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-08 00:53:57', '2023-01-08 00:53:57'),
(2, 'zero@gmail.com', '$2y$10$hY3cEa.gxeeLaDFUIe6c0uJf1aAmJ1.QgA9M6l1cpS8WZGCMqEPwW', 'Zero', 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-01-07 20:31:53', '2023-01-07 20:31:53'),
(7, NULL, '$2y$10$Vj1dwnKVSEno02u6Kl1ok.7mkNWLVeTuYK6RhfCdqUAtdau32F.1a', 'Kristiono Hartanto, S.H', 'guru', 12345678, 'Kepala Sekolah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2023-01-08 04:49:17', '2023-01-08 04:49:17'),
(13, NULL, '$2y$10$JVZ.DP.4wepOshIz/XDTCuplNwx4IkVKcAdXHfgstvunJuDgDIOIG', 'Zero', 'siswa', NULL, NULL, 12345678, 12345678, 'Banten, 03-12-01', 'Manajemen Perkantoran Dan Layanan Bisnis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '3j', NULL, NULL, 0, '2023-01-09 19:52:29', '2023-01-09 19:52:29'),
(16, NULL, '$2y$10$I61UxZ3a5NDoGcrSzQyT/.YN/BgU8cqkOGvvaq5Uno.1hN6praB3G', 'Muhammad Rafli', 'siswa', NULL, NULL, 16, 997, 'Banten, 03-12-01', 'Akuntansi dan Keuangan Lembaga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2J', NULL, NULL, 0, '2023-01-23 02:18:03', '2023-01-23 02:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakurilulers`
--
ALTER TABLE `ekstrakurilulers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `formkontaks`
--
ALTER TABLE `formkontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerifotos`
--
ALTER TABLE `galerifotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerivideos`
--
ALTER TABLE `galerivideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programkeahlians`
--
ALTER TABLE `programkeahlians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_k_l_s`
--
ALTER TABLE `s_k_l_s`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `unduhandokumens`
--
ALTER TABLE `unduhandokumens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unduhan_pembayarans`
--
ALTER TABLE `unduhan_pembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unduhan_siswas`
--
ALTER TABLE `unduhan_siswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogins`
--
ALTER TABLE `userlogins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekstrakurilulers`
--
ALTER TABLE `ekstrakurilulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formkontaks`
--
ALTER TABLE `formkontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galerifotos`
--
ALTER TABLE `galerifotos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galerivideos`
--
ALTER TABLE `galerivideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `programkeahlians`
--
ALTER TABLE `programkeahlians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `s_k_l_s`
--
ALTER TABLE `s_k_l_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unduhandokumens`
--
ALTER TABLE `unduhandokumens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `unduhan_pembayarans`
--
ALTER TABLE `unduhan_pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unduhan_siswas`
--
ALTER TABLE `unduhan_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlogins`
--
ALTER TABLE `userlogins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
