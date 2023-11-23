<?php
  include '../config.php';
  $admin=new Admin();
 

  
if (isset($_POST['submit'])) {
  $name=$_POST['s_name'];
  $usn=$_POST['s_usn'];
  $email=$_POST['s_email'];
  $dept=$_POST['s_dept'];
  $phone=$_POST['s_phone'];
  $adrs=$_POST['s_address'];
  $ct=$_POST['s_city'];
  $pin=$_POST['s_zip'];
  $st=$_POST['s_state'];
  echo $phone;
  $dp="upload/".basename($_FILES["s_pic"]["name"]); 
    // echo  $dp;
    move_uploaded_file($_FILES['s_pic']["tmp_name"],$dp);

    

    $stmt=$admin -> ret("SELECT `s_email` from `student_info` where `s_email`='$email'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
   // If number of user rows returned more than 0, it means email already exists
   if($num>0){
    echo "<script>alert('User already exists');window.location='../index.php';</script>";
} else {

    $stmt1=$admin->cud("INSERT INTO `student_info`(`s_name`,`s_usn`,`s_email`,`s_dept`, `s_phone`,`s_address`, `s_city`, `s_state`, `s_zip`, `s_pic`, `s_created_date`)VALUES('$name','$usn','$email','$dept','$phone','$adrs','$ct','$st','$pin','$dp',(Now()))",'saved');
     echo "<script>alert('Information added successfully...');window.location='../index.php';</script>";
  }


}
?>