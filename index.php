<?php

$host = "localhost";
$user = "root";
$password = "";
$gonzales = "gonzales";
$dsn = "mysql:host={$host};dbname={$gonzales}";

$pdo = new PDO($dsn, $user, $password);
$psdo = new PDO($dsn, $user, $password); // This line is unnecessary and can be removed

// You are using PDO, but you are trying to use the $conn variable which is not defined.
// You should use the $pdo variable instead.

// Check if the connection is valid before executing the query
if ($pdo) {
    // Insert a new record into the `vehicle_total_loss` table
    $query = "INSERT INTO vehicle_total_loss (
        vehicle_id,
        assured_name,
        date_of_loss,
        reason_of_loss,
        unit_description,
        fuel,
        color,
        vehicle_type,
        plate_number,
        status
    ) VALUES (
        21,  -- new vehicle_id
        'New Assured Name',  -- assured_name
        '2024-10-01',  -- date_of_loss
        'collision',  -- reason_of_loss
        '2024 Toyota Camry 2.5',  -- unit_description
        'Gas',  -- fuel
        'Silver',  -- color
        'Sedan',  -- vehicle_type
        'NEW1234',  -- plate_number
        'Renewed'  -- status
    )";

    // PDO uses a different method to execute queries, so you should use the exec() method instead of query()
    if ($pdo->exec($query) === 1) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $pdo->errorInfo()[2];
    }
} else {
    echo "Connection failed. Cannot execute query.";
}

// Close the connection
// PDO connections are automatically closed when the script ends, so you don't need to close it manually.
// However, you can use the following code to close the connection if you want to.
$pdo = null;
?>