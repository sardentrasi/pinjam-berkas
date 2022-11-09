<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;


class Home extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/index', $data);
    }
}
