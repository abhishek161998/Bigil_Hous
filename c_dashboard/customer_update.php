<?php

include"../database/db_con.php";



$id = $_POST['id'];

// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
$state = $_POST['state'];
$dist = $_POST['dist'];
$city = $_POST['city'];
$area = $_POST['area'];
$sub_area = $_POST['sub_area'];
$address= $_POST['address'];
$catagory = $_POST['catagory'];
$type = $_POST['type'];
$avail = $_POST['avail'];
$price = $_POST['price'];

$photo1 = $_FILES['int_img']['name'];

move_uploaded_file($_FILES['int_img']['tmp_name'],'../upload/interior/'.$photo1);

$photo2 = $_FILES['ext_img']['name'];

move_uploaded_file($_FILES['ext_img']['tmp_name'],'../upload/exterior/'.$photo2);



// $query ="UPDATE `customer` SET name='$name',phone='$phone',email='$email',state='$state',dist='$dist',city='$city',area='$area', sub_area='$sub_area',address='$address',catagory='$catagory',type='$type',int_img='$photo1',ext_img='photo2',avail='$avail',price='$price', WHERE id='$id'";


$query = "UPDATE `customer` SET `state`='$state',`dist`='$dist',`city`='$city',`area`='$area',`sub_area`='$sub_area',`address`='$address',`catagory`='$catagory',`type`='$type',`int_img`='$photo1',`ext_img`='photo2',`avail`='$avail',`price`='$price'  WHERE id='$id'";


$exe = mysqli_query($conn,$query);

if($exe){
	header('location:customer.php');

	

}else{
	echo "Error in insertion";
}

?>