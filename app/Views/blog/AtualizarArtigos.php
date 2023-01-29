<?php
$this->dados;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="insert" method="POST">
        <input type="hidden" name="">
        <label for="titulo">
            <p>TITULO</p>
            <input type="text" name="titulo" id="titulo">

        </label>
        <label for="conteudo">
            <p>conteudo</p>

            <input type="text" name="conteudo" id="conteudo">

        </label>
        <input type="submit" value="cadastrar">
    </form>
</body>

</html>