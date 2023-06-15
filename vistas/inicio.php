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
		<nav></nav>
		<div class="row">
			<div id="colLeft" class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
				<div id="destacados">
					<div class="row"><h2>Productos destacados</h2></div>
					
				</div>
			</div>
			<div id="colMedium" class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			</div>
			<div id="colRight" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">	
				<div class='centrar'>
					<input type="text" maxlength="6" name="contador" id="contador" disabled value=""/><br><br>
					<p class="formlogin" style="font-size:1em">Identifiquese o dese de alta como nuevo usuario</p><br><br>
					<form id="formlogin" method="post" style="text-align:center" action="#">
						<input class="formlogin" type="text" name="usuario" id="usuario" placeholder="Usuario"><br>
						<input class="formlogin" type="password" name="password" id="password" placeholder="Password"><br><br>
						<input class="formlogin" type="button" id="login" name="login" value="Login" >
						<input class="formlogoff" type="button" id="logoff" name="logoff" value="Logoff" >
					</form>
					<hr>
					<form id="registro" method="post" style="text-align:center" action="registro.php">
						<input class="formlogin" type="submit" id="registro" name="registro" value="Registrarse" >
					</form>
					<span id="nombreusuario"></span>
					<h3>NOTICIAS DESTACADAS</h3>
					<div class="noticias" id="noticias"></div>
		            <br>
				</div>	
			</div>
		</div>
		<span id="firma">CIFO 2021</span>
	</div>
</body>
</html>