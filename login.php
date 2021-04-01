<?php
session_start();
$con=mysqli_connect("localhost","root","","product");
if(!$con)
die("Server could not connected");
$a=$_POST["email"];
$b=$_POST["password"];
$s="select * from merchant where email='".$a."'";
$rs=mysqli_query($con,$s);
$rows=mysqli_fetch_assoc($rs);
if($b==$rows["password"])
{
$_SESSION["UserName"]=$rows["name"];
header("location:home.php");
}
else
{
$error="<b style='color:red;font-size:16px;font-family:Javanese Text;margin-left:42%'>Email or password is incorrect<b>";
header("location:index.php?err=$error");
}
?>
