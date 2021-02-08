<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product management</title>
    <link href="stylehome.css" rel="stylesheet" >
    <link href="responsive.css" rel="stylesheet" >
    <link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="resp.js"></script>
</head>
<body >
    
    <div class="background">   
   <div class="navbar">
       
       <ul class="navlist ">
   <li><a href="index.php">Home</a></li>
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
<div class="login">
<form action="login.php" method="post">
        <p >Merchant login</p>
    <div >&nbsp&nbsp<button type="button" class="btn" disabled id="btn" ><span class="glyphicon glyphicon-envelope"></span></button>&nbsp<input type="email" name="email" placeholder="Enter email" required ></div>
 <div >&nbsp&nbsp<button type="button" class="btn" disabled id="btn"><span class="glyphicon glyphicon-lock"></span></button>&nbsp<input type="password" name="password" placeholder="Enter password" required></div>
   <div class="show"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"  name="submit" class="btn btn-success " id="loginbtn">Sign in</button></span>
   </div>
    </form>
    </div>
    <div class="response">
    <?php
if(isset($_GET["err"]))
 echo $_GET["err"];
?>
    </div>
</div>
</div>

</body>
</html>