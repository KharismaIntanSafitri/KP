<?php
include "../connect/koneksi.php";


if(isset($_POST["cari"])){
    $target = $_POST["target"];
    $admin = $_GET['admin'];
    $alamat_user = $_GET['alamat_user'];

    if($target=="SEMUA DUSUN"){

        
        $t_warga1 = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' ");
        $jumlah1 = mysqli_num_rows($t_warga1);
        while($row = mysqli_fetch_assoc($t_warga1)){?>
                
                <tr>
                    <td class="text-center"><?= $row['no_kk']?></td>
                    <td class="text-center"><?= $row['nik']?></td>
                    <td class="text-justify"><?= $row['nama']?></td>
                    <td class="text-center"><?= $row['jk']?></td>
                    <td class="text-center"><?= $row['tempat_lahir']?></td>
                    <td class="text-center"><?= $row['tanggal_lahir']?></td>
                    <td class="text-center"><a href="../data_input/data_lengkap_penduduk.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                    <td class="text-center">
                        <a href="../edit_data/edit_warga.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="../hapus_data/hapus_warga.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        
                    </td>
                </tr> 
        <?php }
        

    }
    
    elseif($target == "PLOSO" OR "BENGKELO KIDUL"  OR "GLURAN" OR "LEPIT"){
        // $target = $_POST["target"];
        // $admin = $_GET['admin'];
        // $alamat_user = $_GET['alamat_user'];
        $t_warga2 = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' AND t_warga.alamat='$target' ");
        $jumlah2 = mysqli_num_rows($t_warga2);
        while($row = mysqli_fetch_assoc($t_warga2)){
                ?>

                
                <tr>
                    <td class="text-center"><?= $row['no_kk']?></td>
                    <td class="text-center"><?= $row['nik']?></td>
                    <td class="text-justify"><?= $row['nama']?></td>
                    <td class="text-center"><?= $row['jk']?></td>
                    <td class="text-center"><?= $row['tempat_lahir']?></td>
                    <td class="text-center"><?= $row['tanggal_lahir']?></td>
                    <td class="text-center"><a href="../data_input/data_lengkap_penduduk.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                    <td class="text-center">
                        <a href="../edit_data/edit_warga.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="../hapus_data/hapus_warga.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        
                    </td>
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
        $t_warga3 = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' ");
        $jumlah3 = mysqli_num_rows($t_warga3);
        while($row = mysqli_fetch_assoc($t_warga3)){?>
                
                <tr>
                    <td class="text-center"><?= $row['no_kk']?></td>
                    <td class="text-center"><?= $row['nik']?></td>
                    <td class="text-justify"><?= $row['nama']?></td>
                    <td class="text-center"><?= $row['jk']?></td>
                    <td class="text-center"><?= $row['tempat_lahir']?></td>
                    <td class="text-center"><?= $row['tanggal_lahir']?></td>
                    <td class="text-center"><a href="../data_input/data_lengkap_penduduk.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                    <td class="text-center">
                        <a href="../edit_data/edit_warga.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Edit</button></a>
                        <a href="../hapus_data/hapus_warga.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        
                    </td>
                </tr> 
        <?php }
}

?>