<?php

$pro_id = $_POST['Product_id'];
$pro_name = $_POST['Product_name'];
$pro_quantity = $_POST['Quantity'];
$pro_date = $_POST['Date'];
$pro_location = $_POST['Location'];

include 'config.php';    
$sql = "UPDATE inventory_history SET Product_name = '{$pro_name}', Quantity = '{$pro_quantity}', Date = '{$pro_date}', Location = '{$pro_location}' WHERE Product_id = '{$pro_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>