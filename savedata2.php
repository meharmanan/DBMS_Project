<?php
$pro_id = $_POST['Product_id'];
$pro_name = $_POST['Product_name'];
$pro_quantity = $_POST['Quantity'];
$pro_date = $_POST['Date'];
$pro_location = $_POST['Location'];

include 'config.php';    
$sql = "INSERT INTO inventory_history(Product_id, Product_name, Quantity, Date, Location) VALUES ('{$pro_id}', '{$pro_name}', '{$pro_quantity}', '{$pro_date}', '{$pro_location}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>