<?php 
session_start();
include"../database/db_con.php";
$cid = $_SESSION['customer']['id'];
$q=mysqli_query($conn,"update plus_login set status='0' where userid='$cid'");
session_destroy();
header("location:../index.php");
    

    ?>