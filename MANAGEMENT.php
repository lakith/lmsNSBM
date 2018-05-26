<!doctype html>
<html>
<head>
<meta charset="utf-8">
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

#topic {font-family:fontawesome;
		  text-shadow: 2px 3px #99FF66;
		  font-size:36px;
		  color:#0000
		 }

#imgdiv {
		 position:absolute;
		 width:99%;
		 margin-top:-5px;
		 }

#divimg{
	margin-left:21%;
	margin-top:3px;
	box-shadow: 1PX 1px 1px 2px #99FF99;
   }
button{
	display:block;
	margin-top:15px;
	width:250px;
	height:60px;
	box-shadow: 1PX 1px 1px 1px #99FF99;
	text-align:center;
	font-size:18px;
	
	}
#divbutton{
	margin-top:41%;
	width:300px;
	margin-left:40%;
	position:absolute;
	
	}
	.button {
  display: inline-block;
  border-radius: 4px;
  background-color:#CCC;
  border: none;
  color:#333;
  text-align: center;
  font-size: 26px;
  padding: 20px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
	#footer1{
	width:99%;
	height:170px;
	margin-top:85%;
	position:absolute;
	margin-bottom:15px;
	}
	#footer1 img{
		width:100%;
		border-radius: 0px 0px 3px 3px;
		height:170px;
		box-shadow:1PX 1px 1px 2px rgba(0,0,0,0.20);
		}
	#footer2{
	height:30px;
	background-color:#333;
	color:#999;
	position:absolute;
	margin-top:98.9%;
	border-radius:0px 0px 5px 5px;
	width:99%;
	text-align:center;
	margin-bottom:3px;
	
	}
	
	#events{
	position:absolute;
	width:30%;
	height:505px;
	margin-top:41.3%;
	margin-left:5%;
	box-shadow: 2px 2px 2px 2px #99FF99;
	float:left;}
	
	#events div h2 { text-align:center;
					 color:#FFF;
					 font-family:fontawesome;
					 font-weight:300;
					 font-size:24px;
					
					
					}
	
	#events div{ background-color:#008000;
				 margin-top:-3.6%;
				}
				
	#events p {padding:10px;}
	
	#announcement{
	position:absolute;
	width:30%;
	height:505px;
	margin-top:41.3%;
	margin-left:5%;
	box-shadow: 2px 2px 2px 2px #99FF99;
	float:right;
	margin-left:65%;
	}
	#announcement div{ background-color:#008000;
				      margin-top:1%;
					  padding-top:0.1%;
					  padding-bottom:0.1%;
				}
	#announcement div h2 { text-align:center;
						 color:#FFF;
						 font-family:fontawesome;
						 font-weight:300;
						 font-size:24px;
						 padding-top:-20px;
						}
	#announcement p {padding:10px;}
	
	#addidimg{display:none;}

#addidlink{display:none;}

#innerhtml{display:none;
		   margin-top:-2%;
		   margin-bottom:4px;
		   
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
.dropbtn {
    background-color: #008000;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width:90%;
}

.dropbtn {
    background-color: #008000;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width:400px;
	height:80px;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position:absolute;
    display: inline-block;
	margin-top:40.3%;
	margin-left:5%;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#CFF;
    min-width: 400px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}

.dropbtn1 {
    background-color:  #008000;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width:400px;
	height:80px;
}

.dropbtn1:hover, .dropbtn1:focus {
    background-color: #3e8e41;
}

.dropdown1 {
    position: relative;
    display: inline-block;
	float:right;
	margin-top:41%;
	margin-right:3%;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color:#CFF;
    min-width: 400px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content1 a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown1 a:hover {background-color: #f1f1f1}

.show {display:block;}

@media only screen and (min-width:1350px) and (max-width:1380px){
	#footer2{
	height:30px;
	background-color:#333;
	color:#999;
	position:absolute;
	margin-top:97.9%;
	border-radius:0px 0px 5px 5px;
	width:99%;
	text-align:center;
	margin-bottom:3px;
	
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
#divimg{
	margin-left:23%;
	margin-top:3px;
	box-shadow: 1PX 1px 1px 2px #99FF99;
   }

}
						
</style>
<title>SCHOOL OF MANAGEMENT</title>
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
<header> <img src="photoes/nsbm.jpg" alt='Logo'><div><h3> NSBM GREEN UNIVERSITY LERNING MANEGEMENT SYSTEM</h3></div>
  <div id="header_div1"><marquee> <h4>  Recognizing the trends in technology and globalization, NSBM has designed an alternative and innovative approach to higher education to prepare young people to face new challenges of the world. As a degree school which enables its students to experience the future of higher education NSBM is encouraging their students to deal with sophisticated technology throughout their academic life. “e-Learning Management System” is the novel initiative taken up by NSBM to give hi-tech exposure to the students in order to pursue their studies in virtual terms. Through this learning process learners can communicate with their lecturers, their peers, and access learning materials, over the Internet or other computer networks. This area provides you with a wealth of information and resources designed to enrich student’s experience at NSBM. From information on registration, fees and exams to student support services and who to contact for academic advice, you’ll find it all here in one place.</h4></marquee></div>
</header>
<!--<center>-->
<nav>
	<ul>
   
    	<li id="headerhome"><a href="Home.php">Home</a></li>
        <li><a href="about us.php">About us</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="support.php">Support</a></li>
        <li><a href="#">Events</a></li>
        <div id="hidehide"><h5 id="hideid"></h5><form method="post" action="logout.php" id="hideform"><button type="submit" >Log out</button></form></div>
        <div id='inside'><p id="inside_p">You are not logged in(<a href="login.php" id="inside_anchar">Log In</a>)</p></div>
    </ul>
</nav>
<center><div><h1 id='topic'>SCHOOL OF MANAGEMENT</h1></center>
<br>
<div id="imgdiv"><img id="divimg" src="photoes/14590482_1237434862989620_1755764218109854337_n.jpg"/></div>

<div class="dropdown">
<button onclick="myFunction()" class="dropbtn">SPECIAL EVENTS IN SCHOOL OF MANAGEMENT</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="#home">machine intelligance</a>
    <a href="#about">JS Meetup</a>
    <a href="#contact">Java meetup</a>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<div class="dropdown1">
<button onclick="myFunction2()" class="dropbtn1">SPECIAL ANNOUNCEMENTS</button>
  <div id="myDropdown1" class="dropdown-content1">
    <a href="#home">You dress should be formal.</a>
    <a href="#about">you should be on lectures at the perticuler time.</a>
    <a href="#contact">You should bring your NSBM id when you are comming to the NSBM premises.</a>
  </div>
</div>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction2() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {

    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>


<div id="divbutton">
<a href="MANAGEMENT_SUB.php"><button class="button" style="vertical-align:middle" name="year0"><span> PGD</span> </button></a>
<a href="MANAGEMENT_SUB.php"><button class="button" style="vertical-align:middle" name="year1"><span> UCD </span> </button></a>
<a href="MANAGEMENT_SUB.php"><button class="button" style="vertical-align:middle" name="year2"><span> UGC </span></button></a>
<a href="MANAGEMENT_SUB.php"><button class="button" style="vertical-align:middle" name="year3"><span> MSC </span></button></a>
<a href="MANAGEMENT_SUB.php"><button class="button" style="vertical-align:middle" name="year4"><span> Foundation </span> </button></a>
<a href="computer_pgd.php"><button class="button" style="vertical-align:middle" name="pgd"> <span> PLYMOUTH</button></a>
</div>

<footer id="footer1"><img src="banner-logos.png" id="footerimg" alt="footerlogo"/> </footer>
<footer id="footer2">Copyright @ National School of Business Management No 309, High Level Road, Colombo 05, Sri Lanka. 
Telephone: +94(11) 567 2545|5673535 - Email:info@nsbm.lk</footer>
</body>
</html>
