<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog
{

    private array $dados;
    private object $blogModel;
    public function __construct()
    {
        $this->blogModel = new \App\Models\BlogModel(); //instanciando a class model

    }
    public function index()
    {


        $this->dados['artigos'] = $this->blogModel->listar(); //chamando todos os itens do db
        $carregarView = new \Core\ConfigView("Views/blog/listarArtigos", $this->dados);
        $carregarView->renderizar();
    }
    public function insert()
    {
        //
        $this->blogModel->titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->blogModel->conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->blogModel->insert();
        header('Location: ./index');
    }
    public function form()
    {
        $carregarView = new \Core\ConfigView("Views/blog/CadastrarArtigos", []);
        $carregarView->renderizar();
    }
    public function editar_artigo()
    {
        $id = $_GET['id'];
        $this->dados['artigo'] = $this->blogModel->selectById($id);
        $carregarView = new \Core\ConfigView("Views/blog/AtualizarArtigos", $this->dados);
        $carregarView->renderizar();
    }
    public function update()
    
    {
        $this->blogModel->id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $this->blogModel->titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->blogModel->conteudo = filter_input(INPUT_POST, 'conteudo', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->blogModel->update();
        header('Location: ./index');
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->blogModel->delete($id);
        header('Location: ./index');
    }
}
