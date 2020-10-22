<?php
$con=mysqli_connect('localhost','root','','project');
$query="SELECT COUNT(*) as sum FROM `book` ";
    
	 $run=mysqli_query($con,$query);  	
	 $row=mysqli_fetch_assoc($run);
	 $r=$row["sum"];
	 echo $r;
?>