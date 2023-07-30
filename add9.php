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
        <h2>Add New Record</h2>
        <form class="post-form" action="savedata9.php" method="post">
            <div class="form-group">
                <label>Sales ID</label>
                <input type="text" name="Sales_id" />
            </div>
            <div class="form-group">
                <label>Sales Date</label>
                <input type="text" name="Sales_date" />
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
                <label>Sales Amount</label>
                <input type="text" name="Sales_amount" />
            </div>
            <div class="form-group">
                <label>Sales_representatives</label>
                <input type="text" name="Sales_representative" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</body>

</html>