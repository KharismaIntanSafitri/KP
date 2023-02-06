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
$t_mutasikeluar = mysqli_query($koneksi,"SELECT * FROM `t_mutasikeluar` WHERE  t_mutasikeluar.nik_mutasikeluar='$nik' ");
$warga = mysqli_fetch_assoc($t_mutasikeluar);
$nama_warga = $warga["nama_mutasikeluar"];
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
                                <h4 class="m-0 font-weight-bold text-primary">Form Edit Mutasi Keluar Penduduk Desa Gluranploso</h4>
                                    
                            </div>
                        </div>
                        <div  style="margin: 2%;">
                        <!-- Awal Isi Konten -->


                        
                        <form action="../proses_data/tambah_mutasi_keluar edit.php?nik=<?= $warga["nik_mutasikeluar"]?>&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"" method="POST" style="margin-left: 15%;">
                            <h5 class=" m-0 ml-3 font-weight-bold text-dark" >1. IDENTITAS PENDUDUK :</h5>
                            <div id="identitas" style="margin-left: 2%; text-align:justify; width:80%;" >
                                <label for="nik"  class="mb-1 mt-2">NIK</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['nik_mutasikeluar']?>" type="text" name="nik" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>   

                                <label for="nama"  class="mb-1 mt-2">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['nama_mutasikeluar']?>" type="text" name="nama" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required value="<?php $nama ?>">
                                </div> 

                                <label for="tgl_mutasi"  class="mb-1 mt-2">Tanggal Mutasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['tanggal_mutasikeluar']?>" type="date" name="tgl_mutasi" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required value="<?php $nama ?>">
                                </div> 

                                
                            </div>

                            <h5 class=" m-0 ml-3  mt-4 font-weight-bold text-dark" >2. DOMISILI TUJUAN:</h5>
                            <div id="identitas" style="margin-left: 2%; text-align:justify; width:80%;" >
                                <label for="prov"  class="mb-1 mt-2">Provinsi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['provinsi_tujuankeluar']?>" type="text" name="prov" class="form-control" placeholder="16 Digit angka" style="margin-bottom: 5px;" required>
                                </div>   

                                <label for="kab"  class="mb-1 mt-2">Kabupaten / Kota</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kab_tujuankeluar']?>" type="text" name="kab" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required value="<?php $nama ?>">
                                </div> 

                                <label for="kec"  class="mb-1 mt-2">Kecamatan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kec_tujuankeluar']?>" type="text" name="kec" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required value="<?php $nama ?>">
                                </div> 

                                <label for="kel"  class="mb-1 mt-2">Kelurahan</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['kel_tujuankeluar']?>" type="text" name="kel" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required value="<?php $nama ?>">
                                </div> 

                                <label for="dsn"  class="mb-1 mt-2">Dusun</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['dsn_tujuankeluar']?>" type="text" name="dsn" class="form-control" placeholder="3 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="rt"  class="mb-1 mt-2">RT</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['rt_tujuankeluar']?>" type="text" name="rt_tujuan" class="form-control" placeholder="3 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                <label for="rw"  class="mb-1 mt-2">RW</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text " style="height: 38px;"><i class="fas fa-address-card"></i></div>
                                    </div>
                                    <input value="<?= $warga['rw_tujuankeluar']?>" type="text" name="rw_tujuan" class="form-control" placeholder="3 Digit angka" style="margin-bottom: 5px;" required>
                                </div>

                                
                            </div>

                            <div class="form-group row" style="margin-top: 1%; text-align:right; ">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="tambah_mutasi">Tambah</button>
                                    <a href="../admin/page_admin.php?admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>"><button type="button" class="btn btn-primary" name="batal">Kembali</button></a>
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

