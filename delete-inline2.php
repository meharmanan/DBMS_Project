<?php

$pro_id = $_GET['id'];
include 'config.php';    
$sql = "DELETE FROM inventory_history WHERE Product_id = {$pro_id}";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/inventory.php");
mysqli_close($conn);
?>