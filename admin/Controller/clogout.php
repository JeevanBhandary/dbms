<?php
define('DIR','../../');
require_once DIR . '/config.php';
  $admin=new Admin();
  $control = new Controller();

if(isset($_SESSION['a_id'])){
        session_destroy();
        unset($_SESSION['a_id']);
         // $admin -> redirect('../../index');
        header('Location:../index.php');
    }  

?>