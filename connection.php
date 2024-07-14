<?php

    $database= new mysqli("localhost","root","","test");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>