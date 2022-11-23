<?php
    session_start();
    include("connection.php");
    include("signup.html");
    $error ="";
    $successMessage = "";

    $sql = "SELECT * FROM users";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $list=$stmt->fetchall();

    $readyToDB = false;
    $sqlInsert = "INSERT INTO users(email,password) VALUES ('".$_POST['email']."','".$_POST['password']."')";

    if($_POST){
        if(!$_POST["email"]){
            $error .= "An email address is required<br>";
        }
        if(!$_POST["password"]){
            $error .= "The password field is required.<br>";
        }
        if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
            $error .= "The email address is invalid.<br>";
        }
        //check if there are errors

        if($error != ""){
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>'. $error.'</div>';
        }else{//All good
            $readyToDB = true;
        }
    }

    if($readyToDB){
        foreach($list as $row){
            if($row['email']==$_POST['email']){
                $error .= "An email address already exist<br>";
                $readyToDB = false;break;
            }
        }
        if($readyToDB){
            $stmt = $con->prepare($sqlInsert);
            $stmt->execute();
            $_SESSION['email'] = $_POST['email'];
            header('Location: session.php');
            $successMessage = '<div class="alert alert-success" role="alert">signup was successful'.
                                '</div>';
        }
    }
    echo $error.$successMessage; 
?>
