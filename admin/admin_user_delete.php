
<?php
include"../database/db_con.php";


$id = $_GET['id'];

$query = "DELETE FROM admin_login WHERE id='$id'";
$ex = mysqli_query($conn,$query);
if($ex){
	header("location:admin_login.php");
}
else{
	echo "error";
}

?>

