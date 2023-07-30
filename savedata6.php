<?php

$e_id = $_POST['id'];
$e_salary = $_POST['Basic_salary'];
$e_deduction = $_POST['Deduction'];
$e_bonus = $_POST['Bonus'];
$e_netsalary = $_POST['Net_salary'];

include 'config.php';    
$sql = "INSERT INTO salary_details(id, Basic_salary, Deduction, Bonus, Net_salary) VALUES ('{$e_id}', '{$e_salary}', '{$e_deduction}', '{$e_bonus}', '{$e_netsalary}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

header("Location: http://localhost/DBMS%20Project/payroll.php");
mysqli_close($conn);
?>