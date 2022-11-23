<?php
$server="localhost";
$dbuser="root";
$dbpass="";
$db="uni";

try{
    $con=new PDO("mysql:host=$server;dbname=$db;charset = UTF8", $dbuser, $dbpass);
    $con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Error in connection");
}

if($con){
    echo "connect to the server successfully!";
}