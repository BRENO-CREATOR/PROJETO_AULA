<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Cargo.css">
    <title>Cadastro</title>
</head>
<body>
    <form action="../PHP/CadastroTipo.php" method="POST">
        <h1 class="titulo">Cadasto de Tipos</h1><br>
        <div class="normal">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="tipo">Tipo: </label><br>
                    <input type="text" name="tipo" id="tipo" required><br>
                </div>
            </fieldset>
        </div>
        <button class="botao">Cadastrar</button>
    </form>
</body>
</html>