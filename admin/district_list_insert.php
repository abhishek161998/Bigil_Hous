<?php
session_start();

include "../database/db_con.php";


$state = $_POST['state'];
$district = $_POST['district'];

$query = "INSERT INTO district( `state_id`, `district`) VALUES('$state','$district')";

// print_r($course1);
// exit();
$exe = mysqli_query($conn, $query);
if ($exe) {
    $_SESSION['message'] = "Successfully Added";
    header('location:district_list.php');
} else {
    $_SESSION['message'] = "Error while adding";
    header('location: district_list.php');
}
