<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Pessoa</title>

        <style>
            label,
            input
            { display:block }
        </style>
    </head>
    <body>
        <fieldset>
            <legend>Cadastro de Pessoa</legend>

            <form action="/pessoa/form/save" method="post">
                
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">

                <label for="cpf">CPF</label>
                <input type="number" name="cpf" id="cpf">

                <label for="data_de_nascimento">Data de Nascimento</label>
                <input type="date" name="data_de_nascimento" id="data_de_nascimento">
                
                <button type="submit">Salvar!</button>
            </form>
        </fieldset>
    </body>
</html>
