<?php

namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'id_pegawai';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_pegawai', 'nik'];
}
