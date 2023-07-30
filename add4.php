<?php include './header4.php'; ?>
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
        <form class="post-form" action="savedata4.php" method="post">
            <div class="form-group">
                <label>Employee ID</label>
                <input type="text" name="id" />
            </div>
            <div class="form-group">
                <label>Employee Name</label>
                <input type="text" name="ename" />
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" name="gender" />
            </div>
            <div class="form-group">
                <label>Department</label>
                <input type="text" name="dept" />
            </div>
            <input class="submit" type="submit" value="Save" />
        </form>
    </div>
    </div>
</body>

</html>