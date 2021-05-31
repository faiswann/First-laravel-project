<?php
    include 'connect.php';
    $productname=$_POST['productname'];
    $sql="SELECT * FROM `Product`  WHERE productName LIKE '$productname'";
    $result=mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)){
        echo $row['product_ID'];
        echo $row['productName'];
        echo $row['price'];
        echo $row['img'];
    }
?>