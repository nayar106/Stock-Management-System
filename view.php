<?php
$con=mysqli_connect("localhost","root","","product");
if(isset($_POST["viewbtn"]))
{
$n=$_POST["pid"];
if(!$con)
die("server could not connected");
$s="select * from data where productid='".$n."'";
$rs=mysqli_query($con,$s);
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
<table>
<tr><th>Product Id</th><td><input  type="number" min="1000" name="pid" required></td></tr>
<tr><td ><button type="submit" class="btn btn-success" name="viewbtn">View product</button></td></tr>
</table>
<div class="view">
<?php
if(isset($rs))
{
echo "<table >";
echo "<tr><th>Product Id</th><th>Product Name</th><th>Product Price</th><th>Product Brand</th></tr>";
while($row=mysqli_fetch_assoc($rs))
{
 echo "<tr><td>".$row["productid"]."</td><td>".$row["productname"]."</td><td>".$row["productprice"]."</td><td>".$row["productbrand"]."</td></tr>";
}
echo "</table>";
}
?>
</div>
</div>
</body>
</html>