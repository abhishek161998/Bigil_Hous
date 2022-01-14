<?php
session_start();
include "../database/db_con.php";
extract($_POST);

$cid = $_SESSION['customer']['id'];

$query = "INSERT INTO `customer`(`cust_id`, `state`, `dist`, `city`, `area`, `sub_area`, `address`, `catagory`, `type`, `avail`, `price`) VALUES ('$cid','$state','$dist','$city','$area','$sub_area ','$address','$catagory ','$type','$avail','$price ')";


$result1 = mysqli_query($conn, $query);
$program_id = mysqli_insert_id($conn);


$total_count = count($_FILES['int_img']['name']);
// echo $total_count;
for ($i = 0; $i < $total_count; $i++) {

	$img_name = $_FILES['int_img']['name'][$i];
	$img_size = $_FILES['int_img']['size'][$i];
	$img_type = $_FILES['int_img']['type'][$i];
	$img_file = $_FILES['int_img']['tmp_name'][$i];

	if ($img_type == "image/jpg" || $img_type == "image/jpeg" || $img_type == "image/png" || $img_type == "image/gif") {
		// echo "hi";
		$imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
		$file_name = uniqid() . "." . $imageFileType;
		$path = "../upload/interior/" . $file_name;
		if (move_uploaded_file($img_file, $path)) {

			$insertquery = "INSERT INTO `cust_int_img`( `img_id`,`int_img`) VALUES ('$program_id','$file_name')";
			// echo $insertquery . "<br>";
			// exit;


			$result = mysqli_query($conn, $insertquery);
		}
	}
}
header('Location: customer.php');

$total_count = count($_FILES['ext_img']['name']);
// echo $total_count;
for ($i = 0; $i < $total_count; $i++) {

	$img_name = $_FILES['ext_img']['name'][$i];
	$img_size = $_FILES['ext_img']['size'][$i];
	$img_type = $_FILES['ext_img']['type'][$i];
	$img_file = $_FILES['ext_img']['tmp_name'][$i];

	if ($img_type == "image/jpg" || $img_type == "image/jpeg" || $img_type == "image/png" || $img_type == "image/gif") {
		// echo "hi";
		$imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
		$file_name = uniqid() . "." . $imageFileType;
		$path = "../upload/exterior/" . $file_name;
		if (move_uploaded_file($img_file, $path)) {

			$insertquery = "INSERT INTO `cust_ext_img`( `img_id`,`ext_img`) VALUES ('$program_id','$file_name')";
			echo $insertquery . "<br>";


			$result = mysqli_query($conn, $insertquery);
		}
	}
}
header('Location: customer.php');
