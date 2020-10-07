<?php
require_once('conexao/conexao.php');
$sqlGrafico = new Sql();
$dadosGrafico =  $sqlGrafico->select("SELECT SUM(valor_negocio) as valor_negocio, data_atual FROM status_imovel WHERE status_imovel = :aluguer group by data_atual", array(
	  ':aluguer' => 'aluguer'
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


			<canvas  id="Barra"></canvas>



		<script type="text/javascript">
			var ctx = document.getElementById('Barra').getContext('2d');
			var myLineChart = new Chart(ctx, {
				type: 'bar',
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
					maintainAspectRatio: false,
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
								fontColor:'#000',
								fontSize:12

							},
							gridLines: {
								display:false
							},
							ticks: {
								min: 0,
								fontColor: "black",
								fontSize: 12

							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Valores',
								fontColor: '#000',
								fontSize:12
							},
							gridLines: {
								display:false
							},
							ticks: {
								fontColor: "black",
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
