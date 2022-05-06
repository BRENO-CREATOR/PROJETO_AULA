<!DOCTYPE html>
<html lang="en">

<?php
    require_once "../DAO/DAOCargo.php";
    require_once "../MODELO/Cargo.php";
    require_once "../DAO/DAOUsuario.php";
    require_once "../DAO/CONEXAO.php";
    require_once "../MODELO/Usuario.php";

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Usuario.css">
    <title>Cadastro de usuários</title>
</head>
<body>
    <form action="../PHP/CadastroUsuario.php" method="POST">

        <div>
            <h1 id='titulo'>Cadastro de Usuários</h1><br>
        </div>

        <div class="normal">
            <fieldset>
                <div class='campo'>
                    <label for="name">Nome: </label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class='campo'>
                    <label for="cargo">Cargo: </label>
                    <select name="cargo" id="cargo">

                        <option selected desabled value="" required>Selecione: </option>

                        <?php
                        
                            $d = new DAOCargo();

                            $lista = $d->listAll();

                            if(count($lista)>0){
                                foreach ($lista as $linha) {
                                    echo "<option value='{$linha['cod']}'>{$linha['nome']}</option>";
                                }
                            }
                        
                        ?>

                    </select>
                </div>

                <div class='campo'>
                    <label for="rg">RG: </label>
                    <input type="number" name="rg" id="rg" required>
                    <label class='obs' for="rg">Apenas números* </label>
                </div>

                <div class='campo'>
                    <label for="dt">Data de nascimento: </label>
                    <input type="date" name="dt" id="dt" required><br>
                </div>
            </fieldset>
        </div>
        
        <div>
            <button class="botao">Cadastrar</button>
        </div>

    </form>
</body>
</html>