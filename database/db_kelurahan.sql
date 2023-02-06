-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2023 pada 11.18
-- Versi server: 10.4.24-MariaDB-log
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kelurahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mutasi`
--

CREATE TABLE `t_mutasi` (
  `no_mutasi` int(5) NOT NULL,
  `nik_mutasi` char(16) NOT NULL,
  `nama_mutasi` varchar(50) NOT NULL,
  `tempat_lahir_mutasi` varchar(12) NOT NULL,
  `tanggal_lahir_mutasi` date DEFAULT NULL,
  `jk_mutasi` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama_mutasi` enum('ISLAM','KATOLIK','HINDU','BUDDHA','KONG HU CU') NOT NULL,
  `pendidikan_mutasi` enum('TAMAT SD / SEDERAJAT','TIDAK / BELUM SEKOLAH','SLTP/SEDERAJAT','SLTA / SEDERAJAT','BELUM TAMAT SD/SEDERAJAT','DIPLOMA I / II','DIPLOMA IV/ STRATA I','AKADEMI/ DIPLOMA III/S. MUDA','STRATA II','STRATA III') NOT NULL,
  `pekerjaan_mutasi` enum('BELUM/TIDAK BEKERJA','MENGURUS RUMAH TANGGA','PELAJAR/MAHASISWA','PENSIUN','PEGAWAI NEGERI SIPIL','KEPOLISIAN RI','PERTANIAN/PERKEBUNAN','PETERNAK','WIRASWASTA','WIRAUSAHA','KARYAWAN SWASTA','KARYAWAN BUMN','KARYAWAN BUMD','KARYAWAN BUMD','KARYAWAN HONORER','PERANGKAT DESA','KEPALA DESA') NOT NULL,
  `kawin_mutasi` enum('BELUM KAWIN','KAWIN BELUM TERCATAT','KAWIN TERCATAT','CERAI HIDUP','CERAI MATI') NOT NULL,
  `st_keluarga` enum('KEPALA KELUARGA','SUAMI','ISTRI','ANAK','MENANTU','CUCU','ORANG TUA','MERTUA','FAMILI LAIN','PEMBANTU','LAINNYA') NOT NULL,
  `kk_mutasi` char(16) NOT NULL,
  `tanggal_mutasi` date DEFAULT NULL,
  `jenis_mutasi` enum('KELUAR','MASUK') NOT NULL,
  `provinsi_asal` varchar(20) NOT NULL,
  `kab_asal` varchar(15) NOT NULL,
  `kec_asal` varchar(15) NOT NULL,
  `kel_asal` varchar(15) NOT NULL,
  `dsn_asal` varchar(15) DEFAULT NULL,
  `rt_asal` varchar(3) DEFAULT NULL,
  `rw_asal` char(3) DEFAULT NULL,
  `provinsi_tujuan` varchar(20) NOT NULL,
  `kab_tujuan` varchar(10) NOT NULL,
  `kec_tujuan` varchar(15) NOT NULL,
  `kel_tujuan` varchar(15) NOT NULL,
  `dsn_tujuan` varchar(15) DEFAULT NULL,
  `rt_tujuan` varchar(3) DEFAULT NULL,
  `rw_tujuan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `username` varchar(16) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `sandi_user` char(6) NOT NULL,
  `alamat_user` enum('PLOSO','BENGKELO KIDUL','GLURAN','LEPIT') NOT NULL,
  `rt_user` char(3) NOT NULL,
  `rw_user` char(3) NOT NULL,
  `jk_user` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `hp_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`username`, `nama_user`, `sandi_user`, `alamat_user`, `rt_user`, `rw_user`, `jk_user`, `hp_user`) VALUES
('ADMIN-GLURAN', 'ANISA ASSOLEHA', '333333', 'GLURAN', '08', '03', 'PEREMPUAN', '08573674998'),
('ADMIN-KELOKIDUL', 'MUHAMMAD REZA WIDIANTO', '222222', 'BENGKELO KIDUL', '09', '04', 'LAKI-LAKI', '08573674997'),
('ADMIN-LEPIT', 'PUTRI KARUNIA RAHAYU', '444444', 'LEPIT', '07', '02', 'PEREMPUAN', '0873674999'),
('ADMIN-PLOSO', 'KHARISMA INTAN SAFITRI', '111111', 'PLOSO', '10', '05', 'PEREMPUAN', '08573674996');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_warga`
--

CREATE TABLE `t_warga` (
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `tempat_lahir` varchar(12) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('ISLAM','KATOLIK','HINDU','BUDDHA','KONG HU CU') NOT NULL,
  `pendidikan` enum('TAMAT SD / SEDERAJAT','TIDAK / BELUM SEKOLAH','SLTP/SEDERAJAT','SLTA / SEDERAJAT','BELUM TAMAT SD/SEDERAJAT','DIPLOMA I / II','DIPLOMA IV/ STRATA I','AKADEMI/ DIPLOMA III/S. MUDA','STRATA II','STRATA III') NOT NULL,
  `pekerjaan` enum('BELUM/TIDAK BEKERJA','MENGURUS RUMAH TANGGA','PELAJAR/MAHASISWA','PENSIUN','PEGAWAI NEGERI SIPIL','KEPOLISIAN RI','PERTANIAN/PERKEBUNAN','PETERNAK','WIRASWASTA','WIRAUSAHA','KARYAWAN SWASTA','KARYAWAN BUMN','KARYAWAN BUMD','KARYAWAN BUMD','KARYAWAN HONORER','PERANGKAT DESA','KEPALA DESA') NOT NULL,
  `kawin` enum('BELUM KAWIN','KAWIN BELUM TERCATAT','KAWIN TERCATAT','CERAI HIDUP','CERAI MATI') NOT NULL,
  `st_keluarga` enum('KEPALA KELUARGA','SUAMI','ISTRI','ANAK','MENANTU','CUCU','ORANG TUA','MERTUA','FAMILI LAIN','PEMBANTU','LAINNYA') DEFAULT NULL,
  `no_kk` char(16) NOT NULL,
  `alamat` enum('PLOSO','BENGKELO KIDUL','GLURAN','LEPIT') NOT NULL,
  `rt` char(3) NOT NULL,
  `rw` char(3) NOT NULL,
  `st_mutasi` enum('MASUK','KELUAR','LOKAL') DEFAULT NULL,
  `st_penduduk` enum('ADA','PINDAH') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_warga`
--

INSERT INTO `t_warga` (`nik`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `kawin`, `st_keluarga`, `no_kk`, `alamat`, `rt`, `rw`, `st_mutasi`, `st_penduduk`) VALUES
('0000000000000000', 'KHARISMA INTAN SAFITRI', 'PEREMPUAN', 'GRESIK', '2001-12-21', 'ISLAM', 'SLTA / SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', '0000000000000001', 'PLOSO', '010', '005', 'LOKAL', 'ADA'),
('1111111111111111', 'AZZAM SAPUTRA', 'LAKI-LAKI', 'GRESIK', '2011-12-21', 'ISLAM', 'BELUM TAMAT SD/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', '0000000000000001', 'PLOSO', '010', '005', 'LOKAL', 'ADA'),
('2222222222222222', 'SUKARTIN', 'PEREMPUAN', 'GRESIK', '1977-11-28', 'ISLAM', 'SLTP/SEDERAJAT', 'MENGURUS RUMAH TANGGA', 'KAWIN TERCATAT', 'KEPALA KELUARGA', '0000000000000001', 'PLOSO', '010', '005', 'LOKAL', 'ADA'),
('3333333333333333', 'MAKMOEM', 'LAKI-LAKI', 'SURABAYA', '1973-01-11', 'ISLAM', 'SLTP/SEDERAJAT', 'WIRAUSAHA', 'KAWIN TERCATAT', 'SUAMI', '0000000000000001', 'PLOSO', '010', '005', 'LOKAL', 'ADA'),
('4444444444444444', 'EKA YULIANA', 'PEREMPUAN', 'GRESIK', '2002-07-22', 'ISLAM', 'SLTP/SEDERAJAT', 'PELAJAR/MAHASISWA', 'BELUM KAWIN', 'ANAK', '0000000000000002', 'GLURAN', '010', '005', 'MASUK', 'ADA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `t_mutasi`
--
ALTER TABLE `t_mutasi`
  ADD PRIMARY KEY (`no_mutasi`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `t_warga`
--
ALTER TABLE `t_warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `t_mutasi`
--
ALTER TABLE `t_mutasi`
  MODIFY `no_mutasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_mutasi`
--
ALTER TABLE `t_mutasi`
  ADD CONSTRAINT `t_mutasi_ibfk_1` FOREIGN KEY (`nik_mutasi`) REFERENCES `t_warga` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
