<?php 

require('db_config.php');
require('essentials.php'); 
?>

<?php
session_start();


if ((isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"]==true)) {
   redirect('dashboard.php');

}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Login Panel -->

    <div class="login-form text-center bg-white shadow overflow-hidden rounded">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="p-3">
                <div class="div">
                    <div class="mb-3">
                        <input type="text" name="admin_name" class="form-control text-center" required id="admin_name"
                            placeholder="Admin Name">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="admin_pass" required class="form-control text-center"
                            id="admin_pass" placeholder="Password">
                    </div>
                    <button type="submit" name="login" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <?php

    if (isset($_POST['login'])) {
        $frm_data = filteration($_POST);
        $query = "SELECT * FROM `admin` WHERE `admin_name`=? AND `admin_pass` =?";

        $values = [$frm_data['admin_name'], $frm_data['admin_pass']];

        $res = select($query, $values, "ss");
        if ($res->num_rows == 1) {            
            $row = mysqli_fetch_assoc($res);
            
            $_SESSION['adminLogin'] =true; 
            $_SESSION['adminId'] = $row['sr_no'];
            redirect('dashboard.php');

        } else {
            alert('error','Incorrect Credentials');
        }
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>