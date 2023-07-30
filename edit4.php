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
        <h2>Update Record</h2>
        <?php
        include 'config.php';
        $e_id = $_GET['id'];
        $sql = "SELECT * FROM employee_info WHERE id = {$e_id}";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <form class="post-form" action="updatedata4.php" method="post">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="id" value="<?php echo $row['id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Employee Name</label>
                        <input type="text" name="ename" value="<?php echo $row['ename'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" name="gender" value="<?php echo $row['gender'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Department</label>
                        <input type="text" name="dept" value="<?php echo $row['dept'] ?>" />
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