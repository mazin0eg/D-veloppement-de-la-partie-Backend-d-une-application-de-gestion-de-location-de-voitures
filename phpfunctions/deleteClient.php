<?php

if( isset($_GET["id"])){
    $id=$_GET["id"];
    echo $id;
    $connection = new mysqli("localhost","root","1234","location");
   
    $stmt= $connection -> query(" DELETE FROM Clients WHERE num_client= $id ; ");
    header("location: ../pages/clietns.php");
} 
?>
