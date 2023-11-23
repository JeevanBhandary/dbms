<?php
  include '../../config.php';
  $admin=new Admin();
  // echo 'hello';
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    echo 'hello';
    echo $name;
    $pass=$_POST['password'];
    echo $pass;

    $stmt=$admin->ret("SELECT * FROM `admin` WHERE `a_name`='$name' AND `a_password`='$pass'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    $num=$stmt->rowCount();
    // echo $num;
    if($num>0){
      // $dbpassword=$row['a_password'];
      //   if (password_verify($pass, $dbpassword)) {
          $aid=$row['a_id'];
          $_SESSION['a_id']=$aid;
          echo "<script>alert('login successfully');window.location='../index.php';</script>";
        // }
        //   else {
        //     echo "<script>alert('Invalid credentials');window.location='../index.php';</script>"; 
        // }
    }
    else{
      echo "<script>alert('Invalid credentials');window.location='../index.php';</script>"; 

    }
  }
  
?>