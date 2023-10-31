<?php

//Including Database File

include("config.php");

if(isset($_POST['submit'])){
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    //Query to Check user existence

    $sql_read = "SELECT * FROM admin_login WHERE Email='$Email'";
    $read_query = mysqli_query($conn, $sql_read);

    if(mysqli_num_rows($read_query) > 0){

        //Fetching User Data

        $row = mysqli_fetch_assoc($read_query);
        $hash_password = $row['Password'];

        

        //Verifying User password with hashed password

        if(password_verify($Password, $hash_password)){
            session_start();
            $_SESSION['Name'] = $row['Name'];
            header("location: admin_welcome.php");
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




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <style>
        .login_form {
            width: 30%;
            margin: 5rem auto;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 10px black;
        }
    </style>
  <body>


<div class="login_form style="width: 40%; margin: 5rem auto">

<h3>Admin Login</h3>
<hr>


<form action="" method="POST">

<div class="form-group">
    <label for="">Your Username or Email iD</label>
    <input type="Email" name="Email" class="form-control" required>
</div>

<div class="form-group">
    <label for="">Your Password</label>
    <input type="password" name="Password" class="form-control" required>
</div>

<br>

<button class="btn btn-danger" type="submit" name="submit">Submit</button>

</form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>