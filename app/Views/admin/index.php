<?= $this->extend('layout/template'); ?>

<?= $this->section('template'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header text-center">
                    Selamat Datang di Aplikasi Peminjaman Arsip Berkas Perkara. Bagian Hukum

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-table"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Data Peminjaman</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Data Pegawai Arsip</span>
                                    <span class="info-box-number">41,410</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-sm">
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Berkas</span>
                                    <span class="info-box-number">760</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <div class="row">
                        <div class="col"></div>
                        <div class="col">
                            <a href="/admin/datapeminjam/tambahdata" type="button" class="btn btn-block btn-primary btn-flat"><i class="fas fa-plus"></i> Tambah Data Peminjam</a>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.card -->
    </div>
</div>

<?= $this->endSection(); ?>