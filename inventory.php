<?php
include './config.php';
$query = "SELECT * FROM current_inventory";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM shipment_info";
$result2 = mysqli_query($conn, $query2);

$query3 = "SELECT * FROM inventory_history";
$result3 = mysqli_query($conn, $query3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmaceutical Industry Management System</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="stylesheet" href="assets/css/style.css">
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

    <section id="Inventory" class="Inventory section-bg">
        <br>
        <br>
        <br>
        <br>

        <div class="container" data-aos="fade-up">
            <div class="row">
                <header class="section-header">
                    <h3>Inventory Management</h3>
                    <p>
                        View and manage the pharmaceutical products in our inventory.
                        Use the search bar to find specific items quickly.
                        Create, update, or delete data using the buttons below the table.
                    </p>
                </header>

                <!DOCTYPE html>
                <html>

                <head>
                    <title>Inventory Management</title>
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
                    <!-- <label for="tableType">Select Table Type:</label> -->
                    <div>

                        <select name="" class="float-center p-2 pb-3 rounded-2" id="tableType" onchange="toggleTable()" style="font-size: x-large; border: white;">
                            <option value="currentInventory">Current Inventory</option>
                            <option value="shipmentInfo">Shipment Info</option>
                            <option value="inventoryHistory">Inventory History</option>
                        </select>

                        <div class="form-floating float-end ">
                            <input type="search" id="myInput" onkeyup="myFunction()" class="form-control rounded-4 mb-3" placeholder="Search Here">
                            <label for="floatingInput">Search Here</label>
                        </div>
                    </div>

                    <div id="currentInventoryTable" class="table-Container">
                        <table class="table table1" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './header.php';
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['Product_id']; ?></td>
                                        <td><?php echo $row['Product_name']; ?></td>
                                        <td><?php echo $row['Quantity']; ?></td>
                                        <td><?php echo $row['Price']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href='./edit.php?id=<?php echo $row['Product_id']; ?>'>Edit</a>
                                            <a class="btn btn-danger" href='./delete-inline.php?id=<?php echo $row['Product_id']; ?>'>Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <p>Current Inventory Table</p>
                    </div>

                    <div id="shipmentInfoTable" class="table-Container" style="display: none;">
                        <table class="table table2" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Shipment Id</th>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Shipment Date</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './header3.php';
                                while ($row = mysqli_fetch_assoc($result2)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['Shipment_id']; ?></td>
                                        <td><?php echo $row['Product_id']; ?></td>
                                        <td><?php echo $row['Shipment_date']; ?></td>
                                        <td><?php echo $row['Quantity']; ?></td>
                                        <td><?php echo $row['Location']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href='./edit3.php?id=<?php echo $row['Shipment_id']; ?>'>Edit</a>
                                            <a class="btn btn-danger" href='./deleteinline3.php?id=<?php echo $row['Shipment_id']; ?>'>Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <p>Shipment Info Table</p>
                    </div>

                    <div id="inventoryHistoryTable" class="table-Container" style="display: none;">
                        <table class="table table3">
                            <thead>
                                <tr>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include './header2.php';
                                while ($row = mysqli_fetch_assoc($result3)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['Product_id']; ?></td>
                                        <td><?php echo $row['Product_name']; ?></td>
                                        <td><?php echo $row['Quantity']; ?></td>
                                        <td><?php echo $row['Date']; ?></td>
                                        <td><?php echo $row['Location']; ?></td>
                                        <td>
                                            <a class="btn btn-primary" href='./edit2.php?id=<?php echo $row['Product_id']; ?>'>Edit</a>
                                            <a class="btn btn-danger" href='./delete-inline2.php?id=<?php echo $row['Product_id']; ?>'>Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <p>Inventory History Table</p>
                    </div>
                </div>
    </section><!-- End About Section -->

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

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
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