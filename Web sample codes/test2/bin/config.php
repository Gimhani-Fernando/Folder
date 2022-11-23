<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "seng21253";
$conn='';
// Create connection
try{
   $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=UTF8","$username","$password");
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   die('Unable to connect with the database');
}



?>
