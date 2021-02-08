<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product management</title>
    <link href="stylehome.css" rel="stylesheet" >
    <link href="responsive.css" rel="stylesheet">
    <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="resp.js"></script>
</head>
<body >
    
    <div class="background">   
   <div class="navbar">
       
   <ul class="navlist ">
   <li><a href="home.php">Home</a></li>
   <li><a href="#about">About us</a></li>
   <li><a href="#contact">Contact Us</a></li>
   <li><a href="#service">Services</a></li>
   <li><input type="text"><button><span class="glyphicon glyphicon-search"></span><button></li>
   </ul>
   </div>
   <div class="burger">
   <div class="line"></div>
   <div class="line"></div>
   <div class="line"></div>
   </div>
<marquee class="welcome" behavior="alternate" >Welcome
<?php
session_start();
if(isset($_SESSION["UserName"]))
echo $_SESSION["UserName"];
else
header("location:index.php");
?>
</marquee>

<div class="home">
    <p>PRODUCT MANAGEMENT</p>
    <div><a href="insert.php">ADD PRODUCT</a></div>
    <div><a href="view.php">VIEW PRODUCT</a></div>
    <div><a href="update.php">UPDATE PRODUCT</a></div>
    <div><a href="delete.php">REMOVE PRODUCT</a></div>
    </div><br>
    <a href="logout.php" style="text-decoration: none;color:white;margin-left:48%;
    background-color:black;padding:10px 15px;border-radius:3px;font-weight:bold">Logout</a>
</div>

</body>
</html>