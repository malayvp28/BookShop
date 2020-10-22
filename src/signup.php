<?php
session_start();

if(isset($_POST['signup']))
{
	$uname=$_POST['username'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pas=$_POST['psw'];
	$mail=$_POST['mail'];
	$con=mysqli_connect('localhost','root','','project');
  echo "hi";
  if($con){
	$query="SELECT * FROM `user` WHERE user_name='$uname'";
     $run=mysqli_query($con,$query);  
  		
     if(mysqli_num_rows($run) == 1)
	 {
		 echo "already use ";
		 
	 }
	 else{
		 $_SESSION['username']=$uname;
		$query=" INSERT INTO `user`(`user_name`, `f_name`, `l_name`, `password` , `email`) VALUES ('$uname','$fname','$lname','$pas','$mail')";
		 
	 $run=mysqli_query($con,$query);  
	 if($run)
	 {
		 $_SESSION['username']=$uname;
		  header("Location:user.php" );
	 }
	 }
 }
}
?>