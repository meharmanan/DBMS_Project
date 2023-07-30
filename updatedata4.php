<?php

$e_id = $_POST['id'];
$e_name = $_POST['ename'];
$e_gender = $_POST['gender'];
$e_dept = $_POST['dept'];

include 'config.php';    
$sql = "UPDATE employee_info SET ename = '{$e_name}', gender = '{$e_gender}', dept = '{$e_dept}' WHERE id = '{$e_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/payroll.php");
mysqli_close($conn);
?>