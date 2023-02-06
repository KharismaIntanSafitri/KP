<?php
include "../connect/koneksi.php";

$nik = $_GET['nik'];
$admin = $_GET['admin'];
$alamat_user = $_GET['alamat_user'];
$t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' ");


// if($admin=="ADMIN-PLOSO"){
    while($row = mysqli_fetch_assoc($t_warga)){
        if($row["nik"]== $nik){?>
        <tr>
            <th class="text-justify">NIK</th>
            <td class="text-justify"><?= $row['nik']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Nama</th>
            <td class="text-justify"><?= $row['nama']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Jenis Kelamin</th>
            <td class="text-justify"><?= $row['jk']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Tempat Lahir</th>
            <td class="text-justify"><?= $row['tempat_lahir']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Tanggal Lahir</th>
            <td class="text-justify"><?= $row['tanggal_lahir']?></td>
        </tr>
        <tr>
            <th class="text-justify">Agama</th>
            <td class="text-justify"><?= $row['agama']?></td>
        </tr>
        <tr>
            <th class="text-justify">Pendidikan</th>
            <td class="text-justify"><?= $row['pendidikan']?></td>
        </tr>
        <tr>
            <th class="text-justify">Pekerjaan</th>
            <td class="text-justify"><?= $row['pekerjaan']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status Perkawinan</th>
            <td class="text-justify"><?= $row['kawin']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status dalam Keluarga</th>
            <td class="text-justify"><?= $row['pekerjaan']?></td>
        </tr>
        <tr>
            <th class="text-justify">Nomor KK</th>
            <td class="text-justify"><?= $row['no_kk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Alamat</th>
            <td class="text-justify"><?= $row['alamat']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rt</th>
            <td class="text-justify"><?= $row['rt']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rw</th>
            <td class="text-justify"><?= $row['rw']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status Mutasi</th>
            <td class="text-justify"><?= $row['st_mutasi']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status Keberadaan Penduduk</th>
            <td class="text-justify"><?= $row['st_penduduk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kondisi Penduduk</th>
            <td class="text-justify"><?= $row['kondisi']?></td>
        </tr>
        
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="../edit_data/edit_warga.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button class="btn btn-danger me-md-2 mr-2" type="button">Edit</button></a>
            <a href="../admin/data_penduduk.php?nik=<?= $row["nik"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button class="btn btn-primary me-md-2" type="button">Kembali</button></a>
        </div>
     <?php }}
// }elseif ($admin=="ADMIN-BENGKELO-KIDUL"){

// }elseif ($admin=="ADMIN-GLURAN"){

// }elseif ($admin=="ADMIN-LEPIT"){

// }else{
//     echo "Anda bukan admin";
// }



?>