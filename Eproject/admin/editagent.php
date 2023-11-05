<?php
include('connection.php');
$id = $_GET['id'];

$select_q ='SELECT * FROM `tbl_user`';
$run_q = mysqli_query($conn, $select_q);

$select_q2 ='SELECT * FROM `tbl_branch`';
$run_q2 = mysqli_query($conn, $select_q2);

$fetch_selected_r ="SELECT * FROM `tbl_agent` WHERE a_id = $id";
$run_query = mysqli_query($conn,$fetch_selected_r );
$row = mysqli_fetch_array($run_query);
if(isset($_POST['btnupdate'])){
 $u_id = $_POST['u_name'];
$a_contact = $_POST['a_contact'];
$b_id = $_POST['b_address'];
$agent_name= $_POST['agent_name'];

    $update_q = "UPDATE `tbl_agent` SET `u_id`='$u_id', `a_contact`='$a_contact', `b_id`='$b_id', `agent_name`='$agent_name' WHERE `a_id` = $id";
    $run = mysqli_query($conn, $update_q);

    if($run){
        echo"<script>window.location.href='agentlist.php' </script>";
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
                        <h1 class="h3 mb-0 text-gray-800">Update Agents</h1>
                        <a href="useradd.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Add Agent</a>
                    </div>


                </div>
                <!-- /.container-fluid -->
                <div class="container">

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label  class="form-label">Agent Name</label>
        <input type="text" class="form-control" value ="<?php echo $row['agent_name']; ?>" name="agent_name">
      </div>
    <div class="mb-3">
      <label  class="form-label">Agent Contact</label>
      <input type="text" class="form-control" value ="<?php echo $row['a_contact']; ?>" name="a_contact">
    </div>
    <div class="mb-3">
    <label  class="form-label">User Id</label>
    <select class="form-control" name="u_name">
   <?php while ($row = mysqli_fetch_array($run_q)) { ?>
      <option value="<?php echo $row['u_id']; ?>"><?php echo $row['u_name']; ?></option>
   <?php } ?>
</select>
  </div>
  <div class="mb-3">
    <label  class="form-label">Branch Id</label>
    <select class="form-control" name="b_address">
   <?php while ($data = mysqli_fetch_array($run_q2)) { ?>
      <option value="<?php echo $data['b_id']; ?>"><?php echo $data['b_address']; ?></option>
   <?php } ?>
</select>
  </div>
 
    <button type="submit" class="btn btn-primary" name="btnupdate">Submit</button>
  </form>
</div>
            </div>


            <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->
