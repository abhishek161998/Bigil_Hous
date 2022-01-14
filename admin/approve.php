<?php
session_start();
    include "../database/db_con.php";

    $id = $_GET['id'];

    $query = mysqli_query($conn,"UPDATE `customer` set is_approved=1 where id='$id'");
    if($query) {
        $_SESSION['message'] = "Approved";
        header("location:aprove_cust.php");
    } else {
        $_SESSION['message'] = "Error";
        header("location:index.php");
    }
    

    ?>