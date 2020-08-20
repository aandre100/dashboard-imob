<?php
include '../menu.php';
include './assets.php';
include '../conexao/conexao.php';


$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$endereco = $_GET['endereco'];
$numero = $_GET['numero'];
$bairro = $_GET['bairro'];
$cidade = $_GET['cidade'];
$uf = $_GET['estado'];
$cep = $_GET['cep'];
$email = $_GET['email'];
$cpf = $_GET['cpf'];
$interesse = $_GET['interesse'];




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
              <h3 class="mb-0">Inserido com sucesso</h3>
            </div>

            <div class="container" style="margin-top: 10px">
              <?php

              $sql = new Sql();
              $results = $sql->selectReturn("INSERT INTO cliente (nome_cliente, sobrenome_cliente, endereco_cliente, nro_end_cliente, bairro_cliente, cidade_cliente, uf_cliente, cep_cliente, mail_cliente, cpf_cliente, interesse_cliente) values (:nome_cliente, :sobrenome_cliente, :endereco_cliente, :nro_end_cliente, :bairro_cliente, :cidade_cliente, :uf_cliente, :cep_cliente, :mail_cliente, :cpf_cliente, :interesse_cliente) ", array(
                ':nome_cliente' => $nome,
                ':sobrenome_cliente'=> $sobrenome,
                ':endereco_cliente'=> $endereco,
                ':nro_end_cliente'=> $numero,
                ':bairro_cliente'=> $bairro,
                ':cidade_cliente'=> $cidade,
                ':uf_cliente'=> $uf,
                ':cep_cliente'=> $cep,
                ':mail_cliente'=> $email,
                ':cpf_cliente'=> $cpf,
                ':interesse_cliente'=> $interesse
              ));


                if($results) { ?>
                  <center>
                      <div id='aprovado' style="width: 200px; height: 200px"></div>
                      <h4>Aprovado</h4>
                      <a href="../formularioCliente.php" role='button' class="btn btn-primary"> Voltar </a>
                    </center>

            <?php    } else { ?>

                    <center>
      								<div id='erro' style="width: 200px; height: 200px"></div>
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
