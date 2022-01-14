
<?php
include "../database/db_con.php";


$id = $_GET['id'];

$query = "DELETE FROM customer WHERE id='$id'";
$ex = mysqli_query($conn, $query);
if ($ex) {
	header("location:aprove_cust.php");
} else {
	echo "error";
}


$query = "DELETE FROM cust_int_img WHERE img_id='$id'";
$ex = mysqli_query($conn, $query);
if ($ex) {
	header("location:aprove_cust.php");
} else {
	echo "error";
}

$query = "DELETE FROM cust_ext_img WHERE img_id='$id'";
$ex = mysqli_query($conn, $query);
if ($ex) {
	header("location:aprove_cust.php");
} else {
	echo "error";
}
?>

