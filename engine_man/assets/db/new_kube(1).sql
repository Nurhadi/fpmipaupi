-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2012 at 03:15 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_kube`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `artikel_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `description` varchar(160) NOT NULL,
  `content` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `ka_id` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `counter` int(11) NOT NULL DEFAULT '0',
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`artikel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `title`, `keyword`, `description`, `content`, `path`, `ka_id`, `tanggal`, `counter`, `user_id`) VALUES
(5, 'Roti Sharon Rasa Baru: Kismis Coklat', 'roti sharon', 'roti sharon dengan rasa baru yaitu kismis coklat', '<div style="text-align: justify; ">\n	Sharon Bakery adalah perusahaan yang bergerak dalam industri makanan. Perusahaan ini didirikan pada tahun 1988 di Jl. Rancajigang Majalaya, Kabupaten Bandung, Jawa Barat.&nbsp;<span style="text-align: justify; ">Pada tahun 2002, Sharon Bakery membuka cabang di Majalengka, dan dalam kurun waktu 10 tahun sesudahnya sudah membuka pabrik di Tegal, Manado, Makassar, Kediri, Banjarmasin, Banyuwangi, Lampung, Demak, Palembang, Bogor dan Bali. Pada tahun 2009, PT. MSRA membuka toko08 yang menjual produk-produk dengan brand Sharon Bakery &nbsp; &nbsp;yang bertempat di Hyper Square Jl. Pasir Kaliki Bandung. Sebagai produsen roti, PT Multi Star Rukun Abadi mempunyai kapasitas produksi s</span><span style="text-align: justify; ">ebesar 1.800 sak (45.000 kg) terigu per hari, dengan konsumen distributor roti, supermarket, toko eceran, pasar tradisional dan motoris. Adapun jenis produk yang dihasilkan adalah roti dan kue untuk konsumsi langsung.</span></div>\n<div style="text-align: justify; ">\n	Untuk dapat selalu memberikan kepuasan terhadap konsumen, PT Multi Star Rukun Abadi menerapkan ISO 9001: 2008 tentang Sistem Manajemen Mutu perusahaan. Dengan ini, perbaikan secara terus-menerus terhadap kinerja perusahaan dapat dilakukan, serta dapat menghasilkan produk yang &nbsp;bermutu dan higienis, sehingga layak dikonsumsi langsung oleh konsumen.&nbsp;PT Multi Star Rukun Abadi berorientasi kepada kepuasan konsumen dengan melakukan perbaikan terus menerus terhadap Sistem Manajemen Mutu perusahaan dan meningkatkan kualitas sumber daya manusia.</div>\n<div>\n	&nbsp;</div>\n', 'data/2436739550.jpg', 2, '2012-11-02 10:39:25', 51, 1);

-- --------------------------------------------------------

--
-- Table structure for table `beranda_item`
--

CREATE TABLE IF NOT EXISTS `beranda_item` (
  `beranda_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `desc` varchar(160) NOT NULL,
  `text_content` longtext CHARACTER SET utf8 NOT NULL,
  `path` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`beranda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `beranda_item`
--

INSERT INTO `beranda_item` (`beranda_id`, `title`, `desc`, `text_content`, `path`, `tanggal`, `user_id`) VALUES
(1, 'Welcome to New Kube', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim', 'data/1303949035.png', '2012-11-19 14:13:12', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bread`
--

CREATE TABLE IF NOT EXISTS `bread` (
  `bread_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`bread_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`bread_id`, `title`, `path`, `detail`, `tanggal`, `user_id`) VALUES
(1, 'Baguette', 'data/2855500243.jpg', '<p style="text-align: justify; ">\n	<strong>Roti&nbsp;</strong>ini dikenal juga sebagai French Bread. <strong>Roti</strong> tradisional asal Prancis ini memiliki kulit yang &nbsp;tebal, keras, berwarna kecoklatan, dengan rasa yang bersifat asam. Bentuknya panjang mirip tongkat. Anda bisa membuat garlic bread dengan roti ini sebagai pasangan dengan cream soup atau membuat bruschetta. Diameter standar dari Baguette adalah sekitar 5 atau 6 cm, panjangnya dapat mencapai 1 meter dan memiliki berat 250 gram. Baguette asli terbuat dari bahan &ndash; bahan yang tidak mengandung lemak dari adonan asam dan mempunyai banyak lubang atau pori-pori yang besar. Bagguette yang baik, ketika dipotong miring sesuai dengan alurnya, hanya meninggalkan remah yang sedikit.&nbsp;</p>\n', '2012-10-23 12:53:26', 1),
(2, 'Foccacia ', 'data/9471816141.jpg', '<p style="text-align: justify; ">\n	<strong>Roti tawar</strong> asal Italia ini seringkali diolah menjadi pizza dengan aneka topping. Dibuat dengan proses pemanggangan dan berbentuk oval atau kotak. Foccacia bisa dibuat dengan sangat tipis ataupun tebal, Foccacia tebal dapat langsung ditambahkan topping seperti bawang bombay, keju, rosemary, tomat, atau pun pepperoni. Di Italia, Foccacia merupakan camilan populer yang disantap begitu saja. Biasanya permukaannya diolesi dengan minyak zaitun, ditaburi irisan biji zaitun dan rempah &ndash; rempah daun yang beraroma sedap. Anda menyukai sandwich? Gunakan Foccacia untuk roti sandwich Anda.&nbsp;</p>\n', '2012-10-03 09:58:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(4) NOT NULL AUTO_INCREMENT,
  `artikel_id` int(4) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'unread',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `artikel_id`, `email`, `nama`, `text`, `tanggal`, `status`) VALUES
(13, 5, 'zuka@zukatsu.tk', 'zuka', 'comment artikel 32 lorem ipsum nya bagus... keren banget,,, ini juga pake gravatar hahaha... kurang panjang ga ya ini comment... harus panjang comment nya.. hahahahaa', '2012-09-26 09:40:09', 'approve'),
(14, 5, 'zuka@zukatsu.tk', 'zuka', 'ini test comment... masuk ga yah.. ', '2012-09-28 14:16:33', 'approve'),
(15, 5, 'andhikadhitya@yahoo.com', 'andhika', 'tester', '2012-10-24 15:26:15', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `contact_item`
--

CREATE TABLE IF NOT EXISTS `contact_item` (
  `contact_id` int(4) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact_item`
--

INSERT INTO `contact_item` (`contact_id`, `content`, `tanggal`, `user_id`) VALUES
(1, 'data/9251832.png', '2012-09-24 15:21:54', 1),
(2, '<p>\n	<span style="color:#A11D81; font-weight:bold; font-size:1.5em; font-family:arial;">CUSTOMER CARE</span></p>\n<p class="gray5" style="line-height:17px; margin-top:5px; font-size:1.2em">\n	+6222 595 59 59</p>\n<p class="gray5" style="line-height:17px; margin-top:5px; font-size:1.2em">\n	hello@sharonbakery.com</p>\n', '2012-09-24 15:33:06', 1),
(3, '<p>\n	<span style="color:#A11D81; font-weight:bold; font-size:1.5em; font-family:arial;">SHARON GALLERY</span></p>\n<p class="gray5" style="line-height:17px; margin-top:5px; font-size:1.2em">\n	Paskal Hypersquare Blok A - 51<br />\n	Jl. HOS Cokroaminoto (d/h Jl. Pasirkaliki)<br />\n	Bandung<br />\n	Phone: +6222 860 60 650</p>\n', '2012-09-24 15:33:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `download_item`
--

CREATE TABLE IF NOT EXISTS `download_item` (
  `di_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `mydesc` text NOT NULL,
  `path` varchar(255) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`di_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `download_item`
--

INSERT INTO `download_item` (`di_id`, `title`, `mydesc`, `path`, `counter`, `tanggal`, `user_id`) VALUES
(2, 'Testing', '<p>\n	Testing</p>\n', '1183115793.pdf', 1, '2012-12-01 10:54:26', 4);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `title`, `path`, `detail`, `tanggal`, `user_id`) VALUES
(1, 'Last Image', 'data/416752649.jpg', '', '2012-09-26 15:10:52', 1),
(2, 'Roti: Sejarah Makanan Tertua di Dunia ', 'data/7827978138.jpg', '<p style="text-align: justify; ">\n	<span style="text-align: justify; "><strong>Roti </strong>yang biasa kita makan saat sarapan memiliki sejarah yang cukup panjang. &nbsp;Diawali beribu tahun yang lalu, ketika manusia hidup mengembara dan berburu, gandum ya</span><span style="text-align: justify; ">ng mereka temukan dikunyah begitu saja tanpa diolah. Lama kelamaan, mereka mengetahui cara lain untuk menikmatinya, ditumbuk dan dilumat bersama air sehingga membentuk pasta. Pasta yang dimasak diatas api kemudian mengeras dan lebih tahan lama. Ternyata<strong> roti</strong> memang salah satu makanan tertua di dunia!</span></p>\n<div>\n	&nbsp;</div>\n', '2012-10-23 12:34:19', 1),
(3, '', 'data/4554725345.jpeg', '<p style="text-align: justify; ">\n	<span style="text-align: justify; ">Asal muasal <strong>roti</strong> sebenarnya berasal dari bangsa Mesir Kuno. <strong>Roti</strong> masa itu belum seenak seperti <strong>roti&nbsp;</strong>yang biasa kita makan sekarang. Cara membuatnya pun masih primitif: tepung, air, dan adonan ragi dicampur lalu diinjak-injak oleh para budak. Dibakar dalam tungku kuno berbentuk kerucut. Masa itu para pekerja Mesir tidak diupah dengan uang, tetapi dengan <strong>roti</strong>. sering disebut breadwinner atau orang yang berjuang untuk mendapat <strong>roti</strong>. Kata<strong> &rsquo;roti&rsquo;</strong> sering dipakai untuk menggantikan kata &rsquo;rezeki&rsquo;.</span></p>\n<div>\n	&nbsp;</div>\n<div>\n	&nbsp;</div>\n', '2012-10-23 12:34:57', 1),
(4, '', 'data/6354010002.jpg', '<p style="text-align: justify; ">\n	Bangsa Yunani mengambil teknologi pembuatan<strong> roti </strong>dari Mesir. Teknologi ini kemudian menyebar di seluruh Eropa dan dianggap penting oleh masyarakatnya. Di Roma <strong>roti </strong>dan gandum lebih penting daripada daging. Pada zaman itu warna<strong> roti </strong>membedakan &lsquo;kelas&rsquo; dalam masyarakat. Semakin gelap warna<strong> roti</strong>, maka semakin rendah satus sosialnya. Ini dikarenakan tepung putih mahal. Tidak seperti sekarang, <strong>roti </strong>mudah dibeli dimana pun dan dapat dikonsumsi semua kalangan tanpa batas karena harganya sangat terjangkau.</p>\n', '2012-10-23 12:33:59', 1),
(5, '', 'data/7810280611.jpg', '<p style="text-align: justify; ">\n	Sampai saat ini,<strong> roti </strong>tradisional di Timur Tengah, India, dan Afrika masih berbentuk pipih. Teknik paling dasar membuat <strong>roti</strong> seperti ini masih digunakan dibeberapa negara walau perkembangan teknik dan jenis <strong>roti</strong> modern semakin beragam. Lihat saja Tortila Mexico, <strong>Roti</strong> Canai India, Pitabread di Timur Tengah dan lain-lain. Pada abad pertengahan, <strong>roti</strong> telah berevolusi, terutama di Benua Eropa. Cita rasa <strong>roti</strong> termasuk <strong>roti tawar</strong> sudah sama seperti yang kita temukan saat ini, tentu saja dengan bentuk dan variasinya.</p>\n', '2012-10-23 12:36:13', 1),
(6, 'Tahukah Anda?', 'data/5981180886.jpg', '<ul>\n	<li style="text-align: justify; ">\n		<span style="text-align: justify; ">Otto Frederick Rohwedder (1880-1960) dikenal sebagai penemu mesin otomatis pemotong/pengiris </span><strong style="text-align: justify; ">roti tawar</strong><span style="text-align: justify; ">. Rohwedder bekerja cukup lama untuk mesin penemuannya te</span><strong style="text-align: justify; ">r</strong><span style="text-align: justify; ">sebut, sampai akhirnya, pada 7 Juli 1928, Rohwedder mampu membuat sejarah pertama kalinya: <strong>roti</strong> diiris dan dibungkus oleh sebuah mesin.&nbsp;</span></li>\n	<li style="text-align: justify; ">\n		Bangsa Mesir Kuno tidak hanya hebat dalam bidang arsitektur seperti membangun bendungan besar atau monumen seperti piramida, mereka juga mampu menciptakan <strong>roti</strong> dan menemukan cara untuk membuat <strong>roti tawar</strong> lebih enak.</li>\n</ul>\n<div>\n	&nbsp;</div>\n', '2012-10-23 12:41:40', 1),
(8, '', 'data/2553491983.jpg', '', '2012-10-23 12:41:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `how`
--

CREATE TABLE IF NOT EXISTS `how` (
  `how_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`how_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `how`
--

INSERT INTO `how` (`how_id`, `title`, `path`, `detail`, `tanggal`, `user_id`) VALUES
(1, 'Mengetahui Bahan Dasar Roti', 'data/7735015098.jpg', '<div style="text-align: justify; ">\n	Ketika mencoba membuat roti di rumah, akan ada banyak resep yang &ldquo;dicontek&rdquo; dan Anda akan &nbsp;menemukan beberapa bahan dasar yang terus menerus dipakai ketika Anda membuat roti. Bahan &ndash; bahan yang berbentuk cairan selalu digunakan dalam pembuatan roti. Namun takaran bahan &ndash; bahan ini dapat menciptakan rasa yang berbeda &ndash; beda jika Anda tidak konsisten dalam menakar. Berikut adalah bahan &ndash; bahan cair yang dapat membuat roti Anda seenak seperti di bakery.&nbsp;</div>\n<div style="text-align: justify; ">\n	&nbsp;</div>\n<ul>\n	<li style="text-align: justify; ">\n		Air, cairan utama yang digunakan untuk melarutkan ragi dan membentuk adonan roti&nbsp;</li>\n	<li style="text-align: justify; ">\n		Susu, digunakan untuk membuat kerak lembut, dan dapat digunakan sebagai pengganti air.</li>\n	<li style="text-align: justify; ">\n		Yogurt / Buttermilk, digunakan untuk menambah rasa (asam) untuk roti.</li>\n	<li style="text-align: justify; ">\n		Cairan lain yang mungkin digunakan ketika membuat roti adalah santan, bir, teh hijau, jus, dll...</li>\n</ul>\n<div style="text-align: justify; ">\n	&nbsp;</div>\n<div style="text-align: justify; ">\n	Kebanyakan bahan cairan yang digunakan dalam resep roti, selalu berada pada suhu kamar sebelum digunakan.&nbsp;</div>\n', '2012-10-05 12:59:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `image_about`
--

CREATE TABLE IF NOT EXISTS `image_about` (
  `id_image_about` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `image_title` varchar(30) NOT NULL,
  `image_filename` varchar(50) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_image_about`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `image_about`
--

INSERT INTO `image_about` (`id_image_about`, `image_title`, `image_filename`, `date_add`) VALUES
(0000019, 'Our Building', 'data/46517355.png', '2012-12-04 11:31:23'),
(0000020, 'Our Facility', 'data/996874244.png', '2012-12-04 11:31:41'),
(0000021, 'Our Office', 'data/307031759.png', '2012-12-04 11:31:57'),
(0000022, 'Our Lobby', 'data/1893398.png', '2012-12-04 11:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE IF NOT EXISTS `image_gallery` (
  `id_image_gallery` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `image_title` varchar(30) NOT NULL,
  `image_desc` longtext NOT NULL,
  `image_filename` varchar(50) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_image_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`id_image_gallery`, `image_title`, `image_desc`, `image_filename`, `date_add`) VALUES
(0000003, 'Ice Cream Bulk', '<p>\n	Ice Cream Bulk</p>\n', 'data/116099745.png', '2012-11-20 15:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `image_produk`
--

CREATE TABLE IF NOT EXISTS `image_produk` (
  `id_image_produk` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_produk` int(7) unsigned zerofill NOT NULL,
  `image_filename` varchar(50) NOT NULL,
  PRIMARY KEY (`id_image_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=175 ;

--
-- Dumping data for table `image_produk`
--

INSERT INTO `image_produk` (`id_image_produk`, `id_produk`, `image_filename`) VALUES
(0000157, 0000027, 'data/1156866407.png'),
(0000158, 0000027, 'data/340682612.png'),
(0000159, 0000027, 'data/188737392.png'),
(0000160, 0000027, 'data/966106520.png'),
(0000161, 0000027, 'data/192093871.png'),
(0000162, 0000027, 'data/670994565.png'),
(0000163, 0000028, 'data/1067876683.png'),
(0000164, 0000028, 'data/246873329.png'),
(0000165, 0000028, 'data/627145179.png'),
(0000166, 0000028, 'data/1250976912.png'),
(0000167, 0000028, 'data/309656697.png'),
(0000168, 0000028, 'data/530366703.png'),
(0000169, 0000029, 'data/291841540.png'),
(0000170, 0000029, 'data/1012064463.png'),
(0000171, 0000029, 'data/706926102.png'),
(0000172, 0000029, 'data/1178253202.png'),
(0000173, 0000029, 'data/1063487441.png'),
(0000174, 0000029, 'data/958188673.png');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `inbox_id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(6) NOT NULL DEFAULT 'unread',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `email`, `nama`, `text`, `tanggal`, `status`) VALUES
(1, 'zuka@zukatsu.tk', 'zuka', 'test programmer', '2012-06-13 10:28:23', 'read'),
(3, 'eva.frans10@yahoo.com', 'Eva Fransisca', 'saya mau tanya harga pipa, bisa tau harganya berapa?', '2012-06-21 13:32:13', 'read'),
(5, 'edp.slg@gmail.com', 'agus it', 'tes1', '2012-07-03 14:49:58', 'read'),
(6, 'mega_imamb@yahoo.co.id', 'imam', 'produk yang bagus', '2012-07-05 11:21:25', 'unread'),
(7, 'edp.slg@gmail.com', 'agus it', 'tes2', '2012-07-05 11:33:51', 'unread'),
(8, 'edp.slg@gmail.com', 'edp.slg', 'tes3', '2012-07-05 11:34:36', 'unread'),
(9, 'yanto_orion@yahoo.com', 'yanto', 'perkenalkan nama saya yanto,kebetulan saya membutuhkan segera pipa PVC SNI beserta accesoriesnya untuk proyek saya.\r\nhubungi saya di nomor 082129153820 an. yanto.', '2012-08-23 15:01:29', 'unread'),
(10, 'kwekcenter@gmail.com', 'Heri Fadillah', 'Apakah punya cabang di samarinda atau balikpaapan mohon infonya...', '2012-09-01 10:58:48', 'read'),
(11, 'zuka@zuka.tk', 'zuka', 'test', '2012-09-17 14:34:33', 'unread'),
(14, 'zuka@zukatsu.tk', 'zuka', 'ini message nya haru ada selamatnya', '2012-09-27 16:29:34', 'read'),
(15, 'zuka@zukatsu.tk', 'zuka', 'ini test hahaha.. berhasil ayeuna mah... ', '2012-09-27 16:30:32', 'read'),
(16, 'zuka@zukatsu.tk', 'zuka', 'saya meng contact sharon bakery', '2012-10-05 14:34:39', 'read'),
(17, 'zuka@zukatsu.tk', 'zuka', 'saya meng contact sharon bakery', '2012-10-05 14:35:05', 'read'),
(18, 'test@test.com', 'test', 'zuka', '2012-10-08 14:15:55', 'read'),
(19, 'eva.frans10@yahoo.com', 'eva', 'test test test', '2012-11-02 16:13:56', 'read'),
(20, 'zuka@zukatsu.tk', 'zuka', 'test', '2012-11-02 16:18:04', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `title`, `tanggal`, `user_id`) VALUES
(2, 'Bagelen', '2012-10-01 16:36:57', 1),
(3, 'Bagelen Kering', '2012-10-01 16:37:18', 1),
(4, 'Roti Manis', '2012-10-01 16:37:35', 1),
(5, 'Roti Tawar', '2012-10-01 16:37:45', 1),
(6, 'co:Co-Branding', '2012-10-23 13:43:20', 1),
(7, 'co:Private Label', '2012-10-23 13:43:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE IF NOT EXISTS `kategori_artikel` (
  `ka_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sort_id` int(4) NOT NULL DEFAULT '0',
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`ka_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`ka_id`, `title`, `sort_id`, `tanggal`, `user_id`) VALUES
(1, 'Uncategorized', 0, '2012-09-17 09:47:10', 1),
(2, 'New Product', 0, '2012-10-03 16:18:15', 1),
(4, 'New Promotion', 0, '2012-10-03 16:18:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE IF NOT EXISTS `market` (
  `market_id` int(4) NOT NULL AUTO_INCREMENT,
  `market_name` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`market_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`market_id`, `market_name`, `tanggal`, `user_id`) VALUES
(1, 'HYPERMART', '2012-10-20 12:38:03', 1),
(2, 'HERO GIANT', '2012-10-24 14:00:33', 1),
(3, 'CIRCLE', '2012-10-24 13:56:09', 1),
(4, 'ALFAMART', '2012-10-20 13:18:01', 1),
(5, 'SUPERINDO', '2012-10-20 13:18:13', 1),
(6, 'INDO GROSIR', '2012-10-24 14:10:52', 1),
(7, 'LOTTE MART', '2012-10-20 13:18:30', 1),
(8, 'RAMAYANA', '2012-10-20 13:19:16', 1),
(9, 'SB MART', '2012-10-20 13:19:41', 1),
(10, 'BORMA', '2012-10-20 13:19:46', 1),
(11, 'KARUNIA', '2012-10-20 13:19:59', 1),
(12, 'W-MART + GOLDEN', '2012-10-24 14:08:04', 1),
(13, 'SRI RATU', '2012-10-20 13:20:16', 1),
(14, 'UFO', '2012-10-20 13:20:26', 1),
(15, 'HOKI', '2012-10-20 13:20:32', 1),
(16, 'INDOMARET', '2012-10-24 13:57:23', 1),
(18, 'ALFA MIDI', '2012-10-24 13:56:51', 1),
(19, 'ALFA EXPRESS', '2012-10-24 13:58:03', 1),
(20, 'LAWSON', '2012-10-24 13:58:43', 1),
(21, 'YOMART', '2012-10-24 13:59:30', 1),
(22, 'JOGJA GRIYA', '2012-10-24 14:02:53', 1),
(23, 'SENTRAL SNACK MM', '2012-10-24 14:04:16', 1),
(24, 'CANDRA', '2012-10-24 14:04:36', 1),
(25, 'SLAMET TSB', '2012-10-24 14:05:02', 1),
(26, 'SURYA TSB', '2012-10-24 14:05:33', 1),
(27, 'SAMUDRA', '2012-10-24 14:06:06', 1),
(28, 'MODE GROUP', '2012-10-24 14:06:19', 1),
(29, 'MISI PASAR RAYA', '2012-10-24 14:06:29', 1),
(30, 'ASIA TSB', '2012-10-24 14:06:36', 1),
(31, 'PAKITA MART', '2012-10-24 14:06:48', 1),
(32, 'MILLENIUM', '2012-10-24 14:07:15', 1),
(33, 'O MART', '2012-10-24 14:07:21', 1),
(34, 'BIG MART', '2012-10-24 14:07:28', 1),
(35, 'BOUNJOR', '2012-10-24 14:07:36', 1),
(36, 'R-8 MART', '2012-10-24 14:08:14', 1),
(37, 'LANGGAN MM', '2012-10-24 14:08:20', 1),
(38, 'SUPER DISCOUNT', '2012-10-24 14:08:29', 1),
(39, 'FITRIMOF MM', '2012-10-24 14:08:43', 1),
(40, 'SAKINAH MM', '2012-10-24 14:08:54', 1),
(41, 'SWALAYAN TENTARA MM', '2012-10-24 14:09:02', 1),
(42, 'SMDT', '2012-10-24 14:09:09', 1),
(43, 'TIARA MM', '2012-10-24 14:09:15', 1),
(44, 'ALIFA MM', '2012-10-24 14:09:22', 1),
(45, 'SMART WAY', '2012-10-24 14:09:29', 1),
(46, 'NGESTI', '2012-10-24 14:09:40', 1),
(47, 'MITRA TOSERBA', '2012-10-24 14:09:51', 1),
(48, 'ECO MART', '2012-10-24 14:10:01', 1),
(49, 'SPBU PETRONAS', '2012-10-24 14:10:15', 1),
(50, 'FAMILY MART', '2012-10-24 14:10:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meta_item`
--

CREATE TABLE IF NOT EXISTS `meta_item` (
  `meta_id` int(4) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`meta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `meta_item`
--

INSERT INTO `meta_item` (`meta_id`, `content`) VALUES
(1, ''),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `natural_item`
--

CREATE TABLE IF NOT EXISTS `natural_item` (
  `natural_id` int(4) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`natural_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `natural_item`
--

INSERT INTO `natural_item` (`natural_id`, `content`, `tanggal`, `user_id`) VALUES
(1, 'data/8039377820.jpg', '2012-10-16 12:02:49', 1),
(2, '<p>\n	&nbsp;</p>\n<div style="text-align: justify; ">\n	<strong>Ragi alami</strong> atau <strong>natural yeast</strong> telah dipakai Bangsa Mesir kuno sejak zaman dahulu kala. Ragi adalah bahan yang digunakan untuk mengembangkan roti. Untuk mempermudah pembuatan roti, maka ragi diproduksi secara massal, menghasilkan ragi instan yang dijual bebas. Produsen roti pun lebih memilih menggunakan ragi instan karena proses produksi relatif lebih mudah dan cepat.</div>\n<div style="text-align: justify; ">\n	&nbsp;</div>\n<div style="text-align: justify; ">\n	Tapi, Sharon Bakery memahami bahwa penggunaan<strong> ragi alami</strong> membuat roti memiliki rasa yang klasik.</div>\n<div style="text-align: justify; ">\n	&nbsp;</div>\n<div style="text-align: justify; ">\n	<strong>Ragi alami</strong> (saccharomyces cerevisiae) ini harus dipelihara dengan treatment khusus untuk menghasilkan roti yang terbaik. Metode yang mirip juga yang dipakai untuk memelihara biang yogurt sehingga menghasilkan yogurt yang terbaik.</div>\n<div style="text-align: justify; ">\n	&nbsp;</div>\n<div style="text-align: justify; ">\n	<strong>Ragi alami</strong>&nbsp;atau <strong>natural yeast</strong> ini juga mengubah glukosa menjadi asam yang menghambat pertumbuhan jamur. Karena itu roti yang menggunakan ragi alami akan lebih tahan lama dibandingkan dengan roti yang menggunakan ragi instan.</div>\n<div>\n	&nbsp;</div>\n', '2012-10-16 12:02:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_newsletter` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` char(1) NOT NULL,
  `date_insert` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_newsletter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id_newsletter`, `nama`, `email`, `status`, `date_insert`) VALUES
(1, 'budi', 'stlocobudi@hotmail.com', 'y', '2012-09-29 12:15:26'),
(2, 'sadasd', 'support@easyonlinecare.com', 'y', '2012-10-01 10:17:25'),
(3, 'Eva Fransisca', 'eva.frans10@yahoo.com', 'y', '2012-10-05 13:40:50'),
(4, 'zuka', 'zuka@zukatsu.tk', 'y', '2012-10-05 13:47:10'),
(5, 'zuka', 'zuka@zukatsu.tk', 'y', '2012-10-05 13:48:51'),
(6, 'andhika', 'andhikadhitya@yahoo.com', 'y', '2012-10-24 14:29:15'),
(7, 'andhika', 'andhikadhitya@yahoo.com', 'y', '2012-10-24 14:29:18'),
(8, 'Eva', 'eva.frans10@yahoo.com', 'y', '2012-11-02 15:45:25'),
(9, 'zuka', 'zuka@zukatsu.tk', 'y', '2012-11-02 16:36:10'),
(10, 'Stephen Raditya', 'stephen.raditya@gmail.com', 'y', '2012-11-03 10:04:13'),
(11, 'Nurhadi Maulana', 'nurhadimaulana92@yahoo.com', 'y', '2012-11-05 09:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `ol_count`
--

CREATE TABLE IF NOT EXISTS `ol_count` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` int(11) NOT NULL DEFAULT '0',
  `stringip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `countrycode` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `countrycode` (`countrycode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ol_count`
--

INSERT INTO `ol_count` (`id`, `ip`, `stringip`, `country`, `countrycode`, `city`, `dt`) VALUES
(1, 2130706433, '127.0.0.1', '(Private Address)', 'XX', '(Private Address)', '2012-12-03 14:50:35'),
(2, 2130706433, '127.0.0.1', '(Private Address)', 'XX', '(Private Address)', '2012-12-04 13:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `ol_vis`
--

CREATE TABLE IF NOT EXISTS `ol_vis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` int(11) NOT NULL DEFAULT '0',
  `stringip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `countrycode` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `city` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`),
  KEY `countrycode` (`countrycode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ol_vis`
--

INSERT INTO `ol_vis` (`id`, `ip`, `stringip`, `country`, `countrycode`, `city`, `dt`) VALUES
(3, 2130706433, '127.0.0.1', '(Private Address)', 'XX', '(Private Address)', '2012-12-05 08:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `keyword` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `title`, `text`, `tanggal`, `keyword`, `description`, `user_id`) VALUES
(1, 'Contact Us', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim.</p>\n<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim.</p>\n', '2012-11-20 08:45:46', 'contact us, new kube', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim', 4),
(2, 'Where To Buy', '<hr style="background:#ccc; height:1px; border:none;">\r\n<table>\r\n   <tr>\r\n      <td width="100"><b>OCEANIA</b></td>\r\n      <td width="150"><b>AMERICAS</b></td>\r\n      <td width="120"><b>ASIA</b></td>\r\n      <td width="200"><b>EUROPE</b></td>\r\n   </tr>\r\n   <tr>\r\n      <td>Australia</td>\r\n      <td>Brazil</td>\r\n      <td>Hong Kong</td>\r\n      <td>Netherlands</td>\r\n   </tr>\r\n   <tr>\r\n      <td></td>\r\n      <td>The United States</td>\r\n      <td>Singapore</td>\r\n      <td>United Kingdom / Ireland</td>\r\n   </tr>\r\n   <tr>\r\n      <td></td>\r\n      <td></td>\r\n      <td>Indonesia</td>\r\n      <td></td>\r\n   </tr>\r\n</table>\r\n<hr style="background:#ccc; height:1px; border:none;">\r\n<b>\r\nGround Floor, 810 Pacific Highway<br>\r\nGordon NSW 2072<br>\r\nAUSTRALIA<br>\r\nTel: +612 9416 0851\r\n</b>', '2012-11-20 09:16:46', 'ini keyword where to buy', 'ini description where to buy', 4),
(3, 'Contact Us', 'contact us text', '2012-10-06 11:18:05', 'contact us, kontak kami', 'contact us kami disini untuk memberikan pertanyaan atau komentar mengenai produk Sharon Bakery', 1),
(4, 'My Skin', '-', '2012-11-21 09:00:19', 'new kube skin', 'skin new kube', 4),
(5, 'Gallery', '-', '2012-11-20 14:33:38', 'gallery images', 'gallery images new kube', 4),
(6, 'Register Product ', '-', '2012-11-21 11:52:58', 'register product keyword', 'register product description', 4),
(7, 'Download', '-', '2012-11-21 13:35:04', 'Download', 'download description', 4),
(8, 'Produk', '-', '2012-11-26 14:31:27', 'produk keyword', 'produk description', 4),
(9, 'Recipes', '<p>\n	ini text untuk resep... salah hahaha</p>\n', '2012-10-03 14:59:40', 'recipe, resep kue', 'recipe bulanan dari Sharon Bakery, bagaimana resep kue dapat dipraktekan di rumah', 1),
(10, 'My Skin', 'ini text recipes of the month...', '2012-11-20 09:47:35', 'recipe of the month', 'recipe of the month, resep bulanan yang dikirimkan oleh pembaca', 4),
(11, 'Sharon News', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac est ut elit adipiscing porta id ornare velit. Nulla facilisi. Nulla facilisi. Proin non nibh ornare nisi consequat semper. Sed mollis interdum lacinia. Integer tristique lectus a dui aliquam auctor. Maecenas at arcu sit amet nunc placerat ultrices. Nam sit amet ipsum vel eros viverra laoreet. Nullam ac purus felis. Cras augue urna, scelerisque ac ultrices vitae, viverra ac turpis. Maecenas bibendum adipiscing elementum. In interdum augue et turpis interdum rhoncus. Donec eu leo eget velit pulvinar congue. Quisque sed libero non sem volutpat porta at eu nunc. Sed ac tellus eu arcu hendrerit consectetur et vel felis. Donec arcu ante, euismod vitae commodo quis, blandit non mi.\r\n\r\nSed et condimentum ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras porttitor tincidunt sapien molestie imperdiet. Etiam at lectus augue. Aliquam mi purus, feugiat nec suscipit id, ullamcorper in libero. Quisque vitae porttitor velit. Maecenas laoreet sollicitudin enim, in sodales nisi vestibulum id. Proin scelerisque auctor arcu, non molestie nisi ultricies sed. Sed sed nisi lacus, at scelerisque augue. Praesent tellus quam, vehicula et vehicula at, mattis id dolor.\r\n\r\nVestibulum erat ligula, gravida a facilisis vel, condimentum imperdiet augue. In condimentum molestie erat id semper. In elementum porttitor quam, eget congue arcu aliquam mollis. Nullam hendrerit volutpat nunc, a interdum libero ultricies imperdiet. Cras lacus arcu, mollis ut placerat sit amet, vestibulum ut metus. Aenean euismod mauris in sem scelerisque dictum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam quis blandit velit. Curabitur euismod ultricies odio, vel elementum augue fringilla sit amet. Proin fringilla ullamcorper odio, sed imperdiet quam cursus quis. Etiam nec ipsum at felis semper suscipit vel sit amet lorem. Donec sollicitudin, libero in tincidunt aliquet, mauris mauris volutpat diam, bibendum tempor justo diam id orci. Pellentesque nisi ipsum, posuere a interdum vel, congue et velit. Mauris risus erat, consequat sed egestas vitae, faucibus sit amet nisl. Quisque ante lectus, vulputate non pharetra et, sollicitudin id nisl. Morbi venenatis vehicula tellus a placerat.\r\n\r\nPraesent nec dui in nibh venenatis facilisis non faucibus ipsum. Morbi a leo ut odio pulvinar congue eget sit amet justo. Sed rutrum tellus eu lorem volutpat vitae dictum velit laoreet. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed et metus mauris. Praesent ut euismod nibh. Proin sagittis tellus sit amet arcu mollis ut ullamcorper odio condimentum. Quisque in ornare lacus. Curabitur a risus lectus.\r\n\r\nSed velit arcu, condimentum ut molestie et, aliquet at arcu. Donec imperdiet, nisi id pulvinar iaculis, orci magna adipiscing ipsum, id ullamcorper leo mauris sit amet orci. Ut tempor congue urna, quis iaculis mauris blandit sed. Mauris vitae euismod quam. Aliquam tincidunt ligula id mi gravida eget suscipit ante convallis. Donec eget tempor purus. Sed dignissim hendrerit massa at sagittis. Suspendisse non neque est. Duis aliquam mollis purus, ac luctus mauris sodales ultricies. In elementum ornare ornare. ', '2012-09-15 10:11:44', 'kumpulan artikel menarik sharon', 'kumpulan artikel menarik sharon, untuk di praktekan di rumah sendiri', 1),
(12, 'Natural Yeast', 'ini text natural yeast', '2012-10-23 12:47:26', 'ragi alami, natural yeast', 'Ragi alami atau natural yeast telah dipakai Bangsa Mesir kuno sejak zaman dahulu kala. ', 1),
(13, 'Contact Us', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</p>\n<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</p>\n<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</p>\n', '2012-11-19 15:56:39', 'new cube, contact, contact us', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim', 4),
(14, 'Where To Buy', '<hr style="background:#ccc; height:1px; border:none;">\n<table>\n   <tr>\n      <td width="100"><b>OCEANIA</b></td>\n      <td width="150"><b>AMERICAS</b></td>\n      <td width="120"><b>ASIA</b></td>\n      <td width="200"><b>EUROPE</b></td>\n   </tr>\n   <tr>\n      <td>Australia</td>\n      <td>Brazil</td>\n      <td>Hong Kong</td>\n      <td>Netherlands</td>\n   </tr>\n   <tr>\n      <td></td>\n      <td>The United States</td>\n      <td>Singapore</td>\n      <td>United Kingdom / Ireland</td>\n   </tr>\n   <tr>\n      <td></td>\n      <td></td>\n      <td>Indonesia</td>\n      <td></td>\n   </tr>\n</table>\n<hr style="background:#ccc; height:1px; border:none;">\n<b>\nGround Floor, 810 Pacific Highway<br>\nGordon NSW 2072<br>\nAUSTRALIA<br>\nTel: +612 9416 0851\n</b>', '2012-11-20 09:16:11', 'ini keyword where to buy', 'ini description where to buy a', 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(40) NOT NULL,
  `desc` longtext NOT NULL,
  `desc2` longtext NOT NULL,
  `desc3` longtext NOT NULL,
  `meta_keywords` varchar(200) NOT NULL,
  `meta_desc` varchar(200) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `desc`, `desc2`, `desc3`, `meta_keywords`, `meta_desc`, `date_add`) VALUES
(0000027, 'newKube', '<p>\n	<img alt="" src="http://localhost/a_new_kube/media/logo_new_kube_black.png" style="width: 311px; height: 45px;" /></p>\n<p>\n	&nbsp;</p>\n<p>\n	<br />\n	<img alt="" src="http://localhost/a_new_kube/media/img_produk_big.png" style="width: 445px; height: 285px;" /></p>\n<p>\n	&nbsp;</p>\n<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', '<h3>\n	NewKube Interface</h3>\n<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', 'newKube', 'newKube', '2012-12-01 06:39:36'),
(0000028, 'newKube 2', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', '<h3>\n	NewKube 2 Interface</h3>\n<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', 'newKube 2', 'newKube 2', '2012-12-03 10:14:00'),
(0000029, 'The newKube', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.<br />\n	&nbsp;</p>\n', '<h3>\n	The NewKube Interface</h3>\n<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', '<p>\n	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>\n', 'The newKube', 'The newKube', '2012-12-03 10:13:27');

-- --------------------------------------------------------

--
-- Table structure for table `produk_item`
--

CREATE TABLE IF NOT EXISTS `produk_item` (
  `pi_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `kategori_id` int(4) NOT NULL,
  `path` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`pi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `produk_item`
--

INSERT INTO `produk_item` (`pi_id`, `title`, `kategori_id`, `path`, `detail`, `tanggal`, `user_id`) VALUES
(21, 'Bagelen Roomboter Original', 3, 'data/4609973691.jpg', '<p style="text-align: justify; ">\n	Bagelen Kering Roomboter Original (oval) merupakan cemilan sehat untuk seluruh keluarga Anda. Resep klasik dari Sharon Bakery ini, dipadukan dengan teknologi modern sehingga menghasilkan penganan jenis bagelen renyah yang higienis. &nbsp;Rasa manis dari cream roomboter serta roti berbentuk oval yang dibuat garing, dapat menjadi peneman minum teh di segala suasana. &nbsp;Tersedia dalam bentuk dan rasa lainnya: Bagelen Kering Crispy Roomboter (bulat) dan Bagelen Kering Roomboter Cheese.</p>\n', '2012-10-29 12:58:50', 1),
(22, 'Crispy Roomboter', 3, 'data/5135036422.jpg', '<p>\n	Bagelen Kering Crispy Roomboter (bulat) merupakan cemilan sehat untuk seluruh keluarga Anda. Resep klasik dari Sharon Bakery ini, dipadukan dengan teknologi modern sehingga menghasilkan penganan jenis bagelen renyah yang higienis. &nbsp;Rasa manis dari cream roomboter serta roti yang dibuat garing, dapat menjadi peneman minum teh di segala suasana. &nbsp;Tersedia dalam bentuk dan rasa lainnya: Bagelen Kering Roomboter Original (oval) dan Bagelen Kering Roomboter Cheese.</p>\n', '2012-10-05 13:38:10', 1),
(23, 'Mini Roomboter Cheese', 2, 'data/6541832918.jpg', '<p style="text-align: justify; ">\n	&nbsp;Roti mini dengan rasa istimewa. Roti isi lapisan cream roomboter yang lembut, ditambah dengan lembaran keju gurih. Ragi alaminya menambah keistimewaan rasa dari bagelen mini Sharon Bakery ini. Sajikan Mini Roomboter Cheese sebagai menu pembuka di pesta Anda.&nbsp;</p>\n', '2012-10-29 13:06:29', 1),
(24, 'Roomboter Cheese isi 1', 2, 'data/9969856692.jpg', '<p style="text-align: justify; ">\n	Anda pencinta keju? Sharon Bakery melengkapi produk bagelennya dengan Bagelen Roomboter Cheese Isi 1, dengan kemasan yang lebih praktis, sekarang Anda dapat menikmati roti isi keju plus cream roomboter yang gurih. Kemasan higienis dan fresh, rasa yang enak dan berkulitas.&nbsp;</p>\n', '2012-10-05 13:39:46', 1),
(26, 'Roomboter Cheese', 2, 'data/7185535859.jpg', '<p style="text-align: justify; ">\n	Sekarang Anda bisa menikmati bagelen dengan berbagai rasa. Coba Bagelen Roomboter Cheese dari Sharon Bakery, roti bagelen dengan isi cream roomboter dan keju. Perpaduan rasa gurih dan asin dari cream roomboter dan keju-nya menghasilkan kombinasi rasa unik di lidah. Tersedia dalam rasa lainnya: Cream Messes dan Roomboter.</p>\n', '2012-10-29 13:25:07', 1),
(27, 'Mini Roomboter', 2, 'data/9897855543.jpg', '<p style="text-align: justify; ">\n	Nikmati kelezatan gurih dan manis-nya Bagelen roombooter Sharon Bakery dengan ukuran mini. Bagelen Mini Roomboter dapat menjadi teman Anda disaat &nbsp;sarapan, peneman minum teh ataupun cemilan saat bersantai bersama keluarga di rumah.</p>\n', '2012-10-29 13:29:28', 1),
(28, 'Roomboter', 2, 'data/3332051783.jpg', '<p style="text-align: justify; ">\n	Bagelen isi cream roomboter dengan kualitas istimewa dari Sharon Bakery. Rasanya yang gurih, manis dan lezat di lidah menjadikannya favorit para penikmat roti. Tersedia dalam rasa lainnya: Cream Messes dan Roomboter Cheese.</p>\n', '2012-10-29 13:30:38', 1),
(29, 'Mini Cream Messes', 2, 'data/2427403321.jpg', '<p style="text-align: justify; ">\n	Sarapan sekali gigit dengan double rasa. Cream lembut dan messes manis-nya, menjadikan Mini Cream Messes dari Sharon Bakery cocok untuk anak &ndash; anak Anda. Jadikan Bagelen berukuran mini ini sebagai bekal praktis di sekolah.</p>\n', '2012-10-29 13:36:03', 1),
(30, 'Cream Messes isi 1', 2, 'data/170727497.jpg', '<p style="text-align: justify; ">\n	Mau sarapan yang lebih praktis? Coba Cream Messes Isi 1 dari Sharon Bakery! Sekarang Anda bisa sarapan dimana pun dan kapan pun, lebih praktis dan cepat. Nikmati sarapan Roti Sharon enak dan sehat ini bersama dengan cream-nya yang lembut dan messes manis yang lezat. &nbsp;</p>\n', '2012-11-06 15:43:14', 1),
(31, 'Cream Messes', 2, 'data/9817391713.jpg', '<p style="text-align: justify; ">\n	Yuk, sarapan dengan Bagelen Cream Meses dari Sharon Bakery. Rotinya yang fresh, rasa asin dari cream-nya, serta manis dari coklat meses-nya akan membuat sarapan lebih kaya rasa dan sehat. Sajikan untuk seluruh keluarga Anda di pagi hari. Tersedia dalam rasa lainnya: Roomboter dan Roomboter Cheese</p>\n', '2012-10-29 13:49:07', 1),
(32, 'Bagelen Roomboter Cheese', 3, 'data/4541963320.jpg', '<p style="text-align: justify; ">\n	Bagelen Kering Roomboter Cheese (oval) merupakan cemilan sehat untuk seluruh keluarga Anda. Resep klasik dari Sharon Bakery ini, dipadukan dengan teknologi modern sehingga menghasilkan penganan jenis bagelen renyah yang higienis. &nbsp;Rasa manis dari cream roomboter ditambah topping keju, serta roti berbentuk oval yang dibuat garing, dapat menjadi peneman minum teh di segala suasana. &nbsp;Tersedia dalam bentuk dan rasa lainnya: Bagelen Kering Crispy Roomboter (bulat) dan Bagelen Kering Roomboter Original (oval).</p>\n', '2012-10-29 13:54:04', 1),
(33, 'Roti Sisir', 4, 'data/3043433236.jpg', '<p style="text-align: justify; ">\n	Roti Sisir yang diproduksi oleh Sharon Bakery merupakan salah satu jenis roti oles yang mungkin sudah tidak lagi menjadi tren di bidang usaha roti. Roti dengan bentuk dan rasa yang akan mengingatkan Anda pada masa kanak &ndash; kanak ini, telah dikemas dengan lebih modern dan tentu saja higienis. Dapatkan segera Roti Sisir dari Sharon Bakery dengan olesan melted creamnya yang menggiurkan.</p>\n', '2012-10-29 13:54:57', 1),
(34, 'Sobek Coklat', 4, 'data/6976199238.jpg', '<p style="text-align: justify; ">\n	Roti Sobek yang diproduksi oleh Sharon Bakery merupakan salah satu jenis roti manis yang mungkin jarang diproduksi lagi oleh perusahaan roti modern. Roti manisnya yang lembut dilengkapi dengan coklat melted, menghasilkan kombinasi rasa manis yang pas. Tersedia dalam rasa lainnya: Roti Sobek Coklat Keju.</p>\n', '2012-10-05 13:38:32', 1),
(35, 'Sobek Coklat Keju', 4, 'data/def.png', '<p style="text-align: justify; ">\n	Roti Sobek yang diproduksi oleh Sharon Bakery merupakan salah satu jenis roti manis yang mungkin jarang diproduksi lagi oleh perusahaan roti modern. Roti manisnya yang lembut dilengkapi dengan coklat melted dan keju gurih, menghasilkan kombinasi rasa manis dan asin yang pas. Tersedia dalam rasa lainnya: Roti Sobek Coklat.</p>\n', '2012-10-05 13:39:03', 1),
(36, 'Roti Tawar Panjang', 5, 'data/3927549663.jpg', '<div style="text-align: justify; ">\n	Roti Tawar Panjang dari Sharon Bakery dibuat dari bahan &ndash; bahan alami, rasanya tawar, karena dalam proses pembuatannya tanpa dicampuri bahan lain. Roti Tawar Panjang berbentuk persegi ini, berwarna putih dan cokelat pada bagian tepinya. &nbsp;Roti Tawar Panjang Sharon Bakery dapat disantap sebagai menu sarapan bersama margarin, messes, aneka selai atau irisan daging, telur, dan bahan makanan lainnya.</div>\n<div>\n	&nbsp;</div>\n', '2012-10-29 13:57:34', 1),
(37, 'Roti Tawar Bundar', 5, 'data/5197625285.jpg', '<p style="text-align: justify; ">\n	Roti Tawar Panjang (bulat) dari Sharon Bakery dibuat dari bahan &ndash; bahan alami, rasanya tawar, karena dalam proses pembuatannya tanpa dicampuri bahan lain. Roti Tawar Panjang berbentuk bulat ini, berwarna putih dan cokelat pada bagian tepinya. &nbsp;Roti Tawar Panjang (bulat) Sharon Bakery dapat disantap sebagai menu sarapan bersama margarin, messes, aneka selai atau irisan daging, telur, dan bahan makanan lainnya.&nbsp;</p>\n', '2012-10-29 13:58:00', 1),
(38, 'Roti Tawar Kupas', 5, 'data/3805814920.jpg', '<div>\n	Roti Tawar Kupas dari Sharon Bakery dibuat dari bahan &ndash; bahan alami, rasanya tawar, karena dalam proses pembuatannya tanpa dicampuri bahan lain. Roti Tawar Panjang berbentuk persegi ini, berwarna putih dan tanpa kulit (kupas). &nbsp;Roti Tawar Kupas Sharon Bakery ini lebih lembut dan dapat disantap sebagai menu sarapan bersama margarin, messes, aneka selai atau irisan daging, telur, dan bahan makanan lainnya.</div>\n<div>\n	&nbsp;</div>\n', '2012-10-29 13:58:22', 1),
(39, 'Paroti - Sharon', 6, 'data/def.png', '<p>\n	Dapatkan Paroti - Sharon Bread, di seluruh gerai Alfamart seluruh Jawa Barat</p>\n', '2012-11-02 09:53:52', 1),
(40, 'Indomaret', 7, 'data/1410038727.jpg', '<p>\n	Dapatkan di seluruh gerai Indomaret seluruh Jawa Barat</p>\n', '2012-11-06 15:42:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `provinsi_id` int(4) NOT NULL AUTO_INCREMENT,
  `nama_provinsi` varchar(255) NOT NULL,
  `latlng` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`provinsi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`provinsi_id`, `nama_provinsi`, `latlng`, `tanggal`, `user_id`) VALUES
(1, 'ACEH', '4.97056,96.756592', '2012-10-20 10:36:55', 1),
(2, 'BALI', '-8.350106,115.180664', '2012-10-20 10:38:31', 1),
(3, 'BANTEN', '-6.345327,106.064758', '2012-10-20 10:39:24', 1),
(4, 'BENGKULU', '-3.772448,102.262115', '2012-10-20 10:57:54', 1),
(5, 'GORONTALO', '0.558921,123.066101', '2012-10-20 10:58:14', 1),
(6, 'JAKARTA', '-6.194486,106.846848', '2012-10-20 10:58:28', 1),
(7, 'JAMBI', '-1.345701,102.425537', '2012-10-20 10:58:42', 1),
(8, 'JAWA BARAT', '-6.970049,107.698975', '2012-10-20 10:58:55', 1),
(9, 'JAWA TENGAH', '-7.01912,110.12146', '2012-10-20 10:59:10', 1),
(10, 'JAWA TIMUR', '-7.416942,112.230835', '2012-10-20 10:59:22', 1),
(11, 'KALIMANTAN BARAT', '0.263671,111.489258', '2012-10-20 10:59:45', 1),
(12, 'KALIMANTAN SELATAN', '-2.910125,115.301514', '2012-10-20 11:00:00', 1),
(13, 'KALIMANTAN TENGAH', '-1.439058,113.36792', '2012-10-20 11:00:15', 1),
(14, 'KALIMANTAN TIMUR', '2.130856,116.477051', '2012-10-20 11:00:32', 1),
(15, 'KEPULAUAN BANGKA BELITUNG', '-2.613839,106.45752', '2012-10-20 11:00:52', 1),
(16, 'KEPULAUAN RIAU', '4.19303,108.138428', '2012-10-20 11:01:09', 1),
(17, 'LAMPUNG', '-3.557283,105.336914', '2012-10-20 11:01:21', 1),
(18, 'MALUKU', '-2.975956,130.198975', '2012-10-20 11:01:36', 1),
(19, 'MALUKU UTARA', '2.064982,127.792969', '2012-10-20 11:01:57', 1),
(20, 'NUSA TENGGARA BARAT', '-8.537565,117.355957', '2012-10-20 11:02:15', 1),
(21, 'NUSA TENGGARA TIMUR', '-8.3963,121.080322', '2012-10-20 11:02:30', 1),
(22, 'PAPUA', '-3.732708,139.240723', '2012-10-20 11:02:44', 1),
(23, 'PAPUA BARAT', '-0.76902,133.044434', '2012-10-20 11:03:00', 1),
(24, 'RIAU', '1.318243,101.821289', '2012-10-20 11:03:31', 1),
(25, 'SULAWESI BARAT', '-1.757537,119.091797', '2012-10-20 11:03:49', 1),
(26, 'SULAWESI SELATAN', '-3.140516,119.926758', '2012-10-20 11:04:03', 1),
(27, 'SULAWESI TENGAH', '-1.032659,121.486816', '2012-10-20 11:04:18', 1),
(28, 'SULAWESI TENGGARA', '-3.074695,122.211914', '2012-10-20 11:04:33', 1),
(29, 'SULAWESI UTARA', '1.142502,124.035645', '2012-10-20 11:04:47', 1),
(30, 'SUMATERA SELATAN', '-2.152814,104.194336', '2012-10-20 11:06:12', 1),
(31, 'SUMATERA UTARA', '2.701635,99.51416', '2012-10-20 11:06:31', 1),
(32, 'YOGYAKARTA', '-7.788554,110.368996', '2012-10-20 11:06:49', 1),
(33, 'SUMATERA BARAT', '-0.241699,100.898438', '2012-10-20 11:08:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id_register` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `no_kartu_garansi` varchar(30) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `nama_toko` varchar(40) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `propinsi` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` int(4) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_register`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id_register`, `no_kartu_garansi`, `tanggal_pembelian`, `nama_toko`, `nama_lengkap`, `email`, `telepon`, `alamat`, `propinsi`, `jenis_kelamin`, `umur`, `date_add`) VALUES
(0000001, '1234567890', '2012-11-21', 'Invinity Store', 'Nurhadi Maulana', 'nurhadimaulana92@yahoo.com', '080808080808', 'Jl. Maleber Utara No.33', 'Jawa Barat', 'Laki-laki', 20, '2012-11-21 08:50:54'),
(0000002, '0987654321', '2012-11-21', 'Fadisti', 'Sastiani Gita Prasastie', 'sasti@yahoo.com', '080707070707', 'Jl. Naripan No. 30 Bandung', 'Jawa Barat', 'Perempuan', 20, '2012-11-21 08:54:32'),
(0000005, '1231231231', '2012-12-28', 'Fadisti Store II', 'Sastiani Gita Prasastie', 'sasti@yahoo.com', '080707070707', 'Jawa Barat', 'Jawa Tengah', 'Perempuan', 20, '2012-11-21 00:00:00'),
(0000006, '3213213213', '2012-12-28', 'Invinity Store II', 'Nurhadi Maulana II', 'nurhadimaulana92@yahoo.com', '080808080808', 'Jawa Barat', 'Jawa Barat', 'Laki-laki', 20, '2012-11-21 00:00:00'),
(0000010, '0809070605', '2012-09-23', 'Hattrick Cell', 'Nurhadi Maulana', 'nurhadimaulana92@gmail.com', '08562009938', 'Jl. Maleber Utara No.33 Rt.03 Rw.04', 'Jawa Tengah', '', 20, '2012-11-21 11:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `resep_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`resep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`resep_id`, `title`, `path`, `detail`, `tanggal`, `user_id`) VALUES
(1, 'Strawberry Ice Cream Whitebread', 'data/869844426.png', '<p>\n	Ingredients :<br />\n	1 Pack of Whitebread<br />\n	1 Box of Strawberry Flavoured Ice Cream<br />\n	<br />\n	Topping :<br />\n	Strawberry Fruits Directions :<br />\n	1. Spread the whitebread evenly with the strawberry...</p>\n', '2012-09-21 10:22:46', 1),
(2, 'Grandma''s Holiday Apple Pie', 'data/309613666.jpg', '<p>\n	Ingredients:<br />\n	Thinly-sliced apples:<br />\n	6 cups White sugar: 3/4 cup ...<br />\n	<br />\n	Directions:<br />\n	1. Cut and peel apples<br />\n	2. Mix sugar and cinnamon. Use additional sugar for tart apples. ...</p>\n', '2012-10-03 14:59:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resep_otm`
--

CREATE TABLE IF NOT EXISTS `resep_otm` (
  `resep_otm_id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `fpath` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `cara` text NOT NULL,
  `bulan` int(1) NOT NULL,
  `tahun` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`resep_otm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `resep_otm`
--

INSERT INTO `resep_otm` (`resep_otm_id`, `nama`, `fpath`, `kota`, `title`, `path`, `detail`, `cara`, `bulan`, `tahun`, `tanggal`, `user_id`) VALUES
(4, 'Just Iron Man', 'data/1017959583.jpg', 'New York', 'Burning Iron Man', 'data/def.png', '<p>\n	Burning iron man...</p>\n', '<p>\n	just shoot iron man with lava rocket... mwahaha</p>\n', 0, 2012, '2012-10-06 12:45:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sharon_store_img`
--

CREATE TABLE IF NOT EXISTS `sharon_store_img` (
  `ssi_id` int(4) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`ssi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sharon_store_img`
--

INSERT INTO `sharon_store_img` (`ssi_id`, `path`, `tanggal`, `user_id`) VALUES
(12, 'data/5647001941.jpg', '2012-10-03 14:18:26', 1),
(13, 'data/642975689.jpg', '2012-10-03 14:36:30', 1),
(14, 'data/1062874910.jpg', '2012-10-03 14:38:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sharon_story_img`
--

CREATE TABLE IF NOT EXISTS `sharon_story_img` (
  `sss_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`sss_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `sharon_story_img`
--

INSERT INTO `sharon_story_img` (`sss_id`, `title`, `year`, `description`, `path`, `tanggal`, `user_id`) VALUES
(33, 'Cream Messes', 1990, 'Berdiri di tahun 90-an, perusahaan yang bergerak dalam industri makanan ini, meluncurkan roti Cream Meses ke pasaran dengan packaging yang sederhana. ', 'data/8065464203.jpg', '2012-11-06 14:12:03', 1),
(35, 'Roomboter', 1990, 'Roomboter', 'data/9570484482.jpg', '2012-11-06 14:37:39', 1),
(36, 'Roomboter Kering', 1990, 'Roomboter Kering', 'data/6703890808.jpg', '2012-11-06 14:38:43', 1),
(37, 'Cream Messes', 1992, 'Cream Messes', 'data/4606708516.jpg', '2012-11-06 14:52:34', 1),
(38, 'Roomboter', 1993, 'Dengan semakin bertambahnya minat konsumen terhadap Roti Sharon, maka perusahaan melakukan tune up pada tampilan packaging agar lebih menarik dan eksklusif\n', 'data/2091130018.jpg', '2012-11-06 14:57:16', 1),
(39, 'Roomboter Kering', 1993, 'Roomboter Kering', 'data/1027802526.jpg', '2012-11-06 15:00:04', 1),
(40, 'Tawar Panjang Kotak ', 1994, 'Tawar Panjang Kotak', 'data/9838490081.jpg', '2012-11-06 15:02:53', 1),
(41, 'Tawar Panjang Bundar', 1994, 'Tawar Panjang Bundar', 'data/27286941.jpg', '2012-11-06 15:03:35', 1),
(42, 'Cream Messes  ', 2006, 'Memasuki tahun 2000-an, Sharon Bakery membuka cabang di Majalengka, Tegal, Manado, Palembang, Bali dan kota besar lainnya di Indonesia. Perubahan desain kemasan pun dilakukan untuk memperkuat brand Sharon Bakery', 'data/6771668889.jpg', '2012-11-06 15:15:25', 1),
(43, 'Roomboter', 2006, 'Roomboter', 'data/5673818523.jpg', '2012-11-06 15:16:59', 1),
(44, 'Roomboter Kering', 2006, 'Roomboter Kering', 'data/7930695782.jpg', '2012-11-06 15:18:02', 1),
(45, 'Roti Sisir', 2006, 'Roti Sisir', 'data/1690980819.jpg', '2012-11-06 15:19:07', 1),
(46, 'Tawar Panjang Kotak', 2006, 'Tawar Panjang Kotak', 'data/6746232495.jpg', '2012-11-06 15:20:57', 1),
(47, 'Tawar Panjang Bundar', 2006, 'Tawar Panjang Bundar', 'data/4753897855.jpg', '2012-11-07 10:28:39', 1),
(48, 'Bagelen Roomboter Original (Oval)', 2007, 'Bagelen Roomboter Original (Oval)', 'data/840620696.jpg', '2012-11-07 10:31:25', 1),
(49, 'Bagelen Roomboter Cheese (Oval)', 2007, 'Bagelen Roomboter Cheese (Oval)', 'data/2330641434.jpg', '2012-11-07 10:32:14', 1),
(50, 'Bagelen Roomboter Original (oval)', 2008, 'Bagelen Roomboter Original (oval)', 'data/2361850868.jpg', '2012-11-07 10:34:34', 1),
(51, 'Bagelen Roomboter Cheese (Oval)', 2008, 'Bagelen Roomboter Cheese (Oval)', 'data/498134191.jpg', '2012-11-07 10:35:29', 1),
(52, 'Roomboter', 2009, 'Roomboter', 'data/5934197781.jpg', '2012-11-07 10:37:27', 1),
(53, 'Roomboter Kering', 2009, 'Roomboter Kering', 'data/1967786871.jpg', '2012-11-07 10:38:32', 1),
(54, 'Cream Messes Mini', 2010, 'Cream Messes Mini', 'data/9326100726.jpg', '2012-11-07 10:39:46', 1),
(55, 'Roomboter Mini', 2010, 'Roomboter Mini', 'data/3023074446.jpg', '2012-11-07 10:40:38', 1),
(56, 'Roomboter Keju Mini', 2011, 'Roomboter Keju Mini', 'data/6571566285.jpg', '2012-11-07 10:41:56', 1),
(57, 'Roomboter Keju', 2011, 'Roomboter Keju', 'data/2845337921.jpg', '2012-11-07 10:42:46', 1),
(58, 'Cream Messes ', 2012, 'Cream Messes ', 'data/2005660436.jpg', '2012-11-07 10:46:00', 1),
(59, 'Roomboter', 2012, 'Roomboter', 'data/4990497427.jpg', '2012-11-07 10:47:02', 1),
(60, 'Roomboter Kering', 2012, 'Roomboter Kering', 'data/5595964589.jpg', '2012-11-07 10:48:08', 1),
(61, 'Roti Sisir', 2012, 'Roti Sisir', 'data/2634077421.jpg', '2012-11-07 10:49:00', 1),
(62, 'Tawar Panjang Kotak', 2012, 'Tawar Panjang Kotak', 'data/7285854779.jpg', '2012-11-07 10:49:58', 1),
(63, 'Tawar Panjang Bundar', 2012, 'Tawar Panjang Bundar', 'data/7843550690.jpg', '2012-11-07 10:51:22', 1),
(64, 'Bagelen Roomboter Original (Oval)', 2012, 'Bagelen Roomboter Original (Oval)', 'data/5515638063.jpg', '2012-11-07 10:52:30', 1),
(65, 'Bagelen Roomboter Cheese (Oval)', 2012, 'Bagelen Roomboter Cheese (Oval)', 'data/4844136601.jpg', '2012-11-07 10:55:41', 1),
(66, 'Cream Messes Mini', 2012, 'Cream Messes Mini', 'data/1560600129.jpg', '2012-11-07 10:56:41', 1),
(67, 'Roomboter Mini', 2012, 'Roomboter Mini', 'data/4859856385.jpg', '2012-11-07 10:57:40', 1),
(68, 'Roomboter Keju Mini', 2012, 'Roomboter Keju Mini', 'data/2640198613.jpg', '2012-11-07 10:58:42', 1),
(69, 'Roomboter Keju', 2012, 'Roomboter Keju', 'data/8677711645.jpg', '2012-11-07 10:59:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skin`
--

CREATE TABLE IF NOT EXISTS `skin` (
  `id_skin` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name_skin` varchar(30) NOT NULL,
  `theme_skin` varchar(50) NOT NULL,
  `picture_skin` varchar(50) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`id_skin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `skin`
--

INSERT INTO `skin` (`id_skin`, `name_skin`, `theme_skin`, `picture_skin`, `date_add`) VALUES
(0000009, 'Fire', 'data/1013484512.png', 'data/1015937323.png', '2012-12-01 11:27:52'),
(0000010, 'Blue Galaxy', 'data/475156928.png', 'data/1164396968.png', '2012-12-01 11:38:51'),
(0000011, 'Row', 'data/654771583.png', 'data/340510485.png', '2012-12-01 11:39:49'),
(0000012, 'Happines', 'data/1212420436.png', 'data/963137327.png', '2012-12-01 11:42:26'),
(0000013, 'White Fire', 'data/571419023.png', 'data/908745156.png', '2012-12-01 11:44:03'),
(0000014, 'Masive Star', 'data/712132947.png', 'data/337197037.png', '2012-12-01 11:44:52'),
(0000015, 'Metalic Kube', 'data/1015334878.png', 'data/1371250741.png', '2012-12-01 11:46:09'),
(0000016, 'Abstract Line', 'data/728485024.png', 'data/93981410.png', '2012-12-01 11:46:49'),
(0000017, 'Carbon', 'data/176559398.png', 'data/1126658096.png', '2012-12-01 11:47:17'),
(0000018, '@Kube', 'data/1050534875.png', 'data/409834684.png', '2012-12-01 11:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `slider_item`
--

CREATE TABLE IF NOT EXISTS `slider_item` (
  `slider_id` int(4) NOT NULL AUTO_INCREMENT,
  `mytitle` varchar(255) NOT NULL,
  `mylink` varchar(300) NOT NULL,
  `mykeyword` varchar(255) NOT NULL,
  `mydesc` varchar(255) NOT NULL,
  `mypath` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `slider_item`
--

INSERT INTO `slider_item` (`slider_id`, `mytitle`, `mylink`, `mykeyword`, `mydesc`, `mypath`, `tanggal`, `user_id`) VALUES
(4, 'newKube', 'profil-perusahaan.html', 'newKube', 'newKube', 'data/709120723.png', '2012-12-01 05:32:46', 4),
(7, 'newKube 2', 'profil-perusahaan.html', 'newKube2', 'newKube2', 'data/387113904.png', '2012-12-01 12:15:28', 4),
(8, 'newKube3', 'profil-perusahaan.html', 'newKube3', 'newKube3', 'data/336551561.png', '2012-12-01 12:15:48', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE IF NOT EXISTS `tips` (
  `tips_id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`tips_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`tips_id`, `title`, `path`, `detail`, `tanggal`, `user_id`) VALUES
(2, 'Resep untuk Pemula', 'data/2703988268.jpg', '<p>\n	Punya resep membuat roti dan berminat untuk membuat di rumah? Sebagai pemula, resep adalah panduan utama Anda. Perhatikan resep yang Anda miliki, selalu timbang setiap bahan dengan tepat sesuai resep.</p>\n', '2012-10-03 10:01:00', 1),
(3, 'Simpan Tepung dengan Benar', 'data/1332211387.jpg', '<p style="text-align: justify; ">\n	Terlalu banyak membeli tepung? Jangan buang tepung yang tersisa. Agar tidak rusak, ada cara menyimpan sisa tepung dengan benar. Masukkan tepung dalam kaleng yang kering dan bersih serta tertutup rapat. Bila Anda ingin menambahkan tepung yang baru, lebih baik jangan dicampurkan, tetapi habiskan dulu tepung yang lama.</p>\n', '2012-10-03 10:02:33', 1),
(5, 'Isi Coklat untuk Roti', 'data/7078708023.jpg', '<p style="text-align: justify; ">\n	Bagi Anda penggemar coklat, makan roti menggunakan coklat sudah pasti jadi sesuatu yang wajib. Coba tambahkan filling coklat berbentuk selai saat menikmati bagelen dari Sharon Bakery. Setelah itu coba panggang dan nikmati saat masih hangat.&nbsp;</p>\n', '2012-10-24 14:15:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `access` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `userpass`, `email`, `no_telp`, `tanggal`, `access`) VALUES
(1, 'zuka', '31d29ab0a6056b782ff0a949a61e8a55', 'zuka@zuka.tk', '1234567', '2012-01-11 17:07:49', '1'),
(2, 'eva', 'fd3ed595b1bed1edf45c6e8d98a82bdd', '', '1234567', '2012-01-19 10:13:45', '1'),
(3, 'pipaadminslg', '47580a18aa44af3589c2bb776cd0403a', 'slgpipa@gmail.com', '1234567890', '2012-06-21 11:14:57', '1'),
(4, 'adhie', '46f06159a9416879f683d160481e752e', 'nurhadimaulana92@yahoo.com', '080808080808', '2012-11-19 12:08:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_manual`
--

CREATE TABLE IF NOT EXISTS `user_manual` (
  `id_user_manual` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_produk` int(7) unsigned zerofill NOT NULL,
  `image_filename` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user_manual`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `user_manual`
--

INSERT INTO `user_manual` (`id_user_manual`, `id_produk`, `image_filename`) VALUES
(0000014, 0000029, 'data/862098705.png'),
(0000015, 0000029, 'data/1298053681.png'),
(0000016, 0000029, 'data/726118276.png'),
(0000017, 0000028, 'data/304751074.png'),
(0000018, 0000028, 'data/744751038.png'),
(0000019, 0000028, 'data/564232715.png'),
(0000020, 0000027, 'data/165973580.png'),
(0000021, 0000027, 'data/798239542.png'),
(0000022, 0000027, 'data/1393153917.png');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `video_id` int(4) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`video_id`, `code`, `tanggal`, `user_id`) VALUES
(1, 'HaO14cpwUXg', '2012-11-02 14:34:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `where_buy`
--

CREATE TABLE IF NOT EXISTS `where_buy` (
  `where_id` int(4) NOT NULL AUTO_INCREMENT,
  `market_id` int(4) NOT NULL,
  `provinsi_id` int(4) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`where_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `where_buy`
--

INSERT INTO `where_buy` (`where_id`, `market_id`, `provinsi_id`, `tanggal`, `user_id`) VALUES
(23, 3, 2, '2012-10-24 14:13:00', 1),
(24, 16, 2, '2012-10-24 14:13:00', 1),
(25, 19, 3, '2012-10-24 14:34:25', 1),
(26, 18, 3, '2012-10-24 14:34:25', 1),
(27, 4, 3, '2012-10-24 14:34:25', 1),
(28, 2, 3, '2012-10-24 14:34:25', 1),
(29, 16, 3, '2012-10-24 14:34:25', 1),
(36, 19, 6, '2012-10-24 14:42:11', 1),
(37, 18, 6, '2012-10-24 14:42:11', 1),
(38, 4, 6, '2012-10-24 14:42:11', 1),
(39, 34, 6, '2012-10-24 14:42:11', 1),
(40, 35, 6, '2012-10-24 14:42:11', 1),
(41, 48, 6, '2012-10-24 14:42:11', 1),
(42, 50, 6, '2012-10-24 14:42:11', 1),
(43, 2, 6, '2012-10-24 14:42:11', 1),
(44, 16, 6, '2012-10-24 14:42:11', 1),
(45, 22, 6, '2012-10-24 14:42:11', 1),
(46, 20, 6, '2012-10-24 14:42:11', 1),
(47, 7, 6, '2012-10-24 14:42:11', 1),
(48, 47, 6, '2012-10-24 14:42:11', 1),
(49, 46, 6, '2012-10-24 14:42:11', 1),
(50, 33, 6, '2012-10-24 14:42:11', 1),
(51, 9, 6, '2012-10-24 14:42:11', 1),
(52, 45, 6, '2012-10-24 14:42:11', 1),
(53, 49, 6, '2012-10-24 14:42:11', 1),
(54, 5, 6, '2012-10-24 14:42:11', 1),
(55, 21, 6, '2012-10-24 14:42:11', 1),
(56, 19, 8, '2012-10-24 14:48:08', 1),
(57, 18, 8, '2012-10-24 14:48:08', 1),
(58, 4, 8, '2012-10-24 14:48:08', 1),
(59, 44, 8, '2012-10-24 14:48:08', 1),
(60, 30, 8, '2012-10-24 14:48:08', 1),
(61, 34, 8, '2012-10-24 14:48:08', 1),
(62, 10, 8, '2012-10-24 14:48:08', 1),
(63, 35, 8, '2012-10-24 14:48:08', 1),
(64, 3, 8, '2012-10-24 14:48:08', 1),
(65, 48, 8, '2012-10-24 14:48:08', 1),
(66, 50, 8, '2012-10-24 14:48:08', 1),
(67, 2, 8, '2012-10-24 14:48:08', 1),
(68, 1, 8, '2012-10-24 14:48:08', 1),
(69, 16, 8, '2012-10-24 14:48:08', 1),
(70, 22, 8, '2012-10-24 14:48:08', 1),
(71, 37, 8, '2012-10-24 14:48:08', 1),
(72, 20, 8, '2012-10-24 14:48:08', 1),
(73, 7, 8, '2012-10-24 14:48:08', 1),
(74, 47, 8, '2012-10-24 14:48:08', 1),
(75, 46, 8, '2012-10-24 14:48:08', 1),
(76, 33, 8, '2012-10-24 14:48:08', 1),
(77, 8, 8, '2012-10-24 14:48:08', 1),
(78, 40, 8, '2012-10-24 14:48:08', 1),
(79, 27, 8, '2012-10-24 14:48:08', 1),
(80, 9, 8, '2012-10-24 14:48:08', 1),
(81, 23, 8, '2012-10-24 14:48:08', 1),
(82, 25, 8, '2012-10-24 14:48:08', 1),
(83, 45, 8, '2012-10-24 14:48:08', 1),
(84, 42, 8, '2012-10-24 14:48:08', 1),
(85, 49, 8, '2012-10-24 14:48:08', 1),
(86, 38, 8, '2012-10-24 14:48:08', 1),
(87, 5, 8, '2012-10-24 14:48:08', 1),
(88, 26, 8, '2012-10-24 14:48:08', 1),
(89, 43, 8, '2012-10-24 14:48:08', 1),
(90, 21, 8, '2012-10-24 14:48:08', 1),
(91, 4, 9, '2012-10-24 14:49:38', 1),
(92, 2, 9, '2012-10-24 14:49:38', 1),
(93, 1, 9, '2012-10-24 14:49:38', 1),
(94, 16, 9, '2012-10-24 14:49:38', 1),
(95, 7, 9, '2012-10-24 14:49:38', 1),
(96, 8, 9, '2012-10-24 14:49:38', 1),
(97, 5, 9, '2012-10-24 14:49:38', 1),
(98, 19, 10, '2012-10-24 14:55:07', 1),
(99, 18, 10, '2012-10-24 14:55:07', 1),
(100, 4, 10, '2012-10-24 14:55:07', 1),
(101, 3, 10, '2012-10-24 14:55:07', 1),
(102, 2, 10, '2012-10-24 14:55:07', 1),
(103, 1, 10, '2012-10-24 14:55:07', 1),
(104, 16, 10, '2012-10-24 14:55:07', 1),
(105, 11, 10, '2012-10-24 14:55:07', 1),
(106, 8, 10, '2012-10-24 14:55:07', 1),
(107, 14, 10, '2012-10-24 14:55:07', 1),
(108, 2, 12, '2012-10-24 15:02:05', 1),
(109, 1, 12, '2012-10-24 15:02:05', 1),
(110, 4, 17, '2012-10-24 15:08:03', 1),
(111, 24, 17, '2012-10-24 15:08:03', 1),
(112, 39, 17, '2012-10-24 15:08:03', 1),
(113, 16, 17, '2012-10-24 15:08:03', 1),
(114, 32, 17, '2012-10-24 15:08:03', 1),
(115, 8, 17, '2012-10-24 15:08:03', 1),
(116, 19, 26, '2012-10-24 15:11:33', 1),
(117, 18, 26, '2012-10-24 15:11:33', 1),
(118, 4, 26, '2012-10-24 15:11:33', 1),
(119, 3, 26, '2012-10-24 15:11:33', 1),
(120, 2, 26, '2012-10-24 15:11:33', 1),
(121, 1, 26, '2012-10-24 15:11:33', 1),
(122, 16, 26, '2012-10-24 15:11:33', 1),
(123, 7, 26, '2012-10-24 15:11:33', 1),
(124, 29, 26, '2012-10-24 15:11:33', 1),
(125, 28, 26, '2012-10-24 15:11:33', 1),
(126, 31, 26, '2012-10-24 15:11:33', 1),
(127, 36, 26, '2012-10-24 15:11:33', 1),
(128, 8, 26, '2012-10-24 15:11:33', 1),
(129, 12, 26, '2012-10-24 15:11:33', 1),
(130, 19, 30, '2012-10-24 15:14:28', 1),
(131, 18, 30, '2012-10-24 15:14:28', 1),
(132, 4, 30, '2012-10-24 15:14:28', 1),
(133, 1, 30, '2012-10-24 15:14:28', 1),
(134, 4, 32, '2012-10-24 15:17:02', 1),
(135, 3, 32, '2012-10-24 15:17:02', 1),
(136, 2, 32, '2012-10-24 15:17:02', 1),
(137, 1, 32, '2012-10-24 15:17:02', 1),
(138, 6, 32, '2012-10-24 15:17:02', 1),
(139, 16, 32, '2012-10-24 15:17:02', 1),
(140, 7, 32, '2012-10-24 15:17:02', 1),
(141, 5, 32, '2012-10-24 15:17:02', 1);
