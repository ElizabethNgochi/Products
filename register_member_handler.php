<?php

$username=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["pass"];

require_once "db_connection.php";

$s_query="SELECT * FROM `Registration` WHERE Username='$username'";

$result=mysqli_query($connection, $s_query);

$num=mysqli_num_rows($result);

if($num==1){
    echo "Username already taken";
}else{
    $register="INSERT INTO `Registration`(`Username`, `EmailAddress`, `Password`)
    VALUES ('$username','$email','$pass')";
    mysqli_query($connection, $register);
    header("location:register_product.php");
}

