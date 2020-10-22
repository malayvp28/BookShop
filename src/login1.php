<?php
session_start();

 if(isset($_POST['submit1'])){
	  $uname=$_POST['uname'];
$p=$_POST['lpsw'];
$_SESSION['username']=$uname;
	 $con=mysqli_connect('localhost','root','','project');
 if($con){
	$query="SELECT * FROM `user` WHERE user_name='$uname' and password='$p'";
     $run=mysqli_query($con,$query);  
  		
     if(mysqli_num_rows($run) == 1)
	 {
		 header("Location:user.php" );
		 
	 }
	 else{
		 
		 header("Location:index.php" );
	 }
 }
 }
 ?>