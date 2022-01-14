<?php
session_start();

include "../database/db_con.php";
// $id=$_POST['id'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];

$query = "INSERT INTO city(`state_id`, `district_id`, `city`) VALUES('$state','$district','$city')";

// print_r($course1);
// exit();
$exe = mysqli_query($conn, $query);
if ($exe) {
    $_SESSION['message'] = "Successfully Added";
    header('location:city_list.php');
} else {
    $_SESSION['message'] = "Error while adding";
    header('location: city_list.php');
}
