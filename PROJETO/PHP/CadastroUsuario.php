<!DOCTYPE html>
<html lang="en">
<?php
    define ('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');

    require_once '../MODELO/Usuario.php';
    require_once '../DAO/CONEXAO.php';
    require_once '../DAO/DAOUsuario.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Usuários</h2>

<?php

    $nome = filter_input(INPUT_POST,'name');
    $cargo = $_POST['cargo'];
    $rg = filter_input(INPUT_POST,'rg');
    $dt = filter_input(INPUT_POST,'dt');

    $usuario = new Usuario();

    $usuario->setNome($nome);
    $usuario->setCargo($cargo);
    $usuario->setRg($rg);
    $usuario->setDtNasc($dt);

    $dao = new DAOUsuario();
    
    if($dao->insert($usuario)){
        echo 'Usuário salvo com sucesso!';
    } else {
        echo 'Usuário com problema!';
    }

?>

    <hr>
    <a href="../MAIN/ListagemUsuario.php">Listagem</a>
    <a href="../FORMS/FormUsuario.php">Cadastro</a>

</body>
</html>