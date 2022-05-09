<?php
        require_once './Desafio.php';
        require_once './CONEXAO.php';
        require_once './DAODesafio.php';

        $c = new Desafio();
        $c->getNome();

        $c->setNome("Breno");

        $d = new DAODesafio();

        if($d->insert($c)){
             echo 'incluido com sucesso!';
        }
?>