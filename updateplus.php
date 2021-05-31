<?php
    include 'connect.php';
    $id=$_GET['id'];
    $numberplus=$_POST['numberplus'];
    $sql="UPDATE `product` SET `amount`= amount+'$numberplus' where product_ID = '$id'";
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
<?php
$numberlob=$_POST['numberlob'];
$sql="UPDATE `product` SET `amount`= amount-'$numberlob' where product_ID = '$id'";
$result=mysqli_query($con,$sql);
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
<?php
    $sql1= "DELETE FROM `product` WHERE amount<=0";
    $result1=mysqli_query($con,$sql1);
    $row=mysqli_fetch_array($result1);
    if($row['amount']<=0){
        echo "<script type='text/javascript'>";
		echo "alert ('ลบสินค้าสำเร็จ');";
		echo "window.location='adminhome.php';";
		echo "</script>";
    }
?>