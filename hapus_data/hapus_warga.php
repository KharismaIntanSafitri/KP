<?php
include "../connect/koneksi.php";
session_start();
$admin = $_GET['admin'];
$alamat_user = $_GET['alamat_user'];
$nik = $_POST["nik_baru"];
$nik = $_GET["nik"];
$delete = mysqli_query($koneksi,"DELETE from t_warga where t_warga.nik='$nik'");
if($delete){
    // $_SESSION["pesan"] = "sukses";
    header("location: ../admin/data_penduduk.php?admin=$admin&alamat_user=$alamat_user ");
}else{
    // $_SESSION["pesan"] = "gagal";
    // header("location: ../admin/user.php");
    echo "GAGAL HAPUS DATA WARGA";
}
?>