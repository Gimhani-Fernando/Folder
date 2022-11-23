<?php
include "conn.php";

//$sql="select * from olympic where country='USA'";//use olympic table from the internet

$country="kent";
$sql="select * from employee where country='".$country."'";

echo $sql."<br>";

$stmt=$con->prepare($sql);
$stmt->execute();
$list=$stmt->fetchall();

?>
<table border=1>
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Country</th>
    </thead>
    //var_dump($list);


<?php
foreach($list as $r){
    //echo $r['id']."-".$r['name']."<br>";
    echo "<tr>
    <td>".$r['first_name']."</td>
    <td>".$r['last_name']."</td>
    <td>".$r['country']."</td>
    </tr>";
}
?>
</table>





