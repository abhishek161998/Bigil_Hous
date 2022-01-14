<?php
include "../database/db_con.php";
extract($_POST);
$default = mysqli_query($conn, "select * from sub_area where area_id='$cat_id' and status='1' ");
$option = "<option value='' disabled selected>Choose Type</option>";
while ($result = mysqli_fetch_array($default)) {
    $option .= "<option value='" . $result['id'] . "'>" . $result['sub_area'] . "</option>";
}

echo $option;
