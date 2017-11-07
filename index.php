<?php 	
	require_once "functions/product.php";
	$pdoConnection = require_once "connection.php";
	$products = getProducts($pdoConnection);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Carrinho de Compras</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach($products as $product) : ?>
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							 <h4 class="card-title"><?php echo $product['nome']?></h4>
							 <h6 class="card-subtitle mb-2 text-muted">
							  	R$<?php echo number_format($product['preco'], 2, ',', '.')?>
							 </h6>

							 <a class="btn btn-primary" href="carrinho.php?acao=add&id=<?php echo $product['id']?>" class="card-link">Comprar</a>
						</div>
					</div>
				</div>

			<?php endforeach;?>
		</div>
	</div>
	
</body>
</html>