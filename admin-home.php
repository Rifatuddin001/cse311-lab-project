<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin Login  </title>
    <link rel = "stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: white;"> Blood Bank Management System</a></h2></div>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
            <h1>Welcome Admin</h1><br><br><br>
            <ul>
                <li><a href="donor-red.php">Donor Registration</a></li>
                <li><a href="donor-list.php">Donor List</a></li>
                <li><a href="stock-blood.php">Stock Blood</a></li>
        </ul><br><br><br><br><br>
        <ul>
                <li><a href="out-stock-blood.php">Out Stock Blood</a></li>
                <li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
                <li><a href="exchange-blood-list1.php">Exchange Blood List</a></li>
        </ul>



         </div>
        <div id="footer"><h4 align = "center">Copyright@(Rifat,Tonoy,Tosher)</h4></div>
            <p align= "center"><a href="logout.php"><font color="black">Logout</font></a></p>
    </div>
 </div>
</body>
</html>