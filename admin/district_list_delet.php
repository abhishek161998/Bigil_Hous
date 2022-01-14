<?php

include "../database/db_con.php";


$id = $_GET['id'];

$query = "UPDATE `district` SET `status`= '0' WHERE id='$id'";

$ex = mysqli_query($conn, $query);
if ($ex) {
    $typequery = mysqli_query($conn, "UPDATE `district` SET `status`= '0' WHERE catagory_id='$id'");
    header('Location: district_list.php');
}
?>