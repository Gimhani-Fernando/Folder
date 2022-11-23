
<?php
    function redirect($url){
        header('Location: '.$url,true);
        exit();
    }
    include "connect.php";
    if (isset($_POST['submit'])){
        $uname=$_POST['uname'];
        $nuname=$_POST['nuname'];
        $pw=$_POST['pw'];
        $sql="select * from user where username='{$uname}'";
        $statement=$connect->prepare($sql);
        $statement->execute();
        $result_count=$statement->rowCount();
        if ($result_count>0){
            $list1=$statement->fetch();
            if($list1['password']==$pw or $list1['password']==md5($pw)){
                $sql="UPDATE `user` SET `username` = '{$nuname}' WHERE `user`.`username` = '{$uname}';";
                $statement=$connect->prepare($sql);
                if ($statement->execute()){
                    echo "<h3> User name saved </h3>";
                    setcookie("user",$nuname);
                    redirect("index1.php");
                }
                else{
                    echo "error";
                }
                
            }
            else{
                echo "<h3> Wrong password </h3>";
            }
        }
        else{
            echo "<h3> Invalid User </h3>";

        }


    }
    else{
        echo 
    '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit Profile</title>
    </head>
    <body>
    <form style="border:1px black solid;width:400px;" action="settings.php" method="post">
        <table style="text-align:right">
            <tr style="text-align:center">
                <th colspan="2"><h1>Edit profile</h1></th>
            </tr>
            <tr>
                <th>
                    User Name :
                </th>
                <td>
                ';
                if(isset($_COOKIE["user"])){
                    echo '<input type="text" id="uname" name="uname" size="20" placeholder="User name" value='.$_COOKIE["user"].'>';
                }
                else{
                    echo '<input type="text" id="uname" name="uname" size="20" placeholder="User name">';
                }
                echo '
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
                    New User Name :
                </th>
                <td>
                    <input type="text" id="nuname" name="nuname" size="20" placeholder="User name">
                </td>
            </tr>
                <th colspan="2" style="text-align:center">
                    <input type="submit" name="submit" value="Change user name">
                </th>
            </tr>

        </table>
        </form>';}
        ?>
        <h3><a href='index1.php'>Home page</a></h3> 
</body>
</html>