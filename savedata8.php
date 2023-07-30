<?php

$c_id = $_POST['customer_id'];
$c_name = $_POST['Customer_name'];
$c_email = $_POST['Email'];
$c_phone = $_POST['Phone_No'];
$c_order = $_POST['Product_ordered'];
$c_address = $_POST['Address'];

include 'config.php';    
$sql = "INSERT INTO customers(customer_id, Customer_name, Email, Phone_No, Product_ordered, Address) VALUES ('{$c_id}', '{$c_name}', '{$c_email}', '{$c_phone}', '{$c_order}', '{$c_address}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/sales.php");
mysqli_close($conn);
?>