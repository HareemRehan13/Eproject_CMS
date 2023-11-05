<?php
include('connection.php');
$id = $_GET['id'];

$fetch_selected_r ="SELECT * FROM `tbl_pricing` WHERE p_id = $id";
$run_query = mysqli_query($conn,$fetch_selected_r );
$row = mysqli_fetch_array($run_query);
if(isset($_POST['btnupdate'])){
    $p_parameter = $_POST['p_parameter'];
    $p_price = $_POST['p_price'];
   

    $update_q = "UPDATE `tbl_pricing` SET `p_parameter`='$p_parameter', `p_price`='$p_price' WHERE `p_id` = $id";
    $run = mysqli_query($conn, $update_q);

    if($run){
        echo"<script>window.location.href='pricinglist.php' </script>";
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
                        <h1 class="h3 mb-0 text-gray-800">Update Pricing</h1>
                        <a href="pricingadd.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Add Pricing</a>
                    </div>


                </div>
                <!-- /.container-fluid -->
                <div class="container">

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label  class="form-label">Parameter</label>
        <input type="text" class="form-control" value ="<?php echo $row['p_parameter']; ?>" name="p_parameter">
      </div>
    <div class="mb-3">
      <label  class="form-label">Price</label>
      <input type="text" class="form-control" value ="<?php echo $row['p_price']; ?>" name="p_price">
    </div>
 

 

    <button type="submit" class="btn btn-primary" name="btnupdate">Submit</button>
  </form>
</div>
            </div>


            <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->
