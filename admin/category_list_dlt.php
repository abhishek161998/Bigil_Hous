<?php

include "../database/db_con.php";


$id= $_GET['id'];

$query = "UPDATE `category` SET `status`= '0' WHERE id='$id'";

$ex = mysqli_query($conn,$query);
if($ex)
{
	$typequery = mysqli_query($conn,"UPDATE `type` SET `status`= '0' WHERE catagory_id='$id'");
	header('Location: category_list.php');

}


?>