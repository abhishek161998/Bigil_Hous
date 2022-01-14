<?php
session_start();

include "../database/db_con.php";

$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$area = $_POST['area'];
$sub_area = $_POST['sub_area'];
$query = "INSERT INTO sub_area(`state_id`, `district_id`, `city_id`,`area_id`,`sub_area`) VALUES('$state','$district','$city','$area','$sub_area')";

// print_r($course1);
// exit();
$exe = mysqli_query($conn, $query);
if ($exe) {
    $_SESSION['message'] = "Successfully Added";
    header('location:subarea_list.php');
} else {
    $_SESSION['message'] = "Error while adding";
    header('location: subarea_list.php');
}
