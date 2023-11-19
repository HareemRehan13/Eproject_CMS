<?php
$currentPage = 'orders';

include('connection.php');
$id = $_GET['id'] ;
$selected_q = "SELECT * FROM `tbl_agent`";
$run_q=mysqli_query($conn, $selected_q);

$fetch_selected_r = "SELECT * FROM `tbl_order` WHERE or_id = $id";
$run_query=mysqli_query($conn,$fetch_selected_r);

$row=mysqli_fetch_array($run_query);

if(isset($_POST['assign'])){
  $u_id = $_POST['u_id'];
  $sender_name = $_POST['sender_name'];
  $sender_email = $_POST['sender_email'];
  $sender_address1 = $_POST['sender_address1'];
  $sender_phoneno = $_POST['sender_phoneno'];
  $receiver_name= $_POST['receiver_name'];
  $receiver_email = $_POST['receiver_email'];
  $receiver_address= $_POST['receiver_address'];
  $receiver_phoneno = $_POST['receiver_phoneno'];
  $agent_from= $_POST['agent_from'];
  $agent_to= $_POST['agent_to'];
  $locationfrom= $_POST['locationfrom'];
  $location_to= $_POST['location_to'];
  $order_weight= $_POST['order_weight'];
  $order_distance= $_POST['order_distance'];
  $order_charges= $_POST['order_charges'];
  $co_id= $_POST['co_id'];
  $order_status= $_POST['order_status'];
  $update_q = "UPDATE `tbl_order` SET `u_id`=' $u_id',`sender_name`='$sender_name',`sender_email`='$sender_email',`sender_address`='$sender_address1',`sender_phoneno`='$sender_phoneno',
  `receiver_name`='$receiver_name',`receiver_email`='$receiver_email',`receiver_address`=' $receiver_address',`receiver_phoneno`='$receiver_phoneno ',
  `agent_from`='$agent_from',`agent_to`='$agent_to',`order_weight`='$order_weight',`order_distance`='$order_distance',
  `locationfrom`='$locationfrom',`location_to`='$location_to',`co_id`='$co_id',`total_charges`='$order_charges',`status`='$order_status' WHERE `or_id` = $id";
  $run = mysqli_query($conn, $update_q);

  if($run){
      echo"<script>window.location.href='orders.php' </script>";
    }

}

?>

        <!-- Topbar -->
        <?php include('topbar.php') ?>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 headings">Assign Order</h1>
            <a href="orders.php" class="d-none d-sm-inline-block btn btn-sm btnlink"> View Order</a>
          </div>
          </div>
                 <!--End Page Heading -->
                 <div class="maindiv">
        <!-- Form Start -->
      <div class="container">
      <form method="POST" enctype="multipart/form-data">
        <div class="row g-0">
          <!-- First column -->
        <div class="col-lg-6">
               <div class="row gy-3">
                <div class="col-md-12">
                <label  class="form-label">User Name</label>
    <input type="text" class="form-control" value="<?php echo $row['u_id']; ?>"
                name="u_id">
   </div>
                <div class="col-md-12">
                <label class="form-label">Sender Email</label>
              <input type="text" class="form-control" value="<?php echo $row['sender_email']; ?>"
                name="sender_email">
 </div>      
 <div class="col-md-12">
 <label  class="form-label">Role</label>
 <label class="form-label">Sender Phone</label>
              <input type="text" class="form-control" value="<?php echo $row['sender_phoneno']; ?>"
                name="sender_phoneno">
    </div>

                <div class="col-md-12">
                <label class="form-label">Reciever Email</label>
              <input type="email" class="form-control" value="<?php echo $row['receiver_email']; ?>"
                name="receiver_email">
       </div>
       <div class="col-md-12">
       <label class="form-label">Reciever Phone</label>
              <input type="text" class="form-control" value="<?php echo $row['receiver_phoneno']; ?>"
                name="receiver_phoneno">
       </div>
       <div class="col-md-12">
       <label class="form-label">Agent to</label>
              <select class="form-control" name="agent_to">
                <option selected disabled>select an option</option>
                <?php
                $select_q = 'SELECT * FROM `tbl_agent` join `tbl_branch` on tbl_agent.b_id=tbl_branch.b_id right join tbl_city on tbl_city.ci_id=tbl_branch.ci_id';
                $run_q = mysqli_query($conn, $select_q);
                while ($data = mysqli_fetch_array($run_q)) { ?>
                  <option value="<?php echo $data['a_id']; ?>">
                    <?php echo $data['agent_name'] . ',' . $data['ci_name']; ?>
                  </option>

                <?php } ?>
              </select>
       </div>
       <div class="col-md-12">
       <label class="form-label">Location to</label>
              <select class="form-control" name="location_to">
              <option selected disabled>select an option</option>
                <?php $select_q = 'SELECT * FROM `tbl_city`';
                $run_q = mysqli_query($conn, $select_q);
                while ($data = mysqli_fetch_array($run_q)) { ?>
                  <option value="<?php echo $data['ci_id']; ?>"
                  
                  <?php
                  if($data['ci_id']==$row['location_to']){
                    echo "selected";
                  }
                  ?>
                  >
                    <?php echo $data['ci_name']; ?>
                  </option>

                <?php } ?>
              </select>
       </div>
       <div class="col-md-12">
       <label class="form-label">Order Distance</label>
              <input type="text" class="form-control" value="<?php echo $row['order_distance']; ?>"
                name="order_distance">
       </div>
       <div class="col-md-12">
       <label class="form-label">Courier Company</label>
              <input type="text" class="form-control" value="<?php echo $row['co_id']; ?>" name="co_id">
       </div>
              </div>
          </div>
            <!-- End First column -->
   <!-- Second column -->
   <div class="col-lg-6">
               <div class="row gy-3">
                <div class="col-md-12">
                <label class="form-label">Sender Name</label>
              <input type="text" class="form-control" value="<?php echo $row['sender_name']; ?>"
                name="sender_name">
   </div>
                <div class="col-md-12">
                <label class="form-label">Sender Address</label>
              <input type="text" class="form-control" value="<?php echo $row['sender_address']; ?>"
                name="sender_address1">
 </div>      
 <div class="col-md-12">
 <label class="form-label">Reciever Name</label>
              <input type="text" class="form-control" value="<?php echo $row['receiver_name']; ?>" name="receiver_name">
    </div>

                <div class="col-md-12">
                <label class="form-label">Reciever Address</label>
              <input type="text" class="form-control" value="<?php echo $row['receiver_address']; ?>"
                name="receiver_address">
       </div>
       <div class="col-md-12">
       <label class="form-label">Agent from</label>
              <select class="form-control" name="agent_from">
                <option selected disabled>select an option</option>
                <?php
                $select_q = 'SELECT * FROM `tbl_agent` join `tbl_branch` on tbl_agent.b_id=tbl_branch.b_id right join tbl_city on tbl_city.ci_id=tbl_branch.ci_id';
                $run_q = mysqli_query($conn, $select_q);
                while ($data = mysqli_fetch_array($run_q)) { ?>
                  <option value="<?php echo $data['a_id']; ?>">
                    <?php echo $data['agent_name'] . ',' . $data['ci_name']; ?>
                  </option>

                <?php } ?>
              </select>

       </div>
       <div class="col-md-12">
       <label class="form-label">Location from</label>
              <select class="form-control" name="locationfrom">
              <option selected disabled>select an option</option>
                <?php
                $select_q = 'SELECT * FROM `tbl_city`';
                $run_q = mysqli_query($conn, $select_q);
                while ($data = mysqli_fetch_array($run_q)) { ?>
                  <option value="<?php echo $data['ci_id']; ?>"
                  <?php
                  if($data['ci_id']==$row['locationfrom']){
                    echo "selected";
                  }
                  ?>
                  
                  >
                    <?php echo $data['ci_name']; ?>
                  </option>

                <?php } ?>
              </select>
       </div>
       <div class="col-md-12">
       <label class="form-label">Order Weight</label>
              <input type="text" class="form-control" value="<?php echo $row['order_weight']; ?>" name="order_weight">

       </div>
       <div class="col-md-12">
       <label class="form-label">Order Charges</label>
              <input type="text" class="form-control" value="<?php echo $row['total_charges']; ?>" name="order_charges">
       </div>
     
       <div class="col-md-12">
       
       <label class="form-label">Order Status</label> <br>
         <select name="order_status" id="">

         <option value="pending">Pending</option>
         <option value="Assigned">
          Assigned
         </option>
         
         </select>
       </div>
              </div>
          </div>
            <!-- End Second column -->
            </div>
 <br>
 <button type="submit" class="btn button" name="assign">Assign</button>
 </form>


    </div> 
    <!-- End Form -->
  </div>
            <!-- End of Main Content -->
   </div>
   <br><br>

      <!-- Footer -->
      <?php include('footer.php') ?>
      <!-- End of Footer -->

   