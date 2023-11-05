<?php
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
                        <h1 class="h3 mb-0 text-gray-800">Add Role</h1>
                        < <a href="rolelist.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Role List</a>
                    </div>

                
                <!-- /.container-fluid -->

            </div>
           <div class="container">
            <form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Role Name</label>
    <input type="text" class="form-control" name="r_name">
    <br>
    <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
  </div>
</select>
  </div>
 
</form>
  </div>

            <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->
