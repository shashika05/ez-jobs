<?php
$servername = "localhost";
$username = "mysqluser";
$password = "your-password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error($conn));
} else {
	echo "<script>console.log('DB connected successfully')</script>";
}
