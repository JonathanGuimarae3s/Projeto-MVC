<?php
// class que conversara com o db
class PessoaModel
{

  // replica das colunas do db
  public $id, $nome, $cpf, $dataNascimento;
  public $rows;
  public function save()
  {
    include 'DAO/PessoaDao.php';
    $dao = new PessoaDAO(); //fazendo a conexao com o db
    $dao->insert($this);
  }
  public function getAllRows()
  {
    include 'DAO/PessoaDao.php';

    $dao = new PessoaDAO();

    $this->rows = $dao->select();
  }
}
