<?php
include "../connect/koneksi.php";
session_start();
if(isset($_POST["edit_mutasimasuk"])){
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
    $jenis_mutasimasuk = $_POST["jenis_mutasimasuk"];
    $kondisi = $_POST["kondisi"];

    $provinsi_asalmasuk = $_POST["provinsi_asalmasuk"];
    $kab_asalmasuk = $_POST["kab_asalmasuk"];
    $kel_asalmasuk = $_POST["kel_asalmasuk"];
    $kec_asalmasuk = $_POST["kec_asalmasuk"];
    $dsn_asalmasuk = $_POST["dsn_asalmasuk"];
    $rt_asalmasuk = $_POST["rt_asalmasuk"];
    $rw_asalmasuk = $_POST["rw_asalmasuk"];

    $provinsi_tujuanmasuk = $_POST["provinsi_tujuanmasuk"];
    $kab_tujuanmasuk = $_POST["kab_tujuanmasuk"];
    $kel_tujuanmasuk = $_POST["kel_tujuanmasuk"];
    $kec_tujuanmasuk = $_POST["kec_tujuanmasuk"];
    $dsn_tujuanmasuk = $_POST["dsn_tujuanmasuk"];
    $rt_tujuanmasuk = $_POST["rt_tujuanmasuk"];
    $rw_tujuanmasuk = $_POST["rw_tujuanmasuk"];
    
   
    $nik_lama = $_GET['nik'];

    if($nik_lama == $nik){
        // memasukkan data kamar ke dalam database
         $update_mutasi = mysqli_query($koneksi,"UPDATE t_mutasimasuk SET 
         nik_mutasimasuk='$nik_lama', 
         nama_mutasimasuk= '$nama', 
         jk_mutasimasuk = '$jk', 
         tempat_lahir_mutasimasuk = '$tempat_lahir', 
         tanggal_lahir_mutasimasuk = '$tanggal_lahir', 
         agama_mutasimasuk =  '$agama',  
         pendidikan_mutasimasuk = '$pendidikan', 
         pekerjaan_mutasimasuk = '$pekerjaan', 
         kawin_mutasimasuk = '$kawin', 
         st_keluarga_mutasimasuk = '$st_keluarga', 
         kk_mutasimasuk = '$no_kk', 

         provinsi_tujuanmasuk = '$provinsi_tujuanmasuk',
         kab_tujuanmasuk = '$kab_tujuanmasuk',
         kec_tujuanmasuk = '$kec_tujuanmasuk',
         kel_tujuanmasuk = '$kel_tujuanmasuk',
         dsn_tujuanmasuk = '$dsn_tujuanmasuk',
         rt_tujuanmasuk = '$rt_tujuanmasuk',
         rw_tujuanmasuk = '$rw_tujuanmasuk',

         provinsi_asalmasuk = '$provinsi_asalmasuk',
         kab_asalmasuk = '$kab_asalmasuk',
         kec_asalmasuk = '$kec_asalmasuk',
         kel_asalmasuk = '$kel_asalmasuk',
         dsn_asalmasuk = '$dsn_asalmasuk',
         rt_asalmasuk = '$rt_asalmasuk',
         rw_asalmasuk = '$rw_asalmasuk',

         jenis_mutasimasuk = '$jenis_mutasimasuk',
         kondisi_masuk  = '$kondisi'  
         WHERE t_mutasimasuk.nik_mutasimasuk='$nik_lama'");

        $update = mysqli_query($koneksi,"UPDATE t_warga SET
        nik='$nik_lama', 
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
        alamat = '$dsn_tujuanmasuk', 
        rt = '$rt_tujuanmasuk', 
        rw = '$rw_tujuanmasuk', 
        st_mutasi = '$jenis_mutasimasuk', 
        kondisi  = '$kondisi' 
        WHERE t_warga.nik='$nik_lama'");

        // cek data berhasil di masukkan atau tidak
        if($update_mutasi && $update){
            header("location: ../admin/data_mutasimasuk.php?admin=$admin&alamat_user=$alamat_user ");
                // $_SESSION["pesan"] = "sukses1";
            echo "Berhasil1";
        }else{
            // header("location: ../admin/user.php");
                // // $_SESSION["pesan"] = "gagal";
            echo "Gagal2";
        }
        
    }else{
        $cek_nik =mysqli_query($koneksi,"SELECT * FROM t_warga WHERE nik='$nik'");
        if(!mysqli_num_rows($cek_nik)){
            
            $update2 = mysqli_query($koneksi,"UPDATE t_warga SET
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
            alamat = '$dsn_tujuanmasuk', 
            rt = '$rt_tujuanmasuk', 
            rw = '$rw_tujuanmasuk', 
            st_mutasi = '$jenis_mutasimasuk', 
            kondisi  = '$kondisi' 
            WHERE t_warga.nik='$nik_lama'");

                if($update2){
                    $update_mutasi2 = mysqli_query($koneksi,"UPDATE t_mutasimasuk SET 
                    nik_mutasimasuk='$nik', 
                    nama_mutasimasuk= '$nama', 
                    jk_mutasimasuk = '$jk', 
                    tempat_lahir_mutasimasuk = '$tempat_lahir', 
                    tanggal_lahir_mutasimasuk = '$tanggal_lahir', 
                    agama_mutasimasuk = '$agama',  
                    pendidikan_mutasimasuk = '$pendidikan', 
                    pekerjaan_mutasimasuk = '$pekerjaan', 
                    kawin_mutasimasuk = '$kawin', 
                    st_keluarga_mutasimasuk = '$st_keluarga', 
                    kk_mutasimasuk = '$no_kk', 

                    provinsi_tujuanmasuk = '$provinsi_tujuanmasuk',
                    kab_tujuanmasuk = '$kab_tujuanmasuk',
                    kec_tujuanmasuk = '$kec_tujuanmasuk',
                    kel_tujuanmasuk = '$kel_tujuanmasuk',
                    dsn_tujuanmasuk = '$dsn_tujuanmasuk',
                    rt_tujuanmasuk = '$rt_tujuanmasuk',
                    rw_tujuanmasuk = '$rw_tujuanmasuk',

                    provinsi_asalmasuk = '$provinsi_asalmasuk',
                    kab_asalmasuk = '$kab_asalmasuk',
                    kec_asalmasuk = '$kec_asalmasuk',
                    kel_asalmasuk = '$kel_asalmasuk',
                    dsn_asalmasuk = '$dsn_asalmasuk',
                    rt_asalmasuk = '$rt_asalmasuk',
                    rw_asalmasuk = '$rw_asalmasuk',

                    jenis_mutasimasuk = '$jenis_mutasimasuk',
                    kondisi_masuk  = '$kondisi'  
                    WHERE t_mutasimasuk.nik_mutasimasuk='$nik'");

                    // cek data berhasil di masukkan atau tidak
                    if($update_mutasi2 && $update2){
                        header("location: ../admin/data_mutasimasuk.php?admin=$admin&alamat_user=$alamat_user ");
                            // $_SESSION["pesan"] = "sukses1";
                        echo "Berhasil1";
                    }else{
                        // header("location: ../admin/user.php");
                            // // $_SESSION["pesan"] = "gagal";
                        echo "Gagal2";
                    }
                }


            
        }
    
}}
?>