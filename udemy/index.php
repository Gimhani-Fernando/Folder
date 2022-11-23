<?php
    if(ctype_alnum($_GET['number'])){
        $theNumber = $_GET['number'];
        $i = 2;
        $isPrime = true;
        while($i < $theNumber/2){
            if($theNumber % $i ==0){
                $isPrime = false;
            }
            $i++;
        }
        if($isPrime){
            echo "<p>".$theNumber." is a prime number!</p>";
        }else{
            echo "<p>".$theNumber." is not a prime number!</p>";
        }
    }else if($_GET){
        echo "<p>Please enter a positive whole number</p>";
    }
?>

<p>Please enter a whole number.</p>
<form method="GET">
    <input name="number" type="text">
    <input type="submit" value="Go!">
</form>