<!DOCTYPE html>
    <?php
        session_start();
        if(!$_SESSION['user']){
            echo "<script type='text/javascript'>";
		    echo "alert ('กรุณา Login');";
		    echo "window.location='adminform.php';";
		    echo "</script>";
        }else{
            
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="css/styleadmin.css">
    <style>
        a.logout{
            color:black; 
            font-size:20px; 
            margin-right:30px;
            margin-top:20px; 
            background:#fff;
            border:2px solid black;
            padding:10px 20px;
            transition: all 0.3s;
        }
        a.logout:hover{
            background: transparent;
        }
        a.addadmin{
            display: inline-block;
            text-decoration: none;
            color:black; 
            font-size:20px; 
            margin-left:30px;
            margin-bottom:20px; 
            background:#fff;
            border:2px solid black;
            padding:10px 20px;
            transition: all 0.3s;
        }
    </style>
</head>
<body>
    <?php
        include 'connect.php';
        $sql="SELECT * FROM `Product` ORDER BY Product_ID asc";
        $result=mysqli_query($con,$sql);
    ?>
    <?php include 'adminheader.php'; ?>
    <a class="logout" href="logout.php" style="float:right;text-decoration: none;">Logout</a>
    <a class="logout" href="other.php" style="float:right;text-decoration: none;">อื่นๆ</a>
    <div class="container">
        <form class="formsearch" action="productsearchform.php" method="post">
            <input type="text" placeholder="Search Productname (xxxxxxx) " name="productname">
            <input type="submit">
        </form>
        <div class="admindata">   
            <div class="admin-grid">
            <?php while($row = mysqli_fetch_array($result)){?>
            <div class="admin-item">
                    <img src="<?php echo $row['img'] ?>" >
                    <h1><?php echo $row['productName'] ?></h1>
                    <p>ราคา  <?php echo $row['price'] ?></p>
                    <p>รหัสสินค้า  :<?php echo $row['product_ID'] ?></p>
                    <p>สินค้าคงเหลือ  :<?php echo $row['amount'] ?></p>
                    <form action="updateplus.php?id=<?php echo $row['product_ID'] ?>" method="post">
                   เพิ่มสินค้าจำนวน :<input class="number" type="text" name="numberplus"><br>
                    ลดสินค้าจำนวน &nbsp;:<input class="number" type="text" name="numberlob">
                    <input class="number" type="submit" name="btn" value="Do it !">
                    </form>
            </div>
            <?php }?>
            </div> 
            <div class="insert-foot">
            <a href="insertform.php">เพิ่มสินค้า</a>
            </div>
        </div>
    </div>
    <a class="addadmin" href="changeadminform.php">เพิ่มผู้ดูแลระบบ</a>
</body>
</html>
<?php } ?>