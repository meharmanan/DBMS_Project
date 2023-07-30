<?php include 'header6.php'; ?>
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
        <form class="post-form" action="savedata6.php" method="post">
            <div class="form-group">
                <label>Employee ID</label>
                <input type="text" name="id" />
            </div>
            <div class="form-group">
                <label>Basic Salary</label>
                <input type="text" name="Basic_salary" />
            </div>
            <div class="form-group">
                <label>Deduction</label>
                <input type="text" name="Deduction" />
            </div>
            <div class="form-group">
                <label>Bonus</label>
                <input type="text" name="Bonus" />
            </div>
            <div class="form-group">
                <label>Net Salary</label>
                <input type="text" name="Net_salary" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
</body>

</html>