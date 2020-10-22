<?php
session_start();
$temp=$_SESSION['username'];



if(isset($_POST['delete'])){
	echo "hi";
	$con=mysqli_connect('localhost','root','','project');
	if($con){
		$id=$_POST['id'];
	$query="DELETE FROM `book` where id= '$id'  ";
	$run=mysqli_query($con,$query);
	if($run)
	{
		echo "Data Deleted";
	 header('location:user.php');

		echo "<br>";
	}
	else
		
		{ 			echo "not valid";
	}}

	else
	{
		echo "not connect";
	}
	
}
if(isset($_POST['deletecart'])){
	echo "hi";
	$con=mysqli_connect('localhost','root','','project');
	if($con){
		$id=$_POST['id'];
	$query="DELETE FROM `cart` where id= '$id'  ";
	$run=mysqli_query($con,$query);
	if($run)
	{
		echo "Data Deleted";
	  header('location:user.php');

		echo "<br>";
	}
	else
		
		{ 			echo "not valid";
	}}

	else
	{
		echo "not connect";
	}
	
}

?>