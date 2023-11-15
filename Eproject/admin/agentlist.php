<?php
include('connection.php');
$select_q ='SELECT * FROM `tbl_agent` WHERE status=0';
$run_q = mysqli_query($conn, $select_q);


?>

                <!-- Topbar -->
                <?php include('topbar.php')?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 headings">View Agents</h1>
                        <a href="agentadd.php" class="d-none d-sm-inline-block btn btn-sm btnlink"> Add Agent</a>
                    </div>

<div class="container maindiv">
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Contact</th>
      <th>User Id</th>
      <th>Branch Id</th>
      <th>Actions</th>
     
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($run_q)){?>
   
    <tr>
    <td><?php echo $row['a_id'];?></td>
      <td><?php echo $row['agent_name'];?></td>
      <td><?php echo $row['a_contact'];?></td>
      <td><?php echo $row['u_id'];?></td>
      <td><?php echo $row['b_id'];?></td>
      <div class="mb-3"> 
  </div>
      <td><a href="editagent.php?id=<?php echo $row['a_id'];?>" class="btn btn-primary"><i class='fas fa-edit'></i></a>
     <a href="deleteagent.php?id=<?php echo $row['a_id'];?>" class="btn btn-danger"><i class='fas fa-trash'></i></a></td>
    

    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<br><br>
            <!-- Footer -->
       <?php include('footer.php')?>
            <!-- End of Footer -->

       