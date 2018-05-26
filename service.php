<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<?php
session_start();

$host='localhost';
$connect=mysqli_connect($host,'root','','login');

// Initialize some vars
$user_ok = false;
$log_username = "";
$log_password = "";
// User Verify function
function evalLoggedUser($connect,$u,$p){
	$sql = "SELECT id FROM user WHERE username = '$u' AND password = '$p'";
    $query = mysqli_query($connect, $sql);
    $numrows = mysqli_num_rows($query);
	if($numrows > 0){
		return true;
	}
}
if(isset($_SESSION["userid"]) && isset($_SESSION["username"]) && isset($_SESSION["password"])) {
	$log_username = preg_replace('#[^a-z0-9]#i', '', $_SESSION['username']);
	$log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['password']);
	// Verify the user
	$user_ok = evalLoggedUser($connect,$log_username,$log_password);
	
} else if(isset($_COOKIE["user"]) && isset($_COOKIE["password"])){
    $_SESSION['username'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['user']);
    $_SESSION['password'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['password']);
	$log_username = $_SESSION['username'];
	$log_password = $_SESSION['password'];
	// Verify the user
	$user_ok = evalLoggedUser($connect,$log_username,$log_password);
	
}
?>

<title>Learning Mangement System</title>
<style type="text/css">

body{
	
	font-size:87.5%;
	font-family:Verdana, Geneva, sans-serif;
	line-height:1.5;
	text-align:left;
	/*border:outset;*/
	border-top-color:#FFF;
	border-bottom-color:#FFF;
	border-left-color:#FFF;
	border-right-color:#FFF;
	/*background-clip:content-box;*/
	background:#FFFAFA;
	/*background-image:url(518164-backgrounds.jpg);*/
	}

header img {
	width:17%;
	height:190px;
	float:left;
	margin-top:3px;
	/*box-shadow:1PX 1px 1px 3px rgba(0,0,0,0.25);*/
	border:#FFF outset ;
	border-radius:2px;
	margin-left:3px;
	}
	
header {
	position:relative;
	height:200px;
	width:100%;
	box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
	border-radius:2px;
	margin-top:0px;
	background-color:#FFF;
	}

header div{
		   width:80%;
		   margin-left:20%;
		   margin-top:0%;
		   position:absolute;
		}
header div h3{
	font-family:fontawesome;
	font-size:32px;
	}

#inside {float:right;
		 /*border:#000 solid 1px;*/
		 margin-top:-3px;
		 font-size:14px;
		 padding:0px;
		 margin-right:5px;	
		}	
		
#inside_p {
			padding-top:0px;
			padding-bottom:0px;
			}
	
#header_div1 {
	margin-right:0px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-style: normal;
	background-color:#fff;
	/*margin: 100px;*/
	height: 50px;
	width:81.5%;
	margin-top:11.5%;
	position:absolute;
	margin-left:18%;
	border-top:#9C6 solid 2px;
	border-bottom:#9C6 solid 2px;
}

a {
	text-decoration:none;
	}

nav {
	position:relative;
	box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
	margin-top:1%;
	/*background: #666;*/
	height:42px;
	border-radius:2px;
	width:100%;
	margin-bottom:0.5%;
	background:#FFF;
	}
label{ margin-left:3px;
	   color:#333;
	   font-family:Verdana, Geneva, sans-serif;
	 
	 }
	
nav ul{
	list-style:none;
	margin-left:-3%;
	
	}
nav ul li{
	float:left;
	display:inline;
	text-align:left;
	
		}
nav ul li a{
	transition:all 0.3s;
	/*margin-left:35px;*/
	margin-right:35px;
	font-weight:600;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	}

nav ul li a:link , nav ul li a:visited {
	color:#333;
	display:inline-block;
	padding:10px 20px;
	}
nav ul li a:hover{
	background-color:#00FF7F/*#CF5C3F*/;
	color:#000;	
	}
		#footer1{
	width:100%;
	height:160px;
	
	}
	#footerimg{
	height:100%;
	width:100%;
	
	}
#footer2{
	height:30px;
	background-color:#333;
	color:#999;
	padding-left:2%;
	
	}
#hideform,#hideid{display:inline;
				  display:none;
					}
#hideform{position:absolute;
		  padding:10px;
		  margin-left:93%;
		  margin-top:0%;
		 }
#hideform button {width:65px;
				   font-size:14px;
				   height:25px;
				   margin-top:-3%;

}
#hideid{
	padding:10px;
	position:absolute;
	margin-top:4px;
	margin-left:78%;
		}
	@media only screen and (min-width:150px) and (max-width:600px)
{
	body{
	font-family:Verdana, Geneva, sans-serif;
	text-align:left;
	/*border:outset;*/
	/*background-clip:content-box;*/
	background:#FFFAFA;
	/*background-image:url(518164-backgrounds.jpg);*/
	}

header img {
	width:17%;
	height:120px;
	float:left;
	margin-top:3px;
	/*box-shadow:1PX 1px 1px 3px rgba(0,0,0,0.25);*/
	border:#FFF outset ;
	border-radius:2px;
	margin-left:3px;
	}
	
header {
	position:relative;
	height:130px;
	width:100%;
	box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
	border-radius:2px;
	margin-top:0px;
	background-color:#FFF;
	}

header div{
		   width:80%;
		   margin-left:20%;
		   margin-top:0%;
		   position:absolute;
		}
header div h3{
	font-family:fontawesome;
	font-size:18px;
	text-align:center;
	}

#inside {
			display:none	
		}	
		
	
#header_div1 {
	margin-right:0px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-style: normal;
	background-color:#fff;
	/*margin: 100px;*/
	height: 30px;
	width:80%;
	margin-top:15.8%;
	position:absolute;
	margin-left:18.8%;
	border-top:#9C6 solid 2px;
	border-bottom:#9C6 solid 2px;
	padding-bottom:5px;
	padding-top:-2px;
}

a {
	text-decoration:none;
	}
nav {
	position:relative;
	box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
	margin-top:0.3%;
	/*background: #666;*/
	height:42px;
	border-radius:2px;
	width:100%;
	margin-bottom:0.5%;
	background:#FFF;
	}
label{ margin-left:3px;
	   color:#333;
	   font-family:Verdana, Geneva, sans-serif;
	 
	 }
	#hide{display:none;}
nav ul{
	list-style:none;
	margin-left:-6%;
	height:38px;
	
	}
nav ul li{
	float:left;
	display:inline;
	text-align:left;
	
		}
nav ul li a{
	transition:all 0.3s;
	/*margin-left:35px;*/
	font-weight:600;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	}

nav ul li a:link , nav ul li a:visited {
	color:#333;
	display:inline-block;
	padding:10px 20px;
	}
nav ul li a:hover{
	background-color:#00FF7F/*#CF5C3F*/;
	color:#000;	
	}
		#footer1{
	width:100%;
	height:160px;
	
	}
	#footerimg{
	height:100%;
	width:100%;
	
	}
#footer2{
	height:30px;
	background-color:#333;
	color:#999;
	padding-left:2%;
	
	}
}
@media only screen and (min-width:1350px) and (max-width:1380px){
	body{
	
	font-size:87.5%;
	font-family:Verdana, Geneva, sans-serif;
	line-height:1.5;
	text-align:left;
	/*border:outset;*/
	border-top-color:#FFF;
	border-bottom-color:#FFF;
	border-left-color:#FFF;
	border-right-color:#FFF;
	/*background-clip:content-box;*/
	background:#FFFAFA;
	/*background-image:url(518164-backgrounds.jpg);*/
	}

header img {
	width:17%;
	height:190px;
	float:left;
	margin-top:3px;
	/*box-shadow:1PX 1px 1px 3px rgba(0,0,0,0.25);*/
	border:#FFF outset ;
	border-radius:2px;
	margin-left:3px;
	}
	
header {
	position:relative;
	height:200px;
	width:100%;
	box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
	border-radius:2px;
	margin-top:0px;
	background-color:#FFF;
	}

header div{
		   width:80%;
		   margin-left:21%;
		   margin-top:0%;
		   position:absolute;
		}
header div h3{
	font-family:fontawesome;
	font-size:32px;
	}

#inside {float:right;
		 /*border:#000 solid 1px;*/
		 margin-top:-3px;
		 font-size:14px;
		 padding:0px;
		 margin-right:5px;	
		}	
		
#inside_p {
			padding-top:0px;
			padding-bottom:0px;
			}
	
#header_div1 {
	margin-right:0px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 10px;
	font-style: normal;
	background-color:#fff;
	/*margin: 100px;*/
	height: 50px;
	width:81.5%;
	margin-top:10.8%;
	position:absolute;
	margin-left:18%;
	border-top:#9C6 solid 2px;
	border-bottom:#9C6 solid 2px;
}

a {
	text-decoration:none;
	}

nav {
	position:relative;
	box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
	margin-top:1%;
	/*background: #666;*/
	height:42px;
	border-radius:2px;
	width:100%;
	margin-bottom:0.5%;
	background:#FFF;
	}
label{ margin-left:3px;
	   color:#333;
	   font-family:Verdana, Geneva, sans-serif;
	 
	 }
	
nav ul{
	list-style:none;
	margin-left:-3%;
	
	}
nav ul li{
	float:left;
	display:inline;
	text-align:left;
	
		}
nav ul li a{
	transition:all 0.3s;
	/*margin-left:35px;*/
	margin-right:35px;
	font-weight:600;
	font-family:Verdana, Geneva, sans-serif;
	font-size:14px;
	}

nav ul li a:link , nav ul li a:visited {
	color:#333;
	display:inline-block;
	padding:10px 20px;
	}
nav ul li a:hover{
	background-color:#00FF7F/*#CF5C3F*/;
	color:#000;	
	}
	#footer1{
	width:100%;
	height:160px;
	
	}
	#footerimg{
	height:100%;
	width:100%;
	
	}
#footer2{
	height:30px;
	background-color:#333;
	color:#999;
	padding-left:2%;
	
	}
	
}
	</style>
<script>
function checklog(){

	var user ="<?php echo $log_username?>";
	var check1=<?php echo $user_ok?>;

	if(check1 == true){
		//document.getElementById('formdiv').style.display="none";
		//document.getElementById('innerhtml').style.display="block";
		//document.getElementById("innerhtml").innerHTML='&nbsp'+"You are logged in as "+user;
		//document.getElementById('addidlink').style.display="block";
		//document.getElementById('addidimg').style.display="block";
		//document.getElementById('addidimg').src="user/"+user+".jpg";
		//document.getElementById('addidlink').href="user.htm?username="+user;
		document.getElementById('hidehide').style.display="block";
		document.getElementById('inside').style.display="none";
		document.getElementById('hideid').style.display="block";
		document.getElementById("hideid").innerHTML='&nbsp'+"You are logged in as "+user;
		document.getElementById('hideform').style.display="block";
		}

    }
</script>
	</head>
<body onload="checklog()">
<header> <img src="nsbm.jpg" alt='Logo'><div><h3> NSBM GREEN UNIVERSITY LERNING MANEGEMENT SYSTEM</h3></div>
  <div id="header_div1"><marquee> <h4>  Recognizing the trends in technology and globalization, NSBM has designed an alternative and innovative approach to higher education to prepare young people to face new challenges of the world. As a degree school which enables its students to experience the future of higher education NSBM is encouraging their students to deal with sophisticated technology throughout their academic life. “e-Learning Management System” is the novel initiative taken up by NSBM to give hi-tech exposure to the students in order to pursue their studies in virtual terms. Through this learning process learners can communicate with their lecturers, their peers, and access learning materials, over the Internet or other computer networks. This area provides you with a wealth of information and resources designed to enrich student’s experience at NSBM. From information on registration, fees and exams to student support services and who to contact for academic advice, you’ll find it all here in one place.</h4></marquee></div>
</header>
<!--<center>-->
<nav>
	<ul>
   
    	<li id="headerhome"><a href="Home.php">Home</a></li>
        <li><a href="about us.php">About us</a></li>
        <li><a href="service.php">Services</a></li>
        <li id="hide"><a href="support.php">Support</a></li>
        <li><a href="#">Events</a></li>
         <div id="hidehide"><h5 id="hideid"></h5><form method="post" action="logout.php" id="hideform"><button type="submit" >Log out</button></form></div>
        <div id='inside'><p id="inside_p">You are not logged in(<a href="login.php" id="inside_anchar">Log In</a>)</p></div>
    </ul>
</nav>
<!--</center>-->

<!--<br>-->

<br>
<br>
<footer id="footer1"><img src="banner-logos.png" id="footerimg" /> </footer>
<footer id="footer2">Copyright © 2016 National School of Business Management. All Rights Reserved.</footer>
          <!--</center>-->
         <center><h5>Telephone: +94(11) 567 2545|5673535 - Email:info@nsbm.lk</h5>
          </center>