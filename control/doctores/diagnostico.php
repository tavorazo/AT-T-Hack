<!DOCTYPE html>
<html>
<head>
	<title>DiagnosticApp | Caso paciente</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="../../assets/css/main.css" />
	<link rel="stylesheet" href="../../assets/css/extra.css" />
	<link rel = 'stylesheet' href = 'css/style.css'>
		<link rel = 'stylesheet' href = 'owl.carousel/owl-carousel/owl.theme.css'>
		<link rel = 'stylesheet' href = 'owl.carousel/owl-carousel/owl.transitions.css'>
		<link rel = 'stylesheet' href = 'owl.carousel/owl-carousel/owl.carousel.css'>
		<script src = 'Dependency/jquery-1.11.3.min.js'></script>
		<script src = 'owl.carousel/owl-carousel/owl.carousel.min.js'></script>
		<style> 
			span{     visibility: hidden;}
		</style>
</head>
<body id="bg-panel">
	<div id="menu">
	    <!--h6>Nombre Usuario | <a href=""><strong>Cerrar sesión</strong></a> </h6-->
	    <a href="../panel.php"><img src="../../images/logo.png"></img> Diagnostic<strong>App</strong></a>
	</div>
	<div id="main" style="padding:0 10px">
		<?php
			include_once('picture.php');
		?>
		<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					goToFirstSpeed : 50,
					navigation : false,
					slideSpeed : 50,
					paginationSpeed : 50,
					singleItem : true, 
					dots: false
				});
			});
		</script>
		<div class="td">    
            <div id="datos" style="margin-top:20px; padding:10px 5px; ">
                <p><strong>Doctor:</strong> Dr Nombre Apellido<br>
                <strong>Fecha:</strong> 0/00/00 <br> </p>
            	<br><br>
            	<textarea name="Diagnostico" id="" cols="20" rows="10" style="background:#fff" placeholder="Escribe tu diagnostico medico"></textarea>
            	<br><br>
				<input value="Enviar diagnostico" type="submit" class="alt" style="font-size:.8em; padding:5px; height:40px">
            </div>
        </div>
	</div>	
</body>
</html>
