<?php
error_reporting(0);
session_start();

$oname=$_POST['oname'];
$o=$_POST['orderid'];
echo "$oname";
$bid=$_POST['bid'];
echo "$bid";

$temp=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','project');
 if($con){
	 
	
	

	 
			
	 $query="INSERT INTO `buy`(`bid`, `uname`, `oname`,`orderid`) VALUES ('$bid','$temp','$oname','$o')";
	 $run=mysqli_query($con,$query);
	  $query=" DELETE FROM `cart` WHERE bid='$bid' and uname='$temp' and oname='$oname'";
$run=mysqli_query($con,$query);

	  $query="UPDATE `cart` SET `oname`='$temp' WHERE bid='$bid'";
	$run=mysqli_query($con,$query);
	  $query="UPDATE `book_user` SET `uname`='$temp' WHERE bid='$bid'";
	$run=mysqli_query($con,$query);
	if($run)
	{
		echo "Successful";
	 header("Location:user.php" );
		echo "<br>";
	}
     else
		 echo "Error";




 }
 
 else
	  echo "Not Connected";
	$con=null;

?>