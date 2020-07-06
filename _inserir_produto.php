<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) 
        VALUES ($nroproduto,'$nomeproduto', '$categoria','$quantidade','$fornecedor')";


$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top:20px">
        <center> 
        <h4>Produtos Adicionados com sucesso!</h4>
        </center>
        <div style="padding-top: 20px">
        <center>
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Ítem</a>
         </center>
        </div>
</div>