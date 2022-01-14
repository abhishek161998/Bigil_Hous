<?php

include "../database/db_con.php";


$state = $_POST['state_name'];

// INSERT INTO `category`(`id`, `catagory_name`, `status`) VALUES ('[value-1]','[value-2]','[value-3]')
$query = "INSERT INTO state( `state_name`) VALUES('$state')";
// print_r($course1);
// exit();
$exe = mysqli_query($conn, $query);
if ($exe) {
    $_SESSION['message'] = "Successfully Added";
    header('location: state_list.php');
} else {
    $_SESSION['message'] = "Error while adding";
    header('location: state_list_insert.php');
}
