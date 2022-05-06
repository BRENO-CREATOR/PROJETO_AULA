<!DOCTYPE html>
<html lang="en">
<?php
    define ('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');

    require_once '../MODELO/Cargo.php';
    require_once '../DAO/CONEXAO.php';
    require_once '../DAO/DAOCargo.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Cargos</h2>

<?php

    $nome = $_POST['cargo'];

    $cargo = new Cargo();

    $cargo->setNome($nome);

    $dao = new DAOCargo();
    
    if($dao->insert($cargo)){
        echo 'Cargo salvo com sucesso!';
    } else {
        echo 'Cargo com problema!';
    }

?>

    <hr>
    <a href="./Listagem.php">Listagem</a>
    <a href="./FormCadastro.php">Cadastro</a>

</body>
</html>