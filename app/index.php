<?php
include 'controller/PessoaController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch ($url) {
  case '/':
    echo "pagina inicial";
    break;

  case '/pessoa':
    PessoaController::index();
    break;
  case '/pessoa/form':
    PessoaController::form();
    break;
  case '/pessoa/form/save':
    PessoaController::save();
    break;


  default:
    echo "erro 404";
    break;
}
