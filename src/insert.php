<?php
error_reporting(0);
session_start();
$name=$_POST['bname'];
$p=$_POST['price'];

$imsrc=$_POST['imsrc'];
$type=$_POST['type'];
$author=$_POST['aname'];
$bid=$_POST['bid'];
		 $filename=$_FILES["file"]["name"];
		
$tempname=$_FILES["file"]["tmp_name"];
$folder="photo/".$filename;
$temp=$_SESSION['username'];
echo $name;
echo $folder;
echo $author;
echo $type;
echo $p;
$con=mysqli_connect('localhost','root','','project');
 if($con){
	 
	 
	$query="SELECT * FROM `book` WHERE bname='$name' and  imsrc='$folder' and author='$author' and type='$type' and price='$p'";
    
	 $run=mysqli_query($con,$query);  	
     if(mysqli_num_rows($run)>0)
	 {
		 echo "Already Inserted";
		 $row = mysqli_fetch_assoc($run);
		  $temp34=$row["bid"];
			echo $temp34;
			$query="SELECT * FROM `book_user` WHERE bid='$temp34' and uname='$temp'";
    
	 $run=mysqli_query($con,$query);  	
     if(mysqli_num_rows($run)>0)
	 {
		  $row = mysqli_fetch_assoc($run);
		  $temp9=$row["qty"];
		  $temp9;
	 $query="UPDATE `book_user` SET `qty`='$temp9' WHERE bid='$temp34' and uname='$temp'";
	  $run=mysqli_query($con,$query); 
	 }
	 else{
		 
	 $query="INSERT INTO `book_user`(`bid`, `uname`, `qty`) VALUES ('$temp34','$temp',1)";
	$run=mysqli_query($con,$query);
	if($run)
	{
		echo "Successful123";
	
		echo "<br>";
	}
	
     else
		 echo "Error1";
	 }
	 }		 
	 else{

echo $folder;
move_uploaded_file($tempname,$folder);
echo "<img src='$folder' height='' width=''/>";
     //$query="SELECT COUNT(*) as sum FROM `book` ";
    
	 //$run=mysqli_query($con,$query);  	
	 //$row=mysqli_fetch_assoc($run);
	  $query="SELECT MAX(`count`) as sum FROM `count` ";
    
	 $run=mysqli_query($con,$query);
if($run)
{
	echo "select runt";
	
}	
	 $row=mysqli_fetch_assoc($run);
	 
	 $count=$row["sum"];
	 $count+=20;
	 echo "$count"."abs";
	 $r=$count;
	$r="bookid".$r;
	 echo "book id $r";
	 $query="INSERT INTO `count` (`name`) VALUES ('a')";
	
	$run=mysqli_query($con,$query);
	if($run)
		echo " count done!!";
	else
		 echo "count not done!!";
	
	$query="INSERT INTO `book`(`bname`, `price`, `type`, `author`, `imsrc`,`bid`) VALUES ('$name','$p','$type','$author','$folder','$r')";
	$run=mysqli_query($con,$query);
	
	if($run)
	{
		echo "Successfu456l";
	
		echo "<br>";
	}
     else
		 echo "Error22";
	 
	  $query="SELECT * FROM  book WHERE  bname='$name' and price='$p' and type='$type' and author='$author' and imsrc='$folder' ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
		 	

	

			
    
    while($row = mysqli_fetch_assoc($run)) {
	    
			 
			 $temp34=$row["bid"];
			
	 $query="INSERT INTO `book_user`(`bid`, `uname`, `qty`) VALUES ('$temp34','$temp',1)";
	$run=mysqli_query($con,$query);
	
	if($run)
	{
		echo "Successful7899";
	
		echo "<br>";
	}
     else
		 echo "Error1";
	 
	}
	 }

 }
  header("Location: user.php" );

 }
 else
	  echo "Not Connected";
	$con=null;

?>