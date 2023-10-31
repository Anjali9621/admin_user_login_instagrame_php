<?php
include("config.php");
session_start();

echo "Welcome ".$_SESSION['Name'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h1 class="h1 text-center">Admin verify to Users</h1>

<table class="table my-4 shadow table-hover table-striped">

<thead>
    <tr>
        <th>Sr.No.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Status</th>
        <th>Action</th>
      
    </tr>
</thead>

<tbody>
    <?php
        $sql_read = "SELECT * FROM  instagram";
        $query_read = mysqli_query($conn, $sql_read);

       if(mysqli_num_rows($query_read) > 0)
       {

            //Fetching Data when data is present

            while($row = mysqli_fetch_array($query_read))
            {
            ?>

            <tr> 
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['Mobile'] ?></td>
                <td><?php echo $row['Password'] ?></td>
                <td><?php echo $row['Status'] ?></td>
                <td><a href="verify_user.php?id=<?php echo $row['id'] ?>"><button class="btn btn-success">Verify</button></a></td>

               

            </tr>

            <?php
            }

       }
       else{
        echo "No  instagram Found!!!";
       }
    ?>
   
</tbody>
</table>

    <br>
  <a href="logout.php" style="color: white; font-size:30px;"><button class="btn btn-success"> Logout</button></a>
</body>
</html>