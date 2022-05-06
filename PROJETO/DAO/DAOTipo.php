<?php
class DAOTipo
{

    public function listAll()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from TIPO;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function insert(Tipo $tipo)
    {
        $sql = 'insert into TIPO (nome) values (?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $tipo->getNome());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete(Tipo $tipo)
    {
        $sql = 'delete from TIPO where COD = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $tipo->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function alter(Tipo $tipo)
    {
        $sql = 'update TIPO set NOME = ? where COD = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $tipo->getNome());
        $pst->bindValue(2, $tipo->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
