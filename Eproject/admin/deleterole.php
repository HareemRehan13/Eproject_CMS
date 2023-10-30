<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
$update_q ="UPDATE `tbl_role` SET status =1 WHERE r_id = $id";
$run = mysqli_query($conn, $update_q);
if($run){
    header('location:rolelist.php');
}

?>