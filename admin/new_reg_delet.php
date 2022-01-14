
<?php
include"../database/db_con.php";


$id = $_GET['id'];

$query = "DELETE FROM customer WHERE id='$id'";
$ex = mysqli_query($conn,$query);
if($ex){
	header("location:index.php");
}
else{
	echo "error";
}

?>

