<?php
// faz acesso ao banco de dados
/*
      cada vez que a class dao for instaciada
      eu vu chamar o metodo construtor,que por sua vez 
      fara uma ligação com o db
     */

class PessoaDAO
{
  private $connect;
  public function __construct()
  {

    $dsn = "mysql:host=localhost:3306;dbname=mvc";
    $this->connect = new PDO($dsn, 'root', '');
  }

  public function insert(PessoaModel $model)
  {
    $sql = "INSERT INTO pessoa (nome,cpf,dataNascimento) VALUES (?,?,?)";
    $stmt = $this->connect->prepare($sql); //preparando a string
    $stmt->bindValue(1, $model->nome); //substituindo o valor peelo seu marcado
    $stmt->bindValue(2, $model->cpf);
    $stmt->bindValue(3, $model->dataNascimento);
    $stmt->execute(); //executando o comando
  }
  public function update()
  {
  }
  public function select()

  {
    $sql = "SELECT * FROM pessoa";
    $stmt = $this->connect->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
}
