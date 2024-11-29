<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 20px;
    background-color: #f9f9f9;
    color: #333;
}

h1 {
    text-align: center;
    color: #0056b3;
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #0056b3;
    color: #fff;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e9f4ff;
}

button {
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button a {
    text-decoration: none;
    color: #fff;
}

button#editar {
    background-color: #4CAF50;
}

button#excluir {
    background-color: #f44336;
}

button#editar:hover {
    background-color: #45a049;
}

button#excluir:hover {
    background-color: #e31b0c;
}

a {
    color: inherit;
}

</style>

<body>
      <h1>Lista de tarefas</h1>

      <?php require_once __DIR__ . '/../Views/Menu.php'; ?>

      <table border="1">
            <tr>
                  <th>Título</th>
                  <th>Descrição</th>
                  <th>Data</th>
                  <th>Ações</th>
            </tr>
            <?php foreach ($tarefas as $tarefa): ?>
                  <tr>
                        <td><?= htmlspecialchars($tarefa['titulo']) ?></td>
                        <td><?= htmlspecialchars($tarefa['descricao']) ?></td>
                        <td><?= htmlspecialchars($tarefa['data_prevista']) ?></td>
                        <td>
                              <button id="editar"><a href="index.php?acao=editar&id=<?= $tarefa['id'] ?>">Editar</a></button>
                              <button id="excluir"><a href="index.php?acao=excluir&id=<?= $tarefa['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a></button>
                        </td>
                  </tr>
            <?php endforeach; ?>
      </table>
</body>
</html>