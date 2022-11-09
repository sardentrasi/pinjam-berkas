<?php

namespace App\Controllers;

use App\Models\BerkasModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use Config\Validation;

class Berkas extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new BerkasModel();
    }
    public function berkas()
    {
        session();

        $data = [
            'title' => 'Data Berkas',
            'berkas' => $this->model->findAll()
        ];

        // dd($data);

        return view('admin/databerkas', $data);
    }
    public function create()
    {
        $data = [
            'title' => "Tambah Berkas",
            'validation' => \Config\Services::validation()
        ];

        return view('admin/tambahberkas', $data);
    }

    public function save()
    {

        //validasi 

        if (!$this->validate([
            'berkas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul {field} harus diisi.'
                ]
            ],
            'nomor' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor berkas harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            // dd($validation);
            return redirect()->to('/admin/databerkas/tambahberkas')->withInput()->with('validation', $validation);
        }

        $this->model->save([
            'judul_berkas' => $this->request->getvar('berkas'),
            'nomor_berkas' => $this->request->getVar('nomor'),
            'nomor_rak' => $this->request->getVar('rak'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('/admin/databerkas');
    }
}
