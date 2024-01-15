<?php
error_reporting(0);
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="heavy_tech";
	$con=mysqli_connect($servername,$username,$password,$dbname);


if($_POST['reg'])
{
	$name=$_POST['name'];
	$size=$_POST['size'];
	$phno=$_POST['phno'];
	$adrs=$_POST['adrs'];
	$page=$_POST['page'];
if(empty($name) or empty($phno) ){
echo "<script>alert('Name and Number Cannot be Empty !!');</script>";
}
else
{
	$query="INSERT INTO order_details values('$page','$name','$phno','$size','$adrs')";
	$data=mysqli_query($con,$query);
	echo "<script>alert('We will Reach out to you soon, ThankYou!!');</script>";


}}
?>
