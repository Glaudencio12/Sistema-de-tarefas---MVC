<?php
require_once __DIR__ . '/../Models/Tarefa.php';

class TarefaController {

    public function salvar() {
        $titulo = $_POST['titulo'] ?? '';
        $descricao = $_POST['descricao'] ?? '';
        $data_prevista = $_POST['data'] ?? '';
        $id = $_POST['id'] ?? '';
        $mensagem = "";
    
        if ($titulo == null && $descricao == null && $data_prevista == null) {
            $mensagem = "Preencha os campos";
        }else{
            if ($id != '') {
                $resultado = Tarefa::atualizar($id, $titulo, $descricao, $data_prevista);
                if ($resultado) {
                    $mensagem = "Registro atualizado com sucesso!";
                } else {
                    $mensagem = "Erro ao atualizar o registro.";
                }

            } else {
                $resultado = Tarefa::inserir($titulo, $descricao, $data_prevista);
                if ($resultado) {
                    $mensagem = "Registro inserido com sucesso!";
                } else {
                    $mensagem = "Erro ao inserir o registro.";
                }
            }

        }
    
        require_once __DIR__ . '/../Views/FormTarefa.php';
        echo "<script type='text/javascript'>alert('$mensagem');</script>";
    }

    public function listar() {
        $tarefas = Tarefa::listar(); 
        require_once __DIR__ . '/../Views/listarTarefas.php';
    }

    public function editar() {
        $tarefa = Tarefa::buscarPorId($_GET['id']);
        require_once __DIR__ . '/../Views/FormTarefa.php';
    }

    public function excluir() {
        Tarefa::excluir($_GET['id']);
        $this->listar();
    }

    public function listarJson() {
        header('Content-Type: application/json');
        $tarefas = Tarefa::listar();
        echo json_encode($tarefas);
    }

    public function buscarPorIdJson() {
        header('Content-Type: application/json');
        $tarefa = Tarefa::buscarPorId($_GET['id']);
        echo json_encode($tarefa);
    }

    public function excluirJson(){
        header('Contente-type: application/json');
        $resultado = Tarefa::excluir($_GET['id']);
        echo json_encode(['Sucess' => $resultado]);
    }

    public function atualizarJson(){
        header('Content-Type: application/json');
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data_prevista = $_POST['data'];

        $resultado = Tarefa::atualizar($id, $titulo, $descricao, $data_prevista);
        echo json_encode(['Sucess' => $resultado]);
    }
}
?>
