<?php
 
//MySQLi Procedural
$conn = mysqli_connect("192.168.100.37","dev","dev123;","sample");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>