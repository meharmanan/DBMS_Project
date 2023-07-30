<?php

$ship_id = $_GET['id'];
include 'config.php';    
$sql = "DELETE FROM shipment_info WHERE Shipment_id = {$ship_id}";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>