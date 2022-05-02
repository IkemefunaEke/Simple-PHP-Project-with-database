<?php
    if ($delete) {
        //include 'db_IE.php';
        $conn = new mysqli($server, $username, $password, $database);
        $query = "DELETE FROM music_IE WHERE id='".$id."'";
        $conn->query($query);
        $conn->close();
    }
?>