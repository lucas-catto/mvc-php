<?php

class PessoaController
{
    public static function index ()
    {
        include("./Models/Pessoa.php");

        $model = new Pessoa();
        $model->getAllRows();

        include("./Views/modules/Pessoa/lista_pessoa.php");
    }

    public static function form ()
    {
        include("./Views/modules/Pessoa/form_pessoa.php");
    }

    public static function save ()
    {
        include("./Models/Pessoa.php");

        $model = new Pessoa();
        
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_de_nascimento'];

        $model->save();

        header("Location: /pessoa");
    }
}
