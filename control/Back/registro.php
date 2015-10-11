<?php
header("Content-Type: text/html;charset=utf-8");

if(isset($_POST["type"]) && !empty($_POST["type"])){
    $type = $_POST["type"];
    echo $_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['email'],$_POST['email-conf'],$_POST['password'],$_POST['password-conf'];
    
    //echo $_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['email'],$_POST['email-conf'],$_POST['password'],$_POST['password-conf'];
    switch($type){
        case 'client':client($_POST['nombre'],$_POST['apellido'],$_POST['edad'],$_POST['email'],$_POST['email-conf'],$_POST['password'],$_POST['password-conf']);
        break;
        case 'doctor':doctor($_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['email'],$_POST['email-conf'],$_POST['password'],$_POST['password-conf']);
        break;
        case 'clinica': clinica($_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['email'],$_POST['email-conf'],$_POST['password'],$_POST['password-conf']);
        break;
    }
}
else{
    echo "a";
    echo $_POST['nombre'],$_POST['apellido'],$_POST['cedula'],$_POST['email'],$_POST['email-conf'],$_POST['password'],$_POST['password-conf'];
    
}
    function client($nombre,$apellido,$edad,$email,$emailc,$password,$passwordc){
        if($nombre!=''&&$apellido!=''&&$edad!=''&&$email!=''&&$emailc!=''&&$password!=''&&$passwordc!=''){
            if($email==$emailc){
                if($password==$passwordc){
                    include("base.php");
                    //$dbh = new PDO("mysql:host=wbx.technology;dbname=wbxtechn_diagnosticApp", 'diagnosticApp', 'diagnosticApp#');
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $dbh->prepare("INSERT INTO paciente(nombre,apellidos,edad,correo,password) VALUES(?, ?, ?, ?, ?)");
                    $stmt->bindParam(1,$nombre);
                    $stmt->bindParam(2,$apellido);
                    $stmt->bindParam(3,$edad);
                    $stmt->bindParam(4,$email);
                    $stmt->bindParam(5,$password);
                    $stmt->execute();
                    echo "ok";
                }
                else{
                    echo 'password';
                }
            }else{
                echo 'mail';
            }
        }else{
            echo 'vacio';
        }
    }
    function doctor($nombre,$apellido,$cedula,$email,$emailc,$password,$passwordc){
       if($nombre!=''&&$apellido!=''&&$email!=''&&$emailc!=''&&$password!=''&&$passwordc!=''){
            if($email==$emailc){
                if($password==$passwordc){
                    include("base.php");
                    //$dbh = new PDO("mysql:host=localhost;dbname=diagnosticApp", 'diagnosticApp', 'diagnosticApp#');
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $dbh->prepare("INSERT INTO doctor(nombre,apellidos,cedula,correo,password) VALUES(?, ?, ?, ?, ?)");
                    $stmt->bindParam(1,$nombre);
                    $stmt->bindParam(2,$apellido);
                    $stmt->bindParam(3,$cedula);
                    $stmt->bindParam(4,$email);
                    $stmt->bindParam(5,$password);
                    $stmt->execute();
                    echo "ok";
                }
                else{
                    echo 'password';
                }
            }else{
                echo 'mail';
            }
        }else{
            echo 'vacio';
        } 
    }
    function clinica($nombre,$apellido,$cedula,$email,$emailc,$password,$passwordc){
          if($nombre!=''&&$apellido!=''&&$email!=''&&$emailc!=''&&$password!=''&&$passwordc!=''){
            if($email==$emailc){
                if($password==$passwordc){
                    include("base.php");
                    //$dbh = new PDO("mysql:host=localhost;dbname=diagnosticApp", 'diagnosticApp', 'diagnosticApp#');
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $dbh->prepare("INSERT INTO clinica(nombre,localidad,cedula,correo,password) VALUES(?, ?, ?, ?, ?)");
                    $stmt->bindParam(1,$nombre);
                    $stmt->bindParam(2,$apellido);
                    $stmt->bindParam(3,$cedula);
                    $stmt->bindParam(4,$email);
                    $stmt->bindParam(5,$password);
                    $stmt->execute();
                    echo "ok";
                }
                else{
                    echo 'password';
                }
            }else{
                echo 'mail';
            }
        }else{
            echo 'vacio';
        } 
    }

?>