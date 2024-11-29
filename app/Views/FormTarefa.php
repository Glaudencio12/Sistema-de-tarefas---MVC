<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Gerenciador de Tarefas</title>
</head>
<style>
body {
    font-family:Arial, Helvetica, sans-serif;
    margin: 20px;
    background-color: #f9f9f9;
    color: #333;
}

h1 {
    text-align: center;
    color: #0056b3;
}

fieldset {
    border: 1px solid #ccc;
    border-radius: 8px;
    padding: 20px;
    background-color: #fff;
    max-width: 400px;
    margin: 0 auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    font-weight: bold;
    color: #333;
}

input, 
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #0056b3;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #004495;
}

</style>

<body>
      <fieldset>
            <h1>Gerenciador de Tarefas</h1>

            <?php require_once __DIR__ . '/../Views/Menu.php'; ?>

            <form action="index.php?acao=salvar" method="post">

                  <input type="hidden" placeholder="id" name="id" value="<?= htmlspecialchars($tarefa['id'] ?? '') ?>"> <br><br>

                  <label for="titulo">Título:</label>
                  <input type="text" name="titulo" id="titulo" required value="<?= htmlspecialchars($tarefa['titulo'] ?? '') ?>"><br><br>

                  <label for="descricao">Descrição:</label><br>
                  <textarea name="descricao" id="descricao" cols="30" rows="5" required><?= htmlspecialchars($tarefa['descricao'] ?? '') ?></textarea><br><br>

                  <label for="data">Data:</label>
                  <input type="date" name="data" id="data" required value="<?= htmlspecialchars($tarefa['data_prevista'] ?? '') ?>"><br><br>

                  <button type="submit"><?= isset($tarefa) ? 'Atualizar' : 'Salvar' ?></button>
            </form>
      </fieldset>
</body>
</html>
