<!DOCTYPE html>
<html>
<head>
    <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "sEmptyTable": "Nenhum registro encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ resultados por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar: ",
    "oPaginate": {
        "sNext": " Próximo ",
        "sPrevious": " Anterior ",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
        }
    } );
} );
</script>
<style type="text/css">

	#example {
    table-layout: fixed !important;
    word-wrap:break-word;
}


</style>
<script type="text/javascript">

</script>
</head>
<body>



<div class="container">
	<h5>Clientes</h5>
<table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr >
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Telefone</th>

            </tr>
        </thead>
        <tbody>

            <?php
            include 'conexao/conexao.php';
			$sqlClientes = new Sql();
            $resultClientes = $sqlClientes->select('SELECT * FROM clientes_registo');


            foreach($resultClientes as $dados) {

                $nome = $dados['nome'];
                $sobrenome = $dados['sobrenome'];
                $mail = $dados['email'];
                $telefone = $dados['telefone'];
                ?>
           <tr>

        	 	<td><?php echo $nome ?></td>
                <td><?php echo $sobrenome ?></td>
                <td><?php echo $mail ?></td>
                <td><?php echo $telefone ?></td>


            </tr>
           <?php } ?>

        </tbody>
        <tfoot>
            <tr>
               <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>
        </tfoot>
    </table>
</div>

</body>
</html>
