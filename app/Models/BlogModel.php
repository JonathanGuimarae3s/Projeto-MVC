<?php

namespace App\Models;

class BlogModel extends Conn
{

    public string $conteudo, $titulo;
    public int $id;

    private object $conn;
    public function __construct()
    {
        $this->conn = $this->connect();

    }
    public function selectById(int $id){
        $query = "SELECT * FROM artigos WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function listar()
    {

        $query = "SELECT * FROM artigos";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();



    }
    public function insert()
    {
        $conteudo = $this->conteudo;
        $titulo = $this->titulo;
        $query = "INSERT INTO artigos (titulo, conteudo) VALUES (?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $conteudo);


        $stmt->execute();

    }
    public function delete(int $id)
    {
        $query = "DELETE FROM `artigos` WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();




    }
    public function update()
    {
        $id = $this->id;
        $conteudo = $this->conteudo;
        $titulo = $this->titulo;
        $query = "UPDATE artigos SET titulo=?, conteudo=? WHERE id = ? ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $conteudo);
        $stmt->bindValue(3, $id);



        $stmt->execute();

    }
}