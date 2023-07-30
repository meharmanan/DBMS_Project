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
        <h2>Add New Record</h2>
        <form class="post-form" action="savedata2.php" method="post">
            <div class="form-group">
                <label>Product ID</label>
                <input type="text" name="Product_id" />
            </div>
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="Product_name" />
            </div>
            <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="Quantity" />
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" name="Date" />
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="Location" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
    </div>
</body>

</html>