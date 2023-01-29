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


}