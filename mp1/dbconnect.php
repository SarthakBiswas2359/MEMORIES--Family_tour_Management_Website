<?php

$servername="localhost:3307";
$username="username";
$password="password";
$database="sarthak";

$conn=mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo "connection was successful";
}
else "Apologies!!! We failed to connect.. ";


?>