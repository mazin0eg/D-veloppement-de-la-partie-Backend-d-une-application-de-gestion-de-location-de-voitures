<?php

if( isset($_GET["num_immatriculation"])){
    $num_immatriculation=$_GET["num_immatriculation"];
    echo $id;
    $connection = new mysqli(hostname: "localhost",username: "root",password: "1234",database: "location");
    $stmt= $connection -> query(query: " DELETE FROM Clients WHERE num_immatriculation= $num_immatriculation ; ");
    header(header: "location: ../pages/voiture.php");
} 
?>