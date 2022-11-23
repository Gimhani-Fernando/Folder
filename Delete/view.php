<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>View Information</title>
    </head>
    <body>
        <h1>View Information</h1>
        <?php
            if(isset($_REQUEST['submit'])){
                $name=$_REQUEST['txtname'];

                session_start();
                $_SESSION['s_name']=$name;
                header('Location:info.php');
            }
        ?>
    </body>
</html>