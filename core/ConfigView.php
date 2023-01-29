<?php

namespace Core;



class ConfigView
{
    private string $nome;
    private array $dados;
    public function __construct($nome, array $dados)
    {
        $this->nome = $nome;
        $this->dados = $dados;

    }
    public function renderizar()
    {
        if (file_exists('app/' . $this->nome . '.php')) {
            // verifica se o arquivo existe
            include 'app/' . $this->nome . '.php';

        } else {
            echo "error ao carregar";
        }

    }


}