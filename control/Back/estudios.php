<?php 

    include("base.php"); 
    $result = $dbh->query("SELECT * FROM tipos_estudios ");
    while ($row = $result->fetch_row()) {   
        echo '<option value="'.$row[0].'">'.$row[1].'</option>';
    }                        

?>


