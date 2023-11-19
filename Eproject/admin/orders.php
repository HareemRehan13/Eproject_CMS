<?php
$currentPage = 'orders';

include('connection.php');
$select_q ='SELECT * FROM `tbl_order`';
$run_q = mysqli_query($conn, $select_q);
?>

                <!-- Topbar -->
                <?php include('topbar.php')?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 headings">View Orders</h1>
                       
                    </div>

<div class="container maindiv" style="overflow-x:auto;">
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>UserId</th>
      <th>Sender Name</th>
      <th>Sender Email</th>
      <th>Sender Address</th>
      <th>Sender Phoneno</th>
      <th>Receiver Name</th>
      <th>Receiver Email</th>
      <th>Receiver Address</th>
      <th>Receiver Phoneno</th>
      <th>Agent From</th>
      <th>Agent To</th>
      <th>Order Weight</th>
      <th>Order Distance</th>
      <th>Location From</th>
      <th>Location To</th>
      <th>Company Id</th>
      <th>Total price</th>
      <th>Status</th>
      <th>Assign</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_array($run_q)){?>
   
    <tr>
    <td><?php echo $row['or_id'];?></td>
      <td><?php echo $row['u_id'];?></td>
      <td><?php echo $row['sender_name'];?></td>
      <td><?php echo $row['sender_email'];?></td>
      <td><?php echo $row['sender_address'];?></td>
      <td><?php echo $row['sender_phoneno'];?></td>
      <td><?php echo $row['receiver_name'];?></td>
      <td><?php echo $row['receiver_email'];?></td>
      <td><?php echo $row['receiver_address'];?></td>
      <td><?php echo $row['receiver_phoneno'];?></td>
      <td><?php echo $row['agent_from'];?></td>
      <td><?php echo $row['agent_to'];?></td>
      <td><?php echo $row['order_weight'];?></td>
      <td><?php echo $row['order_distance'];?></td>
      <td><?php echo $row['locationfrom'];?></td>
      <td><?php echo $row['location_to'];?></td>
      <td><?php echo $row['co_id'];?></td>
      <td><?php echo $row['total_charges'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><a href="assign.php?id=<?php echo $row['or_id'];?>">Assign</a></td>
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

       