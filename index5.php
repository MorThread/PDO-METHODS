<?php
// Include the dbconfig.php file to establish the database connection
require_once 'dbconfig.php';

// SQL query to update a record in the sold_vehicles table
$sql = "UPDATE sold_vehicles SET assured_name = :assured_name, price = :price WHERE sold_vehicle_id = :id";
$stmt = $pdo->prepare($sql);

// Bind parameters to the query
$stmt->bindParam(':assured_name', $assured_name);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':id', $id);

// Sample data for updating
$assured_name = 'Jane Doe'; // New name
$price = 580000; // Updated price
$id = 1; // Example: updating the vehicle with ID 1

// Execute the update
if ($stmt->execute()) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record.";
}
?>
