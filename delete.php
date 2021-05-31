<?php
    include 'connect.php';
    $id=$_GET['id'];
    $sql="DELETE FROM `product` WHERE product_ID=$id";
    $result=mysqli_query($con,$sql);
    $sql1="SELECT * FROM product";
    $query=mysqli_query($con,$sql1);
    $A=mysqli_fetch_array($query);
    if($result){
        echo "<script type='text/javascript'>";
		echo "alert ('ลบสินค้าสำเร็จ');";
		echo "window.location='adminhome.php';";
		echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo "alert ('ไม่มีสินค้าชิ้นนี้');";
        echo "window.location='adminhome.php';";
        echo "</script>";
    }
?>