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
$temp56=$_POST['ser'];
$con=mysqli_connect('localhost','root','','project');
	echo '<div class="mybook1_view" height="100px" style="overflow:auto">
<div class="top_sell"><div class="abc12"><p class="title">related to '. $temp56 .'</p></div>';
		
	if($con){
	 $query="SELECT * FROM `book` NATURAL JOIN `book_user`   WHERE bname LIKE '%$temp56%' ";
	$run=mysqli_query($con,$query);
	 if (mysqli_num_rows($run) > 0) {
		 	
	$count=0;

			
    
    while($row = mysqli_fetch_assoc($run) ) {
	    
			 $temp2=$row["bname"];
			 $temp34=$row["bid"];
			 $temp33=$row["author"];
			 $temp32=$row["type"];
			 $temp5=$row["imsrc"];
			
			 $temp31=$row["price"];
			 	 $temp30=$row["uname"];
				$count++;
			
			
    echo "<div class='mybook_img' style='margin-bottom:120px;'>
	                              <img class='best_img' src='$temp5' height='100%px' width='100%' >
	
	                          
										<input type='hidden' name='oname' value='$temp30'>
										<input type='hidden' name='bid' value='$temp34'>
										 <button type='submit' class='buy_button' onclick='myFunction()'>BUY</button>
								
							      <form action='login_detail.php' method='post'>
											 <input type='hidden' name='oname' value='$temp30'>
											<input type='hidden' name='imsrc' value='$temp5'>
		                                <input type='hidden' name='bname' value='$temp2'>
										<input type='hidden' name='bid' value='$temp34'>
										<input type='hidden' name='author' value='$temp33'>
										<input type='hidden' name='type' value='$temp32'>
										<input type='hidden' name='price' value='$temp31'>
                                       
									  
											 <button type='submit' name='detail' class='detail_button' style='margin-bottom:50px;' >DETAIlS</button>
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
	<div >



    <div class="service1" >
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
	function myFunction() {
  alert("Please Login!");
}
</script>
</body>
</html>