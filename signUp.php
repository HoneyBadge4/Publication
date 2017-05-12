<!DOCTYPE html>
<html>
<body>

<?php 
$username = $_POST['user_name'];
$password = $_POST['pwd1'];

$salt = "nalina";
$presaltPass = $salt . $password;
$saltedPass = sha1($presaltPass);
$conn = new mysqli("localhost","root","passwd","publication_database");
// Check connection
if ($conn->connect_error)
  {
	  die("Connection Failed: " . $conn->connect_error);
  }
else
 {
  	$query = "SELECT * FROM publication_login WHERE user_name = '" . $username . "'";
	$result = $conn->query($query);
  if ($result->num_rows > 0) 
  {
     echo "Username alread exist!";
  } 

   else
    {
      $query = "INSERT INTO publication_login (user_id, user_name, password) VALUES (NULL, '$username', '$saltedPass')";
     $conn->query($query);
	header('Location: index.html');
    }
 }		
?>

</body>
</html>



