<?php
$currentPage = 'pricing';

include('connection.php');

if(isset($_POST['btnsubmit'])){
$p_parameter = $_POST['p_parameter'];
$p_price = $_POST['p_price'];

$insert_q ="INSERT INTO `tbl_pricing`( `p_parameter`, `p_price`) VALUES ('$p_parameter ','$p_price')";
$run = mysqli_query($conn, $insert_q);
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
                        <h1 class="h3 mb-0 headings">Add Pricing</h1>
                        <a href="pricinglist.php" class="d-none d-sm-inline-block btn btn-sm btnlink">  Pricing List</a>
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
                <label  class="form-label">Parameter</label>
    <input type="text" class="form-control" name="p_parameter">
  
   </div>
   <div class="col-md-12">
                <label  class="form-label">Price</label>
    <input type="text" class="form-control" name="p_price">
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
