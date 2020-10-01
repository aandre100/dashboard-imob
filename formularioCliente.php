<?php
include 'menu.php';

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
						<h3 class="mb-0">Cadastro de Usuário</h3>
					</div> 

					<div class="container" style="margin-top: 10px">
						<form action="registos/inserir_cliente.php" >
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nome</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Nome" name="nome" required="" autofocus="" autocomplete="off">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Sobrenome</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Sobrenome" name="sobrenome" required="" autocomplete="off">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Mail</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Mail" name="email" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>CPF</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="CPF" name="cpf" required=""  autocomplete="off">
									</div>
								</div>

							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Endereço</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Endereço" name="endereco" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Número</label>
										<input type="number" class="form-control form-control-alternative"  placeholder="Número" name="numero" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Bairro</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Bairro" name="bairro" required=""  autocomplete="off">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Cidade</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="Cidade" name="cidade" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>Estado</label>
										<input type="number" class="form-control form-control-alternative"  placeholder="Estado" name="estado" required=""  autocomplete="off">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label>CEP</label>
										<input type="text" class="form-control form-control-alternative"  placeholder="CEP" name="cep" required=""  autocomplete="off">
									</div>
								</div>
							</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="exampleFormControlSelect1">Interesse</label>
									<select class="form-control form-control-alternative" id="exampleFormControlSelect1" name="interesse">
										<option>Comprar</option>
										<option>Alugar</option>
										<option>Ambos</option>

									</select>
								</div>
							</div>
						</div>



							<div class="card-footer py-4">
								<div style="text-align: right">
										<button type="submit" class="btn btn-primary">Gravar</button>
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
