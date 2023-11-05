<?php
include('connection.php');
$select_q = 'SELECT * FROM `tbl_user`WHERE status=0';
$run_q = mysqli_query($conn, $select_q);


?>
     <!-- Topbar -->
                <?php include('topbar.php') ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">View Users</h1>
                        <a href="useradd.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Add
                            User</a>
                    </div>

                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                                <?php while ($row = mysqli_fetch_array($run_q)) { ?>

                                    <tr>
                                        <td>
                                            <?php echo $row['u_id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['u_name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['u_email']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['r_id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['password']; ?>
                                        </td>
                                        <div class="mb-3">
                                        </div>
                                        <td><a href="edituser.php?id=<?php echo $row['u_id']; ?>"
                                                class="btn btn-success">Edit</a></td>
                                        <td><a href="deleteuser.php?id=<?php echo $row['u_id']; ?>"
                                                class="btn btn-danger">Delete</a></td>

                                    
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            
            
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('footer.php') ?>
            <!-- End of Footer -->
