<?php

$s_id = $_POST['Sales_id'];
$s_date = $_POST['Sales_date'];
$c_id = $_POST['Customer_id'];
$c_name = $_POST['Customer_name'];
$s_amount = $_POST['Sales_amount'];
$s_representative = $_POST['Sales_representative'];

include 'config.php';    
$sql = "UPDATE recent_sales SET Sales_date = '{$s_date}', Customer_id = '{$c_id}', Customer_name = '{$c_name}', Sales_amount = '{$s_amount}', Sales_representative = '{$s_representative}'  WHERE Sales_id = '{$s_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/sales.php");
mysqli_close($conn);
?>