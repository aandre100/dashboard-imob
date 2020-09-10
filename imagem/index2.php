
<?php

$foto = $_FILES['foto'];

array_map(function ($foto) {
    $a = 0;

    preg_match("/\.(png|jpg|jpeg){1}$/i", $foto["name"], $ext);
        // Gera um nome Ãºnico para a imagem


    if ($ext == true) {

    $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

    $caminho_arquivo = "documentos/" . $nome_arquivo;

    move_uploaded_file($format_code_lang["tmp_name"], $caminho_arquivo);


    include '../conexao/conexao.php';
    $sql = new Sql();
    $results = $sql->selectReturn("INSERT INTO foto (nome_foto, id_imovel_foto) values (:nome_arquivo,1)", array(
      ':nome_arquivo' => $caminho_arquivo
    ));




    }






    $a++;
}, $foto);






?>
