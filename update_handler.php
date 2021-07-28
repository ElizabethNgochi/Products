<?php
//Check if button has been clicked
if (isset($_POST["btn-update"])){
    //Start receiving data from the form
    $id=$_POST["productid"];
    $update_name = $_POST["name"];
    $update_quantity = $_POST["quantity"];
    $update_size = $_POST["size"];
    $update_price = $_POST["price"];

    //Connect to database
    require_once "db_connection.php";

    $update_query="UPDATE `Products` SET `product_name`='$update_name',`product_quantity`='$update_quantity',
`product_size`='$update_size',`product_price`='$update_price' WHERE id='$id'";

    $update=mysqli_query($connection, $update_query);

    if (isset($update)){
        header("location:products.php");
    }else{
        echo "Updating failed";
    }

}