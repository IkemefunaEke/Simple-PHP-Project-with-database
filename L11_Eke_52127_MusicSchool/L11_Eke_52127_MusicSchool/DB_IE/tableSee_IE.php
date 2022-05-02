<?php
    $conn = new mysqli($server, $username, $password, $database);
    $query = "SELECT * FROM music_IE";
    $rs = $conn->query($query);
    $conn->close();
    $num = $rs->num_rows;
?>