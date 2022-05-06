<?php
require_once 'Emprestimo.php';
require_once 'Meterial.php';

class Itens
{
        private $cod;
        private $emp;
        private $mat;

        public function __construct()
        {
                $this->mat = new Material();
                $this->emp = new Emprestimpo();
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
         * Get the value of emp
         */
        public function getEmp()
        {
                return $this->emp;
        }

        /**
         * Set the value of emp
         *
         * @return  self
         */
        public function setEmp($emp)
        {
                $this->emp = $emp;

                return $this;
        }

        /**
         * Get the value of mat
         */
        public function getMat()
        {
                return $this->mat;
        }

        /**
         * Set the value of mat
         *
         * @return  self
         */
        public function setMat($mat)
        {
                $this->mat = $mat;

                return $this;
        }
}
