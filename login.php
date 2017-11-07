<?php

header('Access-Control-Allow-Origin: *');

//$_GET['fname']="onlyfirdaus";
//$_GET['fpass']="asiafone303";


$username = $_GET['fname'];
$password = $_GET['fpass'];
$con=mysqli_connect("localhost","id3302116_onlyone","asiafone303","id3302116_pronline");
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$qz = "SELECT id FROM members where username='".$username."' and password='".$password."'" ; 
$qz = str_replace("\'","",$qz); 
$result = mysqli_query($con,$qz);
while($row = mysqli_fetch_array($result))
  {
  echo $row['id'];
  }
mysqli_close($con);
?>