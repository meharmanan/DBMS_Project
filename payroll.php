<?php
include './config.php';
$query4 = "SELECT * FROM employee_info";
$result4 = mysqli_query($conn, $query4);

$query5 = "SELECT * FROM attendance_record";
$result5 = mysqli_query($conn, $query5);

$query6 = "SELECT * FROM salary_details";
$result6 = mysqli_query($conn, $query6);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmaceutical Industry Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

    <link href="index DBMS.html" rel="Home">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style DBMS.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index DBMS.html">PharmaX</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="index DBMS.html">Home</a></li>
                    <li><a class="nav-link scrollto" href="inventory.php">Inventory</a></li>
                    <li><a class="nav-link scrollto" href="payroll.php">Payroll</a></li>
                    <li><a class="nav-link scrollto " href="sales.php">Sales</a></li>
                    <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    </head>

    <body>
        <!-- ======= Services Section ======= -->
        <section id="Payroll" class="Payroll section-bg">
            <br>
            <br>
            <br>
            <br>
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Payroll Management</h3>
                    <p>
                        Handle salary and payment information for employees.
                        View payroll details and manage payment records.
                        Use the search bar to find specific payment information.
                    </p>
                </header>
                <!DOCTYPE html>
                <html>

                <head>
                    <title>Payroll Management</title>
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
                    <style>
                        .container {
                            margin-top: 30px;
                        }

                        .search-bar {
                            margin-bottom: 10px;
                        }

                        .data-table {
                            margin-top: 20px;
                        }

                        .center-buttons {
                            display: flex;
                            justify-content: center;
                        }

                        .dropdown {
                            display: flex;
                            margin-left: auto;
                            font-size: 18px;
                            font-weight: 500;
                        }
                    </style>
                </head>

                </html>

                <div class="btn_inventory">
                    <select name="" id="tableType" onchange="toggleTable()" style="font-size: x-large; border: white;">
                        <option value="employeeInfo">Employ Info</option>
                        <option value="attendanceRecord">Attendance Record</option>
                        <option value="salaryDetails">Salary Details</option>
                    </select>
                    <div id="employeeInfoTable" class="table-Container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Employee ID</th>
                                    <th scope="col">Employee Name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './header4.php';
                                while ($row = mysqli_fetch_assoc($result4)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['ename']; ?></td>
                                        <td><?php echo $row['gender']; ?></td>
                                        <td><?php echo $row['dept']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href='edit4.php?id=<?php echo $row['id']; ?>'>Edit</a>
                                            <a class="btn btn-danger" href='delete-inline4.php?id=<?php echo $row['id']; ?>'>Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <p>Employ Info Table</p>
                    </div>

                    <div id="attendanceRecordTable" class="table-Container" style="display: none;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Employee Id</th>
                                    <th scope="col">Time In</th>
                                    <th scope="col">Time Out</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './header5.php';
                                while ($row = mysqli_fetch_assoc($result5)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['Time_in']; ?></td>
                                        <td><?php echo $row['Time_out']; ?></td>
                                        <td><?php echo $row['Date']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href='edit5.php?id=<?php echo $row['id']; ?>'>Edit</a>
                                            <a class="btn btn-danger" href='delete-inline5.php?id=<?php echo $row['id']; ?>'>Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <p>Attendance Record Table</p>
                    </div>

                    <div id="salaryDetailsTable" class="table-Container" style="display: none;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Employee ID</th>
                                    <th scope="col">Basic Salary</th>
                                    <th scope="col">Deduction</th>
                                    <th scope="col">Bonus</th>
                                    <th scope="col">Net Salary</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include './header6.php';
                                while ($row = mysqli_fetch_assoc($result6)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['Basic_salary']; ?></td>
                                        <td><?php echo $row['Deduction']; ?></td>
                                        <td><?php echo $row['Bonus']; ?></td>
                                        <td><?php echo $row['Net_salary']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href='edit6.php?id=<?php echo $row['id']; ?>'>Edit</a>
                                            <a class="btn btn-danger" href='delete-inline6.php?id=<?php echo $row['id']; ?>'>Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <p>Salary Details Table</p>
                    </div>
                </div>
        </section><!-- End Services Section -->

        <script>
            function toggleTable() {
                const selectedTableType = document.getElementById("tableType").value;
                console.log(selectedTableType);
                const tableContainers = document.getElementsByClassName("table-Container");
                console.log(tableContainers);

                for (const tableContainer of tableContainers) {
                    if (tableContainer.id === selectedTableType + "Table") {
                        tableContainer.style.display = "block";
                    } else {
                        tableContainer.style.display = "none";
                    }
                }
            }
        </script>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>

</html>