<?php
// Include the dbconfig.php file to establish the database connection
require_once 'dbconfig.php';

// SQL query to delete a record from the sold_vehicles table
$sql = "DELETE FROM sold_vehicles WHERE sold_vehicle_id = :id";
$stmt = $pdo->prepare($sql);

// Bind parameter
$stmt->bindParam(':id', $id);

// Specify the ID of the record to delete
$id = 1; // Example: delete the vehicle with ID 1

// Execute the deletion
if ($stmt->execute()) {
    echo "Record deleted successfully!";
} else {
    echo "Error deleting record.";
}
?>
