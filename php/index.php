<?php
$x = 10; //number
$y = "Hello World"; //string
echo $x; // hiển thị
$z = "T2009M";
$z = $z."Hello everybody";
$y = $y.$y;
$y.=$y; //chuoi dung . de noi
$x = $x + 10; // so dung "+ - * /"
if ($x > 10){
    echo "x > 10";
}
for ($i = 0;$i <10;$i++){
echo "i =".$i;
}
$arr = []; //khai bao arr
$arr[0] = 176;
$arr[1] = "Hoa huong duong"; //truyen vao theo chi muc (i)
$arr[] = 103; //tu dong them chi muc 2

$arr["name"] = "Nguyen Van A"; //them phan ki  tu kieu truyen  theo chi muc  string name : nguyen van a
foreach ($arr as $item) { //$item tuong duong voi $arr[i]
    echo $item."<br/>";
}
$human = [];
$human["name"] = "Le Van Nam";
$human["Age"] = "19";
$human["Tel"] = "098765432";
foreach ($human as $key =>$item){
    echo $key."=".$item."<br/>";
}