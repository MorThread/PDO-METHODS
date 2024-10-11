<?php
// Include the dbconfig.php file to establish the database connection
require_once 'dbconfig.php';

// Example query to select a specific record from sold_vehicles
$sql = "SELECT * FROM sold_vehicles WHERE sold_vehicle_id = :id";
$stmt = $pdo->prepare($sql);

// Bind parameter
$stmt->bindParam(':id', $id);
$id = 1; // Example: fetching the vehicle with ID 1

// Execute the statement
$stmt->execute();

// Fetch a single record
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Use <pre> and print_r() to output the result in a readable format
echo "<pre>";
print_r($result);
echo "</pre>";
?>
