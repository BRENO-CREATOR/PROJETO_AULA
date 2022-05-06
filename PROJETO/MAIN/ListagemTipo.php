<!DOCTYPE html>
<html lang="en">

<?php
    define ('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');

    require_once '../MODELO/Tipo.php';
    require_once '../DAO/CONEXAO.php';
    require_once '../DAO/DAOTipo.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <h2>Listagem de Cargos</h2>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Descrição</th>
        </tr>
        
        <?php

            //Teste de listagem

            $DC = new DAOTipo();
            $lista = $DC->listAll();

            echo '<br>';
            
            foreach ($lista as $linha) {
                echo '<tr>';
                foreach ($linha as $key => $value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }

            echo '<br>';
            print_r($lista);
            echo '<br>';
        ?>
    </table>
</body>