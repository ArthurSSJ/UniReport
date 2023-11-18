<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Home;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'UniReport - Início'
        ];
        
        $reports = new Home();
        $report = $reports->findAll();
        echo "<pre>";
        print_r($report);
        echo "</pre>";

        echo view('common/header', $data);
        echo view('home');
        echo view('common/footer');
        /*mesma coisa do código acima
         return view('common/header') . view('home') . view('common/footer') */


    }

    public function insert()
    {      
        $validated = $this->validate([
            'mensagem' => 'required'
        ], [
            'mensagem' => [
                'required' => 'Este campo é obrigatório'
            ]
        ]);
        if (!$validated) {
            return redirect()->route('home');
        }

        $insert = (new Home())->insert([
            'mensagem' => strip_tags((string)$this->request->getPost('mensagem')),
            'arquivo_media' => strip_tags((string)$this->request->getPost('arquivo_media'))
        ]);

        if ($insert) {
            return redirect()->route('home');
        }else {
            var_dump('nao cadastrou');
            die;
        }
    }
}
