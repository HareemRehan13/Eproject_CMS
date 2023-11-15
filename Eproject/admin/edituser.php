<?php
include('connection.php');
$id = $_GET['id'];

$select_q ='SELECT * FROM `tbl_role`';
$run_q = mysqli_query($conn, $select_q);

$fetch_selected_r ="SELECT * FROM `tbl_user` WHERE u_id = $id";
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

                <!-- Topbar -->
                <?php include('topbar.php')?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 headings">Update User</h1>
                        <a href="useradd.php" class="d-none d-sm-inline-block btn btn-sm btnlink"> Add User</a>
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
                <label  class="form-label">User Name</label>
        <input type="text" class="form-control" value ="<?php echo $row['u_name']; ?>" name="u_name">
   </div>
                <div class="col-md-12">
                <label  class="form-label">User Email</label>
      <input type="email" class="form-control" value ="<?php echo $row['u_email']; ?>" name="u_email">
 </div>      
 <div class="col-md-12">
 <label  class="form-label">Role</label>
    <select class="form-control" name="r_name">
   <?php while ($data = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $data['r_id']; ?>"><?php echo $data['r_name']; ?></option>

   <?php } ?>
</select>
    </div>

                <div class="col-md-12">
                <label  class="form-label">Password</label>
    <input type="text" class="form-control" value="<?php echo $row['password'];?>" name="u_pass">
    
       </div>
              </div>
          </div>
            <!-- End First column -->

            </div>
 <br>
 <button type="submit" class="btn button" name="btnupdate">Update</button>
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
