<?php
include "../connect/koneksi.php";
session_start();
$admin = $_GET['admin'];
$alamat_user = $_GET['alamat_user'];
$nik = $_GET["nik"];

$t_mutasi = mysqli_query($koneksi,"SELECT * FROM `t_mutasikeluar` where t_mutasikeluar.nik_mutasikeluar='$nik' ");
$row = mysqli_fetch_assoc($t_mutasi);
$nik_ = $row['nik_mutasikeluar'];
$nama = $row['nama_mutasikeluar'];
$jk = $row['jk_mutasikeluar']; 
$tempat_lahir= $row['tempat_lahir_mutasikeluar'];
$tanggal_lahir= $row['tanggal_lahir_mutasikeluar'];
$agama= $row['agama_mutasikeluar'];
$pendidikan= $row['pendidikan_mutasikeluar'];
$pekerjaan= $row['pekerjaan_mutasikeluar'];
$kawin = $row['kawin_mutasikeluar'];
$st_keluarga = $row['st_keluarga_mutasikeluar'];
$no_kk= $row['kk_mutasikeluar'];
$alamat= $row['dsn_asalkeluar'];
$rt =  $row['rt_asalkeluar'];
$rw =  $row['rw_asalkeluar'];

$cek = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk` where t_mutasimasuk.nik_mutasimasuk='$nik' ");
if(!mysqli_num_rows($cek) ){
    $t_warga = mysqli_query 
    ($koneksi, "INSERT INTO t_warga 
    (nik, nama, jk, tempat_lahir, tanggal_lahir, 
    agama, pendidikan, pekerjaan, kawin, st_keluarga, 
    no_kk, alamat, rt, rw, st_mutasi, st_penduduk, kondisi ) 
    VALUES
    ( '$nik', '$nama', '$jk', 
    '$tempat_lahir', '$tanggal_lahir', 
    '$agama', '$pendidikan', '$pekerjaan', 
    '$kawin', '$st_keluarga', '$no_kk', '$alamat', 
    '$rt', '$rw', 'WARGA LOKAL', 'ADA', 'HIDUP') ");

    if ($t_warga) {
        $t_mutasikel = mysqli_query ($koneksi, "DELETE FROM `t_mutasikeluar` WHERE nik_mutasikeluar = '$nik' ");
            if ($t_mutasikel) {
                header("location: ../admin/data_mutasikeluar.php?admin=$admin&alamat_user=$alamat_user");
   
            }else {
                echo "gagal menghapus data di tabel mutasi keluar";
            }
         }else{
        echo "gagal mengembalikan data1";
    }
    
}else {
    $t_warga = mysqli_query 
    ($koneksi, "INSERT INTO t_warga 
    (nik, nama, jk, tempat_lahir, tanggal_lahir, 
    agama, pendidikan, pekerjaan, kawin, st_keluarga, 
    no_kk, alamat, rt, rw, st_mutasi, st_penduduk, kondisi ) 
    VALUES
    ( '$nik', '$nama', '$jk', 
    '$tempat_lahir', '$tanggal_lahir', 
    '$agama', '$pendidikan', '$pekerjaan', 
    '$kawin', '$st_keluarga', '$no_kk', '$alamat', 
    '$rt', '$rw', 'MUTASI MASUK', 'ADA', 'HIDUP') ");

    if ($t_warga) {
        $t_mutasikel = mysqli_query ($koneksi, "DELETE FROM `t_mutasikeluar` WHERE nik_mutasikeluar = '$nik' ");
        if ($t_mutasikel) {
            header("location: ../admin/data_mutasikeluar.php?admin=$admin&alamat_user=$alamat_user");
   
        }else {
            echo "gagal menghapus data di tabel mutasi keluar";
        }
        }else{
        echo "gagal mengembalikan data1";
    }
}




          
 
?>