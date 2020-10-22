<?php


session_start();



$temp=$_SESSION['username'];

$con=mysqli_connect('localhost','root','','project');
if($con){
	$query="SELECT * FROM `book` WHERE user_name='$temp' ";
	$run=mysqli_query($con,$query);
	$temp3=0;		
	 if (mysqli_num_rows($run) > 0) {
	
	
    
    while($row = mysqli_fetch_assoc($run)) {
		$temp3++;
	}
}
}?>
<html>

<head>
<link rel="stylesheet" type="text/css" href="user_style.css">

</head>
<body>
<div class="top">
<form action="search.php" method="post">
<button class="search_button" name="search" ><img src="search_logo.png" height="25px" width="25px"></img></button>
<input type="search" class="search" placeholder="Search" name="ser">
</form>
<button class="cart" onclick="document.getElementById('id03').style.display='block'" >CART</button>
<button class="cart" style="margin-left:10px;" onclick="window.location.href='index.php'">LOG OUT</button>
</div>

<div class="blurred-box">

  <div class="user-login-box">
   <div> <div class="user-icon"></div>
	<div class="contain"><?php echo"<label class='label1'>$temp</label><img src='true.png' height='20px' width='30px'><br>";?>
<label class="label2">TOTAL BOOk</label><br>
<?php echo"<label class='label3'>$temp3</label><br>";?></div></div>



 <div class="button">
<button onclick="document.getElementById('id02').style.display='block'">ADD BOOK</button>
<button onclick="document.getElementById('id01').style.display='block'">MY BOOK</button>

  </div>
 
  
</div>
</div>
 <div id="id02" class="modal">
  <div class="con">
  <form class="modal-content animate" action="insert.php" method="post">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
  

    <div class="container">
    
	  <label class="container_font"><b>BOOK NAME:</b></label>
	  <input class="input"type="text" name="bname"><br><br>
	  
	    <label class="container_font"><b>AUTHOR NAME:</b></label>
		<input class="input" type="text" name="aname"><br><br>
		    <label class="container_font"><b>TYPE:</b></label>
		<input class="input" type="text" name="type"><br><br>
		 <label class="container_font"><b>PRICE:</b></label>
		<input class="input" type="number" name="price"><br><br>
		<button type="submit" class="button3" name="submit1"><b>SIGN IN</b></button>
    </div>

    
     
      

  </form>
</div>
</div>
 <div id="id01" class="modal">
  <div class="con">
  <div class="modal-content animate" >
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
  

    <div class="container">
    
	<?php
	
	if($con){
	
	 $query="SELECT * FROM `book` WHERE user_name='$temp' ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
		 	echo "<div class='tabel'><table><tr >

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
	
	<td cellspacing='10' style='margin-left:10px;'>$temp2</td>
	<td cellspacing='10'>$temp3</td>
	
	<td>
		<form action='buy.php' method='post'>
		<input type='hidden' name='id' value='$temp1'>
		<input type='hidden' name='bname' value='$temp2'>
		<input type='hidden' name='price' value='$temp3'>
		<input type='hidden' name='uname' value='$temp4'>
		<input type='submit' name='buy'  value='BUY' >
		</form>
		</td>
		<td>
		<form action='deleteone.php' method='post'>
		<input type='hidden' name='id' value='$temp1'>
		<input type='hidden' name='bname' value='$temp2'>
		<input type='hidden' name='price' value='$temp3'>
		<input type='hidden' name='uname' value='$temp4'>
		<input type='submit' name='delete' value='DELETE' >
		</form>
		</td>
		</tr>";
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
    </div>

    
     
      

  </div>
</div>
</div>
</div>
<div id="id03" class="modal">
  <div class="con">
  <div class="modal-content animate" >
        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      
  

    <div class="container">
    
	<?php
	
	if($con){
	
	 $query="SELECT * FROM `cart` WHERE user_name='$temp' ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
		 	echo "<div class='tabel'><table><tr >

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
	
	<td cellspacing='10' style='margin-left:10px;'>$temp2</td>
	<td cellspacing='10'>$temp3</td>
	
	<td>
		<td>
		<form action='deleteone.php' method='post'>
		<input type='hidden' name='id' value='$temp1'>
		<input type='hidden' name='bname' value='$temp2'>
		<input type='hidden' name='price' value='$temp3'>
		<input type='hidden' name='uname' value='$temp4'>
		<input type='submit' name='deletecart' value='DELETE' >
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
    </div>

    
     
      

  </div>
</div>
</div>
  <script>

var modal = document.getElementById('id02');

var modal = document.getElementById('id01');

var modal = document.getElementById('id03');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}
	
</script>
</body>

</html>