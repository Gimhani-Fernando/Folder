
<!DOCTYPE html>
    <head>
        <title>Contact form</title>
        <style type="text/css">
            h1{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            #submitButton{
                background-color: blue;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Get in touch!</h1>
        <div></div>
        <form>
            <div>
                <p>Email address</p>
                <p><input type="text" name="email" width="500" value="Enter email"></p>
                <p>We'll never share your email with anyone else</p>
                <p>Subject</p>
                <p><input type="text" name="subject" width="500"></p>
                <p>what would you like to ask us?</p>
                <p><input type="text" name="opinions" width="500" height="300"></p>
                <p><input id="submitButton" type="submit" value="Submit"></p>
            </div>
        </form>
        
    </body>
</html>