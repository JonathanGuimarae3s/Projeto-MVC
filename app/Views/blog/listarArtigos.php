<?php
foreach ($this->dados['artigos'] as $artigo) {
    extract($artigo);
    echo (
        "id:" . $id .
        "<br>titulo:" . $titulo .
        "<br>conteudo:" . $conteudo . "<hr>"
    );
}
?>