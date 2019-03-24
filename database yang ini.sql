-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 10:05 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `spakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `rb_analisa_hasil`
--

CREATE TABLE IF NOT EXISTS `rb_analisa_hasil` (
  `id_hasil` int(4) NOT NULL AUTO_INCREMENT,
  `kd_penyakit` varchar(6) NOT NULL,
  `id_user` int(5) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  PRIMARY KEY (`id_hasil`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `rb_analisa_hasil`
--

INSERT INTO `rb_analisa_hasil` (`id_hasil`, `kd_penyakit`, `id_user`, `jam`, `hari`, `tanggal`) VALUES
(109, 'PK004', 53, '19:01:26', 'Sabtu', '15-02-2014');

-- --------------------------------------------------------

--
-- Table structure for table `rb_berita`
--

CREATE TABLE IF NOT EXISTS `rb_berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_berita` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=123 ;

--
-- Dumping data for table `rb_berita`
--

INSERT INTO `rb_berita` (`id_berita`, `judul`, `isi_berita`, `hari`, `tanggal`, `jam`, `dibaca`) VALUES
(122, 'Memahami Sistem Pakar', '<p>Perlu diketahui, bahwa sistem pakar atau yang biasa juga disebut dengan istilah expert system, adalah sebuah gerakan atau aksi terstruktur yang pada intinya meniru bagaimana kemudian seorang pakar melakukan pekerjaannya. Sistem pakar sejatinya berkaitan dengan dunia komputer karena umumnya sistem pakar adalah sejenis software atau perangkat lunak yang berguna melakukan pengambilan keputusan dalam performa tinggi atau dengan kata lain sebanding bahkan lebih dengan sang pakar saat menghadapi masalah yang spesial. </p>\r\n<p>Selanjutnya, dalam cara kerja atau ide dasar dari sistem pakar ini adalah sebuah kemahiran bidang tertetu atau yang biasa disebut dengan pakar melakukan transfer kepakarannya ke dalam sistem pada komputer. Tentunya dengan rancangan yang khusus, orang hanya cukup melakukan konsultasi dengan konmputer, bukan lagi dengan manusia pakar. Ini bisa mengantisipasi jika kemudian keahlian seseorang hilang begitu saja lantaran persoalan umur manusia yang terbatas. </p>\r\n<p>Bahkan, survei kemudian telah membuktikan bahwa sistem pakar ternyata memiliki performa yang lebih baik dalam hal pemberian solusi dibanding manusia itu sendiri. Hebat, bukan? </p>\r\n<p>Keberadaan sistem pakar sendiri tidak hanya sembarang dihadirkan atau diciptakan, melainkan sistem pakar memiliki tujuan yang masih berkaitan dengan ilmu pengetahuan melalui media teknologi berupa komputer. Ini terjadi karena sistem pakar adalah sebuah proses transfer pengetahuan dari pakar kepada mesin berupa komputer yang kemudian kembali dikirimkan lagi kepada manusia yang bukan pakar. Dalam dunia ilmu pengetahuan, inilah yang kemudian disebut-sebut sebagai knowledge engineering atau rekayasa pengetahuan. Jelas, kan? </p>\r\n', 'Selasa', '2013-07-16', '23:56:43', 1),
(121, 'Sistem Pakar Tak Selamanya Sempurna', '<p>Apa itu sistem pakar? Sistem pakar bisa dipahami jika kita manganalogikan sebagaimana kita menghadapi masalah yang sangat pelik dan njelimet. Biasanya kita mendatangi seorang pakar atau ahli di bidangnya. Sebagaimana diketahui, seseorang yang memang disebut pakar memanglah sudah teruji kemampunannya karena memang memiliki kemampuan atau keahlian yang spesifik.</p>\r\n<p>Biasanya, jika menghadapi dengan masalah patah tulang, kita akan datang ke ahli patah tulang. Bagi yang punya masalah dengan keuangan, maka kita berkonsultasi dengan pakar manajemen finansial. Begitu pula jika menghadapi masalah dengan komputer, maka kita bawa kepada pakar komputer atau teknisi yang memang sudah malang melintang menghadapi masalah sedang kita hadapi. </p>\r\n<p>Dari sini kita bisa memahami bahwa yang disebut dengan kepakaran atauexpertise dalam sistem pakar ini, tak lain dan tak bukan merupakan wawasan nan meluas lalu kemudian menajam atau menjadi spesifik sesuai dengan apa yang didapat seseorang melalui rentetan panjang pengalaman, pelatihan, membaca, berdiskusi, dan segala hal yang bisa menambah wawasan seseorang tersebut. Maka tak heran jika kemudian yang dinamakan pengetahuan itu bisa menjadikan seseorang menjadi ahli atau pakar yang mampu menyelesaikan masalah serunyam apa pun dengan cara yang elegan. </p>\r\n<p>Dengan sifatnya yang berjenjang, maka kepakaran senantiasa semakin tajam dari hari ke hari. Sungguh beda hasilnya antara pakar senior jika dibanding pakar junior jika memang istilah itu ada. Itu adalah pemamahan pakar dan kepakaran. Lantas, apa itu sistem pakar yang dibahas dalam artikel ini? </p>\r\n', 'Selasa', '2013-07-16', '23:55:48', 1),
(119, 'Beberapa Sistem Pakar Terkenal', '<p>Ada beberapa sistem pakar yang terkenal dan digunakan hampir di seluruh penjuru dunia. Sistem pakar ini merupakan suatu program yang dirancang oleh orang-orang yang memang ahli dalam bidangnya dan akhirnya dimanfaatkan oleh banyak orang atau banyak perusahaan sejak kemunculannya, beberapa system pakar yangterkenal yaitu :</p>\r\n<p>Delta adalah sistem pakar yang dikembangkan dan di-desain oleh General Electric Company yang berupa sistem pakar perawatan personal dengan menggunakan mesin lokomotif listrik diesel. </p>\r\n<p>Sistem pakar Mycin adalah sistem pakar yang dirancang sekitar tahun tujuh puluhan oleh seorang pakar yang berasal dari Universitas Stanford bernama Edward Feigenbaum. Sistem pakar yang satu ini bergerak dalam bidang medical dan berfungsi untuk melakukan diagnosisi terhadap infeksi bakteri serta memberikan rekomendasi atas pengobatan antibiotik yang harus dilakukan terhadap infeksi bakteri tersebut. </p>\r\n<p>Dendral adalah suatu sistem pakar yang mengkhususkan diri pada struktur molekular dan kimia. </p>\r\n<p>Sistem pakar YESMVS adalah sistem pakar yang didesain sekitar awal tahun delapan puluhan oleh perusahaan komputer IBM. Sistem pakar yang satu ini berguna untuk membantu para operator komputer serta sangat berguna dalam melakukan pengaturan pada sistem operasi multiple virtual storage atau pengaturan tempat penyimpanan virtual pada komputer. </p>\r\n', 'Selasa', '2013-07-16', '23:53:18', 1),
(120, 'Alasan Menggunakan Sistem Pakar', '<p>Para tenaga ahli atau pakar yang berada di dalam suatu perusahaan bisa saja memasuki tahap pensiun, keluar dari perusahaan atau meninggal dunia. Jika perusahaan tidak menyiapkan sistem pakar di dalam perusahaan mereka dengan segera maka ketika terjadi si ahli tersebut tidak ada lagi di perusahaan itu, maka operasional perusahaan tersebut tidak akan terganggu dan ketidakhadiran tenaga ahli tersebut tidak memberikan dampak yang besar bagi perusahaan. </p>\r\n<p>Seperti yang kita ketahui, pengetahuan itu sangat perlu untuk didokumentasikan atau dianalisis kembali. Dengan adanya sistem pakar ini maka pendokumentasian pengetahuan akan menjadi lebih terarah dan menjadi lebih rapi. </p>\r\n<p>Pendidikan dan pelatihan di dalam suatu perusahaan merupakan bagian yang memegang peranan penting dalam kelancaran operasional suatu perusahaan. Pendidikan dan pelatihan tersebut juga akan memakan banyak biaya. Karena itulah akhirnya banyak perusahaan yang mengadaptasi sistem pakar di dalam perusahaan mereka untuk melakukan transfer pengetahuan kepada tenaga lain yang bukan ahli dengan biaya yang lebih murah dan dalam waktu yang singkat. </p>\r\n<p>Penggunaan banyak tenaga ahli di dalam suatu perusahaan pastilah akan membuat biaya gaji perusahaan tersebut menjadi besar, karena itu perusahaan menggunakan sistem pakar sehingga hanya menggunakan sedikit tenaga ahli ditambah dengan tenaga yang bukan ahli tapi tetap dapat menjalankan tugas seorang ahli dengan menggunakansistem pakar yang sudah tersedia. </p>\r\n', 'Selasa', '2013-07-16', '23:54:48', 1),
(114, 'Mengenal Pentingnya Menggunakan Sistem Pakar', '<p>Pernah mendengar istilah sistem pakar? Istilah ini sebenarnya sudah terdengar gaungnya sekitar tahun 1980-an. Saat itu muncul program baru yang dikembangkan secara khusus untuk memindahkan keahlian atau kepakaran dalam suatu bidang tertentu dari satu atau lebih manusia dan menjadikan pengetahuan dari manusia tersebut menjadi sebuah program komputer.</p>\r\n<p>Pengertian lain dari sistem pakar yaitu sebuah program atau software yang berisi kumpulan pengetahuan seseorang atau beberapa orang sekaligus yang sengaja menyimpan pengetahuannya ke dalam suatu sistem komputer atau laptop dan dapat digunakan oleh orang lain yang membutuhkannya. </p>\r\n<p>Sistem pakar ini tidak untuk menggantikan suatu posisi atau kedudukan seorang ahli, namun dimanfaatkan untuk mendelegasikan tugas ahli tersebut sehingga waktu pengerjaan bidang keahlian itu menjadi lebih cepat dan tidak memakan waktu yang lama karena satu bidang itu bisa dikerjakan beberapa orang sekaligus. </p>\r\n<p>Pakar di dalam istilah sistem pakar ini mengacu pada orang yang memiliki pengalaman, pengetahuan, metode khusus serta kemampuan untuk menerapkan apa yang dimilikinya untuk memecahkan suatu masalah. </p>\r\n', 'Kamis', '2012-10-18', '22:18:32', 100),
(118, 'Konsep dan Hal Penting Pada Sistem Pakar', '<p>Konsep tentang pengertian pakar terbagi menjadi dua yaitu : \r\n(1).Pakar Biasa, maksudnya adalah pakar di dalam kelompok ini harus memiliki kemampuan untuk memecahkan berbagai permasalahan dengan kualitas hasil yang jauh lebih baik dari orang-orang kebanyakan atau dibandingkan dengan masyarakat umum. </p>\r\n<p> (2).Konsep Pakar Adalah Relatif, maksudnya yaitu konsep pakar di dalam sistem pakar ini memiliki pengertian bahwa pakar yang dimaksudkan di sini mungkin saja memiliki keahlian di waktu dan wilayah tertentu namun ketika dipindahkan ke waktu dan wilayah lain maka ia akan berubah menjadi orang yang bukan pakar lagi. Contohnya adalah seorang mahasiswa hukum pastilah disebut pakar di dalam bidang hukum dibandingkan dengan petugas resepsionis, namun ketika berada di pengadilan, maka mahasiswa hukum itu bukanlah pakar hukum. </p>\r\n<p>Sistem pakar sebenarnya bertujuan untuk memindahkan keahlian yang dimiliki oleh seseorang ke sebuah media elektronik seperti komputer atau laptop dan kemudian sistem pakar yang sudah berubah menjadi program tersebut akhirnya dijalankan oleh orang yang bukan ahli dalam bidang tersebut. </p>\r\n<p>Contoh : Ada seorang akuntan yang sangat ahli dalam penyusun laporan keuangan perusahaan dan pendataan arus keluar masuk uang di dalam perusahaan tersebut. Keahlian akuntan tersebut kemudian dialihkan ke sebuah sistem pakar dengan medianya adalah komputer atau laptop. </p>\r\n<p>Perusahaan akan mencari seorang lulusan SMA yang mampu menguasai dan menjalankan komputer dan pegawai administrasi baru itu diajari menjalankan program yang berasal dari sistem pakar tersebut tanpa harus menempuh pendidikan sebagai akuntan atau belajar akuntansi lagi. Ia tinggal menjalankan sesuai dengan program sistem pakar yang sudah dibuat. </p>\r\n', 'Selasa', '2013-07-16', '23:49:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rb_gejala`
--

CREATE TABLE IF NOT EXISTS `rb_gejala` (
  `id` int(5) NOT NULL,
  `pertanyaan` text NOT NULL,
  `ifyes` varchar(5) NOT NULL DEFAULT '0',
  `ifno` varchar(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_gejala`
--

INSERT INTO `rb_gejala` (`id`, `pertanyaan`, `ifyes`, `ifno`) VALUES
(4, 'Apakah terlihat warna kekuningan pada bagian kepala termasuk hepatopankreasnya?', 'PK01', '5'),
(15, 'Apakah Pembusukkan pada kulit dan insang ?', '16', '17'),
(14, 'Apakah Karapas kendur ?', '15', '16'),
(13, 'Apakah Udang di dekat permukaan air atau di pinggir sekitar tambak ?', '14', '15'),
(12, 'Apakah kualitas air atau tidak stabilnya kualitas air media budidaya, terutama fluktuasi suhu ?', 'PK03', '13'),
(1, 'Apakah perut udang terlihat kosong dan warna tubuhnya pucat?', '2', '3'),
(2, 'Apakah Nafsu makan udang menurun dratis ?', '4', '5'),
(11, 'Apakah Memerah di bagian ruas bawah sampai ekor ?', '12', '13'),
(10, 'Apakah Udang terlihat pucat ?', '11', '12'),
(9, 'Apakah Terdapatnya sisa pakan yang menumpuk didasar tambak?', '10', '11'),
(8, 'Apakah warna tubuh udang sama dengan warna air?', 'PK02', '9'),
(7, 'Apakah nafsu udang mana menurun?', '8', '9'),
(6, 'Apakah Udang terlihat lemah ?', '7', '8'),
(5, 'Apakah Ukuran tubuh udang tidak proporsional (kepala lebih besar dari badan) ?', '6', '7'),
(16, 'Apakah Adanya garis putih pada perut ?', '17', '18'),
(17, 'Apakah Bintik - bintik putih di cangkang udang ?', '18', '19'),
(18, 'Apakah Udang terlihat lemah / lesu ?', '19', '20'),
(19, 'Apakah ada variasi warna yang tinggi pada tubuh udang, dengan dominasi gelap pada permukaan tubuh (merah-coklat atau merah muda) ?', 'PK04', '20'),
(20, 'Apakah Kotoran udang akan mengambang di kolam atau tambak, berwarna putih atau terkadang akan kekuningan ?', '21', '21'),
(21, 'Apakah Ketika isi usus udang atau string tinja diperiksa, akan ditemukan massa tubuh berbentuk ulat ?', 'PK05', 'PK010');

-- --------------------------------------------------------

--
-- Table structure for table `rb_halaman`
--

CREATE TABLE IF NOT EXISTS `rb_halaman` (
  `judul` varchar(255) NOT NULL,
  `halaman` varchar(20) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rb_halaman`
--

INSERT INTO `rb_halaman` (`judul`, `halaman`, `detail`) VALUES
('Selamat Datang di Sistem pakar (PHPmu)', 'home', '<p>Sistem pakar (dalam bahasa Inggris : expert system) adalah sistem informasi yang berisi dengan pengetahuan dari pakar sehingga dapat digunakan untuk konsultasi. Pengetahuan dari pakar didalam sistem ini digunakan sebagi dasar oleh Sistem Pakar untuk menjawab pertanyaan (konsultasi).</p>\r\n\r\n<center><img style="margin-bottom:2px; width:80%;" src="http://pakar.phpmu.com/view/img/home.png" /></center>\r\n\r\n<p>Kepakaran (expertise) adalah pengetahuan yang ekstensif dan spesifik yang diperoleh melalui rangkaian pelatihan, membaca, dan pengalaman. Pengetahuan membuat pakar dapat mengambil keputusan secara lebih baik dan lebih cepat daripada non-pakar dalam memecahkan problem yang kompleks. Kepakaran mempunyai sifat berjenjang, pakar top memiliki pengetahuan lebih banyak daripada pakar yunior.</p>\r\n\r\n<p> Tujuan Sistem Pakar adalah untuk mentransfer kepakaran dari seorang pakar ke komputer, kemudian ke orang lain (yang bukan pakar).</p>'),
('About us - Sistem Pakar (PHPmu)', 'about', '<img style="margin-bottom:2px;" src="http://pakar.phpmu.com/view/img/about.png" />\r\n<p><b>Sistem pakar</b> suatu komputer mengandung satu atau lebih manusia suatu bidang spesifik. Jenis program ini pertama kali dikembangkan oleh periset kecerdasan buatan dasawarsa 1960-an dan 1970-an dan diterapkan secara komersial selama 1980-an.</p><p><div>Bentuk umum sistem pakar adalah suatu program yang dibuat berdasarkan suatu set aturan yang menganalisis informasi (biasanya diberikan oleh pengguna suatu sistem) mengenai suatu kelas masalah spesifik serta analisis matematis dari masalah tersebut. Tergantung dari desainnya, sistem pakar juga mampu merekomendasikan suatu rangkaian tindakan pengguna untuk dapat menerapkan koreksi. Sistem ini memanfaatkan kapabilitas penalaran untuk mencapai suatu simpulan.<p></p></div><br></p>'),
('Kelebihan Sistem pakar', 'kelebihan', '<p>Sistem pakar tidak semata-mata diciptakan jika memang di dalamnya tidakmemiliki manfaat. Ada banyak sekali manfaat yang bisa dipetik masyarakat dari sistem pakar ini. Jika memang tak ada manfaatnya, sangat tidak logis sekali kenapa sistem pakar kemudian menjadi sangat populer saat ini. Nah, lantas apa saja manfaat dari sistem pakar itu sendiri? Ini dia jawabannya. </p>\r\n<p>Beberapa manfaat dari sistem pakar adalah mampu meningkatkan outputdan produktivitas lantaran sekali lagi kinerjanya dijalankan bukan oleh manusia, melainkan oleh mesin. Manfaat lainnya adalah mampu meningkatkan kualitas pada pemecahan masalah karena memiliki sifat yang konsisten dan minim kesalahan karena memang sudah dirancang sedemikian rupa. </p>\r\n<p>Selanjutnya, sistem pakar juga bisa menangkap kepakaran manusia yang pada dasarnya sangat terbatas oleh sifat lupa dan lain-lain. Selain itu, sistem pakar juga tetap mampu melakukan tugasnya meski berada di medan yang penuh aral merintang atau dalam kondisi bahaya seperti apa pun. </p>\r\n<p>Pengetahuan menjadi sangat mudah diakses siapa saja dan sangat andal karena memang tak mengenal sakit atau jenis halangan yang bisa menghambat arus wawasan. Sistem pakar mampu memberikan peranan sebagai pelatih atau guru yang sangat sabar dan tak mengenal marah-marah dan membentak-bentak. </p>\r\n'),
('Kelemahan Sistem Pakar', 'kelemahan', '<p>Sebagaimana sebuah kreasi manusia yang jelas bukan Tuhan, maka tetap saja kemudian sistem pakar memiliki kelemahan pada beberapa hal. Pasalnya, apa yang terjadi pada masalah metodologi dalam sistem pakar tidak selamanya mudah dimanfaatkan orang. Lantas, apa saja kelemahan atau keterbatasan dari sistem pakar itu? Mari teruskan membaca artikel ini. <p>\r\n<p>Beberapa hal yang termasuk dalam kelemahan dan bisa saja menghambat dari keberadaan sistem pakar yang ada saat ini adalah tidak semua pengetahuan yang hendak dipelajari atau diambil tersedia, mengingat begitu besar cakupan ilmu pengetahuan itu sendiri. Bahkan, dalam Islam disebut bahwa ilmu pengetahuan yang luas ini laksana satu tetes saja air samudra yang membentang. Meski demikian terbukti sudah bahwa sangat luas sekali wilayah ilmu pengetahuan yang terus digali dan digali oleh manusia hingga hari ini. <p>\r\n<p>Selain itu, kepakaran sendiri kemudian menjadi sangat sulit dilakukan ekstraksi dari manusia karena tidak semua manusia bisa mengikuti alur berpikir sistem pakar yang memang tentu berbeda karena perbedaaan wawasan, bacaan, dan pengalaman itu tadi. Keterbatasan lainnya adalah kerap kali terjadi perbedaan situasi dan cara memandang masalah atau problematika dalam dunia pakar itu sendiri meskipun memang tetap saja tujuannya sama dan benar, yakni menyelesaikan masalah tersebut dengan baik dan memberikan wawasan baru kepada orang lain. <p>\r\n'),
('Salurkan Donasi untuk Sistem Pakar', 'donation', '<p>Saat Anda memilih ikut berpartisipasi dengan bentuk donasi uang, donasi yang kami terima akan diberikan untuk pembelian domain sistem pakar, kami akan membantu order domain tanpa mengambil keuntungan sedikitpun dari pembelian domain tersebut.</p>\r\n\r\n<p>Saat Anda memilih ikut berpatisipasi dengan bentuk donasi tenaga, Anda akan bertanggung jawab untuk update konten dari web sistem pakar yang anda kelola. Apabila anda belum memiliki artikel sendiri, kami telah menyediakan list artikel yang telah kami tampilkan pada halaman awal web sistem pakar silahkan klik pada tombol Kelola Website. Atau anda bisa mendaftarkan organisai/ lembaga sosisal yang tidak ada dalam list kami melalui Daftarkan organisasi. Admin kami akan melakukan aprove, dan setelah kami aprove list akan muncul pada home kami.</p>\r\n\r\n<p>Sumbangan atau donasi atau derma (Inggris: donation yang berasal dari Latin: donum) adalah sebuah pemberian pada umumnya bersifat secara fisik oleh perorangan atau badan hukum, pemberian ini mempunyai sifat sukarela dengan tanpa adanya imbalan bersifat keuntungan, walaupun pemberian donasi dapat berupa makanan, barang, pakaian, mainan ataupun kendaraan akan tetapi tidak selalu demikian, pada peristiwa darurat bencana atau dalam keadaan tertentu lain misalnya donasi dapat berupa bantuan kemanusian atau bantuan dalam bentuk pembangunan, dalam hal perawatan medis donasi dapat pemberian transfusi darah atau dalam hal transplantasi dapat pula berupa pemberian penggantian organ, pemberian donasi dapat dilakukan tidak hanya dalam bentuk pemberian jasa atau barangsemata akan tetapi sebagaimana dapat dilakukan pula dalam bentuk pendanaan kehendak bebas.</p>'),
('Petunjuk untuk Konsultasi pakar', 'help', '<p>Konsep tentang pengertian pakar terbagi menjadi dua yaitu : \r\n(1).Pakar Biasa, maksudnya adalah pakar di dalam kelompok ini harus memiliki kemampuan untuk memecahkan berbagai permasalahan dengan kualitas hasil yang jauh lebih baik dari orang-orang kebanyakan atau dibandingkan dengan masyarakat umum. </p>\r\n<p> (2).Konsep Pakar Adalah Relatif, maksudnya yaitu konsep pakar di dalam sistem pakar ini memiliki pengertian bahwa pakar yang dimaksudkan di sini mungkin saja memiliki keahlian di waktu dan wilayah tertentu namun ketika dipindahkan ke waktu dan wilayah lain maka ia akan berubah menjadi orang yang bukan pakar lagi. Contohnya adalah seorang mahasiswa hukum pastilah disebut pakar di dalam bidang hukum dibandingkan dengan petugas resepsionis, namun ketika berada di pengadilan, maka mahasiswa hukum itu bukanlah pakar hukum. </p>\r\n<p>Sistem pakar sebenarnya bertujuan untuk memindahkan keahlian yang dimiliki oleh seseorang ke sebuah media elektronik seperti komputer atau laptop dan kemudian sistem pakar yang sudah berubah menjadi program tersebut akhirnya dijalankan oleh orang yang bukan ahli dalam bidang tersebut. </p>\r\n<p>Contoh : Ada seorang akuntan yang sangat ahli dalam penyusun laporan keuangan perusahaan dan pendataan arus keluar masuk uang di dalam perusahaan tersebut. Keahlian akuntan tersebut kemudian dialihkan ke sebuah sistem pakar dengan medianya adalah komputer atau laptop. </p>\r\n<p>Perusahaan akan mencari seorang lulusan SMA yang mampu menguasai dan menjalankan komputer dan pegawai administrasi baru itu diajari menjalankan program yang berasal dari sistem pakar tersebut tanpa harus menempuh pendidikan sebagai akuntan atau belajar akuntansi lagi. Ia tinggal menjalankan sesuai dengan program sistem pakar yang sudah dibuat. </p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `rb_hubungi`
--

CREATE TABLE IF NOT EXISTS `rb_hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=98 ;

--
-- Dumping data for table `rb_hubungi`
--

INSERT INTO `rb_hubungi` (`id_hubungi`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(70, 'wap', 'wap@gmail.com', 'From_Guest', 'Maaf om pakar, kq penyakit pada saya tidak terdeteksi ya ?', '2013-05-03'),
(92, 'Administrator', 'robby.prihandaya@gmail.com', 'From_Guest', 'wqeqweqwqweq', '2013-07-16'),
(96, 'Udin Sedunia', 'udin_sedunia@gmail.com', 'From_Guest', 'Memungkinkan orang awam bisa mengerjakan pekerjaan para ahli. Bisa melakukan proses secara berulang secara otomatis. Menyimpan pengetahuan dan keahlian para pakar.', '2013-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `rb_penyakit`
--

CREATE TABLE IF NOT EXISTS `rb_penyakit` (
  `id_penyakit` varchar(5) NOT NULL,
  `penyakit` text NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL,
  PRIMARY KEY (`id_penyakit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_penyakit`
--

INSERT INTO `rb_penyakit` (`id_penyakit`, `penyakit`, `keterangan`, `solusi`) VALUES
('PK010', '<center>Penyakit Tidak Ditemukan, silahkan berkonsultasi langsung dengan pakar.</center>', 'Tidak ada Keterangan,..', 'Tidak Di temukan solusi...'),
('PK05', 'Penyakit Kotoran Putih/ White Feces Disease (WFD) Udang', 'Serangan penyakit kotoran putih udang berdampak buruk dan dapat mengakibatkan kematian massal. Penyakit kotoran putih yang menyerang udang tersebut diakibatkan kualitas air pemeliharan yang buruk dan kepadatan tebar terlalu tinggi. \r\nWhite Feces Disease  biasanya muncul dalam jangka dua bulan saat budidaya udang dilakukan, maka kotoran udang berwarna putih akan mengambang di kolam atau tambak.\r\n', '1. Probiotik adalah jenis mikroba yang menguntungkan bagi udang yang dibudidayakan. Bakteri probiotik bagus bagi udang karena dapat menekan pertumbuhan bakteri jahat (patogen).\r\nUntuk mencegah patogen masuk ke dalam tambak udang, pembudidaya harus menjaga kualitas air. Sistem aerasi perlu dilakukan untuk meningkatkan kualitas air tambak. Aerasi yang kurang untuk penguraian kotoran akan mengakibatkan sedimentasi kotoran di dasar tambak.\r\n2. Padat tebar benih diperhatikan.\r\n3. Pemberian pakan pada udang jangan berlebihan.\r\n4. Pengontrolan rutin kadar keasaman.\r\nKincir air berfungsi untuk membuang sisa pakan, kotoran dan plankton yang ada di dasar dan permukaan tambak. Penempatan kincir air searah jarum jam agar menciptakan pusaran air.\r\n5. Udang membutuhkan sumber vitamin yang bermanfaat untuk menjaga daya tahan tubuh dari bakteri yang ada di dalam air. Dengan memberikan suplemen dan vitamin secukupnya, udang tidak mudah terserang penyakit kotoran putih.\r\n'),
('PK04', 'Penyakit Bintik Putih/ White Spot Syndrome (WSS) Udang', 'White Spot Syndrom yang juga akrab dikenal sebagai penyakit inc akan membunuh udang secara perlahan. Udang akan mati dengan sendirinya karena berkurang nafsu makannya. Udang akan mati dengan sendirinya karena mogok makan. Virus ini diketahui terjadi pada lingkungan air tawar, payau dan laut. Kematian massal pada udang yang cepat telah dilaporkan di banyak negara hingga 80 persen atau lebih dalam waktu tiga sampai 10 hari ketika virus menyerang. \r\n', 'Dengan menurunkan tingkat stress dan menghindari terbentuknya luka pada kutikula. Selain itu juga dilakukan dengan menurunkan suhu air dalam kolam, karena sintesis protein virus dipengaruhi oleh suhu.\r\nMemperhatikan kualitas pakan serta penambahan suplemen seperti multivitamin dan vitamin C juga dapat diberikan pada udang agar daya tahan tubuh udang lebih meningkat dan tahan terhadap penyakit. \r\nApabila penyakit bintik putih menyerang udang yang diternakkan, pilihan terbaik adalah segera memanen udang. Jika pemanenan tidak dilakukan secepatnya, semua udang di kolam dapat mati dalam hitungan hari.\r\n'),
('PK03', 'Penyakit Myo/ Infectious Myo Necrosis Virus (IMNV) Udang', 'Penyebab udang terjangkit penyakit Myo akibat menurunnya kualitas air atau tidak stabilnya kualitas air media budidaya, terutama fluktuasi suhu. Sisa pakan yang menumpuk didasar tambak akan berubah menjadi amonia, sehingga sangat berpotensi menjadi racun yang mematikan hewan udang.\r\n', 'Selalu gunakan benur dari indukan yang sudah terbukti bebas dari penyakit atay SPF (Specific Pathogen Free). Selanjutnya adalah penerapan biosekuriti yang ketat dalam kawasan pertambakan, kurangi kepadatan tebar benur tanpa oksigen yang cukup untuk supra intensif dan lakukan pemanenan bertahap.\r\nBiosekuriti yang dapat dilakukan contohnya pembalikan tanah tambak, pengeringan tambak selama 2 minggu, pemberian klorin yang harus di netralkan nantinya agar tidak menjadi racun yang membunuh udang. Klorin harus dibilas keluar dari tambak dengan mengalirkan air ke dalam tambak kemudian airnya dibuang. Selanjutnya dapat dilakukan penyaringan air dengan tambak tandon, serta aplikasi plankton dan probiotik dapat memutus mata rantai serangan penyakit. Langkah lainnya untuk mencegah penyakit myo dan penyakit lain masuk tambak baik melalui air, benur, maupun agen pembawa (kepiting, ikan, burung dan lainnya). Misalkan dengan memasang jaring atau plastik di dasar tambak untuk mencegah biota air seperti kepiting masuk tambak dan menggunakan alat penghalau burung.\r\nPenerapan biosekuriti juga sebaiknya dilakukan pada satu area pertambakan yang menggunakan satu saluran atau sumber air dan benur yang sama. Ada baiknya dibentuk klaster pertambakan supaya ada kesepakatan pengelolaan antar petambak satu kawasan. Kesepakatan yang dimaksud, misalnya jika satu tmbak terserang penyakit makan air tambaknya jangan langsung dibuang melainkan diberi perlakuan dulu seperti klorin pada air yang akan dibuang untuk meminimalisir penyebaran penyakit ke tambak lainnya.\r\n'),
('PK02', 'Penyakit Early MOrtality Syndrome (EMS)', 'Early Mortality Syndrome (EMS) merupakan jenis penyakit baru yang menyerang pada budidaya udang baik udang vaname maupun udang windu. Dinamakan penyakit EMS karena  penyakit ini menyerang pada budidaya udang saat masih berumur 20-30 hari setelah tebar dan mengakibatkan kematian massal. Sina (2012) menyatakan bahwa penyakit EMS belakangan sering disebut sebagai Acute Hepatopancreatic Degenerative Nephrotic Syndrome (AHDNS).\r\n', 'Dengan mengurangi tingkat kepadatan udang dalam tambak. Gunakan probiotik dan bioflok dalam tambak dan selalu   memantau   lingkungan. TAN   diupayakan   tidak   terlalu   tinggi   karena konsentrasi yang tinggi menyebabkan meledaknya populasi alga hijau.\r\nJangan memasukkan udang hidup, beku, benur, larva, dari daerah yang terkena wabah. Kebijakan ini tentu saja banyak menghadapi   tantangan   di   lapangan dengan   importir mengenai kebijakan larangan impor udang beku. Mereka berpendapat bahwa udang beku tidak menularkan penyakit. Sementara, bahwa bakteri tetap tidak akan mati dalam suhu beku.\r\n'),
('PK01', 'Penyakit Kepala Kuning udang (Yellow Head Disease)', 'Penyakit Kepala kuning (Yellow Head disease) yang disebabkan oleh virus  YHV (Yellow Head Baculo Virus) Gejala: mula – mula nafsu makan meningkat dalam beberapa hari kemudian berhenti sama sekali. Kepala dan insang berwarna kuning. Udang di dalam tambak yang sudah terinfeksi penyakit jika tidak segera ditangani dan dipanen, akan menyebabkan tingkat kematian 100% secara bertahap dalam waktu 3 hingga 5 hari buat udang yang berumur 50-60 hari.', '1. Turunkan kadar pakan yang di beri hingga 30-40% dari keadaan normal hingga kematian tidak ada atau berkurang\r\n2. Kembalikan konsumsi pakan dengan meningkatkan nafsu makan udang menggunakan ascorbic acid (vitamin c) dan spirulina.\r\n3. Selalu jaga kondisi optimal di kawasan tambak dengan selalu membersihkannya secara teratur.\r\n4. Perbaiki kualitas air tambak dengan melakukan aerasi.\r\n5. Bangkai udang yang mati segera di ambil dari tambak, lalu dikubur dalam tanah atau dibakar.\r\nDalam beberapa kasus ditemukan udang yang terserang penyakit kepala kuning tak dapat terdeteksi oleh mata manusia, oleh karena itu perlu di lakukan tes pengujian di labotarium.');

-- --------------------------------------------------------

--
-- Table structure for table `rb_users`
--

CREATE TABLE IF NOT EXISTS `rb_users` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'member',
  `alamat_lengkap` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `umur` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=90 ;

--
-- Dumping data for table `rb_users`
--

INSERT INTO `rb_users` (`id_user`, `email`, `password`, `nama_lengkap`, `no_telp`, `jenis_kelamin`, `level`, `alamat_lengkap`, `umur`) VALUES
(1, 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '081267771344', 'Laki-laki', 'admin', 'Tunggul Hitam, Padang', '24'),
(2, 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', '08129734023', 'Laki-laki', 'member', 'Cirebon', '20');
