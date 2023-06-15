		<form id="usuarios" method="post" action="#"> 	
			<center><h2>Contacto</h2></center>
			<p>Todos los campos excepto Teléfono son obligatorios</p>
			<input type="hidden" name="idusuario" id="idusuario" value=""/>
			<label>Nombre: </label><input type="text" maxlength="120" name="nombre" id="nombre" value=""/><br>	
			<label>Apellidos: </label><input type="text" maxlength="120" name="apellidos" id="apellidos" value=""/><br>	
			<label>NIF: </label><input style="width:100px" type="text" maxlength="9" name="nif" id="nif" value=""/><br>
			<label>Idioma de contacto: </label><select id="idioma" name="idioma"></select><br>
			<label>Dirección: </label><input type="text" maxlength="120" name="direccion" id="direccion" value=""/><br>
			<label>Población: </label><input type="text" maxlength="120" name="poblacion" id="poblacion" value=""/><br>
			<label>Provincia: </label><select id="provincia" name="provincia"></select><br>
			<label>CP: </label><input style="width:60px" type="text" maxlength="5" name="codigo" id="codigo" value=""/><br>
			<label>Teléfono: </label><input style="width:100px" type="" maxlength="9" name="telefono" id="telefono" value=""/><br>
			<label>Correo: </label><input type="email" maxlength="120" name="correo" id="correo" value=""/><br>
			<label>Nombre usuario: </label><input type="text" name="usuario" id="usuario" ><br>
			<label>Password: </label><input type="password" name="password1" id="password1"><br>	
			<label>Repita la Password: </label><input type="password" name="password2" id="password2"><br><br>
			<center>					
			<input type="button" id="alta" name="alta" value="Registrarse" />&nbsp&nbsp
			<input style="display:none" type="button" id="modi" name="modi" value="Modificar" />
			</center>
		</form><br><br>