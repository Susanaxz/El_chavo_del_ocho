<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Numitienda categorias</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/backend.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 id="title">Mantenimiento categorias</h1>
		</div><br>
		<div class="row">
			<div id="colLeft" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<table id="lista" border="1"></table>
			</div>

			<div id="colMedium" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<table id="lista" border="1"></table>
			</div>
			
			<div id="colRight" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">	
				<form id="categorias" method="post"> 
					<input type="hidden" name="idcategoria" id="idform" value=""/>
					<label>Descripción (castellano): </label><input type="text" maxlength="120" name="desc_es" id="desc_es" value=""/><br><br>
					<label>Descripción (catalán): </label><input type="text" maxlength="120" name="desc_ca" id="desc_ca" value=""/><br><br>
					<label>Tipo IVA aplicable: </label><input type="number" maxlength="2" name="tipoiva" id="tipoiva" value=""/><br><br>
					<input type="button" id="alta" value="Alta" />&nbsp&nbsp
					<input type="button" id="modi" value="Modificar" />&nbsp&nbsp
					<input type="button" id="baja" value="Eliminar" />
				</form>
			</div>
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