<?php
$name = $_POST["name"];
$price = $_POST["price"];
//b1 connect db
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "t2009m__php";

$conn = new mysqli($servername,$username,$password,$dbname);// create cannection
if($conn->connect_error){
    die("connnect error...");//die se lam dung chuong trinh
}
echo "Thành công";
$sql_txt ="insert into products (name ,price) values ('$name',$price) ";
if($conn->query($sql_txt) === true){
    header("location: product.php");
}else{
    echo "thêm thất bại";
}
