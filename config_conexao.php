<?php
// usado para conectar ao BD
$host = "localhost";
$db_name = "pdo_crud_01_bd";
$username = "aluno";
$password = "aluno";
try {
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username,
$password);
}
// mostra os erros
catch(PDOException $exception){
echo "Connection error: " . $exception->getMessage();
}
?>
