<?php

$e_id = $_POST['id'];
$e_salary = $_POST['Basic_salary'];
$e_deduction = $_POST['Deduction'];
$e_bonus = $_POST['Bonus'];
$e_netsalary = $_POST['Net_salary'];

include 'config.php';    
$sql = "UPDATE salary_details SET Basic_salary = '{$e_salary}', Deduction = '{$e_deduction}', Bonus = '{$e_bonus}', Net_salary = '{$e_netsalary}' WHERE id = '{$e_id}'";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/payroll.php");
mysqli_close($conn);
?>