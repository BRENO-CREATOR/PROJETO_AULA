<!DOCTYPE html>
<html lang="en">

<?php
    require_once "../DAO/DAOCargo.php";
    require_once "../DAO/CONEXAO.php";
    require_once "../MODELO/Cargo.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cargos</title>
    <link rel="stylesheet" href="../CSS/Cargo.css">
</head>
<body>
    

    <form action="../PHP/CadastroUsuario.php" method="POST">
        
        <h1 class="titulo">Cadastro de Cargos</h1><br>
        <!--<label for="cod">Código: </label>
        <input type="number" neme="cod" id="cod"><br><br>-->
        <div class="normal">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="cargo">Cargo: </label><br>
                    <input type="text" name="cargo" id="cargo" required><br>
                </div>
            </fieldset>
        </div>
        <!--
            <label for="estado">Estado: </label>
            <select name="" id=""></select><br><br>
        -->
        <!--
            <label for="comentario">Comentários: </label>
            <textarea name="comentario" id="comentario" cols="20" rows="10"></textarea>
        -->

        <button class="botao">Cadastrar</button>
    </form>
</body>
</html>