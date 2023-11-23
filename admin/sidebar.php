<?php

if(isset($_SESSION['a_id'])){
                    $sid=$_SESSION['a_id'];

                    $stmt=$admin->ret("SELECT * FROM `admin` ");
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
}
                    ?>




        <div class="sidebar  pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand  mb-1">
                    <h3 class="text-primary"><i class="fa fa-cogs me-3"></i>STUDENTSYS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                    <img class="rounded-circle" src="logo.jpeg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <!-- <h6 class="mb-0"><?php echo $row['a_name']?></h6> -->
                    
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="view_user.php" class="nav-item nav-link"><i class="fa fa-users"></i>View User</a>
                   
                
                   
</div>
            </nav>
        </div>