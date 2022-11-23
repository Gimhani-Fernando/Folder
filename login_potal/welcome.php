<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome page</title>
</head>
<body>
<?php
function Redirect($url)
{
    header('Location: ' . $url, true);

    exit();
}
/*
session_start();
if (isset($_SESSION['loggedusername'])){
    $loggeduser=$_SESSION['loggedusername'];
}*/
include "connect.php";

if(isset($_REQUEST['logout'])){
    setcookie("user","",-100);
    echo "<h3>Thank you for visiting us. <br><a href='index1.php'>Go back</a>";
    Redirect('index1.php');

}
else if (isset($_COOKIE["user"])){
    echo "<h2> Hello ".$_COOKIE["user"]."<br> Welcome to site</h2>";
    echo "<br><br><br><a href='welcome.php?logout=True'>Logout</a>";
}
else{
    echo "No user";
    echo "<h3><a href='index1.php'>Go back</a>";
}
/*
if(isset($_REQUEST['uname'])){
    echo "Hello User <h2>";
    echo $_REQUEST['uname'];
    echo "</h2>";
}
else{
    echo "No user";
    echo "<h3><a href='index.php'>Go back</a>";
}*/


  
?>
   <h3><a href='index1.php'>Home page</a></h3> 
</body>
</html>