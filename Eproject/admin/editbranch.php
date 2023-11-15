<?php
include('connection.php');
$id = $_GET['id'];

$select_q ='SELECT * FROM `tbl_city`';
$run_q = mysqli_query($conn, $select_q);

$fetch_selected_r ="SELECT * FROM `tbl_branch` WHERE b_id = $id";
$run_query = mysqli_query($conn,$fetch_selected_r );
$row = mysqli_fetch_array($run_query);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnupdate'])) {
        $branchaddress = $_POST['b_address'];
        $branchcontact = $_POST['b_contact'];
        $city = $_POST['city'];
        $insert_q = "UPDATE `tbl_branch` SET`ci_id`=' $city',`b_address`='$branchaddress',`b_contact`='$branchcontact' WHERE b_id=$id";
        $run= mysqli_query($conn, $insert_q);
        if ($run) {
            header('location: branchlist.php');
       }
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
                        <h1 class="h3 mb-0 headings">Update Branch</h1>
                        <a href="branchadd.php" class="d-none d-sm-inline-block btn btn-sm btnlink"> Add Branch</a>
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
                <label class="form-label"> Branch Address </label>
        <input type="text" class="form-control"  value ="<?php echo $row['b_address']; ?>"name="b_address" required>
   </div>
   <div class="col-md-12">
   <label class="form-label">Branch Contact</label>
        <input type="tel" class="form-control" value ="<?php echo $row['b_contact']; ?>"  name="b_contact" required>
   </div>
   <div class="col-md-12">
   <label class="form-label">City</label>
        <select name="city" id="" class="form-control">
            <?php while ($row = mysqli_fetch_array($run_q)) { ?>
                <option value="<?php echo $row['ci_id'] ?>">
                    <?php echo $row['ci_name'] ?>
                </option>
            <?php } ?>

        </select>
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
