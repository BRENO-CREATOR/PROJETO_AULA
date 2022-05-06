<?php
            require_once "../DAO/DAOCargo.php";
            require_once '../MODELO/Cargo.php';
            require_once '../DAO/CONEXAO.php';
            $DC = new DAOCargo();
            $lista = $DC->listAll();

            echo '<br>';
            
            foreach ($lista as $linha) {
                echo $linha['cod'] . $linha['nome'];
            }
            
            ?>