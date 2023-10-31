<?php

session_start();

echo "<h1>Welcome To Our Wesite </h1> ".$_SESSION['Name'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome Wesbite !!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <button class="btn btn-light"><a href="logout.php">logout</a></button>
    <!-- <button type="button" class="btn btn-primary"><a href="logout.php">Click here to Logout</a></button> -->
</body>
</html>