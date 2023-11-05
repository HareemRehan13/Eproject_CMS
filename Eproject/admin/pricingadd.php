
<?php
include('connection.php');

if(isset($_POST['btnsubmit'])){
$p_parameter = $_POST['p_parameter'];
$p_price = $_POST['p_price'];

$insert_q ="INSERT INTO `tbl_pricing`( `p_parameter`, `p_price`) VALUES ('$p_parameter ','$p_price')";
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
                        <h1 class="h3 mb-0 text-gray-800">Add Pricing</h1>
                        <a href="pricinglist.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">  Pricing List</a>
                    </div>

                
                <!-- /.container-fluid -->

            </div>
           <div class="container">
            <form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label  class="form-label">Parameter</label>
    <input type="text" class="form-control" name="p_parameter">
  
  </div>
  <div class="mb-3">
    <label  class="form-label">Price</label>
    <input type="text" class="form-control" name="p_price">
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
