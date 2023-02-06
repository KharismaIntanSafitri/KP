<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["tambah_mutasi"])){
    $nik = $_POST["nik"];
    $nama = $_POST["nama"];
    $tgl_mutasi=$_POST["tgl_mutasi"];
    $t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` where nik='$nik' ");
    $row = mysqli_fetch_assoc($t_warga);
    $nik_terdaftar = $row['nik'];
    $nama_terdaftar = $row['nama'];


    $jk = $row["jk"];
    $agama = $row["agama"];
    $tempat_lahir = $row["tempat_lahir"];
    $tanggal_lahir = $row["tanggal_lahir"];
    $pendidikan = $row["pendidikan"];
    $pekerjaan = $row["pekerjaan"];
    $kawin = $row["kawin"];
    $st_keluarga = $row["st_keluarga"];
    $agama = $row["agama"];
    $no_kk = $row["no_kk"];
    $alamat = $row["alamat"];
    $rt = $row["rt"];
    $rw = $row["rw"];

    
    $prov=$_POST["prov"];
    $kab=$_POST["kab"];
    $kec=$_POST["kec"];
    $kel=$_POST["kel"];
    $dsn=$_POST["dsn"];
    $rt_tujuan = $_POST["rt_tujuan"];
    $rw_tujuan = $_POST["rw_tujuan"];


  if(($nik_terdaftar == $nik) && ($nama_terdaftar == $nama) ) {
 
    $t_mutasi = mysqli_query ($koneksi, "INSERT INTO t_mutasikeluar(nik_mutasikeluar, nama_mutasikeluar, tempat_lahir_mutasikeluar, 
    tanggal_lahir_mutasikeluar, jk_mutasikeluar, agama_mutasikeluar, pendidikan_mutasikeluar, pekerjaan_mutasikeluar, 
    kawin_mutasikeluar, st_keluarga_mutasikeluar, kk_mutasikeluar, tanggal_mutasikeluar, jenis_mutasikeluar, provinsi_asalkeluar, 
    kab_asalkeluar, kec_asalkeluar, kel_asalkeluar, dsn_asalkeluar, rt_asalkeluar, rw_asalkeluar, 
    provinsi_tujuankeluar, kab_tujuankeluar, kec_tujuankeluar, kel_tujuankeluar, dsn_tujuankeluar, rt_tujuankeluar, rw_tujuankeluar, kondisi_keluar) 
    VALUES ('$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jk', '$agama', 
    '$pendidikan', '$pekerjaan', '$kawin', '$st_keluarga', '$no_kk', '$tgl_mutasi', 
    'MUTASI KELUAR', 'JAWA TIMUR', 'GRESIK', 'BENJENG', 'GLURANPLOSO', '$alamat', '$rt', '$rw', 
    '$prov', '$kab', '$kec', '$kel', '$dsn', '$rt_tujuan', '$rw_tujuan', 'HIDUP'
     )");
  
      if($t_mutasi){
          // $t_warga = mysqli_query($koneksi, "UPDATE t_warga SET `st_mutasi` = 'MUTASI KELUAR', `st_penduduk` = 'PINDAH' WHERE `t_warga`.`nik` = '$nik'");
          $t_warga = mysqli_query ($koneksi, "DELETE FROM `t_warga` WHERE nik = '$nik' ");
          if($t_warga){
              header("location: ../input_data/input_mutasi_keluar.php");
          }else{
              echo "GAGAL MENGHAPUS WARGA YANG PINDAH DARI TABEL WARGA";}
          
      }else{
          echo "GAGAL INPUT DATA MUTASI KELUAR";
      }
  }else{
    echo "NIK WARGA TELAH TERDAFTAR";
  }
}
?>