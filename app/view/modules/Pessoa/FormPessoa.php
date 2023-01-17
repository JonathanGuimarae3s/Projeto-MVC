<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    label,input{display: block;}
  </style>
</head>

<body>

  <fieldset>
    <legend> Cadastro de Pessoa</legend>
    <form action="/pessoa/form/save" method="post">
    <label for="nome">
        Nome:
      </label>
      <input type="text" name="nome" id="nome">

      <label for="cpf">
        CPF:
      </label>
      <input type="text" name="cpf" id="cpf">
      <label for="dataNascimento">
     Data de nascimento:
      </label>
      <input type="date" name="dataNascimento" id="dataNascimento">
      <input type="submit" value="Salvar">
    </form>
  </fieldset>

</body>

</html>