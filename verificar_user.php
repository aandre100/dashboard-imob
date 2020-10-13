<?php
session_start();
require_once('conexao/conexao.php');
include './script/password.php';

$user = $_POST['utilizador'];
$password = $_POST['password'];

$sqlLogin = new Sql();
# and senha_usuario = :senha', //':senha' => $password#
$loginUser = $sqlLogin->select('SELECT * FROM usuario WHERE usuario = :usuario', array(
	':usuario' => $user
));
# get senha
$senhabd = $loginUser[0]['senha_usuario'];


if(count($loginUser) == 1){
	if(password_verify($password, $senhabd)){
	$_SESSION['usuario'] = $user;
	header("Location: index.php");
	exit();
}else{
	header("Location: login.php?id=1");
	exit();
}
}else{
	header("Location: login.php?id=2");
	exit();
}
 ?>
