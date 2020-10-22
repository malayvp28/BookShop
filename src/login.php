<?php


session_start();



$temp=$_SESSION['username'];

$con=mysqli_connect('localhost','root','','project');
if($con){
	$query="SELECT * FROM `cart` WHERE user_name='$temp' ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
	
	$temp3=0;		
    
    while($row = mysqli_fetch_assoc($run)) {
		$temp3++;
	}
}
}
	

?><html>
<head>
<link rel="stylesheet" type="text/css" href="style_login.css">
<style>

</style>
</head>
<body>
<div class="top">
<div class="logo">
<img src="login.png" height="70px" width="70px"></div>
<?php echo"<label class='label1'>$temp</label><br>";?>
<label class="label2">TOTAL BOOk</label><br>
<?php echo"<label class='label3'>$temp3</label><br>";?>
<div class="top1">
<form action="#" method="post">
<button class="search_button" ><img src="search_logo.png" height="25px" width="25px"></img></button>
<input type="search" class="search" placeholder="Search">
</form>
</div>
</div><hr>
<div class="menu">

<ul>
 <li><div ><a href="#" >ALL BOOKS</a></div></li>
 <li > <div ><a href="#">TOP SEELING</div></li> 
 <li><a href="#">TEXTBOOK </a></li>


 <li><a href="#" ><b>ENGINEERING</b></a><br>

<a href="#"style="margin-left:25px;" >INFORMATION TECHNOLOGY</a><br>
<a href="#" style="margin-left:25px;">COMPUTER</a><br>
<a href="#" style="margin-left:25px;">CIVIL</a><br>
<a href="#" style="margin-left:25px;">MECHENICAL</a><br>
<a href="#"style="margin-left:25px;" >ELECTRONICS</a><br>
<a href="#"style="margin-left:25px;" >CHEMICAL</a><br>

 </li>


   <li ><a href="#" ><b>OTHER BOOK</b></a><br>
   
   <a href="#" style="margin-left:25px;">STORY </a><br>
<a href="#" style="margin-left:25px;">ADVENTURE</a><br>
 <a href="#" style="margin-left:25px;">THRILL</a><br>
  <a href="#" style="margin-left:25px;">ROMANTIC</a><br>
</li> 
<li><a href="#">RECOMNEDED</a></li>
</ul>

</div>
<div class="contain1">
<div class="contain">

<ul>

<li><a href="#">ADD BOOK&#62</a>
<div class="sub-menu">
<ul>
 <li><div class="sub">
 <form action="#" mentho="post">
 <label>BOOK NAME:</label>
 <input type="text">
  <label>PRICE:</label>
 <input type="number" style="width:80px;">
  <label>TYPE:</label>
 <input type="text">
  <label>AUTHOR NAME:</label>
 <input type="text">
   <label>OFF:</label>
 <input type="number" style="width:50px;">
 <input type="submit">
 </form></div></li>


  
 
 </ul>
</div>

</li>
</ul>

</div>
<hr>
<div>
<?php
	
	if($con){
	
	 $query="SELECT * FROM `cart` WHERE user_name='$temp' ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
		 	echo "<div class='tabel'><table><tr >
	<th>ID</th>
	<th>BOOK NAME</th>
	<th>PRICE</th>
	</tr>";
			
    
    while($row = mysqli_fetch_assoc($run)) {
	         $temp1=$row["id"];
			 $temp2=$row["bname"];
			 $temp3=$row["price"];
			 $temp4=$temp;
			
        echo"
	
	<tr >
	<td  cellspacing='10'style='margin-left:10px;'>$temp1</td>
	<td cellspacing='10' style='margin-left:10px;'>$temp2</td>
	<td cellspacing='10'>$temp3</td>
	
	<td>
		</div><div>
		<form action='sale.php' method='post'>
		<input type='hidden' name='id' value='$temp1'>
		<input type='hidden' name='bname' value='$temp2'>
		<input type='hidden' name='price' value='$temp3'>
		<input type='hidden' name='uname' value='$temp4'>
		<input type='submit' name='sale' value='SELL !!' >
		</form></td><td>
		<form action='sale.php' method='post'>
		<input type='hidden' name='id' value='$temp1'>
		<input type='hidden' name='bname' value='$temp2'>
		<input type='hidden' name='price' value='$temp3'>
		<input type='hidden' name='uname' value='$temp4'>
		<input type='submit' name='sale' value='DELETE' >
		</form>
		</div></td></tr>";
	}
	echo "	</table>";
	 }
	 else {
    echo "Empty";
}
	}
	else{
		echo "not connected";
	}
     
    ?>

   
</body>
</html>