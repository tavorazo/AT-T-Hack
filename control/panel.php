<!DOCTYPE html>
<html>
<head>
	<title>DiagnosticApp | Panel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/extra.css" />
</head>
<body id="bg-panel">
	<div id="menu">
	    <!--h6>Nombre Usuario | <a href=""><strong>Cerrar sesión</strong></a> </h6-->
	    <img src="../images/logo.png"></img> Diagnostic<strong>App</strong>
	</div>
	<div id="main">
	    <center><h1>!Hola <strong>usuario</strong>! Bienvenida de nuevo</h1></center>
	    <br><br>
	    <div class="panel" id="usuario">
	        <h1>Panel de control</h1>
	        <div class="option">
	            <div id="img"><img src="../images/2.png" style="width: 81px; margin: 15px 41%;"></div>
	            <a href="pacientes/historial.php"><p> Historial de tus archivos</p></a>
	        </div>
	        <div class="option">
	            <div id="img"><img src="../images/3.png"></div>
	            <a href="pacientes/solicita_diagnostico.php"><p> Solicita diagnostico</p></a>
	        </div>
	        <div class="option">
	           <div id="img"><img src="../images/1.png" style="margin-top: 20px; height: 114px;"></div>
	            <p> Chat con el doctor</p>
	        </div>
	        <div class="option">
	            <div id="img"><img src="../images/4.png" style="margin-top: 50px; width: 110px;"></div>
	            <p> Llamada de emergencia</p>
	        </div>
	    </div>
	    
	    
	    <br><br><br><br>
	    
	    <center><h1>!Hola <strong>doctor</strong>! Estos son los trabajos a revisar</h1></center>
	    <br><br>
	    <div class="panel" id="doctor">
	        <div class="lista">
	       		<h1>Lista de casos para revisar</h1>
	            <div class="td">
	                <div id="img">
	                	<center>
	                		<img src="https://cdn1.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/gender-female-circle-pink-3-48.png">
	                	</center>
	                </div>    
	                <div id="datos">
	                    <p><strong>Nombre:</strong> Usuario apellido apellido<br>
	                    <strong>Tipo de documento:</strong> Radiografía<br>
	                    <strong>Fecha:</strong> 0/00/00 <br> 
	                    <strong>Descripción:</strong> Esta es una descrición del documento subido</p>
	                	<a href="doctores/diagnostico.php" class="button special fit small" style="background:#F190D4; float:left; margin:20px 0; width:100%">Diagnosticar</a>    
	                </div>
	            </div>
	            <br><br>
	        	<div class="td">
	                <div id="img">
	                	<center>
	                		<img src="https://cdn1.iconfinder.com/data/icons/social-messaging-ui-color-shapes/128/gender-female-circle-pink-3-48.png">
	                	</center>
	                </div>    
	                <div id="datos">
	                    <p><strong>Nombre:</strong> Usuario apellido apellido<br>
	                    <strong>Tipo de documento:</strong> Radiografía<br>
	                    <strong>Fecha:</strong> 0/00/00 <br> 
	                    <strong>Descripción:</strong> Esta es una descrición del documento subido</p>
	                	<a href="doctores/diagnostico.php" class="button special fit small" style="background:#F190D4; float:left; margin:20px 0; width:100%">Diagnosticar</a>    
	                </div>
	            </div>
	        </div>
	    </div>
	    
	    
	    <br><br><br>
	    
	    <center><h1>!Bienvenida <strong>clinica</strong>! Estamos listos para trabajar</h1></center>
	    <br><br>
	    <div class="panel" id="doctor">
	       <div class="lista">
	       		<h1>Panel de control</h1>
	        </div> 
	        <div class="option" style="margin-top:50px">
	            <div id="img"><img src="../images/2.png" style="width: 81px; margin: 15px 41%;"></div>
	            <a href="clinicas/registrar.php"><p> Registra tus doctores</p></a>
	        </div>
	        <div class="option" style="margin-top:50px">
		        <div id="img"><img src="../images/1.png" style="margin-top: 20px; height: 114px;"></div>
	            <a href="clinicas/asignar_medico.php"><p> Asigna diagnosticos a tus doctores</p></a>
	        </div>
	    </div>

	    
	    
	</div>
</body>
</html>