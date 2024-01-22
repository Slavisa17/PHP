<?php


    $mysqli = new mysqli("localhost", "root", "", "projekat");
   
    if($mysqli->connect_errno){
        echo "Greška pri konekciji na bazu!";
        exit();
    }


?>