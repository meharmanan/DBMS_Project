<?php

$s_id = $_POST['Sales_id'];
$s_date = $_POST['Sales_date'];
$c_id = $_POST['Customer_id'];
$c_name = $_POST['Customer_name'];
$s_amount = $_POST['Sales_amount'];
$s_representative = $_POST['Sales_representative'];

include 'config.php';    
$sql = "INSERT INTO recent_sales(Sales_id, Sales_date, Customer_id, Customer_name, Sales_amount, Sales_representative) VALUES ('{$s_id}', '{$s_date}', '{$c_id}', '{$c_name}', '{$s_amount}', '{$s_representative}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/sales.php");
mysqli_close($conn);
?>