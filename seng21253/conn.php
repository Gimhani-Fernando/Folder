<?php
$server= "localhost";
$dbuser= "root";
$dbpass= "";
$db= "seng21253";

//1st method: mysqli_connect() method
//$con = mysqli_connect(Server, User, Password, DB)
//$con=mysqli_connect("localhost","root","","seng21253") or die("Error");
//$con=mysqli_connect($server, $dbuser, $dbpass, $db);


//2nd method: PDO();
try{
    $con= new PDO("mysql:host=$server;dbname=$db;charset = UTF8",$dbuser,$dbpass);
    $con-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die("Error in connection");
}

if($con){
    echo "connect to the server successfully-PDO!<br>";
    
}

?>