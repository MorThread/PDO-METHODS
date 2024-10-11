<?php
// Include the dbconfig.php file to establish the database connection
require_once 'dbconfig.php';

// Example query to select all records from the sold_vehicles table
$sql = "SELECT * FROM sold_vehicles";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all records from the query result
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Use <pre> and print_r() to output the result in a readable format
echo "<pre>";
print_r($result);
echo "</pre>";
?>
