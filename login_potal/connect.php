<?php
//PDO method
$server="localhost";
$dbuser="root";
$dbpass="";
$dbname="SE1";

try{
    $connect=new PDO("mysql:host=$server;dbname=$dbname;charset=UTF8",$dbuser,$dbpass);
    $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Connected to DB <br>";
}
catch(PDOException $e){
    die("Error in connection<br>");
}
/*$connect=mysqli_connect($server,$dbuser,$dbpass,$dbname) or die;

if ($connect){
    echo "<h1>Database connected</h1>";
}*/
?>