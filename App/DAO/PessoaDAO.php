<?php

class PessoaDAO
{
    private $conexao;

    public function __construct ()
    {
        $this->conexao = new PDO('mysql:host=localhost;dbname=mvc_php', 'root', '');
    }

    public function insert (Pessoa $model)
    {
        $sql = "INSERT INTO pessoa (pessoaNome, pessoaCPF, pessoaDataNascimento) VALUES (?,?,?)";
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->cpf);
        $stmt->bindValue(3, $model->data_nascimento);

        $stmt->execute();
    }

    public function update (Pessoa $model)
    {

    }

    public function select ()
    {
        $sql = "SELECT * FROM pessoa";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function delete ()
    {

    }
}
