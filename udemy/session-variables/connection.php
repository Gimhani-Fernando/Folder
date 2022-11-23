<?php
    $host="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="users_db";
    try{
        $con = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$dbpass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Database Connection failed");
    }
?>