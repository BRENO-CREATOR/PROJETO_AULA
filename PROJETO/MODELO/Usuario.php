<?php

require_once 'Cargo.php';

class Usuario
{
        private $cod;
        private $nome;
        private $cargo;
        private $rg;
        private $dt_nasc;
        private $situacao;

        public function __construct()
        {
                $this->situacao = true;
                $this->cargo = new Cargo();
        }

        /**
         * Get the value of cod
         */
        public function getCod()
        {
                return $this->cod;
        }

        /**
         * Set the value of cod
         *
         * @return  self
         */
        public function setCod($cod)
        {
                $this->cod = $cod;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of cargo
         */
        public function getCargo()
        {
                return $this->cargo;
        }

        /**
         * Set the value of cargo
         *
         * @return  self
         */
        public function setCargo($cargo)
        {
                $this->cargo = $cargo;

                return $this;
        }

        /**
         * Get the value of rg
         */
        public function getRg()
        {
                return $this->rg;
        }

        /**
         * Set the value of rg
         *
         * @return  self
         */
        public function setRg($rg)
        {
                $this->rg = $rg;

                return $this;
        }

        /**
         * Get the value of dt_nasc
         */
        public function getDtNasc()
        {
                return $this->dt_nasc;
        }

        /**
         * Set the value of dt_nasc
         *
         * @return  self
         */
        public function setDtNasc($dt_nasc)
        {
                $this->dt_nasc = $dt_nasc;

                return $this;
        }

        /**
         * Get the value of situacao
         */
        public function getSituacao()
        {
                return $this->situacao;
        }

        /**
         * Set the value of situacao
         *
         * @return  self
         */
        public function setSituacao($situacao)
        {
                $this->situacao = $situacao;

                return $this;
        }
}
