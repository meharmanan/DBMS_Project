<?php include 'header8.php'; ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div id="main-content">
        <h2>Update Record</h2>
        <?php
        include 'config.php';
        $c_id = $_GET['id'];
        $sql = "SELECT * FROM customers WHERE customer_id = {$c_id}";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <form class="post-form" action="updatedata8.php" method="post">
                    <div class="form-group">
                        <label>Customer ID</label>
                        <input type="text" name="customer_id" value="<?php echo $row['customer_id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" name="Customer_name" value="<?php echo $row['Customer_name'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="Email" value="<?php echo $row['Email'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Phone No</label>
                        <input type="text" name="Phone_No" value="<?php echo $row['Phone_No'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Product Ordered</label>
                        <input type="text" name="Product_ordered" value="<?php echo $row['Product_ordered'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="Address" value="<?php echo $row['Address'] ?>" />
                    </div>
                    <input class="submit" type="submit" value="Update" />
                </form>
        <?php
            }
        }
        ?>
    </div>
</body>

</html>