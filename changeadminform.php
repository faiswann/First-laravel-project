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
    <?php include 'adminheader.php' ?>
    <div class="container">
    <form action="changeadmin.php" method="post" >
    <input type="text" name="name" placeholder="ชื่อแอดมิน" required autofocus><br>
    <input type="text" name="username" placeholder="Username 4-16 ตัว"required><br>
    <input type="password" name="password" placeholder="Password 4-16 ตัว" required><br>
    <input type="password" name="conpassword" placeholder="กรุณาใส่ Password ให้ตรงกัน" required><br>
    <input type="submit" value="INSERT" name="submit">
    </form>
    <div class="return">
    <a href="adminhome.php">ย้อนกลับ</a>
    </div>
    </div>
</body>
</html>