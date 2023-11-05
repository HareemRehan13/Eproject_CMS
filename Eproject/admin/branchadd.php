<?php
include('connection.php');
$fetch_q = "SELECT * FROM `tbl_city`";
$run_q = mysqli_query($conn, $fetch_q);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnsubmit'])) {
        $branchaddress = $_POST['b_address'];
        $branchcontact = $_POST['b_contact'];
        $city = $_POST['ci_id'];
        /* $userimg_name = $_FILES['p_img']['name'];
         $userimg_tempname = $_FILES['p_img']['tmp_name'];
         $userimg_path = 'image/' . $userimg_name;
         move_uploaded_file($userimg_tempname, $userimg_path);*/
        $insert_q = "INSERT INTO `tbl_branch`( `b_address`, `b_contact`, `ci_id`) VALUES ('$branchaddress','$branchcontact','$city')";
        $run = mysqli_query($conn, $insert_q);
        if($run){
      echo"<script>window.location.href='branchlist.php' </script>";
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
                        <h1 class="h3 mb-0 text-gray-800">Add Branch</h1>
                        <a href="branchlist.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Branch List </a>
                    </div>

                
                <!-- /.container-fluid -->

                    <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label"> Branch Address </label>
                            <input type="text" class="form-control" name="b_address" required>

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Branch Contact</label>
                            <input type="tel" class="form-control" name="b_contact" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <select name="ci_id" id="" class="form-control">
                            <option selected disabled>Select an option</option>
                                <?php while ($row = mysqli_fetch_array($run_q)) { ?>
                                    <option value="<?php echo $row['ci_id'] ?>">
                                        <?php echo $row['ci_name'] ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>
                        <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->
     