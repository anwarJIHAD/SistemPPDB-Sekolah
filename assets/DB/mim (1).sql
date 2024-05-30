-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 02:59 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mim`
--

-- --------------------------------------------------------

--
-- Table structure for table `calonsiswa`
--

CREATE TABLE `calonsiswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calonsiswa`
--

INSERT INTO `calonsiswa` (`id_siswa`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(80, 'debi', 'debi1234', '$2y$10$2.tFZjigkTdgirKWUGIRge4cMQBv7QAeYgw4jsBJ48S63uEEBEkem', 'siswa'),
(81, 'Marsuki', 'marsuki', '$2y$10$e5s8mkGXNbSS98mefAfnh.cL4uWIiOJwtgdnzfHX0dykA5o6LBBKe', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `Id_dokumen` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `kip` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `ktp_ayah` varchar(500) NOT NULL,
  `ktp_ibu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`Id_dokumen`, `id_siswa`, `akte`, `ijazah`, `kip`, `pas_foto`, `kk`, `ktp_ayah`, `ktp_ibu`) VALUES
(21, 81, 'PA1957301054_poster_pa.png', 'Bukti.JPG', 'gjg.PNG', 'sosis.PNG', 'ROP.PNG', 'iso.jpeg', 'WhatsApp_Image_2023-06-21_at_00_13_38.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `id_ekskul` int(11) NOT NULL,
  `nama_ekskul` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`id_ekskul`, `nama_ekskul`, `deskripsi`, `gambar`) VALUES
(10, 'Yasinan', 'Yasinan merupakan kegiatan yang dilakukan seluruh siswa setiap hari Jumat sebelum pelajaran dimulai. Hal ini sebagai bagian pendidikan karakter yang diterapkan madrasah kepada para siswa.', 'Yasinan.jpg'),
(11, 'Tahsin Al-Quran', 'Tahsin Merupakan Salah satu kegiatan ektrakurikuler keagamaan MTS Al- Furqon Raja Bejamu yang rutin dilaksanakan setiap sore hari.tahsin Qur\'an merupakan pembelajaran dimana para siswa diajarkan dasar-dasar tentang membaca Qur\'an seperti pengenalan huruf-huruf hijaiyah dan hukum-hukum tajwid agar siswa bisa membaca Al-Qur\'an dengan baik dan benar.', 'tahsin.jpeg'),
(12, 'Merawis', 'Ektrakurikuler Merawis merupakan salah satu ekstrakurikuler untuk mengembangkan bakat siswa dibidang alat musik merawis dan sholawatan. Ekstrakurikuler Merawis tersebut juga digunakan sebagai pengiring upacara hari– hari besar.', 'WhatsApp_Image_2023-01-10_at_12_03_26.jpeg'),
(13, 'Seni Tari', 'Ekstrakurikuler Seni Tari merupakan kegiatan Menari yang diajarkan di MTS Al-Furqon Raja Bejamu. Kegiatan ini diadakan untuk mengasah bakat siswa yang memiliki bakat dalam menari.', 'tari-MTs-N-1.jpg'),
(14, 'Pramuka', 'Gerakan pramuka merupakan salah satu ekstrakurikuler unggulan di MTS Al-Furqon Raja Bejamu.Sebagai salah satu organisasi pendidikan non-formal, gerakan pramuka MTS Alfurqon Raja Bejamu merupakan wadah pembentukan karakter peserta didik.', 'pramuka.jpeg'),
(15, 'OlahRaga', 'Ekstrakurikuler Olahraga MTS Al-Furqon Raja Bejamu terdiri dari 2 cabang Futsal dan Volly. Kedua cabang olahraga yang tergabung dalam 1 ekstrakurikuler ini dibina oleh Mustopo, S.Pdi. Beliau adalah guru muda pada mata pelajaran Olahraga di MTS Al-Furqon Raja Bejamu yang dipercaya memegang tugas tambahan tersebut.', 'futsal.jpg'),
(16, 'Senam Pagi', 'Senam Pagi merupakan kegiatan yang dilakukan seluruh siswa setiap hari Sabtu sebelum pelajaran dimulai. Hal ini dilakukan untuk menjaga kesegaran jasmani para siswa di sekolah dan merupakan salah satu aktifitas jasmani yang efektif untuk membantu pertumbuhan dan perkembangan siswa.', 'Senam-Bareng.jpg'),
(17, 'Gotong Royong', 'Kegiatan ini mengajarkan siswa tentang tanggung jawab dan etos kerja. Para siswa dibagi menjadi beberapa kelompok dan diberi tugas. Ada yang membersihkan sampah, ada yang meratakan tanah, dan ada yang membantu menyiapkan makanan untuk para relawan. Mereka bekerja sama dan mampu menyelesaikan tugas mereka dengan cepat.', 'Barang.png');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi`, `gambar`) VALUES
(6, 'Ruang Kelas', 'Ruang Kelas adalah suatu ruangan dalam bangunan sekolah, yang berfungsi sebagai tempat untuk kegiatan tatap muka dalam proses kegiatan belajar mengajar (KBM). Mebeler dalam ruangan ini terdiri dari meja siswa, kursi siswa, meja guru, lemari kelas, papan tulis, serta aksesoris ruangan lainnya yang sesuai. Ukuran yang umum adalah 9m x 8m. Ruang kelas memiliki syarat kelayakan dan standar tertentu, misalnya ukuran, pencahayaan alami, sirkulasi udara, dan persyaratan lainnya .', 'kelas.jpg'),
(8, 'Laboratorium Komputer', 'Lab Komputer merupakan fasilitas sekolah untuk menunjang proses terlaksananya belajar mengajar di sekolah. Lab Komputer sangat penting untuk proses belajar mengajar siswa karena Lab Komputer yang terhubung dengan internet dapat membantu para siswa dan siswi untuk mencari informasi untuk kebutuhan pembelajaran.', 'labkom.jpg'),
(9, 'Perpustakaan', 'Perpustakaan sekolah merupakan pusat sumber ilmu pengetahuan dan informasi yangberada di sekolah, baik tingkat dasar sampai dengan tingkat menengah. Perpustakaan sekolah harus dapat memainkan peran, khususnya dalam membantu siswa untuk mencapai tujuan pendidikan di sekolah.', 'Perputs.jpg'),
(10, 'Musholla', 'Peranan Mushola pada saat ini di sekolah sangat berperan untuk membina generasi yang madani, karena Mushola di samping sebagai sarana ukhuwah islamiyah juga sebagai sarana membantu pendidikan non formal yang memberi dampak positif kepada warga Sekolah dan masyarakat di lingkungan sekolah pada umumnya.', 'musholllaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `id_kesehatan` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `riwayat_penyakit` varchar(100) NOT NULL,
  `gol_darah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `setdaftar` varchar(255) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL,
  `tahun_ajaran` varchar(255) NOT NULL,
  `gelombang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `setdaftar`, `tgl_buka`, `tgl_tutup`, `tahun_ajaran`, `gelombang`) VALUES
(1, 'Buka', '2023-02-01', '2023-02-28', '2023/2024', 'Gelombang 2');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id_ortu` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_ayah` varchar(25) NOT NULL,
  `nik_ayah` varchar(100) NOT NULL,
  `tempat_lahir_ayah` varchar(25) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(25) NOT NULL,
  `penghasilan_ayah` varchar(25) NOT NULL,
  `keterangan_ayah` varchar(25) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `golongan_ayah` varchar(50) NOT NULL,
  `email_ayah` varchar(50) NOT NULL,
  `no_hp_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(25) NOT NULL,
  `nik_ibu` varchar(100) NOT NULL,
  `tempat_lahir_ibu` varchar(25) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(25) NOT NULL,
  `penghasilan_ibu` varchar(25) NOT NULL,
  `keterangan_ibu` varchar(25) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `golongan_ibu` varchar(50) NOT NULL,
  `email_ibu` varchar(50) NOT NULL,
  `no_hp_ibu` varchar(50) NOT NULL,
  `jml_tanggungan` varchar(50) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_tinggal` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `cita-cita` varchar(255) NOT NULL,
  `waktu` int(20) NOT NULL,
  `Jarak` varchar(100) NOT NULL,
  `kebutuhan_khusus` varchar(100) NOT NULL,
  `disabilitas` varchar(100) NOT NULL,
  `pernah_tk` varchar(100) NOT NULL,
  `anak` int(20) NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `saudara` varchar(20) NOT NULL,
  `status` varchar(50) DEFAULT 'Belum Diverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `id_siswa`, `jenis_kelamin`, `nik`, `tempat_lahir`, `tgl_lahir`, `tempat_tinggal`, `alamat`, `transportasi`, `cita-cita`, `waktu`, `Jarak`, `kebutuhan_khusus`, `disabilitas`, `pernah_tk`, `anak`, `biaya`, `saudara`, `status`) VALUES
(40, 80, 'Laki-Laki', 'ef', 'ef', '2023-06-02', 'Orang Tua', 'sdff', 'Jalan Kaki', 'f', 4, 'Kurang dari 5 KM', '-', '-', 'Ya', 5, 'Orang Tua', '4', 'Belum Diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `npsn` varchar(100) NOT NULL,
  `status_sekolah` varchar(100) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `tgl_ijazah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(25) NOT NULL,
  `hp_pengguna` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','bendahara','panitia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `hp_pengguna`, `username`, `password`, `level`) VALUES
(3, 'Lolita', '081374665318', 'admin', '$2y$10$Rvqj2XjcCGJE/DXmSzL0xO5Sc5BG.Q6bAeBzgyLZ2MKqnRKucTOAC', 'admin'),
(4, 'Adam', '0812345678', 'bendahara', '$2y$10$geoTFe0It5t.rnwGr7dWG.vYQtQYc4GXp2KBoztqyvmNyn7OxHZ6C', 'bendahara'),
(5, 'panitia psb', '080242', 'panitiapsb', '$2y$10$Rvqj2XjcCGJE/DXmSzL0xO5Sc5BG.Q6bAeBzgyLZ2MKqnRKucTOAC', 'panitia');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `tgl_buka` date NOT NULL,
  `tgl_tutup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `tgl_buka`, `tgl_tutup`) VALUES
(1, '2023-02-03', '2023-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(255) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `syarat`
--

CREATE TABLE `syarat` (
  `id_syarat` int(11) NOT NULL,
  `syarat` text NOT NULL,
  `bayar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syarat`
--

INSERT INTO `syarat` (`id_syarat`, `syarat`, `bayar`) VALUES
(3, '1. Mengisi Formulir Pendaftaran di Website Mts Al-Furqon Raja Bejamu\r\n2. Scan Asli Kartu Keluarga\r\n3. Scan Asli Ijazah/SKL\r\n4. Scan Asli Akte Kelahiran\r\n5. Scan Asli Kartu Indonesia Pintar(Jika Ada)\r\n6. Scan Asli Surat Pernyataan\r\n7. Scan Asli Pas Foto 3X4\r\n8. Scan Bukti Permbayaran\r\n', '\r\n\r\n1. Baju Olahraga Rp.150.000,00\r\n2. Baju Melayu Rp.250.000,00\r\nTotal : Rp.400.000,00\r\nDapat ditransfer pada NoRek:000201043229502 A/N: Muji Rahayu');

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id_tes` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `status` varchar(30) DEFAULT 'Belum Diverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes`
--

INSERT INTO `tes` (`id_tes`, `username`, `nilai`, `status`) VALUES
(9, 'debi1234', '20', 'Tidak Lulus'),
(10, 'marsuki', '', 'Belum Diverifikasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calonsiswa`
--
ALTER TABLE `calonsiswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`Id_dokumen`),
  ADD KEY `id_siswa2` (`id_siswa`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id_ekskul`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`),
  ADD KEY `id_siswa3` (`id_siswa`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id_ortu`),
  ADD KEY `id_siswa5` (`id_siswa`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_siswa4` (`id_siswa`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `syarat`
--
ALTER TABLE `syarat`
  ADD PRIMARY KEY (`id_syarat`);

--
-- Indexes for table `tes`
--
ALTER TABLE `tes`
  ADD PRIMARY KEY (`id_tes`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calonsiswa`
--
ALTER TABLE `calonsiswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `Id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id_ekskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id_kesehatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `syarat`
--
ALTER TABLE `syarat`
  MODIFY `id_syarat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tes`
--
ALTER TABLE `tes`
  MODIFY `id_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `id_siswa2` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD CONSTRAINT `id_siswa3` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD CONSTRAINT `id_siswa5` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `id_siswa4` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `id_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `calonsiswa` (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
