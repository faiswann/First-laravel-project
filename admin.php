<?php
    session_start();
    include 'connect.php';
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if($row){
        $_SESSION['user']=$row['username'];
        $_SESSION['pass']=$row['password'];
            echo "<script type='text/javascript'>";
            echo "alert ('Admin Login ID  $username  ของคุณ $row[name] สำเร็จ');";
			echo "window.location='adminhome.php';";
            echo "</script>";
    }else{
            echo "<script type='text/javascript'>";
			echo "alert ('ID หรือ Password ผิด ');";
			echo "window.location='adminform.php';";
		    echo "</script>";
    }
?>

