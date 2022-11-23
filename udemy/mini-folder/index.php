<?php
    $error ="";
    $successMessage = "";

    if($_POST){
        if(!$_POST["email"]){
            $error .= "An email address is required<br>";
        }
        if(!$_POST["content"]){
            $error .= "The content field is required.<br>";
        }
        if(!$_POST["subject"]){
            $error .= "The subject is required.<br>";
        }
        if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
            $error .= "The email address is invalid.<br>";
        }

        //check if there are errors

        if($error != ""){
            $error = '<dib class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>'. $error.'</div>';
        }else{//email is good
            $emailTo = "gimcifer@gmail.com";
            $subject = $_POST['subject'];
            $content = $_POST['content'];
            $headers = "From: ".$_POST['email'];

            //try sending the mail
            if(mail($emailTo, $subject,$content,$headers)){
                $succesMessage = '<div class="alert alert-success" role="alert>Your message was sent'.
                                'we\'ll get back to you ASAP!</div>';
            }else{
                $error = '<div class="alert alert-danger" role="alert">Your message couldn\'nt be sent - try again later</div>';
            }
        }
    }//end-if $_POST
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
              rel="stylesheet" 
              integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
              crossorigin="anonymous">
              
        <title>Contact form</title>
        <style type="text/css">
            
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Get in touch!</h1>
            <div id="error"><?php echo $error.$successMessage; ?></div>
            <form method="post">
                <fieldset class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                    <small class="text-muted">We'll never share your email with anyone else.</small>
                </fieldset>

                <fieldset class="form-group">
                    <label for="subject">Subject</label>
                    <input type="ext" class="form-control" id="subject" name="subject">
                </fieldset>

                <fieldset class="form-group">
                    <label for="exampleText">What would you like to ask us?</label>
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                </fieldset>
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                   
            </form><!--end of the form-->
        </div><!--end of container div-->

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" 
                integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" 
                crossorigin="anonymous">
        </script>

        <script type="text/javascript">
            $("form").submit(function(e){
                let error="";
                if($("#email").val()==""){
                    error += "the email field is required <br>";
                }
                if($("subject").val()==""){
                    error += "The subject field is required<br>";
                }
                if($("content").val()==""){
                    error+="The content field is required.<br>";
                }
                //test if there was an error or not

                if(error != ""){
                    $("#error").html('<div class="alert-danger"' +
                    'role="alert"></p><strong>There were error(S) in your form:</strong></p>'+ error +'</div>');
                    return false;
                }else{//no errors
                    return true;
                }//end if-else
            });
        </script>
    </body>

</html>