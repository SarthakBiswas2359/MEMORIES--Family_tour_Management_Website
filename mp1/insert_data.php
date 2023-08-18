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

$sql= "INSERT INTO `sb1` (`id`, `name`, `age`) VALUES ('2', 'Rizuta', '20')";


$result= mysqli_query($conn, $sql);

if($result){
    echo(" the data wa recorded successfully<br>");
}
else{
    echo"Data couldn't be recorded";
}



?>