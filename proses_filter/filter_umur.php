<?php
include "../connect/koneksi.php";
  $kolom = $_GET["kolom"];
  $umur1 = $_POST["umur1"];
  $umur2 = $_POST["umur2"];
  $target = $_POST["target"];
  $admin = $_GET['admin'];
  $alamat_user = $_GET['alamat_user'];
  //$t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP'  ");

  // $t_warga1 = mysqli_query($koneksi,"SELECT
  //   CASE
  //       WHEN umur BETWEEN $umur1 and $umur2 THEN '$umur1 - $umur2'
  //   END  as usia

  //   FROM (select *, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) 
  //   AS umur from t_warga  WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP')  
  //   as dummy_table");

  //   $filter_umur = mysqli_query($koneksi,"SELECT IF(umur BETWEEN $umur1 and $umur2) 
//   FROM 
//  ( SELECT *, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM t_warga WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP') as dummy_table
  
//    ");

  $t_warga = mysqli_query($koneksi,"SELECT *, 
  IF(umur BETWEEN $umur1 and $umur2,1,NULL) AS 'age'
  FROM (select *, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur from t_warga WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP') as dummy_table ");


  while($row = mysqli_fetch_assoc($t_warga))
  
  {
    $age = $row['age'];
    if ($age==1)
    {
          if($target=='SEMUA DUSUN')
          {?>
              <tr>
                  
                  <td class="text-center"><?= $row['no_kk']?></td>
                  <td class="text-center"><?= $row['nik']?></td>
                  <td class="text-justify"><?= $row['nama']?></td>
                  <td class="text-center"><?= $row['jk']?></td>
                  <td class="text-center"><?= $row['tempat_lahir']?></td>
                  <td class="text-center"><?= $row['tanggal_lahir']?></td>
                  <td class="text-center"><a href="../data_input/data_lengkap_pendudukglobal.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
              </tr> <?php 

          }elseif ($target=='PLOSO' OR 'BENGKELO KIDUL' OR 'GLURAN' OR 'LEPIT') {
                    if($row["alamat"]== $target){?>
                        <tr>
                            <td class="text-center"><?= $row['no_kk']?></td>
                            <td class="text-center"><?= $row['nik']?></td>
                            <td class="text-justify"><?= $row['nama']?></td>
                            <td class="text-center"><?= $row['jk']?></td>
                            <td class="text-center"><?= $row['tempat_lahir']?></td>
                            <td class="text-center"><?= $row['tanggal_lahir']?></td>
                            <td class="text-center"><a href="../data_input/data_lengkap_pendudukglobal.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                        </tr> 
                  <?php  }

          }elseif($target=='Pilih' ) {
              echo "PILIH WILIYAH PENDUDUK YANG AKAN DIFILTER";
          }
     
    }
  }

  
 

?>