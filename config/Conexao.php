<?php
class Conexao{
      public static function conectar(){
            return new PDO("mysql:host=localhost;dbname=sistema_de_tarefas", "root", "");
      }
}

?>