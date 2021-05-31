<?php
    session_start();
    include 'connect.php';
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM `user` WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if($row){
        echo "<script type='text/javascript'>";
            echo "alert ('Login ID  $username  ของคุณ $row[name] สำเร็จ');";
			echo "window.location='home.php';";
          echo "</script>";
          
    }else{
        echo "<script type='text/javascript'>";
			echo "alert ('ID หรือ Password ผิด');";
			echo "window.location='home.php';";
		  echo "</script>";

    }
?>