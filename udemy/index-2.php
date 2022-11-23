<?php
    if($_POST){
        $family = array("Henry","Ellen","John","Gim");
        $isKnown = false;
        foreach($family as $value){
            if($value==$_POST['name']){
                $isKnown = true;
                break;
            }
        }
        if($isKnown){
            echo "Hi there, ".$_POST['name']."!";
            if($_POST['age']){
                echo "<br>You are ".$_POST['age']." years old.";
            }
        }else{
            echo "I don't know you!";
        }
    }else{
        echo "Enter proper values";
    }//if post exists
?>

<form method="post">
    <p>What is your name?</p>
    <p><input type="text" name="name"></p>
    <p>What is your age?</p>
    <p><input type="text" name="age"></p>
    <p><input type="submit" value="Submit"></p>
</form>