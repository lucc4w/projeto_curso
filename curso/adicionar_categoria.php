<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adicionar categoria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 40px;width: 500px;">
	<h4>Cadastro de Categoria</h4>
	<form action="_inserir_categoria.php" method="post">
		<label>Categoria</label>
		<div class="form-group">
			<input type="text" name="categoria" class="form-control" placeholder="Digite o nome da Categoria" autocomplete="off">
		</div>
		<div style="text-align: right; margin-top: 10px;">
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
			<button type="submit" class="btn btn-primary btn-sm">Cadastrar</button>
		</div>
	</form>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>