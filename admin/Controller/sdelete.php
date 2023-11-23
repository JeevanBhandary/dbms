<?php
  include '../../config.php';
  $admin=new Admin();
  
  $id=$_GET['s_id'];
  $stmt = $admin->cud("DELETE FROM `student_info` where `s_id` = '$id'","deleted");
echo "<script>alert('information  deleted Successfully');window.location='../view_user.php';</script>";
?>
?>