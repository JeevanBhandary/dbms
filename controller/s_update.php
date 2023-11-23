<?php
include '../config.php';
$admin = new Admin();

if (isset($_POST['submit'])) {
    $name = $_POST['s_name'];
    $sid = $_POST['s_id'];
    $usn = $_POST['s_usn'];
    $email = $_POST['s_email'];
    $dept = $_POST['s_dept'];
    $phone = $_POST['s_phone'];
    $adrs = $_POST['s_address'];
    $ct = $_POST['s_city'];
    $pin = $_POST['s_zip'];
    $st = $_POST['s_state'];

    // Handle file upload
    $dp = "";
    if (isset($_FILES["s_pic"]) && $_FILES["s_pic"]["error"] === UPLOAD_ERR_OK) {
        $uploadDir = "upload/"; // Define your upload directory
        $uploadPath = $uploadDir . basename($_FILES["s_pic"]["name"]);

        if (move_uploaded_file($_FILES['s_pic']["tmp_name"], $uploadPath)) {
            $dp = $uploadPath;
        } else {
            // Handle upload failure
            echo "File upload failed.";
            exit;
        }
    }

    // Create a connection to the database
    // $db_host ='localhost';
    // $db_user='root';
    // $db_pass='';
    // $db_databse='student';
    
    // $mysqli= mysqli_connect($db_host,$db_user,$db_pass,$db_databse);
    
    // if(!$mysqli)
    // {
    //     die("Connection Failed".mysqli_connect_error());
    // }
    

    // Construct the SQL query with user input
    $stmt1=$admin->cud("UPDATE `student_info` SET `s_name`='$name',`s_usn`='$usn',`s_email`='$email',`s_dept`='$dept',`s_phone`='$phone',`s_address`='$adrs',`s_city`='$ct',`s_zip`='$pin',`s_state`='$st',`s_pic`='$dp' WHERE `s_id`='$sid'",'updated');
    echo "<script>alert('Information updated successfully...');window.location='../view.php';</script>";
    // Execute the query
    // $result = mysqli_query($mysqli, $updateQuery);

    // if ($stmt1) {
    //     echo "<script>alert('Information updated successfully...');window.location='../index.php';</script>";
    // } else {
    //     echo "Update failed: " . mysqli_error($mysqli);
    // }

    // // Close the database connection
    // $mysqli->close();
}
?>
