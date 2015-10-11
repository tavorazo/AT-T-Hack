<?php 
header("Content-Type: text/html;charset=utf-8");

	
    include("base.php"); 
    $dbh->query("INSERT INTO diagnosticos(id_estudio,id_archivo,descripcion) VALUES($id_estudio, $id_archivo, $descripcion)");
                            

?>