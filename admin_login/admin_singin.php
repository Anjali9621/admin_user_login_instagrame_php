<?php

session_start();
error_reporting(0);
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin SingIn !!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .registration_form {
            width: 30%;
            margin: 5rem auto;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 1px 1px 10px black;
        }
    </style>

</head>

<body>

<?php
//If Session status variable is not Null or if user gets registred then print alert function
if($_SESSION['status'] != ""){
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong><?php echo $_SESSION['status'] ?></strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
    unset($_SESSION['status']);
    session_destroy();
}

else{
    echo "";
}

?>



    <!--Registration Page-->
    <div class="registration_form">

        <h1>Admin SingIn</h1>
        <br>
        <hr>

        <form action="admin_data.php" method="post">

                <div class="form-group my-2 shadow">
                    <input type="text" name="Name" placeholder="Enter Your name" class="form-control">
                </div>
                <div class="form-group my-2 shadow">
                    <input type="text" name="Mobile" placeholder="Enter Your Mobile" class="form-control">
                </div>
                <div class="form-group my-2 shadow">
                    <input type="text" name="Email" placeholder="Enter Your Email" class="form-control">
                </div>
               
                <div class="form-group my-2 shadow">
                    <input type="password" name="Password" placeholder="Enter Your Password" class="form-control">
                </div>
                <div class="form-group my-2 shadow">
                    <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                </div>
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>