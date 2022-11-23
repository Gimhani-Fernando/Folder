<?php
$servername="localhost";
$username="root";
$password="";
$db="signup";

//Connection
$conn=new mysqli($servername,$username, $password);

//for checking if connection is succesful or not
if ($conn->connect_error){
    die("Connection failed: "
        . $conn->connect_error);
}

echo "Connected successfully!";

?>