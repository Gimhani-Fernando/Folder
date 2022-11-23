<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact Information</title>
    </head>
    <body>
        <h1>Contact Information</h1>
        <?php
            session_start();
            $name=$_SESSION['s_name'];
            echo $name;
        ?>
    </body>
</html>