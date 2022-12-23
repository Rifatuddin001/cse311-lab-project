<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title> Blood Bank Management System  </title>
    <link rel = "stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
        td{
            width: 200px;
            height: 20px;
        }
        </style>
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
            <h1>Exchange Blood List</h1>
            <center><div id="form">
                <table>
                    <tr>
                        <td><center><b><font color="black">Name</font></b></center></td>
                        <td><center><b><font color="black">Father's Name</font></b></center></td>
                        <td><center><b><font color="black">Address</font></b></center></td>
                        <td><center><b><font color="black">City</font></b></center></td>
                        <td><center><b><font color="black">Age</font></b></center></td>
                        <td><center><b><font color="black">Blood Group</font></b></center></td>
                        <td><center><b><font color="black">Exchange Blood Group</font></b></center></td>
                        <td><center><b><font color="black">Mobile Number</font></b></center></td>
                        <td><center><b><font color="black">E-Mail</font></b></center></td>
                     </tr>
                     <?php
                     $q=$db->query("SELECT*FROM exchange_b");
                     while($r1=$q->fetch(PDO::FETCH_OBJ))
                     {
                        ?>
                        <tr>
                        <td><center><?= $r1->name; ?></center></td>
                        <td><center><?= $r1->fname; ?></center></td>
                        <td><center><?= $r1->address; ?></center></td>
                        <td><center><?= $r1->city; ?></center></td>
                        <td><center><?= $r1->age; ?></center></td>
                        <td><center><?= $r1->bgroup; ?></center></td>
                        <td><center><?= $r1->ebgroup; ?></center></td>
                        <td><center><?= $r1->mno; ?></center></td>
                        <td><center><?= $r1->email; ?></center></td>
                     </tr>
                     <?php
                     }
                     ?>
                     
                </table>
            </div></center>
            



         </div>
        <div id="footer"><h4 align = "center">Copyright@(Rifat,Tonoy,Tosher)</h4></div>
            <p align= "center"><a href="logout.php"><font color="black">Logout</font></a></p>
    </div>
 </div>
</body>
</html>