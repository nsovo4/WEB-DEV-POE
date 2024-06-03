<?php

@include 'cnfig.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>

    <style>

    .container {
        min-width: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        padding-bottom: 60px;
    }

    .container .content {
        text-align: center;
    }

    .container .content h3 {
        font-size: 30px;
        color: #333;
    }

    .container .content h3 span {
        background: crimson;
        color: #fff;
        border-radius: 5px;
        padding: 0 15px;
    }

    .container .content h1 {
        font-size: 50px;
        color: #333;
    }

    .container .content h1 span {
        color: crimson;
    }

    .container .content p {
        font-size: 25px;
        margin-bottom: 20px;
    }

    .container .content .btn {
        display: inline-block;
        padding: 10px 30px;
        font-size: 20px;
        background: #333;
        color: #fff;
        margin: 0 5px;
        text-transform: capitalize;
    }

    .container .content .btn:hover {
        background: crimson;
    }



    </style>

</head>
<body>

<div class="container">
  <div class="content">
    <h3>hi, <span>admin</span></h3>
    <h1>Welcome <span> <?php echo $_SESSION['admin_name'] ?> </span></h1>
    <p>this is an admin page</p>
    <a href="login_form.php" class="btn">Login</a>
    <a href="register_form.php" class="btn">Register</a>
    <a href="logout.php" class="btn">Logout</a>
  </div>
</div>
    
</body>
</html>