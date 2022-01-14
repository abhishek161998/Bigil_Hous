<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("location:admin_signup.php");
}

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
<style>
    .m1 {
        background-image: url('/css/searchicon.png');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
    }

    #myTable {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid #ddd;
        /* font-size: 18px; */
    }

    #myTable th,
    #myTable td {
        text-align: left;
        padding: 12px;
    }

    #myTable tr {
        border-bottom: 1px solid #ddd;
    }

    #myTable tr.header,
    #myTable tr:hover {
        background-color: #f1f1f1;
    }
</style>

<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>



                    <li class="active"> <a href="customer.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span>Go Back </span></a>
                    </li>


                </ul>
            </div>
        </div>
    </div>

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




        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="d-flex align-items-center">
                                <h5 class="page-title">Edit Images</h5>
                                <span style="color: red;">*image size should be less than 350 kb</span>

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

                <table class="table" id="myTable">
                    <tr>

                        <th style="width:10%;">Interior Images</th>
                        <th style="width:10%;">Action</th>

                    </tr>
                    <?php
                    include "../database/db_con.php";
                    $id = $_GET['id'];
                    $query = "SELECT * FROM cust_int_img where img_id = '$id'";

                    $exe = mysqli_query($conn, $query);
                    $counter = 0;
                    while ($row = mysqli_fetch_array($exe)) {
                        $counter = $counter + 1;

                    ?>
                        <tr>

                            <td><img src="../upload/interior/<?php echo $row['int_img'] ?>" alt="" width="120px" height="120px"></td>


                            <td class="text-right d-flex">


                                <a href="photo_delet.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-white text-danger mr-2 d-flex"><i class="far fa-trash-alt mr-1"></i>Delete</a>

                                <a href="photo_update.php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-success mr-2 d-flex"><i class="far fa-edit mr-1"></i> Edit</a>
                            </td>

                        </tr>
                    <?php

                    }
                    ?>


                </table>
                <table class="table" id="myTable">
                    <tr>

                        <th style="width:10%;">Exterior Images</th>
                        <th style="width:10%;">Action</th>

                    </tr>
                    <?php
                    include "../database/db_con.php";
                    $id = $_GET['id'];
                    $query = "SELECT * FROM cust_ext_img where img_id = '$id'";

                    $exe = mysqli_query($conn, $query);
                    $counter = 0;
                    while ($row = mysqli_fetch_array($exe)) {
                        $counter = $counter + 1;

                    ?>
                        <tr>
                            <td><img src="../upload/exterior/<?php echo $row['ext_img'] ?>" alt="" width="120px" height="120px"></td>

                            <td class="text-right d-flex">


                                <a href="ext_delet.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-white text-danger mr-2 d-flex"><i class="far fa-trash-alt mr-1"></i>Delete</a>

                                <a href="ext_edit.php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-success mr-2 d-flex"><i class="far fa-edit mr-1"></i> Edit</a>
                            </td>

                        </tr>
                    <?php

                    }
                    ?>


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


    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }





        function my() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("Input");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }





        function Function() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("put");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }



        function unction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("ut");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[5];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

</html>