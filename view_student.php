<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

    <style>
        table {
    border-collapse: collapse;
}
td, th {
        border: 1px solid #000; /* You can change the color and thickness as needed */
    }
    </style>
</head>
<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <div class="content-wrapper pb-0">
          <div class="row">
              <div class="col-lg-12 ">
                <div class="grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Categories</h4>
                    <p></p>
                    <div class="table-responsive">
                      <table border="4" cellpadding="5px" cellspacing="50px" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Sl No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>USN</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                             include 'config.php';
                             $admin=new Admin();
                             $id=1;
                             $sid=$_GET['s_id'];
                             $stmt=$admin->ret("SELECT * FROM `student_info` where s_id=$sid");
                              while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            ?>
                        <tr>
                            <td><?php echo $id;?></td>
                            <td><img src="controller/<?php echo $row['s_pic'];?>" style="width: 100px;height: 120px;"></td>
                            <td><?php echo $row['s_name'];?></td>
                            <td><?php echo $row['s_usn'];?></td>
                            <td><?php echo $row['s_email'];?></td>
                            <td><?php echo $row['s_dept'];?></td>
                            <td><?php echo $row['s_phone'];?></td>
                            <td style="width: 35%"><?php echo $row['s_address'];?> , <?php echo $row['s_city'];?> ,<?php echo $row['s_state'];?>,<?php echo $row['s_zip'];?></td>
                            <td>
                              <div class="d-flex">
                                <a title="update event" style="font-size: 30px;" href="update_student.php?s_id=<?php echo $row['s_id'];?>">
                                <i class="fas fa-edit"></i>
                              </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <a onclick="return confirm('Are you sure, you want to delete the service ?')" title="delete event" style="font-size: 30px;" href="controller/sdelete.php?s_id=<?php echo $row['s_id'];?>">
                              <i class="fa-solid fa-trash" style="color: #d71d1d;"></i>                              </div>
                            </td>
                            
                        </tr>
                                                
                             <?php } ?>                     
                          
                                                  
                                             
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              </div>


              
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/8e556ae893.js" crossorigin="anonymous"></script>
</body>
</html>