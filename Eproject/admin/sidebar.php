<?php
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}


function isPageActive($currentPage, $pageName) {
    return ($currentPage === $pageName) ? 'active' : '';
}
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
<div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->


<!-- Nav Item - Dashboard -->
<li class="nav-item <?= isPageActive($currentPage, 'dashboard') ?>">
    <a class="nav-link" href="dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item <?= isPageActive($currentPage, 'users') ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class='fas fa-user-circle'></i>
                    <span>Users</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="userlist.php"> List</a>
                        <a class="collapse-item" href="useradd.php">Add </a>
                    </div>
                </div>
            </li>



<li class="nav-item <?= isPageActive($currentPage, 'agents') ?>" >
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class='fas fa-user-alt'></i>
        <span>Agents</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
           
        <a class="collapse-item" href="agentlist.php"> List</a>
                        <a class="collapse-item" href="agentadd.php">Add </a>
        </div>
    </div>
</li>



<li class="nav-item <?= isPageActive($currentPage, 'roles') ?>" >
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class='fas fa-th-list'></i>
                    <span>Roles</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="rolelist.php"> List</a>
                        <a class="collapse-item" href="roleadd.php">Add </a>
                    </div>
                </div>
            </li>

            <li class="nav-item <?= isPageActive($currentPage, 'city') ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsecity"
                    aria-expanded="true" aria-controls="collapsecity">
                    <i class='fas fa-th-list'></i>
                    <span>City</span>
                </a>
                <div id="collapsecity" class="collapse" aria-labelledby="headingcity" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="citylist.php"> List</a>
                        <a class="collapse-item" href="cityadd.php">Add </a>
                    </div>
                </div>
            </li>


<li class="nav-item <?= isPageActive($currentPage, 'branch') ?>" >
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebranch"
                    aria-expanded="true" aria-controls="collapsebranch">
                    <i class='fas fa-code-branch'></i>
                    <span>Branch</span>
                </a>
                <div id="collapsebranch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                      
                        <a class="collapse-item" href="branchlist.php"> List</a>
                        <a class="collapse-item" href="branchadd.php">Add </a>
                    </div>
                </div>
            </li>


            <li class="nav-item <?= isPageActive($currentPage, 'pricing') ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepricing"
                    aria-expanded="true" aria-controls="collapsepricing">
                    <i class='fas fa-th-list'></i>
                    <span>Pricing</span>
                </a>
                <div id="collapsepricing" class="collapse" aria-labelledby="headingpricing" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="pricinglist.php"> List</a>
                        <a class="collapse-item" href="pricingadd.php">Add </a>
                    </div>
                </div>
            </li>




<li class="nav-item <?= isPageActive($currentPage, 'orders') ?>">
    <a class="nav-link" href="orders.php">
    <i class='fas fa-boxes'></i>
        <span>Orders</span></a>
</li>






</ul>