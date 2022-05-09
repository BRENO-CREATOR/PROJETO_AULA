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
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Tipos</h2>

<?php

    $nome = filter_input(INPUT_POST, 'tipo');

    $tipo = new Tipo();

    $tipo->setNome($nome);

    $dao = new DAOTipo();
    
    if($dao->insert($tipo)){
        echo 'Tipo salvo com sucesso!';
    } else {
        echo 'Tipo com problema!';
    }

?>

    <hr>
    <a href="../MAIN/ListagemTipo.php">Listagem</a>
    <a href="../FORMS/FormTipo.php">Cadastro</a>

</body>
</html>