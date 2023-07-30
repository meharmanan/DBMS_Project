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
        <h2>Add New Record</h2>
        <form class="post-form" action="savedata8.php" method="post">
            <div class="form-group">
                <label>Customer ID</label>
                <input type="text" name="customer_id" />
            </div>
            <div class="form-group">
                <label>Custmer Name</label>
                <input type="text" name="Customer_name" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="Email" />
            </div>
            <div class="form-group">
                <label>Phone No</label>
                <input type="text" name="Phone_No" />
            </div>
            <div class="form-group">
                <label>Product Ordered</label>
                <input type="text" name="Product_ordered" />
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="Address" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</body>

</html>