<?php

if(isset($_REQUEST["submit"])){

    $name   =   $_REQUEST["username"];
    $passwd =   $_REQUEST["password"];

    echo $name;
    echo $passwd;

    $str = "Hello";
echo md5($str);
   //s header("Location:index.php?er=1");
}
/*
1. Connection to the DB

*/
//include "setting.php";




/*
2.Check the username is exsits or not
    a. Exsits-Return to the main page and display error
    b. Not-Insert query


    $sql="select from user username='".$username."'"

    if(result->fetch_row_num()>0)
    {

        header("Location:index.php?er=1");
    }esle{

        $sql="Isert into user set username=$username, password=md5($passwd)";
        header("Location:index.php?er=9");
    }


/*
3. Return to the login.php file


*/



?>