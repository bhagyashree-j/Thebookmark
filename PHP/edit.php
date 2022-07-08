<?php
$con = mysqli_connect("localhost","root","","bookmark") or die(mysqli_error($con));
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>
<header class="header">
        <div class="header-1">
        <a href="../PHP/home.php" class="logo"><i class="fa-solid fa-book"></i>The BookMark</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Search here" id="search-box">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fa-solid fa-magnifying-glass"></div>
                <a href="#" class="fa-solid fa-cart-shopping"></a>
                <a href="../PHP/profile.php" class="fa-solid fa-user"></a>
                <a href="../PHP/logout.php" class="fa-solid fa-sign-out"></a>
            </div>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="../PHP/home.php">home</a>
                <a href="#featured">featured</a>
                <a href="#deal">Deals</a>
                <a href="../PHP/aboutus.php">About us</a>
                <a href="../PHP/contactus.php">Contact us</a>
                <a href="../PHP/change_password.php">Change Password</a>
            </nav>
        </div>

    </header>
    <center>
<form action="edit.php" method="post">
   Name: <input type="text" name="name1"><br>
 
   Email: <input type="email" name="email1"><br>
 
   Phone: <input type="number" name="phone1"><br>
   
   <input type="submit" name="edit">
   
</form>

</center>

<?php

if(isset($_POST['edit']))
 {
    $id=$_SESSION['email'];
    $name=$_POST['name1'];
    $phone=$_POST['phone1'];
    $email=$_POST['email1'];
    $select= "select * from user where email='$id'";
    $sql = mysqli_query($con,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['email'];
    if($res === $id)
    {
   
       $update = "update user set name='$name',phone='$phone',email='$email' where email='$id'";
       $sql2=mysqli_query($con,$update);
        if($sql2)
        { 
           /*Successful*/
           header('location:profile.php');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:edit.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:edit.php');
    }
 }
?>
</body>