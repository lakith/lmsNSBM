<?php

$host = "localhost";
$username="root";
$db="nsbm_lms_2016";
$connect = mysqli_connect($host,$username,'',$db);

if($connect -> connect_error){
	
	die("Could not connect to the server");
}

$username=$_POST['username'];
$password= md5($_POST['password']);
$first_name=$_POST['First_name'];
$last_name=$_POST['Last_name'];
$address=$_POST['Address'];
$tel_no=$_POST['Telephone_number'];
$course_title=$_POST['Course_title'];
$email=$_POST['E_mail'];
$course_details=$_POST['course_details'];
$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
$country = $_POST['Country'];

$sql3 = "INSERT INTO login (username,password,first_name,last_name,address,tel_no,course_name,course_details,ip,email,country)
		 VALUES('$username','$password','$first_name','$last_name','$address','$tel_no','$course_title',
		 '$course_details','$ip','$email','$country')";
		 
if(mysqli_query($connect,$sql3)){
	
	echo "Data inserted successfully";
	
	}
else{
	die ("Data does not inserted successfully!!");
	}


?>
