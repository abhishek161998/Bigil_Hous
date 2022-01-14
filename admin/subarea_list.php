<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Bigil House - Dashboard</title>

    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->

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
                                <h5 class="page-title">SubArea List</h5>
                                   <h6 class="page-title" style="color:red;">(First Letter Should Be Capital)</h6>
                                <!-- <ul class="breadcrumb ml-2">
<li class="breadcrumb-item"><a href="index-2.html"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="index-2.html">Doctor Dashboard</a></li>
<li class="breadcrumb-item active">Appointments</li>
</ul> -->
                            </div>
                        </div>
                        <div class="col-auto text-right">
                            <a href="sub_area_form.php" class="btn btn-primary"> Add Sub- Area</a>
                        </div>
                    </div>
                </div>




                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> State Name</th>
                                                <th> DistrictName</th>
                                                <th> City Name</th>
                                                <th> Area Name</th>
                                                <th> Sub Area Name</th>


                                                <th>Action</th>
                                            </tr>
                                        </thead>



                                        <?php
                                        include "../database/db_con.php";
                                        $query = "SELECT * FROM  sub_area where status='1'  order by id asc ";

                                        $exe = mysqli_query($conn, $query);
                                        $counter = 0;
                                        while ($row = mysqli_fetch_array($exe)) {
                                            $counter = $counter + 1;
                                            $result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM state WHERE id = '".$row['state_id']."'"));
                                            $res = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM district WHERE id = '".$row['district_id']."'"));
                                            $res1 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM city WHERE id = '".$row['city_id']."'"));

                                            $res2 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM area WHERE id = '".$row['area_id']."'"));

                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $counter; ?></td>
                                                    <td><?php echo $result['state_name'];  ?></td>  
                                                    <td><?php echo $res['district'] ?></td> 
                                                    <td><?php echo $res1['city'] ?></td>
                                                    <td><?php echo $res2['area'] ?></td>
                                                    <td><?php echo $row['sub_area'] ?></td>


                                                    <td class="text-right d-flex">


                                                        <a href="subarea_list_dlt.php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-danger mr-2 d-flex"><i class="far fa-trash-alt mr-1"></i>Delete</a>

                                                        <!-- <a href="category_list_edit.php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-success mr-2 d-flex"><i class="far fa-edit mr-1"></i> Edit</a> -->


                                                    </td>
                                                </tr>

                                            <?php

                                        }
                                            ?>

                                            </tbody>

                                    </table>

                                    <br>
                                    <br>
                                    <!--  <button><a href="form.php" class="btn btn-sm "><i class=""></i>Register</a> </button> -->

                                </div>
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