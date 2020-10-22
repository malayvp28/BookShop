<html>
<head>
<link rel="stylesheet" type="text/css" href="main_style.css">
<link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.5.0/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
</head>
<body >
<div class="body">
<div class="top">
<form action="allsearch.php" method="post">
<button class="search_button" name="search" ><img src="search_logo.png" height="25px" width="25px"></img></button>
<input type="search" class="search" placeholder="Search"name="ser">
</form>
<button onclick="document.getElementById('id01').style.display='block'" class="button_top1"style="width:auto;"><p class="button_font"><b>SIGN UP<i class="fas fa-user-plus"style="margin-left:5px;"></i></b></a></button>
<button onclick="document.getElementById('id02').style.display='block'" class="button_top2"style="width:auto;"><p class="button_font"><b>LOGIN<i class="far fa-user" style="margin-left:5px;"></i></b></a></button>
</div>
<div class="menu">
<div class="menu_bar">
<ul>
<li class="active" style="width:60px; margin-top:3px;" ><a href="index.php" class="a2">HOME</a></li>

<li style="width:148px;"><a href="#"class="a1">OTHER BOOKS &#10097 </a>
<div class="sub-menu">
 <ul>
 


   <li > <div class="sub_img1"><br>
   
   <form action="search_type.php" method="post"><button type="submit" class="but" value="OTHER-STORY"name="type">STORY </button><br>
<button type="submit"class="but"value="OTHER-ADVENTURE"name="type">ADVENTURE</button><br>
 <button type="submit" class="but"value="OTHER-THRILL"name="type">THRILL</button><br>
  <button type="submit" class="but" value="OTHER-ROMANTIC"name="type">ROMANTIC</button><br>
   </div></li> 

 
 </ul>
</div>
</li>
<li  style="width:205px;"><a href="#" class="a1" >ENGINEERING BOOKS &#10097 </a>
<div class="sub-menu">
 <ul>
 <li><div class="sub_img1"><br>
<button type="submit"  class="but" value="ENGINEERING-INFORMATION TECHNOLOGY" name="type">INFORMATION TECHNOLOGY</button><br>
<button type="submit" class="but" value="ENGINEERING-COMPUTER" name="type">COMPUTER</button><br>
<button type="submit" class="but" value="ENGINEERING-CIVIL" name="type">CIVIL</button><br>
<button type="submit" class="but" value="ENGINEERING-MECHENICAL" name="type">MECHENICAL</button><br>
<button type="submit" class="but" value="ENGINEERING-ELECTRONICS" name="type">ELECTRONICS</button><br>
<button type="submit" class="but" value="ENGINEERING-CHEMICAL" name="type">CHEMICAL</button><br>
 </div></li>

</form>
 
 </ul>
</div>
</li>
<li style="width:130px; margin-top:3px;"><a href="#" class="a1">RECOMENDED</a></li>
</ul>

</div>
</div>


<div id="id01" class="modal">
  <div class="con">
  <form class="modal-content animate" action="signup.php" method="post">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
  

     <div class="container">
    <label style='margin-left:100px;'><b>STEP-1</b></label><br>
	    <label class="container_font"><b>USERNAME</b></label><br>
	  <input class="input"type="text" name="username" required><br><br>
	   <label class="container_font" ><b>FISRT NAME</b></label><br>
	   <input class="input"type="text" name="fname" required><br><br>
	   <label class="container_font"><b>LAST NAME</b></label><br>
		<input class="input" type="text" name="lname" required><br><br>
	   	   <label class="container_font" ><b>E-MAIl</b></label><br>
	   <input class="input"type="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Enter Valid Email  " required><br><br>
		  <label class="container_font"><b>PASSWORD</b></label><br>
		<input class="input" type="password" name="psw"  pattern=".{4,}" title="Six or more characters" required><br><br>
		<button  type="submit"  name="signup" class='button3'><b>SIGN UP</b></button>
    </div>

    
     
      
</form>
  
</div>
</div>
</div>

<div id="id02" class="modal">
  <div class="con">
  <form class="modal-content animate" action="login1.php" method="post">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
  

    <div class="container">
    
	  <label class="container_font"><b>USERNAME</b></label><br>
	  <input class="input"type="text" name="uname" required><br><br>
	  
	    <label class="container_font"><b>PASSWORD</b></label><br>
		<input class="input" type="password" name="lpsw" pattern=".{4,}" title="Six or more characters" required><br><br>
		
		<button type="submit" class="button3" name="submit1"><b>SIGN IN</b></button>
    </div>

    
     
      

  </form>
</div>
</div>
<?php







$img=$_POST['imsrc'];
$bname=$_POST['bname'];
$oname=$_POST['oname'];
$type=$_POST['type'];
$price=$_POST['price'];
$author=$_POST['author'];
$bid=$_POST['bid'];

echo "<img src='$img' height='50%px' width='20%' style='margin-left:15%; margin-top:5%; margin-right:2%; float:left; '><div style='margin-top:7%; margin-left:20%' ><p>BOOK NAME:$bname</p>
                          <p>TYPE :$type</p>
						  <p>AUTHOR:$author</p>
						  <p>OWNER NAME:$oname</p>
						  <p>price:$price</p>";
						
							  echo "
						 <button type='submit' class='buy_button' onclick='myFunction()'>BUY</button>
						  </div>";
						  
?>
<hr style="margin-top:19%"><p style='margin-left:50%'>copyright</p>
	<script>
	function myFunction() {
  alert("Please Login!");
}
</script>
</body>
</html>