<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Numitienda productos</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/backend.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 id="title">Mantenimiento productos</h1>
		</div><br>
		<div class="row">
			<div id="colLeft" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<select id="combo1"></select><br><br>
				<label style="width:200px">Productos destacados</label><input id="prod_dest" style="width:20px; border:0px;" type="checkbox" name="prod_dest"><br>
				<table id="lista" border="1"></table><br>
				<div id="paginacion"></div>
			</div>

			<div id="colMedium" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				
			</div>
			
			<div id="colRight" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">	
				<form id="productos" method="post" enctype="multipart/form-data" action="#"> 
					<div id="buttons" style="display:block; height:160px;">
						<div style="width:200px; height:160px; display:inline-block">
							<img id="foto" src=""/>
						</div>
						<div style="display:inline-block; height:160px; width:300px; vertical-align:top; padding-top:40px; text-align:center;">
							<input type="button" id="alta" name="alta" value="Alta" />&nbsp&nbsp
							<input type="button" id="modi" name="modi" value="Modificar" />&nbsp&nbsp
							<input type="button" id="baja" name="baja" value="Eliminar" />
						</div>
					</div>
					<br>
					<input type="hidden" name="idproducto" id="idform" value=""/>
					<label>Categoria: </label><select id="combo2" name="idcategoria"></select><br><br>
					<label>Nombre producto (castellano): </label><input type="text" maxlength="120" name="desc_es" id="desc_es" value=""/><br><br>
					<label>Detalle producto (castellano): </label><textarea name="deta_es" id="deta_es"></textarea><br><br>
					<label>Nombre producto (catalán): </label><input type="text" maxlength="120" name="desc_ca" id="desc_ca" value=""/><br><br>
					<label>Detalle producto (catalán): </label><textarea name="deta_ca" id="deta_ca"></textarea><br><br>
					<label>Calidad: </label><select id="calidad" name="calidad"></select><br><br>
					<label>Precio / stock: </label><input type="number" maxlength="5" name="precio" id="precio" value=""/>
					<input type="number" maxlength="3" name="stock" id="stock" value=""/><br><br>
					<label style="width:250px">Producto destacado</label><input id="destacado" style="width:20px; border:0px;" type="checkbox" name="destacado"><br>
				</form><br><br>
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