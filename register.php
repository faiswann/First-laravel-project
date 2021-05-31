<?php
    include 'connect.php';
    include "Line_model.php";
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $conpass=md5($_POST['conpass']);
    $sql = "INSERT INTO `user` ( `name`, `username`, `password`,`messages`) VALUES( '$name', '$username', '$password',''); ";
    $line = new Line_Notify();
      $line->setToken('');
      $line->setToken('');
      $line->setMsg('สมัครสมาชิก');
      $line->addMsg("ID :" .$username);
      $line->addMsg('😁 : มีคนสมัครสมาชิก');
      $line->addMsg("ชื่อ :".$name);
      $line->setSPId(1);
      $line->setSId(6);
      $line->setImg('https://media.giphy.com/media/13gvXfEVlxQjDO/giphy.gif');
if($password==$conpass){
  $result = mysqli_query($con,$sql);
    if($result){
      if($line->sendNotify()){
        echo "<script type='text/javascript'>";
        echo "alert ('สมัครสมาชิก ID  $username  ของคุณ  $name  สำเร็จ');";
        echo "window.location='home.php';";
        echo "</script>";
      }else{
        echo "<pre>";
        //print_r($line->getError());
        echo 'เอา token line มาไส่เองนะครับ line noti';
        echo "</pre>";
      }
    }else{
      echo "<script type='text/javascript'>";
			echo "alert ('ID ซ้ำ หรือ ไม่ได้กรอก');";
			echo "window.location='home.php';";
		  echo "</script>";
      
    }
}else{
    echo "<script type='text/javascript'>";
    echo "alert ('Password ไม่ตรงกัน');";
    echo "window.location='home.php';";
  echo "</script>";
}
?>