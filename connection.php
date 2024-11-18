
<?php

    $database= new mysqli("medicaldb.cxqospjboyrv.eu-west-2.rds.amazonaws.com:3306","root","Mani123$","medicaldb");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>

