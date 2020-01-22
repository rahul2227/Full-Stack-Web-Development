<?php
include('second.php');
// include_once('second.php');
// require('second.php');
// require_once('second.php');
?>


<?php
if (isset($_POST['btn'])) {
	echo 'Dear, '.' ' .$_POST['username'].' your details are :='.'<br>';
echo $_POST['id'].'<br>';
echo $_POST['Age'].'<br>';
echo $_POST['Contact'].'<br>';
echo $_POST['emailid'].'<br>';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Input Form</title>
</head>
<body>
	<form action="phpInput.php" method="post">
	ID: <input type="text" name="id" placeholder="Enter ID"><br>
	Name: <input type="text" name="username" placeholder="Enter Name"><br>
	Age: <input type="text" name="Age" placeholder="Enter Age"><br>
	Contact: <input type="text" name="Contact" placeholder="Enter Contact"><br>
	email: <input type="text" name="emailid" placeholder="Enter emailID"><br>
	<input type="submit" name="btn">
	</form>
</body>
</html>