<?php

namespace App\Models;

use CodeIgniter\Model;

class BerkasModel extends Model
{
    protected $table      = 'berkas';
    protected $primaryKey = 'id_berkas';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul_berkas', 'nomor_berkas', 'nomor_rak', 'status'];
}
