<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/table.css">
    <link rel="stylesheet" href="../bootstrap%203.4.1/css/bootstrap.css">
    <title>Table</title>
</head>
<body>
<?php
include_once "database.php";
    //lay sp từ csdl
    // b1 connect  csdl
$sql_txt = "select * from products";
$product = queryDB($sql_txt);
?>
<h1>Danh sách sản phẩm</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Funcion</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($product as $item){?>
    <tr>
        <td scope="row"><?php echo $item["id"]; ?></td>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo $item["price"]."$"; ?></td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a  href="delete.php?delete=<?php echo $item["id"]?>" class="btn btn-primary">Delete</a>
                <a href="edit.php?edit=<?php echo $item["id"]?>" class="btn btn-primary">Edit</a>
                <a class="btn btn-primary">ADD to card</a>
            </div>
        </td>
    </tr>

    <?php }?>
    </tbody>
</table>

<a href="addproduct.php"> Thêm Sản Phẩm</a>
</body>
</html>
