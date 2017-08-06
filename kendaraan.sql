
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2017 at 06:27 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u629741751_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE IF NOT EXISTS `angsuran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `lama` int(11) NOT NULL,
  `dp` int(10) unsigned NOT NULL,
  `besar` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`id`, `id_produk`, `lama`, `dp`, `besar`) VALUES
(1, 8, 1, 1, 1),
(3, 12, 24, 2000000, 400000),
(4, 13, 30, 5000000, 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `foto`, `tanggal`, `status`) VALUES
(3, 'Honda Tantang Konsumen Big Bike Touring Lintas Negara', 'PT Astra Honda Motor (AHM) punya cara sendiri untuk memanjakan konsumen produk big bike-nya. Salah satunya dengan cara touring. Tidak hanya di dalam negeri, AHM juga mengajak konsumennya touring hingga luar negeri.\r\n\r\nTerbaru, AHM akan mengajak 10 konsumen big bike Honda untuk mengikuti rangkaian touring Honda Asian Journey yang menjelajah jalanan sepanjang Phuket, Thailand – Sepang, Malaysia. Touring lintas negara sejauh 700 km ini diikuti 52 pecinta big bike Honda dari berbagai negara di Asia Tenggara seperti Indonesia, Thailand, Vietnam, dan Filipina.\r\n\r\nPendaftaran touring ini telah dibuka per hari ini (29/8/2016) di jaringan Big Wing Honda di seluruh Indonesia. AHM menyebut, seluruh peserta Honda Asian Journey akan mendapatkan fasilitas berupa akomodasi selama perjalanan hingga pelatihan Safety Riding big bikeHonda di Phuket, Thailand.\r\n\r\n"Kami ingin menghadirkan mimpi para pecinta turing roda dua dengan pengalaman yang tidak terlupakan melalui perjalanan dari Thailand ke Malaysia yang sarat dengan edukasi keselamatan berkendara yang nantinya kami harapkan dapat ditularkan pada rekan senegaranya di Tanah Air," terang General Manager Sales Division AHM Thomas Wijaya dalam keterangan resminya.\r\n\r\nAdapun jajaran big bike Honda yang disediakan untuk touring ini meliputi Honda CBR 500R Honda CB500F, Honda CB500X, Honda CBR650F, Honda CB650F, Honda Gold Wing, Honda F6C, Honda CTX 1300, Honda CB1300, Honda VFR 1200F, Honda VFR 1200X, Honda CRF 1000, Honda CBR 1000RR, Honda NC750X, Honda NC 700X, Honda NM4, dan Honda NC 700D.\r\n\r\n"Para pemilik Big Bike di Tanah Air ini juga memiliki kesempatan untuk mencoba jajaran Big Bike Honda yang dijual di seluruh dunia," Thomas menambahkan.\r\n\r\nSebagai informasi, Honda Asian Journey akan dimulai dari Phuket, Thailand pada 26 Oktober menyusuri jalan menuju Penang, Malaysia dan berakhir di Sepang International Circuit, Malaysia. Rangkaian Honda Asian Journey ditutup dengan nonton MotoGP Sepang secara gratis bagi seluruh peserta yang digelar pada 30 Oktober 2016.', 'bike.jpg', '2016-08-31', 'publish'),
(4, '10 Fitur Ini Bikin All New Honda BeAT eSP Makin Kece', 'PT. Astra Honda Motor (AHM) pertengahan Agustus kemarin telah meluncurkan motor skutik terbarunya yakni All New Hond BeAT eSP serentak di 26 kota di seluruh Indonesia.\r\n\r\nHanya dalam waktu 8 jam di, AHM berhasil membukukan penjualan sekitar 1.330 unit untuk skutik dengan mesin 110cc itu. Dahsyat sekali bukan? Bagaimana tidak dahsyat, AHM langsung mengeluarkan 8 varian warna untuk tipe CW dan CBS.\r\n\r\nHonda BeAT eSP CW punya warna Hard Rock Black & Dance White yang dibanderol Rp 14, 7 juta. Kemudian, all new Honda BeAT eSP CBS tersedia dalam Garage Black, Techno Blue White & Funky Red White seharga Rp 14,9 juta.\r\n\r\nTak ketinggalan, terdapat pula all new Honda BeAT eSP CBS-ISS, yang diposisikan sebagai kasta tertinggi. Tipe ini tersedia dalam warna Electro Blue White, Soul Red White, dan Fusion Magenta Black, yang masing-masing dipatok Rp 15,4 juta.\r\n\r\nSelain varian dan model, ada 10 fitur yang bikin All New Honda BeAt eSP makin kece.\r\n\r\n1. New Eco Indocator\r\nFitur terkini yang menginformasikan bahwa kendaraan sedang diopersikan secara efisien. Saat lampu indicator menyala, menandakan cara berkendara kamu lebih irit bahan bakar.\r\n\r\n2. Combined Digital Panel Meter\r\nKombinasi panel meter analog dan digital kini hadir semakin canggih, membuat informasi berkendara lebih mudah terbaca.\r\n\r\n3. Combi Brake System\r\nFitur canggih yang memudahkan keseimbangan pengereman roda depan dan belakang secara tepat. Lebih praktis, serta nyaman disemua kondisi jalan.\r\n\r\n4. Parking Brake Lock\r\nMencegah motor loncat saat mesin dihidupkan dan lebih nyaman saat berhenti ditanjakan maupun turunan.\r\n\r\n5. Secure Key Shutter\r\nParkir menjadi lebih aman dengan sistem penguncian magnet yang kuat dan mengurangi resiko pencurian.\r\n\r\n6. Double Inner Rack\r\nPraktis menyimpan barang dengan dua rak depan.\r\n\r\n7. New 4 Liter Fuel Tank\r\nKapasitas tangki bahan bakar lebih besar. Berkendara jauh kini bisa jadi lebih nyaman.\r\n\r\n8. Bagasi Luas 2 Liter\r\nMembawa banyak barang tak lagi jadi masalah karena bagasi luas.\r\n\r\n9. New Tubelles Tire and Whell Design\r\nBerkendara makin aman dan nyaman dengan ban tubelles dan tampil lebih keren dengan desain velg baru.\r\n\r\n10. Side Stand Swicth\r\nMesin tidak dapat dinyalakan saat standar turun.\r\n\r\nBagaimana pendapat kamu setelah membaca fitur tersebut? Tertarik untuk memiliki? Jika iya, kamu pasti sudah tahu harus mencari kemana.\r\n\r\nSewaktu peluncuran All New BeAT eSP, JKT48 berkolaborasi untuk pertama kalinya lho dengan Al Ghazali, kamu sudah nonton belum? Tonton performa mereka di video berikut ini:', 'beat.jpg', '2016-08-31', 'publish'),
(5, 'Keunggulan dan Fitur Suzuki SX4 S-Cross Terbaru', 'Suzuki SX4 S-Cross | Untuk mengisi pasar crossover atau sport utility vehicle (SUV) kompak yang sedang berkembang pesat di Indonesia, PT Suzuki Indonomobil Sales sudah memiliki jagoan baru, New SX4 S-Cross. Model tersebut saat ini tengah dipamerkan di gelaran Gaikindo Indonesia International Auto Show (GIIAS) 2016.\r\n\r\n \r\nKehadiran Suzuki SX4 S-Cross sendiri hadir untuk menjadi penantang kuat bagi Honda HR-V di Indonesia. Suzuki mengklaim SX4 S-Cross memiliki keunggulan radius putar, ground clearance, kenyamanan kabin, mesin, hingga fitur dibanding HR-V.\r\n“Model ini merupakan bukti kesungguhan Suzuki dalam menciptakan genre baru kendaraan crossover, yang menawarkan performa aerodinamika yang superior untuk menghasilkan efisiensi bahan bakar,” ujar Automobile Deputy Managing Director PT Suzuki Indomobil Sales, Davy Tuilan.\r\nModel ini dilengkapi berbagai fitur baru seperti cruise control, sistem audio canggih dengan monitor 7 inci, HID headlamp dengan auto headlight untuk meningkatkan jarak penglihatan saat mengemudi, serta auto rain sensor wiper untuk keamanan yang lebih baik saat mengemudi pada cuaca yang sering berubah-ubah.\r\nLalu apa saja keunggulan Suzuki SX4 S-Cross? Berikut sedikit ulasannya.\r\nKeunggulan dan Fitur Suzuki SX4 S-Cross\r\n“Pertama, fitur lampu utama HID. Kedua, sensor auto-rain yang memudahkan pengguna ketika hujan. Pengemudi tidak perlu menyatakan wiper karena secara otomatis akan menyala. Ketiga, selain manual lima percepatan, mesin juga dilengkapi dengan transmisi otomatis enam percepatan. Ketiga ada fitur cruise control,” ungkap Harold Donnel, 4W product development PT SIS.\r\nUntuk mendukung performanya, New SX4 S-Cross memadukan mesin M15A VVT dengan transmisi manual 5-percepatan atau transmisi otomatis 6-percepatan. Suzuki juga sudah mendesain ulang rangka suspensi.\r\nRangka ini memanfaatkan baja bertegangan tinggi di seluruh bagian mobil untuk mengurangi beban, sehingga bisa menghasilkan perpaduan performa akselerasi yang sempurna degan efisiensi bahan bakar. Selain itu, roda berdiameter besar dan ground clearance yang tinggi juga menghasilkan performa off-roaded.\r\nSelain itu, Ground clearance juga tinggi yakni 190 milimeter (mm) jika kendaraan tak bermuatan, sedangkan jika dengan muatan menjadi 170 mm. Kelebihan lainnya, mobil ini memiliki ruang kabin lebih tinggi, dengan kursi baris pertama lebih panjang (53 cm) dan lebih tebal 12 cm. Sementara, kursi baris keduanya lebih tebal 15 cm. Bagi yang memiliki hobi travelling, mobil ini menghadirkan kapasitas bagasi 430 liter.\r\nUntuk diketahui, Harga Suzuki SX4 S-Cross manual diBandrol Rp 250 juta sedangkan untuk matic Rp 263 juta. Harga tersebut on the road Bandung, Subang, Garut, Tasi dan Ciamis.\r\nFitur Suzuki SX4 S-Cross :\r\n? Mesin M15A, DOHC, VVTI, MPI 4 cylinder, 1491cc 16 valve\r\n ? HID Projector Headlamp with LED\r\n ? Chrome Bezel Foglamp\r\n ? Auto Rain Sensor\r\n ? Aerodynamic Spion Design with Turn Signal Lamp\r\n ? New Sporty Alloy Wheel (205/60 R16)\r\n ? Roof Rails\r\n ? Rear Combination Lamp\r\n ? High Mount Stop Lamp\r\n ? Rear Defogger\r\n ? Parkir Sensor\r\n ? Braking System (ABS &EBD)\r\n ? Dual SRS AIRBAG (Impact Sensor)\r\n ? Side Impact Beam\r\n ? Immobilizer\r\n ? Head Unit 7 inchi WVGA LCD Touch Screen\r\n ? A/C with Auto Climate Control\r\n ? Audio Switch Control, Bluetooth Phone Connection, Cruise Control & Padle Shift\r\n ? Tilt & Telescopic Steering\r\n ? Engine Start Stop\r\n\r\n\r\nRead more: http://www.promo-suzuki-bandung.com/berita-terbaru/keunggulan-dan-fitur-suzuki-sx4-s-cross-terbaru#ixzz4Kx0CBGV9', 'New-SX4-S-Cross.jpg', '2016-09-07', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `id_kendaraan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  UNIQUE KEY `id_produk` (`id_kendaraan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_kendaraan`, `deskripsi`) VALUES
(8, 'ksfdk'),
(41, 'Suzuki Bandung l Suzuki APV Mega Carry Pick Up belakangan ini menjadi salah satu kendaraan niaga yang paling banyak peminatnya, karena mobil ini dapat digunakan sebagai kendaraan angkutan yang praktis dan efisien. Tak hanya itu, dengan bentuk atau desain yang lebih kecil dari truck, mobil pengangkut ini sangat cocok bagi mereka yang mengembangkan bisnis dengan jarak tempuh yang dekat atau juga yang berdomisili diarea perkotaan.\r\n\r\n \r\nHadir untuk menemani Carry Pick Up 1.5, Suzuki Mega Carry telah mengambil bagian dalam mendongkrak jumlah penjualan yang menurut konsumen memilihnya karena adanya beberapa perubahan desain pada kabin serta memiliki bak yang lebih lebar.\r\nMobil yang diluncurkan di Indonesia pada tahun 2010 ini memiliki beberapa kelebihan diantaranya adalah menggunakan mesin G15A 1.493 cc yang juga dikenal tangguh dalam segala medan serta dapat menghasilkan tenaga hingga 12.8 Nm/3000 rpm dengan komparansi bahan bakar 12.6 km/liter sesuai apa yang tertera pada brosur.\r\n\r\n\r\nRead more: http://www.promo-suzuki-bandung.com/produk-suzuki/spesifikasi-dan-harga-suzuki-apv-mega-carry-pick-up#ixzz4KwxdvBik'),
(30, 'Harga Suzuki All New Swift – Suzuki merupakan salah satu nama diantara banyak merek yang bertenger di jagat otomotif tanah air. Produk dengan kualitas tinggi yang didukung dengan komponen serta fitur teknologi canggih, menjadikan merek satu ini cukup di sukai oleh para pecinta otomotif kebanyakan. Diantaranya mobil dengan julukan nama Suzuki Swift. Mobil ini dimasukan dalam kategori Hatchback yang memiliki tampang keren perpaduan antar mobil eropa dan jepang.\r\n\r\nApalagi untuk versi terbarunya yang diberikan nama Suzuki All New Swift, dimana untuk versi tersebut memiliki perubahan yang cukup signifikan di berbagai sisi, yang membuatnya memiliki daya tarik lebih di banding mobil sejenisnya. Harga Suzuki All New Swift yang bersaing, juga menjadi satu buah alasan kuat untuk memilih mobil satu ii sebagai patner sekaligus teman untuk mendampingi kegiatan sehari-hari, yang juga sangat cocok untuk sobat bawa ke baerbagai acara.\r\n\r\nDitambah racikan komponen yang mengisi bagian ruang pacu All New Swift, menjadikan koleksi mobil dari Suzuki ini dapat menyumbulkan performa dan kinerja yang handal di berbagai situasi dan kondisi. Tak hanya itu saja, fitur teknologi terbaru juga tak lupa di berikan terhadap All New Swift, yang mana adanya fitur tersebut berdampak besar terhadap performa, yang selain dapat menjadikan mobil varian terbaru dari Suzuki memberikan performa lebih, tetapi juga membuat dirinya lebih ramah terhadap pemakaian bahan bakar.\r\n\r\n  \r\nSedangkan untuk nilai jual dari mobil ini, 11- 12 sama kompetitornya dari Honda dengan Mobil Jazz miliknya, karena keduanya bukan hanya memiliki bentuk body yang mungil, tetapi juga harganya tidak terpaut jauh, atau malah justru Harga All New Swift sendiri untuk versi standard lebih murah di banding dengannya. Dan untuk sobat otomotif yang ingin mengetahui lebih jelas dan mendetail mengenai apa saja yang dimiliki oleh mobil ini, sobat dapat simak langsung selengkapnya dalam Spesifikasi dan Harga Suzuki All New Swift dibawah ini.'),
(22, 'Suzuki New Ertiga memiliki 30 macam perubahan, yang telah dipamerkan pada Gaikindo Indonesia International Auto Show (GIIAS) 2015. Perubahan terlihat dari sisi eksterior, interior, dan di bawah kap mesin. Secara keseluruhan, terdapat 29 perubahan pada versi facelift ini, perubahan minor sebanyak 24, sedangkan yang lainnya merupakan perubahan besar-besaran. Perubahan yang paling signifikan pada mobil NEW ERTIGA adalah perubahan pada eksterior, pertama yaitu bagian gril depan dengan tampilan 3 bilah berwarna krom, kedua yaitu desain fog lamp baru dibalut dengan aksen krom. Ketiga, bagian velg juga mendapat sentuhan desain baru. Bagian bemper belakang juga mendapat desain baru.\r\n\r\n \r\nSementara itu pada bagian Interior juga mendapat perubahan. keempat, jok lama diganti dengan jok baru. kelima, terdapat juga penambahan fitur baru seperti Automatic Climate Control. keenam, sudah dilengkapi dengan tombol Start-stop Engine. ketujuh, fitur Keyless Entry akan hadir untuk kemudahan dan kenyaman. kedelapan, sistem audio bluetooth baru yang lebih lengkap. kesembilan, fitur baru yaitu spion yang dapat dilipat secara elektrik. kesepuluh, power-folding ORVMs, sebelas, fitur lipat 50:50 pada baris ketiga, dan terakhir, fitur Auto-Up Power Window pada sisi pengendara, kantung udara yang muncul sebagai standar dan kotak konsol stopkontak pada baris tengah sebagai fitur pilihan.\r\n\r\n\r\nRead more: http://www.promo-suzuki-bandung.com/produk-suzuki/spesifikasi-dan-harga-suzuki-new-ertiga#ixzz4KwzDtUbA');

-- --------------------------------------------------------

--
-- Table structure for table `detail_angsuran`
--

CREATE TABLE IF NOT EXISTS `detail_angsuran` (
  `id_detail_a` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) NOT NULL,
  `dp` varchar(110) NOT NULL,
  `lama` varchar(20) DEFAULT NULL,
  `besar` varchar(110) DEFAULT NULL,
  `lama2` varchar(20) DEFAULT NULL,
  `besar2` varchar(110) DEFAULT NULL,
  `lama3` varchar(20) DEFAULT NULL,
  `besar3` varchar(110) DEFAULT NULL,
  PRIMARY KEY (`id_detail_a`),
  UNIQUE KEY `id_produk` (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `detail_angsuran`
--

INSERT INTO `detail_angsuran` (`id_detail_a`, `id_produk`, `dp`, `lama`, `besar`, `lama2`, `besar2`, `lama3`, `besar3`) VALUES
(4, 8, '50000', '12x', '10000', '24x', '15000', '30x', '10000'),
(10, 15, '19000000', '12x', '10818000', '24x', '5906000', '36x', '4408000'),
(9, 14, '19000000', '12x', '10459000', '24x', '58180000', '36x', '43420000'),
(8, 13, '14000000', '12x', '9999000', '24x', '5557000', '36x', '4148000'),
(11, 12, '19000000', '12x', '9999000', '24x', '5557000', '36x', '4148000'),
(12, 25, '55664000', '12x', '12000000', '24x', '6000000', '36x', '4000000'),
(13, 28, '50000000', '12x', '11000000', '24x', '8700000', '36x', '5500000'),
(14, 27, '59000000', '12x', '12000000', '24x', '8900000', '36x', '6660000'),
(15, 26, '60000000', '12x', '10818000', '24x', '7890000', '36x', '5500000'),
(16, 41, '22410000', '36x', '4318000', '48x', '3665000', '', '0'),
(17, 40, '15000000', '36x', '3883000', '48x', '3284000', '', '0'),
(18, 39, '20440000', '36x', '4318000', '48x', '3284000', '', '0'),
(19, 38, '13030000', '36x', '3575000', '48x', '3003000', '', '0'),
(20, 37, '14500000', '36x', '4480000', '48x', '3980000', '', '0'),
(21, 36, '15000000', '36x', '5645000', '48x', '5045000', '', '0'),
(22, 35, '13030000', '36x', '4318000', '48x', '3665000', '', '0'),
(23, 33, '15000000', '36x', '4695000', '48x', '4100000', '', '0'),
(24, 32, '14000000', '36x', '5645000', '48x', '5045000', '', '0'),
(25, 31, '19000000', '36x', '5645000', '48x', '4400000', '', '0'),
(26, 30, '60000000', '36x', '6975000', '48x', '6000000', '', '0'),
(27, 22, '52500000', '36x', '7890000', '48x', '6220000', '', '0'),
(28, 21, '48180000', '36x', '6975000', '48x', '5805000', '', ''),
(29, 20, '69000000', '36x', '6590000', '48x', '6000000', '', ''),
(30, 24, '52100000', '36x', '7710000', '48x', '6410000', '', '0'),
(31, 23, '49300000', '36x', '7325000', '48x', '6085000', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `pabrikan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `pabrikan`) VALUES
(6, 'MPV', 'Indonesia'),
(5, 'Comersia', 'Indonesia'),
(8, 'Hatchback', 'Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kendaraan` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`id_kendaraan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `nama_kendaraan`, `harga`, `status`, `foto`, `tanggal`, `id_kategori`) VALUES
(12, 'Carry Pick Up', '136000000', 'publish', 'carryPU-white-f.png', '2016-08-01', 5),
(13, 'Carry Pick Up 1.5 WD', '136000000', 'publish', 'carry-pu-Futura-1-5_promo-suzuki-bandung.jpg', '2016-08-23', 5),
(14, 'APV Mega Carry ', '142500000', 'publish', 'mega_carry1.png', '2016-08-23', 5),
(15, 'APV MEGA CARRY EXTRA', '144700000', 'publish', 'Suzuki-Mega-Carryextra1.jpg', '2016-08-23', 5),
(16, 'APV MEGA CARRY AC+PS', '146000000', 'publish', '2014-Suzuki-Carry-Front1.jpg', '2016-08-23', 5),
(17, 'APV MEGA CARRY EXTRA AC+PS', '149000000', 'publish', 'Suzuki-Mega-Carry.jpg', '2016-08-23', 5),
(18, 'ERTIGA GA', '190300000', 'publish', 'suzuki-ertiga-tipe-ga-2.jpg', '2016-08-23', 6),
(19, 'ERTIGA GL M/T PLUS', '218600000', 'publish', 'Suzuk-Ertiga-Elegant-Gallery-1-600x342.jpg', '2016-08-24', 6),
(20, 'ERTIGA GX M/T', '226400000', 'publish', 'New-Ertiga-Grey.jpg', '2016-08-24', 6),
(21, 'ERTIGA GL A/T', '230300000', 'publish', 'images.jpg', '2016-08-24', 6),
(22, 'ERTIGA GX A/T', '239100000', 'publish', 'Harga-suzuki-swift_gs2.jpg', '2016-08-24', 6),
(23, 'NEW ERTIGA DREZAGS M/T', '247700000', 'publish', 'ertiga_dreza_gs.png', '2016-08-24', 6),
(24, 'NEW ERTIGA DREZAGS A/T', '261500000', 'publish', 'Ertiga_Dreza_Desain01.jpg', '2016-08-24', 6),
(25, 'NEW SWIFT GX M/T', '210700000', 'publish', 'swiftgxmt1.jpg', '2016-08-25', 8),
(26, 'NEW SWIFT GX A/T', '222200000', 'publish', 'GXAT1.jpg', '2016-08-25', 8),
(27, 'NEW SWIFT GS M/T', '225800000', 'publish', 'Mobil-Suzuki-Swift_mt.jpg', '2016-08-25', 8),
(28, 'NEW SWIFT GS A/T', '237300000', 'publish', 'Harga-suzuki-swift_gs1.jpg', '2016-08-25', 8),
(29, 'NEW SWIFT SPORT M/T', '327900000', 'publish', 'SWIFT_SPORT_1.jpg', '2016-08-25', 8),
(31, 'KARIMUN WAGON R GL M/T', '119100000', 'publish', 'Suzuki-Karimun-Wagon-R-GS.jpg', '2016-08-26', 6),
(32, 'KARIMUN WAGON R GX M/T', '123100000', 'publish', 'karimun-wagon-r-ags.jpg', '2016-08-26', 6),
(33, 'KARIMUN WAGON R GS M/T', '125400000', 'publish', 'suzuki_karimun_wagon_r.jpg', '2016-08-26', 6),
(35, 'KARIMUN WAGON R GS M/T AIRBAG', '133400000', 'publish', 'shwcaseimg10.png', '2016-08-26', 6),
(36, 'KARIMUN WAGON R GL AGS', '127100000', 'publish', 'suzuki_karimun_wagon_r_ags_2_2.jpg', '2016-08-26', 6),
(37, 'KARIMUN WAGON R GA M/T AIRBAG', '108100000', 'publish', 'Graphite-Gray.jpg', '2016-08-26', 6),
(38, 'KARIMUN WAGON R GL M/T AIRBAG', '127100000', 'publish', 'Karimun-Wagon-R-Warna-Biru-Lagoon-Turquoise.jpg', '2016-08-26', 6),
(39, 'KARIMUN WAGON R GS AGS AIRBAG', '141Jt', 'publish', 'ags_karimun.jpg', '2016-08-26', 6),
(40, 'KARIMUN WAGON R GL AG AIRBAG', '135Jt', 'publish', 'karimun-wagon-r.png', '2016-08-26', 6),
(41, 'KARIMUN WAGON R GS AGS', '123500000', 'publish', 'suzuki_karimun_wagon_r1.jpg', '2016-08-26', 6);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `nama`, `alamat`, `email`, `telpon`, `foto`) VALUES
(7, 'Taufik', 'Kayu Tangi', 'khairul.fajar1414ks@yahoo.com', '085234877838', 'Desert.jpg'),
(9, 'edi S', 'Jl. Kayu Tangi', 'ediS@gmail.com', '0833849832489', 'Chrysanthemum.jpg'),
(12, 'Keby Maghribfa Wiadly', ' jln.Simpang Tangga', 'kebymaghribfa14@gmail.com', '081347788216', 'IMG_6ba2c356e8ed8f606c41e647e12c37d4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spek`
--

CREATE TABLE IF NOT EXISTS `spek` (
  `id_kendaraan` int(11) NOT NULL,
  `spek` text NOT NULL,
  `key` int(10) unsigned NOT NULL,
  UNIQUE KEY `id_kendaraan` (`id_kendaraan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spek`
--

INSERT INTO `spek` (`id_kendaraan`, `spek`, `key`) VALUES
(8, 'barangja', 0),
(41, 'Harga Suzuki New Ertiga\r\nDiskon New Ertiga GL 23.600.000\r\nDiskon New Ertiga GX 21.600.000\r\nManual (MT)\r\nAuto matic (AT)\r\nGA\r\n189.000.000	–\r\nGL\r\n204.100.000	216.600.000\r\nGX ABS	214.600.000	227.100.000\r\nDREZA	230.800.000	244.500.000\r\nDREZA GS	237.800.000	251.800.000\r\nCC Mesin	1.373\r\nKekuatan Maksimal	91\r\nPenumpang	7\r\nJenis Bahan Bakar	Premium\r\nTransmisi	Manual / Automatic\r\n', 0),
(28, 'Suzuki Swift\r\n\r\nTipe	All New Swift 1.4	Swift GS 1.4	Swift Sport\r\nMesin\r\nJenis Mesin	K14B, DOHC, VVT	M16A\r\nKapasitas Isi Silender	1.372 cc	1.586 cc\r\nJumlah Katup	16\r\nJumlah Silinder	4 inline\r\nDiameter X Langkah	73,0 x 82,0 mm	78.0 x 83.0 mm\r\nPerbandingan Kompresi	1:10,0	1:11\r\nDaya Maksimum	95PS/6.000rpm	160PS/4.400rpm\r\nTorsi Maksimum	130Nm/4.000rpm	160Nm/4.400rpm\r\nSistem Bahan Bakar	Multipoint Injection\r\nDimensi\r\nP x L x T	3.850 x 1.695 x 1.510 mm	3.890 x 1.695 x 1.510 mm\r\nJarak Poros Roda	2.430 mm\r\nJarak Pijak Depan	1.480 mm	1.470 mm\r\nJarak Pijak Belakang	1.485 mm	1.475 mm\r\nJarak Terendah	140 mm	130 mm\r\nRadius Putar Minimum	5.2 m\r\nBerat Kosong	980 kg (GX/GS MT), 1.000 kg (GX/GS AT)	1.070 kg\r\nBerat Kotor	1.480 kg	1.520 kg\r\nTransmisi\r\nTipe Transmisi	5-Speed Manual / 4-Speed Automatic	6-Speed Manual / CVT A/T\r\nPerbandingan Gigi Akhir	4.105 (GX MT), 4.375 (GX AT)	6-Speed Manual:3.944, CVT:4.011\r\nRangka\r\nSistem Kemudi	Electric Power Steering	Rack & Pinion\r\nSuspensi Depan	McPherson Strut & Coil Spring	MacPherson Strut with coil spring\r\nSuspensi Belakang	Torsion Beam & Coil Spring	Torsion beam with coil spring\r\nRem Depan	Ventilated disc	Vertilated disc\r\nRem Belakang	Disc	Disc\r\nUkuran Ban	185/55 R16	195/50R16\r\nKapasitas\r\nTempat Duduk	5 Persons\r\nTangki Bahan Bakar	42 Liter', 0),
(22, 'Suzuki Ertiga\r\n\r\nTipe	New Ertiga	Ertiga Sporty	Ertiga Ellegant\r\nMesin\r\nJenis Mesin	K14B (DOHC-VVT)\r\nIsi Silinder	1.373 cc\r\nJumlah Katup	16\r\nJumlah Silinder	4 in-line\r\nDiameter x Langkah	73.0 x 82.0 mm\r\nPerbandingan Kompresi	1:10\r\nDaya Maksimum	95PS/6,000rpm\r\nTorsi Maksimum	130Nm/4,000rpm\r\nSistem Bahan Bakar	Multi Point Injection\r\nDimensi\r\nP x L x T	4.265 x 1,695 x 1,685 mm\r\nJarak Poros Roda	2,740 mm\r\nJarak Pijak Depan	1,480 mm\r\nJarak Pijak Belakang	1,490 mm\r\nJarak Terendah	185 mm\r\nRadiud Putar Minimum	5.2 m\r\nBerat Kososng	1.155 kg GA (MT), 1.175 kg GL (MT) 1.185 kg (AT), GX 1.175 kg (MT) 1.185 kg (AT)	MT 1,175 kg AT 1,185 kg	1.160 kg GA (MT), 1.175 kg GL (MT) 1.185 kg (AT), GX 1.180 kg (MT) 1.190 kg (AT)\r\nBerat Kotor	1.765 kg GA (MT), 1.765 kg GL (MT) 1.770 kg(AT), GX 1.760 kg (MT) 1.770 kg (AT)	MT 1,760 kg AT 1,770 kg	1.760 kg GA (MT), 1.760 kg GL (MT) 1.770 kg(AT), GX 1.760 kg (MT) 1.770 kg (AT)\r\nTransmisi\r\nTipe Transmisi	5-Speed Manual / 4-Speed Automatic\r\nRangka\r\nSistem Kemudi	Rack & Pinion\r\nSuspensi Depan	MacPherson Strut with Coil Spring\r\nSuspensi Belakang	Torsion Beam with Coil Spring\r\nRem Depan	Ventilated disc\r\nRem Belakang	Leading / Training Drum\r\nUkuran Ban	185/65 R15\r\nKapasitas\r\nTempat Duduk	7 Persons\r\nTangki Bahan Bakar	45 Liter', 0),
(12, 'Flat Deck	Wide Deck\r\nPanjang Bak	2.200 mm	2.350 mm\r\nLebar Bak	1.480 mm	1.650 mm\r\nTinggi Bak	300 mm	370 mm\r\nVolume Bak	977 cm3	1.435 cm3\r\nJenis Mesin	G15A	G15A\r\nIsi Silinder	1.493 cc	1.493 cc\r\nDiameter x Langkah	75 mm x 84,5 mm	75 mm x 84,5 mm\r\nDaya Maksimum	87 PS/6.000 rpm	87 PS/6.000 rpm\r\nMomen Puntir Maksimum	122 Nm/3.000 rpm	122 Nm/3.000 rpm\r\nUkuran Ban	8,50 R13 - 8 PR	6,00 R13 - 8 PR\r\nTangki Bahan Bakar	42 liter	42 liter\r\n\r\nCarry 1.5 Pick Up: ‘Teruji Lebih Dari 20 tahun’\r\n\r\nCarry 1.5 Pick Up, kendaraan niaga dengan model pick-up telah teruji lebih dari 20 tahun. Dalam rentang waktu tersebut, Carry Pick Up turut membantu menggerakkan roda perekonomian Indonesia sehingga dianggap telah memiliki kontribusi bagi proses kelangsungan pembangunan di Indonesia, serta adanya komitmen tinggi Suzuki terhadap konsumennya untuk memproduksi mobil niaga yang memiliki mesin yang tangguh dan bertenaga, perawatan yang mudah dan murah, suku cadang mudah didapat, irit bahan bakar, dan ramah lingkungan dengan memiliki standar Emisi Euro-2, sehingga mobil ini memiliki nilai ekonomi yang menguntungkan untuk keperluan usaha dan bisnis.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usersistem`
--

CREATE TABLE IF NOT EXISTS `usersistem` (
  `idusersistem` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`idusersistem`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usersistem`
--

INSERT INTO `usersistem` (`idusersistem`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'khairul.fajar14@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
