<?php
// Include the dbconfig.php file to establish the database connection
require_once 'dbconfig.php';

// Example query to select all records from the sold_vehicles table
$sql = "SELECT * FROM sold_vehicles";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// Fetch all records from the query result
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Render the result in an HTML table
echo "<table border='1'>
        <tr>
            <th>Assured Name</th>
            <th>Unit Description</th>
            <th>Fuel</th>
            <th>Color</th>
            <th>Vehicle Type</th>
            <th>Plate Number</th>
            <th>Price</th>
            <th>Purchase Description</th>
            <th>Buyer Name</th>
        </tr>";

// Loop through the result and populate the table
foreach ($result as $row) {
    echo "<tr>
            <td>{$row['assured_name']}</td>
            <td>{$row['unit_description']}</td>
            <td>{$row['fuel']}</td>
            <td>{$row['color']}</td>
            <td>{$row['vehicle_type']}</td>
            <td>{$row['plate_number']}</td>
            <td>{$row['price']}</td>
            <td>{$row['purchase_description']}</td>
            <td>{$row['buyer_name']}</td>
          </tr>";
}

echo "</table>";
?>
