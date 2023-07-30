<?php

$c_id = $_POST['customer_id'];
$c_name = $_POST['Customer_name'];
$c_email = $_POST['Email'];
$c_phone = $_POST['Phone_No'];
$c_order = $_POST['Product_ordered'];
$c_address = $_POST['Address'];

include 'config.php';    
$sql = "UPDATE customers SET Customer_name = '{$c_name}', Email = '{$c_email}', Phone_No = '{$c_phone}', Product_ordered = '{$c_order}', Address = '{$c_address}' WHERE customer_id = '{$c_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/sales.php");
mysqli_close($conn);
?>