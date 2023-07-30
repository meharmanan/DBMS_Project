<?php

$pro_id = $_POST['Product_id'];
$pro_name = $_POST['Product_name'];
$pro_quantity = $_POST['Quantity'];
$pro_price = $_POST['Price'];

include 'config.php';    
$sql = "INSERT INTO current_inventory(Product_id, Product_name, Quantity, Price) VALUES ('{$pro_id}', '{$pro_name}', '{$pro_quantity}', '{$pro_price}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>