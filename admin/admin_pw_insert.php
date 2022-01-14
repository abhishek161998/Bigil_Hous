<?php

include "../database/db_con.php";





$name = $_POST['name'];
$phone = $_POST['phone'];


$query = "INSERT INTO `admin_login`( `name`, `password`) VALUES ('$name','$phone')";



$exe = mysqli_query($conn, $query);
if (!$exe) {
    echo "Error in insertion";
} else {
    header("location:admin_login.php");
}
