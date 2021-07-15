<?php
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];

include_once "database.php";
$sql_txt = "UPDATE `products` SET `id`=$id,`name`='$name',`price`= $price WHERE id = $id ";
if (updateDB($sql_txt)){
    header("Location: product.php");
}
