<?php

include  'conexao.php';


$id = $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];


$sql = "UPDATE `estoque` SET `nomeproduto`='$nomeproduto',`categoria`='$categoria',`quantidade`=$quantidade,
        `fornecedor`='$fornecedor' WHERE id_estoque = $id";

$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container" style="width: 400px;">

<center>
   
    <div style="margin-top: 60px ;">
    <h3>Atualizado com sucesso!</h3>
    <a href="listar_produtos" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
    </div>
</center>

</div>