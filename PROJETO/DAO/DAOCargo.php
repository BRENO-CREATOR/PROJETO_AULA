<?php
class DAOCargo
{

        public function listAll()
        {
                $lista = [];
                $pst = Conexao::getPreparedStatement('select * from CARGO;');
                $pst->execute();
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
                return $lista;
        }

        public function insert(Cargo $cargo)
        {
                $sql = 'insert into CARGO (nome) values (?);';
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $cargo->getNome());

                if ($pst->execute()) {
                        return true;
                } else {
                        return false;
                }
        }

        public function delete(Cargo $cargo)
        {
                $sql = 'delete from CARGO where COD = ?;';
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $cargo->getCod());

                if ($pst->execute()) {
                        return true;
                } else {
                        return false;
                }
        }

        public function alter(Cargo $cargo)
        {
                $sql = 'update CARGO set NOME = ? where COD = ?';
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $cargo->getNome());
                $pst->bindValue(2, $cargo->getCod());

                if ($pst->execute()) {
                        return true;
                } else {
                        return false;
                }
        }
}
