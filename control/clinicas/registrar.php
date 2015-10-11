<?php
include("../Back/base.php");
$dbh->query("SELECT id_doctor, (nombre + ' ' + apellidos) as NomDr FROM doctores");

$doctores="";
while($rowDbh=mysql_fetch_object($dbh)){
	$doctores.="<option value='".$rowDbh->id_doctor."'>".$rowDbh->NomDr."</option>";
}

                    
?>
<!DOCTYPE html>
<html>
<head>
	<title>DiagnosticApp | Registrar medico</title>
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
			<label for="doctor">Nombre del doctor</label>
			<select name="doctor" id="doctor">
				<option value="">- Doctor -</option>
				<?php echo($doctores);?>
			</select>
			<br><br>
			<input value="Registrar doctor" type="submit" class="alt">
		</form>
	</div>	
</body>
</html>