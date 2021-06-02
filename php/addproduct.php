<!doctype html>
<html lang="en">
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
<h1> Thêm Sản Phẩm</h1>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4">
                <label style="font-weight: 500" for="fname">Name Product</label><br/>
                <input type="text" id="fname" name="fname" required><br/>
            </div>
            <div class="col-md-4">
                <label style="font-weight: 500" for="middle">Price</label><br/>
                <input type="number" id="middle" name="fname"><br/>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="back">
            <a href="category.php"><< Back </a>
        </div>
        <div class="button">
            <button type="button" onclick="alert('Them thanh cong')">ADD</button>

        </div>
</div>
</div>
</body>
</html>
