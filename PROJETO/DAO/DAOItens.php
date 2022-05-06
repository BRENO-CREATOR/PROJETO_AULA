<?php
class DAOItens
{

    public function listAll()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from ITENS;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function insert(Itens $itens)
    {
        $sql = 'insert into ITENS (mat, emp) values (?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itens->getMat());
        $pst->bindValue(2, $itens->getEmp());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete(Itens $itens)
    {
        $sql = 'delete from ITENS where COD = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itens->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function alter(Itens $itens)
    {
        $sql = 'update ITENS set MAT = ?, EMP = ? where COD = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itens->getMat());
        $pst->bindValue(2, $itens->getEmp());
        $pst->bindValue(3, $itens->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
