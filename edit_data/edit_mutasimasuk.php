<?php
include "../connect/koneksi.php";
include "../proses_login/session_login.php";
$username = $_SESSION["username"];
$t_user = mysqli_query($koneksi,"SELECT * FROM t_user where username='$username'");
$data = mysqli_fetch_assoc($t_user);
$nama = $data["nama_user"];

$nik = $_GET['nik'];
$admin = $_GET['admin'];
$alamat_user = $_GET['alamat_user'];
$t_mutasimasuk = mysqli_query($koneksi,"SELECT * FROM `t_mutasimasuk` WHERE  t_mutasimasuk.nik_mutasimasuk='$nik' ");
$warga = mysqli_fetch_assoc($t_mutasimasuk);
$nama_warga = $warga["nama_mutasimasuk"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelurahan Gluranploso | Dashboard</title>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/gresik.png" rel="icon">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>
                <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>BERHASIL!!</strong> Pengajuan Berhasil Di Terima
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>GAGAL!!!</strong> Pengajuan Gagal Di Terima
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>BERHASIL!!</strong> Pengajuan Berhasil Di Tolak
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>GAGAL!!!</strong> Pengajuan Gagal Di Tolak
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->

            <?php include "../design/navbar.php";?>
            <?php include "../design/sidebar.php";?>
                        <!-- CONTENT -->
            <div class="container-fluid" style="margin-top: 3%;">
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <h4 class="m-0 font-weight-bold text-primary">Form Edit Mutasi Masuk Penduduk Desa Gluranploso</h4>
                                    
                            </div>
                        </div>
                        <div  style="margin: 2%;">
                        <!-- Awal Isi Konten -->
                        
                        <form action="../update_data/update_mutasimasuk.php?nik=<?= $warga["nik_mutasimasuk"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"  method="POST" style="margin-left: 15%;">
                            <h5 class=" m-0 ml-3 font-weight-bold text-dark" >1. IDENTITAS PENDUUDK :</h5>
                            <div id="identitas" style="margin-left: 2%; text-align:justify; width:80%;" >
                                <label for="nik"  class="mb-1 mt-2">NIK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['nik_mutasimasuk']?>" type="text" name="nik_baru" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>   

                                <label for="nama"  class="mb-1 mt-2">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['nama_mutasimasuk']?>" type="text" name="nama" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required>
                                </div> 

                                <label for="jk" class="mb-1 mt-2" >Jenis Kelamin</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="jk">
                                            <option selected><?= $warga['jk_mutasimasuk']?></option>
                                                <option>LAKI-LAKI</option>
                                                <option>PEREMPUAN</option>
                                        </select>
                                </div>

                                <label for="tempat_lahir"  class="mb-1 mt-2">Tempat Lahir</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['tempat_lahir_mutasimasuk']?>" type="text" name="tempat_lahir" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required>
                                </div>  

                                <label for="tanggal_lahir"  class="mb-1 mt-2">Tanggal Lahir</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['tanggal_lahir_mutasimasuk']?>" type="date"  name="tanggal_lahir" class="form-control" placeholder="yyyy-mm-dd" style="margin-bottom: 5px;" required>
                                </div> 

                                <label for="pendidikan" class="mb-1 mt-2" >Pendidikan</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="pendidikan">
                                            <option selected><?= $warga['pendidikan_mutasimasuk']?></option>
                                                <option>TAMAT SD / SEDERAJAT</option>
                                                <option>TIDAK / BELUM SEKOLAH</option>
                                                <option>SLTP/SEDERAJAT</option>
                                                <option>SLTA / SEDERAJAT</option>
                                                <option>BELUM TAMAT SD/SEDERAJAT</option>
                                                <option>DIPLOMA I / II</option>
                                                <option>DIPLOMA IV/ STRATA I</option>
                                                <option>AKADEMI/ DIPLOMA III/S. MUDA</option>
                                                <option>STRATA II</option>
                                                <option>STRATA III</option>
                                        </select>
                                </div>

                                <label for="pekerjaan" class="mb-1 mt-2" >Jenis Pekerjaan</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="pekerjaan">
                                            <option selected><?= $warga['pekerjaan_mutasimasuk']?></option>
                                                <option>BELUM/TIDAK BEKERJA</option>
                                                <option>MENGURUS RUMAH TANGGA</option>
                                                <option>PELAJAR/MAHASISWA</option>
                                                <option>PENSIUN</option>
                                                <option>PEGAWAI NEGERI SIPIL</option>
                                                <option>PERDAGANGAN</option>
                                                <option>PETERNAK</option>
                                                <option>PERTANIAN/PERKEBUNAN</option>
                                                <option>WIRASWASTA</option>
                                                <option>WIRAUSAHA</option>
                                                <option>KARYAWAN SWASTA'</option>
                                                <option>KARYAWAN BUMN</option>
                                                <option>KARYAWAN BUMD</option>
                                                <option>KARYAWAN HONORER</option>
                                                <option>PERANGKAT DESA</option>
                                                <option>KEPALA DESA</option>
                                                <option>GURU</option>
                                                <option>DOKTER</option>
                                                <option>BIDAN</option>
                                                <option>PERAWAT</option>
                                        </select>
                                </div>

                                <label for="kawin" class="mb-1 mt-2" >Status Perkawinan</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="kawin">
                                            <option selected><?= $warga['kawin_mutasimasuk']?></option>
                                                <option>BELUM KAWIN</option>
                                                <option>KAWIN BELUM TERCATAT</option>
                                                <option>KAWIN TERCATAT</option>
                                                <option>CERAI HIDUP</option>
                                                <option>CERAI MATI</option>
                                        </select>
                                </div>
                                
                                <label for="st_keluarga" class="mb-1 mt-2" >Status dalam Keluarga</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="st_keluarga">
                                            <option selected><?= $warga['st_keluarga_mutasimasuk']?></option>
                                                <option>KEPALA KELUARGA</option>
                                                <option>SUAMI</option>
                                                <option>ISTRI</option>
                                                <option>ANAK</option>
                                                <option>MENANTU</option>
                                                <option>CUCU</option>
                                                <option>ORANG TUA</option>
                                                <option>MERTUA</option>
                                                <option>FAMILI LAIN</option>
                                                <option>PEMBANTU</option>
                                                <option>LAINNYA</option>
                                        </select>
                                </div>


                                <label for="agama" class="mb-1 mt-2" >Agama</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="agama">
                                            <option selected><?= $warga['agama_mutasimasuk']?></option>
                                                <option>ISLAM</option>
                                                <option>KRISTEN</option>
                                                <option>KATOLIK</option>
                                                <option>HINDU</option>
                                                <option>BUDDHA</option>
                                                <option>KONG HU CU</option>
                                            </select>
                                </div>  

                                <label for="no_kk"  class="mb-1 mt-2">Nomor KK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kk_mutasimasuk']?>" type="text" name="no_kk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>
                            </div>


                            <h5 class=" m-0 ml-3 mt-4 font-weight-bold text-dark" >2. ALAMAT TUJUAN :</h5>
                            <div id="identitas" style="margin-left: 2%; text-align:justify; width:80%;" >
                                <label for="provinsi_tujuanmasuk"  class="mb-1 mt-2">Provinsi Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['provinsi_tujuanmasuk']?>" type="text" name="provinsi_tujuanmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="kab_tujuanmasuk"  class="mb-1 mt-2">Kabupaten Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kab_tujuanmasuk']?>" type="text" name="kab_tujuanmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                

                                <label for="kec_tujuanmasuk"  class="mb-1 mt-2">Kecamatan Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kec_tujuanmasuk']?>" type="text" name="kec_tujuanmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="kel_tujuanmasuk"  class="mb-1 mt-2">Kelurahan Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kel_tujuanmasuk']?>" type="text" name="kel_tujuanmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="dsn_tujuanmasuk" class="mb-1 mt-2" >Dusun Tujuan</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="dsn_tujuanmasuk">
                                            <option selected><?= $warga['dsn_tujuanmasuk']?></option>
                                                <option>PLOSO</option>
                                                <option>BENGKELO KIDUL</option>
                                                <option>GLURAN</option>
                                                <option>LEPIT</option>
                                            </select>
                                </div> 

                                <label for="rt_tujuanmasuk"  class="mb-1 mt-2">RT</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['rt_tujuanmasuk']?>" type="text" name="rt_tujuanmasuk" class="form-control" placeholder="3 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="rw_tujuanmasuk"  class="mb-1 mt-2">RW</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['rw_tujuanmasuk']?>" type="text" name="rw_tujuanmasuk" class="form-control" placeholder="3 Digit angka" style="margin-bottom: 5px;" required>
                                </div>
                            </div>


                            <h5 class=" m-0 ml-3 mt-4 font-weight-bold text-dark" >3. ALAMAT ASAL :</h5>
                            <div id="identitas" style="margin-left: 2%; text-align:justify; width:80%;" >
                                <label for="provinsi_asalmasuk"  class="mb-1 mt-2">Provinsi Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['provinsi_asalmasuk']?>" type="text" name="provinsi_asalmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="kab_asalmasuk"  class="mb-1 mt-2">Kabupaten Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kab_asalmasuk']?>" type="text" name="kab_asalmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="kec_asalmasuk"  class="mb-1 mt-2">Kecamatan Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kec_asalmasuk']?>" type="text" name="kec_asalmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="kel_asalmasuk"  class="mb-1 mt-2">Kelurahan Tujuan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kel_asalmasuk']?>" type="text" name="kel_asalmasuk" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="dsn_asalmasuk" class="mb-1 mt-2" >Dusun Tujuan</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="dsn_asalmasuk">
                                            <option selected><?= $warga['dsn_asalmasuk']?></option>
                                                <option>PLOSO</option>
                                                <option>BENGKELO KIDUL</option>
                                                <option>GLURAN</option>
                                                <option>LEPIT</option>
                                            </select>
                                </div> 

                                <label for="rt_asalmasuk"  class="mb-1 mt-2">RT</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['rt_tujuanmasuk']?>" type="text" name="rt_asalmasuk" class="form-control" placeholder="3 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="rw_asalmasuk"  class="mb-1 mt-2">RW</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['rw_asalmasuk']?>" type="text" name="rw_asalmasuk" class="form-control" placeholder="3 Digit angka" style="margin-bottom: 5px;" required>
                                </div>
                            </div>

                            
                            <h5 class=" m-0 ml-3 mt-4 font-weight-bold text-dark" >4. KETERANGAN LAIN :</h5>
                            <div id="identitas" style="margin-left: 2%; text-align:justify; width:80%;" >

                                <label for="jenis_mutasimasuk" class="mb-1 mt-2" >Jenis Mutasi</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="jenis_mutasimasuk">
                                            <option selected><?= $warga['jenis_mutasimasuk']?></option>
                                                <option>MUTASI KELUAR</option>
                                                <option>MUTASI MASUK</option>
                                            </select>
                                </div>

                                <label for="kondisi" class="mb-1 mt-2" >Status Kondisi</label>
                                <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text " style="height: 38px;">
                                                <i class="fas fa-address-card"></i>
                                            </div>
                                        </div>
                                        <select class="form-control form-control" name="kondisi">
                                            <option selected><?= $warga['kondisi_masuk']?></option>
                                                <option>HIDUP</option>
                                                <option>MENINGGAL</option>
                                            </select>
                                </div>

                            </div>


                            <div class="form-group row" style="margin-top: 1%; text-align:right; ">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-danger" name="edit_mutasimasuk">Simpan</button>
                                    <a href="../admin/data_mutasimasuk.php?admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary" name="batal">Kembali</button></a>
                                </div>
                            </div>

                            <?php
                            if(isset($_SESSION["tambah_data"])){
                                if($_SESSION["tambah_data"]=="sukses"){?>
                                    <script>Swal.fire('SUKSES','DATA BERHASIL DI TAMBAHKAN','success')</script>
                                    <?php unset($_SESSION["tambah_data"]);
                                }elseif($_SESSION["tambah_data"]== "gagal"){?>
                                    <script>Swal.fire('ERROR','DATA GAGAL DI TAMBAHKAN','error')</script>
                                    <?php 
                                    unset($_SESSION["tambah_data"]);
                                }
                            }
                            ?>
                                        
                        </form>
          
                        <!-- akhir Isi Konten -->
                        </div>
                    </div>
                </div>
            </div>




            

        <!-- End of Sidebar -->
        </div>
        <!-- END CONTENT -->
            <!-- Bootstrap core JavaScript-->
            <script src="../vendor/jquery/jquery.min.js"></script>
            <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../js/js_sidebar.js"></script>
            <!-- Page level plugins -->
            <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="../js/demo/datatables-demo.js"></script>

            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script>$('#date').datepicker({ dateFormat: 'dd-mm-yy' }).val();</script>
        </body>
        </html>

