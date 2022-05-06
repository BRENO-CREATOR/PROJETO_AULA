<?php
class DAOSecao
{

    public function listAll()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from SECAO;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function insert(Secao $secao)
    {
        $sql = 'insert into SECAO (nome) values (?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $secao->getNome());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete(Secao $secao)
    {
        $sql = 'delete from SECAO where COD = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $secao->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function alter(Secao $secao)
    {
        $sql = 'update SECAO set NOME = ? where COD = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $secao->getNome());
        $pst->bindValue(2, $secao->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
