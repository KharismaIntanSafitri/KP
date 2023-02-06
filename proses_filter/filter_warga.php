<?php
include "../connect/koneksi.php";

  $kolom = $_GET["kolom"];
  $inp = $_POST["input"];
  $target = $_POST["target"];
  $admin = $_GET['admin'];
  $alamat_user = $_GET['alamat_user'];
  $t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' AND t_warga.$kolom='$inp' ");


// if($admin=="ADMIN-PLOSO"){
    while($row = mysqli_fetch_assoc($t_warga)){
        if($target=='SEMUA DUSUN'){?>
            <tr>
                <td class="text-center"><?= $row['no_kk']?></td>
                <td class="text-center"><?= $row['nik']?></td>
                <td class="text-justify"><?= $row['nama']?></td>
                <td class="text-center"><?= $row['jk']?></td>
                <td class="text-center"><?= $row['tempat_lahir']?></td>
                <td class="text-center"><?= $row['tanggal_lahir']?></td>
                <td class="text-center"><a href="../data_input/data_lengkap_pendudukglobal.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
               
            </tr> 

        <?php }elseif ($target=='PLOSO' OR 'BENGKELO KIDUL' OR 'GLURAN' OR 'LEPIT') {
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
        }else {
            echo "PILIH WILIYAH PENDUDUK YANG AKAN DIFILTER";
        }
     }


  
 

?>