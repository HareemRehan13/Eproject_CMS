<?php
include('connection.php');
$id = $_GET['id'];
echo $id;
$delete_q ="DELETE FROM `tbl_pricing` WHERE p_id = $id";
$run = mysqli_query($conn, $delete_q);
if($run){
    header('location:pricinglist.php');
}

?>