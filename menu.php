<?php
session_start();
if(!isset($_SESSION['usuario'])){
	unset($_SESSION['login']);
	header('Location: login.php');
	exit();
}
$logado = $_SESSION['usuario'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Sistema Imobiliário</title>

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Favicon -->
		<link href="<?php echo $_SERVER['PATH_TRANSLATED'].DIRECTORY_SEPARATOR.'assets/img/brand/favicon.png'; ?>" rel="icon" type="image/png">
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<!-- Icons -->
		<link href="<?php echo $_SERVER['PATH_TRANSLATED'].DIRECTORY_SEPARATOR.'assets/js/plugins/nucleo/css/nucleo.css' ?>" rel="stylesheet" />
		<link href="<?php echo $_SERVER['PATH_TRANSLATED'].DIRECTORY_SEPARATOR. 'assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" />
		<!-- CSS Files -->
		<link href="<?php echo $_SERVER['PATH_TRANSLATED'].DIRECTORY_SEPARATOR. 'assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet' ?>" />
	</head>
</head>
<body>

	<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
		<div class="container-fluid">
			<!-- Toggler -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!-- Brand -->
			<a class="navbar-brand pt-0" href="./index.php">
				<img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
			</a>
			<!-- User -->
			<ul class="nav align-items-center d-md-none">
				<li class="nav-item dropdown">
					<a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="ni ni-bell-55"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<div class="media align-items-center">
							<span class="avatar avatar-sm rounded-circle">
								<img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg
								">
							</span>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
						<div class=" dropdown-header noti-title">
							<h6 class="text-overflow m-0">Welcome!</h6>
						</div>
						<a href="./examples/profile.html" class="dropdown-item">
							<i class="ni ni-single-02"></i>
							<span>My profile</span>
						</a>
						<a href="./examples/profile.html" class="dropdown-item">
							<i class="ni ni-settings-gear-65"></i>
							<span>Settings</span>
						</a>
						<a href="./examples/profile.html" class="dropdown-item">
							<i class="ni ni-calendar-grid-58"></i>
							<span>Activity</span>
						</a>
						<a href="./examples/profile.html" class="dropdown-item">
							<i class="ni ni-support-16"></i>
							<span>Support</span>
						</a>
						<div class="dropdown-divider"></div>
						<a href="#!" class="dropdown-item">
							<i class="ni ni-user-run"></i>
							<span>Logout</span>
						</a>
					</div>
				</li>
			</ul>
			<!-- Collapse -->
			<div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<!-- Collapse header -->
				<div class="navbar-collapse-header d-md-none">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a href="./index.html">
								<img src="./assets/img/brand/blue.png">
							</a>
						</div>
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>

				<!-- Navigation -->
				<ul class="navbar-nav">
					<li class="nav-item  class=" active" ">
						<a class=" nav-link active " href=" ./index.php"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
						</a>
					</li>
					<li class="nav-item" style="margin-left:5px;">
						<a class="nav-link " href="#">
							<i class="ni ni-building"></i> Imóvel
						</a>
					</li>
					<li class="nav-item" style="margin-left:5px;">
						<a class="nav-link " href="./formularioImob.php">
							 	<i class="ni ni-building"></i> Registrar Imóvel
						</a>
					</li>
					<li class="nav-item" style="margin-left:5px;">
						<a class="nav-link " href="./listar_imob.php">
								<i class="ni ni-building"></i>  Listar Imóvel
						</a>
					</li>

					<li class="nav-item mt-2">
						<a class="nav-link " href="#">
							<i class="ni ni-satisfied text-orange"></i> Utilizador
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="margin-left:5px;" href="./formularioUsuario.php">
							<i class="ni ni-satisfied text-orange"></i> Registar Utilizador
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="margin-left:5px;" href="./examples/register.html">
						Listar Utilizador
						</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>
	<div class="main-content">
		<!-- Navbar -->
		<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
			<div class="container-fluid">
				<!-- Brand -->
				<a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.php">Dashboard</a>

				<!-- User -->
				<ul class="navbar-nav align-items-center d-none d-md-flex">
					<li class="nav-item dropdown">
						<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<div class="media align-items-center">
								<span class="avatar avatar-sm rounded-circle">
									<img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
								</span>
								<div class="media-body ml-2 d-none d-lg-block">
									<span class="mb-0 text-sm  font-weight-bold"><?php echo $logado; ?></span>
								</div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
							<div class=" dropdown-header noti-title">
								<h6 class="text-overflow m-0">Bem Vindo!</h6>
							</div>

							<div class="dropdown-divider"></div>
							<a href="logout.php" class="dropdown-item">
								<i class="ni ni-user-run"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
		  <br>
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Nro Imóveis</h5>
											<?php
												require_once('conexao/conexao.php');
												$contagemsql = new Sql();
												$results4 = $contagemsql->select('SELECT COUNT(id_imovel) as contagem FROM imovel');
											 ?>
                      <span class="h2 font-weight-bold mb-0"><?php echo $results4[0]['contagem']; ?></span>
                    </div>

                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">


                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">IMÓVEIS VENDIDOS</h5>
                      <span class="h2 font-weight-bold mb-0">
						  <?php
						  $sqlVendas = new Sql();
						  $totalVendas =  $sqlVendas->select("SELECT COUNT(id_status_imovel) as qtd_venda FROM status_imovel WHERE status_imovel = :venda", array(
								':venda' => 'venda'
							));
							echo $totalVendas[0]['qtd_venda'];
						  ?>
					  </span>
                    </div>

                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
										<?php
									  $sqlVendas1 = new Sql();
									  $totalVendas1 =  $sqlVendas1->select("SELECT * FROM imovel INNER JOIN status_imovel ON status_imovel.codigo_imovel = imovel.codigo_imovel WHERE status_imovel.status_imovel = :venda AND imovel.status_imovel = :venda ", array(
											':venda' => 'venda'
										));

										foreach($totalVendas1 as $valor){
											$valorImovel = $valor['valor_imovel'];
											$valorVenda = $valor['valor_negocio'];
											$quantidadeImovel += $valorImovel;
											$quantidadeVenda += $valorVenda;
										}
										$total =  $quantidadeVenda - $quantidadeImovel;

										if($total <= 0){ ?>

											<span class="text-danger mr-2"><i class="fas fa-arrow-down"></i>&nbsp;<?php echo number_format($total, 2, ',', ' '); ?></span>
											<span class="text-nowrap">Negativo</span>


									<?php 	} else { ?>
										<span class="text-success mr-2"><i class="fas fa-arrow-up"></i>&nbsp;<?php echo number_format($total, 2, ',', ' '); ?></span>
										<span class="text-nowrap">Positivo</span>

									<?php	} 	?>

                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Imóveis Alugados</h5>
                      <span class="h2 font-weight-bold mb-0">
												<?php
											  $sqlAluguer = new Sql();
											  $totalAluguer =  $sqlAluguer->select("SELECT COUNT(id_status_imovel) as qtd_aluguer FROM status_imovel WHERE status_imovel = :aluguer", array(
													':aluguer' => 'aluguer'
												));
												echo $totalAluguer[0]['qtd_aluguer'];
											  ?>


											</span>
                    </div>

                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
					  <?php
					  $sqlAluguer1 = new Sql();
					  $totalAluguer1 =  $sqlAluguer1->select("SELECT SUM(valor_negocio) as valortotal FROM status_imovel  WHERE status_imovel = :aluguer", array(
							':aluguer' => 'aluguer'
						));


						$totalA =  $totalAluguer1[0]['valortotal']*0.15;

					   ?>
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> <?php echo number_format($totalA, 2, ',', ' '); ?> </span>
                    <span class="text-nowrap">lucro</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Lucro Bruto</h5>
					  <?php
					  	$totalbruto = $totalA+$total;
					   ?>
                      <span class="h2 font-weight-bold mb-0"><?php  echo number_format($totalbruto, 2, ',', ' '); ?></span>
                    </div>

                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
					  <?php
					  if($total > 0) {  ?>
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> Saldo Positivo</span>
				<?php } else { ?>
					<span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> Saldo Negativo</span>
				<?php } ?>
                   </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



	</body>
	</html>
