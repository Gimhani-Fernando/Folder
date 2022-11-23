<?php
function redirect($url){
    header('Location: '.$url,true);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change password</title>
</head>
<body>
<?php
    include "connect.php";
    if (isset($_POST['submit'])){
        $uname=$_POST['uname'];
        $opw=$_POST['opw'];
        $npw=$_POST['npw'];
        $cpw=$_POST['cpw'];
        $sql="select * from user where username='{$uname}'";
        $statement=$connect->prepare($sql);
        $statement->execute();
        $result_count=$statement->rowCount();
        if ($result_count>0){
            $list1=$statement->fetch();
            if($list1['password']==$opw or $list1['password']==md5($opw)){
                if ($npw==$cpw){
                    $npw1=md5($npw);
                    $sql="UPDATE `user` SET `password` = '{$npw1}' WHERE `user`.`username` = '{$uname}';";
                    $statement=$connect->prepare($sql);
                    $statement->execute();
                    echo "<h3> Password Change Success </h3>";
                    redirect("index1.php");
                }
                else{
                    echo "<h3> Confirm password doesn't match </h3>";
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
    '<form style="border:1px black solid;width:400px;" action="changepass.php" method="post">
        <table style="text-align:right">
            <tr style="text-align:center">
                <th colspan="2"><h1>Change password</h1></th>
            </tr>
            <tr>
                <th>
                    User Name :
                </th>
                <td>';
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
                    Old Password :
                </th>
                <td>
                    <input type="password" id="opw" name="opw" size="20">
                </td>
            </tr>
            <tr>
                <th>
                    New Password :
                </th>
                <td>
                    <input type="password" id="npw" name="npw" size="20">
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
                    <input type="submit" name="submit" value="Change Password">
                </th>
            </tr>

        </table>
        </form>';}
        ?>
    <h3><a href='index1.php'>Home page</a></h3> 
</body>
</html>