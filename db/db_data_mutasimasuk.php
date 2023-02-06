<?php
include "../connect/koneksi.php";

if(isset($_POST["cari"])){
    $admin = $_GET['admin'];
    $alamat_user = $_GET['alamat_user'];
    $t_mutasimasuk = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk`  ");
    $target = $_POST["target"];
    $jumlah1 = mysqli_num_rows($t_mutasimasuk);

    if($target=="SEMUA DUSUN"){
        while($row = mysqli_fetch_assoc($t_mutasimasuk)){
            ?>
            
            <tr>
                
                <td class="text-center"><?= $row['kk_mutasimasuk']?></td>
                <td class="text-center"><?= $row['nik_mutasimasuk']?></td>
                <td class="text-justify"><?= $row['nama_mutasimasuk']?></td>
                <td class="text-center"><?= $row['jk_mutasimasuk']?></td>
                <td class="text-center"><?= $row['tempat_lahir_mutasimasuk']?></td>
                <td class="text-center"><?= $row['tanggal_lahir_mutasimasuk']?></td>
                <td class="text-center"><a href="../data_input/data_lengkap_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                <td class="text-center">
                    <a href="../update_data/update_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Batal Mutasi</button></a>
                </td>
            </tr> 
         <?php }
    }elseif($target == "PLOSO" OR "BENGKELO KIDUL"  OR "GLURAN" OR "LEPIT"){
        $t_mutasimasuk2 = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk` where t_mutasimasuk.dsn_tujuanmasuk = '$target' ");
        $jumlah2 = mysqli_num_rows($t_mutasimasuk2);
        while($row = mysqli_fetch_assoc($t_mutasimasuk)){
            if($row["dsn_tujuanmasuk"]== $target){?>
            
            <tr>
                <td class="text-center"><?= $row['kk_mutasimasuk']?></td>
                <td class="text-center"><?= $row['nik_mutasimasuk']?></td>
                <td class="text-justify"><?= $row['nama_mutasimasuk']?></td>
                <td class="text-center"><?= $row['jk_mutasimasuk']?></td>
                <td class="text-center"><?= $row['tempat_lahir_mutasimasuk']?></td>
                <td class="text-center"><?= $row['tanggal_lahir_mutasimasuk']?></td>
                <td class="text-center"><a href="../data_input/data_lengkap_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                <td class="text-center">
                    <a href="../update_data/update_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Batal Mutasi</button></a>
                </td>
            </tr>  
         <?php }}

    }else{
        echo "silahan pilih wilayah";
    }

}
elseif(!isset($_POST["cari"])){
    $admin = $_GET['admin'];
    $alamat_user = $_GET['alamat_user'];
    $t_mutasimasuk3 = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk`  ");
    $jumlah3 = mysqli_num_rows($t_mutasimasuk3);
        while($row = mysqli_fetch_assoc($t_mutasimasuk3)){?>
            
            <tr>
                <td class="text-center"><?= $row['kk_mutasimasuk']?></td>
                <td class="text-center"><?= $row['nik_mutasimasuk']?></td>
                <td class="text-justify"><?= $row['nama_mutasimasuk']?></td>
                <td class="text-center"><?= $row['jk_mutasimasuk']?></td>
                <td class="text-center"><?= $row['tempat_lahir_mutasimasuk']?></td>
                <td class="text-center"><?= $row['tanggal_lahir_mutasimasuk']?></td>
                <td class="text-center"><a href="../data_input/data_lengkap_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                <td class="text-center">
                    <a href="../edit_data/edit_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Edit</button></a>
                   </td>
            </tr> 
         <?php }
}
?>