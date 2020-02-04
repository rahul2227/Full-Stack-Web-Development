<?php
include('second.php');
// include_once('second.php');
// require('second.php');
// require_once('second.php');
?>


<?php
if (isset($_POST['btn'])) {
	echo 'Dear, '.' ' .$_POST['username'].' you are Welcome.'.'<br>';
$username = $_POST['username'];
$age = $_POST['age'];
$contact = $_POST['contact'];
$emailid = $_POST['emailid'];

	$sql = "INSERT INTO 'users' (name, age, contact, email) VALUES ('$username', '$age', '$contact', '$emailid')";
	mysqli_query($conn, $sql);
}
else
{
	echo "Welcome Guest";
}
?>
