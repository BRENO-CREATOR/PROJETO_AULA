<?php
    class Carro {
        private $id;
        private $fabricante;
        private $nome;
        private $ano;

        public function __construct(){

        } 

        public function setId($id)
        {
            $this -> id = $id;
        }

        public function setFabricante($fabricante)
        {
            $this -> fabricante = $fabricante;
        }

        public function setNome($nome)
        {
            $this -> nome = $nome;
        }

        public function setAno($ano)
        {
            $this -> ano = $ano;
        }

        public function getId()
        {
            return $this -> id;
        }

        public function getNome()
        {
            return $this -> nome;
        }

        public function getAno()
        {
            return $this -> ano;
        }

        public function getfabricante()
        {
            return $this -> fabricante;
        }
    }

    $a = new Carro();

    $a -> setId(1);
    $a -> setFabricante('Feat');
    
    echo $a -> getId() . '<br>';
    echo $a -> getFabricante() . '<br>';
?>