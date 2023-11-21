<?php
$currentPage = 'dashboard';

include('connection.php'); 

$countcompany = "SELECT COUNT(*) as totalcompanies FROM tbl_company";
$countbranch = "SELECT COUNT(*) as totalbranches FROM tbl_branch";
$countagent = "SELECT COUNT(*) as totalagents FROM tbl_agent";
$countuser = "SELECT COUNT(*) as totalusers FROM tbl_user WHERE r_id = '2'";
$countorder = "SELECT COUNT(*) as totalorders FROM tbl_order";
$countPendingOrders= "SELECT COUNT(*) as totalPendingOrders FROM tbl_order WHERE stat = 'pending'";
$countShippedOrders= "SELECT COUNT(*) as totalShippedOrders FROM tbl_order WHERE stat = 'shipped'";
$countDeliveredOrders= "SELECT COUNT(*) as totalDeliveredOrders FROM tbl_order WHERE stat = 'delivered'";

$q1 = mysqli_query($conn, $countcompany);
$q2 = mysqli_query($conn, $countbranch);
$q3 = mysqli_query($conn, $countagent);
$q4 = mysqli_query($conn, $countuser);
$q5 = mysqli_query($conn, $countorder); 
$q6 = mysqli_query($conn, $countPendingOrders);
$q7 = mysqli_query($conn, $countShippedOrders);
$q8 = mysqli_query($conn, $countDeliveredOrders);

    $row1 = mysqli_fetch_assoc($q1);
    $row2 = mysqli_fetch_assoc($q2);
    $row3 = mysqli_fetch_assoc($q3);
    $row4 = mysqli_fetch_assoc($q4);
    $row5 = mysqli_fetch_assoc($q5);
    $row6 = mysqli_fetch_assoc($q6);
    $row7 = mysqli_fetch_assoc($q7);
    $row8 = mysqli_fetch_assoc($q8);

    $totalcompanies = $row1['totalcompanies'];
    $totalbranches = $row2['totalbranches'];
    $totalagents= $row3['totalagents'];
    $totalusers= $row4['totalusers'];
    $totalorders= $row5['totalorders'];
    $totalPendingOrders = $row6['totalPendingOrders'];
    $totalShippedOrders = $row7['totalShippedOrders'];
    $totalDeliveredOrders = $row8['totalDeliveredOrders'];
?>

     <!-- Topbar -->

                <?php include('header.php'); ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 headings">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">
  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <h6>  Companies</h6> </div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $totalcompanies; ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-building' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                              <h6> Total Branches</h6></div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $totalbranches; ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-code-branch' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h6>Total Staff</h6></div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $totalagents; ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-user-cog' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <h6> User</h6>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $totalusers; ?></div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-users' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

 
 <!-- Pending Requests Card Example -->
 <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <h6>  Couriers</h6> </div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $totalorders; ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-boxes' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
  <!-- Earnings (Monthly) Card Example -->
 <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                              <h6> Pending</h6></div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $totalPendingOrders; ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-redo-alt' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h6>Shipped</h6></div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $totalShippedOrders; ?></div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-shipping-fast' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            <h6> Delivered</h6>
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $totalDeliveredOrders; ?></div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        <i class='fas fa-handshake' style='font-size:36px'></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      


</div>
                 


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<br><br>
            <!-- Footer -->
           <?php include('footer.php'); ?>
            <!-- End of Footer -->

      