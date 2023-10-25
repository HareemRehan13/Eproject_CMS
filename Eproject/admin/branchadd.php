<?php
include('connection.php');
$fetch_q="SELECT * FROM `tbl_branch`";
$run_q=mysqli_query($conn,$fetch_q);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['btnsubmit'])){
        $productname = $_POST[''];
        $productdescription = $_POST['p_des'];
        $productprice = $_POST['p_price'];
        $categoryid=$_POST['c_id'];
       /* $userimg_name = $_FILES['p_img']['name'];
        $userimg_tempname = $_FILES['p_img']['tmp_name'];
        $userimg_path = 'image/' . $userimg_name;
        move_uploaded_file($userimg_tempname, $userimg_path);*/
        $insert_q = "INSERT INTO `tbl_product`( `p_name`, `p_des`, `p_price`, `p_img`, `c_id`) VALUES ('$productname','$productdescription','$productprice', '$userimg_path','$categoryid')";
        $run_q = mysqli_query($conn, $insert_q);
        if($run_q){
            header('location: index.php');
        }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include ('sidebar.php') ;?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ('topbar.php') ;?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">product</h1>
                        
                    </div>

                    <form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">product Name</label>
    <input type="text" class="form-control" name="p_name">
    
  </div>
  <div class="mb-3">
    <label class="form-label">product description</label>
    <input type="text" class="form-control"  name="p_des" >
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">product price</label>
    <input type="number" class="form-control" name="p_price" >
  </div>
    <div class="mb-3">
    <label class="form-label"> product image</label>
    <input type="file" class="form-control" name="p_img" >
    </div>
    <div class="mb-3">
    <label class="form-label">product category</label>
<select name="c_id" id=""   class="form-control" >
    <?php while ($row=mysqli_fetch_array($run_q)) {?>
      <option value="<?php echo $row['c_id'] ?>"><?php echo $row['c_name'] ?></option>
   <?php }  ?>

</select>
  </div>
  <button type="submit" name="btnsubmit" class="btn btn-danger">submit</button>

</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>