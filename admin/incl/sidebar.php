<?php
include "../database/db_con.php";

$query = "SELECT COUNT(*) FROM   customer ";

$exe = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exe);

$total = $row[0];

$query = "SELECT COUNT(*) FROM   cust_mess ";

$exe = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exe);

$msg = $row[0];

$query = "SELECT COUNT(*) FROM   customer where avail='vacant'";

$exe = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exe);

$totalcus = $row[0];
$query = "SELECT COUNT(*) FROM customer_login";

$exe = mysqli_query($conn, $query);
$row = mysqli_fetch_array($exe);

$totalcust = $row[0];


?>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"> <span>BIGIL HOUSE - ADMIN</span>
                </li>
                <li class=""> <a href="dashboard.php"><i class="feather-home"></i><span class="shape1"></span><span class="shape2"></span><span>Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="feather-disc"></i> <span> Registration</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a href="customer_login_details.php">New Registration<span class="badge bg-orange-text"><?php echo $totalcust ?></span></a></li>
                        <li><a href="index.php">Approval<span class="badge bg-success-text"></span></a></li>
                        <a href="aprove_cust.php"> <span>Approved Registrations</span><span class="badge bg-success-text"><?php echo $total ?></span></a>
                    </ul>
                </li>
                <!-- <li><a href="aprove_cust.php"><i class="feather-user"></i> <span>Approved Registrations</span><span class="badge bg-success-text"><?php echo $total ?></span></a>
                </li> -->
                <li class="submenu">
                    <a href="#"><i class="feather-disc"></i> <span> User</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a href="usersl_login.php">User Login<span class="badge bg-success-text"></span></a></li>
                        <li><a href="active-customer.php">Active Login<span class="badge bg-success-text"></span></a></li>
                        <!-- <li><a href="">Delete Customer<span class="badge bg-success-text"></span></a></li> -->
                    </ul>
                <li><a href="add_property.php"><i class="feather-bar-chart"></i> <span>Property Registration </span></a>

                </li>
                <!-- <li class="submenu">
                    <a href="#"><i class="feather-disc"></i> <span> Catagory</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                       
                        <li><a href="">Avilable<span class="badge bg-orange-text"><?php echo $totalcust ?></span></a></li>
                        <li><a href="">New Catagory<span class="badge bg-orange-text"><?php echo $totalcust ?></span></a></li>
                    </ul>
                </li> -->
                <li class="submenu">
                    <a href="#"><i class="feather-disc"></i> <span> Status</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a href="occupied.php">Occupied<span class="badge bg-orange-text"><?php echo $totalcust ?></span></a></li>
                        <li><a href="vacant.php">Vacant<span class="badge bg-orange-text"><?php echo $totalcus ?></span></a></li>
                    </ul>
                </li>
                <li><a href="contact_msg.php"><i class="feather-message-circle"></i> <span>Messages</span><span class="badge bg-orange-text"><?php echo $msg ?></span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="feather-disc"></i> <span> Site-Add</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">

                        <li><a href="category_list.php"> Category<span class="badge bg-orange-text"></span></a></li>
                        <li><a href="type_list.php"> Add Type<span class="badge bg-success-text"></span></a></li>
                        <a href="state_list.php">Add State <span class="badge bg-success-text"></span></a>
                        <a href="district_list.php">Add District <span class="badge bg-success-text"></span></a>
                        <a href="city_list.php">Add City<span class="badge bg-success-text"></span></a>
                        <a href="area_list.php">Add Area<span class="badge bg-success-text"></span></a>
                        <a href="subarea_list.php">Add Sub-Area<span class="badge bg-success-text"></span></a>
                    </ul>
                </li>

                </li>































                <!-- <li class="submenu">
                    <a href="#"><i class="feather-disc"></i> <span> Register</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="index.php">Login<span class="badge bg-success-text"><?php echo $totalcus ?></span></a></li>
                        <li><a href="customer_login_details.php">Register To<span class="badge bg-orange-text"><?php echo $totalcust ?></span></a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="aprove_cust.php"><i class="feather-user"></i> <span>Approve Customers</span><span class="badge bg-success-text"><?php echo $total ?></span></a>
                </li>
                <li><a href="admin_login.php"><i class="feather-list"></i> <span>Admin Login</span></a>
                </li>
                <li><a href="add_property.php"><i class="feather-bar-chart"></i> <span>Add property</span></a>
                </li>

                <li><a href="contact_msg.php"><i class="feather-message-circle"></i> <span>Messages</span><span class="badge bg-orange-text"><?php echo $msg ?></span></a>
                </li>

                <li><a href="occupied.php"><i class="feather-home"></i></i><span>Occupied</span></a>
                </li> -->
            </ul>
        </div>
    </div>
</div>


<!-- *******new Add******* -->