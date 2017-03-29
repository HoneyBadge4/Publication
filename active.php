<html>
<h1>Welcome to NJIT Publication Search Tools </h1><br>

<p>This is the list of active publications: </p>


</html>
<?php
 //echo "test";
$servername = "localhost";
$user_name = "root";
$password = "passwd";
$dbname = "publication_database";
//Connection  to database
//echo "test";
$conn = new mysqli($servername, $user_name, $password, $dbname);
if($conn->connect_error){
   // echo "failed";
} else {
   //echo "worked";
}
    
$sql = 'SELECT * FROM publications WHERE Yearpublished > 2015';
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        //while($row['Yearpublished'] < 2017){
            echo "Topic: " . $row['Title'] . "<br>" . "Principle Investigator: " . $row['PI'] . "<br>" . "Sponsor: " . $row['Prime Agency'] . "<br>" . "<br>";
        //}
    }
}


mysql_close($conn);

?>