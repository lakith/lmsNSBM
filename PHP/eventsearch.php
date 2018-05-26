<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventmanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get values from form 
$event_id=$_GET['EventID'];
$sql = "SELECT * FROM event WHERE event_id LIKE '$event_id'";
$result= mysqli_query($conn,$sql);
$row=mysqli_num_rows($result);
if($row>0){
	while ($row = mysqli_fetch_array($result)) {
  
	echo json_encode($row);
	}	
}
else{
$row = ['','','','','',''];
echo json_encode($row);
}
mysqli_close($conn);
?>












