<?php
session_start();
session_destroy(); 
echo "<script type='text/javascript'>";
echo "alert ('Logout เรียบร้อย');";
echo "window.location='adminhome.php';";
echo "</script>";
?>
