<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Menu</title>
      <style>
            * {
                  font-family: Arial, sans-serif;
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
            }

            body {
                  padding-top: 50px;
            }

            nav {
                  position: fixed;
                  top: 0;
                  left: 0;
                  width: 100%;
                  background-color: #333;
                  padding: 10px 20px;
                  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            ul {
                  list-style-type: none;
                  margin: 0;
                  padding: 0;
                  display: flex;
            }

            li {
                  margin-right: 20px;
            }

            a {
                  color: #fff;
                  text-decoration: none;
                  font-size: 16px;
            }

            a:hover {
                  text-decoration: underline;
            }

          
      </style>
</head>

<body>
      <nav>
            <ul>
                  <li><a href="index.php?acao=listar">Lista de Tarefas</a></li>
                  <li><a href="index.php">Adicionar Tarefa</a></li>
            </ul>
      </nav>
</body>
</html>
