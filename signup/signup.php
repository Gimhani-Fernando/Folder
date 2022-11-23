<?php
$_isset($_REQUEST["submit"]){
    $name   = $_REQUEST["username"];
    $passwd = $_REQUEST["password"];

    echo $name;
    echo $passwd;
    header("Location:index.php?er=1");
}


/*
1. Connection to the DB
*/
//include setting.php

/*
2. Check the username is exists or not
    a. Exists-Return to the main page and display error
    b. Not-insert query
*/
$sql="select from user username='".$username."' and password='".$passwd."'";

if(result->fetch_row_num()>0){
    
}
/*
3. Return to the login.php file
*/


?>