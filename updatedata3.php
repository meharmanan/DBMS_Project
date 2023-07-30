<?php
$ship_id = $_POST['Shipment_id'];
$pro_id = $_POST['Product_id'];
$ship_date = $_POST['Shipment_date'];
$pro_quantity = $_POST['Quantity'];
$pro_location = $_POST['Location'];

include 'config.php';    
$sql = "UPDATE shipment_info SET Product_id = '{$pro_id}', Shipment_date = '{$ship_date}', Quantity = '{$pro_quantity}', Location = '{$pro_location}' WHERE Shipment_id = '{$ship_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>