<?php

class Conexao
{
        private static $dsn = 'mysql:host=10.50.4.167;dbname=banquinho;port=3307';
        private static $usuario = 'desafio';
        private static $senha = 'desafio';
        private static $conexao = null;

        public static function getConexao(): PDO
        {
                if (Conexao::$conexao == null) {
                        try {
                                Conexao::$conexao = new PDO(Conexao::$dsn, Conexao::$usuario, Conexao::$senha);
                        } catch (PDOException $e) {
                                echo $e->getMessage();
                        }
                }
                return Conexao::$conexao;
        }

        public static function getPreparedStatement($sql): PDOStatement
        {
                $pst = null;
                if (Conexao::getConexao() != null) {
                        try {
                                $pst = Conexao::$conexao->prepare($sql);
                        } catch (PDOException $e) {
                                echo $e->getMessage();
                        }
                }
                return $pst;
        }
}