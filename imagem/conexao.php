<?php

$host = 'localhost';
$base = 'bd_imobiliaria';
$usuario = 'root';
$senha = '';
$conexao = mysqli_connect($host,$usuario,$senha,$base);


/*
try {
  $conexao = new PDO('mysql:host=localhost;dbname=$base', $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
*/



?>