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

        echo view('common/header', $data);
        echo view('home');
        echo view('common/footer');
        /*mesma coisa do código acima
         return view('common/header') . view('home') . view('common/footer') */


    }

    public function insert()
    {      

        $insert = (new Home())->insert([
            'mensagem' => strip_tags((string)$this->request->getPost('mensagem')),
            'arquivo_media' => strip_tags((string)$this->request->getPost('arquivo_media'))
        ]);

        if ($insert) {
            return redirect()->route('home')->with("Problema reportado com sucesso");
        }else {
            var_dump('nao cadastrou');
            die;
        }
    }
}
