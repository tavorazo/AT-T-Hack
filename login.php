<!DOCTYPE html>
<html>
<head>
	<title>DiagnosticApp | Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/extra.css" />
</head>
<body>
	<div id="bg-login">
	</div>
	
	<div id="etiqueta">INICIA SESIÓN</div>
	<form class="login"> 
		<label for="usuario">Usuario:</label>
		<input type="text" name="usuario" required>
		<label for="password">Contraseña: </label>
		<input type="password" name="contraseña" required>
		<br><br>
		<ul class="actions">
			<center>
				<li><input value="Entrar" type="submit"></li>
			</center>
		</ul>
		<hr><span>ó</span><hr>
		<br><br><br><br>
		<ul class="actions">
			<center>
				<li><a href="index.html#registro" class="button special" style="background:#EE4CBE; border:none">Registrate</a></li>
			</center>
		</ul>	
	</form>
</body>
</html>