
<?php
include('connection.php');
$select_q ='SELECT * FROM `tbl_user`';
$run_q = mysqli_query($conn, $select_q);

$select_q2 ='SELECT * FROM `tbl_branch`';
$run_q2 = mysqli_query($conn, $select_q2);

if(isset($_POST['btnsubmit'])){
$u_id = $_POST['u_name'];
$a_contact = $_POST['a_contact'];
$b_id = $_POST['b_address'];
$agent_name= $_POST['agent_name'];

$insert_q ="INSERT INTO `tbl_agent`( `u_id`, `a_contact`, `b_id`, `agent_name`) VALUES ('$u_id','$a_contact','$b_id ','$agent_name')";
$run = mysqli_query($conn, $insert_q);
}
?>

                <!-- Topbar -->
                <?php include('topbar.php')?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                 
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Agent</h1>
                        <a href="agentlist.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">  Agent List</a>
                    </div>

                
                <!-- /.container-fluid -->

            </div>
           <div class="container">
            <form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Agent Name</label>
    <input type="text" class="form-control" name="agent_name">
  
  </div>
  <div class="mb-3">
    <label  class="form-label">Agent Contact</label>
    <input type="text" class="form-control" name="a_contact">
  </div>
 
  <div class="mb-3">
    <label  class="form-label">User Id</label>
    
    <select class="form-control" name="u_name">
        <option selected disabled>Select an option</option>
   <?php while ($row = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $row['u_id']; ?>"><?php echo $row['u_name']; ?></option>

   <?php } ?>
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Branch Id</label>
    
    <select class="form-control" name="b_address">
        <option selected disabled>Select an option</option>
   <?php while ($data = mysqli_fetch_array($run_q2)) { ?>
      <option value="<?php echo $data['b_id']; ?>"><?php echo $data['b_address']; ?></option>

   <?php } ?>
</select>
  </div>
 
  <button type="submit" class="btn btn-primary" name="btnsubmit">Submit</button>
</form>
</div>
                <!-- /.container-fluid -->  
  </div>
            <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->

        