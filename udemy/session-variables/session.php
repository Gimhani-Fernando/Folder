<?php
    session_start();
    //$_SESSION['username']="gimciferd";
    if($_SESSION['email']){
        echo "You are logged in!";
    }else{
        header('Location: index.php');
    }
?>