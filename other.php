<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="css/styleadmin.css">
</head>
<body>
    <?php
        include 'connect.php';
        $sql="SELECT * FROM `Product` WHERE productName NOT LIKE '%cpu%'and productName NOT LIKE'%gtx%'and productName NOT LIKE'%GB%'and productName NOT LIKE'%MB%' ";
        $result=mysqli_query($con,$sql);
    ?>
    <?php include 'adminheader.php'; ?>

    <div class="container">
        <div class="admindata">
            <div class="admin-grid">
            <?php while($row = mysqli_fetch_array($result)){?>
            <div class="admin-item">
                    <img src="<?php echo $row['img'] ?>" alt="">
                    <h1><?php echo $row['productName'] ?></h1>
                    <p>ราคา  <?php echo $row['price'] ?></p>
                    <span>รหัสสินค้า  :<?php echo $row['product_ID'] ?></span><br>
                   <a href="delete.php?id=<?php echo $row['product_ID'] ?>">Delete</a>
                   <a href="fixform.php?id=<?php echo $row['product_ID'] ?>">แก้ไขสินค้า</a>
            </div>
            <?php }?>
            </div>
            <div class="insert-foot">
            <a href="insertform.php">เพิ่มสินค้า</a>
            </div>    
        </div>
    </div>
</body>
</html>