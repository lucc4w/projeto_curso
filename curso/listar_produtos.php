<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listagem de produtos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style type="text/css">
	</style>
	<script src="https://kit.fontawesome.com/0657cc6f09.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="margin-top: 30px;">
	<h3>Lista de Produtos</h3>
	<br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    	<?php
    		include 'conexao.php';
    		$sql = "SELECT * FROM `estoque`";
    		$busca = mysqli_query($conexao,$sql);
    		while ($array = mysqli_fetch_array($busca)) {
    			$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];
    	?>
    <tr>	
     	<td><?php echo $nroproduto ?></td>
     	<td><?php echo $nomeproduto ?></td>
     	<td><?php echo $categoria ?></td>
     	<td><?php echo $quantidade ?></td>
     	<td><?php echo $fornecedor ?></td>
     	<td>
     			<a class="btn btn-warning btn-sm" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Editar</a>
     			<a class="btn btn-danger btn-sm" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fa-regular fa-trash-can"></i></i>&nbsp;Excluir</a>
     	</td>

     <?php } ?>
    </tr>
</table>
	<div style="text-align: right;">
	<a href="index.php" role="button" class="btn btn-sm btn-primary" style="text-align: right;">Voltar</a>
	</div>
</div>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>