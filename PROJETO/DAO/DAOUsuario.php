<?php
class DAOUsuario
{

    public function listAll()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from USUARIO;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function insert(Usuario $usuario)
    {
        $sql = 'insert into USUARIO (nome, cargo, rg, dt_nasc) values (?, ?, ?, ?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $usuario->getNome());
        $pst->bindValue(2, $usuario->getCargo());
        $pst->bindValue(3, $usuario->getRg());
        $pst->bindValue(4, $usuario->getDtNasc());
        $pst->bindValue(5, $usuario->getSituacao());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete(Usuario $usuario)
    {
        $sql = 'delete from USUARIO where COD = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $usuario->getCod());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function alter(Usuario $usuario)
    {
        $sql = 'update USUARIO set NOME = ?, CARGO = ?, RG = ?, DT_NASC = ?, SITUACAO = ? where COD = ?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $usuario->getNome());
        $pst->bindValue(2, $usuario->getCargo());
        $pst->bindValue(3, $usuario->getRg());
        $pst->bindValue(4, $usuario->getDtNasc());
        $pst->bindValue(5, $usuario->getSituacao());
        $pst->bindValue(6, $usuario->getCod());


        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
