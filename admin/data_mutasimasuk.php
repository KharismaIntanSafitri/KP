<?php
include "../connect/koneksi.php";
include "../proses_login/session_login.php";
$username = $_SESSION["username"];
$t_user = mysqli_query($koneksi,"SELECT * FROM t_user where username='$username'");
$data = mysqli_fetch_assoc($t_user);
$nama = $data["nama_user"];
$alamat_admin = $data['alamat_user'];
$aa= strtolower($alamat_admin);
$bb = ucwords($aa)
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
                                <h4 class="m-0 font-weight-bold text-primary">Data Mutasi Masuk Penduduk Desa Gluranploso</h4>
                                <div>
                                        <form action="../admin/data_mutasimasuk.php?admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                                
                                                    <div class="input-group" >
                                                        <label for="target" class="mb-1 mt-2 mr-2" >Target Wilayah Filter</label>
                                                        <select class="form-control form-control" name="target">
                                                            <option selected>Pilih</option>
                                                                <option>SEMUA DUSUN</option>
                                                                <option>PLOSO</option>
                                                                <option>BENGKELO KIDUL</option>
                                                                <option>GLURAN</option>
                                                                <option>LEPIT</option>
                                                        </select>
                                                        <button type="submit" class="btn btn-primary  me-md-2 ml-2" name="cari">Cari Data</button>
                                                    
                                                    </div>
                                                    
                                            </form>
                                </div>
                            </div>
                        </div>
                        <div  style="margin: 2%;">
                        <!-- Awal Isi Konten -->
                        
                        <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>Nomor KK</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    
                                    <th>Lainnya</th> 
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody >
                                <?php
                                include '../db/db_data_mutasimasuk.php'
                                ?>
                            </tbody>
                            <?php 
                                if(isset($_POST["cari"])){
                                    if($target=="SEMUA DUSUN"){?>
                                        <p>Showing <?php echo $jumlah1;?> entries</p>
                                    <?php }elseif($target == "PLOSO" OR "BENGKELO KIDUL"  OR "GLURAN" OR "LEPIT"){?>
                                        <p>Showing <?php echo $jumlah2;?> entries</p>
                                    <?php }
                                }elseif(!isset($_POST["cari"])){?>
                                        <p>Showing <?php echo $jumlah3;?> entries</p>
                                <?php }
                            ?>
                        </table>
          
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

