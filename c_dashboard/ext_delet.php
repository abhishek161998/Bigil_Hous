<?php
include "../database/db_con.php";
$id = $_GET['id'];

$query = "DELETE FROM cust_ext_img WHERE id='$id'";
$ex = mysqli_query($conn, $query);
if ($ex) {
    header("location:customer.php");
} else {
    echo "error";
}
