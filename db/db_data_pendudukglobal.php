<?php
include "../connect/koneksi.php";


$admin = $data["username"];
$alamat_user = $data["alamat_user"];
$t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP'  ");


// if($admin=="ADMIN-PLOSO"){
    while($row = mysqli_fetch_assoc($t_warga)){?>
            
    
        <tr>
            <td class="text-center"><?= $row['no_kk']?></td>
            <td class="text-center"><?= $row['nik']?></td>
            <td class="text-justify"><?= $row['nama']?></td>
            <td class="text-center"><?= $row['jk']?></td>
            <td class="text-center"><?= $row['tempat_lahir']?></td>
            <td class="text-center"><?= $row['tanggal_lahir']?></td>
            <td class="text-center"><a href="../data_input/data_lengkap_pendudukglobal.php?nik=<?= $row["nik"]?>&admin=<?= $admin?>&alamat_user=<?= $alamat_user?>">Informasi Lengkap</a></td>
            
        </tr> 
     <?php }
// }elseif ($admin=="ADMIN-BENGKELO-KIDUL"){

// }elseif ($admin=="ADMIN-GLURAN"){

// }elseif ($admin=="ADMIN-LEPIT"){

// }else{
//     echo "Anda bukan admin";
// }



?>