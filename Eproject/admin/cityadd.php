<?php
include('connection.php');
$fetch_q = "SELECT * FROM `tbl_city`";
$run_q = mysqli_query($conn, $fetch_q);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btnsubmit'])) {
        $cityname = $_POST['ci_name'];
       /* $branchcontact = $_POST['b_contact'];
        $city = $_POST['ci_id'];*/
        /* $userimg_name = $_FILES['p_img']['name'];
         $userimg_tempname = $_FILES['p_img']['tmp_name'];
         $userimg_path = 'image/' . $userimg_name;
         move_uploaded_file($userimg_tempname, $userimg_path);*/
        $insert_q = "INSERT INTO `tbl_city`(`ci_name`) VALUES ('$cityname')";
        $run = mysqli_query($conn, $insert_q);
        if($run){
      echo"<script>window.location.href='citylist.php' </script>";
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
                        <h1 class="h3 mb-0 text-gray-800">City Add</h1>
                        <a href="citylist.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">City List </a>
                    </div>

                
                <!-- /.container-fluid -->

                  <form method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">City Name</label>
                            <input type="text" class="form-control" name="ci_name" required>

                        </div>
                        
                            <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            
         <!-- End of Main Content -->

            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->
