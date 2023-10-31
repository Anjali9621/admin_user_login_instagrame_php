<?php

//Including Database File

include("config.php");

if(isset($_POST['submit'])){
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    //Query to Check user existence

    $sql_read = "SELECT * FROM instagram  WHERE Email='$Email'";
    $read_query = mysqli_query($conn, $sql_read);

    if(mysqli_num_rows($read_query) > 0){

        //Fetching User Data

        $row = mysqli_fetch_assoc($read_query);
        $hash_password = $row['Password'];

        

        //Verifying User password with hashed password

        if(password_verify($Password, $hash_password)){
            session_start();
            $_SESSION['Name'] = $row['Name'];
            header("location: welcome.php");
        }
        else{
            echo "<script>alert('Password Do not Match')</script>";
        }

    }
    else{
        echo "<script>alert('User not Exist or Incorrect Data')</script>";
    }

}


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LoginIN !!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <div class="image__login">
        <img src="img/instagramimg.png" alt="">
    </div>

    <div class="insta__form">

        <div class="login__form">
            <img src="img/instalogo.png">

            <form class="form" action="" method="POST">
                <input type="email" name="Email" placeholder="Phone number, username, or email" required>
                <input type="password" name="Password" placeholder="Password" required>

                <button class="btn btn-primary" type="submit" name="submit">logIn</button>


                <span class="or">OR</span>

            </form>


            <span class="forget">
                Forget Password ?
            </span>
        </div>
        <div class="signup">
            <p>Don't have an account? <strong><a href="singin.php">Sign up</a></strong></p>
        </div>
        <!-- <div class="getapp">
            <p>Get the app.</p>
        </div> -->
    </div>

</body>

</html>