<?php
require_once('conexao/conexao.php');
$sqlGrafico = new Sql();
$dadosGrafico =  $sqlGrafico->select("SELECT SUM(valor_negocio) as valor_negocio, data_atual FROM status_imovel WHERE status_imovel = :venda group by data_atual", array(
	  ':venda' => 'venda'
  ));
  # chart.js - Preparar Valores#
  $datas = '';
  $valores = '';
  foreach( $dadosGrafico as $dados){
	  $datas = $datas . '"' .$dados['data_atual'].'",';
	  $valores = $valores .'"' . $dados['valor_negocio'] .'",';

	  $datas = trim($datas);
	  $valores = trim($valores);
  }
  //echo $datas;


 ?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Gráfico Linha</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<!-- CDN do Chart.js -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	</head>
	<body>
		<!-- https://www.colourlovers.com/ -->

		<div class="container" >
			<canvas  id="Linha"></canvas>

		</div>
		<br>

		<script type="text/javascript">
			var ctx = document.getElementById('Linha').getContext('2d');
			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels:[<?php echo $datas; ?>],
					datasets:
					[{
						label:'Data',
						data:['<?php echo $datas; ?>'],
						borderColor: 'rgba(255,255,0)',
						borderWidth: 3




					},



					{
						label:'Valores',
						data:[<?php echo $valores; ?>],
						backgroundColor: 'rgba(0,255,255)',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3



					}
					]

				},
				options: {
					legend: {
						display: false,
						labels: {
							fontColor: "white",
							fontSize: 18
						}
					},
					scales: {
						xAxes: [{

							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Datas',
								fontColor:'#ffffff',
								fontSize:12

							},
							gridLines: {
								display:false
							},
							ticks: {
								fontColor: "white",
								fontSize: 12

							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Valores',
								fontColor: '#ffffff',
								fontSize:12
							},
							gridLines: {
								display:false
							},
							ticks: {
								min: 1000,
								fontColor: "white",
								fontSize: 12
							}

						}]


					}


				}

			});

		</script>
		<!-- https://expanssiva.com.br/pg/tabela-de-cores-html-hexadecimal-e-rgb -->
	</body>
	</html>
