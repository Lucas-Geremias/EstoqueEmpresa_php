<?php

include 'conexao.php';

echo $id = $_GET['id'];


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>editar produtos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
        <h4>Formulário de cadastro</h4>
        <form action="_atualizar_produto.php" method="POST" style="margin-top: 20px">

            <?php

            $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {

                $id_estoque = $array['id_estoque'];
                $nroproduto = $array['nroproduto'];
                $nomeproduto = $array['nomeproduto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];


            ?>
                <div class="form-group">
                    <label>Numero do Produto</label>

                    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>

                    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
                </div>
                <div class="form-group">

                    <label>Nome Produto</label>

                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option>Periféricos</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Celulares</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
                </div>

                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option>Fornecedor A</option>
                        <option>Fornecedor B</option>
                        <option>Fornecedor C</option>
                    </select>
                </div>

                <div style="text-align: right;">
                    <button id="botao" type="submit" class="btn btn-success btn-sm">Atualizar</button>

                </div>
            <?php } ?>
        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>

</html>