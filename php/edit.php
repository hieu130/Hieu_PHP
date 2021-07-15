<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/addpr.css">
    <link rel="stylesheet" href="../bootstrap%203.4.1/css/bootstrap.css">
    <title>Table</title>
</head>
<body>
<?php
// lay chi tiet sinh vien theo id
// truy van sinh vien theo id
include_once "database.php";
$id = $_GET["edit"];
//    echo "Connect successfully";
$sql_txt = "select * from products where id = $id";
$product = productDB($sql_txt);
?>
<h1> Update Sản Phẩm</h1>
<div class="container">
    <div class="row">
        <div class="row">
            <form method="post" action="update.php">
            <div class="col-md-4">
                <label style="font-weight: 500" for="fname">Name Product</label><br/>
                <input type="text" id="fname" name="name" value="<?php echo $product["name"];?>">
            </div>
            <div class="col-md-4">
                <input type="hidden" id="middle" name="id" value="<?php echo $product["id"];?>">
                <label style="font-weight: 500" for="middle">Price</label><br/>
                <input type="number" id="middle" name="price" value="<?php echo $product["price"];?>">
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="back">
            <a href="product.php"><< Back </a>
        </div>
        <div class="button">
            <button type="submit" onclick="alert('Sua thanh cong')">Update</button>
        </div>
    </form>
        </div>
</body>
