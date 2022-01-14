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
<style>
	#myInput {
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


		<!-- <div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>

					</li>
						<li class="active"> <a href="dashboard.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span> Dashboard</span></a>
						</li>

						<li class="active"> <a href="index.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
									99+
									<span class="visually-hidden">unread messages</span>
								</span> <span>Property Details </span></a>
						

						<li class="active"> <a href="aprove_cust.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span> Approved Properties </span></a>
						</li>


						<li class="active"> <a href="customer_login_details.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span> Customer Details</span></a>
						</li>

						<li class="active"> <a href="admin_login.php"><i class="feather-list"></i><span class="shape1"></span><span class="shape2"></span> <span> Admin Login</span></a>
						</li>


					</ul>
				</div>
			</div>
		</div> -->

		<?php
		include "incl/sidebar.php";

		?>
		<div class="page-wrapper">
			<div class="content container-fluid table-responsive">

				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="d-flex align-items-center">
								<h5 class="page-title">Property Details </h5>
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

				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

				<table id="myTable">
					<tr>

						<th style="width:10%;">Name</th>
						<th style="width:10%;">Phone-Num</th>
						<th style="width:10%;">Email</th>
						<th style="width:10%;">Area</th>
						<th style="width:10%;">Category</th>
						<th style="width:10%;">Availability</th>
						<!-- <th style="width:10%;">Availability</th> -->
						<!-- <th style="width:10%;">Price</th> -->
						<th style="width:10%;">Action</th>
					</tr>
					<?php
					include "../database/db_con.php";
					$query = "SELECT * FROM   customer where is_approved='0' order by id desc";

					$exe = mysqli_query($conn, $query);
					$counter = 0;
					while ($row = mysqli_fetch_array($exe)) {
						$counter = $counter + 1;
			$user = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM customer_login where id = '".$row['cust_id']."' "));
			$result = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM category WHERE id = '".$row['catagory']."'"));
			$res1 = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM area WHERE id = '".$row['area']."'"));

?>
						<tr>

							<td><?php echo $user['name'] ?></td>

							<td><?php echo $user['number'] ?></td>


							<td><?php echo $user['mail'] ?></td>

							<td><?php echo $res1['area'] ?></td>


							<td><?php echo $result['catagory_name'] ?></td>


							<td><?php echo $row['avail'] ?></td>


							<!-- <td><?php echo $row['price'] ?></td> -->
							<td class="text-right d-flex">

							<a href="form.php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-success mr-2 d-flex"><i class="far fa-edit mr-1"></i> Edit</a>

								<a href="new_reg_delet.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-white text-danger mr-2 d-flex"><i class="far fa-trash-alt mr-1"></i>Delete</a>

								<a href="approve.php?id=<?php echo $row['id']   ?>" class="btn btn-sm btn-white text-success mr-2 d-flex"><i class="far fa-edit mr-1"></i> Approve</a>
							</td>

						</tr>
					<?php

					}
					?>

				</table>








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
	</script>

	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="assets/js/script.js"></script>
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

<!-- Mirrored from emr.dreamguystech.com/appointments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jul 2021 09:34:02 GMT -->

</html>