<?php
include './config.php';
$query7 = "SELECT * FROM orders";
$result7 = mysqli_query($conn, $query7);

$query8 = "SELECT * FROM customers";
$result8 = mysqli_query($conn, $query8);

$query9 = "SELECT * FROM recent_sales";
$result9 = mysqli_query($conn, $query9);
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
    <!-- ======= Why Us Section ======= -->
    <section id="Sales" class="Sales section-bg">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container-fluid" data-aos="fade-up">

            <header class="section-header">
                <h3>Sales Management</h3>
                <p>
                    Monitor and manage pharmaceutical product sales.
                    Search for sales records based on specific criteria.
                    Use the buttons below the table to make updates or deletions.
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
                <select name="" id="tableType" onchange="toggleTable()" style="font-size: x-large; border: white">
                    <option value="pendingOrders">Pending Orders</option>
                    <option value="customerDetails">Customer Details</option>
                    <option value="recentSales">Recent Sales</option>
                </select>
                <div id="pendingOrdersTable" class="table-Container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './header7.php';
                            while ($row = mysqli_fetch_assoc($result7)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['Order_id']; ?></td>
                                    <td><?php echo $row['Customer_id']; ?></td>
                                    <td><?php echo $row['Customer_name']; ?></td>
                                    <td><?php echo $row['Order_date']; ?></td>
                                    <td><?php echo $row['Order_status']; ?></td>
                                    <td><?php echo $row['Total_Amount']; ?></td>
                                    <td>
                                        <a class="btn btn-primary" href='edit7.php?id=<?php echo $row['Order_id']; ?>'>Edit</a>
                                        <a class="btn btn-danger" href='delete-inline7.php?id=<?php echo $row['Order_id']; ?>'>Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <p>Pending Orders Table</p>
                </div>

                <div id="customerDetailsTable" class="table-Container" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Product Ordered</th>
                                <th scope="col">Address</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './header8.php';
                            while ($row = mysqli_fetch_assoc($result8)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['customer_id']; ?></td>
                                    <td><?php echo $row['Customer_name']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Phone_No']; ?></td>
                                    <td><?php echo $row['Product_ordered']; ?></td>
                                    <td><?php echo $row['Address']; ?></td>
                                    <td>
                                        <a class="btn btn-primary" href='edit8.php?id=<?php echo $row['customer_id']; ?>'>Edit</a>
                                        <a class="btn btn-danger" href='delete-inline8.php?id=<?php echo $row['customer_id']; ?>'>Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <p>Customer Details Table</p>
                </div>

                <div id="recentSalesTable" class="table-Container" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Sales ID</th>
                                <th scope="col">Sales Date</th>
                                <th scope="col">Customer ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Sales Amount</th>
                                <th scope="col">Sales Representative</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './header9.php';
                            while ($row = mysqli_fetch_assoc($result9)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['Sales_id']; ?></td>
                                    <td><?php echo $row['Sales_date']; ?></td>
                                    <td><?php echo $row['Customer_id']; ?></td>
                                    <td><?php echo $row['Customer_name']; ?></td>
                                    <td><?php echo $row['Sales_amount']; ?></td>
                                    <td><?php echo $row['Sales_representative']; ?></td>
                                    <td>
                                        <a class="btn btn-primary" href='edit9.php?id=<?php echo $row['Sales_id']; ?>'>Edit</a>
                                        <a class="btn btn-danger" href='delete-inline9.php?id=<?php echo $row['Sales_id']; ?>'>Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <p>Recent Sales Table</p>
                </div>
            </div>

            <div class="row">
    </section><!-- End Why Us Section -->

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