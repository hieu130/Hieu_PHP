<?php
$name =$_POST["name"];
$age = $_POST["age"];
$tel = $_POST["tel"];
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
$sql_txt ="insert into sinhviens (name,age,tel) values ('$name','$age','$tel') ";
if($conn->query($sql_txt) === true){
    header("location: list.php");
}else{
    echo "thêm thất bại";
}