<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Bigil House - Dashboard</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="" class="logo">
                    <img src="assets/img/bigilhouse14.png" alt="Logo">
                </a>

            </div>

            <a href="javascript:void(0);" id="toggle_btn"> <i class="fas fa-bars"></i>
            </a>
            <div class="top-nav-search">

            </div>

            <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i>
            </a>


            <ul class="nav user-menu">



<li class="nav-item dropdown has-arrow main-drop ml-md-3">
    <a class="dropdown-item" href="admin_sign.php"><i class="feather-power"></i> Logout</a>
</li>
            </ul>

        </div>


        <!-- <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>



                        <li class="active"> <a href="customer.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span>Password </span></a>
                        </li>






                    </ul>
                </div>
            </div>
        </div> -->
        <?php
        include "incl/sidebar.php";

        ?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <h5 class="page-title">Add On Details</h5>
                                <!-- <ul class="breadcrumb ml-2">
<li class="breadcrumb-item"><a href="index-2.html"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="index-2.html">Doctor Dashboard</a></li>
<li class="breadcrumb-item active">Appointments</li>
</ul> -->
                            </div>
                        </div>
                        <div class="col-auto text-right">
                            <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search"> <i class="feather-filter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Basic Inputs</h5>
                            </div>
                            <div class="card-body">



                                <form action="admin_pw_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">UserName</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="name" value="" placeholder="Enter Your UserName">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Password</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="phone" value="" placeholder="Enter Your PassWord">
                                        </div>
                                    </div>









                            </div>
                        </div>
                        <br>


                        <br>






                        <center><button class="btn btn-primary" type="submit">Submit</button></center>
                        </form>
                    </div>
                </div>








            </div>
        </div>



    </div>
    </div>




    </div>




    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

</html>