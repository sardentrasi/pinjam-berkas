<?php $this->extend('layout/template') ?>

<?php $this->section('template') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Tambah Data Peminjam
                </div>
                <div>
                    <form action="/admin/tambahpeminjam/save" method="POST">
                        <?php csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Peminjam</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="berkas">Berkas</label>
                                <select class="form-control" id="berkas" name="berkas">
                                    <?php foreach ($berkas as $data) : ?>
                                        <option><?= $data['judul_berkas'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tujuan">Tujuan</label>
                                <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Keperluan">
                            </div>
                            <div class="form-group">
                                <label for="petugas">Petugas</label>
                                <select class="form-control" id="petugas" name="petugas">
                                    <?php foreach ($pegawai as $data) : ?>
                                        <option><?= $data['nama_pegawai'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->endsection() ?>