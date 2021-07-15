<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien</title>
</head>
</html>
<body>
<a href="list.php"><< Trở lại</a>
<?php
$id = $_GET["id"];
// lay sinh vien di db
// bă connect db
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "t2009m__php";

$conn = new mysqli($servername,$username,$password,$dbname);// create cannection
if($conn->connect_error){
    die("thất bại");
}
echo "Thành công";
$sql_txt = "select * from sinhviens where id =$id";
$rs = $conn->query($sql_txt);
$sv = null;
if($rs->num_rows>0){
    while ($row = $rs->fetch_assoc()){
        $sv = $row;
    }
}
if ($sv ==null) header("Location :list.php");
?>
<ul>
    <?php foreach ($sv as $key=>$value){?>
        <li><?php echo $key.":".$value;?></li>
    <?php } ?>
</ul>
</body>
