<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="register_product.php" class="btn btn-light btn-block">Add Products</a>
<h1 class="text-warning text-center">PRODUCTS</h1>
<table class="table table-hover table-primary">
    <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Price</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>

    <?php
    //Connect to the database
    require_once "db_connection.php";
    //Prepare the select query
    $select_query="SELECT * FROM `Products`";
    //Finally fetch the products by use of mysql_query
    $products=mysqli_query($connection, $select_query);
    //Loop through the fetched products to display them one by one
    while ($row=mysqli_fetch_assoc($products)){
        //Extract all the rows and print them one by one
        extract($row);
    echo"
        <tr>
            <td>$product_name</td>
            <td>$product_quantity</td>
            <td>$product_size</td>
            <td>$product_price</td>
            <td><a class='btn btn-danger' href='delete.php?id=$id'>Delete</a></td>
            <td><a class='btn btn-info' href='update.php?id=$id&productname=$product_name&productquantity=$product_quantity
            &productsize=$product_size&productprice=$product_price'>Update</a></td>
        </tr>
         ";

    }


    ?>


</table>
</body>
</html>

