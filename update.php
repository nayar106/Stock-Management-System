<?php
$status=2;
if(isset($_POST["addbtn"]))
{
$a=$_POST["pid"];
$b=$_POST["pname"];
$c=$_POST["price"];
$d=$_POST["brand"];
$con=mysqli_connect("localhost","root","","product");
if(!$con)
die("server could not connected");
$s="update data set productname='".$b."',productprice='".$c."',productbrand='".$d."' where productid='".$a."'";
$check=mysqli_query($con,$s);
if($check!=0)
$status=1;
else
$status=0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product management</title>
    <link href="stylehome.css" rel="stylesheet" >
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
<div class="insert">
<form action="<?php $_PHP_SELF ?>" method="post">
<table >
<tr><th>Product Id</th><td><input  type="number" min="1000" name="pid" required></td></tr>
<tr><th>Product Name</th><td><input  type="text" name="pname" required></td></tr>
<tr><th>Product Price</th><td><input  type="number" name="price" required></td></tr>
<tr><th>Product Brand</th><td><input  type="text" name="brand" required></td></tr>
<tr><td ><button type="submit" class="btn btn-success" name="addbtn">Update</button></td></tr>
</table>
<div>
<?php
 if($status==1)
 echo "<b style='color:green;font-size:20px;font-family:Cambria Math;display:flex;justify-content:center;'>
 Updated Successfully<b>";
 else if($status==0)
  echo "<b style='color:red;font-size:20px;font-family:Cambria Math;small-caps;display:flex;justify-content:center;'>
  Unable to Update<b>";
?>
</div>
</form>
</div>
</div>
</body>
</html>