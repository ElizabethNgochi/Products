<?php
session_start();
if (!isset($_SESSION["username"])){
    header("location:register_member.php");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/format.css">
</head>

<body>
<div class="container">
<a class="float-right" href="logout.php">Logout</a>
<h1 class="text-warning text-center"><strong>WELCOME TO OUR PAGE <br><?php echo
        $_SESSION['username'];?></strong></h1>
</div>
</body>
</html>
