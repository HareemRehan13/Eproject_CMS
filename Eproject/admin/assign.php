<?php
include('connection.php');
$id = $_GET['id'];



$fetch_selected_r ="SELECT * FROM `tbl_order` WHERE or_id = $id";
$run_query = mysqli_query($conn,$fetch_selected_r );
$row = mysqli_fetch_array($run_query);
if(isset($_POST['btnupdate'])){
    $u_name = $_POST['u_name'];
    $u_email = $_POST['u_email'];
    $r_name = $_POST['r_name'];
    $u_pass= $_POST['u_pass'];

    $update_q = "UPDATE `tbl_user` SET `u_name`='$u_name', `u_email`='$u_email', `r_id`='$r_name', `password`='$u_pass' WHERE `u_id` = $id";
    $run = mysqli_query($conn, $update_q);

    if($run){
        echo"<script>window.location.href='userlist.php' </script>";
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
                        <h1 class="h3 mb-0 text-gray-800">Update Users</h1>
                        <a href="useradd.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Assign order</a>
                    </div>


                </div>
                <!-- /.container-fluid -->
                <div class="container">

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label  class="form-label">User id</label>
        <input type="text" class="form-control" value ="<?php echo $row['u_id']; ?>" name="u_name">
      </div>
    <div class="mb-3">
      <label  class="form-label">Sender Address</label>
      <input type="email" class="form-control" value ="<?php echo $row['sender_address']; ?>" name="u_email">
    </div>
    <div class="mb-3">
      <label  class="form-label">Sender Phone</label>
      <input type="email" class="form-control" value ="<?php echo $row['sender_phoneno']; ?>" name="u_email">
    </div>
    <div class="mb-3">
      <label  class="form-label">Reciever Name</label>
      <input type="email" class="form-control" value ="<?php echo $row['reciever_name']; ?>" name="u_email">
    </div>
    <div class="mb-3">
      <label  class="form-label">Reciever Email</label>
      <input type="email" class="form-control" value ="<?php echo $row['reciever_email']; ?>" name="u_email">
    </div>
    <div class="mb-3">
      <label  class="form-label">Reciever Address</label>
      <input type="email" class="form-control" value ="<?php echo $row['reciever_address']; ?>" name="u_email">
    </div>
    <div class="mb-3">
      <label  class="form-label">Reciever Phone</label>
      <input type="email" class="form-control" value ="<?php echo $row['reciever_phoneno']; ?>" name="u_email">
    </div>
    <div class="mb-3">
    <label  class="form-label">Agent from</label>
    <select class="form-control" name="r_name">
        <option selected disabled>select an option</option>
   <?php 
   $select_q ='SELECT * FROM `tbl_agent` join `tbl_branch` on tbl_agent.b_id=tbl_branch.b_id right join tbl_city on tbl_city.ci_id=tbl_branch.ci_id';
$run_q = mysqli_query($conn, $select_q);
   while ($data = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $data['a_id']; ?>"><?php echo $data['agent_name'].','. $data['ci_name']; ?></option>

   <?php } ?>
</select>
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Agent to</label>
    <select class="form-control" name="r_name">
    <option selected disabled>select an option</option>
    <?php 
   $select_q ='SELECT * FROM `tbl_agent` join `tbl_branch` on tbl_agent.b_id=tbl_branch.b_id right join tbl_city on tbl_city.ci_id=tbl_branch.ci_id';
$run_q = mysqli_query($conn, $select_q);
   while ($data2 = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $data2['a_id']; ?>"><?php echo $data2['ci_name']; ?></option>

   <?php } ?>
</select>
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Location to</label>
    <select class="form-control" name="r_name">
   <?php
    $select_q ='SELECT * FROM `tbl_city`';
    $run_q = mysqli_query($conn, $select_q);
   while ($data = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $data['ci_id']; ?>"><?php echo $data['ci_name']; ?></option>

   <?php } ?>
</select>
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Location to</label>
    <select class="form-control" name="r_name">
   <?php  $select_q ='SELECT * FROM `tbl_city`';
    $run_q = mysqli_query($conn, $select_q);
   while ($data = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $data['ci_id']; ?>"><?php echo $data['ci_name']; ?></option>

   <?php } ?>
</select>
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Order Weight</label>
    <input type="text" class="form-control" value="<?php echo $row['order_weight'];?>" name="u_pass">
    
  </div>
 
  <div class="mb-3">
    <label  class="form-label">Order Distance</label>
    <input type="text" class="form-control" value="<?php echo $row['order_distance'];?>" name="u_pass">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Order Charges</label>
    <input type="text" class="form-control" value="<?php echo $row['total_charges'];?>" name="u_pass">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Courier Company</label>
    <input type="text" class="form-control" value="<?php echo $row['co_id'];?>" name="u_pass">
    
  </div>
  <div class="mb-3">
    <label  class="form-label">Order Status</label>
    <input type="text" class="form-control" value="<?php echo $row['status'];?>" name="u_pass">
    
  </div>
    <button type="submit" class="btn btn-primary" name="btnupdate">Submit</button>
  </form>
</div>
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



