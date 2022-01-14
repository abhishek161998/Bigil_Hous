<?php
session_start();
include "database/db_con.php";
// print_r($_POST);

// die();
$name = $_POST['name'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$msg = $_POST['msg'];
$select = "SELECT * from customer_login WHERE number='$number'";
$checkphone = mysqli_query($conn, $select);
$password = rand(999999, 100000);


if (mysqli_num_rows($checkphone) == 0) {



	$query = "INSERT INTO `customer_login`(`name`, `number`, `mail` ,`password`, `msg`) VALUES ('$name','$number','$mail','$password','$msg')";



	$exe = mysqli_query($conn, $query);
	if (!$exe) {
		$_SESSION['message'] = " Error in insertion";
		header("location:index.php");
	} else {
		$_SESSION['message'] = "Registration Successful... Please Wait For Confirmation";
		header("location:index.php");
	}
} else {
	$_SESSION['message'] = "Phone Number Already Exist. ";
	header("location:index.php");
}
