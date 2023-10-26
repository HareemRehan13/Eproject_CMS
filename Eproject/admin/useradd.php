
<?php
include('connection.php');
$select_q ='SELECT * FROM `tbl_role`';
$run_q = mysqli_query($conn, $select_q);

if(isset($_POST['btnsubmit'])){
$u_name = $_POST['u_name'];
$u_email = $_POST['u_email'];
$r_name = $_POST['r_name'];
$u_pass= $_POST['u_pass'];

$insert_q ="INSERT INTO `tbl_user`( `u_name`, `u_email`, `r_id`, `password`) VALUES ('$u_name ','$u_email','$r_name ','$u_pass')";
$run = mysqli_query($conn, $insert_q);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    .bg-gradient-primary {
    background-color: #3a3b45;
    background-image: linear-gradient(178deg,#000 10%,#3a3b45 100%);
}
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include('sidebar.php')?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('topbar.php')?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add User</h1>
                        <a href="userlist.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">  Users List</a>
                    </div>

                
                <!-- /.container-fluid -->

            </div>
           <div class="container">
            <form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">User Name</label>
    <input type="text" class="form-control" name="u_name">
  
  </div>
  <div class="mb-3">
    <label  class="form-label">User Email</label>
    <input type="email" class="form-control" name="u_email">
  </div>
 
  <div class="mb-3">
    <label  class="form-label">Role</label>
    
    <select class="form-control" name="r_name">
        <option selected disabled>Select an option</option>
   <?php while ($row = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $row['r_id']; ?>"><?php echo $row['r_name']; ?></option>

   <?php } ?>
</select>
  </div>

  <div class="mb-3">
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" name="u_pass">
    
  </div>
  <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
</form>
  </div>
            <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
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