<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Numitienda carritos</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/backend.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 id="title">Mantenimiento carritos</h1>
		</div><br>
		<div class="row">
			<div id="colLeft" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<label style="width:200px">Estado carrito </label><select id="comboestados"></select><br>
				<table id="lista" border="1"></table><br>
				<div id="paginacion"></div>
			</div>

			<div id="colMedium" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				
			</div>
			
			<div id="consultas"></div>
		</div><br>
		<div class="row">
			<center>
				<h4><a href="menu.php">Volver a menu</a></h4>
			</center>
		</div>
		<span id="firma">CIFO 2021</span>
	</div>
</body>
</html>