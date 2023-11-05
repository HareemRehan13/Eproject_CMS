<?php
include('connection.php');
$id = $_GET['id'];

$fetch_selected_r ="SELECT * FROM `tbl_role` WHERE r_id = $id";
$run_query = mysqli_query($conn,$fetch_selected_r );
$row = mysqli_fetch_array($run_query);
if(isset($_POST['btnupdate'])){
    $rolename = $_POST['r_name'];
    $update_q = "UPDATE `tbl_role` SET `r_name`='$rolename' WHERE `r_id` = $id";
    $run = mysqli_query($conn, $update_q);

    if($run){
      echo"<script>window.location.href='rolelist.php' </script>";
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
                        <h1 class="h3 mb-0 text-gray-800">Update Role</h1>
                        <a href="roleadd.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Add Role</a>
                    </div>


                </div>
                <!-- /.container-fluid -->
                <div class="container">

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label  class="form-label">RoleName</label>
        <input type="text" class="form-control" value ="<?php echo $row['r_name']; ?>" name="r_name">
      </div>
    <button type="submit" class="btn btn-primary" name="btnupdate">Submit</button>
  </form>
</div>
            </div>


            <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->
