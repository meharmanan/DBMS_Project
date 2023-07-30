<?php

$s_id = $_GET['id'];
include 'config.php';    
$sql = "DELETE FROM recent_sales WHERE Sales_id = {$s_id}";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/sales.php");
mysqli_close($conn);
?>