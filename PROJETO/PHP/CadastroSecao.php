<!DOCTYPE html>
<html lang="en">
<?php
    define ('_BASE', $_SERVER['DOCUMENT_ROOT'] . '/dew_1_2021.2/');

    require_once '../MODELO/Secao.php';
    require_once '../DAO/CONEXAO.php';
    require_once '../DAO/DAOSecao.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro de Sessões</h2>

<?php

    $nome = filter_input(INPUT_POST, 'secao');

    $secao = new Secao();

    $secao->setNome($nome);

    $dao = new DAOSecao();
    
    if($dao->insert($secao)){
        echo 'Sessão salva com sucesso!';
    } else {
        echo 'Sessão com problema!';
    }

?>

    <hr>
    <a href="../MAIN/ListagemSecao.php">Listagem</a>
    <a href="../FORMS/FormSecao.php">Cadastro</a>

</body>
</html>