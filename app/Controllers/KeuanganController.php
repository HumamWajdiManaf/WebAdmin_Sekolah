<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KeuanganController extends BaseController
{
    public function index()
    {
        return view('v_keuangan');
    }
}
