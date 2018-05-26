<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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
	background:#FFFAFA;;
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
#username{
		box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
		font-size:40px;
		font-family:fontawesome;
		color:#060;
		width:40%;
		border-radius:3px;
		
	}
#userimgdiv{width:40%;
			height:400px;
			box-shadow: 1PX 1px 1px 2px rgba(0,0,0,0.20);
	}

#userimg{
	width:100%;
	height:500px;
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
	margin-left:72%;
		}
#address{width:70%;
		 font-family:Verdana, Geneva, sans-serif;
		 font-size:22px;
		 color:#333;
		 box-shadow: 2px 2px 2px 2px #99FF99;
		 margin-left:13%;
		 padding-left:20px;
		 height:40px;
		 padding-top:20px;
		 }
		
#address p ,#address h5 {display:inline}

#country{width:70%;
		 font-family:Verdana, Geneva, sans-serif;
		 font-size:22px;
		 color:#333;
		 box-shadow: 2px 2px 2px 2px #99FF99;
		 margin-left:13%;
		 padding-left:20px;
		 height:40px;
		 padding-top:20px;
		 margin-bottom:30px;
		 }

#country p ,#country h5 {display:inline;}

#E-mail{width:70%;
		 font-family:Verdana, Geneva, sans-serif;
		 font-size:22px;
		 color:#333;
		 box-shadow: 2px 2px 2px 2px #99FF99;
		 margin-left:13%;
		 padding-left:20px;
		 height:40px;
		 padding-top:20px;
		 margin-bottom:30px;
		 margin-top:30px;
		 }
		 
#E-mail p ,#E-mail h5 {display:inline;}

#Telephone{width:70%;
		 font-family:Verdana, Geneva, sans-serif;
		 font-size:22px;
		 color:#333;
		 box-shadow: 2px 2px 2px 2px #99FF99;
		 margin-left:13%;
		 padding-left:20px;
		 height:40px;
		 padding-top:20px;
		 margin-bottom:30px;
		 }
#Telephone p ,#Telephone h5 {display:inline;}

#Course{width:70%;
		 font-family:Verdana, Geneva, sans-serif;
		 font-size:22px;
		 color:#333;
		 box-shadow: 2px 2px 2px 2px #99FF99;
		 margin-left:13%;
		 padding-left:20px;
		 height:40px;
		 padding-top:20px;
		 margin-bottom:30px;
		 }
#Course p ,#Course h5 {display:inline;}

#Coursedd{width:70%;
		 font-family:Verdana, Geneva, sans-serif;
		 font-size:22px;
		 color:#333;
		 box-shadow: 2px 2px 2px 2px #99FF99;
		 margin-left:13%;
		 padding-left:20px;
		 height:250px;
		 padding-top:8px;
		 margin-bottom:30px;
		 }  
#Coursedd p ,Coursedd h5 {display:inline;}	
#footer1{
	width:100%;
	height:170px;
	
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
	border-radius:0px 0px 4px 4px;
	}	
#error{margin-top:10%;}
@media only screen and (min-width:1350px) and (max-width:1380px){
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
		document.getElementById('userimg').src="user/"+user+".jpg";
		//document.getElementById('addidlink').href="user.php?username="+user;
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
<header> <img src="photoes/nsbm.jpg" alt='Logo'><div><h3> NSBM GREEN UNIVERSITY LERNING MANEGEMENT SYSTEM</h3></div>
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
<?php

$username=$log_username;

$host='localhost';
$connect=mysqli_connect($host,'root','','nsbm_lms_2016');

$sql = "SELECT first_name ,last_name, address, tel_no, course_name, course_details ,email ,country FROM login WHERE username='$username' "; 

$user_query = mysqli_query($connect, $sql);

$numrows = mysqli_num_rows($user_query);
if($numrows < 1){
	echo "That user does not exist or is not yet activated, press back";
    exit();	
}

while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$firstname = $row["first_name"];
	$lastname = $row["last_name"];
	$address = $row["address"];
	$tel_no = $row["tel_no"];
	$coursename = $row["course_name"];
	$coursedetails=$row['course_details'];
	$email=$row["email"];
	$country = $row["country"];
}

?>

   <center> <div id="username"><p><?php echo $firstname; ?>&nbsp;&nbsp;<?php echo $lastname; ?></p></div> </center>
   <center><div id="userimgdiv"><img src="#" id="userimg"></div></center><br>
   <div id="error">
   <div id="country"><p><h5>Country</h5> &nbsp;: &nbsp; &nbsp; <?php echo $country; ?></p></div>
   <div id="address"><p><h5>Address</h5> &nbsp;:&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $address; ?></p></div>
   <div id="E-mail"><p><h5>E-mail</h5> &nbsp;&nbsp;&nbsp;: &nbsp; &nbsp; <?php echo $email; ?></p></div>
   <div id="Telephone"><p><h5>Telephone number</h5> &nbsp; :&nbsp; &nbsp;<?php echo $tel_no; ?></p></div>
   <div id="Course"><p><h5>Course title</h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; &nbsp;<?php echo $coursename; ?></p></div>
   <div id="Coursedd"><p><h5>Course details&nbsp;&nbsp; :</h5> &nbsp; &nbsp; &nbsp;<?php echo $coursedetails; ?></p></div></div>
<footer id="footer1"><img src="banner-logos.png" id="footerimg" alt="footerlogo"/> </footer>
<footer id="footer2">Copyright © 2016 National School of Business Management. All Rights Reserved.</footer>
</body>
</html>