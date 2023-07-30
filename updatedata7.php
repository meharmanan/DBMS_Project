<?php

$o_id = $_POST['Order_id'];
$c_id = $_POST['Customer_id'];
$c_name = $_POST['Customer_name'];
$o_date = $_POST['Order_date'];
$o_status = $_POST['Order_status'];
$o_total = $_POST['Total_Amount'];

include 'config.php';    
$sql = "UPDATE orders SET Customer_id = '{$c_id}', Customer_name = '{$c_name}', Order_date = '{$o_date}', Order_status = '{$o_status}', Total_Amount = '{$o_total}' WHERE Order_id = '{$o_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/sales.php");
mysqli_close($conn);
?>