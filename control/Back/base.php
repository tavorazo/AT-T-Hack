<?php
error_reporting(E_ALL & ~E_NOTICE);
$server = "";
$port = "3306";
$username = "";
$password = ";
$db = "";
 try{
  //$conn = new PDO("mysql:host=$server;dbname= $db;charset=UTF8", $username, $password); 
  $dbh = new mysqli($server, $username, $password, $db,$port);
} catch( PDOExecption $e ) { 
    print "Error!: " . $e->getMessage() . "</br>"; 
}
?>
