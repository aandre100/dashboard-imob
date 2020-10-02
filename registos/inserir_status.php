<?php
include '../menu.php';
include './assets.php';
require_once('../conexao/conexao.php');
$codigo = $_POST['codigo'];
$corretor = $_POST['corretor'];
$modalidade = $_POST['modalidade'];
$pagamento = $_POST['valor'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>teste</title>
	</head>
	<body>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-1">
              <h3 class="mb-0">Status de atualização de imóvel</h3>
            </div>

            <div class="container" style="margin-top: 10px">
              <?php
			  #atualização da tabela imóvel
              $sqlAtualiza = new Sql();
			  $atualizaStatus = $sqlAtualiza->query("UPDATE imovel SET status_imovel = :modalidade WHERE codigo_imovel = :codigo", array(
				  ':modalidade' => $modalidade,
				  ':codigo' => $codigo
			  ));
			  #inserção na tabela status_imovel
			  $data = date('Y/m/d');
			  $sqlInsertStatus = new Sql();
			  $insereStatus = $sqlInsertStatus->query("INSERT INTO status_imovel (usuario_corretor, codigo_imovel, status_imovel, valor_negocio, data_atual) VALUES (:corretor, :codigo, :status, :valor, :data)", array(
				  ':corretor' => $corretor,
				  ':codigo' => $codigo,
				  ':status' => $modalidade,
				  ':valor'  => $pagamento,
				  ':data' => $data
			  ));



                if($atualizaStatus && $insereStatus) { ?>
                  <center>
                      <div id='aprovado' style="width: 200px; height: 200px"></div>
                      <h4>Aprovado</h4>
                      <a href="../listar_imob.php" role='button' class="btn btn-primary"> Voltar </a>
                    </center>

            <?php    } else { ?>

                    <center>
      								<div id='erro' style="width: 200px; height: 200px"></div>
									<a href="../listar_imob.php" role='button' class="btn btn-primary"> Voltar </a>
      								<h4>Reprovado</h4>
      							</center>
          <?php  }                ?>


                <div class="card-footer py-4">
                  <!-- rodapé -->
                </div>

            </div>




          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="container">
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



    <?php
    include 'rodape.php';

    ?>

	</body>
</html>
