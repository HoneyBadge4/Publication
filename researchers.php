<html>
<h1>Welcome to NJIT Publication Search Tools </h1><br>

<p>This is the list of Primary Investigators: </p>


</html>
<?php
 //echo "test";
$servername = "localhost";
$username = "root";
$password = "passwd";
$dbname = "publication_database";
//Connection  to database
//echo "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  //  echo "failed";
} else {
   // echo "worked";
}
    
$sql = "SELECT * FROM publications";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
            echo "Primary Investigators: " . $row['PI'] . "<br>" ;
    }
}


mysql_close($conn);

?>