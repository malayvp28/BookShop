<?php

	
	$con=mysqli_connect('localhost','root','','project');
	if($con){
		$oname=$_POST['oname'];
		$uname=$_POST['uname'];
		$bid=$_POST['bid'];
		
	$query="DELETE FROM `cart` where  oname= '$oname'  and uname='$uname' and bid='$bid'  ";
	$run=mysqli_query($con,$query);
	if($run)
	{
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