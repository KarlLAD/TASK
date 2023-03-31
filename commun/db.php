<?php

// $mysqli = new mysqli("127.0.0.1", "root", "", "todolist", 3306);

$mysql = new mysqli($dbhost , $dbuser , $dbPassWord , $dbName , 3306) ; 


// envoyer requête , site en maintenance

if ($mysqli->connect_error) {
    echo "Viré plita" ;
    exit() ;
}

?>