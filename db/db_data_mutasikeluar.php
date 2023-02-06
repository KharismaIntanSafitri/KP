<?php
include "../connect/koneksi.php";

if(isset($_POST["cari"])){
    $admin = $_GET['admin'];
    $alamat_user = $_GET['alamat_user'];
    $t_mutasikeluar = mysqli_query($koneksi,"SELECT * FROM `t_mutasikeluar`  ");
    $target = $_POST["target"];
    $jumlah1 = mysqli_num_rows($t_mutasikeluar);
    if($target=="SEMUA DUSUN"){
        while($row = mysqli_fetch_assoc($t_mutasikeluar)){
            ?>
            
            <tr>
                <td class="text-center"><?= $row['kk_mutasikeluar']?></td>
                <td class="text-center"><?= $row['nik_mutasikeluar']?></td>
                <td class="text-justify"><?= $row['nama_mutasikeluar']?></td>
                <td class="text-center"><?= $row['jk_mutasikeluar']?></td>
                <td class="text-center"><?= $row['tempat_lahir_mutasikeluar']?></td>
                <td class="text-center"><?= $row['tanggal_lahir_mutasikeluar']?></td>
                <td class="text-center"><a href="../data_input/data_lengkap_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                <td class="text-center">
                    <a href="../update_data/update_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Batal Mutasi</button></a>
                </td>
            </tr> 
         <?php }
    }elseif($target == "PLOSO" OR "BENGKELO KIDUL"  OR "GLURAN" OR "LEPIT"){
        $t_mutasikeluar2 = mysqli_query($koneksi,"SELECT * FROM `t_mutasikeluar` where t_mutasikeluar.dsn_asalkeluar = '$target' ");
        $jumlah2 = mysqli_num_rows($t_mutasikeluar2);
        while($row = mysqli_fetch_assoc($t_mutasikeluar)){
            
            if($row["dsn_asalkeluar"]== $target){?>
            
            
            <tr>
                <td class="text-center"><?= $row['kk_mutasikeluar']?></td>
                <td class="text-center"><?= $row['nik_mutasikeluar']?></td>
                <td class="text-justify"><?= $row['nama_mutasikeluar']?></td>
                <td class="text-center"><?= $row['jk_mutasikeluar']?></td>
                <td class="text-center"><?= $row['tempat_lahir_mutasikeluar']?></td>
                <td class="text-center"><?= $row['tanggal_lahir_mutasikeluar']?></td>
                <td class="text-center"><a href="../data_input/data_lengkap_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                <td class="text-center">
                    <a href="../update_data/update_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Batal Mutasi</button></a>
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
    $t_mutasikeluar3 = mysqli_query($koneksi,"SELECT * FROM `t_mutasikeluar`  ");
    $jumlah3 = mysqli_num_rows($t_mutasikeluar3);
        while($row = mysqli_fetch_assoc($t_mutasikeluar3)){
            ?>
            
            <tr>
                <td class="text-center"><?= $row['kk_mutasikeluar']?></td>
                <td class="text-center"><?= $row['nik_mutasikeluar']?></td>
                <td class="text-justify"><?= $row['nama_mutasikeluar']?></td>
                <td class="text-center"><?= $row['jk_mutasikeluar']?></td>
                <td class="text-center"><?= $row['tempat_lahir_mutasikeluar']?></td>
                <td class="text-center"><?= $row['tanggal_lahir_mutasikeluar']?></td>
                <td class="text-center"><a href="../data_input/data_lengkap_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                <td class="text-center">
                    <a href="../update_data/update_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary">Batal Mutasi</button></a>
                </td>
            </tr> 
         <?php }
}
?>