<?php
echo 'welcome'.' '.$_POST['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="phpInput.php" method="post">
	Name: <input type="text" name="username"><br>
	<input type="submit" name="btn">
	</form>
</body>
</html>