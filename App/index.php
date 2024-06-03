<?php

include("./Controllers/PessoaController.php");

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url)
{
    case '/':
        echo "Página Inicial";
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
        echo "Erro 404";
        break;
}
