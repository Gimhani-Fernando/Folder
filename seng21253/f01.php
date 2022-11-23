<?php
    if(isset($_REQUEST["txtuname"]))
    $un=$_REQUEST["txtuname"];
        echo $un;
    $gender= $_REQUEST["selGender"];
        echo "<br>".$gender;
    $year=$_REQUEST["year"];
        echo "<br>".$year;
    $red=$_REQUEST["red"];
        echo "<br>".$red;
    $yellow=$_REQUEST["yellow"];
        echo "<br>".$yellow;
    $hid=$_REQUEST["hid"];
        echo "<br>".$hid;
?>
<html>
<head>
    <title>Working with forms</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get"><!--method="get" difference is ...--><!--if want to print in work01.php page action="work01.php"-->
        Username: <input type="text" name="txtuname" />
        <select name="selGender">
            <option value=1>Male</option>
            <option value=2>Female</option>
            <option value=3>Other</option>
        <input type="radio" name="year" value=2020>2020
        <input type="radio" name="year" value=2021>2021
        <input type="radio" name="year" value=2022>2022

        <input type="checkbox" name="red" />Red Color
        <input type="checkbox" name="yellow" />Yellow Color
        <input type="hidden" value="2255" name="hid">
        <input type="submit" name="submit" value="click me" />

    </form>
    <br>
    <a href="second.php?id=12356&name=gimhani">Second Page</a>
</body>
</html>