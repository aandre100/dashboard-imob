<?php
include 'menu.php';


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-1">
              <h4>Lista de Imóveis</h4>
              <table class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Código</th>
                    <th scope="col" class="sort" data-sort="budget">Valor</th>
                    <th scope="col" class="sort" data-sort="status">Bairro</th>
                    <th scope="col">CEP</th>
                    <th scope="col" class="sort" data-sort="completion">Ação</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php
                  $sql2 = new Sql();
                  $results2 = $sql2->select("SELECT * FROM imovel");

                  foreach($results2 as $resultado){
                    $idimovel = $resultado['id_imovel'];
                    $codigoimovel = $resultado['codigo_imovel'];
                    $valor = $resultado['valor_imovel'];
                    $bairro = $resultado['bairro_imovel'];
                    $cep = $resultado['cep_imovel'];
                    echo '<tr>';
                    echo '<td>'.$codigoimovel."</td>";
                    echo '<td>'.$valor."</td>";
                    echo '<td>'.$bairro.'</td>';
                    echo '<td>'.$cep.'</td>';
                    echo '<td> <a class="btn btn-primary" href="editar_status.php?id='.$idimovel.'">Editar</a></td>';

                  }

                  ?>
                  <tr>

                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
