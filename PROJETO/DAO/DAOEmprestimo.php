<?php
class DAOEmprestimo
{

    public function listAll()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from EMPRESTIMO;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function insert(Emprestimpo $emprestimpo)
    {
        $sql = 'insert into EMPRESTIMO (dt_emp, dt_dev, usuario, situacao) values (?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $emprestimpo->getDtEmp());
        $pst->bindValue(2, $emprestimpo->getDtDev());
        $pst->bindValue(3, $emprestimpo->getUsuario());
        $pst->bindValue(4, $emprestimpo->getSituacao());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete(Emprestimpo $emprestimpo)
    {
        $sql = 'delete from EMPRESTIMO where COD = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $emprestimpo->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function alter(Emprestimpo $emprestimpo)
    {
        $sql = 'update EMPRESTIMO set DT_EMP = ?, DT_DEV = ?, USUARIO = ?, SITUACAO = ? where COD = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $emprestimpo->getDtEmp());
        $pst->bindValue(2, $emprestimpo->getDtDev());
        $pst->bindValue(3, $emprestimpo->getUsuario());
        $pst->bindValue(4, $emprestimpo->getSituacao());
        $pst->bindValue(4, $emprestimpo->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
