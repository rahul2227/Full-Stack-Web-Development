<?php
include('config.php');
?>

<?php
$id = $_GET['id'];
echo "Id to be updated is - ".$id;

$sql = "SELECT * FROM `users` WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);
// if($result)
//   echo"abc";
// else
//   echo "jah";

if($data = mysqli_fetch_assoc($result))
{
$username = $data['name'];
$age = $data['age'];
$contact = $data['contact'];
$email = $data['email'];
}
// else
//   echo "abc";
?>
<?php
 
  if(isset($_POST['btn']))
  {

  }

?>

<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="edit.php" method="post">
      Name: <input type="text" name="username" value= "<?php echo $username; ?>" ><br>
      Age:<input type="text" name="age" placeholder="Enter Age" value= "<?php echo $age; ?>" ><br>
      Contact:<input type="text" name="contact" placeholder="Enter contact" value= "<?php echo $contact; ?>" ><br>
      Email: <input type="email" name="email" placeholder="Enter email" value= "<?php echo $email; ?>" ><br>
      <input type="submit" name='btn' value="Update">
    </form>
    </body>
</html>