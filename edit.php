<?php include 'header.php'; ?>
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
        $pro_id = $_GET['id'];
        $sql = "SELECT * FROM current_inventory WHERE Product_id = {$pro_id}";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <form class="post-form" action="updatedata.php" method="post">
                    <div class="form-group">
                        <label>Product ID</label>
                        <input type="text" name="Product_id" value="<?php echo $row['Product_id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="Product_name" value="<?php echo $row['Product_name'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" name="Quantity" value="<?php echo $row['Quantity'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="Price" value="<?php echo $row['Price'] ?>" />
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