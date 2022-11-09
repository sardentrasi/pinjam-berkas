<?php

namespace App\Controllers;

use App\Models\PeminjamModel;
use App\Models\BerkasModel;
use App\Models\PegawaiModel;
use App\Models\UserDatatable;
use Config\Services;
use CodeIgniter\Exceptions\PageNotFoundException;


class Peminjaman extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new PeminjamModel();
        $this->modelberkas = new BerkasModel();
        $this->modelpegawai = new PegawaiModel();
    }
    public function peminjam()
    {
        // session();
        // $data = [
        //     'peminjam' => $this->model->findAll(),
        //     'title' => 'Data Peminjam'
        // ];

        // return view('admin/peminjam', $data);

        $data = [
            'title' => 'Data Peminjam'
        ];

        return view('admin/peminjam', $data);
    }
    public function ajaxList()
    {
        $request = Services::request();
        $datatable = new UserDatatable($request);

        if ($request->getMethod(true) === 'POST') {
            $lists = $datatable->getDatatables();
            $data = [];
            $no = $request->getPost('start');

            foreach ($lists as $list) {
                $no++;
                $row = [];
                $row[] = $no;
                $row[] = $list->nama_peminjam;
                $row[] = $list->berkas_dipinjam;
                $data[] = $row;
            }

            $output = [
                'draw' => $request->getPost('draw'),
                'recordsTotal' => $datatable->countAll(),
                'recordsFiltered' => $datatable->countFiltered(),
                'data' => $data
            ];

            echo json_encode($output);
        }
    }


    public function create()
    {

        $data = [
            'berkas' => $this->modelberkas->findAll(),
            'pegawai' => $this->modelpegawai->findAll(),
            'title' => 'Tambah Peminjam'
        ];

        // dd($data);
        return view('admin/tambahpeminjam', $data);
    }
    public function save()
    {
        //validasi
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            dd($validation);

            return redirect()->to('admin/datapeminjam/tambahdata')->withInput()->with('validation', $validation);
        }


        $this->model->save([
            'nama_peminjam' => $this->request->getVar('nama'),
            'berkas_dipinjam' => $this->request->getvar('berkas'),
            'tujuan' => $this->request->getVar('tujuan'),
            'nama_pegawai' => $this->request->getVar('petugas')

        ]);

        session()->setFlashdata('pesan', 'Data Peminjam Berhasil Ditambahkan');

        return redirect()->to('/admin/datapeminjam');
    }
}
