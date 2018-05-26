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
$Date=$_POST['Date'];
$Model_No=$_POST['Modelno'];
$Degree=$_POST['Degree'];
$Start_Time=$_POST['Starttime'];
$End_Time=$_POST['Endtime'];
$Hall_No=$_POST['Hallno'];

$sql = "INSERT INTO event_table(date,degree,model_no,start_time,end_time,hall_no)
VALUES ('$Date','$Degree','$Model_No','$Start_Time','$End_Time','$Hall_No')";
if (mysqli_query($conn, $sql)) {

echo "<script>
alert('Created Successfully');
window.location.href='../Timetable.html';
</script>";
} else {
  echo "<script>
alert('Fail');
window.location.href='../Timetable.html';
</script>"; 

//. $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>