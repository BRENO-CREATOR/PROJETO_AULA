<?php

require_once 'Tipo.php';
require_once 'Secao.php';

class Material
{
        private $cod;
        private $nome;
        private $tipo;
        private $secao;
        private $autor;
        private $editora;
        private $dt_public;


        public function __construct()
        {
                $this->tipo = new Tipo();
                $this->secao = new Secao();
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
         * Get the value of tipo
         */
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }

        /**
         * Get the value of secao
         */
        public function getSecao()
        {
                return $this->secao;
        }

        /**
         * Set the value of secao
         *
         * @return  self
         */
        public function setSecao($secao)
        {
                $this->secao = $secao;

                return $this;
        }

        /**
         * Get the value of autor
         */
        public function getAutor()
        {
                return $this->autor;
        }

        /**
         * Set the value of autor
         *
         * @return  self
         */
        public function setAutor($autor)
        {
                $this->autor = $autor;

                return $this;
        }

        /**
         * Get the value of editora
         */
        public function getEditora()
        {
                return $this->editora;
        }

        /**
         * Set the value of editora
         *
         * @return  self
         */
        public function setEditora($editora)
        {
                $this->editora = $editora;

                return $this;
        }

        /**
         * Get the value of dt_public
         */
        public function getDtPublic()
        {
                return $this->dt_public;
        }

        /**
         * Set the value of dt_public
         *
         * @return  self
         */
        public function setDtPublic($dt_public)
        {
                $this->dt_public = $dt_public;

                return $this;
        }
}
