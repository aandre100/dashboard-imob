<?php
include 'menu.php';

$id = (int)$_GET['id'];

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
						<h3 class="mb-0">Status do Imóvel</h3>
					</div>

					<div class="container" style="margin-top: 10px">
						<form action="/dashboard/registos/inserir_status.php" method="post">
							<div class="row">
								<div class="col-md-6">
									<?php
									require_once 'conexao/conexao.php';
									$sql = new Sql();
									$resultadoImovel = $sql->select("SELECT * FROM imovel WHERE id_imovel = :id", array(
										':id' => $id
									));
									foreach($resultadoImovel as $imovel){
										$idimovel = $imovel['id_imovel'];
										$codigo = $imovel['codigo_imovel'];

									}
									 ?>

									<div class="form-group">
										<label>Código do imóvel:</label>
										<input type="text" class="form-control form-control-alternative"  value="<?php echo $codigo ?>" id='codigo' name="codigo" readonly>
									</div>
								</div>


							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Corretor de imoveis</label>
									<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="corretor">
										<option>Selecione uma Opção</option>
										<?php


										$dados2 = $sql->select('SELECT * FROM usuario WHERE nivel_acesso_usuario = :acesso', array(
											':acesso' => 2
										));


										foreach($dados2 as $dado) {
											$idusuario = $dado['id_usuario'];
											$nome = $dado['nome_usuario'];
											$usuario = $dado['usuario'];

											?>
											<option> <?php echo $nome ?> - <?php echo $usuario ?></option>

										<?php } ?>

									</select>
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Modalidade</label>
									<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="pagamento">
										<option>Selecione uma Opção</option>
										<?php


										$dados3 = $sql->select('SELECT * FROM modalidade');


										foreach($dados3 as $dado) {
											$idmodalidade = $dado['id_modalidade'];
											$modalidade = $dado['tipo_modalidade'];

											?>
											<option> <?php echo $modalidade ?></option>

										<?php } ?>

									</select>
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<label>Valor</label>
									<input type="numeric" name="valor" class="form-control form-control-alternative" autocomplete="off" required>

								</div>
							</div>



							</div>






							<div class="card-footer py-4">
								<div style="text-align: right">
									<button type="submit" class="btn btn-primary">Cadastrar</button>
								</div>
							</div>
						</form>
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
	include 'rodape.php';
	?>

</body>
</html>
