<?php

namespace App\Controllers\Pegawai;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Pegawai',
        ];
        return view('pegawai/home', $data);
    }
}
