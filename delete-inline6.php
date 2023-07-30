<?php

$e_id = $_GET['id'];
include 'config.php';    
$sql = "DELETE FROM  salary_details WHERE id = {$e_id}";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/payroll.php");
mysqli_close($conn);
?>