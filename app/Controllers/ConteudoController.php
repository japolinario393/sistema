<?php

namespace App\Controllers;
use App\Models\ConteudoModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ConteudoController extends BaseController
{
    // Em app/Controllers/BaseController.php (ou dentro do seu Controller específico)
    protected $helpers = ['url'];
    public function index(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(1);
        return view('home', $dados);

        
    }
     public function contato(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(2);
        return view('contato', $dados);
        
    }
     public function produtotech () : string
    {
    $conteudoModel = new ConteudoModel();
    $dados['conteudo'] = $conteudoModel->find(3);
    return view('produtotech', $dados);
    }
    public function quemsou () : string
    {
     $conteudoModel = new ConteudoModel();
     $dados['conteudo'] = $conteudoModel->find(4);
     return view('quemsou', $dados);
    }
}