<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
$delete_q ="DELETE FROM `tbl_agent` WHERE a_id = $id";
$run = mysqli_query($conn, $delete_q);
if($run){
    echo"<script>window.location.href='agentlist.php' </script>";
  }

?>