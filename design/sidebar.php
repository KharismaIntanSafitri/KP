<!-- SIDEBAR -->
<div id="wrapper" style="margin-top: -2%;  ">
                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center">
                        <div>Selamat Datang </div>
                    </a>

                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <a class="nav-link" href="../admin/page_admin.php?admin=<?= $data["username"]?>&alamat_user=<?= $data["alamat_user"]?>" >
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">Menu Edit & Hapus</div>

                    <!-- Nav Item - Penduduk -->
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/data_penduduk.php?admin=<?= $data["username"]?>&alamat_user=<?= $data["alamat_user"]?>" >
                            <i class="fas fa-book"></i> 
                            <span>Data Penduduk</span>
                        </a>
                    </li>


                    <!-- Nav Item - surat Menu -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="../admin/data_penduduk.php" >
                            <i class="fas fa-envelope"></i>
                            <span>Data Kartu Keluarga</span>
                        </a>
                    </li> -->


                    <!-- Nav Item - surat Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mutasi"
                            aria-expanded="true" aria-controls="mutasi">
                            <i class="fas fa-suitcase"></i>
                            <span>Data Mutasi Penduduk</span>
                        </a>
                        <div id="mutasi" class="collapse" aria-labelledby="headingmutasi"
                            data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Pilihan</h6>
                                <a class="collapse-item" href="../admin/data_mutasikeluar.php?admin=<?= $data["username"]?>&alamat_user=<?= $data["alamat_user"]?>">Mutasi Keluar</a>
                                <a class="collapse-item" href="../admin/data_mutasimasuk.php?admin=<?= $data["username"]?>&alamat_user=<?= $data["alamat_user"]?>">Mutasi Masuk </a>
                            </div>
                        </div>
                    </li>


                    <!-- Nav Item - User Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="../admin/data_kk.php?admin=<?= $data["username"]?>&alamat_user=<?= $data["alamat_user"]?>" >
                            <i class="fas fa-user"></i>
                            <span>Data KK Penduduk</span>
                        </a>
                    </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider d-none d-md-block">

                    <!-- Sidebar Toggler (Sidebar) -->
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                    </div>

                </ul>

