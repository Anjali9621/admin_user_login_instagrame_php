<?php

//Include Database Config file

include("config.php");

if(isset($_POST['submit']))
{
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Password = $_POST['Password'];

    $hash_password = password_hash($Password, PASSWORD_DEFAULT);
    

    //Query to Check whether data already exist or not

    $sql_read = "SELECT * FROM instagram  WHERE Mobile='$Mobile' OR Email='$Email'";
    $read_query = mysqli_query($conn, $sql_read);

    if(mysqli_num_rows($read_query) > 0){
        exit("User Already Exist Try with another mobile or Email");
    }

    //IF user dont exist insert the user data in database

    else{

        $sql_insert = "INSERT INTO instagram (Name, Mobile, Email,  Password) VALUES ('$Name', '$Mobile', '$Email', '$hash_password')";
        $query_insert = mysqli_query($conn, $sql_insert);

        if($query_insert){
            session_start();
            $_SESSION['status'] = "User Registered Successfully";
            header("location: singin.php");
        }
        else{
            exit("Server Issue");
        }

    }
 

}

?>