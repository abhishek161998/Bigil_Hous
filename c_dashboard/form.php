<?php
session_start();

if (!isset($_SESSION['name'])) {
	header("location:admin_signup.php");
}
include "../database/db_con.php";

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title></title>

	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<link rel="stylesheet" href="assets/css/feather.css">

	<link rel="stylesheet" href="assets/css/style.css">
	<!-- <script type="text/javascript">
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
	</script> -->
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
					<a class="dropdown-item" href=""><i class="feather-power"></i> Logout</a>








				</li>
			</ul>

		</div>


		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>



						<li class="active"> <a href="form.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span>Upload</span></a>
						</li>






					</ul>
				</div>
			</div>
		</div>



		<div class="page-wrapper">
			<div class="content container-fluid">

				<div class="page-header">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="d-flex align-items-center">
								<h5 class="page-title">Add Property</h5>

							</div>
						</div>
					</div>
				</div>





				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<!-- <h5 class="card-title">Basic Inputs</h5> -->
								<p style="color:red;">*All Inputs Are Mandatory</p>

							</div>
							<div class="card-body">


								<form action="insert.php" method="POST" enctype="multipart/form-data">
									<!-- <div class="form-group row">
										<label class="col-form-label col-md-2">Name</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="name" placeholder="Enter Your Name">
										</div>
									</div> -->
									<!-- <div class="form-group row">
										<label class="col-form-label col-md-2">Phone Number</label>
										<div class="col-md-10">
											<input type="number" class="form-control" name="phone" placeholder="Enter Your Phone Number">
										</div>
									</div> -->


									<!-- <div class="form-group row">
										<label class="col-form-label col-md-2">Email</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="email" placeholder="Enter Your Email Id">
										</div>
									</div> -->







									<div class="container">

										<div class="row">
											<label class="col-form-label col-md-2">Choose</label>

											<div class="col-md-2">

												<select name="state" class="form-control" id="categorySelect" onchange="getstate(this.value)" required>
													<option value="" disabled selected>Choose State</option>
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
											<div class="col-md-2">

												<select class="form-control" name="district" id="result_dist" onchange="getdist(this.value)" required>
													<option>Choose Type</option>
												</select>
											</div>
											<div class="col-md-2">
												<select class="form-control" name="city" id="result_city" onchange="getcity(this.value)" required>
													<option>Choose City</option>
												</select>


											</div>

											<div class="col-md-2">

												<select class="form-control" name="area" id="result_area" onchange="getsubarea(this.value)" required>
													<option>Choose Area</option>
												</select>

											</div>
											<div class="col-md-2">

												<select class="form-control" name="subarea" id="result_sub" required>
													<option>Choose Subarea</option>
												</select>


											</div>

										</div>
									</div>
									<br>

									<div class="form-group row">
										<label class="col-form-label col-md-2">Address</label>
										<div class="col-md-10">
											<textarea rows="5" cols="5" class="form-control" name="address" placeholder="Enter Your Address / With Pin-Code"></textarea>
										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-md-2">Category</label>
										<div class="col-md-10">
											<select name="catagory" id="category" onchange="getproduct(this.value)" class="form-control" required>
												<option value="" disabled selected>Choose Category</option>
												<?php
												$query = mysqli_query($conn, "SELECT * from category where status='1' order by id asc");
												while ($res = mysqli_fetch_array($query)) {
												?>
													<option value="<?= $res['id'] ?>"><?= $res['catagory_name'] ?></option>
												<?php
												}

												?>
											</select>


										</div>
									</div>

									<div class="form-group row">
										<label class="col-form-label col-md-2">Type</label>
										<div class="col-md-10">
											<select class="form-control" name="type" id="result_data" required>
												<option>Choose Type</option>
											</select>
										</div>
									</div>

									<br>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Interior Image</label>
										<div class="col-md-10">
											<input class="form-control" name="int_img[]" multiple type="file">
										</div>
									</div>


									<div class="form-group row">
										<label class="col-form-label col-md-2">Exterior Image</label>
										<div class="col-md-10">
											<input class="form-control" name="ext_img[]" multiple type="file">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Availability</label>
										<div class="col-md-10">
											<div class="radio">
												<label>
													<input type="radio" name="avail" value="occupied"> Occupied
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="avail" value="vacant"> Vacant
												</label>
											</div>

										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Price</label>
										<div class="col-md-10">
											<input type="number" class="form-control" name="price" placeholder="Price">
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

	<script type="text/javascript">
		function getproduct(cat_id) {
			$.ajax({
				type: 'POST',
				url: 'get_product.php',
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
				url: 'cdist.php',
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

		function getstate(cat_id) {
			$.ajax({
				type: 'POST',
				url: 'get_data.php',
				data: {
					cat_id: cat_id
				},

				success: function(res) {
					$('#result_dist').html(res);
				},

				error: function(data) {
					console.log("error");
					console.log(data);
				}
			});


		}


		function getcity(cat_id) {
			$.ajax({
				type: 'POST',
				url: 'get_subarea.php',
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

		function getsubarea(cat_id) {
			$.ajax({
				type: 'POST',
				url: 'get_subareas.php',
				data: {
					cat_id: cat_id
				},

				success: function(res) {
					$('#result_sub').html(res);
				},

				error: function(data) {
					console.log("error");
					console.log(data);
				}
			});


		}
	</script>


	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

</html>