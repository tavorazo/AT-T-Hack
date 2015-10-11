<!DOCTYPE html>
<html>
<head>
	<title>DiagnosticApp | Asignar caso a medico</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="../../assets/css/main.css" />
	<link rel="stylesheet" href="../../assets/css/extra.css" />
</head>
<body id="bg-panel">
	<div id="menu">
	    <!--h6>Nombre Usuario | <a href=""><strong>Cerrar sesión</strong></a> </h6-->
	    <a href="../panel.php"><img src="../../images/logo.png"></img> Diagnostic<strong>App</strong></a>
	</div>
		<form action="" style="padding:0 10px;">
			<label for="paciente">Nombre de paciente</label>
			<select name="paciente" id="paciente">
				<option value="">- Paciente -</option>
				<option value="1">Paciente. Uno</option>
				<option value="2">Paciente. Dos</option>
			</select>
			<br><br>
			<label for="doctor">Nombre del doctor</label>
			<select name="doctor" id="doctor">
				<option value="">- Doctor -</option>
				<option value="1">Dr. Uno</option>
				<option value="2">Dr. Dos</option>
			</select>
			<br><br>
			<input value="Asignar doctor" type="submit" class="alt">
		</form>
	</div>	
</body>
</html>