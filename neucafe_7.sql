-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2023 at 04:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `neucafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `noTelp` varchar(2000) NOT NULL,
  `kodeManajer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `password`, `noTelp`, `kodeManajer`) VALUES
(1, 'rafli@gmail.com', 'rafli', '0812545590', '123124'),
(4, 'orang@gmail.com', 'orang', '08138496', '12312312'),
(6, 'juan@gmail.com', 'juan', '0124141514415', '0912041413'),
(7, 'bam@gmail.com', 'bam', '0930190923', '013413414'),
(8, 'zaki@gmail.com', 'zaki', '08123817874', '123123'),
(9, 'udin@gmail.com', 'udin', '092084023', '02930113'),
(11, 'ko@gmail.coma', 'ko', '034081414', '019230201'),
(28, 'koi@gmail.com', 'koi', '0124141511231', '031414135');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_relasi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_relasi`, `id_transaksi`, `id_produk`, `quantity`, `total_harga`) VALUES
(1, 26, 3, 5, 15000),
(2, 26, 1, 9, 3000),
(3, 26, 2, 7, 93000),
(5, 26, 3, 9, 93000),
(8, 26, 1, 4, 3000),
(9, 26, 2, 4, 15000),
(11, 26, 65, 5, 70000),
(12, 26, 2, 5, 70000),
(14, 26, 3, 8, 15000),
(15, 26, 3, 7, 15000),
(17, 26, 3, 3, 93000),
(18, 26, 2, 7, 3000),
(19, 26, 2, 1, 70000),
(20, 26, 3, 10, 70000),
(22, 26, 1, 6, 3000),
(23, 26, 3, 6, 70000),
(89, 52, 8, 3, 93000),
(90, 52, 8, 6, 15000),
(91, 52, 9, 10, 70000),
(92, 52, 6, 6, 93000),
(93, 52, 9, 8, 70000),
(94, 52, 8, 9, 70000),
(95, 52, 9, 2, 93000),
(96, 84, 6, 1, 3000),
(97, 84, 6, 2, 3000),
(98, 84, 6, 7, 3000),
(99, 84, 9, 7, 93000),
(100, 84, 6, 7, 93000),
(101, 84, 6, 4, 70000),
(102, 84, 8, 10, 3000),
(103, 84, 6, 7, 70000),
(104, 84, 9, 3, 70000),
(105, 84, 9, 4, 3000),
(106, 92, 9, 4, 15000),
(107, 92, 7, 8, 15000),
(108, 92, 6, 4, 15000),
(109, 92, 6, 4, 70000),
(110, 92, 6, 6, 93000),
(111, 92, 9, 5, 15000),
(112, 92, 6, 1, 3000),
(113, 92, 6, 6, 70000),
(114, 92, 8, 3, 15000),
(115, 92, 8, 9, 15000),
(116, 1, 1, 23, 483000),
(117, 3, 3, 8, 120000),
(118, 2, 2, 54, 1458000),
(119, 5, 65, 5, 100000),
(120, 1, 1, 23, 140000),
(121, 3, 3, 14, 320000),
(122, 2, 2, 12, 320000),
(123, 5, 65, 14, 350000);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `id_akun` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama`, `alamat`, `id_akun`) VALUES
(1, 'caferafl', 'jl.kimpulan lama', 1),
(3, 'cafehuan', 'jl.ngalanjaran', 6),
(4, 'cafezak', 'jl.kalimantan', 8),
(5, 'cafedin', 'jl.udin', 9),
(8, 'cafeko', 'jl.cafkoa', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_outlet` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga_jual` int(200) NOT NULL,
  `harga_beli` int(200) NOT NULL,
  `gambar_produk` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `stok`, `deskripsi`, `id_outlet`, `status`, `kategori`, `harga_jual`, `harga_beli`, `gambar_produk`) VALUES
(1, 'Expresso', 59, 'Ru7QqiOCkl', 1, 'JmKU3sDgYT', 'roZ4vyRC4B', 215790, 458339, 'r5NVSKB7gq.jpg'),
(2, 'Moca', 67, 'viYyBPD5HU', 1, 'D2ZZ6idEDS', 'cZ1u07B2Bz', 143267, 256557, '1uO6fAGvmM.jpg'),
(3, 'Chocolate', 25, 'BnVOuygKFF', 1, 'cVmKWvvfYz', 'w220hR7JYA', 444405, 343161, 'MUwlaafJsW.jpg'),
(6, 'Moca', 66, '2TwhJWoPSS', 3, 'Zy1u05JwZo', 'EHhbXbr8DD', 901714, 448963, 'AYOlAViKM8.jpg'),
(7, 'Booba', 20, 'IbQRwpLj33', 3, 'XIx4x2jMYo', 'RbZeGjHcTR', 101479, 355660, 'IwD9vDQ9Mm.jpg'),
(8, 'Vanila', 82, 'XEZNtEMxuc', 3, 'a3LD4YoO1z', 'MWzRSllQ8t', 718515, 881030, 'dO7KTycDEf.jpg'),
(9, 'Matcha', 26, 'qkW8r0FUCW', 3, 'PN4cbUPNGr', 'cl3Aoeu5Iu', 573999, 175942, 'fZ6C0Q7YuM.jpg'),
(11, 'Expresso', 21, 'z2nGiuv1WL', 3, 'VmGDWb2hH4', 'EFsLO4kvGA', 459687, 814693, 'XAYowoQEUz.jpg'),
(12, 'Chocolate', 35, 'xrLPhCXOyl', 3, 'I5zrkiE65Z', 'q25UmfoqkA', 249087, 227539, 'GxbZ9sxuMB.jpg'),
(13, 'Booba', 12, 'z4hh6vNywQ', 4, 'un5DZCcOvL', 'HqsESlavPV', 446066, 979277, '8RNFqrrWV4.jpg'),
(14, 'Expresso', 47, 'TYprkfFsOq', 4, 'uqTKYDKqxY', 'xBpFW5UUj4', 268370, 988716, '269AJMqsAh.jpg'),
(15, 'Chocolate', 30, '4DTw8PKHx4', 4, 'Xm1iGf9v2G', '2k0LheR6ke', 317143, 644916, 'Lu4c3JiFh5.jpg'),
(16, 'Moca', 32, 'yFUbgyBKFL', 4, 'DQkluqIaXR', 'rq2FUayQwL', 345869, 882845, 'ZwrPk4ClYs.jpg'),
(64, 'Vanila', 86, '1Cbrll6JAg', 4, '0pS84qRLac', '1aOi75JPcE', 553645, 636278, 'F2xqPT9gs8.jpg'),
(65, 'Ice Cream', 25, 'ice cream vanila, stroberi, dan coklat', 1, 'succes', 'minuman', 15000, 12000, '');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(11) NOT NULL,
  `rate_produk` int(11) NOT NULL,
  `rate_pelayanan` int(11) NOT NULL,
  `rate_tempat` int(11) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_customer` varchar(400) NOT NULL,
  `waktu_order` datetime NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `total_tagihan` int(11) NOT NULL,
  `total_harga_beli` varchar(400) NOT NULL,
  `jenis_transaksi` varchar(200) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_customer`, `waktu_order`, `metode_pembayaran`, `total_tagihan`, `total_harga_beli`, `jenis_transaksi`, `id_outlet`) VALUES
(1, 'zPzGvEXAOT', '2023-03-19 20:03:34', '7wVvrhOSoG', 605039, '647636', 'soNW8ZA533', 1),
(2, 'POYC7MAUKj', '2023-02-21 09:03:21', 'i9jWP95omE', 119737, '810606', 'x7rgcvBPnE', 1),
(3, 'xg7vHn3hpo', '2023-03-27 10:18:19', '5mcjr6PNp4', 964343, '224930', 'Kxtk8UjlKe', 1),
(4, 'AUuFNl7YGv', '2022-12-05 12:07:47', 'Fd0JVK4KrL', 248092, '534206', 'b47UkA09pA', 1),
(5, 'JCnaK8XSry', '2023-02-03 13:55:42', 'GHcZCfmOOM', 786122, '732382', 'ycKLJTWGYt', 1),
(6, 'bdWloe47jG', '2023-06-26 06:51:32', 'De3d1fJuiD', 188844, '716968', 'UzFJ1OwOiP', 1),
(7, 'fIqoYp5V35', '2023-02-14 11:35:03', 'nJsmnpWN4Z', 107954, '817944', 'dbT2Q4Jcfd', 1),
(8, 'LegFFd2IcL', '2022-11-02 14:52:23', 'owlj44W3Mn', 162894, '537772', 'VYPDZzbsZx', 1),
(9, 'Go1byghiOm', '2022-08-18 18:30:52', 'sh25khBxLy', 471721, '112021', 'IAYZ69mpWj', 1),
(10, 'Did6F49FNI', '2022-10-01 23:37:30', '3bKcbXMx3h', 411713, '205692', 'czBHi77meu', 1),
(11, '86N1OVHP8K', '2022-12-30 01:42:47', 'nD7HRkLpH0', 413371, '980232', 'hwx9dYXzQC', 1),
(12, '2H4OKHC7xo', '2023-02-08 22:11:08', '4tcUnATEUm', 779035, '544938', 'NVW2Ntr0kk', 1),
(13, 'c21lWtkUd5', '2022-12-02 14:15:42', 'oau8P7qOQX', 459948, '386730', 'UNp800X6WO', 1),
(14, 'LgeWvd4Ovf', '2023-01-06 12:06:18', 'n0UYaGJlln', 308452, '168348', 'C58p7OYD34', 1),
(15, 'NIz3tzxtJJ', '2023-04-04 11:12:22', 'qfNADAMVT0', 748324, '513842', 'vuDVvN8hsU', 1),
(16, '6oyvHyYJ2S', '2023-02-12 10:09:25', 'FWYzP9SMJp', 456922, '641718', 'E9cuK4zFpc', 1),
(17, 'aWofowy34o', '2023-03-14 19:33:39', 'G7INfPVWqG', 169787, '161799', '6RfFPqlB9m', 1),
(18, 'RdgyiH1rvG', '2022-12-09 18:56:19', 'giCvQquiE6', 664340, '880932', '5ZlOblb2En', 1),
(19, 'sZY6w0FydP', '2023-01-05 18:37:32', 'rnTS6O67Ka', 336971, '524929', '10HSvP6F1n', 1),
(20, 'amX4byQibO', '2023-07-21 09:15:51', 'fKaBMhAJvV', 497523, '648472', 'IIRFEv0RuL', 1),
(21, '0Vy2FQMPq2', '2023-07-12 23:49:12', 'L4iJQDZgt3', 792761, '883640', 'uFuutj1JXr', 1),
(22, 'XFTarU2DcG', '2023-07-17 20:52:52', 'IlETON5xGD', 748707, '454959', 'dBJ5Yk0WW7', 1),
(23, 'gKoxv7woSa', '2023-07-09 08:37:31', 'MwCSl4RAlq', 307898, '146739', '5mdt7ioed2', 1),
(24, 'W5QLGZcVkm', '2023-07-30 04:10:45', 'v2UFNdNwSH', 361637, '813360', 'PaAPBsEbRp', 1),
(25, '3mF3akNMEE', '2023-07-28 16:04:41', 'WmjXpX2G9X', 187040, '352066', 'vi1rXONGVA', 1),
(26, 'KAAJ0bp7Qw', '2023-07-12 10:24:55', '6g2966U50F', 533158, '424461', 'hTO8DyHX8s', 1),
(27, 'v1cpLAGeRe', '2023-07-12 20:00:55', 'dwDFvqCxtR', 955319, '539025', '9M8KoGVtJN', 1),
(28, 'GWudOmTQSV', '2023-07-25 22:28:44', 'AkTV2xvD8W', 376748, '145145', 'n9v2n237am', 1),
(29, 'B7veQBdFBX', '2023-07-08 18:58:52', 'eYDCV4VSju', 225599, '723543', 'elDeTojyr1', 1),
(30, 'a7Ipruu1wx', '2023-07-01 23:46:44', 'xtK5kVhcSW', 458776, '643441', 'JlMio9P9rA', 1),
(31, 'qEOcxVgwRH', '2023-07-11 21:59:58', '70vDx9XB8n', 672137, '420899', 'wWX7Qc3u2Y', 1),
(32, 'V7oszDniGZ', '2023-07-26 11:36:33', 'LTkhiKv0Vw', 647965, '687447', 'vKBsVoF3jX', 1),
(33, 'nMYySKwmt7', '2023-07-10 11:58:30', 'vTSyL7sTTK', 898125, '525334', 'tLN4UDUmjn', 1),
(34, 'ABHnX7abEs', '2023-07-13 23:19:26', 'Nk1bKMOptG', 678752, '445695', 'Kiv6DChlHy', 1),
(35, 'z4YBYIQTV5', '2023-04-05 01:29:37', 'cRtkj4Y3yE', 678405, '537261', 'l9vB4DITIv', 3),
(36, 'e4EkxJxUFb', '2022-10-03 12:52:35', 'MoqyLv8nhQ', 612980, '595193', 'cEASmnUpTW', 3),
(37, 'besupctcne', '2022-10-04 23:38:15', 'YsuI3hj5RI', 713533, '355803', 'd4qWhXQuy4', 3),
(38, 'atWpg2dGor', '2023-06-23 15:02:23', '7ebUhcKQKV', 380981, '574243', 'pd9AbPJQOe', 3),
(39, 'XbuGEaLlJi', '2022-11-19 20:47:48', 'tFyrnZZSTH', 453086, '492890', 'T0p9Obc5JS', 3),
(40, 'MJGVDhdsbY', '2023-03-19 04:25:52', '4Y08eNNR4u', 293049, '762709', 'phfk3UF5G3', 3),
(41, '8LVeIEe7UJ', '2022-11-21 09:19:51', 'wIeR4OEYz8', 632236, '371524', 'UysytziXAY', 3),
(42, 'YpslVAdE6R', '2023-03-02 23:07:36', 'L7NDeN0lja', 748550, '746333', 'NivmkJ1dpu', 3),
(43, 'zF6kSA18Fo', '2023-04-03 16:00:07', 'JxOBTuNrcp', 386250, '250211', 'LbmSwQ2HPu', 3),
(44, '9rDv7wmWPD', '2022-10-29 16:49:57', '7hruaev5bh', 271602, '910781', 'IS3FzvoJZ3', 3),
(45, 'SL0wVFpcpx', '2023-02-08 06:52:11', 'V3OXJ9coYO', 812766, '312877', '4qJrB8ntZY', 3),
(46, 'BXLbVVZdpU', '2022-10-26 19:34:29', 'rkjpVm3Qf1', 528390, '444282', 'UzQcEWzn47', 3),
(47, '2tx4BhIMuV', '2022-08-07 01:02:50', 'JkcTlExyIQ', 280130, '188148', 'hgUXwaNiJ3', 3),
(48, 'VdETGrRx3L', '2023-06-14 14:02:41', '4FsO8ZrmyF', 968811, '439502', '4GimeNI3yk', 3),
(49, 'tnzlfsxY7a', '2022-10-22 02:10:00', 'ADewdj3MwO', 295320, '703661', 'UO5CEYdyNG', 3),
(50, 'rv0A7PKIf3', '2023-06-17 08:11:21', '1Yn3Kjjr4X', 865263, '387833', 'hCFuROnSRd', 3),
(51, 'CwG7MHSoOh', '2023-03-21 19:18:46', 'Z3BhUPyHJR', 143798, '423980', 'EQNWovd9Xr', 3),
(52, 'SD0A8WaaZA', '2023-07-03 13:46:23', 'YDDfa3Bph2', 824737, '934919', '7a43YOf1HK', 3),
(53, 'SU3qDYxS0i', '2022-08-25 01:00:18', '5ey89Wijab', 274419, '563041', 'YuwFJADL0d', 3),
(54, 'x2mWfCB66m', '2023-04-08 21:23:12', 'y9wK3pm5AT', 490595, '339161', '0PZzV2vvoj', 3),
(55, 'G4vtVdZYt2', '2022-12-19 09:07:49', 'n6NgNZ7TDN', 978577, '365931', 'MwpfI0C8Ic', 3),
(56, '6VNTgWYa7D', '2022-10-11 15:29:34', 'WRJrrQEXiX', 754584, '806182', 'FQqNWrAqhL', 3),
(57, 'pjmhRDaDrE', '2023-06-28 13:23:19', 'BsNpwtPtG7', 498116, '586774', 'fxFIClFvzE', 3),
(58, '0hM8chIP1N', '2023-06-03 02:15:55', 'AudBeqGVAN', 234406, '261629', 'cwZy9FsQLe', 3),
(59, 'uvYuPvwA2y', '2023-02-18 23:10:42', 'aZpzU9I0Jy', 965955, '101564', 'CuVJXA9Lf3', 3),
(60, 'wuA4Yk86fp', '2023-02-13 14:30:01', 'SPkkLIjaC8', 136300, '801650', '7yeEVnTvdG', 3),
(61, '3l5kugYTZn', '2023-03-08 16:31:24', '2r014bzvCO', 445030, '238410', 'QnEFuqji8Z', 3),
(62, 'vpGMtWhkGW', '2023-02-14 19:15:19', '6KxQuJZ6ak', 648644, '806380', 'n7jGqDKIfe', 3),
(63, 'SP8x2KwOzK', '2023-05-20 17:40:29', 'D4MjqqxqmT', 458360, '179516', 'fFSjA0ys5E', 3),
(64, 'm6ND9gzA7S', '2022-11-20 07:10:26', 'GJDPb26wwP', 863022, '908227', 'lyuQsxyWyD', 3),
(65, 'YIoR0jqZ8y', '2023-04-27 15:05:10', 'kRWz8tJGaF', 887784, '124269', 'PwqvpV0YU4', 3),
(66, 'd9h8qFQnQA', '2023-01-12 08:22:10', 'VV3LdDN44O', 475320, '929571', 'HAiVhFfW9j', 3),
(67, 'zfV9TRDn99', '2022-11-24 03:21:33', 'OrLpAokcst', 809825, '798159', '1RCRtRfznR', 3),
(68, 'q26e7WJN31', '2023-05-19 05:21:45', '4xMIC4EAoz', 494890, '527213', 'sz6UqCpHax', 3),
(69, 'uJF4mfjlV7', '2023-04-16 01:08:28', 'dP1Bi19IA8', 855487, '396369', 'FHi0hVm18P', 3),
(70, 'wsjNp9cmQu', '2022-09-04 19:32:39', 'juB7BCPmjI', 853653, '884341', 'alBKGxsrQI', 3),
(71, 'rudqPXwXPq', '2023-06-14 04:48:12', 'BfNKPvtRbp', 615464, '888403', '3IZtnU6V0U', 3),
(72, 'SZtOTyK6Kh', '2023-04-11 12:34:03', 'lD1yOgpQfV', 939863, '781402', 'gob8LFwxEi', 3),
(73, 'Ak139xMbWg', '2023-05-23 12:33:06', 'iLBsQsTC9C', 448798, '463591', 'ei0EqDUBsI', 3),
(74, 'CtxTGvsxKf', '2023-04-06 04:13:11', 'aizzbn6dWP', 978774, '650546', 'ER5JvUIS3D', 3),
(75, 'EGWOBjmGAO', '2022-10-26 01:34:40', 'uAQ8VxSx8q', 283514, '911052', 'zLmwFoUDvc', 3),
(76, 'LMLdhsYswD', '2022-08-13 07:06:38', 'iuIFz8E0eT', 780176, '607320', 'J1UjFUSRei', 3),
(77, 'jFJl5LNOes', '2022-09-30 17:08:12', 'JvE1UfGCFE', 634091, '440889', 'BC3TBCvmbR', 3),
(78, 'yancRjOx1w', '2022-09-05 15:06:38', 'PNBMwv8IeD', 982639, '145987', 'zjFJvjjqtn', 3),
(79, 'g0FJO2ppzf', '2023-06-11 09:01:37', 'YmquE0oNXv', 541733, '644620', 'ALYNSWj3Ky', 3),
(80, 'hZLpkTLZaA', '2022-09-22 14:56:44', 'ACDaMPTsYI', 941495, '958305', '1ualCk7fT5', 3),
(81, 'zot2DHShQ1', '2022-12-10 16:46:45', 'hxNjiGcXOa', 518063, '184336', '01qdAWPAoM', 3),
(82, 'jfyi8pIJJw', '2022-08-04 19:24:20', 'JwW8DXiwbr', 706776, '795342', 'y5w5tI0eZ8', 3),
(83, 'bIlihncrP0', '2023-04-21 13:53:08', 'WuqSRFU8Qq', 464803, '448310', 'UYHPtexGDE', 3),
(84, '8mdexNKm38', '2023-07-03 22:22:31', '4nIkCChFeS', 512502, '209966', 'gpZpjnhy1Y', 3),
(85, '8dFOskudoP', '2022-09-20 04:54:37', '47sD01YUJn', 973892, '306550', 'AxbFZ2Pgsy', 3),
(86, 'X6DPcU3aCX', '2023-06-30 23:36:15', '9FRyD5NxzK', 440598, '644427', 'imoUk35ZE2', 3),
(87, 'kAMXJTWPCJ', '2022-08-12 08:13:26', 'e78BlJ4IKf', 601460, '796578', 'oQ58uMbYXR', 3),
(88, 'VXfR7nRuUJ', '2023-04-21 11:53:07', 'HaTalPUABF', 532545, '969982', 'sOEFpmy49V', 3),
(89, '8GQZDfnr8s', '2023-06-14 08:02:41', 'Zk7dMpsOcn', 387867, '251395', 'itSXJkfLFi', 3),
(90, 'hqWEgPXWTw', '2023-04-24 08:45:49', '4LICb3qGwB', 404923, '436694', '0soc4HFrDY', 3),
(91, 'RiKOSedhn6', '2022-09-15 22:00:24', 'FEHgyjEFnc', 626525, '275063', 'wUQywcge2D', 3),
(92, 'ndEozevBkL', '2022-07-15 18:36:38', 'uljyQTIQqs', 821023, '151960', 'ecdb8f6jBp', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'orang', 'rafli@gmail.com', NULL, 'rafli', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_relasi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

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
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_relasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `outlet`
--
ALTER TABLE `outlet`
  ADD CONSTRAINT `outlet_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_outlet`) REFERENCES `outlet` (`id_outlet`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
