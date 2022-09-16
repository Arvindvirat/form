<?php
$servername="localhost";
$username="root";
$password="";
$databace_name="form";

$conn=mysqli_connect($servername,$username,$password,$databace_name);

if(!$conn)
{
	die("connectoin failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['Mobile'];

	$sql_query = "INSERT INTO details(name,email,mobile)
	VALUES('$name','$email','$mobile')";

	if(mysqli_query($conn ,$sql_query))
	{
		echo "The message is entered successfully";
	}
	else
	{
		echo "Error:".$sql."".mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>