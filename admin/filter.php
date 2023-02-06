                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <div class="d-sm-flex align-items-center justify-content-between">
                                <h4 class="m-0 font-weight-bold text-primary">Cari Penduduk Desa Gluranploso</h4>   
                            </div>
                        </div>
                        <!-- Awal Isi Konten -->
                        <div class="row" style="margin: 2%;">
                            <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header">
                                        Filter by Jenis Kelamin
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                        <form action="../admin/page_admin.php?kolom=jk&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                            <label for="input" class="mb-1 mt-1" >Jenis Kelamin</label>
                                            <div class="input-group">
                                                <select class="form-control form-control" name="input">
                                                    <option selected>Pilih</option>
                                                        <option>LAKI-LAKI</option>
                                                        <option>PEREMPUAN</option>
                                                </select>
                                            </div>

                                            <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                            <div class="input-group" >
                                                <select class="form-control form-control" name="target">
                                                    <option selected>Pilih</option>
                                                        <option>SEMUA DUSUN</option>
                                                        <option>PLOSO</option>
                                                        <option>BENGKELO KIDUL</option>
                                                        <option>GLURAN</option>
                                                        <option>LEPIT</option>
                                                </select>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="cari">Cari Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header">
                                        Filter by Pekerjaan
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                        <form action="../admin/page_admin.php?kolom=pekerjaan&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                            <label for="input" class="mb-1 mt-1" >Pekerjaan</label>
                                            <div class="input-group">
                                                <select class="form-control form-control" name="input">
                                                    <option selected>Pilih</option>
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

                                            <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                            <div class="input-group" >
                                                <select class="form-control form-control" name="target">
                                                    <option selected>Pilih</option>
                                                        <option>SEMUA DUSUN</option>
                                                        <option>PLOSO</option>
                                                        <option>BENGKELO KIDUL</option>
                                                        <option>GLURAN</option>
                                                        <option>LEPIT</option>
                                                </select>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="cari">Cari Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header">
                                        Filter by nomor KK 
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                        <form action="../admin/page_admin.php?kolom=no_kk&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                        <label for="input" class="mb-1 mt-1" >No KK</label>
                                        <input type="text" name="input" class="form-control" placeholder="Isi dengan huruf kapital" style="margin-bottom: 5px;" required>

                                        <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                            <div class="input-group" >
                                                <select class="form-control form-control" name="target">
                                                    <option selected>Pilih</option>
                                                        <option>SEMUA DUSUN</option>
                                                        <option>PLOSO</option>
                                                        <option>BENGKELO KIDUL</option>
                                                        <option>GLURAN</option>
                                                        <option>LEPIT</option>
                                                </select>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="cari">Cari Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header">
                                        Filter by Agama
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                        <form action="../admin/page_admin.php?kolom=agama&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                            <label for="input" class="mb-1 mt-1" >Agama</label>
                                            <div class="input-group">
                                                <select class="form-control form-control" name="input">
                                                    <option selected>Pilih</option>
                                                        <option>ISLAM</option>
                                                        <option>KRISTEN</option>
                                                        <option>KATOLIK</option>
                                                        <option>HINDU</option>
                                                        <option>BUDDHA</option>
                                                        <option>KONG HU CU</option>
                                                </select>
                                            </div>

                                            <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                            <div class="input-group" >
                                                <select class="form-control form-control" name="target">
                                                    <option selected>Pilih</option>
                                                        <option>SEMUA DUSUN</option>
                                                        <option>PLOSO</option>
                                                        <option>BENGKELO KIDUL</option>
                                                        <option>GLURAN</option>
                                                        <option>LEPIT</option>
                                                </select>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="cari">Cari Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header">
                                        Filter by Pendidikan
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                        <form action="../admin/page_admin.php?kolom=pendidikan&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                            <label for="input" class="mb-1 mt-1" >Pendidikan</label>
                                            <div class="input-group">
                                                <select class="form-control form-control" name="input">
                                                    <option selected>Pilih</option>
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

                                            <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                            <div class="input-group" >
                                                <select class="form-control form-control" name="target">
                                                    <option selected>Pilih</option>
                                                        <option>SEMUA DUSUN</option>
                                                        <option>PLOSO</option>
                                                        <option>BENGKELO KIDUL</option>
                                                        <option>GLURAN</option>
                                                        <option>LEPIT</option>
                                                </select>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="cari">Cari Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="card">
                                        <div class="card-header">
                                            Filter by Jenis Mutasi
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                            <form action="../admin/page_admin.php?admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                                <label for="input" class="mb-1 mt-2" >Jenis Mutasi</label>
                                                    <div class="input-group" >
                                                        <select class="form-control form-control" name="input">
                                                            <option selected>Pilih</option>
                                                                <option>MUTASI MASUK</option>
                                                                <option>MUTASI KELUAR</option>
                                                                <option>WARGA LOKAL</option>
                                                        </select>
                                                    </div>
                                                
                                                <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                                    <div class="input-group" >
                                                        <select class="form-control form-control" name="target">
                                                            <option selected>Pilih</option>
                                                                <option>SEMUA DUSUN</option>
                                                                <option>PLOSO</option>
                                                                <option>BENGKELO KIDUL</option>
                                                                <option>GLURAN</option>
                                                                <option>LEPIT</option>
                                                        </select>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="pindah">Cari Data</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-sm-2">
                                    <div class="card">
                                        <div class="card-header">
                                            Filter by Umur
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                            <form action="../admin/page_admin.php?kolom=no_kk&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                            <label  class="mb-1 mt-1" >Range Umur</label>
                                            <div class="input-group ">
                                                <input type="number" name="umur1" class="form-control" placeholder="0" style="margin-bottom: 5px;" required>
                                                <span class="input-group-text" style="margin-bottom: 5px;">-</span>
                                                <input type="number" name="umur2" class="form-control" placeholder="150" sty le="margin-bottom: 5px;" required>
                                            </div>
                                            <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                                <div class="input-group" >
                                                    <select class="form-control form-control" name="target">
                                                        <option selected>Pilih</option>
                                                            <option>SEMUA DUSUN</option>
                                                            <option>PLOSO</option>
                                                            <option>BENGKELO KIDUL</option>
                                                            <option>GLURAN</option>
                                                            <option>LEPIT</option>
                                                    </select>
                                                </div>
                                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                    <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="hitung">Cari Data</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>

                            

                            <!-- <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header">
                                        Filter by Status Perkawinan
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Inputkan atau pilih kategori data yang ingin dicari lalu tekan button dan lihat hasil pencarian pada tabel</p>
                                        <form action="../admin/page_admin.php?kolom=kawin&admin=<?= $_GET["admin"]?>&alamat_user=<?= $_GET["alamat_user"]?>" method="POST" >
                                            <label for="input" class="mb-1 mt-1" >Status Perkawinan</label>
                                            <div class="input-group">
                                                <select class="form-control form-control" name="input">
                                                <option selected>Pilih</option>
                                                <option>BELUM KAWIN</option>
                                                <option>KAWIN BELUM TERCATAT</option>
                                                <option>KAWIN TERCATAT</option>
                                                <option>CERAI HIDUP</option>
                                                <option>CERAI MATI</option>
                                                </select>
                                            </div>

                                            <label for="target" class="mb-1 mt-2" >Target Wilayah Filter</label>
                                            <div class="input-group" >
                                                <select class="form-control form-control" name="target">
                                                    <option selected>Pilih</option>
                                                        <option>SEMUA DUSUN</option>
                                                        <option>PLOSO</option>
                                                        <option>BENGKELO KIDUL</option>
                                                        <option>GLURAN</option>
                                                        <option>LEPIT</option>
                                                </select>
                                            </div>
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-primary mt-3 me-md-2 " name="cari">Cari Data</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> -->

                        </div>  
                        
                        
                        <!-- akhir Isi Konten -->
                    </div>
                </div>