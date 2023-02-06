<?php
include "../connect/koneksi.php";


  $inp = $_POST["input"];
  $target = $_POST["target"];
  $admin = $_GET['admin'];
  $alamat_user = $_GET['alamat_user'];
  

// if($admin=="ADMIN-PLOSO"){

    if($inp == 'WARGA LOKAL'){
        $t_warga = mysqli_query($koneksi,"SELECT * FROM `t_warga` WHERE t_warga.st_penduduk='ADA' AND t_warga.kondisi='HIDUP' AND t_warga.st_mutasi='WARGA LOKAL' ");
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
        
                <?php 


                }elseif ($target=='PLOSO' OR 'BENGKELO KIDUL' OR 'GLURAN' OR 'LEPIT') {
                        if($row["alamat"]== $target){?>
                            <tr>
                                <td class="text-center"><?= $row['no_kk']?></td>
                                <td class="text-center"><?= $row['nik']?></td>
                                <td class="text-justify"><?= $row['nama']?></td>
                                <td class="text-center"><?= $row['jk']?></td>
                                <td class="text-center"><?= $row['tempat_lahir']?></td>
                                <td class="text-center"><?= $row['tanggal_lahir']?></td>
                            </tr> 
                        
                    <?php  }
                }else {
                    echo "PILIH WILIYAH PENDUDUK YANG AKAN DIFILTER";
                }

            }
        
     }     elseif($inp=='MUTASI MASUK'){
            $t_masuk = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk` ");
            while($row = mysqli_fetch_assoc($t_masuk)){
                if($target=='SEMUA DUSUN'){?>
                    <tr>
                        <td class="text-center"><?= $row['kk_mutasimasuk']?></td>
                        <td class="text-center"><?= $row['nik_mutasimasuk']?></td>
                        <td class="text-justify"><?= $row['nama_mutasimasuk']?></td>
                        <td class="text-center"><?= $row['jk_mutasimasuk']?></td>
                        <td class="text-center"><?= $row['tempat_lahir_mutasimasuk']?></td>
                        <td class="text-center"><?= $row['tanggal_lahir_mutasimasuk']?></td>
                        <td class="text-center"><a href="../data_input/data_lengkap_mutasimasuk_filter.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                       
                    </tr> 
        
                <?php }elseif ($target=='PLOSO' OR 'BENGKELO KIDUL' OR 'GLURAN' OR 'LEPIT') {
                        if($row["dsn_tujuanmasuk"]== $target){?>
                        <tr>
                            <td class="text-center"><?= $row['kk_mutasimasuk']?></td>
                            <td class="text-center"><?= $row['nik_mutasimasuk']?></td>
                            <td class="text-justify"><?= $row['nama_mutasimasuk']?></td>
                            <td class="text-center"><?= $row['jk_mutasimasuk']?></td>
                            <td class="text-center"><?= $row['tempat_lahir_mutasimasuk']?></td>
                            <td class="text-center"><?= $row['tanggal_lahir_mutasimasuk']?></td>
                            <td class="text-center"><a href="../data_input/data_lengkap_mutasimasuk_filter.php?nik=<?= $row["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                       
                        </tr>  
                        
                    <?php  }
                }else {
                    echo "PILIH WILIYAH PENDUDUK YANG AKAN DIFILTER";
                }
    
            }


     }

     elseif($inp=='MUTASI KELUAR'){
        $t_keluar = mysqli_query($koneksi,"SELECT * FROM `t_mutasikeluar`  ");
        while($row = mysqli_fetch_assoc($t_keluar)){
            if($target=='SEMUA DUSUN'){?>
                <tr>
                    <td class="text-center"><?= $row['kk_mutasikeluar']?></td>
                    <td class="text-center"><?= $row['nik_mutasikeluar']?></td>
                    <td class="text-justify"><?= $row['nama_mutasikeluar']?></td>
                    <td class="text-center"><?= $row['jk_mutasikeluar']?></td>
                    <td class="text-center"><?= $row['tempat_lahir_mutasikeluar']?></td>
                    <td class="text-center"><?= $row['tanggal_lahir_mutasikeluar']?></td>
                    <td class="text-center"><a href="../data_input/data_lengkap_mutasikeluar_filter.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                   
                </tr> 
    
            <?php }elseif ($target=='PLOSO' OR 'BENGKELO KIDUL' OR 'GLURAN' OR 'LEPIT') {
                    if($row["dsn_asalkeluar"]== $target){?>
                    <tr>
                        <td class="text-center"><?= $row['kk_mutasikeluar']?></td>
                        <td class="text-center"><?= $row['nik_mutasikeluar']?></td>
                        <td class="text-justify"><?= $row['nama_mutasikeluar']?></td>
                        <td class="text-center"><?= $row['jk_mutasikeluar']?></td>
                        <td class="text-center"><?= $row['tempat_lahir_mutasikeluar']?></td>
                        <td class="text-center"><?= $row['tanggal_lahir_mutasikeluar']?></td>
                        <td class="text-center"><a href="../data_input/data_lengkap_mutasikeluar_filter.php?nik=<?= $row["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>">Informasi Lengkap</a></td>
                   
                    </tr> 
                    
                <?php  }
            }else {
                echo "PILIH WILIYAH PENDUDUK YANG AKAN DIFILTER";
            }

        }
     }
     



  
 

?>