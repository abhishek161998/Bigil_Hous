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
								<h5 class="page-title">Category List</h5>
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







								<form action="category_list_insert.php" method="POST" enctype="multipart/form-data">

									<div class="form-group row">
										<label class="col-form-label col-md-2">Category</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="catagory_name" placeholder="Category Name">
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