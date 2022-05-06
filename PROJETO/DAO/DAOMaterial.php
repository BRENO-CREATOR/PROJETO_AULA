<?php
class DAOMaterial
{

        public function listAll()
        {
                $lista = [];
                $pst = Conexao::getPreparedStatement('select * from MATERIAL;');
                $pst->execute();
                $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
                return $lista;
        }

        public function insert(Material $material)
        {
                $sql = 'insert into MATERIAL (nome, tipo, secao, autor, editora, dt_public) values (?, ?, ?, ?, ?, ?);';
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $material->getNome());
                $pst->bindValue(2, $material->getTipo());
                $pst->bindValue(3, $material->getSecao());
                $pst->bindValue(4, $material->getAutor());
                $pst->bindValue(5, $material->getEditora());
                $pst->bindValue(6, $material->getDtPublic());


                if ($pst->execute()) {
                        return true;
                } else {
                        return false;
                }
        }

        public function delete(Material $material)
        {
                $sql = 'delete from MATERIAL where COD = ?;';
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $material->getCod());

                if ($pst->execute()) {
                        return true;
                } else {
                        return false;
                }
        }

        public function alter(material $material)
        {
                $sql = 'update MATERIAL set NOME = ?, TIPO = ?, SECAO = ?, AUTOR = ?, EDITORA = ?, DT_PUBLIC = ? where COD = ?';
                $pst = Conexao::getPreparedStatement($sql);
                $pst->bindValue(1, $material->getNome());
                $pst->bindValue(2, $material->getTipo());
                $pst->bindValue(3, $material->getSecao());
                $pst->bindValue(4, $material->getAutor());
                $pst->bindValue(5, $material->getEditora());
                $pst->bindValue(6, $material->getDtPublic());
                $pst->bindValue(7, $material->getCod());

                if ($pst->execute()) {
                        return true;
                } else {
                        return false;
                }
        }
}
