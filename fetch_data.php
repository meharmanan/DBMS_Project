<?php
// Step 1: Connect to the database
$servername = "your_database_hostname";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Test case 1: Display inventory between a price range
$minPrice = 100; // Set the minimum price range
$maxPrice = 500; // Set the maximum price range
$sql = "SELECT * FROM inventory WHERE price BETWEEN $minPrice AND $maxPrice";
$result = $conn->query($sql);

// Test case 2: Display inventory having maximum price
$sqlMaxPrice = "SELECT * FROM inventory ORDER BY price DESC LIMIT 1";
$resultMaxPrice = $conn->query($sqlMaxPrice);

// Test case 3: Display inventory having minimum price
$sqlMinPrice = "SELECT * FROM inventory ORDER BY price ASC LIMIT 1";
$resultMinPrice = $conn->query($sqlMinPrice);

// Test case 4: Display inventory having highest quantity
$sqlMaxQuantity = "SELECT * FROM inventory ORDER BY quantity DESC LIMIT 1";
$resultMaxQuantity = $conn->query($sqlMaxQuantity);

// Test case 5: Display inventory having lowest quantity
$sqlMinQuantity = "SELECT * FROM inventory ORDER BY quantity ASC LIMIT 1";
$resultMinQuantity = $conn->query($sqlMinQuantity);

// Test case 6: Display employee data based on gender
$gender = "Male"; // Set the gender here
$sqlEmployeesByGender = "SELECT * FROM employees WHERE gender = '$gender'";
$resultEmployeesByGender = $conn->query($sqlEmployeesByGender);

// Test case 7: Display employee data based on department
$department = "HR"; // Set the department here
$sqlEmployeesByDepartment = "SELECT * FROM employees WHERE department = '$department'";
$resultEmployeesByDepartment = $conn->query($sqlEmployeesByDepartment);

// Test case 8: Display customer data based on location
$location = "New York"; // Set the location here
$sqlCustomersByLocation = "SELECT * FROM customers WHERE location = '$location'";
$resultCustomersByLocation = $conn->query($sqlCustomersByLocation);

// Test case 9: Display employee IDs based on their attendance between a certain range
$minAttendance = 80; // Set the minimum attendance percentage
$maxAttendance = 100; // Set the maximum attendance percentage
$sqlEmployeeIDsByAttendance = "SELECT employee_id FROM attendance WHERE attendance_percentage BETWEEN $minAttendance AND $maxAttendance";
$resultEmployeeIDsByAttendance = $conn->query($sqlEmployeeIDsByAttendance);

// Step 2: Display the data on the frontend
echo "<html>";
echo "<head>";
echo "<title>Test Case Scenarios</title>";
echo "<style>";
echo "table { border-collapse: collapse; width: 50%; margin: auto; }";
echo "th, td { border: 1px solid black; padding: 8px; text-align: center; }";
echo "th { background-color: #f2f2f2; }";
echo "</style>";
echo "</head>";
echo "<body>";
echo "<h1>Test Case Scenarios</h1>";

// Display the result for Test Case 1: Display inventory between a price range
echo "<h2>Test Case 1: Display inventory between a price range</h2>";
if ($result->num_rows > 0) {
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th></tr>";
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row["id"] . "</td>";
echo "<td>" . $row["name"] . "</td>";
echo "<td>" . $row["price"] . "</td>";
echo "<td>" . $row["quantity"] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "No data found.";
}

// ... (display the results for other test cases)

echo "</body>";
echo "</html>";

// Step 3: Close the database connection
$conn->close();
?>


// Step 3: Close the database connection
$conn->close();
?>