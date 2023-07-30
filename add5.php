<?php include 'header5.php'; ?>
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
        <form class="post-form" action="savedata5.php" method="post">
            <div class="form-group">
                <label>Employee ID</label>
                <input type="text" name="id" />
            </div>
            <div class="form-group">
                <label>Time In</label>
                <input type="text" name="Time_in" />
            </div>
            <div class="form-group">
                <label>Time Out</label>
                <input type="text" name="Time_out" />
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" name="Date" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</body>

</html>