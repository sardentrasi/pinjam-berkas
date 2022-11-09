<?= $this->extend('layout/template'); ?>

<?= $this->section('template'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Data Pegawai
                </div>
                <div class="card-body">
                    <div class="row">
                        <p>
                            <a href="/admin/pegawai/tambahpegawai" type="button" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Data</a>
                        </p>
                    </div>

                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">No Urut</th>
                                    <th>Nama Pegawai</th>
                                    <th>NIK</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n = 1 ?>
                                <?php foreach ($pegawai as $data) : ?>
                                    <tr>
                                        <td><?= $n++ ?></td>
                                        <td><?= $data['nama_pegawai'] ?></td>
                                        <td><?= $data['nik'] ?></td>
                                        <td class="text-center">

                                            <button class="btn btn-warning btn-flat"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger btn-flat"><i class="fas fa-trash"></i></button>


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
<?= $this->endsection(); ?>