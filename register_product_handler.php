<?php
//Check if button add has been clicked
if (isset($_POST["btn-add"])) {
    //Start receiving data from the form
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $size = $_POST["size"];
    $price = $_POST["price"];

    $total_price =$quantity*$price;



//Now connect to the database
    require_once "db_connection.php";

//Prepare insert query to save the data
    $insert_query = "INSERT INTO `Products`(`id`, `product_name`, `product_quantity`, `product_size`, `product_price`)
VALUES (null,'$name','$quantity','$size','$total_price')";

//Finally save by use of mysql_query()
    $save = mysqli_query($connection, $insert_query);

//Check if the saving was successful
    if (isset($save)) {
        header("location:register_product.php");
    } else {
        echo "User registration failed";
    }

}