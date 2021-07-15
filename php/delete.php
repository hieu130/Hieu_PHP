<?php

include_once "database.php";
$id = $_GET["delete"];
$sql_txt = "DELETE FROM `products` WHERE id = $id";
if (updateDB($sql_txt)) {
    header("Location: product.php");
}

