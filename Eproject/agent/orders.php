<?php
include('connection.php');
include('header.php');

$idd=$_SESSION['id'];
$q="SELECT * from tbl_user join tbl_agent on tbl_user.u_id=tbl_agent.u_id where tbl_user.u_id='$idd'";
$run = mysqli_query($conn, $q);
$i=mysqli_fetch_array($run);
$id=$i['a_id'];

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Agent To</h1>
                    </div>

<div class="container" style="overflow-x:auto;">
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
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
      <th>Update Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $select_q ="SELECT * FROM `tbl_order` where `agent_to`='$id'";
    $run_q = mysqli_query($conn, $select_q);
    while($row2 = mysqli_fetch_assoc($run_q)){?>
   
    <tr>
    <td><?php echo $row2['or_id'];?></td>
     <td><?php echo $row2['u_id'];?></td>
      <td><?php echo $row2['sender_name'];?></td>
      <td><?php echo $row2['sender_email'];?></td>
      <td><?php echo $row2['sender_address'];?></td>
      <td><?php echo $row2['sender_phoneno'];?></td>
      <td><?php echo $row2['receiver_name'];?></td>
      <td><?php echo $row2['receiver_email'];?></td>
      <td><?php echo $row2['receiver_address'];?></td>
      <td><?php echo $row2['receiver_phoneno'];?></td>
      <td><?php echo $row2['agent_from'];?></td>
      <td><?php echo $row2['agent_to'],'-',$i['agent_name'];?></td>
      <td><?php echo $row2['order_weight'];?></td>
      <td><?php echo $row2['order_distance'];?></td>
      <td><?php echo $row2['locationfrom'];?></td>
      <td><?php echo $row2['location_to'];?></td>
      <td><?php echo $row2['co_id'];?></td>
      <td><?php echo $row2['total_charges'];?></td>
      <td><?php echo $row2['status'];?></td>
      <td><a href="assign.php?id=<?php echo $row2['or_id'];?>">Update</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
               
<br>
<br>
 
<?php
$select ="SELECT * FROM `tbl_order` where `agent_from`='$id'";
$ru = mysqli_query($conn, $select);
?>

            
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Agent From</h1>
                    </div>

<div class="container" style="overflow-x:auto;">
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id</th>
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
      <th>Update Status</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = mysqli_fetch_assoc($ru)){?>
   
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
      <td><?php echo $row['agent_from'],'-',$i['agent_name'];;?></td>
      <td><?php echo $row['agent_to']?></td>
      <td><?php echo $row['order_weight'];?></td>
      <td><?php echo $row['order_distance'];?></td>
      <td><?php echo $row['locationfrom'];?></td>
      <td><?php echo $row['location_to'];?></td>
      <td><?php echo $row['co_id'];?></td>
      <td><?php echo $row['total_charges'];?></td>
      <td><?php echo $row['status'];?></td>
      <td><a href="assign.php?id=<?php echo $row['or_id'];?>">Update</a></td>
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
       <?php include('footer.php')?>
            <!-- End of Footer -->
