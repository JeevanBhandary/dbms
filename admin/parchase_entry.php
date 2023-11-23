<?php
if (isset($_SESSION['aid'])) {
    $aid = $_SESSION['aid'];
}
include 'config.php';
$admin = new Admin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>REPAIR ME</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
        <?php include 'sidebar.php' ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include 'navbar.php' ?>
            <!-- Navbar End -->


            <!-- Form Start -->


            <div class="container-fluid pt-4 px-4">
                <div class="row ">

                <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Purchase Entry</h6>
                            <form action="controller/purchase_entry.php" method="POST">
                                <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">Purchased By</label>
                                    <input type="text" class="form-control" required name="p_by" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="exampleInputPassword1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" required name="p_name" id="exampleInputPassword1">
                                </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-4">
                                        <label for="exampleInputPassword1" class="form-label">Product Price</label>
                                        <input type="number" class="form-control" required name="p_price" id="price" >
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="exampleInputPassword1" class="form-label">Product Quantity</label>
                                        <input type="number" class="form-control" required name="p_qty" id="qty" onchange="cal()">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                    <label for="exampleInputPassword1" class="form-label">Total Price</label>
                                    <input type="number" class="form-control" required name="p_tot" id="total">
                                </div>
                                </div>  
                                <div class="row">
                               
                               
                              
                               
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Details</label>
                                    <textarea type="text" class="form-control" required name="details" id="exampleInputPassword1"></textarea>
                                </div>
                               
                                <button type="submit" class="btn btn-primary" name="pur">Add Purchase Entry</button>
                            </form>
                        </div>
                    </div>




                </div>
            </div>


            <!-- Form End -->


            <!-- Footer Start -->

            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script>
        function cal(){
            a=document.getElementById('price').value;
            b=document.getElementById('qty').value;
            tot=a*b;
            document.getElementById('total').value=tot;
        }
    </script>
    <script>
        function showUser(bid) {
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;

                }
            }
            xmlhttp.open("GET", "ajax_model.php?b_id=" + bid, true);
            xmlhttp.send();
        }
    </script>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="details[]" placeholder="Add Details" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            $('#submit').click(function() {
                $.ajax({
                    url: "name.php",
                    method: "POST",
                    data: $('#add_name').serialize(),
                    success: function(data) {
                        alert(data);
                        $('#add_name')[0].reset();
                    }
                });
            });

        });
    </script>
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
</body>

</html>