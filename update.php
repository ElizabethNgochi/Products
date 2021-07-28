<?php
//Check if button has been clicked
if (isset($_GET["id"])){
    $received_name=$_GET["productname"];
    $received_quantity=$_GET["productquantity"];
    $received_size=$_GET["productsize"];
    $received_price=$_GET["productprice"];
    $received_id=$_GET["id"];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Product</title>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<h1 class="text-center text-warning">MAFUTA PRODUCTS SYSTEM</h1>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <form action="update_handler.php" method="post">
            <div class="form-group">
                <label for="">Product Name</label><br>
                <input value="<?php echo $received_name?>" name="name" class="form-control" type="text" placeholder="Enter product name"><br>
            </div>
            <div class="form-group">
                <label for="">Product Quantity</label><br>
                <input value="<?php echo $received_quantity?>" name="quantity" class="form-control" type="text" placeholder="Enter product quantity"><br>
            </div>
            <div class="form-group">
                <label for="">Product Size</label><br>
                <input value="<?php echo $received_size?>" name="size" class="form-control" type="text" placeholder="Enter product size"><br>
            </div>
            <div class="form-group">
                <label for="">Product Price</label><br>
                <input value="<?php echo $received_price?>" name="price" class="form-control" type="text" placeholder="Enter product price"><br>
            </div>
            <input type="hidden" value="<?php echo $received_id?>" name="productid" >
            <input type="submit" value="Update Product" name="btn-update" class="btn btn-block btn-outline-success">
            <a href="products.php" class="btn btn-outline-warning btn-block">Cancel</a>
        </form>
    </div>
    <div class="col-3"></div>
</div>

</body>
</html>
