<?php

if (isset($_GET["id"])) {
    $num_immatriculation = $_GET["id"];
    
    // Create a database connection
    $connection = new mysqli("localhost", "root", "1234", "location");

    // Check the connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Use a prepared statement to prevent SQL injection
    $stmt = $connection->prepare("DELETE FROM Voitures WHERE num_immatriculation = ?");
    $stmt->bind_param("s", $num_immatriculation); // Assuming num_immatriculation is a string
    
    // Execute the query and check for errors
    if ($stmt->execute()) {
        header("Location: ../pages/voiture.php");
        exit;
    } else {
        echo "Error deleting record: " . $connection->error;
    }

    // Close the statement and connection
    $stmt->close();
    $connection->close();
}
?>
