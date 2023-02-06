<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["tambah_warga"])){
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
  
  $t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` ");
  $row = mysqli_fetch_assoc($t_warga);
  $nik_terdaftar = $row['nik'];

  if($nik_terdaftar != $nik) {
  
    $t_warga = mysqli_query ($koneksi, "INSERT INTO t_warga (nik, nama, jk, tempat_lahir, tanggal_lahir, agama, pendidikan, pekerjaan, kawin, st_keluarga, no_kk, alamat, rt, rw, st_mutasi, st_penduduk, kondisi ) 
    VALUES( '$nik', '$nama', '$jk', '$tempat_lahir', '$tanggal_lahir', '$agama', '$pendidikan', '$pekerjaan', '$kawin', '$st_keluarga', '$no_kk', '$alamat', '$rt', '$rw', 'WARGA LOKAL', 'ADA', 'HIDUP') ");

    if($t_warga){
    header("location: ../input_data/input_warga.php");
    }
  }else{
    echo "NIK WARGA SUDAH TERDATA";
  }
}
?>