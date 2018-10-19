<?php
  $host   = "mysql:dbname=controlenf;host=localhost";
  $dsn    = "mysql:dbname=blog;host=localhost";
  $dbuser = "root";
  $dbpass = "";
  try {
    $pdo = new PDO($host,$dbuser,$dbpass);
  } catch (PDOException $e){
    "Erro de conexão".$e->getMessage();
  }
?>
