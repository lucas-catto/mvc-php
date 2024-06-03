<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista Pessoas</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data De Nacimento</th>
            </tr>

            <?php
                foreach ($model->rows as $row) {

                    echo "<tr>";
                        echo "<th>$row->id</th>";
                        echo "<th>$row->pessoaNome</th>";
                        echo "<th>$row->pessoaCPF</th>";
                        echo "<th>$row->pessoaDataNascimento</th>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>
