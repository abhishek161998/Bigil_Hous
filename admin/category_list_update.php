<?php

include"../database/db_con.php";


$id = $_POST['id'];

$catagory = $_POST['catagory_name'];



$query = "UPDATE `category` SET `catagory_name`='$catagory' WHERE id='$id'";

// $query = "UPDATE `customer_login` SET `name`='$name',`number`='$number',`mail`='$mail',`password`='$password',`msg`='$msg' WHERE id='$id'";





$exe = mysqli_query($conn,$query);

if($exe){
	header('location:category_list.php');

	

}

?>