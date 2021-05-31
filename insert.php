<?php
session_start();
ob_start();
    include 'connect.php';
    $img=$_FILES['img'];
    $path="img/";
    move_uploaded_file($img["tmp_name"],$path.$img['name']);
    $img1=$path.$img["name"];
    $productname=$_POST['productname'];
    $price=$_POST['price'];
    $amount=$_POST['amount'];
    $sql="INSERT INTO `product`(`productName`, `price`, `img`,`amount`) VALUES ('$productname','$price','$img1','$amount')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert ('เพิ่มสินค้าสำเร็จ');";
        echo "window.location='adminhome.php';";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert ('เพิ่มสินค้าไม่สำเร็จ');";
        echo "window.location='adminhome.php';";
        echo "</script>";
    }
?>
    