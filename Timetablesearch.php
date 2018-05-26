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
$Date=$_GET['Date'];
$Model_No=$_GET['Modelno'];
$sql = "SELECT * FROM event_table WHERE date LIKE '$Date' AND model_no LIKE '$Model_No'";

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


