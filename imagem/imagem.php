<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include '../conexao/conexao.php';
$sql = new Sql();
$resultado = $sql->select("select * from foto where id_imovel_foto = 1");

$arquivo = $resultado[0]['nome_foto'];

?>
<img src="<?php echo $arquivo ?>">



</body>
</html>
