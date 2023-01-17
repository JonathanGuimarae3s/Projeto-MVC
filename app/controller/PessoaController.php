<?php

class PessoaController
{
  public static function index()
  {include 'model/PessoaModel.php';
    $model = new PessoaModel();
    $model->getAllRows();
    include 'view/modules/Pessoa/ListaPessoa.php';
  }
  public static function form()
  {
    include 'view/modules/Pessoa/FormPessoa.php';
  }
  public static function save()
  {
    include 'model/PessoaModel.php';
    $model = new PessoaModel(); //fazendo uma replica dos atrb da tabela do db
    $model->nome = $_POST['nome']; //atribuindo os valores do post aos atributos
    $model->cpf = $_POST['cpf'];
    $model->dataNascimento = $_POST['dataNascimento'];
    $model->save(); //chamando o metodo save do objeto para salvar no db
    header('location:/pessoa');
  }
}
