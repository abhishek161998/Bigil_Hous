<?php
session_start();
?>
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
                                <h5 class="page-title">District List</h5>
                                 <h6 class="page-title" style="color:red;">(First Letter Should Be Capital)</h6>
                                <!-- <ul class="breadcrumb ml-2">
<li class="breadcrumb-item"><a href="index-2.html"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="index-2.html">Doctor Dashboard</a></li>
<li class="breadcrumb-item active">Appointments</li>
</ul> -->
                            </div>
                        </div>
                        <div class="col-auto text-right">
                            <a href="district_form.php" class="btn btn-primary"> Add District </a>
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
                                                <th> District Name</th>
                                                 


                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            <?php
                                            include "../database/db_con.php";
                                            $query = "SELECT * FROM  district where status='1'  order by id desc ";

                                            $exe = mysqli_query($conn, $query);
                                            $counter = 0;
                                            while ($row = mysqli_fetch_array($exe)) {
                                                $counter = $counter + 1;
                                                $catname = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM state where id='" . $row['state_id'] . "'"))

                                            ?>
                                                <tr>
                                                    <td><?php echo $counter; ?></td>
                                                    <td><?php echo $catname['state_name'];  ?></td> 
                                                    <td><?php echo $row['district'] ?></td>
                                                    


                                                    <td class="text-right d-flex">


                                                        <a href="district_list_delet.php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-danger mr-2 d-flex"><i class="far fa-trash-alt mr-1"></i>Delete</a>

                                                        <!-- <a href=".php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-success mr-2 d-flex"><i class="far fa-edit mr-1"></i> Edit</a> -->


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

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <?php
    if (isset($_SESSION['message'])) {
    ?>
        <script>
            // swal("<?= $_SESSION['message']; ?>");
            swal("<?= $_SESSION['message']; ?>");
        </script>
    <?php

        unset($_SESSION['message']);
    }
    ?> -->
</body>

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

</html>