

<?php

include_once("config.php");

$id = $_GET['id'];

$update_status = "UPDATE instagram SET Status='Verified' WHERE id='$id'";

if(mysqli_query($conn, $update_status)){
    header("location: admin_welcome.php");
}




?>