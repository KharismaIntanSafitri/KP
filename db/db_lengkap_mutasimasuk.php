<?php
include "../connect/koneksi.php";

$nik = $_GET['nik'];
$admin = $_GET['admin'];
$alamat_user = $_GET['alamat_user'];
$t_mutasimasuk = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk`  ");


// if($admin=="ADMIN-PLOSO"){
    while($row = mysqli_fetch_assoc($t_mutasimasuk)){
        if($row["nik_mutasimasuk"]== $nik){?>
        <tr>
            <th class="text-justify">NIK</th>
            <td class="text-justify"><?= $row['nik_mutasimasuk']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Nama</th>
            <td class="text-justify"><?= $row['nama_mutasimasuk']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Jenis Kelamin</th>
            <td class="text-justify"><?= $row['jk_mutasimasuk']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Tempat Lahir</th>
            <td class="text-justify"><?= $row['tempat_lahir_mutasimasuk']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Tanggal Lahir</th>
            <td class="text-justify"><?= $row['tanggal_lahir_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Agama</th>
            <td class="text-justify"><?= $row['agama_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Pendidikan</th>
            <td class="text-justify"><?= $row['pendidikan_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Pekerjaan</th>
            <td class="text-justify"><?= $row['pekerjaan_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status Perkawinan</th>
            <td class="text-justify"><?= $row['kawin_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status dalam Keluarga</th>
            <td class="text-justify"><?= $row['st_keluarga_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Nomor KK</th>
            <td class="text-justify"><?= $row['kk_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Provinsi Tujuan</th>
            <td class="text-justify"><?= $row['provinsi_tujuanmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kabupaten Tujuan</th>
            <td class="text-justify"><?= $row['kab_tujuanmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kelurahan Tujuan</th>
            <td class="text-justify"><?= $row['kel_tujuanmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Alamat Tujuan</th>
            <td class="text-justify"><?= $row['dsn_tujuanmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rt Tujuan</th>
            <td class="text-justify"><?= $row['rt_tujuanmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rw Tujuan</th>
            <td class="text-justify"><?= $row['rw_tujuanmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Provinsi Asal</th>
            <td class="text-justify"><?= $row['provinsi_asalmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kabupaten Asal</th>
            <td class="text-justify"><?= $row['kab_asalmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kelurahan Asal</th>
            <td class="text-justify"><?= $row['kel_asalmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Alamat Asal</th>
            <td class="text-justify"><?= $row['dsn_asalmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rt Asal</th>
            <td class="text-justify"><?= $row['rt_asalmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rw Asal</th>
            <td class="text-justify"><?= $row['rw_asalmasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status Mutasi</th>
            <td class="text-justify"><?= $row['jenis_mutasimasuk']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kondisi Penduduk</th>
            <td class="text-justify"><?= $row['kondisi_masuk']?></td>
        </tr>
               
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="../edit_data/edit_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button class="btn btn-danger me-md-2 mr-2" type="button">Edit</button></a>
            <a href="../admin/data_mutasimasuk.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button class="btn btn-primary me-md-2" type="button">Kembali</button></a>
        </div>
     <?php }}
// }elseif ($admin=="ADMIN-BENGKELO-KIDUL"){

// }elseif ($admin=="ADMIN-GLURAN"){

// }elseif ($admin=="ADMIN-LEPIT"){

// }else{
//     echo "Anda bukan admin";
// }



?>