<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["edit_warga"])){
    $admin = $_GET['admin'];
    $alamat_user = $_GET['alamat_user'];

    $nik = $_POST["nik_baru"];

    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $agama = $_POST["agama"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $pendidikan = $_POST["pendidikan"];
    $pekerjaan = $_POST["pekerjaan"];
    $kawin = $_POST["kawin"];
    $st_keluarga = $_POST["st_keluarga"];
    $agama = $_POST["agama"];
    $no_kk = $_POST["no_kk"];
    $alamat = $_POST["alamat"];
    $rt = $_POST["rt"];
    $rw = $_POST["rw"];
    $st_mutasi = $_POST["st_mutasi"];
    $st_penduduk = $_POST["st_penduduk"];
    $kondisi = $_POST["kondisi"];
    
   
    $nik_lama = $_GET['nik'];

    if($nik_lama == $nik){
         $update = mysqli_query($koneksi,"UPDATE t_warga SET nik='$nik_lama', nama= '$nama', jk = '$jk', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', agama =  '$agama',  pendidikan = '$pendidikan', pekerjaan = '$pekerjaan', kawin = '$kawin', st_keluarga = '$st_keluarga', no_kk = '$no_kk', alamat = '$alamat', rt = '$rt',  rw = '$rw',  st_mutasi = '$st_mutasi', st_penduduk = '$st_penduduk',  kondisi  = '$kondisi'  WHERE t_warga.nik='$nik_lama'");

        if($update){
            $cek_masuk = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk` WHERE nik_mutasimasuk='$nik_lama'");
            if(mysqli_num_rows($cek_masuk)){
                    $update_masuk = mysqli_query($koneksi,"UPDATE t_mutasimasuk SET nik_mutasimasuk='$nik_lama', nama_mutasimasuk = '$nama', jk_mutasimasuk = '$jk', tempat_lahir_mutasimasuk = '$tempat_lahir', tanggal_lahir_mutasimasuk = '$tanggal_lahir', agama_mutasimasuk=  '$agama',  pendidikan_mutasimasuk = '$pendidikan', pekerjaan_mutasimasuk = '$pekerjaan', kawin_mutasimasuk = '$kawin', st_keluarga_mutasimasuk = '$st_keluarga', kk_mutasimasuk = '$no_kk', dsn_tujuanmasuk = '$alamat', rt_tujuanmasuk = '$rt',  rw_tujuanmasuk = '$rw',  jenis_mutasimasuk = '$st_mutasi',  kondisi_masuk = '$kondisi'  WHERE t_mutasimasuk.nik_mutasimasuk='$nik_lama'");
                    if ($update_masuk) {
                        header("location: ../admin/data_penduduk.php?admin=$admin&alamat_user=$alamat_user ");
                            
                    }else{
                        echo "gaga rubah t masuk";
                    }
                
            }else{
                header("location: ../admin/data_penduduk.php?admin=$admin&alamat_user=$alamat_user ");
                            
            }
            
            
        }else{
            // header("location: ../admin/user.php");
                // // $_SESSION["pesan"] = "gagal";
            echo "Gagal2";
        }
        
    } else{
        $cek_nik =mysqli_query($koneksi,"SELECT * FROM t_warga WHERE nik='$nik'");
        if(!mysqli_num_rows($cek_nik)){
            $update = mysqli_query($koneksi,"UPDATE t_warga SET
            nik='$nik', 
            nama=  '$nama',
            jk =  '$jk', 
            tempat_lahir = '$tempat_lahir',  
            tanggal_lahir = '$tanggal_lahir',
            agama =  '$agama',  
            pendidikan = '$pendidikan', 
            pekerjaan = '$pekerjaan', 
            kawin = '$kawin', 
            st_keluarga = '$st_keluarga', 
            no_kk = '$no_kk', 
            alamat = '$alamat', 
            rt = '$rt', 
            rw = '$rw', 
            st_mutasi = '$st_mutasi', 
            st_penduduk = '$st_penduduk', 
            kondisi  = '$kondisi' 
            WHERE t_warga.nik='$nik_lama'");
            // cek data berhasil di masukkan atau tidak

            if($update){
                $cek_masuk = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk` WHERE nik_mutasimasuk='$nik_lama'");
                if(mysqli_num_rows($cek_masuk)){
                    $update_masuk = mysqli_query($koneksi,"UPDATE t_mutasimasuk SET nik_mutasimasuk='$nik', nama_mutasimasuk = '$nama', jk_mutasimasuk = '$jk', tempat_lahir_mutasimasuk = '$tempat_lahir', tanggal_lahir_mutasimasuk = '$tanggal_lahir', agama_mutasimasuk=  '$agama',  pendidikan_mutasimasuk = '$pendidikan', pekerjaan_mutasimasuk = '$pekerjaan', kawin_mutasimasuk = '$kawin', st_keluarga_mutasimasuk = '$st_keluarga', kk_mutasimasuk = '$no_kk', dsn_tujuanmasuk = '$alamat', rt_tujuanmasuk = '$rt',  rw_tujuanmasuk = '$rw',  jenis_mutasimasuk = '$st_mutasi',  kondisi_masuk = '$kondisi'  WHERE t_mutasimasuk.nik_mutasimasuk='$nik_lama'");
                    if ($update_masuk) {
                        header("location: ../admin/data_penduduk.php?admin=$admin&alamat_user=$alamat_user ");
                            
                    }else{
                        echo "gaga rubah t masuk";
                    }
                
                }else{
                    header("location: ../admin/data_penduduk.php?admin=$admin&alamat_user=$alamat_user ");
                                
                }
            }else{
                // header("location: ../admin/user.php");
                // // $_SESSION["pesan"] = "gagal";
                echo "Gagal2";
            }
        }else{
            // header("location: ../admin/data_penduduk.php");
            // $_SESSION["pesan"] = "gagal1";
            echo "Gagal edit";
        }
    }
    
}
?>