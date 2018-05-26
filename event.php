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
$event_id=$_POST['EventId'];
$event_name=$_POST['EventName'];
$date=$_POST['Date'];
$start_time=$_POST['Start'];
$end_time=$_POST['End'];
$location=$_POST['Location'];

$sql = "INSERT INTO event(event_id,event_name,date,start_time,end_time,location)
VALUES ('$event_id','$event_name','$date','$start_time','$end_time','$location')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>