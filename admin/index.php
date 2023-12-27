<?php include('includes/db_connect.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
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
    <div class="login-form text-center bg-white shadow over-flow-none">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
            <div class="mb-3">
                <input type="text" placeholder="name" required name="admin_name" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <input type="password" placeholder="Password" name="admin_password" required class="form-control"
                    id="exampleInputPassword1">
            </div>
            <div>
                <button class="btn text-white bg-dark" name="login">Submit</button>
            </div>
        </form>

    </div>

    <?php
    if(isset($_POST['login']))
    {
        print_r($_POST); 
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>


</html>