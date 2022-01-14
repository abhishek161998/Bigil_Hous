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

<body>

    <div class=" main-wrapper">

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

                                $query = "SELECT * FROM admin WHERE id='$id' ";
                                $ex = mysqli_query($conn, $query);
                                $data = mysqli_fetch_array($ex);


                                ?>



                                <?php $options = $data['catagory']; ?>


                                <form action="aprove_update.php" method="POST" enctype="multipart/form-data">
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
                                            <input type="text" class="form-control" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Enter Your Phone Number">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Email</label>
                                        <div class="col-md-10">
                                            <input type="email" class="form-control" value="<?php echo $data['email'] ?>" name="email" placeholder="Enter Your Email Id">
                                        </div>
                                    </div>





                                    <div class="container">

                                        <div class="row">
                                            <label class="col-form-label col-md-2">Choose</label>

                                            <div class="col-md-2">

                                                <input type="text" class="form-control" value="<?php echo $data['state'] ?>" name="state" placeholder="State">

                                            </div>
                                            <div class="col-md-2">

                                                <input type="text" class="form-control" value="<?php echo $data['dist'] ?>" name="dist" placeholder="Dist">

                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" name="city" value="<?php echo $data['city'] ?>" placeholder="City">


                                            </div>

                                            <div class="col-md-2">

                                                <input type="text" class="form-control" name="area" value="<?php echo $data['area'] ?>" placeholder="Area">
                                            </div>
                                            <div class="col-md-2">

                                                <input type="text" class="form-control" name="sub_area" value="<?php echo $data['sub_area'] ?>" placeholder="Sub Area">

                                            </div>

                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Address</label>
                                        <div class="col-md-10">
                                            <textarea rows="5" cols="5" class="form-control" name="address" placeholder="Enter Your Address / With Pin-Code">
	<?php echo $data['address'] ?>
</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Category</label>
                                        <div class="col-md-10">
                                            <select name="catagory" class="form-control" id="categorySelect" size="1" onchange="makeSubmenu(this.value)">
                                                <!-- <option value="" disabled selected>Choose Category</option> -->

                                                <option value="FamilyHouse" <?php if ($data['catagory'] == "FamilyHouse") {
                                                                                echo "selected";
                                                                            } ?>> Family House</option>
                                                <option value="Apartment" <?php if ($data['catagory'] == "Apartment") {
                                                                                echo "selected";
                                                                            } ?>> Apartment</option>
                                                <option value="BachelorHouse" <?php if ($data['catagory'] == "BachelorHouse") {
                                                                                    echo "selected";
                                                                                } ?>>Bachelor House</option>
                                                <option value="BoysPg" <?php if ($data['catagory'] == "BoysPg") {
                                                                            echo "selected";
                                                                        } ?>> Boy's Pg</option>
                                                <option value="GirlsPg" <?php if ($data['catagory'] == "GirlsPg") {
                                                                            echo "selected";
                                                                        } ?>> Girl's Pg</option>
                                                <option value="Office" <?php if ($data['catagory'] == "Office") {
                                                                            echo "selected";
                                                                        } ?>> Office</option>
                                                <option value="Godown" <?php if ($data['catagory'] == "Godown") {
                                                                            echo "selected";
                                                                        } ?>> Godown</option>
                                                <option value="Hostel" <?php if ($data['catagory'] == "Hostel") {
                                                                            echo "selected";
                                                                        } ?>> Hostel</option>
                                                <option value="Commercials" <?php if ($data['catagory'] == "Commercials") {
                                                                                echo "selected";
                                                                            } ?>> Commercials</option>
                                            </select>


                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Type</label>
                                        <div class="col-md-2">
                                            <select class="form-control" name="type" id="typeSelect" size="1">
                                                <!-- <option value="" disabled selected>Choose Type</option> -->
                                                <option value="<?php echo $data['type'] ?>" <?php if ($data['type'] == $data['type']) {
                                                                                                echo "selected";
                                                                                            } ?>> <?php echo $data['type'] ?></option>
                                            </select>
                                        </div>
                                    </div>






                                    <!-- <div class="row">
<label class="col-form-label col-md-2">Type</label>
<div class="col-md-2">

<div class="radio">
<label>



<input type="radio" name="type" value="1bhk"  <?php if ($data['type'] == '1bhk') {
                                                    echo "checked";
                                                } ?>  > 1BHK
</label>
</div>

</div>
<div class="col-md-2">

<div class="radio">
<label>
<input type="radio" name="type" value="2bhk" <?php if ($data['type'] == '2bhk') {
                                                    echo "checked";
                                                } ?> > 2BHK
</label>
</div>

</div>
<div class="col-md-2">

<div class="radio">
<label>
<input type="radio" name="type" value="3bhk" <?php if ($data['type'] == '3bhk') {
                                                    echo "checked";
                                                } ?> > 3BHK
</label>
</div>

</div>
<div class="col-md-2">

<div class="radio">
<label>
<input type="radio" name="type" value="other" <?php if ($data['type'] == 'other') {
                                                    echo "checked";
                                                } ?> > Other
</label>
</div>

</div>


</div> -->

                                    <br>








                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Interior Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control" value="<?php echo $data['int_img'] ?>" name="int_img" type="file"><img src="../upload/interior/<?php echo $data['int_img'] ?> " style="width: 200px;">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Exterior Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control" value="<?php echo $data['ext_img'] ?>" name="ext_img" type="file"><img src="../upload/exterior/<?php echo $data['ext_img'] ?> " style="width: 200px;">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Availability</label>
                                        <div class="col-md-10">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="avail" value="occupied" <?php if ($data['avail'] == 'occupied') {
                                                                                                            echo "checked";
                                                                                                        } ?>>&nbsp;&nbsp;&nbsp;<span style="background-color:red; padding:9px;">Occupied</span>
                                                </label>
                                            </div>
                                            <br>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="avail" value="vacant" <?php if ($data['avail'] == 'vacant') {
                                                                                                        echo "checked";
                                                                                                    } ?>>&nbsp;&nbsp;&nbsp;<span style="background-color:green; padding:9px;">Vacant</span>
                                                </label>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-md-2">Price</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" value="<?php echo $data['price'] ?>" name="price" placeholder="Price">
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
</body>

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

</html>