<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'UniReport - Início'
        ];

        echo view('common/header', $data);
        echo view('admin');
        echo view('common/footer');
    }
}
