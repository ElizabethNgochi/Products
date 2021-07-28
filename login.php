<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/format.css">

</head>
<body class="regbody">
<div class="container">
        <div class="row">
            <div class="col-6 reg">
                <h1 class="text-center text-capitalize text-warning"><strong>Login here</strong></h1>
                <form action="validation.php" method="post">
                    <div class="form-group">
                        <label class="font" for="">Username</label><br>
                        <input type="text" class="form-control" name="name" required><br><br>
                    </div>

                    <div class="form-group">
                        <label class="font" for="">Password</label><br>
                        <input type="password" class="form-control" name="pass" required><br><br>
                    </div>

                    <input type="submit" value="Login" class="btn btn-info">
                    <p>Don't have an account?<a href="register_member.php">Register</a></p>
                </form>
            </div>
        </div>
</div>
</body>
</html>
