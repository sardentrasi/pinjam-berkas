<?php $this->extend('layout/template'); ?>

<?php $this->section('template') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?> </div>
                <?php endif; ?>
            </div>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Data Berkas
                </div>
                <div class="card-body">
                    <div class="row">
                        <p>
                            <a href="/admin/databerkas/tambahberkas" type="button" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Data</a>
                        </p>
                    </div>

                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> No</th>
                                    <th>Judul Berkas</th>
                                    <th>Nomor Berkas</th>
                                    <th>Nomor Rak</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n = 1; ?>
                                <?php foreach ($berkas as $data) : ?>
                                    <tr>
                                        <td><?= $n++ ?>.</td>
                                        <td><?= $data['judul_berkas'] ?></td>
                                        <td><?= $data['nomor_berkas'] ?></td>
                                        <td><?= $data['nomor_rak'] ?></td>
                                        <td><?= $data['status'] ?></td>
                                        <td>
                                            <a href="#" class="btn btn-warning btn-flat"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-flat"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->endsection() ?>