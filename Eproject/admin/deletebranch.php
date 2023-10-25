<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
$delete_q ="DELETE FROM `tbl_user` WHERE b_id = $id";
$run = mysqli_query($conn, $delete_q);
if($run){
    header('location:branchlist.php');
}

?>