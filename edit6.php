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
        <h2>Update Record</h2>
        <?php
        include 'config.php';
        $e_id = $_GET['id'];
        $sql = "SELECT * FROM salary_details WHERE id = {$e_id}";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <form class="post-form" action="updatedata6.php" method="post">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="id" value="<?php echo $row['id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Basic Salary</label>
                        <input type="text" name="Basic_salary" value="<?php echo $row['Basic_salary'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Deduction</label>
                        <input type="text" name="Deduction" value="<?php echo $row['Deduction'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Bonus</label>
                        <input type="text" name="Bonus" value="<?php echo $row['Bonus'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Net Salary</label>
                        <input type="text" name="Net_salary" value="<?php echo $row['Net_salary'] ?>" />
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