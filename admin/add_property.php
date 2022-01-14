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
	<style>
	.form-group img {
    width: 33%;
}
	</style>
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
								<h5 class="page-title">Add Property</h5>
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







								<form action="insert.php" method="POST" enctype="multipart/form-data">

									<div class="form-group row">
										<label class="col-form-label col-md-2">Name</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Phone Number</label>
										<div class="col-md-10">
											<input type="tell" class="form-control" name="number" placeholder="Enter Your Phone Number" required>
										</div>
									</div>



									<div class="form-group row">
										<label class="col-form-label col-md-2">Email</label>
										<div class="col-md-10">
											<input type="email" class="form-control" name="mail" placeholder="Enter Your Email Id" required>
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
													<option>Choose District</option>
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

</textarea>
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










									<!-- <div class="row">
<label class="col-form-label col-md-2">Type</label>
<div class="col-md-2">

<div class="radio">
<label>



<input type="radio" name="type" value="1bhk"  > 1BHK
</label>
</div>

</div>
<div class="col-md-2">

<div class="radio">
<label>
<input type="radio" name="type" value="2bhk"> 2BHK
</label>
</div>

</div>
<div class="col-md-2">

<div class="radio">
<label>
<input type="radio" name="type"> 3BHK
</label>
</div>

</div>
<div class="col-md-2">

<div class="radio">
<label>
<input type="radio" name="type" value="other"> Other
</label>
</div>

</div>


</div> -->

									<br>

									<div class="form-group row">
										<label class="col-form-label col-md-2">Interior Image</label>
										<div class="col-md-10">
											<input id="file-input" type="file" multiple class="form-control" name="int_img[]">
                                            <div id="preview"></div>
											<span style="color: red;">*image size should be less than 350 kb</span>
											
										</div>
									</div>


									<div class="form-group row">
										<label class="col-form-label col-md-2">Exterior Image</label>
										<div class="col-md-10">
										    
											<input  id="file-input1" class="form-control" name="ext_img[]" multiple type="file">
											 <div id="preview1"></div>
											<span style="color: red;">*image size should be less than 350 kb</span>

										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Availability</label>
										<div class="col-md-10">
											<div class="radio">
												<label>
													<input type="radio" name="avail" value="occupied" required> Occupied
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" name="avail" value="vacant" required> Vacant
												</label>
											</div>

										</div>
									</div>
									<div class="form-group row">
										<label class="col-form-label col-md-2">Price</label>
										<div class="col-md-10">
											<input type="number" class="form-control" name="price" required placeholder="Enter Price">
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
	<script>
function previewImages() {

var preview = document.querySelector('#preview');

if (this.files) {
  [].forEach.call(this.files, readAndPreview);
}

function readAndPreview(file) {

  // Make sure `file.name` matches our extensions criteria
  if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
    return alert(file.name + " is not an image");
  } // else...
  
  var reader = new FileReader();
  
  reader.addEventListener("load", function() {
    var image = new Image();
    image.height = 100;
    image.title  = file.name;
    image.src    = this.result;
    preview.appendChild(image);
  });
  
  reader.readAsDataURL(file);
  
}

}

document.querySelector('#file-input').addEventListener("change", previewImages);

function previewImages1() {

var preview = document.querySelector('#preview1');

if (this.files) {
  [].forEach.call(this.files, readAndPreview);
}

function readAndPreview(file) {

  // Make sure `file.name` matches our extensions criteria
  if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
    return alert(file.name + " is not an image");
  } // else...
  
  var reader = new FileReader();
  
  reader.addEventListener("load", function() {
    var image = new Image();
    image.height = 100;
    image.title  = file.name;
    image.src    = this.result;
    preview.appendChild(image);
  });
  
  reader.readAsDataURL(file);
  
}

}

document.querySelector('#file-input1').addEventListener("change", previewImages1);
</script>
	`
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

</body>


</html>