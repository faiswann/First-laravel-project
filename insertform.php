<!DOCTYPE html>
<?php
session_start();
ob_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleadmin.css">
</head>
<body>
    <?php include 'header.php' ?>
    <div class="container">
    <form action="insert.php" method="post" enctype="multipart/form-data">
    <input type="text" name="productname" placeholder="ชื่อสินค้า" required autofocus><br>
    <input type="text" name="price" placeholder="ราคาสินค้า (1-100000)"required><br>
    <input type="text" name="amount" placeholder="จำนวนสินค้า" required><br>
    <input type="file" name="img" placeholder="img/ชื่อสินค้า.png" required><br>
    <input type="submit" value="INSERT" name="submit">
    </form>
    <div class="return">
    <a href="adminhome.php">ย้อนกลับ</a>
    </div>
    </div>
</body>
</html>