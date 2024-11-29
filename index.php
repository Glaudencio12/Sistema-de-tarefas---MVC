<?php
require_once 'app/Controllers/TarefaController.php';

$controller = new TarefaController();

if (isset($_GET['acao'])) {
    switch ($_GET['acao']) {
        case 'salvar':
            $controller->salvar();
            break;
        case 'listar':
            $controller->listar();
            break;
        case 'editar':
            $controller->editar();
            break;
        case 'excluir':
            $controller->excluir();
            break;
        case 'listarJson':
            $controller->listarJson();
            break;
        case 'buscarPorIdJson':
            $controller->buscarPorIdJson();
            break;
        case 'excluirJson':
            $controller->excluirJson();
            break;
        case 'atualizarJson':
            $controller->atualizarJson();
            break;
    }
} else {
    include 'app/Views/FormTarefa.php';
}
