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
	<!-- CSS only -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
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

		<?php
		include "../database/db_con.php";
		$query = "SELECT COUNT(*) FROM   customer ";

		$exe = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($exe);

		$total = $row[0];

		$query = "SELECT COUNT(*) FROM   plus_login where status='1'  ";

		$exe = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($exe);

		$totalcus = $row[0];


		$query = "SELECT COUNT(*) FROM admin_login ";

		$exe = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($exe);

		$totaladmin = $row[0];

		$query = "SELECT COUNT(*) FROM customer";

		$exe = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($exe);

		$totalcust = $row[0];


		?>
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
						<div class="card detail-box1 details-box">
							<a href="aprove_cust.php">
								<div class="card-body">
									<div class="dash-contetnt">
										<div class="mb-3">
											<img src="assets/img/icons/accident.svg" alt="" width="26">
										</div>
										<h4 class="text-white">Total Customers</h4>
										<h2 class="text-white"><?php echo $total; ?></h2>
										<div class="growth-indicator">
											<!-- <span class="text-white"><i class="fas fa-angle-double-up mr-1"></i> (14.25%)</span> -->
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
						<div class="card detail-box2 details-box">
							<a href="active-customer.php">
								<div class="card-body">
									<div class="dash-contetnt">
										<div class="mb-3">
											<img src="assets/img/icons/visits.svg" alt="" width="26">
										</div>
										<h4 class="text-white">Customer Visits</h4>
										<h2 class="text-white"><?php echo $totalcus; ?></h2>
										<div class="growth-indicator">
											<!-- <span class="text-white"><i class="fas fa-angle-double-down mr-1"></i> (4.78%)</span> -->
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
						<div class="card detail-box3 details-box">
							<a href="aprove_cust.php">
								<div class="card-body">
									<div class="dash-contetnt">
										<div class="mb-3">
											<img src="assets/img/icons/hospital-bed.svg" alt="" width="26">
										</div>
										<h4 class="text-white">Approved Customers</h4>
										<h2 class="text-white"><?php echo $totalcust; ?></h2>
										<div class="growth-indicator">
											<!-- <span class="text-white"><i class="fas fa-angle-double-up mr-1"></i> (18.32%)</span> -->
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 d-flex flex-wrap">
						<div class="card detail-box4 details-box">
							<a href="admin_login.php">
								<div class="card-body">
									<div class="dash-contetnt">
										<div class="mb-3">
											<img src="assets/img/icons/operating.svg" alt="" width="26">
										</div>
										<h4 class="text-white">Admin</h4>
										<h2 class="text-white"><?php echo $totaladmin; ?></h2>
										<div class="growth-indicator">
											<!-- <span class="text-white"><i class="fas fa-angle-double-down mr-1"></i> (25.14%)</span> -->
										</div>
									</div>
								</div>
							</a>
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