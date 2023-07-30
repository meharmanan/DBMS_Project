<?php include 'header7.php'; ?>
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
        $o_id = $_GET['id'];
        $sql = "SELECT * FROM orders WHERE Order_id = {$o_id}";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <form class="post-form" action="updatedata7.php" method="post">
                    <div class="form-group">
                        <label>Order ID</label>
                        <input type="text" name="Order_id" value="<?php echo $row['Order_id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Customer ID</label>
                        <input type="text" name="Customer_id" value="<?php echo $row['Customer_id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Customer Name</label>
                        <input type="text" name="Customer_name" value="<?php echo $row['Customer_name'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Order Date</label>
                        <input type="text" name="Order_date" value="<?php echo $row['Order_date'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Order Status</label>
                        <input type="text" name="Order_status" value="<?php echo $row['Order_status'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Total Amount</label>
                        <input type="text" name="Total_Amount" value="<?php echo $row['Total_Amount'] ?>" />
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