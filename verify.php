<?php
$db_host ='localhost:3306';
$db_user='root';
$db_pass='';
$db_databse='student';

$conn= mysqli_connect($db_host,$db_user,$db_pass,$db_databse);

if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$usn = $_POST['usn'];  // Replace 'usn' with the name attribute of the USN input field in your form
$mobno = $_POST['mobno'];  // Replace 'mobno' with the name attribute of the mobile number input field in your form

// Query to check if the student exists
$query = "SELECT * FROM student_info WHERE s_usn = '$usn' AND s_phone = '$mobno'";

// Execute the query
$result = mysqli_query($conn,$query);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    $row=mysqli_fetch_array($result);
    $id=$row['s_id'];
    // Student with the given USN and mobile number exists
   header("Location:view_student.php?s_id=$id");
    // You can fetch and display additional student information here if needed
} else {
    // Student does not exist
    echo "Student does not exist in the database.";
}
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USN and Mobile Number Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>USN and Mobile Number Form</h2>
        <form action=" " method="post">
            <div class="form-group">
                <label for="usn">USN (University Serial Number)</label>
                <input type="text" class="form-control" id="usn" name="usn" placeholder="Enter USN">
            </div>
            <div class="form-group">
                <label for="mobno">Mobile Number</label>
                <input type="text" class="form-control" id="mobno"name="mobno" placeholder="Enter Mobile Number">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
