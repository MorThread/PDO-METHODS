<?php
// Include the dbconfig.php file to establish the database connection
require_once 'dbconfig.php';

// SQL query to insert a new record into the sold_vehicles table
$sql = "INSERT INTO sold_vehicles (assured_name, unit_description, fuel, color, vehicle_type, plate_number, price, purchase_description, buyer_name) 
        VALUES (:assured_name, :unit_description, :fuel, :color, :vehicle_type, :plate_number, :price, :purchase_description, :buyer_name)";

$stmt = $pdo->prepare($sql);

// Bind parameters to the query
$stmt->bindParam(':assured_name', $assured_name);
$stmt->bindParam(':unit_description', $unit_description);
$stmt->bindParam(':fuel', $fuel);
$stmt->bindParam(':color', $color);
$stmt->bindParam(':vehicle_type', $vehicle_type);
$stmt->bindParam(':plate_number', $plate_number);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':purchase_description', $purchase_description);
$stmt->bindParam(':buyer_name', $buyer_name);

// Sample data
$assured_name = 'John Doe';
$unit_description = '2020 Honda Civic';
$fuel = 'Gas';
$color = 'Black';
$vehicle_type = 'Sedan';
$plate_number = 'ABC1234';
$price = 600000;
$purchase_description = 'Full Payment';
$buyer_name = 'Jane Smith';

// Execute the insertion
if ($stmt->execute()) {
    echo "Record inserted successfully!";
} else {
    echo "Error inserting record.";
}
?>
