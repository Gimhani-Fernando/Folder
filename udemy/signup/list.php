<?php
    include("connection.php");
    $sql="SELECT * FROM users";
    $stmt=$con->prepare($sql);
    $stmt->execute();
    $list=$stmt->fetchall();

    ?>
    <table border=1>
                <thead>
                    <th>Email</th>
                    <th>password</th>
                </thead>
<?php
    foreach($list as $row){
        echo "<tr>
        <td>".$row['email']."</td>
        <td>".$row['password']."</td>
        </tr>";
    }
?>
</table>