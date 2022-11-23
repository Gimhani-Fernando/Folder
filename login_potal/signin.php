
<?php
function Redirect($url)
{
    header('Location: ' . $url, true);
    exit();
}
include "connect.php";
    if (isset($_COOKIE["user"])){
        echo "User exist";
        echo "<a href='welcome.php?'>Click me</a>";
        Redirect('welcome.php');
    }
    else if(isset($_POST['submit'])){
        $uname=$_POST['uname'];
        $pass=$_POST['pw'];
        $sql="select  * from user where username='{$uname}'";
        $statement=$connect->prepare($sql);
        $statement->execute();
        $result_count=$statement->rowCount();
        if ($result_count>0){
            $list1=$statement->fetch();
            $pw=$list1['password'];
            if ($pw==$pass or $pw==md5($pass)){
                //echo "<a href='welcome.php?uname=$uname'>Click me</a>";
                setcookie("user",$uname);
                echo '        <html lang="en">
                <head>
                    <title>Sign in</title>
                </head>
                <body>';
                echo "Login success";
                echo "<a href='welcome.php?'>Click me</a>";
                Redirect('welcome.php');
            }
            else{
                echo '        <html lang="en">
                <head>
                    <title>Sign in</title>
                </head>
                <body>';
                echo "Wrong password";
            }
        }
        else{
            echo "Invalid User";
        }
        
        //var_dump($statement->fetchAll());
    }
    else {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Sign in</title>
        </head>
        <body>
        <form style="border:1px black solid;width:400px;" action="signin.php" method="post">
        <table style="text-align:right">
            <tr style="text-align:center">
                <th colspan="2"><h1>Sign In</h1></th>
            </tr>
            <tr>
                <th>
                    User Name :
                </th>
                <td>
                    <input type="text" id="uname" name="uname" size="20" placeholder="User name">
                </td>
            </tr>
            <tr>
                <th>
                    Password :
                </th>
                <td>
                    <input type="password" id="pw" name="pw" size="20">
                </td>
            </tr>
            <tr>
                <th colspan="2" style="text-align:center">
                <input type="checkbox" id="remember" name="remember">
                Remember Login
                </th>
            </tr>
            <tr>
                <th colspan="2" style="text-align:center">
                    <input type="submit" name="submit" value="Sign In">
                </th>
            </tr>

        </table>
        </form>';
    }
    
?>    
<h3><a href='index1.php'>Home page</a></h3> 
</body>
</html>