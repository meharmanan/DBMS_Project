<?php

$ship_id = $_POST['Shipment_id'];
$pro_id = $_POST['Product_id'];
$ship_date = $_POST['Shipment_date'];
$pro_quantity = $_POST['Quantity'];
$pro_location = $_POST['Location'];

include 'config.php';    
$sql = "INSERT INTO shipment_info(Shipment_id, Product_id, Shipment_date, Quantity, Location) VALUES ('{$ship_id}', '{$pro_id}', '{$ship_date}', '{$pro_quantity}', '{$pro_location}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>