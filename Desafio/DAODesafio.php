<?php
class DAODesafio
{

        public function insert(Desafio $cargo)
        {
                $sql = 'insert into tabelinha (nome) values (?);';
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $cargo->getNome());

                if ($pst->execute()) {
                        return true;
                } else {
                        return false;
                }
        }

        public function listAll()
        {
                $lista = [];
                $pst = Conexao::getPreparedStatement('select * from TABELINHA;');
                $pst->execute();
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
                return $lista;
        }
}
