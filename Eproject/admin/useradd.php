
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
                        <h1 class="h3 mb-0 headings">Add User</h1>
                        <a href="userlist.php" class="d-none d-sm-inline-block btn btn-sm btnlink">  User List</a>
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
    <input type="text" class="form-control" name="u_name">
   </div>
   <div class="col-md-12">
                <label  class="form-label">User Email</label>
    <input type="email" class="form-control" name="u_email">
    </div>

                <div class="col-md-12">
               <label  class="form-label">Role</label>
    
    <select class="form-control" name="r_name">
        <option selected disabled>Select an option</option>
   <?php while ($row = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $row['r_id']; ?>"><?php echo $row['r_name']; ?></option>

   <?php } ?>
</select>
 </div>      
 
                <div class="col-md-12">
                <label  class="form-label">Password</label>
    <input type="text" class="form-control" name="u_pass">
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
