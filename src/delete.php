<?php

	
session_start();


$_SESSION['count']=0;
	$con=mysqli_connect('localhost','root','','project');
	if($con){
		$img=$_POST['imsrc'];
		$uname=$_POST['uname'];
		$bid=$_POST['bid'];
		
	$query="DELETE FROM `book_user` where  bid= '$bid' and uname='$uname'    ";
	
	
	$run=mysqli_query($con,$query);
	if($run)
	{
		echo "Data Deleted";
	

		echo "<br>";
	}
	else
		echo "not valid";
	$query="DELETE FROM `cart` where  bid= '$bid' and oname='$uname'    ";
	
	
	$run=mysqli_query($con,$query);
	if($run)
	{
		echo "Data Deleted";
	     $count++;

		echo "<br>";
	}
	else
		echo "not valid";
	
	$query="DELETE FROM `buy` where  bid= '$bid' and oname='$uname'    ";
	
	
	$run=mysqli_query($con,$query);
	if($run)
	{  $count++;
		echo "Data Deleted";
	 header("Location: user.php" );

		echo "<br>";
	}
	else
		echo "not valid";
	}

	else
	{
		echo "not connect";
	}
	

?>