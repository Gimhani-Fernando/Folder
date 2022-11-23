<?php 
function redirect($url){
    header("location: ".$url,true);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign up</title>
</head>
<body>
<?php
    include "connect.php";
    if (isset($_COOKIE["user"])){
        echo "Alredy registered";
        redirect("signin.php");
    }
    if(isset($_POST['submit'])){
        $uname=$_POST['uname'];
        $pw1=$_POST['pw'];
        $pw2=$_POST['cpw'];
        $sql="select  * from user where username='{$uname}'";
        $statement=$connect->prepare($sql);
        $statement->execute();
        //var_dump($statement->fetchAll());
        $result_count=$statement->rowCount();
        
        if ($result_count==0){
            if ($pw1==$pw2){
                $pw3=md5($pw1);
                $sql="INSERT INTO user (id,username,password) VALUES (NULL, '{$uname}','{$pw3}')";
                $statement=$connect->prepare($sql);
                $result=$statement->execute();
                if($result){
                    echo "Insert success"; 
                    /* 
                    echo "<br><a href='signin.php'>Login Here</a>"    ; 
                    echo "<a href='welcome.php?uname=$uname'>Click me</a>";*/
                    setcookie("user",$uname);
                    redirect("signin.php");
                }
                
            }
            else{
                echo "password doesn't match. check again";
            }
        }
        else{
            echo "User Already exisit";
        }
    }
    else{
    echo '
        <form style="border:1px black solid;width:400px;" action="signup.php" method="post">
        <table style="text-align:right">
            <tr style="text-align:center">
                <th colspan="2"><h1>Sign Up</h1></th>
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
                <th>
                    Confirm Password :
                </th>
                <td>
                    <input type="password" id="cpw" name="cpw" size="20">
                </td>
            </tr>
            <tr>
                <th colspan="2" style="text-align:center">
                    <input type="submit" name="submit" value="Sign Up">
                </th>
            </tr>

        </table>
        </form>


    ';}
?>  
<h3><a href='index1.php'>Home page</a></h3>   
</body>
</html>