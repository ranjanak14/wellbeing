<?php

    $database= new mysqli("localhost","root","","wellbeing");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>