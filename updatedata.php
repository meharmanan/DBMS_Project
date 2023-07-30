<?php

$pro_id = $_POST['Product_id'];
$pro_name = $_POST['Product_name'];
$pro_quantity = $_POST['Quantity'];
$pro_price = $_POST['Price'];

include 'config.php';    
$sql = "UPDATE current_inventory SET Product_name = '{$pro_name}', Quantity = '{$pro_quantity}', Price = '{$pro_price}' WHERE Product_id = '{$pro_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>