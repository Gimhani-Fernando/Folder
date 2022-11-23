<?php
    if(isset($_REQUEST["er"])){
        $error=$_REQUEST["er"];
        if($error==1){
            echo "user name already exists......";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HTML5 Login form with validation Example</title>
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0/n..-->
        <script>
        </script>
    </head>
    <body>
        <form action="action_page.php" style="border:1px solid #ccc">
        <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <p>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" id="username" name="username" required>
        </p>

        <p>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" id="password" name="psw" required>
        </p>

        <p>
        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        </p>

        <p>
        <div class="clearfix">
        <button type="submit" name="submit" value="Register">Sign Up</button>
        </div>
        </p>
    </div>
    </form>
    </body>

</html>