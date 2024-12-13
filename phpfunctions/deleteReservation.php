<?php

if( isset($_GET["id"])){
    $id=$_GET["id"];
 
    $connection = new mysqli("localhost","root","1234","location");
   
    $stmt= $connection -> query(" DELETE FROM contracts WHERE ID = $id ; ");
    header("location: ../pages/reservations.php");
} 
?>
