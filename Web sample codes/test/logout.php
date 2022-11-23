<?php
include('bin/config.php');
// start a session
session_start();
  

  
unset($_SESSION);

  

session_destroy();

header("Location: login.php");
?>