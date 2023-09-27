-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Mar 2021 pada 16.24
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`, `email`, `phone`, `hak_akses`) VALUES
(2, 'Nendhe Fida C', 'nendhe', '7a8d7327df61d9aaceda514532603486', 'nendhe@gmail.com', 87654270162, 'admin'),
(3, 'Siti Aminah', 'ami', '6c5b7de29192b42ed9cc6c7f635c92e0', 'itmin0742@gmail.com', 85231496786, 'admin'),
(4, 'Fitria Meliyana', 'fitri', '534a0b7aa872ad1340d0071cbfa38697', 'fitriameliyana1201@gmail.com', 85338283054, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id_brand` int(11) NOT NULL,
  `nama_brand` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_brand`
--

INSERT INTO `tbl_brand` (`id_brand`, `nama_brand`) VALUES
(1, 'Pasar Mojoagung'),
(2, 'Pasar Peterongan'),
(3, 'Pasar Ploso'),
(4, 'Pasar Pon'),
(5, 'Pasar Sumobito'),
(6, 'Pasar Mojowarno'),
(7, 'Pasar Gudo'),
(8, 'Pasar Ngoro'),
(9, 'Pasar Blimbing'),
(10, 'Pasar Bareng'),
(11, 'Pasar Megaluh'),
(12, 'Pasar Kabuh'),
(13, 'Pasar Ngusikan'),
(14, 'Pasar Kesamben'),
(15, 'Pasar Tunggorono'),
(16, 'Pasar Keboan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hubungikami`
--

CREATE TABLE `tbl_hubungikami` (
  `id_hubungikami` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` bigint(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hubungikami`
--

INSERT INTO `tbl_hubungikami` (`id_hubungikami`, `nama`, `email`, `hp`, `alamat`, `pesan`, `tanggal`, `status`) VALUES
(4, 'Anita', 'dela@gmail.com', 876543298, 'Malang', 'halooooosayaliaitzy', '2021-02-01', 1),
(5, 'Lia', 'fitriameliyana1201@gmail.com', 876543298, 'Jombang', 'hai miskah', '2021-02-02', 1),
(6, 'nendhe', 'nendhefidac@gmail.com', 85648504750, 'Malang', 'kirim pesan', '2021-02-02', 1),
(7, 'doni', 'indanuslavanna@gmail.com', 63736278282, 'cempaka', 'bagusss', '2021-02-03', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hubungi_kami_kirim`
--

CREATE TABLE `tbl_hubungi_kami_kirim` (
  `id_hubungi_kami_kirim` int(11) NOT NULL,
  `kepada` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi_hubungi_kami_kirim` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hubungi_kami_kirim`
--

INSERT INTO `tbl_hubungi_kami_kirim` (`id_hubungi_kami_kirim`, `kepada`, `judul`, `isi_hubungi_kami_kirim`) VALUES
(3, 'roziqin_iqin@yahoo.com', 'Balasan', 'Balasan Untuk roziqin'),
(4, 'roziqin_iqin@yahoo.com', 'ddd', 'undefined'),
(6, 'fitriameliyana1201@gmail.com', 'balas pesan', 'hai masha'),
(7, 'nendhefidac@gmail.com', 'saran', 'maafff'),
(8, 'fitriameliyana1201@gmail.com', 'Kartun Nusa', 'undefined');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(5, 'Bumbu Dapur'),
(6, 'Jajanan Pasar'),
(7, 'Buah Buahan'),
(9, 'Sayuran'),
(10, 'Daging '),
(11, 'Ikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `alamat`, `phone`, `email`) VALUES
(1, '<span>Jl. Pattimura No.92, Jombatan, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61419</span><br>', '(0321) 879913', 'diskominfo@jombangkab.go.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_tlp` varchar(13) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga`, `stok`, `nama`, `no_tlp`, `deskripsi`, `gambar`, `kategori_id`, `brand_id`) VALUES
(3, 'AMX00003', 'Cabai merah', '25.000/kg', '20kg', 'Iswardani', '081332539820', 'Cabai merah pedas<br>', '77865c0232a862a7790ae6fd39f3f87d.png', 7, 13),
(4, 'AMX00004', 'Tomat', '20.000/kg', '25kg', 'Maman', '085645189446', 'Tomat segar<br>', '6354d898a83fafeea3fd5b4eb2cde201.png', 7, 1),
(5, 'AMX00005', 'Sayuran Selada', '500-2000/ikat', '20 kg', 'Adam', '085732465141', 'Sayur selada masih fresh<br>', '57765264b7e14b0fd39506268040b593.png', 9, 1),
(6, 'AMX00006', 'Sasa Micin', '2.000/sachet', '4 renteng', 'Javin', '085784238369', 'Sasa micin penyedap rasa<br>', '400d0421f6b8a980f59d566d0d1dbc5e.png', 5, 3),
(7, 'AMX00007', 'Jahe', '3000', '5kg', 'Roni', '088901136467', 'Jahe untuk jamu<br>', '767290fd615a56d5bc4d90bf8fd790e6.png', 5, 5),
(8, 'AMX00008', 'Bawang Merah', '30.000/kg', '20kg', 'Buk Seh', '085731944077', 'Bawang merah segar<br>', '8d30ef327bf6890eb0d65d6ba3c598db.png', 5, 15),
(9, 'AMX00009', 'Royco', '500/sachet', '10 renteng', 'Imam M', '085606896274', 'Royco penyedap rasa<br>', '3d6c4771dbf2043332d911f3ef1e1965.png', 5, 14),
(10, 'AMX00010', 'Daging Sapi', '120.000/Kg', '20kg', 'A.Takim', '085735086365', 'Daging Sapi dijamin segar dan sehat<br>', '8205db65609b77acca45792e6beef646.png', 10, 6),
(11, 'AMX00011', 'Ikan Patin', '25.000/kg', '22kg', 'Heny', '085231857950', 'Ikan nila segar<br>', '1108592fa0494a1a5f435deab3b2569f.png', 11, 4),
(12, 'AMX00012', 'Sayur Gubis', '10.000/kg', '28', 'Udin', '085646650880', 'Sayuran gubis<br>', '12adfcd97df23b44f85ea640655455fa.png', 9, 2),
(13, 'AMX00013', 'Jajan Pasar', '1.000/biji', '150 biji', 'Bu Yayuk', '085749161517', 'jajan pasar aneka ragam', 'f48d4a37d192e3e6f743e5e3666bb3b6.png', 6, 5),
(14, 'AMX00014', 'Daging Ayam', '30.000/kg', '10kg', 'Andik', '085730547336', 'Ayam ayam ayam ayam....<br>', '8780040dfd903b7faadc2f1880695ae6.png', 10, 9),
(15, 'AMX00015', 'Ikan Lele', '22.000/kg', '13kg', 'Misbah', '085707013494', 'Ikan lele mantabb<br>', 'a14e82ad8904a9b87605305b839d0dc5.png', 11, 16),
(16, 'AMX00016', 'Buah Nanas', '8000/kg', '14kg', 'Imam', '085708828202', 'Buah segar dan nikmat<br>', '608552f122d1baefb129209e5ed7f02c.png', 7, 7),
(17, 'AMX00017', 'Sayuran Bayam', '500-2000/ikat', '8', 'Vidianto', '082338696466', 'Sayurrrrr bayam sehat', '661c07721d094739eb81188fc7710201.png', 9, 12),
(18, 'AMX00018', 'Buah Jeruk', '15.000/kg', '21kg', 'Bu Suci', '085337584443', 'Jeruk anti masam<br>', 'b211b560ae1170badec145874b47c9c3.png', 7, 2),
(19, 'AMX00019', 'Bumbu Sajiku Serba Guna', '2000/Sachet', '5 Renteng', 'Ika', '0821222333890', 'Sajiku paling krenyes<br>', '15abec40a482c59234adb526e8964ca7.png', 5, 4),
(20, 'AMX00020', 'Ikan Mujair', '30.000/kg', '8kg', 'Munir', '085732178546', 'Ikan mujair enak sekali<br>', '5950f5eb7f1a27cc14969cef237e9573.png', 11, 6),
(21, 'AMX00021', 'Jajanan Pasar', '2000/biji', '50buah/kue', 'Utami', '089754231909', 'Aneka ragam jajanan pasar', '53a51bc076508c6a076761b73a272b06.png', 6, 12),
(22, 'AMX00022', 'Daging Sapi', '95.000/kg', '12kg', 'Iwan', '085730262210', 'Daging Bareng<br>', '5f9570ff26d234d57315713fa4485d2c.png', 10, 10),
(23, 'AMX00023', 'Sawi', '1000/ikat', '15kg', 'Suwadi', '082543567890', 'Sayur sawi harga murah meriah', 'be3f02392c2cae80d6fdaa369a298caa.png', 9, 3),
(24, 'AMX00024', 'Ayam Cihuy', '30.000/kg', '5kg', 'Cahyadi', '08512378902', 'Ayam malalalalalillilil', '84b30ffb28ff5cb13ecf8854487627c1.png', 10, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosial_media`
--

CREATE TABLE `tbl_sosial_media` (
  `id_sosial_media` int(11) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `gp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosial_media`
--

INSERT INTO `tbl_sosial_media` (`id_sosial_media`, `tw`, `fb`, `gp`) VALUES
(1, 'http://twitter.com', 'http://facebook.com', 'http://gplus.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tentangkami`
--

CREATE TABLE `tbl_tentangkami` (
  `id_tentangkami` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tentangkami`
--

INSERT INTO `tbl_tentangkami` (`id_tentangkami`, `judul`, `deskripsi`) VALUES
(1, 'Kami Hadir Untuk Anda | Lijo Jombang', '<div>Lijo Jombang adalah website yang di desain untuk membantu anda dalam mencari informasi seputar pedagang lijo yang ada di Jombang. Informasi yang dimuat dalam website ini yaitu, harga bahan pangan, stok bahan pangan, macam macam bahan pangan, dll. </div><br>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indeks untuk tabel `tbl_hubungikami`
--
ALTER TABLE `tbl_hubungikami`
  ADD PRIMARY KEY (`id_hubungikami`);

--
-- Indeks untuk tabel `tbl_hubungi_kami_kirim`
--
ALTER TABLE `tbl_hubungi_kami_kirim`
  ADD PRIMARY KEY (`id_hubungi_kami_kirim`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tbl_sosial_media`
--
ALTER TABLE `tbl_sosial_media`
  ADD PRIMARY KEY (`id_sosial_media`);

--
-- Indeks untuk tabel `tbl_tentangkami`
--
ALTER TABLE `tbl_tentangkami`
  ADD PRIMARY KEY (`id_tentangkami`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_hubungikami`
--
ALTER TABLE `tbl_hubungikami`
  MODIFY `id_hubungikami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_hubungi_kami_kirim`
--
ALTER TABLE `tbl_hubungi_kami_kirim`
  MODIFY `id_hubungi_kami_kirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosial_media`
--
ALTER TABLE `tbl_sosial_media`
  MODIFY `id_sosial_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_tentangkami`
--
ALTER TABLE `tbl_tentangkami`
  MODIFY `id_tentangkami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
