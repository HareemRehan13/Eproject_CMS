<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
$update_q ="UPDATE `tbl_user` SET status =1 WHERE u_id = $id";
$run = mysqli_query($conn, $update_q);
if($run){
    echo"<script>window.location.href='userlist.php' </script>";
  }

?>