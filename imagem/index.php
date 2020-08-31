
<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Carga</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
</head>
<body>

<div class="container">

<form action="imagem/index2.php" method="post" enctype="multipart/form-data">
    <br>
    <br>
            <h6>Adicionar Fotos</h6>
            <table class="table" id="products-table">
                <thead>
                    <tr>
                        <th >Foto</th>

                        <!--   <th>Ações</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i=0;?>

                        <td>
                            <input type="file" name="foto[<?php echo $i?>]" class="form-control-file" id="exampleFormControlFile1">

                    </td>



                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5" style="text-align: right;">
                            <button onclick="AddTableRow()" type="button" class="btn btn-success">Adicionar Foto</button>
                        </td>
                    </tr>
                </tfoot>
            </table>

            <div style="text-align: right;">
                <button type="submit" class="btn btn-warning">Cadastrar Fotos</button>
            </div>
        </div>



</form>

 </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
    </html>
     <script language="javascript">
              var maximo = 6;
              (function($) {
                AddTableRow = function() {
                  var qtd = $("#products-table tbody tr").length;
                  if (qtd < maximo) {
                    var newRow = $("<tr>");
                    var cols = "";

                    cols += '<td>  <input type="file" name="foto['+ qtd +']" class="form-control-file" id="exampleFormControlFile1"></td></tr>';


                    newRow.append(cols);
                    $("#products-table").append(newRow);
                    resetId();
                    return false;
                  }
                };
              })(jQuery);
              //renova os ids dos campos dinâmicos


    </script>
