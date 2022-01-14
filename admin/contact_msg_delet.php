
<?php
include"../database/db_con.php";


$id = $_GET['id'];

$query = "DELETE FROM cust_mess WHERE id='$id'";
$ex = mysqli_query($conn,$query);
if($ex){
	header("location:contact_msg.php");
}
else{
	echo "error";
}

?>

