<?php
include 'connect.php';
$idselect=$_GET['id'];
$sql="select * FROM `product` WHERE product_ID=$idselect";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

?>
<?php include 'header.php' ?>
    <div class="container">
    <form action="update.php?id=<?php echo $row['product_ID'] ?>" method="post">
    <input type="text" name="product_ID" placeholder="รหัสสินค้า" required autofocus value="<?php echo $row['product_ID'] ?>"><br>
    <input type="text" name="productname" placeholder="ชื่อสินค้า" required value="<?php echo $row['productName'] ?>"><br>
    <input type="text" name="price" placeholder="ราคาสินค้า (1-100000)"required value="<?php echo $row['price'] ?>" ><br>
    <input type="text" name="amount" placeholder="จำนวนสินค้า" required value="<?php echo $row['amount'] ?>"><br>
    <input type="submit" value="แก้ไข" name="submit">
    </form>
    <div class="return">
    <a href="adminhome.php">ย้อนกลับ</a>
    </div>
    </div>