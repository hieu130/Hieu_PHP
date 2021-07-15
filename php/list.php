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
<?php
    //lay sinh vien từ csdl
    // b1 connect  csdl
$severname = "localhost";
$username ="root";
$password = "";
$dbname = "t2009m__php";
$conn = new mysqli($severname,$username,$password,$dbname);
if($conn->connect_error){
    die("connect error"); //die se dung chuong trinh o day
}
//echo connect successfully
$sql_txt = "select * from sinhviens";
$rs = $conn ->query($sql_txt);
$dssinhvien =[];
if ($rs->num_rows>0){ //kiem tra xem co du lieu hay khong
    while ($row = $rs->fetch_assoc()){
        $dssinhvien[] = $row;
    }
}

?>
<a href="themsinhvien.php">Thêm sinh viên</a>
<ul>
    <?php foreach ($dssinhvien as $item){ ?>
        <li><a href="chitietsinhvien.php?id=<?php echo $item["id"]; ?>"> <?php echo $item["name"]."--".$item["tel"];?></a></li>
    <?php } ?>
</ul>
</body>
</html>