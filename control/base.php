<?php
error_reporting(E_ALL & ~E_NOTICE);
$server = "wbx.technology";
$port = "3306";
$username = "wbxtechn_diagnos";
$password = "N^{4pNdu-T0(";
$db = "wbxtechn_diagnosticApp";
 try{
  //$conn = new PDO("mysql:host=$server;dbname= $db;charset=UTF8", $username, $password); 
  $dbh = new mysqli($server, $username, $password, $db,$port);
} catch( PDOExecption $e ) { 
    print "Error!: " . $e->getMessage() . "</br>"; 
}
?>
