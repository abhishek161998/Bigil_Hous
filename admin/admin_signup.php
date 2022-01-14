 

 <?php
 session_start();
 include"../database/db_con.php";

	$name = $_POST['name'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin_login WHERE name = '$name' AND password = '$password'";
	$get_query = mysqli_query($conn, $query);
	$rows = mysqli_num_rows($get_query);
	if ($rows==1) {
		$_SESSION['name'] = $name;
		header("location:dashboard.php");
	}
	else{
		header("Location:admin_sign.php");
	}


?>