<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">



<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Bigil House">
    <meta name="description" content="Bigil House is a well-known online property brokerage service that connects landlords and tenants on a single platform. Our objective is to help property owners get the most value for their money and obtain the greatest pricing. When tenants are looking for a place to rent, we want to make sure they have all of the information they need and all of the options available to them.">
    <meta name="keywords" content="property ,bhubaneswar,rent ,house ,Bigil House">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="IntelCorp Solutions Pvt Ltd">
    <meta name="copyright" content=" Bigil House">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   
    
    <meta name="author" content="rakesh,abhishek">

    <!-- Titles
    ================================================== -->
    <title> Bigil House | Home</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/images/bigilhouse14.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.html">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
    <!-- Custom Font
  1  ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/colors.css">
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr
    ================================================== -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


    <!-- tab -->

    <link href="assets1/vendor/aos/aos.css" rel="stylesheet">
    <!-- <link href="assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets1/css/style.css" rel="stylesheet">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
        }

        .category {
            width: 8vw;
        }
    </style>
</head>

<body>
    <!-- ====== Header Mobile Area ====== -->
    <?php

    include "inc/header.php";


    ?>
    <!-- ====== Header Overlay Content ====== -->
    <div class="header-overlay-content">
        <!-- overlay-menu-item -->
        <div class="overlay overlay-hugeinc gradient-transparent overlay-menu-item">
            <button type="button" class="overlay-close">Close</button>
            <nav>
                <ul class="overlay-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a>
                        <ul class="sub-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Work</a></li>
                            <li><a href="#">Clients</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Work</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Clients</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div> <!-- /.overlay-menu-item -->

        <!-- header-search-content -->
        <div class="gradient-transparent overlay-search">
            <button type="button" class="overlay-close">Close</button>
            <div class="header-search-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#" method="get" class="searchform">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-controller" placeholder="Search for snippets" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <span class="fa fa-caret-down"></span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <div class="form-horizontal">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox"> From Blog</label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label><input type="checkbox">Find Your Apartment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.header-search-content -->
        <?php include 'inc/form.php' ?>
        <!-- Registrar Or Sign In-content -->
        <!-- cd-user-modal -->
    </div><!-- /.header-overlay-content -->


    <div class="slider-area">
        <div class="pogoSlider">
            <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/slider-1.jpg);">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Bigil House</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>

                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
            <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000" style="background-image:url(assets/images/slider-2.jpg);">
                <div class="container-slider one">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-text-content">
                                <h3 class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">Good Service is our passion</h3>
                                <h2 class="pogoSlider-slide-element" data-in="slide-left" data-out="slideUp" data-duration="500" data-delay="500">Bigil House</h2>
                                <p class="pogoSlider-slide-element" data-in="slideDown" data-out="slideUp" data-duration="500" data-delay="500">No matter what the weather, no matter what the situation we are in, if we have the right perspective in life, life will always be beautiful!</p>

                            </div><!-- /.text-content -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.container-slider -->
            </div>
        </div><!-- .pogoSlider -->
    </div>

    <!-- /.main-slider -->
    <div class="form-area eight">
        <div class="container">
            <div class="row">
                <div class="col-md-12 form-bg form-top border-radius">
                    <form action="search.php" method="GET" class="advance_search_query">
                        <div class="form-content">
                            <div class="form-group">
                                <label>City</label>
                                <select name="city" id="result_city" onchange="getcity(this.value)">
                                    <option value="" disabled selected>Choose City</option>

                                    <?php
                                    include "database/db_con.php";

                                    $query = mysqli_query($conn, "SELECT * from city where status='1' order by id asc");
                                    while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $res['id']; ?>"><?= $res['city']; ?></option>
                                    <?php } ?>
                                </select>
                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Area</label>
                                <select name="area">
                                    <option value="" disabled selected>Choose Area</option>
                                <?php
                                    include "database/db_con.php";

                                    $query = mysqli_query($conn, "SELECT * from area where status='1' order by id asc");
                                    while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $res['id']; ?>"><?= $res['area']; ?></option>
                                    <?php } ?>
                                    </select>

                            </div><!-- /.form-group -->
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category">
                                    <option value="" disabled selected>Choose Category</option>

                                    <?php
                                    include "database/db_con.php";

                                    $query = mysqli_query($conn, "SELECT * from category where status='1' order by id asc");
                                    while ($res = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?= $res['id']; ?>"><?= $res['catagory_name']; ?></option>
                                    <?php } ?>

                                </select>
                            </div><!-- /.form-group -->
                            <!-- <div class="form-group"> -->
                            <!-- <label>Price &#8377;</label> -->
                            <!-- <input type="text" name="FirstName" placeholder="min"> -->
                            <!-- <input type="range" id="price" value="5000" name="price" min="5000" max="12000" oninput="this.nextElementSibling.value = this.value"> -->
                            <!-- <output style="color:#222831;"> 5000</output> -->
                            <!-- </div> -->
                            <!-- /.form-group -->
                            <div class="form-group">
                                <button type="submit" class=" button nevy-button">Check Availability</button>
                            </div><!-- /.form-group -->
                        </div><!-- /.form-content -->
                    </form> <!-- /.advance_search_query -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>


    <!-- ====== Category Area ====== -->
    <div class="category-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="catagory-left-content clearfix">
                        <h2 class="default-text-gradient">We <br> Provide</h2>
                        <!-- <a href="#" class="button nevy-button">All Apartment</a> -->
                    </div>
                    <!--/.catagory-left-content -->
                </div>
                <!--/.col-md-4 -->
                <div class="col-md-8 col-sm-8">
                    <div class="catagory-right-content row">
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="familyHouse.php"><img src="assets/images/category/category-one.png" alt="category" />
                                <h4>Family House</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="apartment.php"><img src="assets/images/category/category-two.png" alt="category" />
                                <h4>Apartment</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="boyspg.php"><img src="assets/images/category/boyy.png" alt="category" />
                                <h4>Boys PG</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="bachelorhouse.php"><img src="assets/images/category/category-three.png" alt="category" />
                                <h4>Bachelor House</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-md visible-lg"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="office.php"><img src="assets/images/category/category-six.png" alt="category" />
                                <h4>Office</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="godown.php"><img src="assets/images/category/godwon.png" alt="category" />
                                <h4>Godown</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="hostel.php"><img src="assets/images/category/category-seven.png" alt="category" />
                                <h4>Hostel</h4>
                            </a>
                        </div><!-- /.category-list -->
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="commercials.php"><img src="assets/images/category/commercial.png..png" alt="category" />
                                <h4>Commercials</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-md visible-lg"></div><!-- /.clearfix -->

                        <!-- /.category-list -->

                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="girlspg.php"><img src="assets/images/category/ladies.png" alt="category" />
                                <h4>Girls PG</h4>
                            </a>
                        </div><!-- /.category-list -->

                        <!-- /.category-list -->
                    </div>
                    <!--/.catagory-right-content -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div>
        <!--/.container -->
    </div><!-- /.category-area -->

    <!-- <section id="cliens" class="cliens section-bg">
        <div class="container">

            <div class="row aos-init aos-animate justify-content-center" data-aos="zoom-in">

                <div class="col-lg-1 col-md-2 col-6 d-flex align-items-center justify-content-center category">
                    <img src="assets/images/category/category-one.png" class="img-fluid" alt="">
                    <p>Family House</p>

                </div>

                <div class="col-lg-1 col-md-2 col-6 d-flex align-items-center justify-content-center category">
                    <img src="assets/images/category/category-two.png" class="img-fluid" alt="">
                    <p>Apartment</p>

                </div>

                <div class="col-lg-1 col-md-2 col-6 d-flex align-items-center justify-content-center category">
                    <img src="assets/images/category/category-three.png" class="img-fluid" alt="">
                    <p>Bachelor House</p>

                </div>

                <div class="col-lg-1 col-md-2 col-6 d-flex align-items-center justify-content-center category">
                    <img src="assets/images/category/boyy.png" width="45px" class="img-fluid" alt="">
                    <p>Boy's P.G</p>

                </div>

                <div class="col-lg-1 col-md-2 col-6 d-flex align-items-center justify-content-center category">
                    <img src="assets/images/category/ladies.png" width="45px" class="img-fluid" alt="">
                    <p>Girl's P.G</p>

                </div>

                <div class="col-lg-1 col-md-2 col-6 d-flex align-items-center justify-content-center category">
                    <img src="assets/images/category/category-six.png" class="img-fluid" alt="">
                    <p>Office</p>

                </div>
                <div class="col-lg-1 col-md-2 col-6 d-flex align-items-center justify-content-center category">
                    <img src="assets/images/category/godwon.png" class="img-fluid" alt="">
                    <p>Godown</p>

                </div>
            </div>

        </div>
    </section> -->

    <!-- ====== Availability Area ======= -->

    <!-- /.Availability-area -->

    <!-- ====== About Us Area ====== -->
    <div class="aboutus-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">About Us</h2>
                        <h5 class="sub-title">Welcome to our House Rent Company</h5>
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-2">
                    <div class="tab-list">
                        <ul class="nav nav-tabs about-tab hidden-xs hidden-sm" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">About Company</a>
                            </li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Terms &amp; Condition</a>
                            </li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our Specialty</a>
                            </li>
                            <!-- <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our specialty</a>
                            </li> -->
                        </ul>
                        <form class="hidden-md hidden-lg">
                            <select class="about-mobile">
                                <option value='0'>About Company</option>
                                <option value='1'>Terms &amp; Condition</option>
                                <option value='2'>Our specialty</option>
                                <!-- <option value='3'>Our specialty</option> -->
                            </select>
                        </form>
                    </div> <!-- /.tab-list -->
                </div> <!-- /.col-md-2 -->

                <div class="col-md-10">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active row" id="home">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Bigil House is a well-known online real estate brokerage service that connects landlords and tenants on a single platform. Our objective is to help property owners get the most value for their money and obtain the greatest pricing. When tenants are looking for a place to rent, we want to make sure they have all of the information they need and all of the options available to them.</p>
                                    <ul>
                                        <li>Finding a home may be a difficult process.</li>
                                        <li>If you're a professional who's always on the go.</li>
                                        <li>With the help of our internet platform.</li>

                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="images/Bigil House copy.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->

                        <div role="tabpanel" class="tab-pane fade row" id="profile">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <!-- <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p> -->
                                    <ul>
                                        <li>Bigil House operates as an intermediary between a tenant and a property owner. Through Bigil House, both sides must reach an agreement.</li>
                                        <li>Breakage of any points mentioned in the agreement will lead to termination of the contract or penalties.
                                        </li>
                                        <li>Rent amount can change within the tenure depending upon market conditions, until unless stated in the agreement.</li>
                                        <li>Once you've paid, you can't get your money back...</li>
                                        <li>Bigil House reserves all the rights to terminate the contract of both owner and renter if found violating terms or misconduct of property.</li>
                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="images/Bigil House3.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.profile -->

                        <div role="tabpanel" class="tab-pane fade row" id="messages">
                            <div class="col-md-6">
                                <div class="text-content">
                                    <!-- <p>Amorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae nibh nisl. Cras etitikis mauris egeth lorem ultricies ferme is ntum a inti diam. Morbi mollis pellden tesque offs aiug ueia nec rhoncus. Nam ute ultricies. Cras etitikis mauris eget lorem ultricies ferme ntum a inti diam. Morbi mollis pellen tesque offs aiug ueia nec rhoncus. Nam ute ultricies.</p> -->
                                    <ul>
                                        <li>Commercial Space</li>
                                        <!-- <li>Cras etitikis mauris egeth lorem ultricies</li> -->
                                        <li>Residential Space</li>
                                        <li>Bachelor’s</li>
                                        <li>PG </li>
                                        <li>10 years of expertise</li>
                                        <li>Customer satisfaction is guaranteed.</li>
                                    </ul>
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="images/Bigil House2.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div>
                        <!-- /.messages -->
                    </div> <!-- /.tab-content -->
                </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
            <a style="background-color: #FCA22A;" href="about.php" class="button">Read More</a>

        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->

    <!-- ====== Apartments Area ====== -->

    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="heading-content-one border">
                <h2 class="title">Rooms &amp; Apartments</h2>
                <h5 class="sub-title">Find Your Rooms, for your abaility</h5>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".20">Family House</li>
                <li data-filter=".21">Apartments</li>
                <li data-filter=".27">Boy's PG</li>
                <li data-filter=".26">Girl's PG</li>
                <li data-filter=".28">Office</li>
                <li data-filter=".22">Bachlore House</li>
                <li data-filter=".29">Godown</li>
                <li data-filter=".30">Hostel</li>
                <!-- <li data-filter=".32">Comercials</li> -->

            </ul>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php
                include "database/db_con.php";
                $query = "SELECT * FROM customer";
                $exe = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($exe)) {
                ?>
                    <?php
                    // $query = "SELECT * FROM customer";
                    // $exe = mysqli_query($conn, $query);
                    // $data = mysqli_fetch_array($exe);
                    $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM cust_ext_img WHERE img_id = '" . $row['id'] . "'"));
                    // $id = $data['catagory'];
                    $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM category WHERE id = '" . $row['catagory'] . "'"));

                    $result1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM type WHERE id = '" . $row['type'] . "'"));
                    $res1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM area WHERE id = '" . $row['area'] . "'"));
                    $res2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM city WHERE id = '" . $row['city'] . "'"));

                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item <?php echo $row['catagory']; ?>">
                        <div class="portfolio-img"> <a href="apartment-single.php?id=<?php echo $row['id']   ?>"><img src="upload/exterior/<?php echo $data['ext_img'] ?>" class="img-fluid" alt=""></a> </div>
                        <div class="portfolio-info">
                            <h4><?php echo $result1['type']; ?></h4>
                            <p><?php echo $res1['area'];
                                echo ", ";
                                echo $res2['city']; ?></p>
                            <!-- <a href="assets/images/apartment/apartment-one.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a> -->
                            <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                        </div>
                    </div>
                <?php
                }
                ?>





            </div>

        </div>
    </section>




    <!-- /.Apartments-area-->

    <!-- ====== Fun Facts Area======= -->
    <div class="fun-fects-area" style="background-image:url(assets/images/count-down-image.png)">
        <div class="container">
            <div class="stat">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h4 class="stat-count highlight" data-form="1" data-to="2500" data-speed="3000">2500</h4>
                        <div class="milestone-details">Site Visitors</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h4 class="stat-count highlight" data-form="1" data-to="3055" data-speed="3000">3055</h4>
                        <div class="milestone-details">Customers</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h4 class="stat-count highlight" data-form="1" data-to="50" data-speed="3000">50</h4>
                        <div class="milestone-details">Apartments/House</div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="milestone-counter">
                        <h3 class="stat-count highlight" data-form="1" data-to="1530" data-speed="3000">1530</h3>
                        <div class="milestone-details">Apartment</div>
                    </div>
                </div> -->
            </div><!-- stat -->
        </div><!-- /.container -->
    </div><!-- /.fun-fects-area -->

    <!-- ====== Gallery Area ====== -->
    <!-- /.gallery-area -->


    <!-- ====== Testimonial Area ====== -->
    <div class="testimonial-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-heading-content">
                        <h2 class="title">Testimonial</h2>
                        <i class="fa fa-quote-right"></i>
                        <h2 class="sub-title">Some Reviews</h2>
                    </div><!-- /.testimonial-heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Sunaina Saini</h3>
                                <h5>Student</h5>
                                <p>We just rented our home to a group of six students who are here for their studies, and each renter has been confirmed by Bigil. We enjoy that now tenants are verified by them and it is no longer our problem.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Ranjan</h3>
                                <h5>Businessman</h5>
                                <p>I rented my property a few days ago through bigilhouse.com, and they presented me with certified renters, so I now know that my home is in good hands. They provide excellent service.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Harika</h3>
                                <h5>Manager</h5>
                                <p>BigilHouse.com provides excellent service, and each and every aspect of the home is transparent. It's as though we're looking at the property from the comfort of our own home.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="client-image">
                                <img src="assets/images/testimonial-image.png" alt="testimonial" />
                            </div><!-- /.client-image -->
                            <div class="client-content">
                                <h3>Raman</h3>
                                <h5>Govt. Emp</h5>
                                <p>I just moved out and was seeking for rental housing. While searching on other platforms, I came across an advertisement for BigilHouse.com on Facebook.They were also in charge of the rent agreement.</p>
                                <div class="star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.star -->
                            </div><!-- /.client-content -->
                        </div><!-- /.item -->
                        <!-- /.item -->
                        <!-- /.item -->
                        <!-- /.item -->
                        <!-- /.item -->
                    </div><!-- /.testimonial-slider -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.testimonial-area -->
    <!-- ====== Call To Action ======= -->
    <div class="call-to-action overlay-bg" style="background-image:url(assets/images/contact-bg-image.png)">
        <div class="container">
            <div class="row tb">
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-left-content">
                        <h3>Do You Want To Rent your House?</h3>
                        <h4>Call Us and List Your Property Here</h4>
                    </div><!-- /.contact-left-content -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6 tb-cell">
                    <div class="contact-right-content">
                        <h4><a href="tel:9668630222">+91-9668630222</a><a href="mailto:bigilhousebbsr@gmail.com"> bigilhousebbsr@gmail.com</a></h4>
                        <a href="contact.php" class="button">Contact us</a>
                    </div><!-- /.contact-right-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.call-to-action -->

    <!-- ====== Contact Area ====== -->
    <div class="contact-area">
        <div class="container-large-device">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading-content-two available">
                            <h2 class="title">We Are Available<br /> For You 24/7</h2>
                            <h5 class="sub-title">Our online support service is always 24 Hours</h5>
                        </div><!-- /.testimonial-heading-content -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-7">
                        <div class="map-left-content">
                            <!-- <iframe width="600" height="350" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC871wKM6aoCLSV_pT3xBVsYzNGXaDh7Pw&amp;q=121King+St,Melbourne+VIC+3000,Australia" allowfullscreen="allowfullscreen"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1870.896051784435!2d85.86803285796944!3d20.30887061206998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBigil%20House%2C%20Plot-1530%2C%20SatyaVihar%2C%20Rasulgarh%2CBhubaneswar!5e0!3m2!1sen!2sin!4v1634554507192!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                        </div><!-- /.mapl-left-content -->
                    </div><!-- /.col-md-7 -->
                    <div class="col-md-5">
                        <div class="map-right-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-address-book"></i>Address</h4>
                                        <p>Bigil House, Plot-1530, SatyaVihar, Rasulgarh,Bhubaneswar</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-envelope"></i>Mail</h4>
                                        <p>bigilhousebbsr@gmail.com</p>
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-phone-square"></i>Call</h4>
                                        <p>+91 9668630222</p>
                                        Office Time- 10am-6pm

                                        Monday-Saturday(Sunday Closed)
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="contact">
                                        <h4><i class="fa fa-user-circle"></i>Social account</h4>
                                        <div class="social-icon">
                                            <a href="https://www.facebook.com/Bigilhouse/"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div><!-- /.Social-icon -->
                                    </div><!-- /.contact -->
                                </div><!-- /.col-md-6 -->
                            </div><!-- /.row -->
                        </div><!-- /.map-right-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
    </div><!-- /.contact-area -->



    <!-- ====== Blog Area ====== -->
    <!-- /.Blog-area-->

    <!-- ====== Footer Area ====== -->
    <?php
    include "inc/footer.php";


    ?>
    <!-- All The JS Files
    ================================================== -->
    <script>
        function getcity(cat_id) {
            $.ajax({
                type: 'POST',
                url: 'get_city.php',
                data: {
                    cat_id: cat_id
                },

                success: function(res) {
                    $('#result_area').html(res);
                },

                error: function(data) {
                    console.log("error");
                    console.log(data);
                }
            });


        }
    </script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> <!-- main-js -->


    <script src="assets1/vendor/aos/aos.js"></script>
    <script src="assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets1/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets1/vendor/php-email-form/validate.js"></script>
    <script src="assets1/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets1/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets1/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
    if (isset($_SESSION['message'])) {
    ?>
        <script>
            // swal("<?= $_SESSION['message']; ?>");
            swal("<?= $_SESSION['message']; ?>");
        </script>
    <?php

        unset($_SESSION['message']);
    }
    ?>

</body>


</html>