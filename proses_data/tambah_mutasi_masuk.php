<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["tambah_mutasi"])){
  $nik = $_POST["nik"];
  $nama = $_POST["nama"];
  $jk = $_POST["jk"];
  $agama = $_POST["agama"];
  $tempat_lahir = $_POST["tempat_lahir"];
  $tanggal_lahir = $_POST["tanggal_lahir"];
  $pendidikan = $_POST["pendidikan"];
  $pekerjaan = $_POST["pekerjaan"];
  $kawin = $_POST["kawin"];
  $st_keluarga = $_POST["st_keluarga"];
  $agama = $_POST["agama"];
  $no_kk = $_POST["no_kk"];
  $alamat = $_POST["alamat"];
  $rt = $_POST["rt"];
  $rw = $_POST["rw"];

  $tgl_mutasi=$_POST["tgl_mutasi"];
  $prov=$_POST["prov"];
  $kab=$_POST["kab"];
  $kec=$_POST["kec"];
  $kel=$_POST["kel"];
  $dsn=$_POST["dsn"];
  $rt_asal = $_POST["rt_asal"];
  $rw_asal = $_POST["rw_asal"];

  $t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` ");
  $row = mysqli_fetch_assoc($t_warga);
  $nik_terdaftar = $row['nik'];

  if($nik_terdaftar != $nik) {
    $t_warga = mysqli_query($koneksi, "INSERT INTO t_warga(nik, nama, jk, tempat_lahir, tanggal_lahir, agama, pendidikan,
    pekerjaan, kawin, st_keluarga, no_kk, alamat, rt, rw, st_mutasi, st_penduduk, kondisi) 
    VALUES('$nik', '$nama','$jk', '$tempat_lahir', '$tanggal_lahir', '$agama', 
    '$pendidikan', '$pekerjaan', '$kawin', '$st_keluarga', '$no_kk', '$alamat', '$rt', '$rw', 'MUTASI MASUK', 'ADA', 'HIDUP') ");
 
    $t_mutasi = mysqli_query ($koneksi, "INSERT INTO t_mutasimasuk (nik_mutasimasuk, nama_mutasimasuk, tempat_lahir_mutasimasuk, 
    tanggal_lahir_mutasimasuk, jk_mutasimasuk, agama_mutasimasuk, pendidikan_mutasimasuk, pekerjaan_mutasimasuk, 
    kawin_mutasimasuk, st_keluarga_mutasimasuk, kk_mutasimasuk, tanggal_mutasimasuk, jenis_mutasimasuk, provinsi_asalmasuk, 
    kab_asalmasuk, kec_asalmasuk, kel_asalmasuk, dsn_asalmasuk, rt_asalmasuk, rw_asalmasuk, 
    provinsi_tujuanmasuk, kab_tujuanmasuk, kec_tujuanmasuk, kel_tujuanmasuk, dsn_tujuanmasuk, rt_tujuanmasuk, rw_tujuanmasuk, kondisi_masuk) 
    VALUES ('$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jk', '$agama', 
    '$pendidikan', '$pekerjaan', '$kawin', '$st_keluarga', '$no_kk', '$tgl_mutasi', 
    'MUTASI MASUK', '$prov', '$kab', '$kec', '$kel', '$dsn', '$rt_asal', '$rw_asal', 'JAWA TIMUR', 
    'GRESIK', 'BENJENG', 'GLURANPLOSO', '$alamat', '$rt', '$rw', 'HIDUP')");
  
    if($t_warga && $t_mutasi){
      header("location: ../input_data/input_warga.php");
    }
  }else{
    echo "NIK WARGA TELAH TERDAFTAR";
  }
}
?>