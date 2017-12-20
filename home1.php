<!--registration php-->
<?php
    session_start();
    include_once 'include/class.user.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>



<html>
<head>
<link rel="stylesheet" href="s.css">

        <link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/sky-mega-menu.css">
		<link rel="stylesheet" href="css/sky-mega-menu-purple.css">
<style>
	  	

/* registration script*/
<script language="javascript" type="text/javascript"> 
		    function submitreg() {
                var form = document.reg;
				if(form.name.value == ""){
                    alert( "Enter name." );
                    return false;
                }
                else if(form.uname.value == ""){
                    alert( "Enter username." );
                    return false;
                }
                else if(form.upass.value == ""){
                    alert( "Enter password." );
                    return false;
                }
                else if(form.uemail.value == ""){
                    alert( "Enter email." );
                    return false;
                }
            } 
	</script> 

i.custom{
	font-size:2em;
	color:grey;
}
#pic{
	margin-left: 78px;
}
#pic1{
	margin-top:-180px;
	margin-left:220px;
	position:relative;
}
#pic2{
	margin-top:-100px;
	margin-left:680px;
	position:relative;
}
#pic3{
	margin-top:-400px;
	margin-left:200px;
	position:relative;
}
#pic4{
	margin-top:-495px;
	margin-left:450px;
	position:relative;
}
#pic5{
	margin-top:200px;
	margin-left:120px;
	position:relative;
}
 #shop{
 	width:150px;
 	height:40px;
margin-left:30px;
 	padding-top: 20px;
 	background-color: crimson;
 	color:white;
   text-align: center;
   border-radius: 5px;
   border:2px solid;
   font-family: georgia;
   font-style: bold italic;
 }
 #shop1{
 	display: inline-block;
  font-family: "Roboto";
  font-weight: 300;
  font-size: 0.9vw;
  background: #5677FC;
  color: #fff;
  height: 36px;
  width:10px;
  text-align: center;
  line-height: 36px;
  text-transform: uppercase;
  padding: 0px 60px;
  padding-left:20px;
  border-radius: 1px;
  position: relative;
  top: 0;
  left: 0;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.2s ease-in;
  -webkit-transition: all 0.2s ease-in;;
 }
#a{
	font-family: georgia;
	font-size:34;
	font-weight: 5;
	font-style: italic;
	margin-left: 940px;
	margin-top:-430px;

}
#b{
	font-family: georgia;
	font-size:64;
	font-weight: 5;
	margin-left: 940px;
margin-top:-70px;

}
#c{
	font-family: georgia;
	font-size:16;
	margin-left: 940px;
margin-top:-70px;
font-style: italic;
color:grey;
}
#d{
	font-family: georgia;
	font-size:44;
	font-weight: 5;
	margin-left: 140px;
margin-top:-50px;
font-style: italic;

}


#section1{
  width: 200px;
  height: 200px;
  position: relative;
  left: 50%;
  top: -990px;
  margin-left: -405px;
  overflow: hidden;
  background: #292929;
  border: 5px solid #fff;
}

#section1:hover article{
  animation-play-state: paused;
}

article{
	top:-85px;
  position: absolute;
  left: 200px;
  background: #292929;
  color: #e3e3e3;
  width: 200px;
  height: 200px;
  text-align: center;
  font: 2em/1em sans-serif;
  border-box: box-sizing;
  padding-top: 80px;
}

article:nth-of-type(1){
  animation: slideIn 50s linear 0s infinite;
}
article:nth-of-type(2){
  animation: slideIn 50s linear 5s infinite;
}
article:nth-of-type(3){
  animation: slideIn 50s linear 10s infinite;
}
article:nth-of-type(4){
  animation: slideIn 50s linear 15s infinite;
}

article:nth-of-type(5){
  animation: slideIn 50s linear 20s infinite;
}
article:nth-of-type(6){
  animation: slideIn 50s linear 25s infinite;
}
article:nth-of-type(7){
  animation: slideIn 50s linear 30s infinite;
}
article:nth-of-type(8){
  animation: slideIn 50s linear 35s infinite;
}
article:nth-of-type(9){
  animation: slideIn 50s linear 40s infinite;
}
article:nth-of-type(10){
  animation: slideIn 50s linear 45s infinite;
}


@keyframes slideIn{
  0% {left: 200px;}
  5% {left: 0;}
  10% {left: 0;}
  15% {left: -200px;}
  20%{left: -200px;}
}
</style>
</head>
<body class="bg-purple">
<div align="right">
<h5>
                  Hello <?php $user->get_fullname($uid); ?>
                 <br>
    		          

                <a href="home2.php?q=logout" id="shop1">LOGOUT</a>
           </h5>
        
         
        </div>

<div class="body">		
			<ul class="sky-mega-menu sky-mega-menu-anim-scale sky-mega-menu-response-to-icons">				
				<li>
					<a href="home1.php"><i class="fa fa-home custom"></i>Home</a>
				</li>
				
				<li>
					<a href="index.php"><i class="fa fa-print"></i>Shop</a>
					
				</li>
				
				<li>
					<a href="p2.html"><i class="fa fa-briefcase"></i>Contact Us</a>
					
				

				<li>
					<a href="customer.html"><i class="fa fa-edit"></i>Customer Support</a>
				</li>
		
			

<li aria-haspopup="true" class="right">
					<a href="login.php"><i class="fa fa-envelope-o"></i>Login</a>
				
				</li>	

				
				<li aria-haspopup="true" class="right">
					<a href="registration.php"><i class="fa fa-lock"></i>Register</a>
					
				</li>
			
			</ul>

			
		</div>
<br>

<center>
<img src="title.png">
<br>
<img src="p2.png" id="pic">
</center>

<div id="pic1">
<img src="p1.jpg">
</div>

<div id="pic2">
<img src="p3.jpg">
</div>

<!--<div id="pic3">
<img src="p4.jpg">
</div>-->

<div id="pic4">
<img src="sparkle.png">
<br>
<p id="shop"><a href="index.php"> SHOP NOW</a></p>
</div>

<div id="a">
<p><b>Accessorize</b></p>
</div>
<div id="b">
<p><b>YOUR <br>LIFE</b></p>
</div>

<div id="c">
<p>Shop here for exclusive and<br>
meticulous accessories!<br>
Hurry for the prevailing styles<br>
and marvelous trends!</p>
</div>

<div id="pic5">
<img src="p4.jpg">
</div>
<div id="d">
<p>SPICE UP<br>
 YOUR CLOSET</p>
 </div>
 
 <center>
 <img src="p5.jpg">
 </center>
 
<section id="section1">
<article><img src="m1.jpg" width="200px" height="200px"></article>
<article><img src="m2.jpg" width="200px" height="200px"></article>
<article><img src="m3.jpg" width="200px" height="200px"></article>
<article><img src="m4.jpg" width="200px" height="200px"></article>
<article><img src="e.jpg" width="200px" height="200px"></article>
<article><img src="h.jpg" width="200px" height="200px"></article>
<article><img src="m1.jpg" width="200px" height="200px"></article>
<article><img src="m2.jpg" width="200px" height="200px"></article>
<article><img src="m3.jpg" width="200px" height="200px"></article>
<article><img src="m4.jpg" width="200px" height="200px"></article>
</section>

<div align="right">
<b><u><i>Follow us on</b></u></i>
<img src="fb.png" width="2.5%" height="5%">
<img src="tw.png" width="2.5%" height="5%">
<img src="g+.png" width="2.5%" height="5%">
<img src="insta.jpg" width="2.5%" height="5%">
</div>
</body>
</html>