<?php
$servername = "localhost:3307";
$username = "username";
$password = "password";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "Connected successfully";

}

//Creating a database:

$sql = "CREATE DATABASE sb4";
$result = mysqli_query($conn, $sql);
 if($result){
    echo "The db was created successfully <br>";
 }
 else{
    echo"The database was not created successfully";
 }


?>



