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
                        <a class="dropdown-item" href="admin_logout.php"><i class="feather-power"></i> Logout</a>
                    </li>
                </ul>

            </div>


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


                                    <?php
                                    include "../database/db_con.php";

                                    $id = $_GET['id'];

                                    $query = "SELECT * FROM customer_login WHERE id='$id' ";
                                    $ex = mysqli_query($conn, $query);
                                    $data = mysqli_fetch_array($ex);


                                    ?>



                                    <form action="profile_update.php" method="POST" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Name</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Your Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Phone Number</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" name="number" value="<?php echo $data['number'] ?>" placeholder="Enter Your Phone Number" readonly>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" class="form-control" value="<?php echo $data['mail'] ?>" name="mail" placeholder="Enter Your Email Id">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-form-label col-md-2">Message</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" value="<?php echo $data['msg'] ?>" name="msg" placeholder="Enter Your msg">
                                            </div>
                                        </div>














                                        <!-- <div class="form-group row">
    <label class="col-form-label col-md-2">Password</label>
    <div class="col-md-10">
    <input type="text" class="form-control" value="<?php echo $data['password'] ?>"  name="password" placeholder="Enter Password">
    </div>
    </div> -->


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