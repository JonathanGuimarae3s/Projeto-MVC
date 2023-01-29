<?php
namespace App\Controllers;

class Blog
{
    private array $dados;


    public function index()
    {
        $listar = new \App\Models\BlogModel(); //instanciando a class model

        $this->dados['artigos'] = $listar->listar(); //chamando todos os itens do db
        $carregarView = new \Core\ConfigView("Views/blog/listarArtigos", $this->dados);
        $carregarView->renderizar();
    }
}