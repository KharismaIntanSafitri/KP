<?php
include "../connect/koneksi.php";

$nik = $_GET['nik'];
$admin = $_GET['admin'];
$alamat_user = $_GET['alamat_user'];
$t_mutasikeluar = mysqli_query($koneksi,"SELECT * FROM `t_mutasikeluar`  ");


// if($admin=="ADMIN-PLOSO"){
    while($row = mysqli_fetch_assoc($t_mutasikeluar)){
        if($row["nik_mutasikeluar"]== $nik){?>
        <tr>
            <th class="text-justify">NIK</th>
            <td class="text-justify"><?= $row['nik_mutasikeluar']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Nama</th>
            <td class="text-justify"><?= $row['nama_mutasikeluar']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Jenis Kelamin</th>
            <td class="text-justify"><?= $row['jk_mutasikeluar']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Tempat Lahir</th>
            <td class="text-justify"><?= $row['tempat_lahir_mutasikeluar']?></td>
        </tr> 
        <tr>
            <th class="text-justify">Tanggal Lahir</th>
            <td class="text-justify"><?= $row['tanggal_lahir_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Agama</th>
            <td class="text-justify"><?= $row['agama_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Pendidikan</th>
            <td class="text-justify"><?= $row['pendidikan_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Pekerjaan</th>
            <td class="text-justify"><?= $row['pekerjaan_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status Perkawinan</th>
            <td class="text-justify"><?= $row['kawin_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status dalam Keluarga</th>
            <td class="text-justify"><?= $row['st_keluarga_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Nomor KK</th>
            <td class="text-justify"><?= $row['kk_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Provinsi Tujuan</th>
            <td class="text-justify"><?= $row['provinsi_tujuankeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kabupaten Tujuan</th>
            <td class="text-justify"><?= $row['kab_tujuankeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kelurahan Tujuan</th>
            <td class="text-justify"><?= $row['kel_tujuankeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Alamat Tujuan</th>
            <td class="text-justify"><?= $row['dsn_tujuankeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rt Tujuan</th>
            <td class="text-justify"><?= $row['rt_tujuankeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rw Tujuan</th>
            <td class="text-justify"><?= $row['rw_tujuankeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Provinsi Asal</th>
            <td class="text-justify"><?= $row['provinsi_asalkeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kabupaten Asal</th>
            <td class="text-justify"><?= $row['kab_asalkeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kelurahan Asal</th>
            <td class="text-justify"><?= $row['kel_asalkeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Alamat Asal</th>
            <td class="text-justify"><?= $row['dsn_asalkeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rt Asal</th>
            <td class="text-justify"><?= $row['rt_asalkeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Rw Asal</th>
            <td class="text-justify"><?= $row['rw_asalkeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Status Mutasi</th>
            <td class="text-justify"><?= $row['jenis_mutasikeluar']?></td>
        </tr>
        <tr>
            <th class="text-justify">Kondisi Penduduk</th>
            <td class="text-justify"><?= $row['kondisi_keluar']?></td>
        </tr>
               
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="../update_data/update_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button class="btn btn-danger me-md-2 mr-2" type="button">Batal Mutasi</button></a>
            <a href="../admin/data_mutasikeluar.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button class="btn btn-primary me-md-2" type="button">Kembali</button></a>
        
        </div>
     <?php }}
// }elseif ($admin=="ADMIN-BENGKELO-KIDUL"){

// }elseif ($admin=="ADMIN-GLURAN"){

// }elseif ($admin=="ADMIN-LEPIT"){

// }else{
//     echo "Anda bukan admin";
// }



?>