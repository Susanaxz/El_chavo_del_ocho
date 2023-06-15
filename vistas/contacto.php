<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Numitienda</title>
	<link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
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
		<div class="row">
			<div id="colLeft" style="background:transparent" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<ul id="opciones" style="font-size:1.7em" class="nav navbar-nav">
					<li class="active"><a href="inicio.php">Inicio</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div id="colRight" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
				<form id="contacto" method="post" action="#"> 	
					<center><h2>FORMULARIO DE CONTACTO</h2></center>
					<p>Todos los campos son obligatorios</p>
					<label>Nombre: </label><input type="text" maxlength="120" name="nombre" id="nombre" value=""/><br>	
					<label>Apellidos: </label><input type="text" maxlength="120" name="apellidos" id="apellidos" value=""/><br>
					<label>Correo: </label><input type="email" maxlength="120" name="correo" id="correo" value=""/><br>	
					<label>Su comentario: </label><textarea id="texto" name="texto"></textarea><br><br>
					<center>					
					<input type="button" id="enviar" name="enviar" value="Enviar" />
					</center>
				</form>	
			</div>
		</div>
		<span id="firma">CIFO 2021</span>
	</div>
</body>
</html>