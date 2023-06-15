<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Numitienda login</title>
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" media="screen" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/css/backend.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1 id="title">LOGIN BACKEND</h1>
		</div><br>
		<div class="row" style="margin:auto">
			<div id="colRight" style="background:transparent" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">	
			</div>
			<div id="colMedium" style="background: #75C3E7" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">	
				<h3>Introduzca usuario y password</h3>
				<span id='nombreusuario' style="text-align:center;"><?php echo $usuario ?></span>
				<form method="post" action="#"> 
					<label>Usuario: </label><input type="text" name="usuario" id="usuario"><br>
					<label>Password:  </label><input type="password" name="password" id="password"><br><br>
					<input type="button" id="logon" name="logon" value="Log in" >
					<input type="button" id="logoff" name="logoff" value="Log off" >
				</form><br>
			</div>
			<div id="colLeft" style="background:transparent" class="col-xs-4 col-sm-4 col-md-4 col-lg-4">	
			</div>
		</div>
		<span id="firma">CIFO 2021</span>
	</div>
</body>
</html>