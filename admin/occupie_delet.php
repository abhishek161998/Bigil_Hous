
<?php
include "../database/db_con.php";


$id = $_GET['id'];

$query = "DELETE FROM admin WHERE id='$id'";
$ex = mysqli_query($conn, $query);
if ($ex) {
    header("location:occupied.php");
} else {
    echo "error";
}

?>

