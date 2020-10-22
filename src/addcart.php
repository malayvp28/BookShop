<?php
error_reporting(0);
session_start();

$oname=$_POST['oname'];

$bid=$_POST['bid'];
echo "$bid";

$temp=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','project');
 if($con){
	 
	$query="SELECT * FROM `cart` WHERE uname='$temp' and bid='$bid' and oname='$oname'";
     $run=mysqli_query($con,$query);  	
     if(mysqli_num_rows($run) == 1)
	 {
		 echo "Already Inserted";
		 	 header("Location:user.php" );
	 }		 
	 else{
		

$query="SELECT COUNT(*) as sum FROM `cart` ";
    
	 $run=mysqli_query($con,$query);  	
	 $row=mysqli_fetch_assoc($run);
	 $r1=$row["sum"];
	 $query="SELECT COUNT(*) as sum FROM `buy` ";
    
	 $run=mysqli_query($con,$query);  	
	 $row=mysqli_fetch_assoc($run);
	 $r2=$row["sum"];
	 $query="SELECT COUNT(*) as sum FROM `count` ";
    
	 $run=mysqli_query($con,$query);  	
	 $row=mysqli_fetch_assoc($run);
	 $count=$row["sum"];
	 $r=$r1+$r2+2000+$count;
	$r="orderid".$r;
	 $query="INSERT INTO `count`(`count`) VALUES ()";
    
	 $run=mysqli_query($con,$query);  	
	 echo "$r<br>";
	 
	  echo "$bid";
	   echo "$temp";
	   echo "owner name:";
	    echo "$oname";
	$query1=" INSERT INTO `cart` (`uname`, `oname`, `bid`, `orderid`) VALUES ('$temp','$oname','$bid','$r')";


	
	$run1=mysqli_query($con,$query1);
	if($run1)
	{
		echo "Successful";
		 header("Location:user.php" );
		echo "<br>";
	}
     else
	 {
		 echo "Error22";
	 }



 }
 }
 else
	  echo "Not Connected";
	$con=null;

?>