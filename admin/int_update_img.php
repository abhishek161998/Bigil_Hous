<?php
include "../database/db_con.php";




$id = $_POST['cid'];

$c_image = $_FILES['int_img']['name'];
// $c_image_temp=$_FILES['int_img']['tmp_name'];


// move_uploaded_file($c_image_temp , "../upload/exterior/.$c_image");
move_uploaded_file($_FILES['int_img']['tmp_name'], '../upload/interior/' . $c_image);

$c_update = "update cust_int_img set  int_img= '$c_image'
     where id='$id'";


$run_update = mysqli_query($conn, $c_update);
if ($run_update) {
    header('Location: aprove_cust.php');
}
