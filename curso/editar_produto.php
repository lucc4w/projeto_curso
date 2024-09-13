<?php
include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}
		#botao{
			background:#0077b6;
			color: white;
		}
	</style>
</head>
<body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
	<h4>Formulário de Cadastro</h4>
	<form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">
		<?php
			$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array = mysqli_fetch_array($buscar)) {

				$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];

		?>
		<div class="form-group">
   			<label>Nro Produto</label>
    		<input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
    		<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;">
    	</div>

    	<div class="form-group">
   			<label>Nome produto</label>
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
		<div style="text-align: right; margin-top: 10px;">
    		<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
    	</div>
    	<?php } ?>
	</form>
</div>









	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>