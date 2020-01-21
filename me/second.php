<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$databaseName = 'cseb2020';

if(mysqli_connect($hostname, $username, $password, $databaseName)){
	echo 'Connection successfull';
} 
else {
	echo 'Connection failed!!' + mysqli_connect_error();
}
?>