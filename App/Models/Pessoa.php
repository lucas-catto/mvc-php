<?php

class Pessoa
{
    public $id;
    public $nome;
    public $cpf;
    public $data_nascimento;

    public $rows;

    public function save ()
    {
        include("./DAO/PessoaDAO.php");

        $dao = new PessoaDAO();
        $dao->insert($this);
    }

    public function getAllRows ()
    {
        include("./DAO/PessoaDAO.php");

        $dao = new PessoaDAO();
        
        $this->rows = $dao->select();
    }
}
