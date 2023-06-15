<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
	<title>Numitienda</title>
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="../assets/css/frontend.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 id="title">EL CHAVO DEL OCHO</h1>
		</div>
		<nav></nav>
		<div class="row">
			<div id="colLeft" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div id="productos">
					<div class="row"><h2>Productos en el carrito</h2></div><br>
					<div id='prodcategoria' style="text-align:center">
						<input type="hidden" id="montototal" value="">
						<br>
						<div style="text-align:center">
							<form id='validarcarrito' method='post' action='#'>
								<input type='button' name='checkout' id='checkout' value='CheckOut'>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<span id="firma">CIFO 2021</span>
	</div>
</body>
</html>