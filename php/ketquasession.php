<?php session_start(); ?>
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
<h1> Nhan ket qua tu session</h1>
<?php echo $_SESSION["demo"]?>
</body>

