<?php

$pro_id = $_POST['id'];
$pro_name = $_POST['Time_in'];
$pro_quantity = $_POST['Time_out'];
$pro_price = $_POST['Date'];

include 'config.php';    
$sql = "UPDATE attendance_record SET Time_in = '{$pro_name}', Time_out = '{$pro_quantity}', Date = '{$pro_price}' WHERE id = '{$pro_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/payroll.php");
mysqli_close($conn);
?>