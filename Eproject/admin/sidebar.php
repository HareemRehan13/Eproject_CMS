<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
<div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
</a>

<!-- Divider -->


<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->

<li class="nav-item">
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



<li class="nav-item">
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



<li class="nav-item">
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

<li class="nav-item">
    <a class="nav-link" href="charts.html">
    <i class='fas fa-city'></i>
        <span>City</span></a>
</li>


<li class="nav-item">
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


<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Pricing</span></a>
</li>




<li class="nav-item">
    <a class="nav-link" href="charts.html">
    <i class='fas fa-boxes'></i>
        <span>Orders</span></a>
</li>






</ul>