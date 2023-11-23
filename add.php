<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php
    include 'includes/navbar.php';
    ?>
    <div class="container my-3">
        <h2 > Add Student Details</h2>
    <form class="row g-3" method="POST" action="controller/s_register.php" enctype="multipart/form-data">
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="s_name">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">USN</label>
    <input type="text" class="form-control" id="inputPassword4" name="s_usn">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="s_email">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Department</label>
    <select id="inputState" name="s_dept" class="form-select" >
      <option selected>Choose...</option>
      <option value="MCA">MCA</option>
      <option value="MBA">MBA</option>
      <option value="BT">BT</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="s_address">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Phone</label>
    <input type="tel" placeholder="Enter your number" name="s_phone" pattern="[6789]\d{9}" title="Please enter a valid 10-digit phone number starting with 6, 7, 8 or 9" class="form-control" required>  
  </div>
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="s_city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="s_state">
      <option selected disabled>Choose...</option>
      <option value="Karnataka">Karnataka</option>
      <option value="Kerala">Kerala</option>
      <option value="Mumbai">Mumbai</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="s_zip">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Upload photo</label>
    <input type="file" class="form-control" id="photo"  accept="image/*" name="s_pic">
  </div>
  <div class="col-md-6">
    <img id="imagePreview" src="" alt="Uploaded Image" style="max-width: 100%; max-height: 200px;">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>