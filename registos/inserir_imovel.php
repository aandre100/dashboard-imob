<?php

include '../menu.php';
require_once('../conexao/conexao.php');

$codigo = $_POST['imovel'];
$valor = $_POST['valorimovel'];
$cpf = $_POST['cpf'];
$end = $_POST['endereco'];
$nro = $_POST['numero'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];
$modalidade = $_POST['escolhamodalidade'];
$pagamento = $_POST['pagamento'];
$categoria = $_POST['categoria'];
$foto = $_FILES['foto'];
$status_imovel = "Ativo";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<div class="container-fluid mt--7">
		<!-- Table -->
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header border-1">
						<h3 class="mb-0">Status Cadastro de Categoria</h3>
					</div>

					<div class="container" style="margin-top: 10px">
						<?php
						// echo '<pre>';
						// var_dump($_FILES['foto']);
						// echo '</pre>';
						//exit();

						$sql = new Sql();
						$resultado = $sql->selectReturn("INSERT INTO `imovel`(`codigo_imovel`, `end_imovel`, `nro_end_imovel`, `bairro_imovel`, `cidade_imovel`, `uf_imovel`, `cep_imovel`, `complemento_imovel`, `valor_imovel`, `id_modalidade_imovel`, `id_pagamento_imovel`, `id_categoria_imovel`, `cpf_cliente_imovel`, `status_imovel`) VALUES (:codigo,:end, :nro,:bairro, :cidade,:estado,:cep,:complemento,:valor,:modalidade,:pagamento,:categoria,:cpf, :status_imovel)", array(
						':codigo' => $codigo,
						':end' => $end,
						':nro' => $nro,
						':bairro' => $bairro,
						':cidade' => $cidade,
						':estado' => $estado,
						':cep'=> $cep,
						':complemento' => $complemento,
						':valor' => $valor,
						':modalidade' => $modalidade,
						':pagamento' => $pagamento,
						':categoria' => $categoria,
						':cpf' => $cpf,
						':status_imovel' => $status_imovel
						));
						#criando pasta do imovel
						mkdir('../fotos/'. $codigo .'');



						if($resultado) {?>
 
							<center>
								<div id='aprovado' style="width: 200px; height: 200px"></div>
								<h4>Aprovado</h4>
								<a href="../formularioCategoria.php" role='button' class="btn btn-primary"> Voltar </a>
							</center>

						<?php	} else {?>

							<center>
								<div id='erro' style="width: 200px; height: 200px"></div>
								<h4>Reprovado</h4>
								<a href="../formularioModalidade.php" role='button' class="btn btn-danger"> Voltar </a>
							</center>


						<?php }




						foreach ($_FILES['foto']['name'] as $key => $name) {
    						 $_FILES['foto']['type'][$key];
   							 $_FILES['foto']['tmp_name'][$key];




						#adicionando fotos a tabela fotos.


							preg_match("/\.(png|jpg|jpeg){1}$/i", $_FILES['foto']['name'][$key], $ext);

							$caminho_foto2 = '../fotos/' . $codigo .'/' ;

							if ($ext == true) {

								$nome_foto = md5(uniqid(time())) . "." . $ext[1];

								$caminho_foto = $caminho_foto2 . $nome_foto;

								move_uploaded_file($_FILES['foto']['tmp_name'][$key], $caminho_foto);



								$result2 = $sql->select("INSERT INTO foto (nome_foto, id_imovel_foto) values ('$nome_foto', $codigo)");



							}





						};


						?>



					</div>


					<div class="card-footer py-4">

					</div>


				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<!-- Footer -->
		<footer class="footer">
			<div class="row align-items-center justify-content-xl-between">
				<div class="col-xl-6">
					<div class="copyright text-center text-xl-left text-muted">
						&copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
					</div>
				</div>
				<div class="col-xl-6">
					<ul class="nav nav-footer justify-content-center justify-content-xl-end">
						<li class="nav-item">
							<a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
						</li>
						<li class="nav-item">
							<a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
						</li>
						<li class="nav-item">
							<a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
						</li>
						<li class="nav-item">
							<a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</div>


	<?php
	//include '../rodape.php';
	?>


	<script src="animacoes/bodymovin.js"></script>
	<script type="text/javascript">
		var svgContainer = document.getElementById('erro');
		var animItem = bodymovin.loadAnimation({
			wrapper: svgContainer,
			animType: 'svg',
			loop: true,
			autoplay: true,

			path: 'animacoes/error.json'
		});

	</script>


	<script type="text/javascript">
		var svgContainer = document.getElementById('aprovado');
		var animItem = bodymovin.loadAnimation({
			wrapper: svgContainer,
			animType: 'svg',
			loop: true,
			autoplay: true,

			path: 'animacoes/aprovado.json'
		});
	</script>

</body>
</html>
