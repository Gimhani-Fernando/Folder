<?php
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "users_db";

    try{
        $con = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$dbpass);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Database connection failed");
    }

    //$sqlInsert = "INSERT INTO users (email,password) VALUES ('another@gmail.com','sniggles123')";
    //$sqlUpdate = "UPDATE users SET password = 'ninja123' WHERE email = 'gimcifer@gmail.com' LIMIT 1";
    $name = "Gimci F'erd";

    $sql = "SELECT email FROM users WHERE name = ? ";

    //$stmt=$con->prepare($sqlUpdate);
    //$stmt->execute();

    $stmt=$con->prepare($sql);
    $stmt->execute(array($name));
    $list=$stmt->fetchall();
    foreach($list as $row){
        echo $row['email'];
    }
?>
