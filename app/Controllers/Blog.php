<?php
namespace App\Controllers;

class Blog
{
    private array $dados;


    public function index()
    {
        $listar = new \App\Models\BlogModel();

        $this->dados['artigos'] = $listar->listar();
        $carregarView = new \Core\ConfigView("Views/blog/listarArtigos",$this->dados['artigos'] );
    }
}