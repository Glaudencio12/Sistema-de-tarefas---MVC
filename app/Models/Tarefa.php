<?php
require_once 'config/Conexao.php';

class Tarefa {
    public static function listar() {
        $con = Conexao::conectar();
        $sql = $con->prepare("SELECT * FROM tarefas");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function inserir($titulo, $descricao, $data_prevista) {
        $con = Conexao::conectar();
        $sql = $con->prepare("INSERT INTO tarefas (titulo, descricao, data_prevista) VALUES (?, ?, ?)");
        return $sql->execute([$titulo, $descricao, $data_prevista]);
    }

    public static function buscarPorId($id) {
        $con = Conexao::conectar();
        $sql = $con->prepare("SELECT * FROM tarefas WHERE id = ?");
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public static function excluir($id) {
        $con = Conexao::conectar();
        $sql = $con->prepare("DELETE FROM tarefas WHERE id = ?");
        return $sql->execute([$id]);
    }

    public static function atualizar($id, $titulo, $descricao, $data_prevista) {
        $con = Conexao::conectar();
        $sql = $con->prepare("UPDATE tarefas SET titulo = ?, descricao = ?, data_prevista = ? WHERE id = ?");
        return $sql->execute([$titulo, $descricao, $data_prevista, $id]);
    }
}
?>
