<?php

$servername="localhost:3307";
$username="username";
$password="password";
$database="sarthak";

$conn= mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    echo"  connection failed <br>";
}
else{
    echo"connection successful <br>";
echo"database connected <br>";
    
}

$sql="CREATE TABLE `sb1` (`id` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT NOT NULL , PRIMARY KEY (`id`))";


$result= mysqli_query($conn, $sql);

if($result){
    echo(" the table was crested successfully<br>");
}
else{
    echo"Table couldn't be created";
}



?>