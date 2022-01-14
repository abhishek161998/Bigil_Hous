
<?php
session_start();
include"database/db_con.php";
// echo "Hy";
// die;

$number = $_POST['number'];
$password = $_POST['password'];
$ip= $_SERVER['REMOTE_ADDR'];  
$tm=date("Y-m-d H:i:s");

	$user_data = mysqli_query($conn,"Select * from customer_login  WHERE number = '$number' AND password = '$password'");
	if(mysqli_num_rows($user_data) == 1){
		$user = mysqli_fetch_assoc($user_data);
		$_SESSION['customer'] = $user;
		$_SESSION['message'] = "Login Successfull";
		$online_query = mysqli_query($conn,"INSERT INTO `plus_login`(`userid`, `ip`, `tm`, `status`) VALUES ('".$user['id']."','$ip','$tm','1')");
        header("location:c_dashboard/customer.php"); 
	}else{
		$_SESSION['message'] = " Email/phone number and password not matched";
        header("location:index.php");
	}
?>
