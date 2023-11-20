<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Admin;
use App\Models\Home;

class AdminController extends BaseController
{
    public function index()
    {
        $reports = new Home();
        $report = $reports->orderBy('id', 'DESC')->paginate(5);

        $data = [
            'title' => 'UniReport - Início'
        ];

        echo view('common/header', $data);
        echo view('admin', ['report' => $report, 'pager' => $reports->pager]);
        echo view('common/footer');
    }

    public function delete($id)
    {
        $reports = new Home();
        $reports->delete($id);
        return redirect()->to(base_url('/admin'))->with('status', 'Registro deletado com sucesso.');
    }
}
