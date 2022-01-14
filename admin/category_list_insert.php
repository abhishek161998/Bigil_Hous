<?php

include "../database/db_con.php";


$category = $_POST['catagory_name'];

// INSERT INTO `category`(`id`, `catagory_name`, `status`) VALUES ('[value-1]','[value-2]','[value-3]')
$query = "INSERT INTO category( `catagory_name`) VALUES('$category')";
// print_r($course1);
// exit();
$exe = mysqli_query($conn,$query);
if($exe){
    $_SESSION['message'] = "Successfully Added";
    header('location: category_list.php');
}else{
    $_SESSION['message'] = "Error while adding";
    header('location: category_list_insert.php');
}




?>