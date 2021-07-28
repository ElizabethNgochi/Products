<?php

//Check of the delete button has been clicked
if (
isset($_GET ["id"])
) {
    $id = $_GET["id"];

    //Connect to the database
    require_once "db_connection.php";

    //Prepare the delete query
    $delete_query = "DELETE FROM `Products` WHERE id='$id'";
    //Finally delete using mysqli_query()
    $delete = mysqli_query($connection, $delete_query);
    if (isset($delete)) {
        //Redirect back to users.php to see changes
        header("location:products.php");
    } else {
        echo "Deletion failed";
    }
}

