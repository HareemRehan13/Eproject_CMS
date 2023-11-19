<?php
$currentPage = 'roles';

include('connection.php');
$fetch_q = "SELECT * FROM `tbl_role`";
$run_q = mysqli_query($conn, $fetch_q);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnsubmit'])) {
        $rolename = $_POST['r_name'];
        $insert_q = "INSERT INTO `tbl_role`( `r_name`) VALUES ('$rolename')";
        $run = mysqli_query($conn, $insert_q);
        if($run){
      echo"<script>window.location.href='rolelist.php' </script>";
    }
}
}
?>
   <!-- Topbar -->
                <?php include('topbar.php')?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 headings">Add Role</h1>
                         <a href="rolelist.php" class="d-none d-sm-inline-block btn btn-sm btnlink">Role List</a>
                    </div>
                    </div>
                 <!--End Page Heading -->
                 <div class="maindiv">
        <!-- Form Start -->
      <div class="container">
      <form method="POST" enctype="multipart/form-data">
        <div class="row g-0">
          <!-- First column -->
        <div class="col-lg-12">
               <div class="row gy-3">
                <div class="col-md-12">
                <label  class="form-label">Role Name</label>
    <input type="text" class="form-control" name="r_name">
   </div>
           
              </div>
          </div>
            <!-- End First column -->

</div>
 <br>
 <button type="submit" class="btn button" name="btnsubmit">Submit</button>
 </form>


    </div> 
    <!-- End Form -->
  </div>
            <!-- End of Main Content -->
   </div>
   <br><br> 
   <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->
