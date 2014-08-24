-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2013 at 01:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fpmipa_server`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id_agenda` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `title`, `meta_keywords`, `meta_description`, `thumbnail`, `content`, `date`, `date_create`, `id_user`) VALUES
(0000001, 'Perkuliahan Semester Genap 2011/2012', 'Perkuliahan Semester Genap 2011/2012', 'Perkuliahan Semester Genap 2011/2012 FPMIPA Universitas Pendidikan Indonesia', '', 'Perkuliahan Semester Genap 2011/2012 akan dimulai', '2012-01-12 00:00:00', '2012-01-12 00:00:00', 0000001),
(0000002, 'BEM Biologi Formica Gelar Formica Islamic Fair 201', 'BEM Biologi Formica Gelar Formica Islamic Fair 2012', 'BEM Biologi Formica Gelar Formica Islamic Fair 2012', '', '<p style="text-align: justify;"><strong>“Open Your Eyes: The INVISIBLE WAR is happening, Watchout and Care About It!”</strong></p>\n<p style="text-align: justify;">Badan Eksekutif Mahasiswa Himpunan Mahasiswa Biologi Formica akan mengadakan acara <strong>Formica Islamic Fair pada tanggal 18 Februari 2012 bertempat di gedung Amphiteater UPI</strong>,kegiatan tersebut merupakan salah satu program kerja dari Departemen Kerohanian. Acara ini diadakan dalam rangka memberikan pemahaman kepada mahasiswa tentang bahayanya perang pemikiran yang hingga saat ini terus digencarkan melalui berbagai media, baik dalam bentuk film, musik, fashion maupun dalam bentuk makanan. Bentuk kegiatan acara ini berupa bedah buku karya dr. Aidh al-Qarni dengan judul buku “Selagi Masih Muda” dengan Ust. Putra Sulung Baginda sebagai pembicaranya. Dilanjutkan dengan kajian bersama Ust. Darlis Fajar tentang bahayanya perang pemikiran. Dimeriahkan oleh nasyid dari dalam dan luar UPI. Adapula bazar buku dari berbagai penerbit. Acara ini dipersembahkan untuk seluruh mahasiswa UPI dan mahasiswa se-Bandung raya.</p>', '2012-01-18 00:00:00', '2012-01-18 00:00:00', 0000001),
(0000003, 'BEM IPSE Gelar Science Festival 2012', 'BEM IPSE Gelar Science Festival 2012', 'BEM IPSE Gelar Science Festival 2012', '', '<p style="text-align: justify;"><a href="http://fpmipa.upi.edu/uploads/2012/01/science-fest.jpg"><img class="alignright size-thumbnail wp-image-663" title="science fest" src="http://fpmipa.upi.edu/uploads/2012/01/science-fest-150x150.jpg" alt="" width="150" height="150" /></a></p>\n<p style="text-align: justify;"><strong>Bandung, FPMIP UPI</strong></p>\n<p style="text-align: justify;">Today, English language proficiency has become a demand to be met by everyone. Starting from elementary school, middle school, high School and even within the scope of university, ability to use English properly is needed. To provide opportunities to develop English-using skills, Academic Department of SA - IPSE organized an activity entitled Science Festival 2012, which proposed an interesting concept that presents varied activities – science festival and science carnival – in Faculty of Mathematics and Science Education, Indonesia University of Education, on 25th-26th January 2012. “Your hubs are here” is the theme for this event, where all participants can enjoy the activities just like enjoying their hobbies.</p>\n<p style="text-align: justify;">On the first day there will be three different competitions, those are story telling for elementary school students, quick and smart for junior high school students and speech contest for senior high school students. Those three competitions are followed by students in all over Bandung. In the next day, there will be grand final session of all competitions and also some music performance from chemistry, physics and computer science departments of FPMIPA UPI. In addition, visitor can enjoy science experiment demos in provided stands.</p>\n<p style="text-align: justify;">Once again, this event is our efforts in providing opportunities for students to develop their scientific, logical and critical thinking in all problems associated with science, and develop students’ skills in aspects of science and English. Through this event, it is expected that our next generation are able to compete globally in the future.</p>\n<p style="text-align: justify;">For further information please visit our blog <a title="web sceincefest" href="http://sciencefest2012.blogspot.com/" target="_blank">sciencefest2012.blogspot.com</a> or follow our twitter <a title="twitter sceincefest" href="https://twitter.com/#!/ScienceFestIPSE" target="_blank">@ScienceFestIPSE</a>. (<strong>Admin</strong>)</p>\n<p style="text-align: justify;"></p>', '2012-01-21 00:00:00', '2012-01-21 00:00:00', 0000001),
(0000004, 'Bulan Bakti Kemanusiaan (BABAK) VII', 'Bulan Bakti Kemanusiaan (BABAK) VII', 'Bulan Bakti Kemanusiaan (BABAK) VII', '', '<p style="text-align: justify;"><strong>Bandung, FPMIPA UPI</strong></p>\n<p style="text-align: justify;">Unit Kegiatan Mahasiswa Korps Sukarela (KSR) PMI Unit Universitas Pendidkan Indonesia menyelenggarakan kegiatan <strong><em>Bulan Bakti Kemanusiaan (BABAK) VII</em></strong> yang terdiri dari  Donor Darah Road Show, Kreativitas Anak Panti se- Bandung (Kreta Api Bara) IV dan Malam REnungan HIV/AIDS. Acara donor darah yang dilaksanakan Selasa-Kamis  (10–12/4/2012) serta Selasa dan Rabu (24-26/4/2012), pukul 8.30–13.00 WIB. Bersama kita peduli, bersama kita peduli, bersama kita gapai mimpi. (<strong>Admin</strong>)</p>', '2012-04-11 00:00:00', '2012-04-11 00:00:00', 0000001),
(0000005, 'Survellance Visit FPMIPA UPI', 'Survellance Visit FPMIPA UPI', 'Survellance Visit FPMIPA UPI', '', 'Bandung, FPMIPA UPI\n\n[gview file="http://fpmipa.upi.edu/uploads/2012/06/ISO.pdf"]', '2012-06-08 00:00:00', '2012-06-08 00:00:00', 0000001),
(0000006, 'Jadwal Pengajian Pegawai UPI', 'Jadwal Pengajian Pegawai UPI', 'Jadwal Pengajian Pegawai UPI', '', '<strong>Bandung, FPMIPA UPI</strong>\r\n[gview file="http://fpmipa.upi.edu/uploads/2012/07/JADWAL-PENGAJIAN-PEGAWAI.pdf"]', '2012-07-30 00:00:00', '2012-07-30 00:00:00', 0000001),
(0000007, 'UPI JOB FAIR 2012', 'UPI JOB FAIR 2012', 'UPI JOB FAIR 2012', '', '<strong>Bandung, FPMIPA UPI</strong>\r\n\r\nSeiring dengan berkembangnya jaman dan tuntutan global terutama dalam bidang pekerjaan dan untuk menyelaraskan kurikulum pendidikan dengan program-program yang ada, kali ini Universitas Pendidikan Indonesia akan menyelenggarakan UPI Job Fair 2012.\r\n\r\nInformasi Selngkapnya  silahkan kunjungi:\r\n\r\n<a href="http://www.upi.edu/agenda/id/82/UPI-JOB-FAIR-2012-" target="_blank">http://www.upi.edu/agenda/id/82/UPI-JOB-FAIR-2012-</a>', '2012-09-25 00:00:00', '2012-09-25 00:00:00', 0000001),
(0000008, 'Pelaksanaan Wisuda Gelombang II 2012', 'Pelaksanaan Wisuda Gelombang II 2012', 'Pelaksanaan Wisuda Gelombang II 2012', '', '<strong>Bandung, FPMIPA UPI</strong>\r\n\r\n<a href="http://www.fpmipa.upi.edu/pelaksanaan-wisuda-gelombang-ii-2012/wisuda/" rel="attachment wp-att-2683"><img class="aligncenter size-medium wp-image-2683" title="wisuda" src="http://www.fpmipa.upi.edu/uploads/2012/10/wisuda-300x300.jpg" alt="" width="300" height="300" /></a>\r\n<p style="text-align: justify;">Merujuk surat edaran Pembantu Rektor Bidang akademik dan Hubungan International nomor 3210/UN40/DT/2012 dan nomor 3211/UN40/DT/2012 perihal ujian akhir program jenjang diploma (D3), strata 1 (S1), strata 2 (S2), dan strata 3 (S3) semester genap tahun akademik 2011/2012 dan Wisuda Gelombang II Agustus tahun 2012, dengan ini kami beritahukan bahwa pelaksanan Wisuda Gelombang II di lksanakan Oktober tahun 2012 akan dilaksanakan 1 hari pada :</p>\r\n<p style="text-align: justify;"><strong>Hari Rabu, 17 Oktober 2012.</strong></p>\r\n\r\n<ul style="text-align: justify;">\r\n	<li>Sesi I pukul 08.00 - 11.00 bagi lulusan  SPs, FPIPS, Kampus DAerah Cibiru, Sumedang, Purwakarta, Tasikmalaya, dan Serang.</li>\r\n	<li>Sesi II pukul 13.30 - 16.00 bagi lulusan FIP, FPBS, FPMIPA, FPTK, FPOK dan FPEB.</li>\r\n</ul>\r\n<p style="text-align: justify;">Setiap calon Wisudawan wajib mengikuti gladi resik di Gedung Gymnasium pada tanggal <strong>16 Oktober 2012</strong></p>\r\n\r\n<ul>\r\n	<li style="text-align: justify;">Sesi I pukul 10.00 - 12.00</li>\r\n	<li style="text-align: justify;">Sesi II pukul 13.00 - 15.30</li>\r\n</ul>', '2012-10-10 00:00:00', '2012-10-10 00:00:00', 0000001),
(0000009, 'Seminar Nasional Pendidikan dan Penelitian Biologi', 'Seminar Nasional Pendidikan dan Penelitian Biologi', 'Seminar Nasional Pendidikan dan Penelitian Biologi', '', '<strong>KAJIAN</strong>\n\nSesuai dengan tema yang diangkat, fokus kajian dalam Seminar Nasional Pendidikan dan Penelitian Biologi ini mencakup isu-isu terkini <em>(<i>up to date</i>)</em> yang berhubungan dengan masalah-masalah sebagai berikut:\n<ol>\n	<li>Tren model pendidikan dan penelitian Biologi dalam membangun karakter konservasi</li>\n	<li>Karakter konservasi dan perlindungan lingkungan hidup</li>\n	<li>Pemanfaatan keanekaragaman hayati tropika secara berkelanjutan</li>\n</ol>\n&nbsp;\n\n<strong>WAKTU DAN TEMPAT KEGIATAN</strong>\n\nSeminar Nasional Pendidikan dan Penelitian Biologi, Jurusan Pendidikan Biologi UPI ini akan dilaksanakan pada:\n\nHari                  : Jum’at dan Sabtu\nTanggal           : 5 dan 6 Juli 2013\nTempat            : Auditorium FPMIPA, Gedung FPMIPA kampus UPI Jl. Dr. Setiabudhi 229 Bandung 40154\n\n&nbsp;\n\n<strong>PESERTA SEMINAR</strong>\n\nSeminar akan dihadiri oleh para pakar, peneliti, pelaksana pendidikan Biologi (guru dan dosen), mahasiswa dan pemerhati Biologi dan pendidikan Biologi di Indonesia\n\n&nbsp;\n\n<strong>PENDAFTARAN</strong>\n\n-          Waktu pendaftaran = 1 Pebruari – 31 Mei 2013\n-          Batas akhir pengumpulan abstrak = 20 mei 2013\n-          Pengumuman hasil seleksi abstrak = 1 Juni 2013\n-          Pengumpulan naskah lengkap = 10 Juni 2013\n\n<strong>SEKRETARTIAT</strong>\n\nJurusan Pendidikan Biologi\nGedung FPMIPA Universitas Pendidikan Indonesia\nJl. Dr. Setiabuhi 229 Bandung 40154, Telp./Fax 022-2001937\n\nInfo Lengkap : Dapat di lihat <a title="Link Terkait" href="http://fpmipa.upi.edu/seminar-biologi/" target="_blank">disini</a>', '2013-01-14 00:00:00', '2013-01-14 00:00:00', 0000001),
(0000010, 'DINAMIK 8 “Dreaming Into The Eight Sky”', 'DINAMIK 8 “Dreaming Into The Eight Sky”', 'DINAMIK 8 “Dreaming Into The Eight Sky”', '', '<p style="text-align: justify;">Dies Natalis Mahasiswa Ilmu Komputer (DINAMIK) merupakan sebuah acara tahunan yang diselenggarakan oleh Keluarga Mahasiswa Komputer Program Studi Pendidikan Ilmu Komputer dan Ilmu Komputer Universitas Pendidikan Indonesia. Adapun tema yang diangkat pada perayaan DINAMIK ke delapan ini adalah “<i>Dreaming Into The Eight Sky</i>”, tema tersebut dimaksudkan agar generasi muda sekarang tidak takut untuk bermimpi dalam menggapai cita-citanya. Selain itu, kegiatan DINAMIK 8 juga bertujuan untuk mengajak para pelajar di sekitar Jawa Barat dan DKI Jakarta untuk lebih mengenal kemajuan teknologi dewasa ini dengan mengikuti rangkaian acara dari DINAMIK itu sendiri. Rangkaian acara DINAMIK 8 tahun ini merupakan rangkaian acara terbesar dibandingkan dengan acara DINAMIK pada tahun-tahun sebelumnya. Hal tersebut dikarenakan DINAMIK 8  menambahkan rangkaian acara Seminar Nasional, Bedah Buku dan Talkshow, serta Donor Darah yang sebelumnya hanya diadakan perlombaan saja.</p>\r\n<p style="text-align: center;"><a href="http://fpmipa.upi.edu/dinamik-8-dreaming-into-the-eight-sky/poster-dinamik8/" rel="attachment wp-att-3487"><img class="aligncenter  wp-image-3487" alt="poster dinamik8" src="http://fpmipa.upi.edu/uploads/2013/01/poster-dinamik8.png" width="460" height="550" /></a></p>\r\n\r\n<p style="text-align: justify;"><strong>When</strong>\r\n19-22 Februari 2013\r\n08.00-15.00</p>\r\n<strong>Where</strong>\r\nBalai Pertemuan Umum\r\nUniversitas Pendidikan Indonesia\r\nJl. Dr. Setiabudhi No. 229 Bandung 40154 Jawa Barat-Indonesia\r\n\r\n<strong>Event Agenda</strong>\r\n<strong> Lomba:</strong>\r\n<ul style="text-align: justify;">\r\n	<li>CSPC (Computer Science Programming Competition), untuk pelajar SMA sederajat se-Nasional</li>\r\n	<li>PCA (Personal  Computer Assembling), perlombaan untuk pelajar SMA dan SMP sederajat se-Jawa Barat dan DKI Jakarta</li>\r\n	<li>Animasi untuk pelajar SMA dan SMP  sederajat se-Jawa Barat dan DKI Jakarta</li>\r\n	<li>LCW (LombaCipta Web) untuk pelajar SMA dan SMP  sederajat se-Jawa Barat dan DKI Jakarta</li>\r\n	<li>LDG (LombaDisainGrafis) untuk pelajar SMA se derajat se-Jawa Barat dan DKI Jakarta</li>\r\n	<li>LCT  (LombaCepatTepat) untuk pelajar SD dan SMP  se derajat se-Bandung Raya</li>\r\n	<li>Dinamik Star untuk mahasiswa Universitas Pendidikan Indonesia</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>Acara tambahan:</strong></p>\r\n\r\n<ul style="text-align: justify;">\r\n	<li>Seminar Nasional IT danPendidikan</li>\r\n	<li>Bedah Buku dan Talkshow</li>\r\n	<li>Donor Darah</li>\r\n	<li>Pameran Karya dari mahasiswa Program IlmuKomputer</li>\r\n	<li>Bazar</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>Speaker</strong>\r\n<a href="http://www.upi.edu/agenda/id/94/Launching-UPImail-Dan-Seminar-Nasional-IT---Pendidikan" target="_blank"><strong> Seminar Nasional</strong></a></p>\r\n\r\n<ul style="text-align: justify;">\r\n	<li>Alex Budiyanto (Founder CloudIndonesiA)</li>\r\n	<li>Pepita Gunawan (Indonesian Education Lead for <a title="Google" href="http://dinamik8.kemakom.org/www.google.co.id">Google</a> Southeast Asia)</li>\r\n	<li>Ari Juliano Gema (Pemateri <a title="Creative Commons Indonesia" href="http://dinamik8.kemakom.org/creativecommons.or.id"><i>Creative Commons</i></a> yang merupakan organisasi yang telah menerbitkan lisensi <a title="Hak cipta" href="http://id.wikipedia.org/wiki/Hak_cipta">hak cipta</a>)</li>\r\n</ul>\r\n<p style="text-align: justify;"><strong>Bedah Buku</strong></p>\r\n\r\n<ul style="text-align: justify;">\r\n	<li>Ust.Lili Chumaedi (Pemateri bedah buku “Bukan Pernikahan Cinderela”)</li>\r\n</ul>\r\n<p style="text-align: justify;">Selain acara yang diuraikan di atas, acara DINAMIK pun semakin meriah dengan diadakannya acara rutin Pameran Karya dari mahasiswa Program Ilmu Komputer yang memamerkan karya-karya mahasiswa baik berupa karya konvensional, aplikasi, media pembelajaran, dan lain-lain. Selain pameran pun akan ada bazaar menarik selama DINAMIK ini berlangsung dan hiburan lainnya.\r\n<strong>Information</strong>\r\nEka Erdiansyah – 085722478564\r\nFirman Fiqri - 085222198546\r\nWebsite              : dinamik8.kemakom.org\r\nfans page           : www.facebook.com/DinamikIlkomUPI\r\ntwitte                  : @dinamikUPI\r\nvideo                  : <a href="http://www.youtube.com/watch?v=4OQLC9m-bCs&amp;feature=youtu.be" target="_blank">http://www.youtube.com/watch?v=4OQLC9m-bCs&amp;feature=youtu.be</a></p>', '2012-01-22 00:00:00', '2012-01-22 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `title`, `meta_keywords`, `meta_description`, `thumbnail`, `content`, `date_create`, `id_user`) VALUES
(0000001, 'Second Day Of Open Laboratory', 'Second Day Of Open Laboratory', 'Second Day Of Open Laboratory', '', '<p style="text-align: justify;">Di hari kedua Open Laboratory, acara berjalan cukup lancar. Bahkan di hari kedua ini, lebih banyak sekolah yang turut berpartisipasi. ada 11 sekolah yang turut berpartisipasi. Bukan hanya sekolah-sekolah yang berasal dari Bandung dan sekitarnya, namun sekolah-sekolah yang diluar Bandung juga turut andil didalamnya, seperti SMAN 1 Cibeber Bekasi, MAN 2 Ciamis, SMAN Tomo Sumedang dan SMAN 1 Tambun Selatan Bekasi. SMA lainnya adalah SMA Alfa Centaury, SMA BPI 2 Bandung, SMAN 1 Lembang, SMK PGRI 2 Cimahi, SMAN 10 Bandung dan Pesantren Persatuan Islam 1 Bandung. Acara <i>Open Laboratory </i> merupakan salah satu rangkaian dari acara EXPO KIMIA 2013 dimana dalam acara Open Laboratory tersebut pesertanya di pandu memasuki lab LKDA, lab LKOB, dan lab Riset.</p>', '2013-01-31 00:00:00', 0000001),
(0000002, 'Open Laboratory, Sayonara Tahun Depan', 'Open Laboratory, Sayonara Tahun Depan', 'Open Laboratory, Sayonara Tahun Depan', '', '<p style="text-align: justify;">Finally, acara Open Laboratory di hari terakhir kali ini berjalan sangat lancar sesuai dengan rundown yang telah disusun panitia. Acara Open Laboratory pada hari terahir ini dihadiri oleh 11 sekolah. Sebagian besar kelompok berasal dari luar Bandung , seperti dari Tasikmalaya, Sumedang, Jatiwangi, Bekasi dan Karawang. Hari terakhir Open Laboratory ini bertepatan dengan pembukaan EXPO KIMIA 2013. Selain Open Laboratory, rangkaian acara Expo lainnya seperti QC (Qimia Challange) dan Perempat Final Astra (Asa Terapil Kimia) juga diadakan hari ini. Dalam sekejap kampus JICA penuh sesak oleh para siswa-siswi dari berbagai sekolah SMA, MA, SMK dan SMP. Terima kasih untuk para sekolah yang turut berpartisipasi dan para panitia yang telah bekerja keras. Semoga tahun depan acara Open Laboratory dapat berjalan dengan lebih baik lagi. Ganbatte !</p>', '2013-01-31 00:00:00', 0000001),
(0000003, 'Dale Carnegie Datang Ke UPI Bersama AIESEC Bandung', 'Dale Carnegie Datang Ke UPI Bersama AIESEC Bandung', 'Dale Carnegie Datang Ke UPI Bersama AIESEC Bandung', 'data/berita_thumbnail/berita.png', 'Dale Carnegie</i>  memberikan pelatihan pengembangan diri selama tiga hari di UPI. Pelatihan ini gratis bagi 20 member <i>AIESEC</i> Bandung. Enam diantaranya adalah mahasiswa UPI, lima berasal dari FPMIPA dan satu dari FPBS.</p>\n<p style="text-align: justify;">Kegiatan dilaksanakan pada tanggal 28-30 Januari 2013, bertempat di ruang S209, FPMIPA, 5 trainer <i>Dale Carnegie </i>memberikan pelatihan yang berjudul “Succes For Student”.</p>\n<p style="text-align: justify;"><i>Dale Carnegie</i>  merupakan organisasi yang bergerak di bidang pengembangan diri semenjak 1912. Selain terkenal akan pelatihan yang diselenggarakan, <i>Dale Carnegie</i> juga dikenal dengan akan buku-buku motivasinya.</p>\n<p style="text-align: justify;">Sedangkan <i>AIESEC</i> adalah organisasi mahasiswa international yang bergerak dalam bidang kepemimpinan dan pengembangan diri. Sebagai bentuk investasi bagi membernya, <i>AIESEC </i>bekerjasama dengan <i>Dale Carnegie</i>  untuk memberikan bekal dasar kepemimpinan untuk dipraktekan pada kehidupan pribadi maupun professional para pesertanya.</p>\n<p style="text-align: justify;">Dwinoor,president AIESEC di UPI menyatakan “ saya merasa beruntung, melalui pelatihan ini saya lebih tahu terobosan baru apa yang ingin dibuat dalam hidup saya dan sikap apa yang dibutuhkan untuk meraihnya. semoga ke depannya ada lebih banyak lagi pelatihan seperti ini”.</p>\n<p style="text-align: justify;">Dalam pelatihan ini peserta dikenalkan dengan lima kunci keberhasilan atau yang disebut<i> “The Five Drivers Of Success”</i>, yaitu <i>Self Confidence, People Skills, Communication Skills, Leadership Skills</i> dan <i>Improved Attitude</i>.  Peserta diajak untuk menentukan fokus terobosan hidup yang ingin dicapai dan berkomitmen untuk merealisasikannya. Meski terkesan teoritikal, namun pelatihan ini dikemas dengan cara yang atraktif dan komunikatif. Para peserta yang semuanya adalah mahasiswa pun mengikuti pelatihan ini dengan aktif. Rasa percaya diri dan komitmen untuk menjadi lebih baik lahir dari dalam diri peserta seiring dengan pelatihan ini.</p>\n<p style="text-align: justify;">Nining, salah satu pelatih dari Dale Carnegie menyatakan, “Saya senang karena para peserta aktif dan memberikan aura positif. Saya harap mereka dapat menerapkan <i>The Five Drivers Of Success</i> dalam kehidupan sehari-hari dan merasakan manfaatnya”.</p>', '2013-01-31 00:00:00', 0000001),
(0000004, 'Q-Challenge 2013', 'Q-Challenge 2013 FPMIPA Universitas Pendidikan Indonesia', 'Q-Challenge 2013 FPMIPA Universitas Pendidikan Indonesia', 'data/berita_thumbnail/qchallenge2013.jpg', 'Q-challenge adalah salah satu rangkaian acara Expo Kimia UPI 2013 yang dilaksanakan pada tanggal 30 Januari 2013. Acara ini bertujuan untuk memperkenalkan kimia serta menggali potensi untuk menemukan fenomena kimia yang terjadi sehari-hari melalui media percobaan sederhana. Q-challenge diikuti oleh 114 peserta siswa SMP yang tiap regu beranggotakan 3 orang. Kegiatan Q-challenge dibuka dan diresmikan dengan menggunting pita oleh Dekan FPMIPA UPI yaitu Bapak Prof. Dr. Asep Kadarohman, M.Si.</p>\r\n<p style="text-align: justify;">Q-challenge dimulai dengan menampilkan video yang menceritakan tentang suatu kasus.  Tema Q-challenge tahun ini yaitu  “Open Chemistry Case File”, jadi setiap regu harus dapat  memecahkan kasus tersebut dengan mengunjungi pos-pos percobaan kimia, disetiap pos mereka akan mendapatkan clue untuk dapat memecahkan kasus yang diberikan. Untuk mendapatkan clue tersebut mereka harus bisa menyelesaikan masalah yang diberikan oleh penjaga pos, jika tidak, mereka tidak dapat melanjutkan perjalannya untuk menyelesaikan misi mereka. Namun tenang saja, misi ini tidak akan membuat peserta menjadi stress berat karena mereka juga akan mendapatkan games yang sangat menyenangkan tentunya. Jadi Q-challege ini merupakan out bond kimia bagi anak-ana SMP agar lebih mengenal kimia dengan menyenangkan. Salah satu kegiatan yang mereka kerjakan yaitu membuat lilin aromaterapi, membakar uang yang sudah direndam kedalam alkohol, melakukan percobaan sublimasi dan masih banyak yang lainnya.</p>\r\n<p style="text-align: center;"><a href="http://fpmipa.upi.edu/q-challenge-2013/qc-2/" rel="attachment wp-att-3652"><img class="aligncenter size-full wp-image-3652" alt="QC 2" src="http://fpmipa.upi.edu/uploads/2013/02/QC-2.jpg" width="269" height="202" /></a></p>\r\n<p style="text-align: center;"> Peserta lagi asyik menonton video mengenai kasus yang akan dipecahkan</p>\r\n<p style="text-align: center;"><a href="http://fpmipa.upi.edu/q-challenge-2013/qc3/" rel="attachment wp-att-3653"><img class="aligncenter size-full wp-image-3653" alt="QC3" src="http://fpmipa.upi.edu/uploads/2013/02/QC3.jpg" width="263" height="197" /></a></p>\r\n<p style="text-align: center;"> peseta sedang melaksanakan tugas di pos alkohol</p>\r\n<p style="text-align: center;"> <a href="http://fpmipa.upi.edu/q-challenge-2013/qc4/" rel="attachment wp-att-3654"><img class="aligncenter size-full wp-image-3654" alt="QC4" src="http://fpmipa.upi.edu/uploads/2013/02/QC4.jpg" width="283" height="212" /></a></p>\r\n<p style="text-align: center;">peserta melakukan permainan di pos asam basa</p>\r\n<p style="text-align: justify;">Perjalanan peserta Q-Challenge selesai setelah mereka mendapatkan clue dari semua pos yang mereka kunjungi, setelah itu mereka harus bisa menyelesaikan kasus yang diberikan di awal dengan bantuan clue tersebut. Disetiap pos mereka diberikan satu clue dalam bentuk huruf, setelah mereka mendapatkan semua clue maka mereka harus bisa menyusun huruf tersebut untuk memecahkan kasus yang ada. Kira-kira apa jawaban dari kasus ini, hanya merekalah yang tahu&#8230;.</p>\r\n<p style="text-align: justify;">Kasus sudah terpecahkan, mari kita dengar komentar dari beberapa peserta Q-challenge tahun ini&#8230;.</p>\r\n<p style="text-align: justify;">“kalo menurut saya, Q-Challenge ini sangat edukatif, terus ngebikin kita berpola pikir oh kimia itu asik ya, ga cuma ngerjain soal yang macem-macem sambil pusing-pusing, ternyata asik juga, ya sekian dari saya terimakasih”, komentar Zaskia dari SMPN 1 Cimahi.</p>\r\n<p style="text-align: justify;">“kesan dari Q-Challenge ini melatih kita untuk lebih kretaif, maksudnya kreatif itu pembelajaran tidak hanya disekolah saja, bisa didapat diluar sekolah terus pesannya kegiatan ini akan terus berlangsung bukan hanya sekali ini saja, terimakasih”, ujar Farhan dari SMP Dewi Sartika.</p>\r\n<p style="text-align: justify;">“pesan dan kesan saya adalah mengikuti Q-challenge ini saya dapat belajar mengenai kimia dan bisa mengetahui hal-hal yang belum diketahui dan saya bisa mempraktikannya dirumah untuk tahun berikutnya lebih baik Q-challenge dapat diadakan lagi dan lebih mencari ide-ide menarik, terimakasih” kata Reinar dari SMP Gamaliel.</p>\r\n<p style="text-align: justify;">Dan Pada tahun ini, Q-Challenge 2013 dimenangkan oleh peserta dari :</p>\r\n<p style="text-align: justify;"><strong>SMP Santa Angela sebagai Regu Terbaik dan</strong></p>\r\n<p style="text-align: justify;"><strong>SMPN 1 Cimahi sebagai Regu Terkompak</strong></p>\r\n<p style="text-align: justify;">Selamat kepada pemenang Q-Challenge 2013.</p>', '2013-02-06 10:37:29', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nidn` varchar(30) NOT NULL,
  `kode_dosen` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `golongan` varchar(10) NOT NULL,
  `id_jurusan` int(7) unsigned zerofill NOT NULL,
  `riwayat_pendidikan` longtext NOT NULL,
  `kompetensi_mata_kuliah` longtext NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=286 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nidn`, `kode_dosen`, `nama`, `alamat`, `telepon`, `golongan`, `id_jurusan`, `riwayat_pendidikan`, `kompetensi_mata_kuliah`, `image_path`, `status`, `date_create`) VALUES
(0000001, '194909271978032001', '', '', 'Prof. Dr. Liliasari, M.Pd.', '-', '-', '4e', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000002, '195807121983032002', '', '', 'Prof. Dr. Hj.Anna Permanasari, MS.', '-', '-', '4d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000003, '195210081974121001', '', '', 'Dr. Harry Firman, M.Pd.', '-', '-', '4c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000004, '196305091987031002', '', '', 'Prof. Dr. H. R. Asep Kadarohman, MS.', '-', '-', '4b', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000005, '195712111982031006', '', '', 'Dr. Momo Rosbiono, M.Pd., M.SI.', '-', '-', '4b', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000006, '195711231984031001', '', '', 'Dr. H. Sholihin, M.Sc.', '-', '-', '4b', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000007, '195511241977031001', '', '', 'Dr. H. Sumar Hendayana, M.Sc.', '-', '-', '4b', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000008, '196309111989011001', '', '', 'Dr. Hendrawan, M.Si.', '-', '-', '4b', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000009, '196310291987031001', '', '', 'Dr. Ijang Rohman, M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000010, '196605021990031005', '', '', 'Dr. H. Asep Supriatna, M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000011, '196711091991012001', '', '', 'Dr. Hernani, M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000012, '196808031992031002', '', '', 'Dr. Agus Setiabudi, M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000013, '196605251990011001', '', '', 'Dr. H. Wahyu Sopandi, MA.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000014, '195206071980021002', '', '', 'Drs. Mulyono HAM, M.Pd.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000015, '196203011987032001', '', '', 'Dra Wiwi Siswaningsih, M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000016, '195612061983032002', '', '', 'Dra Gebi Dwiyanti, MS.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000017, '197111201998021001', '', '', 'Dr. Wawan Wahyu, S.Pd., M.Pd.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000018, '196102081990031004', '', '', 'Dr. Yayan Sunarya, M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000019, '197102041997021002', '', '', 'Dr. Nahadi, S.Pd., M.Pd., M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000020, '196706291992031001', '', '', 'Drs. Ali Kusrijadi, M.Si.', '-', '-', '4a', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000021, '196611211991031002', '', '', 'Dr. H. Ahmad Mudzakir, M.Si.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000022, '196904191992032002', '', '', 'Dr. Ratnaningsih Eko Sarjono, M.Si.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000023, '195810141986012001', '', '', 'Dr. FM Titin Supriyanti, MS.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000024, '130514760', '', '', 'Drs. Aa Sumarna', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000025, '196004111984031002', '', '', 'Drs. Rahmat Setiadi, M.Sc.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000026, '196111151986012001', '', '', 'Dr. Sri Mulyani, MS.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000027, '196404101989011001', '', '', 'Dr. Omay Sumarna, M.Si.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000028, '195309061980021002', '', '', 'Dr. H. Kurnia', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000029, '196502121990031002', '', '', 'Drs. Yaya Sonjaya, M.Si.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000030, '196802161994022001', '', '', 'Soja Siti Fatimah, S.Si., M.Si.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000031, '196208201987031002', '', '', 'Dr. H. Sjaeful Anwar', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000032, '197512232001121001', '', '', 'Dr. Iqbal Musthapa, M.Si.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000033, '197204302001121001', '', '', 'H. W i j i, M.Si.', '-', '-', '3d', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000034, '195608261981012001', '', '', 'Dra. Hj. Yayan Karyani, M.Pd.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000035, '196611151991011001', '', '', 'Drs. Hokcu Suhanda, M.Si.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000036, '196212091987031002', '', '', 'Drs Asep Suryatna, M.Si.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000037, '197101191997021001', '', '', 'Muhmad Nurul Hana, S.Pd.,M.Pd. ', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000038, '197806282001122001', '', '', 'Fitri Khoerunnisa, S.Pd.,M.Si.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000039, '198007252001122001', '', '', 'Galuh Yuliani, S.Si., M.Si.,Ph.D.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000040, '197906262001121001', '', '', 'Gun Gun Gumilar, S.Pd., M.Si.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000041, '197907302001122002', '', '', 'Heli Siti Halimatul M, S.Pd.,M.Si.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000042, '197509302001122001', '', '', 'Siti Aisyah, S.Pd.,M.Si.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000043, '197003131997031004', '', '', 'H. Budiman Anwar, S.Si., M.Si.', '-', '-', '3c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000044, '195912291991012001', '', '', 'Dra. Hj. Zackiyah, M.Si.', '-', '-', '3b', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000045, '198108192008012014', '', '', 'Tuszie Widhiyanti, M.Pd.', '-', '-', '3b', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000046, '', '', '', 'Asep Bayu Dani Nandiyanto', '-', '-', '', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000064, '195108081974121001', '', '', 'Prof. Dr. H. Wahyudin, M.Pd.', '-', '-', '4e', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000065, '195909221983031003', '', '', 'Prof. Dr. H. Yaya Sukjaya Kusumah, M.Sc.', '-', '-', '4d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000066, '195503031980021002', '', '', 'Prof. Dr. Darhim, M.Si.', '-', '-', '4d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000067, '195802011984031001', '', '', 'Prof. Dr. H. Didi Suryadi, M.Ed.', '-', '-', '4c', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000068, '196210111991011001', '', '', 'Prof. Dr. H. Tatang Herman, M.Ed.', '-', '-', '4c', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000069, '195509091980021001', '', '', 'Dr. H. Karso, M. M.Pd.', '-', '-', '4c', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000070, '196303311988031001', '', '', 'Prof. Dr. H. Nanang Priatna, M.Pd.', '-', '-', '4b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000071, '194908041977021001', '', '', 'Drs. H. Erman Suherman, M.Pd.', '-', '-', '4b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000072, '195805151984031001', '', '', 'Drs. Endang Dedy, M.Si.', '-', '-', '4b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000073, '194805201979031001', '', '', 'Dr. Tapilouw Marthen, M.Si.', '-', '-', '4b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000074, '196304201989032002', '', '', 'Dra. Encum Sumiaty, M.Si.', '-', '-', '4b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000075, '195101061976031004', '', '', 'Dr. H. Tatang Mulyana, M.Pd.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000076, '195803231983031001', '', '', 'Drs. H. Firdaus, M.Pd.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000077, '196005011985032002', '', '', 'Dra. Hj. Ade Rohayati, M.Pd.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000078, '196101121987031003', '', '', 'Dr. Turmudi, M.Ed., M.Sc.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000079, '196106181987031001', '', '', 'Drs. Nar herrhyanto, M.Pd.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000080, '196506221990011001', '', '', 'Dr. H. Endang Cahya M.A, M.Si.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000081, '196511161990012001', '', '', 'Dra. Nurjanah, M.Pd.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000082, '196805111991011001', '', '', 'Dr. Jarnawi Afgani Dahlan, M.Kes.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000083, '196509041991011001', '', '', 'Drs. Suhendra, M.Ed.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000084, '196401171992021001', '', '', 'Dr. H. Dadang Juandi, M.Si.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000085, '196704081994032002', '', '', 'Entit Puspita, S.Pd., M.Si.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000086, '196808231994032002', '', '', 'Dr. Siti Fatimah, M.Si.', '-', '-', '4a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000087, '196606251990012001', '', '', 'Dra. Hj. Rini Marwati, MS.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000088, '196901191993031001', '', '', 'Dr. Rizky Rosjanuardi, M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000089, '196903301993031002', '', '', 'Dr. Kusnandi, M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000090, '195202121974121001', '', '', 'Drs. H. Maman Suherman, M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000091, '196407171991021001', '', '', 'Dr. Dadan Dasari, M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000092, '195401211979031005', '', '', 'Dr. Endang Mulyana, M.Pd.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000093, '195804011985031001', '', '', 'Drs. H. Asep Syarif Hidayat, MS.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000094, '196412051990031001', '', '', 'Dr. Bambang Avip Priatna, M. M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000095, '196612131992031001', '', '', 'Drs. H. Cece Kustiawan, M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000096, '196411231991032002', '', '', 'Dr. Elah Nurlaelah, M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000097, '196008301986031003', '', '', 'Dr. H. Sufyani Prabawanto, M.Ed.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000098, '195711021982031003', '', '', 'Drs. Mohamad Rahmat, M.Kes.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000099, '196009011987032001', '', '', 'Dra. Dian Usdiyana, M.Si.', '-', '-', '3d', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000100, '196801281994021001', '', '', 'Lukman, S.Si., M.Si.', '-', '-', '3c', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000101, '195007121974121002', '', '', 'Drs. Ating Somantri', '-', '-', '3c', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000102, '196909291994122001', '', '', 'Hj. Dewi Rachmatin, S.Si., M.Si.', '-', '-', '3c', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000103, '197006162005012001', '', '', 'Dr. Hj. Aan Hasanah, M.Pd.', '-', '-', '3c', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000104, '198205102005011002', '', '', 'Al Jupri, S.Pd.,M.Sc.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000105, '197703062006042001', '', '', 'Tia Purniati, S.Pd.,M.Pd.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000106, '198207282005012001', '', '', 'Kartika Yulianti, S.Pd., M.Si.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000107, '197411242005011001', '', '', 'Sumanang Muhtar Gozali, M.Si.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000108, '198108142005012001', '', '', 'Fitriani Agustina, S.Si.,M.Si.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000109, '197711282008122001', '', '', 'Khusnul Novianingsih, M.Si.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000110, '198009182008122002', '', '', 'Husty Serviana Husain,M.Si.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000111, '198404282009122004', '', '', 'Eyus Sudihartinih, S.Pd.,M.Pd.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000112, '197608202010122001', '', '', 'Utari Wijayanti, M.Pd.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000113, '198604062010121003', '', '', 'Imam Nugraha Albania, M.Pd.', '-', '-', '3b', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000114, '198106282005012001', '', '', 'Ririn Sispiyati, S.Si.,M.Si.', '-', '-', '3a', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000115, '', '', '', 'Isnie Yusnitha', '-', '-', '', 0000004, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000127, '195606171980021001', '', '', 'Drs. David Edison Tarigan, M.Si.', '-', '-', '4c', 0000003, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000128, '196204261987031002', '', '', 'Drs. Parlindungan Sinaga, M.Si.', '-', '-', '4c', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000129, '195010051976031003', '', '', 'Drs. I Made Padri, M.Pd.', '-', '-', '4b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000130, '196703071991031004', '', '', 'Drs. Saeful Karim, M.Si.', '-', '-', '4b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000131, '196406061990031003', '', '', 'Drs. Muslim, M.Pd.', '-', '-', '4b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000132, '196908171994031003', '', '', 'Dr. Andi Suhandi, S.Pd., M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000133, '195905271985031004', '', '', 'Kardiawarman, Ph.D.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000134, '195910301986011001', '', '', 'Drs. H. Harun Imansyah, M.Ed.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000135, '195708071982112001', '', '', 'Drs. Hj. Wiendartun, M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000136, '131689853', '', '', 'Drs. Yuyu Rachmat Tayubi, M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000137, '196810151994031002', '', '', 'Dr. Dadi Rusdiana, S.Pd.,M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000138, '196204061989031001', '', '', 'Drs. Hikmat, M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000139, '196102021989012001', '', '', 'Dra. Hj. Heni Rusnayati, M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000140, '196807031992032001', '', '', 'Dr. Ida Kaniawati, M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000141, '196208241991031001', '', '', 'Drs. Iyon Suyana, M.Si.', '-', '-', '4a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000142, '195910131984031001', '', '', 'Dr. Didi Teguh Chandra, M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000143, '194803101979031002', '', '', 'Drs. Purwanto Fadjar HM, M.Pd.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000144, '195106091978032001', '', '', 'Dra. Husmy Yuniarti Huzar, M.Pd.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000145, '195711301981011001', '', '', 'Drs. Unang Purwana, M.Pd.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000146, '195904011986011001', '', '', 'Drs. Taufik Ramlan, MS.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000147, '195801071986031001', '', '', 'Drs. Sutrisno, M.Pd.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000148, '195803011980021002', '', '', 'Drs. Parsaoran Siahaan, M.Pd.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000149, '195912161989031001', '', '', 'Drs. Agus Jauhari, M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000150, '196302221987031001', '', '', 'Drs. Agus Danawan, M.Si..', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000151, '197009081997021001', '', '', 'Asep Sutiadi, S.Pd., M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000152, '197310131998021001', '', '', 'Dr. H. Andhy Setiawan, S.Pd.,M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000153, '196302071991031002', '', '', 'Drs. Waslaluddin, MT.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000154, '197706162001122002', '', '', 'Dr. Lilik Hasanah, M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000155, '197905012003121001', '', '', 'Endi Suhendi, M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000156, '197411081999032004', '', '', 'Dr. Selly Feranie, S.Pd.,M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000157, '197812182001122001', '', '', 'Hj. Winny Liiawati, S.Pd.,M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000158, '197705012001122001', '', '', 'Lina Aviyanti, S.Pd.,M.Si.', '-', '-', '3d', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000159, '195708231984031001', '', '', 'Drs. Purwanto, MA.', '-', '-', '3c', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000160, '196707251992032002', '', '', 'Dr. Setiya Utari, M.Si.', '-', '-', '3c', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000161, '196805211993021001', '', '', 'Dr. Moh. Arifin, M.Sc.', '-', '-', '3c', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000162, '196811042001122001', '', '', 'Dra. Hera Novia, M.T.', '-', '-', '3c', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000163, '197712082001122001', '', '', 'Mimin Iryanti, S.Si.,M.Si', '-', '-', '3c', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000164, '197701102008011011', '', '', 'Ridwan Effendi, M.Pd.', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000165, '198012122005011002', '', '', 'Nanang Dwi Ardi, S.Si.', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000166, '197211122008121001', '', '', 'Ahmad Aminudin, M.Si.', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000167, '198310072008121004', '', '', 'Achmad Samsudin, M.Pd.', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000168, '197703312008121001', '', '', 'Judhistira Aria Utama, M.Si.', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000169, '198105032008012015', '', '', 'Irma Rahma Suwarma', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000170, '198007162008011008', '', '', 'Arif Hidayat, M.Si.', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000171, '198308242009122004', '', '', 'Ika Mustika Sari, S.Pd.,M.PFis.', '-', '-', '3b', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000172, '196505151992031004', '', '', 'Drs. Amsor, M.Si.', '-', '-', '3a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000173, '196506151998031001', '', '', 'Dedi Sasmita, M.Si.', '-', '-', '3a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000174, '198108122005011003', '', '', 'Agus Fany Chandra Wijaya, S.Pd.,M.Pd.', '-', '-', '3a', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000175, '', '', '', 'Duden Saepuzaman', '-', '-', '', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000176, '', '', '', 'Muhamad Gina Nugraha', '-', '-', '', 0000002, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000190, '195012311979032029', '', '', 'Prof. Dr. Hj. Nuryani Rustaman, M.Pd.', '-', '-', '4e', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000191, '195107261978032001', '', '', 'Prof. Dr. Fransiska Sudargo, M.Pd.', '-', '-', '4c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000192, '194907131976031002', '', '', 'Prof. Dr. H. Achmad Munandar, M.Pd.', '-', '-', '4c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000193, '195305221980021001', '', '', 'Prof. Dr. H. Suroso Adi Yudianto, M.Pd.', '-', '-', '4c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000194, '194808181974121002', '', '', 'Drs. H. Nono Sutarno, M.Pd.', '-', '-', '4c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000195, '196104191985032001', '', '', 'Prof. Dr. Hj. RR. Hertien Koosbandiah, M.Sc.', '-', '-', '4b', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000196, '195512191980021001', '', '', 'Drs. H. Yusuf Hilmi Adisendjaja, M.Sc.', '-', '-', '4b', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000197, '196705271992031001', '', '', 'Dr. H. Ari Widodo, M.Ed.', '-', '-', '4b', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000198, '195801261987032001', '', '', 'Dr. Hj. Sri Anggraeni, MS.', '-', '-', '4b', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000199, '196202111987032003', '', '', 'Dra. Hj. Sariwulan Diana, M.Si.', '-', '-', '4b', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000200, '196307011988031003', '', '', 'Dr. H. Saefudin, MS.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000201, '196201151987031002', '', '', 'Drs. H. Taufik Rahman, M.Pd.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000202, '195408281986122001', '', '', 'Dra. Ammi Syulasmi, MS.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000203, '196305011988031002', '', '', 'Dr. H. Riandi, M.Si.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000204, '196409281989012001', '', '', 'Dr. Hj. Siti Sriyati, M.Si.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000205, '196402261989032004', '', '', 'Dra. R. Kusdianti, M.Si.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000206, '196611031991012001', '', '', 'Dra. Yanti Hamdiyati, M.Si.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000207, '196209211991012001', '', '', 'Dr. Hj. Widi Purwianingsih, M.Si.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000208, '196502021991032001', '', '', 'Dr. Hj. Any Fitriani, M.Si.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000209, '196512301992021001', '', '', 'Dr. Adi Rahmat, M.Si.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000210, '195002011984011001', '', '', 'Drs. H. Andrian Rustaman, M.Ed.,Sc.', '-', '-', '4a', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000211, '196709181991032001', '', '', 'Dr. Diana Rochintaniawati, M.Ed.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000212, '197112312001121001', '', '', 'Dr. Yayan Sanjaya, M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000213, '197004101997021001', '', '', 'Dr.Topik Hidayat, S.Pd., M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000214, '196305211988031002', '', '', 'Dr. Bambang Supriatno, MS.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000215, '196607161991011001', '', '', 'Drs. Amprasto, M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000216, '196512271991031003', '', '', 'Drs. S u h a r a', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000217, '196805091994031001', '', '', 'Kusnadi, S.Pd., M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000218, '197003311997022001', '', '', 'Dr. Hernawati, S.Pt., M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000219, '196912012001121001', '', '', 'Dr. Didik Priandoko, M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000220, '195904011983032002', '', '', 'Dra. Soesi Asiah Soesilawaty, MS.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000221, '197212031999031001', '', '', 'Dr. Wahyu Surakusumah, S.Si., MT.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000222, '196403201991032001', '', '', 'Dr. Hj. Peristiwati, M.Kes.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000223, '197008112001122001', '', '', 'Hj. Diah Kusumawaty, M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000224, '197105302001122001', '', '', 'Any Aryani, M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000225, '197303172001122002', '', '', 'Hj. Tina Safaria Nilawati, M.Si.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000226, '196812012001122002', '', '', 'dr, Hj. Rita Shintawati, M.Kes.', '-', '-', '3d', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000227, '197404171999032001', '', '', 'Dr. Ana Ratna Wulan, S.Pd., M.Pd.', '-', '-', '3c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000228, '196205051987031003', '', '', 'Drs. H. Dadang Machmudin, MS.', '-', '-', '3c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000229, '197902132001122001', '', '', 'Rini Solihat, S.Pd.M.Si.', '-', '-', '3c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000230, '196509291991012001', '', '', 'Dr. Mimin Nurjhani Kusumastuti, M.Pd.', '-', '-', '3c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000231, '197606052001122001', '', '', 'Eni Nuraeni, S.Pd.,M.Pd.', '-', '-', '3c', 0000001, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000232, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000233, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000234, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000235, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000236, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000237, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000238, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000239, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000253, '195607141984031002', '', '', 'Drs. H. Heri Sutarno, MT.', '-', '-', '4c', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000254, '196603252001121001', '', '', 'Prof. Dr. H. Munir, M.IT.,', '-', '-', '4a', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000255, '196711211991011001', '', '', 'Dr. H. Enjang Ali Nurdin, M.Kom.', '-', '-', '4a', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000256, '196601011991031005', '', '', 'Dr. H. Wawan Setiawan, M.Kom.', '-', '-', '4a', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000257, '196402141990031003', '', '', 'Drs. H. Eka Fitrajaya Rahman, MT.', '-', '-', '4a', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000258, '197407252006041002', '', '', 'Rasim, ST., MT.', '-', '-', '3c', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000259, '197112232006041001', '', '', 'Asep Wahyudin, S.Kom., MT.', '-', '-', '3c', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000260, '197909292006041002', '', '', 'Muhamad Nursalman, MT.', '-', '-', '3c', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000261, '197304242008121001', '', '', 'Wahyudin, MT.', '-', '-', '3c', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000262, '197506012008121001', '', '', 'Jajang Kusnendar, MT.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000263, '197607102010121002', '', '', 'Budi Laksono Putro, MT.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000264, '197505152008011014', '', '', 'Eddy Prasetyo Nugroho, M.T.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000265, '197811042010122001', '', '', 'Novi Sofia F, MT.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000266, '197809262008121001', '', '', 'Lala Septem Riza, MT.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000267, '197711252006041002', '', '', 'Rizky Rachman Judhie P, M.Kom.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000268, '197005022008121001', '', '', 'Herbert, MT.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000269, '198008102009121003', '', '', 'Harsa Wara Prabawa, S.Si.,M.Pd.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000270, '198109182009122003', '', '', 'Rosa Ariani Sukamto, MT.', '-', '-', '3b', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000271, '197507072003121003', '', '', 'Yudi Wibisono, ST.MT.', '-', '-', '3a', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000272, '', '', '', 'Enjun Junaeti', '-', '-', '', 0000005, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000273, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000274, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000275, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000276, '', '', '', '', '', '', '', 0000000, '', '', '-', '', '0000-00-00 00:00:00'),
(0000284, '', '', '', 'Rika Rafikah Agustin', '-', '-', '', 0000007, '-', '-', '-', 'active', '2013-02-07 00:00:00'),
(0000285, '', '', '', 'Lilit Rusyati', '-', '-', '', 0000007, '-', '-', '-', 'active', '2013-02-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `elearning`
--

CREATE TABLE IF NOT EXISTS `elearning` (
  `id_elearning` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_elearning`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `elearning`
--

INSERT INTO `elearning` (`id_elearning`, `nama`, `link`, `status`, `date_create`, `id_user`) VALUES
(0000001, 'E-learning FPMIPA', 'http://fpmipa.upi.edu/weblearning/', 'active', '2013-01-31 13:38:46', 0000001),
(0000002, 'Jurusan Pendidikan Biologi', 'http://fpmipa.upi.edu/weblearning/', 'active', '2013-01-31 13:38:46', 0000001),
(0000003, 'Jurusan Pendidikan Fisika', 'http://fisika.upi.edu/e-learning/', 'active', '2013-01-31 13:38:46', 0000001),
(0000004, 'Jurusan Pendidikan Kimia', 'http://kimia.upi.edu/e-learning/', 'active', '2013-01-31 13:38:46', 0000001),
(0000005, 'Jurusan Pendidikan Matematika', 'http://fpmipa.upi.edu/weblearning/', 'active', '2013-01-31 13:38:46', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama`, `meta_keywords`, `meta_description`, `content`, `status`, `date_create`, `id_user`) VALUES
(0000001, 'Laboratorium Biologi', '', '', 'Testing', 'active', '2013-02-12 00:00:00', 0000001),
(0000002, 'Laboratorium Kimia', '', '', 'Testing', 'active', '2013-02-12 00:00:00', 0000001),
(0000003, 'Laboratorium Fisika', '', '', 'Testing', 'active', '2013-02-12 00:00:00', 0000001),
(0000004, 'Laboratorium Komputer', '', '', 'Testing', 'active', '2013-02-12 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_image` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `image_title` varchar(50) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `date_create` datetime NOT NULL,
  `user_id` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_image`, `image_title`, `image_path`, `date_create`, `user_id`) VALUES
(0000001, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/1.jpg', '2013-01-31 00:00:00', 0000001),
(0000002, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/2.jpg', '2013-01-31 00:00:00', 0000001),
(0000003, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/3.jpg', '2013-01-31 00:00:00', 0000001),
(0000004, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/4.jpg', '2013-01-31 00:00:00', 0000001),
(0000005, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/5.jpg', '2013-02-04 00:00:00', 0000001),
(0000006, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/6.jpg', '2013-02-04 00:00:00', 0000001),
(0000007, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/7.jpg', '2013-02-05 00:00:00', 0000001),
(0000008, 'FPMIPA Universitas Pendidikan Indonesia', 'data/galeri/8.jpg', '2013-02-05 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) NOT NULL,
  `link_jurusan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `link_jurusan`, `status`, `date_create`, `id_user`) VALUES
(0000001, 'Jurusan Pendidikan Biologi', 'http://biologi.upi.edu/', 'active', '2013-01-31 13:38:46', 0000001),
(0000002, 'Jurusan Pendidikan Fisika', 'http://fisika.upi.edu/', 'active', '2013-01-31 13:38:46', 0000001),
(0000003, 'Jurusan Pendidikan Kimia', 'http://kimia.upi.edu/v2/', 'active', '2013-01-31 13:38:46', 0000001),
(0000004, 'Jurusan Pendidikan Matematika', 'http://matematika.upi.edu/', 'active', '2013-01-31 13:38:46', 0000001),
(0000005, 'Program Studi Pendidikan Ilmu Komputer', 'http://cs.upi.edu/', 'active', '2013-01-31 13:38:46', 0000001),
(0000006, 'Program Studi Ilmu Komputer', 'http://cs.upi.edu/', 'active', '2013-01-31 13:38:46', 0000001),
(0000007, 'Program Studi IPSE', 'http://ipse.upi.edu/?lang=en', 'active', '2013-01-31 13:38:46', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `layanan_pelatihan`
--

CREATE TABLE IF NOT EXISTS `layanan_pelatihan` (
  `id_layanan_pelatihan` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_layanan_pelatihan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `layanan_pelatihan`
--

INSERT INTO `layanan_pelatihan` (`id_layanan_pelatihan`, `title`, `meta_keywords`, `meta_description`, `thumbnail`, `content`, `date`, `date_create`, `id_user`) VALUES
(0000001, 'Second Day Of Open Laboratory', 'Second Day Of Open Laboratory', 'Second Day Of Open Laboratory', 'data/berita_thumbnail/berita.png', 'Dale Carnegie</i>  memberikan pelatihan pengembangan diri selama tiga hari di UPI. Pelatihan ini gratis bagi 20 member <i>AIESEC</i> Bandung. Enam diantaranya adalah mahasiswa UPI, lima berasal dari FPMIPA dan satu dari FPBS.</p>\r\n<p style="text-align: justify;">Kegiatan dilaksanakan pada tanggal 28-30 Januari 2013, bertempat di ruang S209, FPMIPA, 5 trainer <i>Dale Carnegie </i>memberikan pelatihan yang berjudul “Succes For Student”.</p>\r\n<p style="text-align: justify;"><i>Dale Carnegie</i>  merupakan organisasi yang bergerak di bidang pengembangan diri semenjak 1912. Selain terkenal akan pelatihan yang diselenggarakan, <i>Dale Carnegie</i> juga dikenal dengan akan buku-buku motivasinya.</p>\r\n<p style="text-align: justify;">Sedangkan <i>AIESEC</i> adalah organisasi mahasiswa international yang bergerak dalam bidang kepemimpinan dan pengembangan diri. Sebagai bentuk investasi bagi membernya, <i>AIESEC </i>bekerjasama dengan <i>Dale Carnegie</i>  untuk memberikan bekal dasar kepemimpinan untuk dipraktekan pada kehidupan pribadi maupun professional para pesertanya.</p>\r\n<p style="text-align: justify;">Dwinoor,president AIESEC di UPI menyatakan “ saya merasa beruntung, melalui pelatihan ini saya lebih tahu terobosan baru apa yang ingin dibuat dalam hidup saya dan sikap apa yang dibutuhkan untuk meraihnya. semoga ke depannya ada lebih banyak lagi pelatihan seperti ini”.</p>\r\n<p style="text-align: justify;">Dalam pelatihan ini peserta dikenalkan dengan lima kunci keberhasilan atau yang disebut<i> “The Five Drivers Of Success”</i>, yaitu <i>Self Confidence, People Skills, Communication Skills, Leadership Skills</i> dan <i>Improved Attitude</i>.  Peserta diajak untuk menentukan fokus terobosan hidup yang ingin dicapai dan berkomitmen untuk merealisasikannya. Meski terkesan teoritikal, namun pelatihan ini dikemas dengan cara yang atraktif dan komunikatif. Para peserta yang semuanya adalah mahasiswa pun mengikuti pelatihan ini dengan aktif. Rasa percaya diri dan komitmen untuk menjadi lebih baik lahir dari dalam diri peserta seiring dengan pelatihan ini.</p>\r\n<p style="text-align: justify;">Nining, salah satu pelatih dari Dale Carnegie menyatakan, “Saya senang karena para peserta aktif dan memberikan aura positif. Saya harap mereka dapat menerapkan <i>The Five Drivers Of Success</i> dalam kehidupan sehari-hari dan merasakan manfaatnya”.</p>', '2013-02-12 00:00:00', '2013-02-12 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan_kerja`
--

CREATE TABLE IF NOT EXISTS `lowongan_kerja` (
  `id_lowongan_kerja` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'status',
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_lowongan_kerja`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lowongan_kerja`
--

INSERT INTO `lowongan_kerja` (`id_lowongan_kerja`, `title`, `meta_keywords`, `meta_description`, `content`, `status`, `date_create`, `id_user`) VALUES
(0000001, 'Kesempatan menjadi Guru Bimbel dan Homeschooling', 'Kesempatan menjadi Guru Bimbel dan Homeschooling', 'Kesempatan menjadi Guru Bimbel dan Homeschooling', '<p>Sebuah Lembaga Bimbingan Belajar dan Homeschooling POINS (Postulate Institute) membutuhkan tenaga pengajar (full time  dan  part time) untuk mata pelajaran (Matematika, Fisika, Kimia dan Biologi)  dengan kriteria sebagai berikut:</p>\n<ol>\n<li><span style="line-height: 13px;">Lulusan S1 PTN atau bukti transkip nilai terakhir</span></li>\n<li>Minimum IPK 3.00</li>\n<li>Memiliki metode pengajaran yang efektif</li>\n<li>Disiplin dan bertanggungjawab</li>\n<li>Diberikan renumerisasi yang menarik (gaji pokok, insentif dan fasilitas lainnya).</li>\n</ol>\n<p>Silahkan kirimkan CV dan Lamaran ke alamat:</p>\n<p style="text-align: center;"><strong>BIMBINGAN  BELAJAR DAN HOMESCHOOLING</strong></p>\n<p style="text-align: center;"><strong>POSTULATE INSTITUTE (POINS)</strong></p>\n<p style="text-align: center;">Ruko Jaya No. 1-2, Sektor IX Bintaro Jaya, Jl. Raya Pondok Pucung</p>\n<p style="text-align: center;">Tlp. (021) 70460813/14  email : bimbelpoins@gmail.com</p>Sebuah Lembaga Bimbingan Belajar dan Homeschooling POINS (Postulate Institute) membutuhkan tenaga pengajar (full time dan part time) untuk mata pelajaran (Matematika, Fisika, Kimia dan Biologi) dengan', 'active', '2013-02-09 00:00:00', 0000001),
(0000002, 'Lowongan Pengajar Edulab 2013', 'Lowongan Pengajar Edulab 2013', 'Lowongan Pengajar Edulab 2013', 'Sebuah Lembaga Bimbingan Belajar dan Homeschooling POINS (Postulate Institute) membutuhkan tenaga pengajar (full time dan part time) untuk mata pelajaran (Matematika, Fisika, Kimia dan Biologi) dengan', 'active', '2013-02-09 00:00:00', 0000001),
(0000003, 'Sosialisasi SMA Unggulan DEL dan Recruitment Guru MIPA', 'Sosialisasi SMA Unggulan DEL dan Recruitment Guru MIPA', 'Sosialisasi SMA Unggulan DEL dan Recruitment Guru MIPA', 'Sebuah Lembaga Bimbingan Belajar dan Homeschooling POINS (Postulate Institute) membutuhkan tenaga pengajar (full time dan part time) untuk mata pelajaran (Matematika, Fisika, Kimia dan Biologi) dengan', 'active', '2013-02-09 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `title`, `meta_keywords`, `meta_description`, `content`, `date_create`, `id_user`) VALUES
(0000001, 'Home', 'FPMIPA Universitas Indonesia', 'FPMIPA Universitas Indonesia', '-', '2013-01-31 14:02:06', 0000001),
(0000002, 'Sejarah', 'Sejarah FPMIPA Universitas Indonesia', 'Sejarah FPMIPA Universitas Indonesia', '													<p>\r\n\r\n														Fakultas Pendidikan Matematika dan Ilmu Pengetahuan Alam (FPMIPA) merupakan unsur pelaksana akademik yang bertugas mengkoordinasikan pelaksanaan kegiatan akademik bidang MIPA dan pendidikan MIPA. FPMIPA merupakan satu dari tujuh fakultas di UPI, bertugas menyiapkan guru MIPA dan ilmuwan bidang MIPA dituntut untuk menghasilkan lulusan yang mempunyai daya saing tinggi dalam era globalisasi. FPMIPA didirikan pertama kali dengan nama Jurusan Ilmu Pasti Alam pada tahun 1954, Fakultas Keguruan Ilmu Eksakta (FKIE) pada tahun 1963, dan diubah menjadi FPMIPA pada tahun 1983. \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Setelah melalui proses evaluasi kelayakan oleh Komisi Disiplin Ilmu (KDI) MIPA, pada tahun 1998 dan 1999, Direkur Jenderal Pendidikan Tinggi merekomendasikan pembukaan program-program studi nonpendidikan di FPMIPA UPI melalui Surat Dirjen Dikti Nomor 910/D/T/98 tanggal 15 April 1998 dan SK Dirjen Dikti No. 227/DIKTI/Kep/1999 tanggal 11 Mei 1999. Rekomendasi perluasan mandat akademik ini didasarkan pada tuntutan masyarakat untuk memenuhi kebutuhan tenaga kerja berpendidikan tinggi dalam bidang MIPA dan kelayakan FPMIPA ditinjau dari kuantitas, kualifikasi, keahlian, dan kegiatan keilmuan dosen, kelengkapan sarana laboratorium, serta rancangan kurikulum.\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Setelah dibukanya program studi nonpendidikan, FPMIPA memiliki 4 jurusan dan 11 program studi, yaitu Jurusan Pendidikan Biologi terdiri atas Program Studi Pendidikan Biologi dan Program Studi Biologi; Jurusan Pendidikan Fisika terdiri atas Program Studi Pendidikan Fisika dan Program Studi Fisika; Jurusan Pendidikan Kimia terdiri atas Program Studi Pendidikan Kimia dan Program Studi Kimia; Jurusan Pendidikan Matematika terdiri atas Program Studi Pendidikan Matematika dan Program Studi Matematika; serta Program Studi Pendidikan Ilmu Komputer dan Program Studi Ilmu Komputer yang dibuka pada tahun 2005, dan International Program on Science Education yang langsung berada di bawah fakultas yang mulai dibuka pada tahun akademik 2009. International Program on Science Education (IPSE) mengemban misi mendidik calon guru sains dengan kompetensi mengajar pada sekolah internasional.\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Dengan adanya dua program studi dalam satu jurusan yang masing-masing menghasilkan lulusan sebagai guru dan peneliti untuk bidang ilmu yang sama, FPMIPA dalam menjalankan program pendidikannya menggunakan prinsip “cross fertilization” dan “resources sharing” , sehingga terbangun sinergisitas pada kedua program tersebut.\r\n\r\n													</p>', '2013-01-31 00:00:00', 0000001),
(0000003, 'Visi Misi', 'Visi Misi FPMIPA Universitas Indonesia', 'Visi Misi FPMIPA Universitas Indonesia', '<p>\r\n\r\n														<b>Visi :</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Pelopor dan unggul dalam Pendidikan MIPA dan dan Pengembangan Ilmu MIPA\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														<b>Misi :</b> \r\n\r\n													</p>\r\n\r\n													<ul>\r\n\r\n														<li>Menyelenggarakan pendidikan untuk  menyiapakan tenaga pendidik MIPA dan ilmuan MIPA profesional yang berdaya saing global;</li>\r\n\r\n														<li>Mengembangkan penelitian dibidang Pendidikan MIPA dan ilmu MIPA untuk menjadi landasan dalam proses  pendidikan dan pengabdian kepada masyarakat;</li>\r\n\r\n														<li>Menyelenggarakan layanan pengabdian kepada masyarakat berbasis penelitian pendidikan MIPA dan ilmu MIPA;</li>\r\n\r\n														<li>Menyelenggarakan internasionalisasi pendidikan melalui pengembangan dan pengokohan jejaring dan kemitraan pada tingkat nasional,regional, dan internasional.</li>\r\n\r\n														<li>Melaksanakan Good Governance sebagai dasar menuju kelas berstandar internasional\r\n\r\n													</ul>', '2013-01-31 13:38:46', 0000001),
(0000004, 'Kebijakan Mutu', 'Kebijakan Mutu FPMIPA Universitas Pendidikan Indonesia', 'Kebijakan Mutu FPMIPA Universitas Pendidikan Indonesia', '<ul>\r\n\r\n														<li>Menghasilkan lulusan yang profesional dan berdaya saing global serta berakhlak mulia</li>\r\n\r\n														<li>Melakukan perbaikan terus menerus terhadap proses, layanan, dan efektivitas penerapan Sistem Manajemen Mutu</li>\r\n\r\n														<li>Menerapkan Sistem Manajemen ISO 9001:2008 Certificate Number : 48265/A/0001/UK/En</li>\r\n\r\n													</ul>', '2013-01-31 13:38:46', 0000001),
(0000005, 'Pimpinan', 'Pimpinan FPMIPA Universitas Pendidikan Indonesia', 'Pimpinan FPMIPA Universitas Pendidikan Indonesia', 'DATA PIMPINAN<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000006, 'Struktur', 'Struktur FPMIPA Universitas Pendidikan Indonesia', 'Struktur FPMIPA Universitas Pendidikan Indonesia', '<p style="text-align:center;">\r\n\r\n														<a href="<?php echo base_url(''assets/images/struktur.jpg'');?>"><img src="<?php echo base_url(''assets/images/struktur.jpg'');?>"/></a>\r\n\r\n													</p>\r\n\r\n													<br>\r\n\r\n													<p>\r\n\r\n														<b>Jurusan Pendidikan Matematika</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Jurusan Pendidikan Matematika pertama kali dibentuk pada tahun 1963 dengan nama Jurusan Ilmu Pasti yang bernaung di Fakultas Keguruan Ilmu Eksakta (FKIE). Pada Tahun 1972  Jurusan Ilmu Pasti berubah menjadi Jurusan Pendidikan Matematika. Seiring dengan winder mandate yang diemban UPI,pada tahun 1998  Jurusan Pendidikan Matematika membuka program studi baru yaitu Program studi Matematika,sehingga sampai saat ini Jurusan Pendidikan Matematika menaungi dua buah Program Studi, yaitu Program Studi Pendidikan Matematika dengan lulusan bergelar Sarjana Pendidikan (S.Pd.), dan Program Studi Matematika dengan lulusan bergelar  Sarjana Sains (S.Si.).\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														<b>Jurusan Pendidikan Fisika</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Dengan latar belakang sejarah pertumbuhan bangsa, yang menyadari bahwa upaya mendidik dan mencerdaskan  bangsa merupakan bagian penting dalam mengisi kemerdekaan, maka pada hari Rabu tanggal 20 Oktober 1954 PTPG didirikan. Hal ini sebagai realisasi Keputusan Menteri Pendidikan Pengajaran dan Kebudayaan Republik Indonesia No. 357 tanggal 2 September 1954 tentang pendirian Perguruan Tinggi Pendidikan Guru.Pada awalnya PTPG dipimpin oleh seorang Dekan, yang membawahi beberapa jurusan, salah satunya jurusan Pasti Alam. Tahun 1958 PTPG diintegrasikan menjadi salah satu fakultas Universitas Padjadjaran, dengan nama Fakultas Keguruan dan Ilmu Pendidikan (FKIP). Tahun 1963 FKIP menjadi IKIP Bandung sebagai satu-satunya lembaga pendidikan guru tingkat universitas. Saat itu jurusan kita merupakan salah satu jurusan di Fakultas Keguruan Ilmu Eksakta, dengan nama jurusan Ilmu Alam.  Dan pada tahun 1972 terjadi perubahan nama menjadi Jurusan Pendidikan Fisika. Seiring dengan kebijakan pemerintah di bidang pendidikan tinggi yang memberikan perluasan mandat bagi LPTK, Oktober 1998 IKIP Bandung berubah nama menjadi Universitas Pendidikan Indonesia. Dan mulai saat itu jurusan Pendidikan Fisika membawahi dua program studi, Program Studi Pendidikan Fisika dengan lulusan bergelar Sarjana Pendidikan (S.Pd.), dan Program Studi Fisika dengan lulusan bergelar Sarjana Sains (S.Si.).\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														<b>Jurusan Pendidikan Biologi</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Sejarah perkembangan berdirinya Jurusan Pendidikan Biologi tidak terlepas dari sejarah perkembangan Universitas Pendidikan Indonesia yang dimulai sejak zaman Perguruan Tinggi Penddikan Guru(PTPG) yang berdiri secara resmi pada tanggal 20 Oktober 1954 berdasarkan Surat Keputusan Menteri Pendidikan Pengajaran dan Kebudayaan tanggal 1 September 1954 No. 38742/Kab. Sejak tahun 1958 berdasarkan Surat Keputusan Menteri Pendidikan Pengajaran dan Kebudayaan tanggal 25 November 1958 PTPG berubah status menjadi Fakultas Keguruan dan Ilmu Pendidikan dan bergabung dengan UNPAD. Perubahan ini disebabkan karena semakin meningkatnya kegiatan bidang akademik, personil, dan fisik material. Jurusan Pendidikan Biologi memiliki dua Program Studi yaitu Program Studi Pendidikan Biologi dan Biologi. program studi Pendidikan Biologi bertanggung jawab dalam menghasilkan lulusan yang memiliki kemampuan sebagai guru Biologi (S.Pd.), sedangkan Prodi Biologi bertanggung jawab dalam menghasilkan lulusan yang memiliki kemampuan sebagai peneliti Biologi (S.Si.).\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														<b>Jurusan Pendidikan Kimia</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Cikal bakal Jurusan Pendidikan Kimia FPMIPA IKIP Bandung adalah Jurusan Ilmu Pasti Alam Perguruan Tinggi Pendidikan Guru (PTPG) yang lahir pada tahun 1954. Sehubungan dengan penggantian status PTPG menjadi fakultas keguruan dan ilmu pendidikan (FKIP) Universitas Padjadjaran (UNPAD), selama enam tahun sejak tahun 1957, jurusan ini menjadi bagian dari UNPAD. Pada tahun 1963 FKIP UNPAD berubah status menjadi IKIP Bandung sesuai dengan keputusan Presiden No. 1 Tahun 1963. Sejak itu jurusan pendidikan kimia menjadi salah satu jurusan di lingkungan Fakultas Keguruan dan Ilmu Eksakta (FKIE) IKIP Bandung, pada waktu itu bernama Jurusan Ilmu Kimia. Seiring dengan kebijakan pemerintah di bidang pendidikan tinggi yang memberikan perluasan mandat bagi LPTK, Oktober 1998 IKIP Bandung berubah nama menjadi Universitas Pendidikan Indonesia. Dan mulai saat itu Jurusan Pendidikan Kimia membawahi dua program studi, Program Studi Pendidikan Kimia dengan lulusan bergelar Sarjana Pendidikan (S.Pd.), dan Program Studi Kimia dengan lulusan bergelar Sarjana Sains (S.Si.).\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														<b>Ilmu Komputer</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Ilmu Komputer di Universitas Pendidikan Indonesia didirikan pada tahun 2005 dan terdiri atas dua program studi (prodi): Prodi Ilmu Komputer dan Prodi Pendidikan Ilmu Komputer.  Prodi Ilmu Komputer menghasilkan Sarjana Komputer (S.Kom). Sedangkan Prodi Pendidikan Ilmu Komputer menghasilkan Sarjana Pendidikan (S.Pd) dengan akta IV Pendidikan Ilmu Komputer untuk mengajar mata pelajaran TIK di SMP, SMA dan SMK.Lulusan Prodi Ilmu Komputer diharapkan menjadi sarjana komputer yang memiliki kemampuan yang kuat dalam inovasi, analisis, perancangan dan implementasi sistem IT.  Sedangkan lulusan Pendidikan Ilmu Komputer diharapkan menjadi guru TIK (Teknologi Informasi dan Komunikasi) yang kompeten yang memiliki kemampuan di bidang teknologi dan ilmu komputer sekaligus menguasai pedagogi dan teknik mengajar.  Ini sejalan dengan visi utama unit akademik UPI yaitu mampu menghasilkan lulusan yang unggul, kompetitif serta mampu berkembang secara berkelanjutan.\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														<b>International Program on Science Education(IPSE)</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Pada tahun 2007/2008 terdapat 200 SMA, 200 SMP, 112 SMK, dan 38 SD telah mendapat block grantprogram RSBI dari DEPDIKNAS. Program serupa juga dilakukan untuk sekolah-sekolah (madrasah) di bawah Departemen Agama. Disamping itu, sekitar 50 sekolah internasional telah berdiri dan berkembang di Jawa Barat. Sekolah internasional ini umumnya berafiliasi baik pada lembaga internasional seperti Cambridge atau Global Assesment Certificate. Apabila amanat undang-undang tentang perlunya sekolah bertaraf internasional di Indonesia benar-benar dilaksanakan dengan perhitungan jumlah kabupaten/kota saat ini 440 (Depdagri, 2008) dan setiap kota/kabupaten memiliki 2 SMP bertaraf internasional dan setiap SMP memerlukan 2 guru sains maka diperlukan setidaknya 1760 guru sains dengan kemampuan yang bertaraf internasional. Jumlah ini belum memperhitungkan sekolah dilingkungan Departemen Agama, sekolah swasta, dan sekolah dasar. Dengan ilustrasi ini jelas kebutuhan akan guru-guru sains yang berkualitas internasional sangat besar. Tidak seperti penyiapan guru sains yang biasa yang bisa dilakukan oleh LPTK yang telah ada, penyiapan guru sains untuk SBI memerlukan kualitas yang lebih tinggi dalam hal tenaga dosen, sarana dan prasarana, maupun program. Dengan standar seperti ini tidak banyak LPTK yang mampu melaksanakan. Oleh karena itu program baru ini harus disiapkan untuk memenuhi kebutuhan guru SBI seluruh Indonesia, dan bukan hanya di Jawa Barat. Oleh karena itu pembukaan program internasional untuk guru sains oleh FPMIPA UPI merupakan langkah penyuksesan amanat undang-undang. IPSE dikembangkan atas adanya kebutuhan akan sumberdaya dengan kompetensi unggul. Kebutuhan ini akan terus berlanjut seiring dengan perkembangan zaman. Situasi ini akan menjamin keterpakaian lulusan, keberlangsungan program, dan ketersediaan calon mahasiswa. Sumber dana yang akan dimanfaatkan untuk program ini adalah dana mahasiswa seperti SPP, DPL, dan praktikum. Selain itu, program ini akan berupaya memanfaatkan sumber-sumber dana hibah baik nasional maupun internasional.\r\n\r\n													</p>', '2013-01-31 13:38:46', 0000001),
(0000007, 'Prestasi', 'Prestasi FPMIPA Universitas Pendidikan Indonesia', 'Prestasi FPMIPA Universitas Pendidikan Indonesia', 'Empty', '2013-01-31 13:38:46', 0000001),
(0000008, 'Akademik dan Perkuliahan', 'Akademik dan Perkuliahan FPMIPA Universitas Pendidikan Indonesia', 'Akademik dan Perkuliahan FPMIPA Universitas Pendidikan Indonesia', '<h3>Kurikulum</h3>\r\n\r\n													<p>\r\n\r\n														Sebagai dasar pelaksanaan program-program pendidikan, pada tahun 2010, Senat Akademik UPI menerbitkan Surat Keputusan Senat Akademik Nomor 002/Senat Akd./UPI-SK/VIII/2010 tanggal 2 Agustus 2010, tentang Ketentuan Pokok Pengembangan Kurikulum UPI. Keputusan ini menjadi dasar penyusunan. Kurikulum UPI (selanjutnya disebut Kurikulum UPI 2010). Kurikulum UPI tahun 2010 merupakan kurikulum hasil perubahan dan penyempurnaan dari kurikulum UPI tahun 2006. Perubahan tersebut berkenaan dengan pemantapan kelembagaan UPI, penyesuaian terhadap kebutuhan dan tuntutan masyarakat, perkembangan ilmu pengetahuan dan teknologi, serta profesi. Dokumen terkait dengan pengembangan kurikulum merupakan bagian yang tidak terpisahkan dari buku Kurikulum. Secara kelembagaan, koordinasi pengembangan kurikulum merupakan tugas dari Pembantu Dekan Bidang Akademik dan Kemahasiswaan. Jumlah keseluruhan satuan kredit semester (sks) mata kuliah yang harus ditempuh untuk program S1 di FPMIPA antara 144 – 150 sks. Untuk program studi pendidikan mata kuliah tersebut dikelompokkan menjadi:\r\n\r\n													</p>\r\n\r\n													<ol>\r\n\r\n														<li>Mata Kuliah Umum (MKU) 14 sks;</li>\r\n\r\n														<li>Mata kuliah Profesi (MKP) yang terdiri atas Mata Kuliah Dasar Profesi (MKDP) 12 sks, Mata Kuliah Keahlian Profesi (MKPP) 12 sks, dan Mata Kuliah Latihan Profesi (MKLP) bidang studi 4 sks;</li>\r\n\r\n														<li>Mata Kuliah Keahlian (MKK) terdiri atas MKK  fakultas 6-12 sks, MKK Program Studi 74-80 sks, dan MKK Pilihan 16-18 sks, terdiri atas Mata Kuliah Kemampuan Tambahan (MKKT), Mata Kuliah Pilihan Bebas, dan Mata Kuliah Konsentrasi Akademik Kependidikan.</li>\r\n\r\n													</ol>\r\n\r\n													<p>\r\n\r\n														Untuk program studi nonpendidikan mata kuliah tersebut dikelompokkan ke dalam :<br>\r\n\r\n														<ol>\r\n\r\n															<li>Mata Kuliah Umum (MKU) 14 sks;</li>\r\n\r\n															<li>Mata Kuliah Keahlian Keahlian (MKK) 102-108 sks yang terdiri MKK fakultas 6-12 sks, MKK program studi 74-80 sks dan MKK pilihan 16-18 sks; serta</li>\r\n\r\n															<li>Mata Kuliah Konsentrasi Akademik 20-26 sks yang terdiri atas Mata Kuliah Dasar Akademik (MKDA) 6-8 sks, Mata</li>\r\n\r\n															<li>Kuliah Keahlian Akademik (MKKA) 10-16 sks, dan</li>\r\n\r\n															<li>Mata Kuliah Latihan Akademik (MKLA) 2-4 sks.</li>\r\n\r\n														</ol>\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Dalam kurikulum 2010, terdapat 4 mata kuliah yang merupakan Mata Kuliah Keahlian Fakultas (MKKF) yaitu, Matematika Dasar, Fisika Umum, Biologi Umum, dan Kimia Umum.  MKKF merupakan mata kuliah wajib bagi seluruh mahasiswa FPMIPA  semester I. Konten MKKF dirumuskan secara bersama-sama dengan koordinasi fakultas. Untuk memperlancar kegiatan perkuliahan, setiap program studi telah menyusun silabus, deskripsi, dan Satuan Acara Perkuliahan (SAP), yang secara periodik setiap tahun dikaji ulang untuk dilakukan perbaikan sesuai dengan perkembangan ilmu dan kebutuhan masyarakat di bawah koordinasi fakultas. Selain itu juga, Universitas memberikan keleluasaan untuk melakukan reviu terhadap sebaran mata kuliah dan mata kuliah pilihan baru sesuai dengan kebutuhan. Silabus mata kuliah dapat diakses secara online  melalui http://silabus.upi.edu. Sesuai dengan tuntutan Undang-undang Guru dan Dosen, bahwa untuk menjadi guru yang tersertifikasi, lulusan program sarjana diharuskan mengikuti program Pendidikan Profesi Guru (PPG). Pada program PPG, seorang lulusan sarjana diharuskan mengikuti program latihan profesi yang sebelumnya dilaksanakan pada program S1. Keadaan ini menuntut UPI dan Lembaga Pendidikan Tenaga Kependidikan (LPTK), sebagai perguruan tinggi penghasil tenaga pendidik untuk melakukan revisi kurikulum. Oleh karena itu selain mempersiapkan diri menghadapi pelaksanaan program PPG, UPI juga mempersiapkan diri melakukan revisi kurikulum.\r\n\r\n													</p>\r\n\r\n													<h3>Pembelajaran</h3>\r\n\r\n													<p>\r\n\r\n														Prinsip-prinsip dasar program perkuliahan di UPI diatur dalam dokumen Pedoman Akademik. Pedoman Akademik tahun 2010, merupakan hasil penyempurnaan dokumen serupa tahun-tahun sebelumnya. Pedoman akademik UPI memuat tentang administrasi akademik, struktur kurikulum, sistem kredit semester, perkuliahan, Program Latihan Profesi (dahulu PPL), Program Latihan Akademik dan Kuliah Kerja Nyata, sistem penilaian, penelitian, pengabdian masyarakat, pengembangan kemahasiswaan, tata tertib mahasiswa, dan tugas serta tanggungjawab dosen. Pedoman akademik ini dituangkan dalam bentuk buku yang disebarluaskan ke seluruh sivitas akademika UPI untuk dijadikan pegangan bersama. Dengan demikian dapat digunakan untuk menjamin objektivitas, keadilan, dan akuntabilitas kegiatan akademik. Perkuliahan diselenggarakan dengan menerapkan Sistem Kredit Semester (SKS). Setiap mahasiswa pada awal semester diberi kesempatan untuk merencanakan sendiri beban studi dengan bimbingan dosen Pembimbing Akademik (PA), sesuai dengan prestasi yang telah dicapainya. Perkuliahan diberikan oleh dosen atau tim dosen pengampu mata kuliah yang tertera dalam jadwal perkuliahan pada waktu dan tempat yang telah ditentukan. Jumlah pertemuan tatap muka tiap semester 14-16 minggu, termasuk UTS dan UAS. Jumlah minimum tatap muka 14 pertemuan. Jumlah minimum kehadiran mahasiswa untuk dapat mengikuti ujian adalah 80%.\r\n\r\n													</p>\r\n\r\n													<p>	\r\n\r\n														Bentuk perkuliahan terdiri atas 4 jenis, yaitu:\r\n\r\n														<ol>\r\n\r\n															<li>Perkuliahan di dalam/di luar kelas atau pembelajaran jarak jauh melalui sistem e-learning;</li>\r\n\r\n															<li>Praktikum di laboraturium, workshop, studio dan atau di lapangan;</li>\r\n\r\n															<li>Kerja Lapangan, Kuliah Kerja Lapangan (KKL), Kuliah Kerja Nyata (KKN);</li>\r\n\r\n															<li>Praktek lapangan: Internship (magang), Program Latihan Profesi (PLP) untuk mahasiswa pendidikan, dan Program Latihan Akademik (PLA) untuk mahasiswa nonpendidikan. Kehadiran dosen dalam perkuliahan dimonitor oleh dokumen kehadiran kuliah yang ditandatangani oleh dosen dan oleh ketua kelas. Setiap bulan, kepada seksi Akademik dan Kemahasiswaan di fakultas melaporkan jumlah kehadiran perkuliahan ke jurusan/prodi. Selain itu juga, kehadiran setiap dosen dilaporkan ke universitas setiap semester.  Mulai tahun akademik 2008 FPMIPA memiliki sistem informasi evaluasi pelaksanaan perkuliahan. Sistem Evaluasi Pelaksanaan Perkuliahan (SEPP) merupakan sistem evaluasi  perkuliahan yang diisi oleh mahasiswa secara online melalui internet terhadap pelaksanaan perkuliahan pada semester yang baru dilalui. Dosen, Ketua Prodi, dan Dekan kemudian dapat mengakses hasil evaluasi ini juga melalui internet.  Ada sepuluh butir kuisoner yang harus diisi dan satu isian untuk saran. Skala yang digunakan adalah Sangat Tidak Setuju sampai dengan Sangat Setuju.  Nilai yang diperoleh dosen berkisar dari skala 1 sampai dengan 4. Bagi mahasiswa, Sistem Evaluasi Pelaksanaan Perkuliahan  dapat diakses melalui  URL berikut http://fpmipa.upi.edu/evaluasi/, sedangkan bagi dosen alamatnya adalah sebagai berikut: http://fpmipa.upi.edu/evaluasi/dosen. Sosialisasi dan dorongan kepada mahasiswa dilakukan melalui pengkondisian pada program pengambilan mata kuliah (FRS) dengan cara mensyaratkan mahasiswa untuk mengisi program evaluasi perkuliahan tersebut. Selain itu juga dilakukan dengan menyebarkan leafet, melalui forum di e-learning (fpmipa.upi.edu/kuliah) dan forum upi (forum.upi.edu). Untuk mahasiswa, telah disediakan komputer di lobi FPMIPA dan kurikulatorium, sehingga mahasiswa yang tidak memiliki koneksi internet dapat mengikuti survey ini. Hasil evaluasi perkuliahan online selanjutnya disampaikan dalam rapat kelembagaan yang dilakukan setahun dua kali pada awal semester baru, sebagai refleksi untuk meningkatkan kualitas pembelajaran bagi dosen dan peningkatan kualitas layanan bagi tenaga administrasi dan penunjang.</li>\r\n\r\n														</ol>\r\n\r\n													</p>\r\n\r\n													<h3>Suasana Akademik</h3>\r\n\r\n													<p>\r\n\r\n														Untuk meningkatkan suasana akademik yang baik, FPMIPA menyediakan fasilitas perkuliahan yang sangat lengkap. Setiap ruang kuliah sudah dilengkapi dengan komputer dan in focus projector dan terkoneksi dengan jaringan intra dan internet. FPMIPA juga memfasilitasi sivitas akademika dengan ruang auditorium yang nyaman yang dapat dipergunakan untuk kegiatan seminar dengan daya tampung sampai dengan 300 orang. Untuk pertemuan dan seminar kelompok kecil (s.d 40 orang), setiap jurusan memiliki ruang pertemuan (meeting room). Jurusan/Prodi di FPMIPA biasanya menyelenggarakan pertemuan rutin untuk diskusi dan pertemuan ilmiah lain pada setiap hari Jum’at yang merupakan hari perkuliahan Mata Kuliah Umum. Investasi yang telah dialokasikan untuk fasilitas dalam tiga tahun terakhir mencapai Rp. 1,928,81 juta. Aktivitas-aktivitas yang mendukung suasana akademik yang kondusif di antaranya, seminar nasional/internasional yang diselenggarakan program studi, jurusan, fakultas, dan himpunan mahasiswa, seminar doktor baru, dan seminar hasil penelitian mahasiswa. Disamping itu, pemilihan mahasiswa berprestasi tingkat jurusan/fakultas dilaksanakan dalam bentuk presentasi yang dapat dihadiri para mahasiswa lain. FPMIPA juga menyediakan fasilitas Wireless Access Network (WAN/hot spot ) untuk mengakses internet di luar ruangan di sekitar FPMIPA. Saat ini pada semua ruang kelas dan koridor FPMIPA dapat mengakses internet. Fasilitas ini dimanfaatkan oleh para mahasiswa untuk mengakses informasi yang diperlukan terkait pelaksanaan perkuliahan. Untuk mendukung suasana akademik yang kondusif beberapa kebijakan telah dikeluarkan seperti kegiatan kemahasiswaan dan kegiatan nonakademik lainnya tidak boleh menggangu kegiatan akademik, serta kegiatan kemahasiswaan dilaksanakan maksimum sampai pukul 18.00 WIB. FPMIPA menyediakan fasilitas  untuk kegiatan ekstrakulikuler dapat dilaksanakan pada hari sabtu.\r\n\r\n													</p>', '2013-01-31 13:38:46', 0000001),
(0000009, 'Jadwal', 'Jadwal FPMIPA Universitas Pendidikan Indonesia', 'Jadwal FPMIPA Universitas Pendidikan Indonesia', 'Empty', '2013-01-31 13:38:46', 0000001),
(0000010, 'Tata Usaha', 'Tata Usaha FPMIPA Universitas Pendidikan Indonesia', 'Tata Usaha FPMIPA Universitas Pendidikan Indonesia', '																DATA KARYAWAN<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000011, 'Mahasiswa', 'Mahasiswa FPMIPA Universitas Pendidikan Indonesia', 'Mahasiswa FPMIPA Universitas Pendidikan Indonesia', '																DATA MAHASISWA<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000012, 'Dosen', 'Dosen FPMIPA Universitas Pendidikan Indonesia', 'Dosen FPMIPA Universitas Pendidikan Indonesia', '																DATA DOSEN<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000013, 'Laboran dan Teknisi', 'Laboran dan Teknisi FPMIPA Universitas Pendidikan Indonesia', 'Laboran dan Teknisi FPMIPA Universitas Pendidikan Indonesia', '																DATA LABORAN / TEKNISI<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000014, 'Laboratorium', 'Laboratorium FPMIPA Universitas Pendidikan Indonesia', 'Laboratorium FPMIPA Universitas Pendidikan Indonesia', '																DATA LABORATORIUM<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000015, 'Peralatan Laboratorium dan Workshop', 'Peralatan Laboratorium dan Workshop FPMIPA Universitas Pendidikan Indonesia', 'Peralatan Laboratorium dan Workshop FPMIPA Universitas Pendidikan Indonesia', '																DATA PERALATAN LABORATORIUM DAN WORKSHOP<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000016, 'Sarana dan Prasarana', 'Sarana dan Prasarana FPMIPA Universitas Pendidikan Indonesia', 'Sarana dan Prasarana FPMIPA Universitas Pendidikan Indonesia', '															<div class="title_data">\r\n\r\n																DATA SARANA DAN PRASARANA<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA\r\n\r\n															</div>', '2013-01-31 13:38:46', 0000001),
(0000017, 'Info Beasiswa', 'Info Beasiswa FPMIPA Universitas Pendidikan Indonesia', 'Info Beasiswa FPMIPA Universitas Pendidikan Indonesia', '													<p>\r\n\r\n														Untuk mendapatkan informasi lebih jelas mengenai beasiswa dapat menghubungi:<br>\r\n\r\n														Staff Bagian Akademik dan Kemahasiswaan<br>\r\n\r\n														Telp. (022) 2013163 ext.4634<br><br>\r\n\r\n														Web Info Besiswa UPI: <a href="http://beasiswa.upi.edu/" target="_blank">http://beasiswa.upi.edu/</a>\r\n\r\n													</p>', '2013-01-31 13:38:46', 0000001),
(0000018, 'Jenis Beasiswa', 'Jenis Beasiswa FPMIPA Universitas Pendidikan Indonesia', 'Jenis Beasiswa FPMIPA Universitas Pendidikan Indonesia', '<table width="100%" border="1" bordercolor="#ccc" cellspacing="0" cellpadding="8" align="left" style="margin-top:10px; margin-bottom:15px;">\r\n\r\n														<tbody>\r\n\r\n															<tr>\r\n\r\n																<td width="6%">\r\n\r\n																	<p align="center"><strong>NO</strong></p>\r\n\r\n																</td>\r\n\r\n																<td width="17%">\r\n\r\n																	<p align="center"><strong>JENIS BEASISWA</strong></p>\r\n\r\n																</td>\r\n\r\n																<td width="58%">\r\n\r\n																	<p align="center"><strong>PERSYARATAN</strong><strong></strong></p>\r\n\r\n																</td>\r\n\r\n																<td width="18%">\r\n\r\n																	<p align="center"><strong>BESARNYA BEASISWA</strong></p>\r\n\r\n																</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">1</p>\r\n\r\n																</td>\r\n\r\n																<td width="17%" valign="top">\r\n\r\n																	<p align="center">PPA</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="58%">\r\n\r\n																	<ul>\r\n\r\n																		<li>Permohonan tertulis dari mahasiswa yang bersangkurang ditujukan kepada Pembantu Rektor Bidang Kemahasiswaan dan Kemitraan melalui Pembantu Dekan Bidang Akademik dan Keamhasiswaan pada fakultas masing-masing.</li>\r\n\r\n																		<li>Surat keterangan tidak mampu dari kelurahan/Desa setempat.</li>\r\n\r\n																		<li>Masih aktif kuliah ( tidak sedang menjalani cuti kuliah ) minimal duduk di semesnter 3, yang dibuktikan dengan kartu tanda mahasiswa (KTM) dan kwitansi pembayaran SPP terakhir.</li>\r\n\r\n																		<li>Keterangan dari Fakultas yang menyatakan berkelakuan baik, tidak pernah melanggar tata tertib kampus dan tidak sedang menerima beasiswa dari sumber lain.</li>\r\n\r\n																		<li>Mahasiswa mengikuti wawancara yang dilaksanakan oleh ketua jurusan masing-masing.</li>\r\n\r\n																		<li>IPK minimal 3,00 bagi mahasiswa semester 3 ke atas.</li>\r\n\r\n																		<li>Diutamakan yang aktif dalam kegiatan kemahasiswaan yang diprogramkan oleh Universitas.</li>\r\n\r\n																	</ul>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="18%">6 bulan x 250.0006 bulan x 350.000</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">2</p>\r\n\r\n																</td>\r\n\r\n																<td width="17%" valign="top">\r\n\r\n																	<p align="center">BBM</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="58%">\r\n\r\n																	<ul>\r\n\r\n																		<li>Permohonan tertulis dari mahasiswa yang bersangkurang ditujukan kepada Pembantu Rektor Bidang Kemahasiswaan dan Kemitraan melalui Pembantu Dekan Bidang Akademik dan Keamhasiswaan pada fakultas masing-masing.</li>\r\n\r\n																		<li>Surat keterangan tidak mampu dari kelurahan/Desa setempat.</li>\r\n\r\n																		<li>Masih aktif kuliah ( tidak sedang menjalani cuti kuliah ) minimal duduk di semesnter 3, yang dibuktikan dengan kartu tanda mahasiswa (KTM) dan kwitansi pembayaran SPP terakhir.</li>\r\n\r\n																		<li>Keterangan dari Fakultas yang menyatakan berkelakuan baik, tidak pernah melanggar tata tertib kampus dan tidak sedang menerima beasiswa dari sumber lain.</li>\r\n\r\n																		<li>Mahasiswa mengikuti wawancara yang dilaksanakan oleh ketua jurusan masing-masing.</li>\r\n\r\n																		<li>IPK minimal 2,50 bagi mahasiswa semester 3 ke atas.</li>\r\n\r\n																		<li>Diutamakan yang aktif dalam kegiatan kemahasiswaan yang diprogramkan oleh Universitas.</li>\r\n\r\n																	</ul>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="18%">6 bulan x 250.0006 bulan x 350.000</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">3</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">PPA BARU (4 bln)</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">2 bulan x 250.0002 bulan x 350.000</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">4</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">BBM BARU (4bln)</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">2 bulan x 250.0002 bulan x 350.000</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">5</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Bidik Misi</td>\r\n\r\n																<td valign="top" width="58%">\r\n\r\n																	<ul>\r\n\r\n																		<li>Siswa SMA sederajat atau bentuk lain yang sederajat yang dijadwalkan lulus pada tahun 2010.</li>\r\n\r\n																		<li>Berprestasi dan orang tua/wali-nya kurang mampu secara ekonomi.</li>\r\n\r\n																		<li>Calon penerima beasiswa mempunyai prestasi akademik/ kurikuler, ko-kurikuler maupun ekstra kurikuler yang diketahui oleh Kepala Sekolah/ Pimpinan Unit Pendidikan Masyarakat (Dikmas) Kabupaten/Kota. Adapun prestasi akademik/kurikuler yang dimaksud adalah peringkat 25 persen terbaik di kelas, sedangkan prestasi pada kegiatan ko-kurikuler dan/atau ekstrakurikuler minimal peringkat ke-3 di tingkat Kabupaten/Kota dan harus sesuai dengan program studi yang dipilih.</li>\r\n\r\n																	</ul>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="18%">10.000.000/tahun</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">6</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Bea. Jabar Satu Siklus</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">5.000.000/semester</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">7</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Bank Indonesia</td>\r\n\r\n																<td valign="top" width="58%">\r\n\r\n																	<ul>\r\n\r\n																		<li>Permohonan tertulis dari mahasiswa ybs.ditujukan kepada Pembantu Rektor Bidang Kemahasiswaan dan Kemitraan melalui PD Bidang Akademik dan Kemahasiswaan masing-masing fakultas.</li>\r\n\r\n																		<li>Surat keterangan tidak mampu dari kelurahan/Desa setempat.</li>\r\n\r\n																		<li>Masih aktif kuliah ( tidak sedang menjalani cuti kuliah ) minimal duduk smt.III dibuktikan dengan KTM dan kwitansi pembayaran SPP terakhir;</li>\r\n\r\n																		<li>Keterangan dari Fakultas yang menyatakan berkelakuan baik, tidak pernah melanggar tata tertib kampus dan tidak sedang menerima beasiswa dari sumber lain;</li>\r\n\r\n																		<li>Mahasiswa mengikuti wawancara yang dilaksanakan oleh ketua jurusan masing-masing;</li>\r\n\r\n																		<li>IPK minimal 2,75 bagi mahasiswa semester 3 ke atas.</li>\r\n\r\n																	</ul>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="18%">200.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">8</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">BRI</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">300.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">9</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">B C A SPP</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">1.500.000 = 2 semester</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">10</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">B C A Biaya Hidup</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">200.000/bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">11</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">BUMN</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">2.500.000/tahun</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">12</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">PTPN XIII</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">175.000 x 6 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">13</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Yys. Supersemar</td>\r\n\r\n																<td valign="top" width="58%">\r\n\r\n																	<ul>\r\n\r\n																		<li>Masih aktif kuliah ( tidak sedang menjalani cuti kuliah ) duduk disemester 3-4.</li>\r\n\r\n																		<li>Surat keterangan tidak melanggar tata tertib kampus, tidak sedang bekerja dan tidak sedang mendapat beasiswa dari sumber lain yang ditandatangani oleh PD I Fakultas.</li>\r\n\r\n																		<li>IPK minimal 2,50 dibuktikan dengan fotocopy transkrip nilai.</li>\r\n\r\n																		<li>Keterangan kurang/tidak mampu dari kelurahan tempat tinggal asal.</li>\r\n\r\n																		<li>Melampirkan fotocopy KTM/SPP terakhir.</li>\r\n\r\n																	</ul>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="18%">120.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">14</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">PT Gudang Garam</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">125.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">15</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Yys. Marubeni</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">500.000/3 bulan x 4</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">16</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Yys. Toyota Astra</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">150.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">17</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">PT Djarum</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">600.000X12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">18</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Yys. SantosoSPP</td>\r\n\r\n																<td valign="top" width="58%">\r\n\r\n																	<ul>\r\n\r\n																		<li>Permohonan tertulis dari mahasiswa yang bersangkutan.</li>\r\n\r\n																		<li>Masih aktif kuliah ( tidak sedang menjalani cuti kuliah )</li>\r\n\r\n																		<li>Berkelakuan baik, mentaati tata tertib /aturan yang berlaku</li>\r\n\r\n																		<li>Tidak sedang menerima beasiswa dari sumber lain ( tidak boleh rangkap)</li>\r\n\r\n																		<li>IP/IPK minimal 2,75 dibuktikan dengan Kartu Hasil Studi (KHS)</li>\r\n\r\n																		<li>Keterangan kurang/tidakmampu dari Kelurahan/Desa setempat</li>\r\n\r\n																		<li>KTM dan tanda pembayaran SPP terakhir</li>\r\n\r\n																		<li>Surat Keterangan Penghasilan Orang Tua</li>\r\n\r\n																	</ul>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="18%">650.000-900.000/semester</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">19</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Yys. Santoso</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">250.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">20</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Pikiran Rakyat</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">200.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">21</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">JJC</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">900.000/tahun</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">22</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Yys. Salim</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">125.000 x 12 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">23</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Sampoerna Foundation</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">50.000.000 (1 kali)</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">24</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Pegadaian</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">1.200.000/3 bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">25</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Yayasan Orbit</td>\r\n\r\n																<td valign="top" width="58%"></td>	\r\n\r\n																<td valign="top" width="18%"></td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">26</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Bank Mandiri</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%">500.000/bulan</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">27</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Panasonic Scholarship (program S2)</td>\r\n\r\n																<td valign="top" width="58%"> <a title="Berita Beasiswa" href="http://fpmipa.upi.edu/?p=979" target="_blank">Persyaratan</a></td>\r\n\r\n																<td valign="top" width="18%"></td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">28</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Bawaku Makmur (dalam usulan)</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%"></td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">29</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">BNI</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%"></td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td width="6%" valign="top">\r\n\r\n																	<p align="center">30</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="17%">Kobatim (Timah Bangka)</td>\r\n\r\n																<td valign="top" width="58%"></td>\r\n\r\n																<td valign="top" width="18%"></td>\r\n\r\n															</tr>\r\n\r\n														</tbody>\r\n\r\n													</table>\r\n\r\n													<p>\r\n\r\n														Keterangan:<br />\r\n\r\n														Untuk mendapatkan informasi lebih jelas mengenai beasiswa dapat menghubungi:<br />\r\n\r\n														Staff Bagian Akademik dan Kemahasiswaan<br />\r\n\r\n														Telp. (022) 2013163 ext.4634\r\n\r\n													</p>', '2013-01-31 13:38:46', 0000001),
(0000019, 'Proceeding PDF', 'Proceeding PDF FPMIPA Universitas Pendidikan Indonesia', 'Proceeding PDF FPMIPA Universitas Pendidikan Indonesia', '													<iframe src="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.fpmipa.upi.edu%2Fuploads%2F2012%2FICLS%2Fkeynotespeaker%2FMaitree.pdf&#038;hl=&#038;embedded=true" class="gde-frame" style="width:100%; height:500px; border: none;" scrolling="no"></iframe>\r\n\r\n													<div style="margin-top:15px;">\r\n\r\n														<a target="_blank" href="http://www.fpmipa.upi.edu/uploads/2012/ICLS/keynotespeaker/Maitree.pdf" class="gde-link" onClick="_gaq.push([''_trackEvent'', ''Google Doc Embedder'', ''Download'', this.href]);">Download (PDF, 222KB)</a>\r\n\r\n													</div>', '2013-01-31 13:38:46', 0000001),
(0000020, 'Proceeding Detail', 'Proceeding Detail FPMIPA Universitas Pendidikan Indonesia', 'Proceeding Detail FPMIPA Universitas Pendidikan Indonesia', '																DATA PROCEEDING DETAIL<br>\r\n\r\n																FAKULTAS PENDIDIKAN MATEMATIKA DAN ILMU PENGETAHUAN ALAM<br>\r\n\r\n																UNIVERSITAS PENDIDIKAN INDONESIA', '2013-01-31 13:38:46', 0000001),
(0000021, 'Tentang IKOM', 'IKOM FPMIPA Universitas Pendidikan Indonesia', 'IKOM FPMIPA Universitas Pendidikan Indonesia', '<p>\r\n\r\n														IKOM (Ikatan Orang Tua Mahasiswa) adalah organisasi nirlaba yang mendedikasikan aktivitasnya untuk membantu mahasiswa FPMIPA UPI yang karena keterbatasan kemampuan sosial, mengalami kesulitan dalam membayar biaya kuliah. Organisasi ini lahir dari empati kolektif orang tua mahasiswa yang mempunyai perhatian dan kepedulian terhadap mahasiswa.\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Data mahasiswa FPMIPA penerima beasiswa BBM dan PPA Tahun 2009 menunjukkan hanya sebanyak 10% dari jumlah total mahasiswa FPMIPA. Selain itu, pada Semester Genap 2008/2009 jumlah mahasiswa FPMIPA yang bersatus non aktif (tidak melakukan registrasi) tercatat sebanyak 71 orang. Dengan demikian keberadaan IKOM menjadi sangat penting.\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Sejak IKOM lahir pada pertengahan tahun 2003, telah dilakukan pengumpulan dana infak yang disumbangkan oleh orang tua mahasiswa baru kepada IKOM yang dibantu Seksi Administrasi Akademik dan Kemahasiswaan FPMIPA UPI (dahulu Subbag Kemahasiswaan). Dana infak orang tua tersebut kemudian didayagunakan langsung kepada mahasiswa yang memerlukan dalam bentuk pinjaman tanpa bunga. Tercatat sampai tahun 2009 sebanyak 236 orang mahasiswa FPMIPA telah mendapat bantuan pinjaman secara bergilir dengan besaran bervariasi sesuai kebutuhan.\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Mulai tahun 2009, Badan Eksekutif Mahasiswa FPMIPA UPI turut terlibat dalam program IKOM untuk membantu memperlancar penyampaian informasi kepada mahasiswa dan juga sebagai upaya meningkatkan transparansi IKOM kepada semua pihak di lingkungan FPMIPA UPI.\r\n\r\n													</p>', '2013-01-31 13:38:46', 0000001);
INSERT INTO `page` (`id_page`, `title`, `meta_keywords`, `meta_description`, `content`, `date_create`, `id_user`) VALUES
(0000022, 'Visi Misi IKOM', 'Visi Misi IKOM FPMIPA Universitas Pendidikan Indonesia', 'Visi Misi IKOM FPMIPA Universitas Pendidikan Indonesia', '<p>\r\n\r\n														<b>Visi :</b> \r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														Peduli dan berkiprah bagi kelancaran studi mahasiswa.\r\n\r\n													</p>\r\n\r\n													<p>\r\n\r\n														<b>Misi :</b> \r\n\r\n													</p>\r\n\r\n													<ul>\r\n\r\n														<li>Menumbuhkan dan menggerak kepedulian orang tua mahasiswa.</li>\r\n\r\n														<li>Mendayagunakan dana sumbangan yang berbasis kekuatan sendiri.</li>\r\n\r\n														<li>Membantu proses pendidikan melalui bantuan finansial kepada mahasiswa.</li>\r\n\r\n													</ul>', '2013-01-31 13:38:46', 0000001),
(0000023, 'Tujuan dan Prinsip Dasar', 'Tujuan dan Prinsip Dasar IKOM FPMIPA Universitas Pendidikan Indonesia', 'Tujuan dan Prinsip Dasar IKOM FPMIPA Universitas Pendidikan Indonesia', '<h4>Tujuan</h4>\r\n\r\n													<ul>\r\n\r\n														<li>Membantu penyelesaian studi mahasiswa yang kesulitan dalam membayar SPP.</li>\r\n\r\n														<li>Menumbuhkan solidaritas sosial antarorang tua di FPMIPA UPI.</li>\r\n\r\n														<li>Menjalin komunikasi antara orang tua mahasiswa dengan FPMIPA UPI dalam kegiatan pendidikan.</li>\r\n\r\n													</ul>\r\n\r\n													<h4>Prinsip Dasar</h4>\r\n\r\n													<table border="1" bordercolor="#ccc" style="border-collapse:collapse; border-color:#ccc;" cellspacing="0" cellpadding="10">\r\n\r\n														<tbody>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="131">\r\n\r\n																	<p align="left"><strong>Prinsip moral</strong></p>\r\n\r\n																</td>\r\n\r\n																<td valign="top">\r\n\r\n																	<p align="left">:</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="477">\r\n\r\n																	<p align="left">Jujur, amanah, ihsan</p>\r\n\r\n																</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="131">\r\n\r\n																	<p align="left"><strong>Prinsip kedudukan organisasi</strong></p>\r\n\r\n																</td>\r\n\r\n																<td valign="top">\r\n\r\n																	<p align="left">:</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="477">\r\n\r\n																	<p align="left">Transparan, akuntabel, bertanggung jawab, profesional, berdayaguna dan berhasil guna, berorientasi pada perbaikan terus menerus</p>\r\n\r\n																</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="131">\r\n\r\n																	<p align="left"><strong>Prinsip pengembangan</strong></p>\r\n\r\n																</td>\r\n\r\n																<td valign="top">\r\n\r\n																	<p align="left">:</p>\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="477">\r\n\r\n																	<p align="left">Inovatif, dan kreatif</p>\r\n\r\n																</td>\r\n\r\n															</tr>\r\n\r\n														</tbody>\r\n\r\n													</table>', '2013-01-31 13:38:46', 0000001),
(0000024, 'Pengurus IKOM', 'Pengurus IKOM FPMIPA Universitas Pendidikan Indonesia', 'Pengurus IKOM FPMIPA Universitas Pendidikan Indonesia', '<h4>Pengurus IKOM</h4>\r\n\r\n													<table border="1" bordercolor="#ccc" style="border-collapse:collapse; width:100%;" cellspacing="0" cellpadding="5">\r\n\r\n														<tbody>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Ketua</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Daeng Nurjamal, M.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Wakil Ketua</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Dr. Osa Juarsa, M.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Sekretaris</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Sasmiyetti, S.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Wakil Sekretaris</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Siti Hasanah, S.Pd</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Bendahara</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Ai Maemunah, S.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Wakil Bendahara</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Drs. Rindang Supriyatno</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Koordinator Bidang Kominikasi</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Mahpudin</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Anggota Bidang Komunikasi</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Moch. Ramdan, S.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Anggota Bidang Komunikasi</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Eva Riyanty, S.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Koordinator Bidang Lapangan Kerja</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Drs. Juhro Hamdan, M.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Koordinator Bidang Penghimpun Dana</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Zulfatril Fachrudin</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Anggota Bidang Penghimpun Dana</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Mujiono</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Anggota Bidang Penghimpun Dana</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Hj. Nina</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Koordinator Bidang Sosial</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Didik Nurhudaya, S.Pd.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="200">Anggota Bidang Sosial</td>\r\n\r\n																<td valign="top" width="18">:</td>\r\n\r\n																<td valign="top" width="205">Nani Sumaryani</td>\r\n\r\n															</tr>\r\n\r\n														</tbody>\r\n\r\n													</table>', '2013-01-31 13:38:46', 0000001),
(0000025, 'Donatur IKOMA', 'Donatur IKOMA FPMIPA Universitas Pendidikan Indonesia', 'Donatur IKOMA FPMIPA Universitas Pendidikan Indonesia', 'Empty', '2013-01-31 13:38:46', 0000001),
(0000026, 'Organizing Committee', 'Organizing Committee FPMIPA Universitas Pendidikan Indonesia', 'Organizing Committee FPMIPA Universitas Pendidikan Indonesia', '<h4>Organizing Comittee</h4>\r\n\r\n													<table width="593" border="1" bordercolor="#ccc" cellspacing="0" cellpadding="5">\r\n\r\n														<tbody>\r\n\r\n															<tr>\r\n\r\n																<td colspan="3" valign="top" width="593"><strong><i>IMPLEMENTING STRUCTURE AT UPI</i></strong></td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="281"><strong>Advisors:</strong></td>\r\n\r\n																<td colspan="2" valign="top" width="312"></td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="281">Rector of UPI<br />\r\n\r\n																	<span style="line-height: 19px;">Director of Graduate School UPI</span><br />\r\n\r\n																	Dean of FPMIPA UPI\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="15">:<br />:</td>\r\n\r\n																<td valign="top" width="286">Prof. Dr. Sunaryo Kartadinata, M.Pd.<br />\r\n\r\n																	Prof. Dr. Didi Suryadi, M.Si.<br />\r\n\r\n																	Prof. Dr. Asep Kadarohman, M.Si.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="281">Team leader<br />\r\n\r\n																	Subject-specific pedagogy coordinator<br />\r\n\r\n																	Pre-service program coordinator\r\n\r\n																</td>\r\n\r\n																<td valign="top" width="15">:<br />:<br />:</td>\r\n\r\n																<td valign="top" width="286">Sumar Hendayana, Ph.D.<br />\r\n\r\n																	Dr. M. Solehuddin<br />\r\n\r\n																	Dr. Turmudi (Mathematics)<br />\r\n\r\n																	Dr. Riandi (Biology)<br />\r\n\r\n																	Dr. Ahmad Mudzakir (Chemistry)<br />\r\n\r\n																	Dr. Ida Kaniawati (Physics)\r\n\r\n																</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="281">In-service program coordinator</td>\r\n\r\n																<td valign="top" width="15">:</td>\r\n\r\n																<td valign="top" width="286">Dr. Asep Supriatna, M.Si.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="281">General Coordinator</td>\r\n\r\n																<td valign="top" width="26">:</td>\r\n\r\n																<td valign="top" width="286">Drs. Harun Imansyah, M.Ed.</td>\r\n\r\n															</tr>\r\n\r\n															<tr>\r\n\r\n																<td valign="top" width="281">Administration Staff</td>\r\n\r\n																<td valign="top" width="15">:</td>\r\n\r\n																<td valign="top" width="286">Dian Hendriana, S.Pd.<br />\r\n\r\n																	Rika Gunawati, S.Pd.<br />\r\n\r\n																	Iyan Sopyan\r\n\r\n																</td>\r\n\r\n															</tr>\r\n\r\n														</tbody>\r\n\r\n													</table>', '2013-01-31 13:38:46', 0000001),
(0000027, 'Participant', 'Participant FPMIPA Universitas Pendidikan Indonesia', 'Participant FPMIPA Universitas Pendidikan Indonesia', '-', '2013-01-31 13:38:46', 0000001),
(0000028, 'Report Activity', 'Report Activity FPMIPA Universitas Pendidikan Indonesia', 'Report Activity FPMIPA Universitas Pendidikan Indonesia', '-', '2013-01-31 13:38:46', 0000001),
(0000029, 'Publication', 'Publication FPMIPA Universitas Pendidikan Indonesia', 'Publication FPMIPA Universitas Pendidikan Indonesia', 'Empty', '2013-01-31 13:38:46', 0000001),
(0000030, 'Research Project', 'Research Project FPMIPA Universitas Pendidikan Indonesia', 'Research Project FPMIPA Universitas Pendidikan Indonesia', '-', '2013-01-31 13:38:46', 0000001),
(0000031, 'Berita', 'Berita FPMIPA Universitas Pendidikan Indonesia', 'Berita FPMIPA Universitas Pendidikan Indonesia', '-', '2013-01-31 00:00:00', 0000001),
(0000032, 'Agenda', 'Agenda FPMIPA Universitas Pendidikan Indonesia', 'Agenda FPMIPA Universitas Pendidikan Indonesia', '-', '2013-01-31 00:00:00', 0000001),
(0000033, 'Seminar', 'Seminar FPMIPA Universitas Pendidikan Indonesia', 'Seminar FPMIPA Universitas Pendidikan Indonesia', '-', '2013-01-31 00:00:00', 0000001),
(0000034, 'Lowongan Kerja', 'Lowongan Kerja FPMIPA Universitas Pendidikan Indonesia', 'Lowongan Kerja FPMIPA Universitas Pendidikan Indonesia', '-', '2013-01-31 00:00:00', 0000001),
(0000035, 'Layanan Pelatihan', 'Layanan Pelatihan FPMIPA UPI', 'Layanan Pelatihan FPMIPA UPI', 'Testing', '2013-02-11 00:00:00', 0000001),
(0000036, 'Fasilitas', 'Fasilitas FPMIPA Universitas Pendidikan Indonesia', 'Fasilitas FPMIPA Universitas Pendidikan Indonesia', '-', '2013-02-12 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE IF NOT EXISTS `pimpinan` (
  `id_pimpinan` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_jurusan` int(7) unsigned zerofill NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_pimpinan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`id_pimpinan`, `nama`, `jabatan`, `id_jurusan`, `image_path`, `status`, `date_create`) VALUES
(0000001, 'Prof. Dr.R.Asep Kadarohman, M.Si.', 'Dekan', 0000000, 'data/pimpinan/asep_kadarohman.jpg', 'active', '2013-02-08 00:00:00'),
(0000002, 'Dr. Siti Fatimah, M.Si.', 'Pembantu Dekan I', 0000000, 'data/pimpinan/siti_fatimah.jpg', 'active', '2013-02-08 00:00:00'),
(0000003, 'Dr. Wawan Setiawan, M.Kom.', 'Pembantu Dekan II', 0000000, 'data/pimpinan/wawan_setiawan.jpg', 'active', '2013-02-08 00:00:00'),
(0000004, 'Drs. H. Jajang Saefulloh', 'Kasi Keuangan dan SDM', 0000000, 'data/pimpinan/jajang_saefulloh.jpg', 'active', '2013-02-08 00:00:00'),
(0000005, 'Drs. Rindang Supriyatno', 'Kasi Akademik dan Kemahasiswaan', 0000000, 'data/pimpinan/rindang_supriyatno.jpg', 'active', '2013-02-08 00:00:00'),
(0000006, 'Drs. H. Aang Juangsa', 'Kasubag Aset Fasilitas dan TIK', 0000000, '-', 'deleted', '2013-02-08 00:00:00'),
(0000007, 'Drs. Turmudi, M.Ed., M.Sc., Ph.D.', 'Ketua Jurusan Pendidikan Matematika', 0000004, 'data/pimpinan/turmudi.jpg', 'active', '2013-02-08 00:00:00'),
(0000008, 'Dr. Elah Nurlaelah, M.Si.', 'Sekretaris Jurusan pendidikan Matematika', 0000004, 'data/pimpinan/elah_nurlaelah.jpg', 'active', '2013-02-08 00:00:00'),
(0000009, 'Dr. H. Dadang Juandi, M.Si.', 'Ketua Prodi Pendidikan Matematika', 0000004, 'data/pimpinan/dadang_juandi.jpg', 'active', '2013-02-08 00:00:00'),
(0000010, 'Dra. Entit Puspita, M.Si.', 'Ketua Prodi Matematika', 0000004, 'data/pimpinan/entit_puspita.jpg', 'active', '2013-02-08 00:00:00'),
(0000011, 'Dr. Ida Kaniawati, M.Si.', 'Ketua Jurusan Pendidkan Fisika', 0000002, 'data/pimpinan/ida_kaniawati.jpg', 'active', '2013-02-08 00:00:00'),
(0000012, 'Dr. Dadai Rusdiana, M.Si.', 'Sekretaris Jurusan Pendidikan Fisika', 0000002, 'data/pimpinan/dadai_rusdiana.jpg', 'active', '2013-02-08 00:00:00'),
(0000013, 'Dr. Setiya Utari, M.Si.', 'Ketua Prodi Pendidikan Fisika', 0000002, 'data/pimpinan/setiya_utari.jpg', 'active', '2013-02-08 00:00:00'),
(0000014, 'Dr. Andi Suhandi, M.Si.', 'Ketua Prodi Fisika', 0000002, 'data/pimpinan/andi_suhandi.jpg', 'active', '2013-02-08 00:00:00'),
(0000015, 'Dr. H. Riandi, M.Si.', 'Ketua Jurusan Pendidikan Biologi', 0000001, 'data/pimpinan/riandi.jpg', 'active', '2013-02-08 00:00:00'),
(0000016, 'Dr. Phil. H. Ari Widodo, M.Ed.', 'Sekretaris Jurusan Pendidikan Biologi', 0000001, 'data/pimpinan/ari_widodo.jpg', 'active', '2013-02-08 00:00:00'),
(0000017, 'Dr. Hj. Siti Sriyati, M.Si.', 'Ketua Prodi Pendidikan Biologi', 0000001, 'data/pimpinan/siti_sriyati.jpg', 'active', '2013-02-08 00:00:00'),
(0000018, 'Dr. Hj. Widi Purwianingsih, M.Si.', 'Ketua Prodi Biologi', 0000001, 'data/pimpinan/widi_purwianingsih.jpg', 'active', '2013-02-08 00:00:00'),
(0000019, 'Dr. H. Ahmad Mudzakir, M.Si.', 'Ketua Jurusan Pendidikan Kimia', 0000003, 'data/pimpinan/ahmad_mudzakir.jpg', 'active', '2013-02-08 00:00:00'),
(0000020, 'Dr. Nahadi, M.Si., M.Pd.', 'Sekretaris Jurusan Pendidikan Kimia', 0000003, 'data/pimpinan/nahadi.jpg', 'active', '2013-02-08 00:00:00'),
(0000021, 'Dr. Hernani, M.Si.', 'Ketua Prodi Pendidikan Kimia', 0000003, 'data/pimpinan/hernani.jpg', 'active', '2013-02-08 00:00:00'),
(0000022, 'Dr. Ratnaningsih Eko Sardjono, M.Si.', 'Ketua Prodi Kimia', 0000003, 'data/pimpinan/ratnaningsih_eko.jpg', 'active', '2013-02-08 00:00:00'),
(0000023, 'Dr. Enjang Ali Nurdin, M.Kom.', 'Ketua Prodi Pendidikan Ilmu Komputer', 0000005, 'data/pimpinan/enjang_ali_nurdin.jpg', 'active', '2013-02-08 00:00:00'),
(0000024, 'Rasim, S.T., M.T.', 'Ketua Prodi Ilmu Komputer', 0000006, 'data/pimpinan/rasim.jpg', 'active', '2013-02-08 00:00:00'),
(0000025, 'Dr. Diana Rochintaniawati, M.Ed.', 'Ketua Prodi International Program on Science Educa', 0000007, 'data/pimpinan/diana_rochintaniawati.jpg', 'active', '2013-02-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE IF NOT EXISTS `seminar` (
  `id_seminar` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `date` datetime NOT NULL,
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_seminar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`id_seminar`, `title`, `meta_keywords`, `meta_description`, `thumbnail`, `content`, `date`, `date_create`, `id_user`) VALUES
(0000001, 'Second Day Of Open Laboratory', 'testing', 'testing', 'data/seminar_thumbnail/berita.png', '<p style="text-align: justify;">Di hari kedua Open Laboratory, acara berjalan cukup lancar. Bahkan di hari kedua ini, lebih banyak sekolah yang turut berpartisipasi. ada 11 sekolah yang turut berpartisipasi. Bukan hanya sekolah-sekolah yang berasal dari Bandung dan sekitarnya, namun sekolah-sekolah yang diluar Bandung juga turut andil didalamnya, seperti SMAN 1 Cibeber Bekasi, MAN 2 Ciamis, SMAN Tomo Sumedang dan SMAN 1 Tambun Selatan Bekasi. SMA lainnya adalah SMA Alfa Centaury, SMA BPI 2 Bandung, SMAN 1 Lembang, SMK PGRI 2 Cimahi, SMAN 10 Bandung dan Pesantren Persatuan Islam 1 Bandung. Acara <i>Open Laboratory </i> merupakan salah satu rangkaian dari acara EXPO KIMIA 2013 dimana dalam acara Open Laboratory tersebut pesertanya di pandu memasuki lab LKDA, lab LKOB, dan lab Riset.</p>', '2013-02-11 00:00:00', '2013-02-11 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `slider_home`
--

CREATE TABLE IF NOT EXISTS `slider_home` (
  `id_slider` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `slider_home`
--

INSERT INTO `slider_home` (`id_slider`, `title`, `link`, `img_path`, `date_create`, `id_user`) VALUES
(0000003, 'FPMIPA Universitas Pendidikan Indonesia', 'home.html', 'data/slider/slider5.jpg', '2013-02-01 00:00:00', 0000001),
(0000004, 'FPMIPA Universitas Pendidikan Indonesia', 'home.html', 'data/slider/slider6.jpg', '2013-02-01 00:00:00', 0000001),
(0000005, 'FPMIPA Universitas Pendidikan Indonesia', 'home.html', 'data/slider/slider7.jpg', '2013-02-01 00:00:00', 0000001),
(0000006, 'FPMIPA Universitas Pendidikan Indonesia', 'home.html', 'data/slider/slider8.jpg', '2013-02-01 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `tata_usaha`
--

CREATE TABLE IF NOT EXISTS `tata_usaha` (
  `id_tata_usaha` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `golongan` varchar(5) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `bidang_tugas` varchar(100) NOT NULL,
  `id_unit_kerja` int(7) unsigned zerofill NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_tata_usaha`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `tata_usaha`
--

INSERT INTO `tata_usaha` (`id_tata_usaha`, `nip`, `nama`, `golongan`, `alamat`, `telepon`, `image_path`, `bidang_tugas`, `id_unit_kerja`, `status`, `date_create`) VALUES
(0000001, '196201011982031000', 'Drs. H. Jajang Saefulloh', '3d', '-', '-', '-', 'Kasubag SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000002, '196011281992031002', 'Drs. Rindang Supriyatno', '3d', '-', '-', '-', 'Kasi Akademik & Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:00'),
(0000003, '196205271982032001', 'Dra. Inut Srihastuti, S.Pd.', '3d', '-', '-', '-', 'Staff SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000004, '196106011985031002', 'Zul Asmar KS, S.Pd.', '3d', '-', '-', '-', 'Laboran', 0000007, 'active', '2013-02-06 09:27:00'),
(0000005, '197103052001121001', 'Rahadian D. Juansah, S.Pd.', '3c', '-', '-', '-', 'Laboran', 0000004, 'active', '2013-02-06 09:27:00'),
(0000006, '197505072001121001', 'Sarna Suryana, S.Pd.,M.Pd.', '3c', '-', '-', '-', 'Laboran', 0000004, 'active', '2013-02-06 09:27:00'),
(0000007, '196804201990032001', 'Tini Kartini, S.Pd', '3c', '-', '-', '-', 'Staff Akademik & Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:00'),
(0000008, '196708171994031001', 'Agus Mawan Gianto, S.Pd.', '3c', '-', '-', '-', 'Staff Adminitrasi Jurusan Pendidikan Biologi', 0000004, 'active', '2013-02-06 09:27:00'),
(0000009, '196602211987031001', 'Saepuddin, S.IP.', '3c', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Kimia', 0000007, 'active', '2013-02-06 09:27:00'),
(0000010, '197008291995012001', 'Sri Tri Purwanti,  S.Sos', '3c', '-', '-', '-', 'Laboran', 0000007, 'active', '2013-02-06 09:27:00'),
(0000011, '195708031978031001', 'Agus Sunarya', '3b', '-', '-', '-', 'Staff SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000012, '131270083', 'Ishak Suhana', '3b', '-', '-', '-', 'Teknisi Lab', 0000007, 'active', '2013-02-06 09:27:00'),
(0000013, '196011081983031002', 'S o d  i  k  i  n', '3b', '-', '-', '-', 'Staff Kurikulatorium', 0000011, 'active', '2013-02-06 09:27:00'),
(0000014, '196005261983031003', 'Endang Sujana', '3b', '-', '-', '-', 'Teknisi Lab', 0000005, 'active', '2013-02-06 09:27:00'),
(0000015, '196211141985022001', 'Eulis Nurhayati', '3b', '-', '-', '-', 'Staff SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000016, '196103111986032003', 'Hj. Euis Suparni', '3b', '-', '-', '-', 'Staff SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000017, '196308291986031001', 'Dadang Nugraha', '3b', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Fisika', 0000005, 'active', '2013-02-06 09:27:00'),
(0000018, '196011081983031001', 'S u l a e m a n', '3b', '-', '-', '-', 'Staff Akademik & Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:00'),
(0000019, '196003191988031001', 'Anto Lelono', '3b', '-', '-', '-', 'Staff Administrasi Prodi Ilmu Komputer dan Pend. Ilmu Komputer', 0000008, 'active', '2013-02-06 09:27:00'),
(0000020, '196504191992031001', 'Eman Moch. Ramdan', '3b', '-', '-', '-', 'Staff Adminitrasi Jurusan Pendidikan Biologi', 0000004, 'active', '2013-02-06 09:27:00'),
(0000021, '197010031998022001', 'Hana Rohana, S.A.P.', '3b', '-', '-', '-', 'Laboran', 0000007, 'active', '2013-02-06 09:27:00'),
(0000022, '196703131991032003', 'Maryami Rostini', '3a', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000023, '197602081999032001', 'Atit Mulyani, A.Md.', '3a', '-', '-', '-', 'Teknisi Lab', 0000005, 'active', '2013-02-06 09:27:00'),
(0000024, '196809251993031002', 'Tjuntjun Nanawiguna', '3a', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Matematika', 0000006, 'active', '2013-02-06 09:27:00'),
(0000025, '197511282008102001', 'Iin Maemunah, S.Pd.', '3a', '-', '-', '-', 'Laboran', 0000004, 'active', '2013-02-06 09:27:00'),
(0000026, '197711202001122003', 'Hana Susanti, SAP.', '3a', '-', '-', '-', 'Teknisi Lab', 0000005, 'active', '2013-02-06 09:27:00'),
(0000027, '197905272001121002', 'Yizal Fajri, A.Md.', '3a', '-', '-', '-', 'Teknisi Lab', 0000005, 'active', '2013-02-06 09:27:00'),
(0000028, '196106271981031002', 'A c e n g', '3a', '-', '-', '-', 'Staff Penunjang Jurusan Pendidikan Fisika', 0000005, 'active', '2013-02-06 09:27:00'),
(0000029, '197809102001122002', 'Fitri Ernawati, A.Md.', '3a', '-', '-', '-', 'Staff SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000030, '196308241987031002', 'Agus Prihatna', '3a', '-', '-', '-', 'Staff Aset Fasilitas dan TIK / Staff Dekan', 0000003, 'active', '2013-02-06 09:27:00'),
(0000031, '196510151987031002', 'A b a s', '3a', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Kimia', 0000007, 'active', '2013-02-06 09:27:00'),
(0000032, '196405171987031002', 'K u s m a y a d i', '3a', '-', '-', '-', 'Staff Penunjang Jurusan Pendidikan Biologi', 0000004, 'active', '2013-02-06 09:27:00'),
(0000033, '196108141982031003', 'A b o', '2d', '-', '-', '-', 'Staff Aset Fasilitas dan TIK / SATPAM', 0000003, 'active', '2013-02-06 09:27:00'),
(0000034, '196211121987031004', 'Supono ', '2d', '-', '-', '-', 'Staff Aset Fasilitas dan TIK / SATPAM', 0000003, 'active', '2013-02-06 09:27:00'),
(0000035, '196406251987031002', 'S o l  i  h i  n', '2d', '-', '-', '-', 'Staff SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000036, '195805081980031004', 'D  a  d  i', '2c', '-', '-', '-', 'Staff Aset Fasilitas dan TIK / SATPAM', 0000003, 'active', '2013-02-06 09:27:00'),
(0000037, '196908211988121001', 'Agus Soleh', '2c', '-', '-', '-', 'Staff Akademik & Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:00'),
(0000038, '198103212010121005', 'Saepul Anwar, A.Md.', '2c', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000039, '197402142005012001', 'Surani, S.Sos.', '2b', '-', '-', '-', 'Laboran', 0000004, 'active', '2013-02-06 09:27:00'),
(0000040, '197812022008101001', 'Dadang Mulyadi', '2b', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000041, '196007031981011001', 'Kusmindar', '2a', '-', '-', '-', 'Staff Penunjang Prodi Ilmu Komputer dan Pend. Ilmu Komputer', 0000008, 'active', '2013-02-06 09:27:00'),
(0000042, '196108301981011001', 'Kuswara', '2a', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Matematika', 0000006, 'active', '2013-02-06 09:27:00'),
(0000043, '196106101987031002', 'Mohamad Yamin', '2a', '-', '-', '-', 'Staff Penunjang Jurusan Pendidikan Matematika', 0000006, 'active', '2013-02-06 09:27:00'),
(0000044, '196210271987031002', 'S a l i m', '2a', '-', '-', '-', 'Staff Penunjang Jurusan Pendidikan Biologi', 0000004, 'active', '2013-02-06 09:27:00'),
(0000045, '', 'Sri Rahayu, S.Si.', '', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Biologi', 0000004, 'active', '2013-02-06 09:27:00'),
(0000046, '', 'Rudi Suyadi, S.Pd.', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000047, '', 'Cepi Junaedi', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000048, '', 'Latif Budiana', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000049, '', 'Yayan Maryana', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000050, '', 'Ujang Hadis', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000051, '', 'Haedarusalam', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000052, '', 'Wawan Waryana', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000053, '', 'Asep Suryana', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000054, '', 'Yudi Is Yuntiwa', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000055, '', 'Ceppy Susant', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000056, '', 'Jajang Darmawan', '', '-', '-', '-', 'Staff SDM & Keuangan', 0000002, 'active', '2013-02-06 09:27:00'),
(0000057, '', 'Dian Herdiana, S.Pd.', '', '-', '-', '-', 'Staff Kerjasama Teknis JICA /AVA', 0000010, 'active', '2013-02-06 09:27:00'),
(0000058, '', 'Rika Gunawati, S.Pd.', '', '-', '-', '-', 'Staff Kerjasama Teknis JICA', 0000010, 'active', '2013-02-06 09:27:00'),
(0000059, '', 'Tasrifudin', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000060, '', 'Siti Rubiyanti, S.Pd.', '', '-', '-', '-', 'Staff Akademik & Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:00'),
(0000061, '', 'Andri Mulyadi', '', '-', '-', '-', 'Staff Administrasi Prodi Ilmu Komputer dan Pend. Ilmu Komputer', 0000008, 'active', '2013-02-06 09:27:00'),
(0000062, '', 'Agus Syarif', '', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Fisika', 0000005, 'active', '2013-02-06 09:27:00'),
(0000063, '', 'Desti Puspitasari', '', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Kimia', 0000007, 'active', '2013-02-06 09:27:00'),
(0000064, '', 'Resik Ajeng Maria, S.Si.', '', '-', '-', '-', 'Staff Akademik & Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:00'),
(0000065, '', 'Nandar Rohimat', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000066, '', 'Encang', '', '-', '-', '-', 'Staff Penunjang Prodi Ilmu Komputer dan Pend. Ilmu Komputer', 0000008, 'active', '2013-02-06 09:27:00'),
(0000067, '', 'Marthalina Iriani, S.Si.', '', '-', '-', '-', 'Staff Kurikulatorium', 0000011, 'active', '2013-02-06 09:27:00'),
(0000068, '', 'Sutana', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000069, '', 'Iyan Sopiyan', '', '-', '-', 'data/tata_usaha/1.jpg', 'Staff Aset Fasilitas dan TIK / Staff IT', 0000003, 'active', '2013-02-06 09:27:00'),
(0000070, '', 'Sri Susanti', '', '-', '-', '-', 'Staff Administrasi Jurusan Pendidikan Fisika', 0000005, 'active', '2013-02-06 09:27:00'),
(0000071, '', 'Agnia Muftiasih, S.Si.', '', '-', '-', '-', 'Staff Administrasi Laboran Jurusan Pendidikan Kimia', 0000007, 'active', '2013-02-06 09:27:00'),
(0000072, '', 'Syahriani Datau, S.Si.', '', '-', '-', '-', 'Teknisi Lab', 0000008, 'active', '2013-02-06 09:27:00'),
(0000073, '', 'Ibrahim Sani Ali Manggala, S.Pd.', '', '-', '-', '-', 'Laboran', 0000006, 'active', '2013-02-06 09:27:00'),
(0000074, '', 'Verry Rusyanto Hamdani', '', '-', '-', '-', 'Staff Aset Fasilitas dan TIK', 0000003, 'active', '2013-02-06 09:27:00'),
(0000075, '', 'Pepen Supendi', '', '-', '-', '-', 'Staff Penunjang Jurusan Pendidikan Biologi', 0000004, 'active', '2013-02-06 09:27:00'),
(0000076, '', 'Dhea Aprilia Andhini', '', '-', '-', '-', 'Staff Administrasi Profi International Program on Science Education', 0000009, 'active', '2013-02-06 09:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `tautan`
--

CREATE TABLE IF NOT EXISTS `tautan` (
  `id_tautan` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  `id_user` int(7) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id_tautan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tautan`
--

INSERT INTO `tautan` (`id_tautan`, `title`, `link`, `status`, `date_create`, `id_user`) VALUES
(0000001, 'Sistem Informasi Nilai Online', 'http://siak.upi.edu/nilai/', 'active', '2013-02-12 00:00:00', 0000001),
(0000002, 'Sistem Evaluasi Perkuliahan', 'http://fpmipa.upi.edu/evaluasi/', 'active', '2013-02-12 00:00:00', 0000001),
(0000003, 'Pengembangan Dosen & Kapasitas Institusi', 'http://bangdos.upi.edu/', 'active', '2013-02-12 00:00:00', 0000001),
(0000004, 'LPPM UPI', 'http://lppm.upi.edu/', 'active', '2013-02-12 00:00:00', 0000001),
(0000005, 'Komunitas Sekolah', 'http://indoschool.org', 'active', '2013-02-12 00:00:00', 0000001),
(0000006, 'Indonesia Center for Lesson Study', 'http://icls.upi.edu/v5/', 'active', '2013-02-12 00:00:00', 0000001),
(0000007, 'Direktorat Jendral Pendidikan Tinggi', 'http://dikti.go.id', 'active', '2013-02-12 00:00:00', 0000001);

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE IF NOT EXISTS `unit_kerja` (
  `id_unit_kerja` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nama_unit_kerja` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_unit_kerja`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`, `status`, `date_create`) VALUES
(0000001, 'Akademik dan Kemahasiswaan', 'active', '2013-02-06 09:25:23'),
(0000002, 'Keuangan dan SDM', 'active', '2013-02-06 09:25:23'),
(0000003, 'Aset, Fasilitas dan TIK', 'active', '2013-02-06 09:25:23'),
(0000004, 'Pendidikan Biologi', 'active', '2013-02-06 09:25:23'),
(0000005, 'Pendidikan Fisika', 'active', '2013-02-06 09:25:23'),
(0000006, 'Pendidikan Matematika', 'active', '2013-02-06 09:25:23'),
(0000007, 'Pendidikan Kimia', 'active', '2013-02-06 09:25:23'),
(0000008, 'Ilmu Komputer dan Pendidikan Ilmu Komputer', 'active', '2013-02-06 09:25:23'),
(0000009, 'International Program on Science Education', 'active', '2013-02-06 09:25:23'),
(0000010, 'Penunjang', 'active', '2013-02-06 09:25:23'),
(0000011, 'Kurikulatorium', 'active', '2013-02-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `z_tata_usaha`
--

CREATE TABLE IF NOT EXISTS `z_tata_usaha` (
  `id_tata_usaha` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gologan` varchar(5) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `bidang_tugas` varchar(100) NOT NULL,
  `id_unit_kerja` int(7) unsigned zerofill NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `date_create` datetime NOT NULL,
  PRIMARY KEY (`id_tata_usaha`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `z_tata_usaha`
--

INSERT INTO `z_tata_usaha` (`id_tata_usaha`, `nip`, `nama`, `gologan`, `alamat`, `telepon`, `image_path`, `bidang_tugas`, `id_unit_kerja`, `status`, `date_create`) VALUES
(0000001, 0, 'Drs. Rindang Supriyatno', '', '-', '-', '-', 'Kasi Akademik dan Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:53'),
(0000002, 0, 'Sodikin', '', '-', '-', '-', 'Staf Akademik dan Kemahasiswaan', 0000001, 'active', '2013-02-06 09:27:53'),
(0000003, 0, 'Tini Kartini, S.Pd.', '', '-', '-', '-', 'Staf Akademik dan Kemahasiswaan', 0000001, 'active', '2013-02-06 09:30:25'),
(0000004, 0, 'Sulaeman', '', '-', '-', '-', 'Staf Akademik dan Kemahasiswaan', 0000001, 'active', '2013-02-06 09:30:25'),
(0000005, 0, 'Agus Soleh', '', '-', '-', '-', 'Staf Akademik dan Kemahasiswaan', 0000001, 'active', '2013-02-06 09:30:25'),
(0000006, 0, 'Siti Rubiyanti, S.Pd.', '', '-', '-', '-', 'Staf Akademik dan Kemahasiswaan', 0000001, 'active', '2013-02-06 09:30:25'),
(0000007, 0, 'Resik Ajeng Maria, S.Si.', '', '-', '-', '-', 'Staf Akademik dan Kemahasiswaan', 0000001, 'active', '2013-02-06 09:30:25'),
(0000008, 0, 'Drs. H. Jajang Saefulloh', '', '-', '-', '-', 'Kasi Keuangan dan SDM', 0000002, 'active', '2013-02-06 09:42:08'),
(0000009, 0, 'Agus Sunarya', '', '-', '-', '-', 'Staf Kasi Keuangan dan SDM', 0000002, 'active', '2013-02-06 09:42:08'),
(0000010, 0, 'Eulis Nurhayati', '', '-', '-', '-', 'Staf Kasi Keuangan dan SDM', 0000002, 'active', '2013-02-06 09:42:08'),
(0000011, 0, 'Hj. Euis Suparni', '', '-', '-', '-', 'Staf Kasi Keuangan dan SDM', 0000002, 'active', '2013-02-06 09:42:08'),
(0000012, 0, 'Fitri Ernawati, A.Md.', '', '-', '-', '-', 'Staf Kasi Keuangan dan SDM', 0000002, 'active', '2013-02-06 09:42:08'),
(0000013, 0, 'Solihin', '', '-', '-', '-', 'Staf Kasi Keuangan dan SDM', 0000002, 'active', '2013-02-06 09:42:08'),
(0000014, 0, 'Ujang Hadis', '', '-', '-', '-', 'Staf Kasi Keuangan dan SDM', 0000002, 'active', '2013-02-06 09:42:08'),
(0000015, 0, 'Drs. H. Aang Juangsa', '', '-', '-', '-', 'Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000016, 0, 'Nunung Siti Januari, S.Pd.', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000017, 0, 'Maryami Rostini', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000018, 0, 'Dadang Mulyadi', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000019, 0, 'Rudi Suyadi, S.Pd.', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000020, 0, 'Cepi Junaedi', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000021, 0, 'Latif Budiana', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000022, 0, 'Yayan Maryana', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000023, 0, 'Haedarusalam', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000024, 0, 'Wawan Waryana', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000025, 0, 'Asep Suryana', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000026, 0, 'Yudi Is Yuntiwa', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000027, 0, 'Ceppy Susant', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000028, 0, 'Jajang Darmawan', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000029, 0, 'Tasrifudin', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '2013-02-06 00:00:00'),
(0000030, 0, 'Sutana', '', '-', '-', '-', 'Staf Kasubag AFTIK', 0000003, 'active', '0000-00-00 00:00:00'),
(0000031, 0, 'Saepul Anwar, A.Md', '', '-', '-', '-', 'Staf Kasubag AFTIK/Staf IT', 0000003, 'active', '0000-00-00 00:00:00'),
(0000032, 0, 'Iyan Sopiyan', '', '-', '-', '-', 'Staf Kasubag AFTIK/Staf IT', 0000003, 'active', '0000-00-00 00:00:00'),
(0000033, 0, 'Agus Prihatna', '', '-', '-', '-', 'Staf Kasubag AFTIK/Staf Dekan', 0000003, 'active', '0000-00-00 00:00:00'),
(0000034, 0, 'Abo', '', '-', '-', '-', 'Staf Kasubag AFTIK/SATPAM', 0000003, 'active', '0000-00-00 00:00:00'),
(0000035, 0, 'Supono', '', '-', '-', '-', 'Staf Kasubag AFTIK/SATPAM', 0000003, 'active', '0000-00-00 00:00:00'),
(0000036, 0, 'Oneng Rohana', '', '-', '-', '-', 'Staf Kasubag AFTIK/SATPAM', 0000003, 'active', '0000-00-00 00:00:00'),
(0000037, 0, 'Dadi', '', '-', '-', '-', 'Staf Kasubag AFTIK/SATPAM', 0000003, 'active', '0000-00-00 00:00:00'),
(0000038, 0, 'Cecep Setiawan', '', '-', '-', '-', 'Staf Kasubag AFTIK/SATPAM', 0000003, 'active', '0000-00-00 00:00:00'),
(0000039, 0, 'Endang Sulaeman', '', '-', '-', '-', 'Staf Kasubag AFTIK/SATPAM', 0000003, 'active', '0000-00-00 00:00:00'),
(0000040, 0, 'Dra. Inut Srihastuti, S.Pd', '', '-', '-', '-', 'Staf Kasubag AFTIK/Staf Dekan', 0000003, 'active', '0000-00-00 00:00:00'),
(0000041, 0, 'Agus Mawan Giarto, S.Pd.', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Biologi', 0000004, 'active', '0000-00-00 00:00:00'),
(0000042, 0, 'Pipih Nurhayati, S.Pd.', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Biologi', 0000004, 'active', '0000-00-00 00:00:00'),
(0000043, 0, 'Eman Moch. Ramdan', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Biologi', 0000004, 'active', '0000-00-00 00:00:00'),
(0000044, 0, 'Kusmayadi', '', '-', '-', '-', 'Tenaga Penunjang Jurusan Pend. Biologi', 0000004, 'active', '0000-00-00 00:00:00'),
(0000045, 0, 'Salim', '', '-', '-', '-', 'Tenaga Penunjang Jurusan Pend. Biologi', 0000004, 'active', '0000-00-00 00:00:00'),
(0000046, 0, 'Dadang Nugraha', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Fisika', 0000005, 'active', '0000-00-00 00:00:00'),
(0000047, 0, 'Agus Syarif', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Fisika', 0000005, 'active', '0000-00-00 00:00:00'),
(0000048, 0, 'Sri Susanti', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Fisika', 0000005, 'active', '0000-00-00 00:00:00'),
(0000049, 0, 'Aceng', '', '-', '-', '-', 'Staf Penunjang Jurusan Pend. Fisika', 0000005, 'active', '0000-00-00 00:00:00'),
(0000050, 0, 'Tjuntjun Nanawiguna', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Matematika', 0000006, 'active', '0000-00-00 00:00:00'),
(0000051, 0, 'Kuswara', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Matematika', 0000006, 'active', '0000-00-00 00:00:00'),
(0000052, 0, 'Moh. Yamin', '', '-', '-', '-', 'Staf Penunjang Jurusan Pend. Matematika', 0000006, 'active', '0000-00-00 00:00:00'),
(0000053, 0, 'Saefudin, S.IP.', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Kimia', 0000007, 'active', '0000-00-00 00:00:00'),
(0000054, 0, 'Abas', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Kimia', 0000007, 'active', '0000-00-00 00:00:00'),
(0000055, 0, 'Desti Puspitasari', '', '-', '-', '-', 'Staf Administrasi Jurusan Pend. Kimia', 0000007, 'active', '0000-00-00 00:00:00'),
(0000056, 0, 'Agnia Muftiasih, S.Si.', '', '-', '-', '-', 'Staf Administrasi Lab. Jurusan Pend. Kimia', 0000007, 'active', '0000-00-00 00:00:00'),
(0000057, 0, 'Anto Lelono', '', '-', '-', '-', 'Staf Administrasi Prodi Ilkom', 0000008, 'active', '0000-00-00 00:00:00'),
(0000058, 0, 'Kusmindar', '', '-', '-', '-', 'Staf Administrasi Prodi Ilkom', 0000008, 'active', '0000-00-00 00:00:00'),
(0000059, 0, 'Andri Mulyadi', '', '-', '-', '-', 'Staf Administrasi Prodi Ilkom', 0000008, 'active', '0000-00-00 00:00:00'),
(0000060, 0, 'Encang', '', '-', '-', '-', 'Staf Penunjang Prodi Ilkom', 0000008, 'active', '0000-00-00 00:00:00'),
(0000061, 0, 'Syahriani Datau, S.Si.', '', '-', '-', '-', 'Teknisi Lab. Prodi Ilkom', 0000008, 'active', '0000-00-00 00:00:00'),
(0000062, 0, 'Suci Rizki, S.Pd', '', '-', '-', '-', 'Staf Administrasi IPSE', 0000009, 'active', '2013-02-06 00:00:00'),
(0000063, 0, 'Dian Hendriana, S.Pd.', '', '-', '-', '-', 'Staf Kerja Sama Teknis JICA/AVA', 0000010, 'active', '2013-02-06 00:00:00'),
(0000064, 0, 'Rika Gunawati, S.Pd.', '', '-', '-', '-', 'Staf Kerja Sama Teknis JICA', 0000010, 'active', '2013-02-06 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
