<?php

$pro_id = $_POST['id'];
$pro_name = $_POST['Time_in'];
$pro_quantity = $_POST['Time_out'];
$pro_price = $_POST['Date'];

include 'config.php';    
$sql = "INSERT INTO attendance_record(id, Time_in, Time_out, Date) VALUES ('{$pro_id}', '{$pro_name}', '{$pro_quantity}', '{$pro_price}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/payroll.php");
mysqli_close($conn);
?>