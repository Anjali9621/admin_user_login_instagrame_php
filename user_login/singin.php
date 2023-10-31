
<?php

session_start();
error_reporting(0)

?>

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

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>singIn !!</title>
</head>


<body>




<div class="image__login">
        <img src="img/instagramimg.png" alt="">
    </div>

    <div class="insta__form">

        <div class="login__form">
            <img src="img/instalogo.png">

            <form action="adddata.php" method="post" class="form">
                <input type="text" name="Name" placeholder="Enter Your Name">
                <input type="email" name="Email" placeholder="Enter Your Email" autocomplete="off" required>
                <input type="text" name="Mobile" id="Mobile" placeholder="Enter Your Mobile" autocomplete="off">
                <input type="password" name="Password" placeholder="Password" autocomplete="off" required>

                <button type="submit" class="btn btn-primary" name="submit">SingIn</button>
                
                <span class="or">OR</span>
            </form>

            <span class="forget">
                Forget Password ?
            </span>
        </div>
        <div class="signup">
            <p>Already registered ? <strong><a href="login.php">LogIn up</a></strong></p>
        </div>
        <!-- <div class="getapp">
            <p>Get the app.</p>
        </div> -->
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>