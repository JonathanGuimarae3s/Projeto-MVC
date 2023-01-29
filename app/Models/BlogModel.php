<?php

namespace App\Models;

class BlogModel extends Conn
{
    private object $conn;
    public function listar()
    {
        $this->conn = $this->connect();
        $query = "SELECT * FROM artigos";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();



    }
    public function inserir()
    {
        $query = "INSERT INTO artigos VALUES ?,?,?;";

    }
}