<?php include 'header9.php'; ?>
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
        $s_id = $_GET['id'];
        $sql = "SELECT * FROM recent_sales WHERE Sales_id = {$s_id}";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <form class="post-form" action="updatedata9.php" method="post">
                    <div class="form-group">
                        <label>Sales ID</label>
                        <input type="text" name="Sales_id" value="<?php echo $row['Sales_id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Sales Date</label>
                        <input type="text" name="Sales_date" value="<?php echo $row['Sales_date'] ?>" />
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
                        <label>Sales Amount</label>
                        <input type="text" name="Sales_amount" value="<?php echo $row['Sales_amount'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Sales Representatives</label>
                        <input type="text" name="Sales_representative" value="<?php echo $row['Sales_representative'] ?>" />
                    </div>
                    <input class="submit" type="submit" value="Update" />
                </form>
        <?php
            }
        }
        ?>
    </div>
    </div>
</body>

</html>