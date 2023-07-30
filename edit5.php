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
        <h2>Update Record</h2>
        <?php
        include 'config.php';
        $pro_id = $_GET['id'];
        $sql = "SELECT * FROM attendance_record WHERE id = {$pro_id}";
        $result = mysqli_query($conn, $sql) or die("query unsuccessful");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <form class="post-form" action="updatedata5.php" method="post">
                    <div class="form-group">
                        <label>Employee ID</label>
                        <input type="text" name="id" value="<?php echo $row['id'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Time In</label>
                        <input type="text" name="Time_in" value="<?php echo $row['Time_in'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Time Out</label>
                        <input type="text" name="Time_out" value="<?php echo $row['Time_out'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="Date" value="<?php echo $row['Date'] ?>" />
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