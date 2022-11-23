<?php
    include('bin/config.php');

    $sql ="insert into login (username,password,role) values ('nalin','".md5('1234')."','admin')";
    $stmt = $conn->prepare($sql);

    $stmt->execute();

?>