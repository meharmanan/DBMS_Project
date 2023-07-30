<?php

$e_id = $_POST['id'];
$e_name = $_POST['ename'];
$e_gender = $_POST['gender'];
$e_dept = $_POST['dept'];

include 'config.php';    
$sql = "INSERT INTO employee_info(id, ename, gender, dept) VALUES ('{$e_id}', '{$e_name}', '{$e_gender}', '{$e_dept}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/payroll.php");
mysqli_close($conn);
?>