<?php 
	header("Content-Type: text/html;charset=utf-8");
	if(isset($_POST["usuario"]) && !empty($_POST["usuario"])){
		if(isset($_POST["password"]) && !empty($_POST["password"])){
			require(../base.php)
			$user = $_POST["usuario"];
			$password = $_POST["password"];
			$dbh->query("Select password from paciente, clinica , doctor where nombre ='$usuario'");
		}
	}
?>