<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamModel extends Model
{
    protected $table      = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $useTimestamps = true;

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_peminjam', 'berkas_dipinjam', 'tujuan', 'nama_pegawai'];
}
