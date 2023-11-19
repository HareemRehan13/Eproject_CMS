<?php
$currentPage = 'city';

include('connection.php');
$id = $_GET['id'];

$fetch_selected_r ="SELECT * FROM `tbl_city` WHERE ci_id = $id";
$run_query = mysqli_query($conn,$fetch_selected_r );
$row = mysqli_fetch_array($run_query);
if(isset($_POST['btnupdate'])){
    $cityname = $_POST['ci_name'];
    $update_q = "UPDATE `tbl_city` SET `ci_name`='$cityname' WHERE `ci_id` = $id";
    $run = mysqli_query($conn, $update_q);

    if($run){
        header('location:citylist.php');
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
                        <h1 class="h3 mb-0 headings">Update City</h1>
                        <a href="cityadd.php" class="d-none d-sm-inline-block btn btn-sm btnlink"> Add City</a>
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
                <label  class="form-label">City Name</label>
        <input type="text" class="form-control" value ="<?php echo $row['ci_name']; ?>" name="ci_name">
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
