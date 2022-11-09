<?php $this->extend('layout/template') ?>

<?php $this->section('template') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Tambah Data Berkas
                </div>
                <form action="/admin/tambahberkas/save" method="POST">
                    <?= csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="berkas">Judul Berkas</label>
                            <input type="text" class="form-control <?= ($validation->hasError('berkas')) ? 'is-invalid' : ''; ?>" id="berkas" name="berkas" placeholder="Judul Berkas" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('berkas') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nomor">Nomor Berkas</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nomor')) ? 'is-invalid' : ''; ?>" id="nomor" name="nomor" placeholder="Nomor Berkas" value="<?= old('nomor'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nomor') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rak">Nomor Rak</label>
                            <input type="text" class="form-control" id="rak" name="rak" placeholder="Nomor Rak">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option>dipinjam</option>
                                <option>dikembalikan</option>
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

<?php $this->endsection() ?>