<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar produto</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	
</head>
<body>

	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Formulário de cadastro</h4>
		<form action="_inserir_produto.php" method="POST" style="margin-top: 20px">
			<div class="form-group">
				<label>Numero do Produto</label>
				<input type="number" class="form-control" name="nroproduto" placeholder="Insira o numero do produto" required="">
			</div>
			<div class="form-group">
				<label>Nome Produto</label>
				<input type="text" class="form-control" name="nomeproduto" placeholder="Insira o nome do produto" required="">
			</div>
			<div class="form-group">
				<label >Categoria</label>
				<select class="form-control" name="categoria" required="">
					<option>Periféricos</option>
					<option>Hardware</option>
					<option>Software</option>
					<option>Celulares</option>
				</select>
			</div>
			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" placeholder="Insira a Quantidade do produto" required="">
			</div>
			
			<div class="form-group">
				<label >Fornecedor</label>
				<select class="form-control" name="fornecedor" required="">
					<option>Fornecedor A</option>
					<option>Fornecedor B</option>
					<option>Fornecedor C</option>
				</select>
			</div>

			<div style="text-align:right;">
			<a href="index.php" role="button" class="btn btn-sm btn-primary" id="link" > Voltar </a>
			<button  id="botao" type="submit"  class="btn btn-success btn-sm">Cadastrar</button>	
			</div>
		</form>

	</div>




	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>