<!DOCTYPE HTML>
<!--
Typify by TEMPLATED
templated.co @templatedco
Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>DiagnosticApp</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/extra.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>

	<!-- Banner      -->
	<section id="banner">
		<img src="images/logo.png" alt="">
		<h2>Diagnostic<strong>App</strong></h2>
		<p>Conectate con los <strong>  mejores medicos </strong> del mundo con AT&T </p>
		<ul class="actions">
			<li><a href="#registro" class="button special">Registrate</a></li>
			<li><a href="login.php" class="button special2">Entrar</a></li>
		</ul>
	</section>

	<!-- One -->
	<section id="one" class="wrapper special">
		<div class="inner">
			<header class="major">
				<h2>Ofrecemos</h2>
			</header>
			<div class="features">

				<div class="feature">
					<i class="fa fa-save"></i>
					<h3>Sube tus estudios</h3>
					<p>Pide otras <strong>opiniones </strong> sobre tus resultados.</p>
				</div>
				<div class="feature">
					<i class="fa fa-copy"></i>
					<h3>Sube tus archivos</h3>
					<p>Una base de datos de todo tu <strong>historial</strong>.</p>
				</div>
				<div class="feature">
					<i class="fa fa-envelope-o"></i>
					<h3>Consultas</h3>
					<p>Un <strong>chat </strong> directo y en vivo 24/7.</p>
				</div>
				<div class="feature">
					<i class="fa fa-diamond"></i>
					<h3>Doctores</h3>
					<p>Asesoria <strong>gratuita</strong> y los <strong>mejores</strong> doctores de México en tu celular.</p>
				</div>
	<!--div class="feature">
		<i class="fa fa-paper-plane-o"></i>
		<h3>Feugiat nullam</h3>
		<p>Sed tempus feugiat adipiscing nisl cursus aliquam dolore.</p>
	</div-->
</div>
</div>
</section>

<!-- registro -->
<section id="registro" class="wrapper style2 special">
	<div class="inner narrow">
		<header>
			<h2>Registrate</h2>
		</header>

		<input type="button" class="boton" id="paciente" name="boton1" value="Paciente">
		<input type="button" class="boton" id="doctor" name="boton2" value="Doctor">
		<input type="button" class="boton" id="clinic" name="boton2" value="Clinica">


		<!--Paciente -->
		<form class="grid-form user" method="post" action="#" >
			<label>Registro para pacientes</label><hr>
			<div class="form-control narrow">
				<label for="nombre">Nombre paciente</label>
				<input name="nombre" id="nombre" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="apellido">Apellidos</label>
				<input name="apellido" id="apellido" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="edad">Fecha de nacimiento</label>
				<input name="edad" id="edad" type="date" required style="width:100%">
			</div>
			<div class="form-control narrow">
				<label for="email">Correo</label>
				<input name="email" id="email" type="email" required>
			</div>
			<div class="form-control narrow">
				<label for="email-conf">Confirma tu correo</label>
				<input name="email-conf" id="email-conf" type="email" required>
			</div>
			<div class="form-control narrow">
				<label for="password">Contraseña</label>
				<input name="password" id="password" type="password" required>
			</div>
			<div class="form-control narrow">
				<label for="password-conf">Confirma tu contraseña</label>
				<input name="password-conf" id="password-conf" type="password" required>
			</div>
			<ul class="actions">
				<li><input value="Registrate" type="submit"></li>
			</ul>
		</form>
		<!--doctor-->
		<form class="grid-form doctor" method="post" action="#" >
			<label>Registro para doctores</label><hr>
			<div class="form-control narrow">
				<label for="nombre">Nombre doctor</label>
				<input name="nombre" id="nombre" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="apellido">Apellido</label>
				<input name="apellido" id="apellido" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="cedula">Cedula doctor</label>
				<input name="cedula" id="cedula" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="especialidad">Especialidad</label>
				<input name="especialidad" id="especialidad" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="email">Correo</label>
				<input name="email" id="email" type="email" required>
			</div>
			<div class="form-control narrow">
				<label for="email-conf">Confirma tu correo</label>
				<input name="email-conf" id="email-conf" type="email" required>
			</div>
			<div class="form-control narrow">
				<label for="password">Contraseña</label>
				<input name="password" id="password" type="password" required>
			</div>
			<div class="form-control narrow">
				<label for="password-conf">Confirma tu contraseña</label>
				<input name="password-conf" id="password-conf" type="password" required>
			</div>
			<ul class="actions">
				<li><input value="Registrate" type="submit"></li>
			</ul>
		</form>
		<!--doctor-->
		<form class="grid-form clinic" method="post" action="#" >
			<label>Registro para clinicas</label><hr>
			<div class="form-control narrow">
				<label for="nombre">Nombre de la clinica</label>
				<input name="nombre" id="nombre" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="apellido">Localidad</label>
				<input name="apellido" id="apellido" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="cedula">Cedula clinica</label>
				<input name="cedula" id="cedula" type="text" required>
			</div>
			<div class="form-control narrow">
				<label for="email">Correo de administrador</label>
				<input name="email" id="email" type="email" required>
			</div>
			<div class="form-control narrow">
				<label for="email-conf">Confirma tu correo</label>
				<input name="email-conf" id="email-conf" type="email" required>
			</div>
			<div class="form-control narrow">
				<label for="password">Contraseña</label>
				<input name="password" id="password" type="password" required>
			</div>
			<div class="form-control narrow">
				<label for="password-conf">Confirma tu contraseña</label>
				<input name="password-conf" id="password-conf" type="password" required>
			</div>
			<ul class="actions">
				<li><input value="Registrate" type="submit"></li>
			</ul>
		</form>
	</div>
</section>


<!-- Footer -->
<footer id="footer">
	<div class="copyright">
		&copy; Design: <a href=""> AT&T Hack </a>.
	</div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script src="assets/js/scroll.js"></script>
<script src="assets/js/show-hide.js"></script>

</body>
</html>