<?php 
  include '../config.php';
  $admin=new Admin();
  $id=$_GET['s_id'];
  $stmt=$admin->ret("SELECT * FROM `student_info` WHERE `s_id`='$id'");
  $row3=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student info</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="logo.jpeg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sidebar Start -->
      <?php include 'sidebar.php'?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'navbar.php'?>
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
           
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
           
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container my-3">
        <h2 > Update Student Details</h2>
    <form class="row g-3" method="POST" action="Controller/s_update.php" enctype="multipart/form-data">
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="s_name" value="<?php echo $row3['s_name'];?>" required>
    <input type="hidden" class="form-control" id="inputEmail4" name="s_id" value="<?php echo $row3['s_id'];?>" >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">USN</label>
    <input type="text" class="form-control" id="inputPassword4" name="s_usn" value="<?php echo $row3['s_usn'];?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="s_email" value="<?php echo $row3['s_email'];?>"required>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Department</label>
    <select id="inputState" name="s_dept" class="form-select" required>
      <option selected disabled hidden><?php echo $row3['s_dept']; ?></option>
      <option value="MCA">MCA</option>
      <option value="MBA">MBA</option>
      <option value="BT">BT</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="s_address" value="<?php echo $row3['s_address'];?>">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Phone</label>
    <input type="tel" placeholder="Enter your number" name="s_phone" pattern="[6789]\d{9}" title="Please enter a valid 10-digit phone number starting with 6, 7, 8 or 9" class="form-control" required value="<?php echo $row3['s_phone'];?>" required>  
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="s_city" value="<?php echo $row3['s_city'];?>" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="s_state" required>
      <option selected disabled hidden><?php echo $row3['s_state'];?></option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Maharastra">Maharastra</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="s_zip" value="<?php echo $row3['s_zip'];?>" required>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Upload photo</label>
    <input type="file" class="form-control" id="photo"  accept="image/*" name="s_pic"  value="<?php echo $row3['s_pic'];?>" required>

  </div>
  <div class="col-md-6">
    <img id="imagePreview" src="" alt="Uploaded Image" name="s_pic" style="max-width: 100%; max-height: 200px;">
  </div>
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-md-12">
    <label for=""></label>
    <input type="submit" class="btn btn-success"  name="submit">
  </div>
  
</form>
    </div>
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
          
            <!-- Widgets End -->


            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    const photoInput = document.getElementById('photo');
    const imagePreview = document.getElementById('imagePreview');

    photoInput.addEventListener('change', function() {
      const file = photoInput.files[0];
      if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
          imagePreview.src = e.target.result;
        };

        reader.readAsDataURL(file);
      } else {
        // If no file is selected, clear the image
        imagePreview.src = '';
      }
    });
  </script>
</body>

</html>