<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Numitienda usuarios</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/backend.css">
</head>
<body>
	<div class="container">
		<div id="alerta">
			<p id="descripcion"></p><br>
			<button id="close">Cerrar</button>
		</div>
		<div class="row">
			<h1 id="title">Mantenimiento usuarios</h1>
		</div><br>
		<div class="row">
			<div id="colLeft" class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<ul id="listausuarios">
					<li><a href="0">All </a></li>
					<li><a href="A">A </a></li>
					<li><a href="B">B </a></li>
					<li><a href="C">C </a></li>
					<li><a href="D">D </a></li>
					<li><a href="E">E </a></li>
					<li><a href="F">F </a></li>
					<li><a href="G">G </a></li>
					<li><a href="H">H </a></li>
					<li><a href="I">I </a></li>
					<li><a href="J">J </a></li>
					<li><a href="K">K </a></li>
					<li><a href="L">L </a></li>
					<li><a href="M">M </a></li>
					<li><a href="N">N </a></li>
					<li><a href="O">O </a></li>
					<li><a href="P">P </a></li>
					<li><a href="Q">Q </a></li>
					<li><a href="R">R </a></li>
					<li><a href="S">S </a></li>
					<li><a href="T">T </a></li>
					<li><a href="U">U </a></li>
					<li><a href="V">V </a></li>
					<li><a href="W">W </a></li>
					<li><a href="X">X </a></li>
					<li><a href="Y">Y </a></li>
					<li><a href="Z">Z </a></li>
				</ul><br>
				
				<table id="lista" border="1"></table><br>
				<div id="paginacion"></div>
			</div>
			
			<div id="colRight" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">	
				<form id="usuarios" method="post" action="#"> 	
					<center>					
					<input type="button" id="alta" name="alta" value="Alta" />&nbsp&nbsp
					<input type="button" id="modi" name="modi" value="Modificar" />&nbsp&nbsp
					<input type="button" id="baja" name="baja" value="Eliminar" />
					</center><br><br>
					<input type="hidden" name="idusuario" id="idusuario" value=""/>
					<label>Nombre: </label><input type="text" maxlength="120" name="nombre" id="nombre" value=""/><br><br>		
					<label>Apellidos: </label><input type="text" maxlength="120" name="apellidos" id="apellidos" value=""/><br><br>		
					<label>NIF: </label><input style="width:100px" type="text" maxlength="9" name="nif" id="nif" value=""/><br><br>	
					<label>Dirección: </label><input type="text" maxlength="120" name="direccion" id="direccion" value=""/><br><br>
					<label>Población: </label><input type="text" maxlength="120" name="poblacion" id="poblacion" value=""/><br><br>
					<label>Provincia: </label><select id="provincia" name="provincia"></select><br><br>
					<label>CP: </label><input style="width:60px" type="text" maxlength="5" name="codigo" id="codigo" value=""/><br><br>
					<label>Teléfono: </label><input style="width:100px" type="" maxlength="9" name="telefono" id="telefono" value=""/><br><br>
					<label>Correo: </label><input type="email" maxlength="120" name="email" id="email" value=""/><br><br>
					<label>Nombre usuario: </label><input style="width:100px" type="text" maxlength="20" name="username" id="username" value=""/><br><br>
					<label>Tipo usuario: </label><select id="tipo" name="tipo"></select><br><br>
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