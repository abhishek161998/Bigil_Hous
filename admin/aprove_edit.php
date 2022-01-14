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
		// var cateByType = {
		// 	Apartment: ["1BHK", "2BHK", "3BHK"],
		// 	FamilyHouse: ["1BHK", "2BHK", "3BHK", "Single Room", "Duplex", "Simplex"],
		// 	BachelorHouse: ["1BHK", "2BHK", "3BHK", "Single Room", "Duplex", "Simplex"],
		// 	BoysPg: ["Sharing", "Single", "Fooding", "Non Fooding"],
		// 	GirlsPg: ["Sharing", "Single", "Fooding", "Non Fooding"],
		// 	Hostel: ["Sharing", "Single", "Fooding", "Non Fooding"],
		// 	Office: ["Sqft", "1BHK", "2BHK", "3BHK", "Flooring"],
		// 	Godown: ["Open Space", "Sqft", "1BHK", "2BHK", "3BHK", "Flooring"],
		// 	Commercials: ["Open Space", "Sqft", "1BHK", "2BHK", "3BHK", "Flooring"]
		// }

		// function makeSubmenu(value) {
		// 	if (value.length == 0) document.getElementById("typeSelect").innerHTML = "<option></option>";
		// 	else {
		// 		var citiesOptions = "";
		// 		for (cityId in cateByType[value]) {
		// 			citiesOptions += "<option>" + cateByType[value][cityId] + "</option>";
		// 		}
		// 		document.getElementById("typeSelect").innerHTML = citiesOptions;
		// 	}
		// }

		// function displaySelected() {
		// 	var country = document.getElementById("categorySelect").value;
		// 	var city = document.getElementById("typeSelect").value;
		// 	alert(country + "\n" + city);
		// }

		// function resetSelection() {
		// 	document.getElementById("categorySelect").selectedIndex = 0;
		// 	document.getElementById("typeSelect").selectedIndex = 0;
		// }
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

								$query = "SELECT * FROM customer WHERE id='$id' ";
								$ex = mysqli_query($conn, $query);
								$data = mysqli_fetch_array($ex);
								$res = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM customer_login WHERE id = '" . $data['cust_id'] . "'"));


								?>



								<?php $options = $data['catagory']; ?>


								<form action="aprove_update.php" method="POST" enctype="multipart/form-data">
									<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
									<div class="form-group row">
										<label class="col-form-label col-md-2">Name</label>
										<div class="col-md-10">
											<input type="text" readonly class="form-control" name="name" value="<?php echo $res['name'] ?>" placeholder="Enter Your Name">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Phone Number</label>
										<div class="col-md-10">
											<input type="text" readonly class="form-control" name="number" value="<?php echo $res['number'] ?>" placeholder="Enter Your Phone Number">
										</div>
									</div>


									<div class="form-group row">
										<label class="col-form-label col-md-2">Email</label>
										<div class="col-md-10">
											<input type="email" readonly class="form-control" value="<?php echo $res['mail'] ?>" name="mail" placeholder="Enter Your Email Id">
										</div>
									</div>





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

												<select class="form-control" name="dist" id="result_dist" onchange="getdist(this.value)" required>
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

												<select class="form-control" name="sub_area" id="result_sub" required>
													<option>Choose Subarea</option>
												</select>


											</div>

										</div>
									</div>
									<br>

									<div class="form-group row">
										<label class="col-form-label col-md-2">Address</label>
										<div class="col-md-10">
											<textarea rows="5" cols="5" class="form-control" name="address" placeholder="Enter Your Address / With Pin-Code" required>
	<?php echo $data['address'] ?>
</textarea>
										</div>
									</div>


									<div class="form-group row">
										<label class="col-form-label col-md-2">Category</label>
										<div class="col-md-10">
											<select name="catagory" id="category" onchange="getproduct(this.value)" required class="form-control">
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




									<?php
									// $id = $_GET['id'];

									// $query = "SELECT * FROM int_img WHERE img_id='$id'";
									// $exe = mysqli_query($conn, $query);
									// $row = mysqli_fetch_array($exe);
									?>

									<!-- 
									<div class="form-group row">
										<label class="col-form-label col-md-2">Interior Image</label>
										<div class="col-md-10">
											<a href="photoedit.php?id=<?php echo $row['img_id']   ?>" class="btn btn-success">View Interior Img </a>
										</div>
									</div> -->
									<?php
									$id = $_GET['id'];
									// echo"$id";
									// die;                            select * from
									$query = "SELECT * FROM ext_img WHERE img_id='$id'";
									$exe = mysqli_query($conn, $query);
									$row = mysqli_fetch_array($exe);

									?>

									<!-- <div class="form-group row">
										<label class="col-form-label col-md-2">Images</label>
										<div class="col-md-10">
											<a href="photoedit.php?id=<?php echo $row['img_id'] ?>" class="btn btn-success">View Images </a>
										</div>
									</div> -->
									<div class="form-group row">
										<label class="col-form-label col-md-2">Availability</label>
										<div class="col-md-10">
											<div class="radio">
												<label>
													<input type="radio" name="avail" value="occupied" <?php if ($data['avail'] == 'occupied') {
																											echo "checked";
																										} ?>><span>Occupied</span>
												</label>
											</div>
											<br>
											<div class="radio">
												<label>
													<input type="radio" name="avail" value="vacant" <?php if ($data['avail'] == 'vacant') {
																										echo "checked";
																									} ?>><span>Vacant</span>
												</label>
											</div>

										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Price</label>
										<div class="col-md-10">
											<input type="text" required class="form-control" value="<?php echo $data['price'] ?>" name="price" placeholder="Price">
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

		function getdist(cat_id) {
			$.ajax({
				type: 'POST',
				url: 'get_dist4.php',
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