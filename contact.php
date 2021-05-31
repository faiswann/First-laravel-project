<?php
include 'connect.php';
include "Line_model.php";
    $username=$_POST['username'];
    $textarea=$_POST['textarea'];
    $sql="UPDATE `user` SET `messages`='$textarea' WHERE username='$username'";
    $sql1="SELECT * FROM user WHERE username='$username'";
    $result=mysqli_query($con,$sql);
    $result1=mysqli_query($con,$sql1);
    $row=mysqli_fetch_array($result1);
    $line = new Line_Notify();
$line->setToken('muDIKessWmX2QfvwFNX8yT183IzQHm3F79k3e4kX4Zq');
$line->setMsg('Contact');
$line->addMsg('ID  :'.$username);
$line->addMsg('😁 : ชื่อผู้ติดต่อ' );
$line->addMsg('ข้อความ  :'.$textarea);
$line->setSPId('');
$line->setSId('');
$line->setImg('');
    if($row){
        if($result){   
if($line->sendNotify()){
	    echo "<script type='text/javascript'>";
        echo "alert ('Send Messages Complete ');";
        echo "window.location='home.php';";
        echo "</script>";
}else{
	echo "<pre>";
	print_r($line->getError());
	echo "</pre>";
}
    }
    }else{
    echo "<script type='text/javascript'>";
        echo "alert ('กรุณาตรวจสอบ Username ');";
        echo "window.location='home.php';";
        echo "</script>";
    }
?>