<?php
    include 'connect.php';
    $id=$_GET['id'];
    $idold=$_POST['product_ID'];
    $productname =$_POST['productname'];
    $price=$_POST['price'];
    $amount=$_POST['amount'];
    $sql="UPDATE `product` SET `product_ID`='$idold',`productName`='$productname',`price`='$price',`amount`='$amount'where product_ID = '$id'";
    $result=mysqli_query($con,$sql);
        if($result){
            echo "<script type='text/javascript'>";
		    echo "alert ('จัดการสินค้าสำเร็จ');";
		    echo "window.location='adminhome.php';";
		    echo "</script>";
        }else{
            echo "<script type='text/javascript'>";
            echo "alert ('ไม่มีสินค้าชิ้นนี้');";
            echo "window.location='adminhome.php';";
            echo "</script>";
    }

?>