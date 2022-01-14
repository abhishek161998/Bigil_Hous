
<?php
session_start();
include"database/db_con.php";
// echo "Hy";
// die;

$number = $_POST['number'];
$password = $_POST['password'];


	$user_data = mysqli_query($conn,"Select * from customer_login  WHERE number = '$number' AND password = '$password'");
	if(mysqli_num_rows($user_data) == 1){
		$user = mysqli_fetch_assoc($user_data);
		$_SESSION['customer'] = $user;
		$_SESSION['message'] = "Login Successfull";
        header("location:c_dashboard/customer.php"); 
	}else{
		$_SESSION['message'] = " Email/phone number and password not matched";
        header("location:c_dashboard/customer.php");
	}
?>
