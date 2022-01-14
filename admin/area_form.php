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

    <script type="text/javascript">
        var cateByType = {
            Apartment: ["1BHK", "2BHK", "3BHK"],
            FamilyHouse: ["1BHK", "2BHK", "3BHK", "Single Room", "Duplex", "Simplex"],
            BachelorHouse: ["1BHK", "2BHK", "3BHK", "Single Room", "Duplex", "Simplex"],
            BoysPg: ["Sharing", "Single", "Fooding", "Non Fooding"],
            GirlsPg: ["Sharing", "Single", "Fooding", "Non Fooding"],
            Hostel: ["Sharing", "Single", "Fooding", "Non Fooding"],
            Office: ["Sqft", "1BHK", "2BHK", "3BHK", "Flooring"],
            Godown: ["Open Space", "Sqft", "1BHK", "2BHK", "3BHK", "Flooring"],
            Commercials: ["Open Space", "Sqft", "1BHK", "2BHK", "3BHK", "Flooring"]
        }

        function makeSubmenu(value) {
            if (value.length == 0) document.getElementById("typeSelect").innerHTML = "<option></option>";
            else {
                var citiesOptions = "";
                for (cityId in cateByType[value]) {
                    citiesOptions += "<option>" + cateByType[value][cityId] + "</option>";
                }
                document.getElementById("typeSelect").innerHTML = citiesOptions;
            }
        }

        function displaySelected() {
            var country = document.getElementById("categorySelect").value;
            var city = document.getElementById("typeSelect").value;
            alert(country + "\n" + city);
        }

        function resetSelection() {
            document.getElementById("categorySelect").selectedIndex = 0;
            document.getElementById("typeSelect").selectedIndex = 0;
        }
    </script>
</head>

<body onload="resetSelection()">

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
                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <h5 class="page-title">Add Area</h5>
                                 <h6 class="page-title" style="color:red;">First Letter Should Be Capital Letter</h6>
                            </div>
                        </div>
                    </div>
                </div>









                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- <p style="color:red;">All Inputs Are Mandatory</p> -->

                            </div>
                            <div class="card-body">



                                <!-- category_list_insert.php -->



                                <form action="area_list_insert.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">State</label>
                                        <div class="col-md-10">
                                            <select name="state" class="form-control" id="categorySelect" onchange="getproduct(this.value)" required>
                                                <option value="" disabled>Choose State</option>
                                                <?php
                                                $query = mysqli_query($conn, "SELECT * from state where status='1' order by id asc");
                                                while ($res = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option value="<?= $res['id']; ?>"><?= $res['state_name']; ?></option>
                                                <?php
                                                }

                                                ?>
                                            </select>


                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Add District</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="district" id="result_data" onchange="getdist(this.value)" required>
                                                <option>Choose District</option>
                                            </select>


                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Add City</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="city" id="result_city" required>
                                                <option>Choose City</option>
                                            </select>


                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Add Area</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" name="area" placeholder="Type Name" required>
                                        </div>
                                    </div>



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
    <script type="text/javascript">
        function getproduct(cat_id) {
            $.ajax({
                type: 'POST',
                url: 'gett_datta.php',
                data: {
                    cat_id: cat_id
                },

                success: function(res) {
                    $('#result_data').html(res);
                },

                error: function(data) {
                    console.log("error");
                    console.log(data);
                }
            });


        }

        function getdist(cat_id) {
            $.ajax({
                type: 'POST',
                url: 'get_city.php',
                data: {
                    cat_id: cat_id
                },

                success: function(res) {
                    $('#result_city').html(res);
                },

                error: function(data) {
                    console.log("error");
                    console.log(data);
                }
            });


        }
    </script>
</body>

</html>