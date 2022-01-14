<?php
session_start();

include "../database/db_con.php";


$category = $_POST['catagory'];
$type = $_POST['type'];

$query = "INSERT INTO type( `catagory_id`, `type`) VALUES('$category','$type')";

// print_r($course1);
// exit();
$exe = mysqli_query($conn,$query);
if($exe){
    $_SESSION['message'] = "Successfully Added";
    header('location: type_list.php');
}else{
    $_SESSION['message'] = "Error while adding";
    header('location: type_list.php');
}
