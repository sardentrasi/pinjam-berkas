<?= $this->extend('layout/template'); ?>

<?= $this->section('template'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="col">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('pesan') ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Data Peminjaman Arsip Berkas Perkara
                </div>
                <div class="card-body">
                    <div class="row">
                        <p>
                            <a href="/admin/datapeminjam/tambahdata" type="button" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah Data</a>
                            <a href="#" type="button" class="btn btn-primary btn-flat"><i class="fa fa-download"></i> Cetak Data</a>
                            <a href="#" type="button" class="btn btn-primary btn-flat"><i class="fa fa-download"></i> Cetak PDF</a>
                        </p>
                    </div>

                    <div class="row">
                        <table id="user-table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> No</th>
                                    <th>Nama Peminjam</th>
                                    <th>Berkas yang Dipinjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Keperluan</th>
                                    <th>Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= base_url() ?>/plugins/datatables/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#user-table').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('user/ajaxList') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [],
                "orderable": false,
            }, ],
        });
    });
</script>
<?= $this->endsection(); ?>