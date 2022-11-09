<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Request;

class Pegawai extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new PegawaiModel();
    }
    public function pegawai()
    {
        session();
        $data = [
            'title' => 'Pegawai',
            'pegawai' => $this->model->findAll()
        ];

        return view('admin/pegawai', $data);
    }
    public function create()
    {

        $data = [
            'title' => 'Tambah Data Pegawai'
        ];

        return view('admin/tambahpegawai', $data);
    }
    public function save()
    {
        //validasi
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/admin/pegawai/tambahpegawai')->withInput()->with('validation', $validation);
        }

        $this->model->save([
            'nama_pegawai' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik')
        ]);
        session()->setFlashdata('pesan', 'Pegawai berhasil ditambahkan.');

        return redirect()->to('/admin/pegawai');
    }
}
