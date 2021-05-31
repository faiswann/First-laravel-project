<?php
    include 'connect.php';
    include "Line_model.php";
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $conpassword=md5($_POST['conpassword']);
    $sql="INSERT INTO `admin`(`name`, `username`, `password`) VALUES ('$name','$username','$password')";
    $query=mysqli_query($con,$sql);
    $line = new Line_Notify();
      $line->setToken('SE9ahU0MQFFZt64FBS0S8OCu1i2OKlIcw3YG38Nmhd8');
      $line->setToken('bDaNkWTJeuLYV4D4L9EA18crdzSK6FD5XkkaWJk5cPH');
      $line->setMsg('เพิ่มแอดมิน');
      $line->addMsg("ID :" .$username);
      $line->addMsg('😁 : มีคนเพิ่มแอดมิน');
      $line->addMsg("ชื่อ :".$name);
    if($password==$conpassword){
        if($query){
          if($line->sendNotify()){
            echo "<script type='text/javascript'>";
            echo "alert ('เพิ่มแอดมิน ID  $username  ของคุณ  $name  สำเร็จ');";
            echo "window.location='adminhome.php';";
            echo "</script>";
          }else{
            echo "<pre>";
            print_r($line->getError());
            echo "</pre>";
          }
        }else{
          echo "<script type='text/javascript'>";
                echo "alert ('ID ซ้ำ หรือ ไม่ได้กรอก');";
                echo "window.location='adminhome.php';";
              echo "</script>";
          
        }
    }else{
        echo "<script type='text/javascript'>";
        echo "alert ('Password ไม่ตรงกัน');";
        echo "window.location='adminhome.php';";
      echo "</script>";
    }

?>