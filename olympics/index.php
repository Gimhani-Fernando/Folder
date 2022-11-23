<?php
include "conn.php";
if(isset($_REQUEST["txtcountry"])){
    $country=$_REQUEST["txtcountry"];    
}
$sql="select * from employee where country='".$country."'";

$stmt=$con->prepare($sql);
$stmt->execute();
$list=$stmt->fetchall();

?>

<html>
<head>
<title> Employees </title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get">
        Enter a country: <input type="text" name="txtcountry">
        <input type="submit" name="submit" value="search"/>
    </form>
    <table border=1>
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company</th>
        <th>Address</th>
        <th>City</th>
        <th>Country</th>
        <th>Postal</th>
        <th>Phone</th>
        <th>Email</th>
    </thead>
    <?php
        foreach($list as $r){
            echo "<tr>
            <td>".$r['first_name']."</td>
            <td>".$r['last_name']."</td>
            <td>".$r['company']."</td>
            <td>".$r['address']."</td>
            <td>".$r['city']."</td>
            <td>".$r['country']."</td>
            <td>".$r['postal']."</td>
            <td>".$r['phone']."</td>
            <td>".$r['email']."</td>
            </tr>";
        }
    ?>
    </table>
</body>
</html>