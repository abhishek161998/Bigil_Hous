<?php
session_start();

include "../database/db_con.php";

$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$area = $_POST['area'];
$query = "INSERT INTO area(`state_id`, `district_id`, `city_id`,`area`) VALUES('$state','$district','$city','$area')";

// print_r($course1);
// exit();
$exe = mysqli_query($conn, $query);
if ($exe) {
    $_SESSION['message'] = "Successfully Added";
    header('location:area_list.php');
} else {
    $_SESSION['message'] = "Error while adding";
    header('location: area_list.php');
}
