<?php

$host = "localhost";
$usename = "root";
$password = "";
$DBname = "Application_Boite_Idee";

//CREATION DE LA CONNEXION 

$connexion = new mysqli ($host,$usename,$password ,$DBname ) ;

/* verifier connection */
if($connexion === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>