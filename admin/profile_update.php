<?php

include"../database/db_con.php";



$id = $_POST['id'];

$name = $_POST['name'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$password = $_POST['password'];
$msg = $_POST['msg'];



$query = "UPDATE `customer_login` SET `name`='$name',`number`='$number',`mail`='$mail',`password`='$password',`msg`='$msg' WHERE id='$id'";





$exe = mysqli_query($conn,$query);

if($exe){
	header('location:customer_login_details.php');

	

}else{
	echo "Error in insertion";
}

?>