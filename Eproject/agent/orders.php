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
                        <h1 class="h3 mb-0 headings">To Recieve</h1>
                    </div>

<div class="container maindiv" style="overflow-x:auto;">
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>User Id</th>
      <th>Sender Name</th>
      <th>Sender Email</th>
      <th>Sender Address</th>
      <th>Sender Phoneno</th>
      <th>Receiver Name</th>
      <th>Receiver Email</th>
      <th>Receiver Address</th>
      <th>Receiver Phoneno</th>
      <th>Recieve From</th>
      <th>Order Weight</th>
      <th>Order Distance</th>
      <th>Location From</th>
      <th>Company Id</th>
      <th>Total price</th>
      <th>Status</th>
      <th>Update Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $select_q ="SELECT * FROM `tbl_order` join tbl_user on tbl_user.u_id=tbl_order.u_id join tbl_agent on tbl_agent.a_id=tbl_order.agent_from join tbl_city on tbl_city.ci_id=tbl_order.locationfrom join tbl_company on tbl_company.co_id=tbl_order.co_id where tbl_order.agent_to='$id'";
    $run_q = mysqli_query($conn, $select_q);
    while($row2 = mysqli_fetch_assoc($run_q)){?>
   
    <tr>
    <td><?php echo $row2['or_id'];?></td>
     <td><?php echo $row2['u_name'];?></td>
      <td><?php echo $row2['sender_name'];?></td>
      <td><?php echo $row2['sender_email'];?></td>
      <td><?php echo $row2['sender_address'];?></td>
      <td><?php echo $row2['sender_phoneno'];?></td>
      <td><?php echo $row2['receiver_name'];?></td>
      <td><?php echo $row2['receiver_email'];?></td>
      <td><?php echo $row2['receiver_address'];?></td>
      <td><?php echo $row2['receiver_phoneno'];?></td>
      <td><?php echo $row2['agent_name']?></td>
      <td><?php echo $row2['order_weight'];?></td>
      <td><?php echo $row2['order_distance'];?></td>
      <td><?php echo $row2['ci_name'];?></td>
      <td><?php echo $row2['co_name'];?></td>
      <td><?php echo $row2['total_charges'];?></td>
      <td><?php echo $row2['status'];?></td>
      <td><a href="assign.php?id=<?php echo $row2['or_id'];?>">Update</a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
               
<br><br>
 
<?php
$select ="SELECT * FROM `tbl_order` where `agent_from`='$id'";
$ru = mysqli_query($conn, $select);
?>

            
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 headings">To Deliver</h1>
                    </div>

<div class="container maindiv" style="overflow-x:auto;">
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>User Id</th>
      <th>Sender Name</th>
      <th>Sender Email</th>
      <th>Sender Address</th>
      <th>Sender Phoneno</th>
      <th>Receiver Name</th>
      <th>Receiver Email</th>
      <th>Receiver Address</th>
      <th>Receiver Phoneno</th>
      <th>Deliver To</th>
      <th>Order Weight</th>
      <th>Order Distance</th>
      <th>Location To</th>
      <th>Company Id</th>
      <th>Total price</th>
      <th>Status</th>
      <th>Update Status</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $select_q ="SELECT * FROM `tbl_order` join tbl_user on tbl_user.u_id=tbl_order.u_id join tbl_agent on tbl_agent.a_id=tbl_order.agent_from join tbl_city on tbl_city.ci_id=tbl_order.locationfrom join tbl_company on tbl_company.co_id=tbl_order.co_id where tbl_order.agent_from='$id'";
    $run_q = mysqli_query($conn, $select_q);
    while($row2 = mysqli_fetch_assoc($run_q)){?>
   
    <tr>
    <td><?php echo $row2['or_id'];?></td>
     <td><?php echo $row2['u_name'];?></td>
      <td><?php echo $row2['sender_name'];?></td>
      <td><?php echo $row2['sender_email'];?></td>
      <td><?php echo $row2['sender_address'];?></td>
      <td><?php echo $row2['sender_phoneno'];?></td>
      <td><?php echo $row2['receiver_name'];?></td>
      <td><?php echo $row2['receiver_email'];?></td>
      <td><?php echo $row2['receiver_address'];?></td>
      <td><?php echo $row2['receiver_phoneno'];?></td>
      <td><?php echo $row2['agent_name']?></td>
      <td><?php echo $row2['order_weight'];?></td>
      <td><?php echo $row2['order_distance'];?></td>
      <td><?php echo $row2['ci_name'];?></td>
      <td><?php echo $row2['co_name'];?></td>
      <td><?php echo $row2['total_charges'];?></td>
      <td><?php echo $row2['status'];?></td>
      <td><a href="assign.php?id=<?php echo $row2['or_id'];?>">Update</a></td>
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
