<?php
//Random Number Generation
$rand=substr(rand(),0,4);//only show 4 numbers
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="main_style.css">
<link rel="stylesheet" type="text/css" href="http://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<div class="slider_backgroud">
 <div class="content">

  <p class="a">BACK TO COLLAGE</p>
  <br>
  <p class="b">SPECIAL</p><p class="c"><b>30% OFF</b></p>
  <br>
  <p class="d">FOR STUDENT COMMUNITY</p>
  <button onclick="document.getElementById('id01').style.display='block'" class="button1"style="width:auto;"><p class="button_font"><b>JOIN<i class="fas fa-user-plus"style="margin-left:5px;"></i></b></a></button>
 
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
		<input class="input" type="password" name="psw"  pattern=".{4,}" title="Six or more characters" required>
		<input type="text" value="<?=$rand?>" id="ran" readonly="readonly" class="captcha" style="background-color:blue;width:40px;margin-left:80px;margin-top:10px;">
        <input type="button" value="Referesh" onclick="captch()" />
		<br>
		<label class="container_font">Enter Captcha</label>
       <input type="text" name="chk" id="chk" onchange="test()">
	   <p style="margin-left:110px;font-size:15px;color:red" id="tag"></p>
		<br>
		<button  type="submit"  name="signup" class='button3' id="submit_bu" disabled><b>SIGN UP </b></button>
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
		<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> Remember ME</label><br>
		<button type="submit" class="button3" name="submit1"><b>SIGN IN</b></button>
    </div>

    
     
      

  </form>
</div>
</div>


<div class="content1" >
Cookies are text files containing small amounts of information which are downloaded to your device when you visit a website. Cookies are then sent back to the originating website on each subsequent visit, or to another website that recognises that cookie. Cookies are widely used because they allow a website to recognise a user’s device and therefore allow enhanced functionality.
<br><button class="btn" style="color:black">Close</button>
</div>
 </div>


<div class="mybook">
<div class="top_sell"><div class="abc12"><p class="title">Current bestsellers <form  action="view_index.php" method="post"><button name="bestsell" class="views2">View All</button></form></p></div> 

<?php
$con=mysqli_connect('localhost','root','','project');
	
	if($con){
	
	 $query="SELECT * FROM `cart` NATURAL JOIN `book` ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
		 	

	$count=0;

			
    
    while($row = mysqli_fetch_assoc($run) and $count<=5) {
	    
			 $temp2=$row["bname"];
			 $temp34=$row["bid"];
			 $temp33=$row["author"];
			 $temp32=$row["type"];
			 $temp5=$row["imsrc"];
			  $temp23=$row["oname"];
			 $temp31=$row["price"];
			 	 $temp30=$row["uname"];
				$count++;
			
			
    echo "<div class='mybook_img'>
	                              <img class='best_img' src='$temp5' height='100%px' width='100%' >
	
	                           
										<input type='hidden' name='oname' value='$temp30'>
										<input type='hidden' name='bid' value='$temp34'>
										 <button type='submit' class='buy_button' onclick='myFunction()'>BUY</button>
								 
							      <form action='login_detail.php' method='post'>
											 
											<input type='hidden' name='imsrc' value='$temp5'>
		                                <input type='hidden' name='bname' value='$temp2'>
										<input type='hidden' name='bid' value='$temp34'>
										<input type='hidden' name='author' value='$temp33'>
										<input type='hidden' name='type' value='$temp32'>
										<input type='hidden' name='price' value='$temp31'>
                                       
									   <input type='hidden' name='oname' value='$temp23'>
											 <button type='submit' name='detail' class='detail_button' >DETAIlS</button>
									</form>
      									
	       </div>
										";
	}

	 }
	 else {
    echo "<div style='margin-left:200px; margin-top:50px;'>Oops Book Not Available</div>";
}
	}
	else{
		echo "not connected";
	}
     
    ?>
	</div>
	</div>

<div class="mybook1">
<div class="abc12"><div><p class="title">Offers<form action="view_index.php" method="post">

<button type="submit" name="offer" class="views1">View All</button>
</form></p><h2 id="demo" class="timer"></h2>

<?php

	
	if($con){
	
		 $query="SELECT * FROM `cart` NATURAL JOIN `book` ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
		 	
    $count=0;
	

			
    
    while($row = mysqli_fetch_assoc($run) and $count<=5) {
	    
			 $temp2=$row["bname"];
			 $temp34=$row["bid"];
			 $temp33=$row["author"];
			 $temp32=$row["type"];
			 $temp5=$row["imsrc"];
			 $temp31=$row["price"];
			 $temp23=$row["oname"];
              $temp89=$temp31*70/100;
			$count++;
			
    echo "<div class='mybook_img'>
	                              <img class='best_img' src='$temp5' height='100%px' width='100%' 
                                                      
						 
										 	 <input type='hidden' name='imsrc' value='$temp5'>
		                                <input type='hidden' name='bname' value='$temp2'>
										<input type='hidden' name='bid' value='$temp34'>
										<input type='hidden' name='author' value='$temp33'>
										<input type='hidden' name='type' value='$temp32'>
										<input type='hidden' name='price' value='$temp31'>
                                    
										   <del class='del'>$$temp31</del>	 
										    <label class='del1'>$$temp89</label>	
										 <button type='submit' style='margin-top:15px;' class='buy_button1' onclick='myFunction()'>BUY</button>
										
										     <form action='login_detail.php' method='post'>
											 
											 <input type='hidden' name='imsrc' value='$temp5'>
		                                <input type='hidden' name='bname' value='$temp2'>
										<input type='hidden' name='bid' value='$temp34'>
										<input type='hidden' name='author' value='$temp33'>
										<input type='hidden' name='type' value='$temp32'>
										<input type='hidden' name='price' value='$temp31'>
                                     
									    <input type='hidden' name='oname' value='$temp23'>
											 <button type='submit' name='detail'class='detail_button' >DETAIlS</button></form>
      									
	                                     </div> 
										";
	}

	 }
	 else {
    echo "<div style='margin-left:200px; margin-top:50px;'>Oops Book Not Available</div>";
}
	}
	else{
		echo "not connected";
	}
     
    ?>
</div> 
<div >



    <div class="service" >
    	<div class="service-top">
        	<h1>Our Awesome Services</h1>
        </div>
        <div class="service-center">
        	<div class="service-center-top">
            	<div class="service-center-bottom1">
                </div>
            	<div class="service-center-bottom2">
                	<p><b>Easy to understand</b></p>
                    <p>It's easy for you to understanding our site</p>
                </div>
            </div>
            <div class="service-center-top">
           		<div class="service-center-bottom1">
                </div>
                <div class="service-center-bottom2">
                	<p><b>Simple and Clean</b></p>
                    <p>It's very simple for you and also it's totally<br />clean not bad things available on site</p>
                </div>
            </div>
            <div class="service-center-top">
            	<div class="service-center-bottom1">
                </div>
                <div class="service-center-bottom2">
                	<p><b>Easy to Customize</b></p>
                    <p>Customization is not hard for us</p>
                </div>
            </div>
            <div class="service-center-top">
            	<div class="service-center-bottom1">
                </div>
                <div class="service-center-bottom2">
                	<p><b>Creative Design</b></p>
                    <p>Design of site is totally empressive</p>
                </div>
            </div>
        </div>
    </div>
	<div class="pricing1">
          
       		<div class="pricing-title">
            	
            	
        		<h1>Frequently asked questions</h1>
            </div>
            <div class="pricing-main-questions">
            	<div class="pricing-main-questions-no">
                	<div class="pricing-main-questions-no-left">
                    	<h2>* Is there any charges for selling our books on your site?</h2>
                    	<p>No, you havenot to pay kind of charges for selling your book on site. <br>It's totally free for all.</p>
                    </div>
                    
                    <div class="pricing-main-questions-no-left">
                    	<h2>* How many books we can sell on our account at a one time?</h2>
                    	<p>You can sell as many books as you want.<br> There is no kind of limit regarding that.</p>
                    </div>
                    
                    <div class="pricing-main-questions-no-left">
                    	<h2>* What if we want to delete our account?</h2>
                    	<p>No, till now there is no kind of facility but we will definetly think about that but</p>
						<p>also you can remove your books which you upload for selling</p>
                    	
                    </div>
                    
                    <div class="pricing-main-questions-no-left">
                    	<h2>* If our books are selling in offer, then what? we get full amount or offer amount?</h2>
                    	<p>No, you will definetly get full amount.</p>
                 
                    </div>
                </div>
                
            </div>
            <div class="pricing-main-background-info">
           		<div class="pricing-main-background-info-in">
                	<div class="pricing-main-background-info-in-left">
                    	<h2>Copyright</h2>
                    </div>
                    
					
                </div>
           </div>
            
          </div> 
   </div>
<script>
const cookieContainer = document.querySelector(".content1");
const cookieButton = document.querySelector(".btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
  
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    console.log("testoiiog");   
   cookieContainer.classList.add("active");
  }
}, 2000);
</script>
   
  <script>

var modal = document.getElementById('id01');
var modal = document.getElementById('id02');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript">
var countDownDate = new Date("Jan 5, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {


  var now = new Date().getTime();

  var distance = countDownDate - now;
    

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    

  document.getElementById("demo").innerHTML =  hours + "Hours "+" "
  + minutes + "Min " +" "+ seconds + "Sec";

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
, 1000);
var modal = document.getElementById('id01');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
$(".num1").counterUp({delay:10,time:1000})
function myFunction() {
  alert("Please Login!");
}
</script>
<script type="text/javascript">
 

 
function captch() {
    var x = document.getElementById("ran");
    x.value = Math.floor((Math.random() * 10000) + 1);
	
}
function test(){
	var x = document.getElementById("ran").value;
	var y= document.getElementById("chk").value;
	console.log("yes"+x+" "+y );
	
	if(x==y)
	{
		document.getElementById("tag").innerHTML = "Valid !!";
		document.getElementById("submit_bu").disabled = false;
		
	}
	 else
		  document.getElementById("tag").innerHTML = "Invaild !!";
	
}

</script>

</body>

</html>