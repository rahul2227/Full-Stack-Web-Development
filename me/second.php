<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'cseb2020';

$conn = mysqli_connect($hostname, $username, $password, $databaseName);

if($conn){
	echo 'Connection successfull'.'<br>';
} 
else {
	echo 'Connection failed!!' + mysqli_connect_error();
}
?>