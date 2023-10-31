<?php

//Query to connect database

$conn = mysqli_connect('localhost', 'root', '', 'crud-php');

if($conn){
    echo '<script>console.log("Database Connected")</script>';
}
else{
    echo '<script>console.log("Database Not Connected")</script>';
}

?>