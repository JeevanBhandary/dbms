<?php
  include '../../config.php';
  $admin=new Admin();
 

  
if (isset($_POST['submit'])) {
  $name=$_POST['s_name'];
  $sid=$_POST['s_id'];
  $usn=$_POST['s_usn'];
  $email=$_POST['s_email'];
  $dept=$_POST['s_dept'];
  $phone=$_POST['s_phone'];
  $adrs=$_POST['s_address'];
  $ct=$_POST['s_city'];
  $pin=$_POST['s_zip'];
  $st=$_POST['s_state'];
  echo $phone;
  echo $st;
  echo $dept;

  $dp="upload/".basename($_FILES["s_pic"]["name"]); 
    // echo  $dp;
    move_uploaded_file($_FILES['s_pic']["tmp_name"],$dp);

    

    

    $stmt1=$admin->cud("UPDATE `student_info` SET `s_name`='$name',`s_usn`='$usn',`s_email`='$email',`s_dept`='$dept',`s_phone`='$phone',`s_address`='$adrs',`s_city`='$ct',`s_zip`='$pin',`s_state`='$st',`s_pic`='$dp' WHERE `s_id`='$sid'",'updated');
     echo "<script>alert('Information updated successfully...');window.location='../view_user.php';</script>";
  


}
?>