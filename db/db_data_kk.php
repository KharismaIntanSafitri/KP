<?php
include "../connect/koneksi.php";


if(isset($_POST["cari"])){
    $target = $_POST["target"];
    $admin = $_GET['admin'];
    $alamat_user = $_GET['alamat_user'];

    if($target=="SEMUA DUSUN"){

        
        $t_warga1 = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' AND t_warga.st_keluarga='KEPALA KELUARGA' ");
        $jumlah1 = mysqli_num_rows($t_warga1);
        while($row = mysqli_fetch_assoc($t_warga1)){?>
                
                <tr>
                    <td class="text-center"><?= $row['no_kk']?></td>
                    <td class="text-center"><?= $row['nik']?></td>
                    <td class="text-justify"><?= $row['nama']?></td>
                    <td class="text-center"><?= $row['alamat']?></td>
                    <td class="text-center"><?= $row['rt']?></td>
                    <td class="text-center"><?= $row['rw']?></td>
                </tr> 

        <?php }
        

    }
    
    elseif($target == "PLOSO" OR "BENGKELO KIDUL"  OR "GLURAN" OR "LEPIT"){
        // $target = $_POST["target"];
        // $admin = $_GET['admin'];
        // $alamat_user = $_GET['alamat_user'];
        $t_warga2 = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' AND t_warga.st_keluarga='KEPALA KELUARGA' AND t_warga.alamat='$target' ");
        $jumlah2 = mysqli_num_rows($t_warga2);
        while($row = mysqli_fetch_assoc($t_warga2)){
               ?>
                
                <tr>
                    <td class="text-center"><?= $row['no_kk']?></td>
                    <td class="text-center"><?= $row['nik']?></td>
                    <td class="text-justify"><?= $row['nama']?></td>
                    <td class="text-center"><?= $row['alamat']?></td>
                    <td class="text-center"><?= $row['rt']?></td>
                    <td class="text-center"><?= $row['rw']?></td>
                </tr> 
            <?php 
        }

    }

    else{
        echo "silahan pilih wilayah";
    }

}elseif(!isset($_POST["cari"])){
        $admin = $_GET['admin'];
        $alamat_user = $_GET['alamat_user'];
        $t_warga3 = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' AND t_warga.st_keluarga='KEPALA KELUARGA'");
        $jumlah3 = mysqli_num_rows($t_warga3);
        while($row = mysqli_fetch_assoc($t_warga3)){?>
                
                <tr>
                    <td class="text-center"><?= $row['no_kk']?></td>
                    <td class="text-center"><?= $row['nik']?></td>
                    <td class="text-justify"><?= $row['nama']?></td>
                    <td class="text-center"><?= $row['alamat']?></td>
                    <td class="text-center"><?= $row['rt']?></td>
                    <td class="text-center"><?= $row['rw']?></td>
                </tr> 
        <?php }
}

?>