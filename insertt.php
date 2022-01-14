<?php
session_start();

include"database/db_con.php";





$name = $_POST['name'];

$email = $_POST['email'];
$mob = $_POST['mob'];
$mess = $_POST['mess'];


$query ="INSERT INTO `cust_mess`(`name`, `email`, `mob`, `mess`) VALUES ('$name','$email','$mob','$mess')";









$exe = mysqli_query($conn,$query);
if(!$exe){
	$_SESSION['message'] = "Your Message Not Submitted";
        header("location:contact.php");
}else{
	$_SESSION['message'] = " Thank You, We Will  Get Back Soon";
        header("location:index.php");
}

?>