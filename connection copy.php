<?php

    $database= new mysqli("localhost","root","Mani123$ ","medicaldb");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>