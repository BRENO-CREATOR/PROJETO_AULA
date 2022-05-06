<?php

require_once 'Usuario.php';

class Emprestimpo
{
        private $cod;
        private $dt_emp;
        private $dt_dev;
        private $usuario;
        private $situacao;


        public function __construct()
        {
                $this->usuario = new Usuario();
                $this->situacao = true;
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
         * Get the value of dt_emp
         */
        public function getDtEmp()
        {
                return $this->dt_emp;
        }

        /**
         * Set the value of dt_emp
         *
         * @return  self
         */
        public function setDtEmp($dt_emp)
        {
                $this->dt_emp = $dt_emp;

                return $this;
        }

        /**
         * Get the value of dt_dev
         */
        public function getDtDev()
        {
                return $this->dt_dev;
        }

        /**
         * Set the value of dt_dev
         *
         * @return  self
         */
        public function setDtDev($dt_dev)
        {
                $this->dt_dev = $dt_dev;

                return $this;
        }

        /**
         * Get the value of usuario
         */
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

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
