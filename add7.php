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
        <h2>Add New Record</h2>
        <form class="post-form" action="savedata7.php" method="post">
            <div class="form-group">
                <label>Order ID</label>
                <input type="text" name="Order_id" />
            </div>
            <div class="form-group">
                <label>Customer ID</label>
                <input type="text" name="Customer_id" />
            </div>
            <div class="form-group">
                <label>Customer Name</label>
                <input type="text" name="Customer_name" />
            </div>
            <div class="form-group">
                <label>Order Date</label>
                <input type="text" name="Order_date" />
            </div>
            <div class="form-group">
                <label>Order Status</label>
                <input type="text" name="Order_status" />
            </div>
            <div class="form-group">
                <label>Total Amount</label>
                <input type="text" name="Total_Amount" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</body>

</html>